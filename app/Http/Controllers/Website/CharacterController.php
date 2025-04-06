<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\SKSilk;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

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

    /**
     * @return Factory|View|Application|\Illuminate\View\View|object
     */
    public function index()
    {
        $user = auth()->user();
        //'JID', 'silk_own', 'silk_gift', 'silk_point'
        $silk = SKSilk::where('JID',$user->JID)->first();
        return view('website.pages.character.index',compact('user','silk'));
    }
}
