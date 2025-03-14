<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
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
        return view('website.pages.home');
    }
}
