<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class PrivacyController extends Controller
{
    public function index()
    {
        return view('website.pages.privacy');
    }
}
