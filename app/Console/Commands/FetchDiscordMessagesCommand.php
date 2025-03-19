<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Console\Command;

class FetchDiscordMessagesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'discord:fetch-authors';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch all messages from a Discord channel and list all unique author IDs and usernames, with sleep delays to avoid rate limits.';

    /**
     * Execute the console command.
     *
     * @return int
     * @throws GuzzleException
     */
    public function handle()
    {
        $channelId = '1064138064047390740';
        $token = 'OTgzNjQ4NDE0NDY4Mjg4NTEy.GbkBVf.J-iz_3qHaEfDSL2H-7eIFC-oF9K8AJim6Ee7IU';
        $limit = 50;
        $before = null;
        $client = new Client();
        $url = "https://discord.com/api/v9/channels/{$channelId}/messages";

        // Array to store unique authors.
        $authors = [];

        $this->info("Fetching messages from channel {$channelId}...");

        do {
            $queryParams = ['limit' => $limit];
            if ($before) {
                $queryParams['before'] = $before;
            }

            try {
                $response = $client->request('GET', $url, [
                    'headers' => [
                        'Authorization' => $token,
                        'Accept'        => '*/*',
                    ],
                    'query' => $queryParams,
                ]);
            } catch (\Exception $e) {
                $this->error("Request failed: " . $e->getMessage());
                return 1;
            }

            $body = $response->getBody()->getContents();
            $messages = json_decode($body, true);

            if (!is_array($messages)) {
                $this->error("Invalid response received.");
                break;
            }

            // Loop through messages and record unique authors.
            foreach ($messages as $message) {
                if (isset($message['author'])) {
                    $authorId = $message['author']['id'];
                    if (!isset($authors[$authorId])) {
                        $authors[$authorId] = $message['author']['username'];
                    }
                }
            }

            dump($authors);

            // If messages were returned, update the "before" parameter.
            if (count($messages)) {
                $lastMessage = end($messages);
                $before = $lastMessage['id'];
            }

            // Sleep for 1 second (or adjust as needed) to help avoid rate limits.
            sleep(1);

        } while (count($messages) === $limit);

        $this->info("Found " . count($authors) . " unique authors:");
        foreach ($authors as $id => $username) {
            $this->line("ID: {$id} | Username: {$username}");
        }

        return 0;
    }
}
