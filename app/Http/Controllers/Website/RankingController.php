<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class RankingController extends Controller
{
    public function index()
    {
        return view('website.pages.ranking');
    }
}
