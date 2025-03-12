<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function index()
    {
        return view('website.pages.events');
    }
}
