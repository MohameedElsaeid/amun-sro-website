<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Jobs\ContactUsEventJob;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('website.pages.contactus');
    }

    public function submit(Request $request)
    {
        $request->validate(
            [
            'name'    => 'required|string|max:255',
            'email'   => 'required|string|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ],
            [
            'name.required'    => 'Please enter your name.',
            'name.string'      => 'The name must be a valid string.',
            'name.max'         => 'The name may not be greater than 255 characters.',
            'email.required'   => 'Please enter your email address.',
            'email.string'     => 'The email must be a valid string.',
            'email.email'      => 'Please provide a valid email address.',
            'email.max'        => 'The email may not be greater than 255 characters.',
            'subject.required' => 'Please provide a subject for your message.',
            'subject.string'   => 'The subject must be a valid string.',
            'subject.max'      => 'The subject may not be greater than 255 characters.',
            'message.required' => 'Your message cannot be empty.',
            'message.string'   => 'The message must be a valid string.',
        ]
        );

        ContactUs::create(array_merge($request->all(), ['JID' => $request->user()?->JID]));
        ContactUsEventJob::dispatch(
            [
                'fn' => $request->get('name'),
                'em' => $request->get('email'),
            ],
            [
                'subject' => $request->get('subject'),
                'message' => $request->get('message'),
            ]
        )->onQueue('pixel-event');
        return redirect()->back()->with('success', 'Your message has been sent. we will get back to you as soon as possible.');
    }
}
