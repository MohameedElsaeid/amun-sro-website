<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Jobs\SubscribeNewsLetterEventJob;
use App\Models\NewsLetter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function subscribe(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'email' => 'required|string|email|max:255|unique:news_letters,Email',
        ]);

        Newsletter::create([
            'Email' => $request->get('email'),
            'JID' => $user?->JID
        ]);

        $userData = [];
        if ($user) {
            $userData['em'] = $user->Email;
            $userData['fn'] = $user->StrUserID;
        } else {
            $userData['em'] = $request->get('email');
        }
        SubscribeNewsLetterEventJob::dispatch($userData)->onQueue('pixel-event');
        return redirect()->back()->with('success', 'You have successfully subscribed to our newsletter.');

    }
}
