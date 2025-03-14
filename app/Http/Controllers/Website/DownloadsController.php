<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Services\Facebook\ConversionEventService;
use Illuminate\Http\Client\ConnectionException;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class DownloadsController extends Controller
{
    public function index()
    {
        return view('website.pages.downloads');
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     * @throws ConnectionException
     */
    public function sbot(ConversionEventService $conversionEventService)
    {
        $user = auth()->user();
        $userData = [];
        if ($user) {
            $userData['em'] = $user->Email;
            $userData['fn'] = $user->StrUserID;
        }
        $customData = [
            'event_source_url' => request()->fullUrl(),
            'referrer_url' => request()->headers->get('referer') ?? '',
            'source' => 'sbot'
        ];

        $conversionEventService->trackDownload($userData, $customData);

        return redirect()->away('https://amun-sro.lon1.cdn.digitaloceanspaces.com/downloads/AmunSroSBotP.rar');
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     * @throws ConnectionException
     */
    public function client(ConversionEventService $conversionEventService)
    {
        $user = auth()->user();
        $userData = [];
        if ($user) {
            $userData['em'] = $user->Email;
            $userData['fn'] = $user->StrUserID;
        }
        $customData = [
            'event_source_url' => request()->fullUrl(),
            'referrer_url' => request()->headers->get('referer') ?? '',
            'source' => 'client'
        ];

        $conversionEventService->trackDownload($userData, $customData);

        return redirect()->away('https://amun-sro.lon1.cdn.digitaloceanspaces.com/downloads/AmunSroSBotP.rar');
    }
}
