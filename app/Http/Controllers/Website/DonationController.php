<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class DonationController extends Controller
{
    public function index()
    {
        return view('website.pages.donation');
    }

}
