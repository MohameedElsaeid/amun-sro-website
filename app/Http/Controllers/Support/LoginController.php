<?php

namespace App\Http\Controllers\Support;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('support.auth.login');
    }

    public function login(Request $request)
    {
        // TODO:: Redirect
    }
}
