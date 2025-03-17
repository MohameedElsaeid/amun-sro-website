<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\OnlineOffline;
use App\Services\Facebook\ConversionEventService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class HomeController extends Controller
{
    /**
     * @param ConversionEventService $conversionEventService
     * @return Factory|View|Application|\Illuminate\View\View|object
     */
    public function index(ConversionEventService $conversionEventService)
    {
        $onlinePlayersCount = OnlineOffline::query()->where('Status', 'Online')->count();
        if ($onlinePlayersCount == 0) {
            $onlinePlayersCount = 500;
        }
        return view('website.pages.home', compact('onlinePlayersCount'));
    }
}
