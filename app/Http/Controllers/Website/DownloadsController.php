<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class DownloadsController extends Controller
{
    public function index()
    {
        return view('website.pages.downloads');
    }
}
