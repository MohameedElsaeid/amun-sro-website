<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Storage;

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

//        $files = Storage::disk('s3')->allFiles();
//
//        dd($files);
//        $downloadUrl = Storage::disk('s3')->temporaryUrl($files[0], Carbon::now()->addMinutes(5));


        $client = public_path('data/AmunSro.rar');
//        $sBot = public_path('data/AmunSroSBotP.rar');

        // Check if files exist (optional but recommended)
//        if (!file_exists($client) || !file_exists($sBot)) {
//            dd('One or both files not found.');
//        }

        // Define the S3 directory (folder) where the files will be stored
        $directory = 'downloads';

        // Extract file names from the local paths
        $fileName1 = basename($client);
//        $fileName2 = basename($sBot);

        // Define S3 paths
        $s3Path1 = $directory . '/' . $fileName1;
//        $s3Path2 = $directory . '/' . $fileName2;

        // Upload the files to S3 with public visibility (files will be accessible via a permanent URL)
        Storage::disk('s3')->put($s3Path1, fopen($client, 'r'), 'public');
//        Storage::disk('s3')->put($s3Path2, fopen($sBot, 'r'), 'public');

        // Generate permanent download URLs
        $url1 = Storage::disk('s3')->url($s3Path1);
//        $url2 = Storage::disk('s3')->url($s3Path2);
        dd(
            [
                'file1' => $url1,
//                'file2' => $url2,
            ]
        );
    }
}
