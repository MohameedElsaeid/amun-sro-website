<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class DownloadFileCommand extends Command
{
    // The command signature (how to call it)
    protected $signature = 'download:file';

    // The command description
    protected $description = 'Download a file from a URL and store it in public/data with a .gitignore file';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // Define the file URL and destination details
        $url = 'https://files.fm/u/vjpcfe5spc';
        $destinationPath = public_path('data');
        $fileName = 'AmunSro.rar'; // Change "ext" to the appropriate extension if needed
        $fullFilePath = $destinationPath . '/' . $fileName;

        // Create the destination directory if it doesn't exist
        if (!is_dir($destinationPath)) {
            mkdir($destinationPath, 0755, true);
            $this->info("Directory created: $destinationPath");
        }

        // Create a .gitignore file in the directory to ignore all files except the .gitignore itself
        $gitignorePath = $destinationPath . '/.gitignore';
        if (!file_exists($gitignorePath)) {
            file_put_contents($gitignorePath, "*\n!.gitignore\n");
            $this->info(".gitignore file created in $destinationPath");
        }

        // Download the file using Laravel's HTTP client
        $response = Http::get($url);

        if ($response->successful()) {
            file_put_contents($fullFilePath, $response->body());
            $this->info("File downloaded successfully to: $fullFilePath");
        } else {
            $this->error("Failed to download the file from: $url");
        }
    }
}
