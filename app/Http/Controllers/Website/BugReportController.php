<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class BugReportController extends Controller
{
    public function index()
    {
        return view('website.pages.bug-report');
    }


    //TODO need action Submit form

}
