<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use stdClass;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Global options for the phbot JSON file.
        $globalOptions = [
            "Always On Top" => new stdClass(),
            "Check Manager Updates" => new stdClass(),
            "Client Starting Delay" => 120000,
            "Dark Mode" => new stdClass(),
            "Disconnected Delay" => 60000,
            "FTP" => ["Enabled" => new stdClass()],
            "HTTP" => ["Enabled" => new stdClass()],
            "Login All" => new stdClass(),
            "Login Error Delay" => 1,
            "Minimap Path" => new stdClass(),
            "Not In Game Delay" => new stdClass(),
            "Path" => new stdClass(),
            "Reduce Bot Memory" => new stdClass(),
            "Reduce Silkroad Memory" => new stdClass(),
            "SOCKS" => new stdClass(),
            "Start All" => new stdClass(),
            "Start Delay" => 5000,
            "Start Groups" => new stdClass(),
            "Start Up To" => new stdClass(),
            "Start Up To Count" => new stdClass(),
            "Wait Accounts" => new stdClass(),
            "Wait Groups" => new stdClass(),
        ];

        // Default options for each account entry.
        $defaultAccountOptions = [
            "Bind IP" => true,
            "Bind IP Address" => "",
            "Bot Path" => "",
            "Clientless" => true,
            "Clientless Delay" => 30,
            "Disable Map" => false,
            "Disable Tray" => false,
            "Do Not Start" => false,
            "Force Inject" => false,
            "Hide" => false,
            "Hide Client" => false,
            "Minimize" => true,
            "Reconnect" => true,
            "Return on Login" => true,
            "SOCKS" => "",
            "Start Bot" => false,
            "Start Client" => false,
            "Start Trace" => false,
            "Switch Gateway" => false,
            "Switch Gateway Amount" => 0,
            "Trace Name" => "",
            "Use Bot Path" => false,
        ];

        // Define categories.
        $categories = ['taxi', 'stall', 'traders', 'stay'];
        $accounts = [
            'taxi' => [],
            'stall' => [],
            'traders' => [],
            'stay' => []
        ];

        // Create 200 users and assign each an account for the phbot JSON.
        for ($i = 0; $i < 200; $i++) {
            // Generate a unique raw username and clean it:
            // lowercase and remove any characters that are not a-z or 0-9.
            $rawUsername = $faker->unique()->userName;
            $cleanUsername = preg_replace('/[^a-z0-9]/', '', strtolower($rawUsername));

            // Build an email address from the clean username.
            $email = $cleanUsername . '@example.com';

            // Generate a full name (for the database) and a unique chat name.
            $fullName = $faker->name;
            $chatName = $faker->unique()->firstName;

            // Create the user record in the database.
            $user = User::create([
                'StrUserID' => $cleanUsername,
                'password' => md5('secret'), // MD5 hashed password.
                'Name' => $fullName,
                'Email' => $email,
                'regtime' => now(),
                'reg_ip' => $faker->ipv4,
                // Add any additional fields required by your schema.
            ]);

            // Determine the category based on the current index (50 accounts per category).
            $category = $categories[intdiv($i, 50)];

            // Build the account data structure for phbot JSON.
            // The account is keyed by the cleaned username.
            $accounts[$category][$cleanUsername] = [
                "Character" => $chatName,    // Unique chat name for the user.
                "JC Planet" => false,
                "Locale" => "Private Server",
                "Options" => $defaultAccountOptions,
                "Passcode" => "",
                "Password" => "test",
                "Private Server" => "AmunSro",
                "Profile" => "",
                "Server" => "AmunSro",
                "Username" => $cleanUsername,
            ];
            $accounts[$category][$cleanUsername]['Options']['Bind IP Address'] = $user->reg_ip;
        }

        // Build the final JSON structure.
        $phbotJson = [
            "Accounts" => $accounts,
            "Options" => $globalOptions
        ];

        // Save the JSON file in the storage folder.
        $jsonData = json_encode($phbotJson, JSON_PRETTY_PRINT);
        file_put_contents(database_path('phbot.json'), $jsonData);
    }
}
