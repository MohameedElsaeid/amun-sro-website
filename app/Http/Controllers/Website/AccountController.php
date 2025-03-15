<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
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


    public function index(Request $request)
    {
        $data = $request->user()->toArray();
        return view('website.pages.account', compact('data'));
    }

    public function viewChangePassword(Request $request)
    {
        $data = $request->user()->toArray();
        return view('website.pages.change_password', compact('data'));
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $user = Auth::user(); // Get the logged-in user

        // Update password using MD5 (not recommended for security reasons)
        $user->update([
            'password' => md5($request->new_password),
        ]);
        return redirect()->back()->with('success', 'Password updated successfully.');
    }



    public function viewProfile(Request $request)
    {
        $data = $request->user();
        return view('website.pages.profile', compact('data'));
    }
    public function update(UpdateUserRequest $request)
    {
        $user = Auth::user();
    
        $user->update([
            'StrUserID' => trim($request->StrUserID),
            'phone' => trim($request->phone),
            'sex' => trim($request->gender),
        ]);
    
        return redirect()->back()->with('success', 'Account updated successfully.');
    }
}
