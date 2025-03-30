<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Char;
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
        // $characterIds = Char::pluck('CharID')->toArray();
        // $user->getShardUser()->sync($characterIds);
        // dd( $user->getShardUser[0]);
        // dd( $user->getShardUser[0]->getEquipmentUser[0]->getRefObjCommon->getRefObjItem);

    //    dd($user->getShardUser);
        return view('website.pages.character.index',compact('user'));
    }
}
