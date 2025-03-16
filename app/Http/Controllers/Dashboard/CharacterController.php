<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\TBUser;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CharacterController extends Controller
{
    /**
     * Display a listing of characters
     *
     * @return View
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Char::where('Deleted', 0);

        if ($search) {
            $query->where('CharName16', 'like', "%{$search}%");
        }

        $characters = $query->orderBy('CurLevel', 'desc')->paginate(20);

        return view('admin.characters.index', compact('characters', 'search'));
    }

    /**
     * Display the specified character
     *
     * @param int $id
     * @return View
     */
    public function show($id)
    {
        $character = Char::findOrFail($id);

        // Get character's user
        $jid = substr($character->CharID, 0, strpos($character->CharID, '_'));
        $user = TBUser::where('JID', $jid)->first();

        // Get character's skills
        $skills = DB::table('_CharSkill')
            ->where('CharID', $id)
            ->join('_RefSkill', '_CharSkill.SkillID', '=', '_RefSkill.ID')
            ->select('_RefSkill.CodeName', '_CharSkill.SkillLevel')
            ->get();

        // Get character's inventory
        $inventory = DB::table('_Inventory')
            ->where('CharID', $id)
            ->join('_Items', '_Inventory.ItemID', '=', '_Items.ID64')
            ->join('_RefObjItem', '_Items.RefItemID', '=', '_RefObjItem.ID')
            ->select('_RefObjItem.CodeName', '_Items.OptLevel', '_Inventory.Slot')
            ->get();

        return view('admin.characters.show', compact('character', 'user', 'skills', 'inventory'));
    }

    /**
     * Show the form for editing the specified character
     *
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        $character = Char::findOrFail($id);
        return view('admin.characters.edit', compact('character'));
    }

    /**
     * Rename a character
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function renameCharacter(Request $request)
    {
        $request->validate([
            'charID' => 'required|exists:_Char,CharID',
            'new_name' => 'required|string|max:16|unique:_Char,CharName16',
        ]);

        $character = Char::findOrFail($request->charID);
        $oldName = $character->CharName16;
        $character->CharName16 = $request->new_name;
        $character->save();

        // Update character name list
        DB::table('_CharNameList')
            ->where('CharID', $request->charID)
            ->update(['CharName16' => $request->new_name]);

        // Log the name change
        DB::table('_RenameLog_Char')->insert([
            'CharID' => $request->charID,
            'OldName' => $oldName,
            'NewName' => $request->new_name,
            'RenameDate' => now(),
        ]);

        return redirect()->back()->with('success', "Character renamed from {$oldName} to {$request->new_name}.");
    }

    /**
     * Update the specified character
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'CurLevel' => 'integer|min:1|max:120',
            'Strength' => 'integer|min:0',
            'Intellect' => 'integer|min:0',
            'RemainStatPoint' => 'integer|min:0',
        ]);

        $character = Char::findOrFail($id);

        if ($request->has('CurLevel')) {
            $character->CurLevel = $request->CurLevel;
        }

        if ($request->has('Strength')) {
            $character->Strength = $request->Strength;
        }

        if ($request->has('Intellect')) {
            $character->Intellect = $request->Intellect;
        }

        if ($request->has('RemainStatPoint')) {
            $character->RemainStatPoint = $request->RemainStatPoint;
        }

        $character->save();

        return redirect()->route('admin.characters.show', $id)
            ->with('success', 'Character updated successfully.');
    }
}
