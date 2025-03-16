<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Guild;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuildController extends Controller
{
    /**
     * Display a listing of guilds
     *
     * @return View
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Guild::query();

        if ($search) {
            $query->where('Name', 'like', "%{$search}%");
        }

        $guilds = $query->paginate(20);

        return view('admin.guilds.index', compact('guilds', 'search'));
    }

    /**
     * Display the specified guild
     *
     * @param int $id
     * @return View
     */
    public function show($id)
    {
        $guild = Guild::findOrFail($id);

        // Get guild members
        $members = DB::table('_GuildMember')
            ->where('GuildID', $id)
            ->join('_Char', '_GuildMember.CharID', '=', '_Char.CharID')
            ->select('_Char.CharID', '_Char.CharName16', '_GuildMember.MemberClass', '_Char.CurLevel')
            ->orderBy('_GuildMember.MemberClass')
            ->get();

        return view('admin.guilds.show', compact('guild', 'members'));
    }

    /**
     * Show the form for editing the specified guild
     *
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        $guild = Guild::findOrFail($id);
        return view('admin.guilds.edit', compact('guild'));
    }

    /**
     * Update the specified guild
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Name' => 'string|max:30',
            'Introduction' => 'string|max:255',
        ]);

        $guild = Guild::findOrFail($id);

        if ($request->has('Name')) {
            $guild->Name = $request->Name;
        }

        if ($request->has('Introduction')) {
            $guild->Introduction = $request->Introduction;
        }

        $guild->save();

        return redirect()->route('admin.guilds.show', $id)
            ->with('success', 'Guild updated successfully.');
    }
}
