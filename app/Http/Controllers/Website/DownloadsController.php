<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Jobs\DownloadEventJob;
use Illuminate\Http\RedirectResponse;

class DownloadsController extends Controller
{
    public function index()
    {
        return view('website.pages.downloads');
    }

    /**
     * @return RedirectResponse
     */
    public function sbot()
    {
        $user = auth()->user();
        $userData = [];
        if ($user) {
            $userData['em'] = $user->Email;
            $userData['fn'] = $user->StrUserID;
        }
        DownloadEventJob::dispatch($userData, [
            'event_source_url' => request()->fullUrl(),
            'referrer_url' => request()->headers->get('referer') ?? '',
            'source' => 'sbot'
        ])->onQueue('pixel-event');
        return redirect()->away('https://amun-sro.lon1.cdn.digitaloceanspaces.com/downloads/AmunSroSBotP.rar');
    }

    /**
     * @return RedirectResponse
     */
    public function client()
    {
        $user = auth()->user();
        $userData = [];
        if ($user) {
            $userData['em'] = $user->Email;
            $userData['fn'] = $user->StrUserID;
        }
        DownloadEventJob::dispatch($userData, [
            'event_source_url' => request()->fullUrl(),
            'referrer_url' => request()->headers->get('referer') ?? '',
            'source' => 'client'
        ])->onQueue('pixel-event');
        return redirect()->away('https://amun-sro.lon1.cdn.digitaloceanspaces.com/downloads/AmunSroSBotP.rar');
    }
}
