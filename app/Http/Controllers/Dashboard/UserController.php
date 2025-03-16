<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\SKSilk;
use App\Models\SKSilkChangeBYWeb;
use App\Models\TBUser;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of users
     *
     * @return View
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = TBUser::query()->orderBy('regtime', 'desc');

        if ($search) {
            $query->where('StrUserID', 'like', "%{$search}%")
                ->orWhere('Email', 'like', "%{$search}%");
        }

        $users = $query->paginate(20);

        return view('admin.users.index', compact('users', 'search'));
    }

    /**
     * Show the form for creating a new user
     *
     * @return View
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created user
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'StrUserID' => 'required|string|max:25|unique:TB_User',
            'password' => 'required|string|min:6',
            'Email' => 'required|email|max:50|unique:TB_User',
            'GMrank' => 'integer|min:0|max:10',
        ]);

        // Get next JID
        $maxJID = TBUser::max('JID');
        $newJID = $maxJID + 1;

        $user = new TBUser();
        $user->JID = $newJID;
        $user->StrUserID = $request->StrUserID;
        $user->password = $request->password; // Note: in a real app, you'd want to hash this
        $user->Email = $request->Email;
        $user->GMrank = $request->GMrank ?? 0;
        $user->regtime = now();
        $user->reg_ip = $request->ip();
        $user->points = 0;
        $user->save();

        // Create silk entry for this user
        $silk = new SKSilk();
        $silk->JID = $newJID;
        $silk->silk_own = 0;
        $silk->silk_gift = 0;
        $silk->silk_point = 0;
        $silk->save();

        return redirect()->route('admin.users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified user
     *
     * @param int $id
     * @return View
     */
    public function show($id)
    {
        $user = TBUser::findOrFail($id);
        $silk = SKSilk::where('JID', $id)->first() ?? new SKSilk();
        $characters = Char::where('CharID', 'like', $id . '_%')
            ->where('Deleted', 0)
            ->get();

        // Get user's achievements
        $achievements = $user->achievements ?? collect();

        return view('admin.users.show', compact('user', 'silk', 'characters', 'achievements'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        $user = TBUser::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified user
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Email' => 'required|email|max:50|unique:TB_User,Email,' . $id . ',JID',
            'GMrank' => 'integer|min:0|max:10',
        ]);

        $user = TBUser::findOrFail($id);

        $user->Email = $request->Email;
        $user->GMrank = $request->GMrank;

        // Only update password if provided
        if ($request->password) {
            $user->password = $request->password;
        }

        $user->save();

        return redirect()->route('admin.users.show', $id)
            ->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified user (soft delete)
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $user = TBUser::findOrFail($id);

        // In SRO, you typically don't hard delete users
        // Instead, change their status or move them to a backup table
        $user->Status = -1; // Banned/Deleted status
        $user->save();

        return redirect()->route('admin.users.index')
            ->with('success', 'User has been deleted.');
    }

    /**
     * Update user's silk balance
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateSilk(Request $request)
    {
        $request->validate([
            'jid' => 'required|integer|exists:TB_User,JID',
            'silk_type' => 'required|in:silk_own,silk_gift,silk_point',
            'amount' => 'required|integer',
            'operation' => 'required|in:add,set',
            'reason' => 'required|string|max:255',
        ]);

        $jid = $request->jid;
        $silkType = $request->silk_type;
        $amount = $request->amount;
        $operation = $request->operation;
        $reason = $request->reason;

        // Get user's silk balance
        $silk = SKSilk::where('JID', $jid)->first();

        if (!$silk) {
            $silk = new SKSilk();
            $silk->JID = $jid;
            $silk->silk_own = 0;
            $silk->silk_gift = 0;
            $silk->silk_point = 0;
        }

        // Get current value
        $currentValue = $silk->$silkType;

        // Calculate new value based on operation
        $newValue = ($operation === 'add') ? $currentValue + $amount : $amount;

        // Prevent negative values
        if ($newValue < 0) {
            $newValue = 0;
        }

        // Calculate offset for logs
        $offset = $newValue - $currentValue;

        // Update silk balance
        $silk->$silkType = $newValue;
        $silk->save();

        // Log the silk change
        $silkChange = new SKSilkChangeBYWeb();
        $silkChange->JID = $jid;
        $silkChange->silk_type = $silkType === 'silk_own' ? 0 : ($silkType === 'silk_gift' ? 1 : 2);
        $silkChange->silk_remain = $newValue;
        $silkChange->silk_offset = $offset;
        $silkChange->reason = $reason;
        $silkChange->IP = ip2long($request->ip());
        $silkChange->RegDate = now();
        $silkChange->save();

        return redirect()->back()->with('success', ucfirst(str_replace('_', ' ', $silkType)) . ' updated successfully.');
    }

    /**
     * Update user's gold balance (for their characters)
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateGold(Request $request)
    {
        $request->validate([
            'charID' => 'required|integer|exists:_Char,CharID',
            'amount' => 'required|numeric',
            'operation' => 'required|in:add,set',
        ]);

        $charID = $request->charID;
        $amount = $request->amount;
        $operation = $request->operation;

        $character = Char::where('CharID', $charID)->first();

        if (!$character) {
            return redirect()->back()->with('error', 'Character not found.');
        }

        // Calculate new gold amount
        $currentGold = $character->RemainGold;
        $newGold = ($operation === 'add') ? $currentGold + $amount : $amount;

        // Prevent negative values
        if ($newGold < 0) {
            $newGold = 0;
        }

        // Update character's gold
        $character->RemainGold = $newGold;
        $character->save();

        return redirect()->back()->with('success', 'Character gold updated successfully.');
    }

    /**
     * Rename a user
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function renameUser(Request $request)
    {
        $request->validate([
            'jid' => 'required|integer|exists:TB_User,JID',
            'new_username' => 'required|string|max:25|unique:TB_User,StrUserID',
        ]);

        $user = TBUser::findOrFail($request->jid);
        $oldUsername = $user->StrUserID;
        $user->StrUserID = $request->new_username;
        $user->save();

        // Log the username change (you may want to create a dedicated table for this)

        return redirect()->back()->with('success', "Username changed from {$oldUsername} to {$request->new_username}.");
    }
}
