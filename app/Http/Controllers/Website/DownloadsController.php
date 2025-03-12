<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Storage;

class DownloadsController extends Controller
{
    public function index()
    {
        return view('website.pages.downloads');
    }

    public function sbot()
    {
        $downloadUrl = Storage::disk('s3')->temporaryUrl('downloads/AmunSroSBotP.rar', Carbon::now()->addMinutes(5));
        return redirect($downloadUrl);
    }
}
