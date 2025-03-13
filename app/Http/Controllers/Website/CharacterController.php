<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class CharacterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('website.pages.character');
    }
}
