<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index()
    {
        return view('website.pages.account');
    }
}
