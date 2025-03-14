<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\NewsLetter;
use App\Services\Facebook\ConversionEventService;
use Exception;
use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class NewsLetterController extends Controller
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function subscribe(Request $request, ConversionEventService $conversionEventService)
    {
        try {

            $user = auth()->user();
            $request->validate([
                'email' => 'required|string|email|max:255|unique:newsletters',
            ]);

            Newsletter::create([
                'Email' => $request->email,
                'JID' => $user?->JID
            ]);
            $userData = [];
            if ($user) {
                $userData['em'] = $user->Email;
                $userData['fn'] = $user->StrUserID;
            }
            $conversionEventService->trackSubscribe($userData);
            return response()->json(['message' => 'success'], 201);

        } catch (Exception) {
            return response()->json(['message' => 'error'], 400);
        }
    }
}
