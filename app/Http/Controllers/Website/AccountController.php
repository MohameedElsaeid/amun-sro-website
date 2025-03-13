<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->user()->toArray();
        return view('website.pages.account', compact('data'));
    }
}
