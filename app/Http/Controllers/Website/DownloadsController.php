<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Exception;
use Log;
use Storage;

class DownloadsController extends Controller
{
    public function index()
    {
        return view('website.pages.downloads');
    }

    public function sbot()
    {
        try {
            $downloadUrl = Storage::disk('s3')->temporaryUrl('downloads/AmunSroSBotP.rar', Carbon::now()->addMinutes(5));
            return redirect($downloadUrl);
        } catch (Exception $e) {
            Log::error('Download failed: ' . $e->getMessage());
            abort(500, 'Download error. Please try again later.');
        }
    }
}
