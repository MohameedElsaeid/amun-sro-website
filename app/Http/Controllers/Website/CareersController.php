<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class CareersController extends Controller
{
    public function index()
    {
        return view('website.pages.careers');
    }
}
