<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class RankingController extends Controller
{
    public function index()
    {
        $targetDate = now()->addDays(10)->format('Y-m-d H:i:s');

        return view('website.pages.countdown', compact('targetDate'));

        return view('website.pages.ranking');
    }
}
