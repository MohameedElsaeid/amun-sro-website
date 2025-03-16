<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of announcements
     *
     * @return View
     */
    public function index()
    {
        $announcements = Notice::orderBy('ID', 'desc')->paginate(20);
        return view('admin.announcements.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new announcement
     *
     * @return View
     */
    public function create()
    {
        return view('admin.announcements.create');
    }

    /**
     * Store a newly created announcement
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required|string|max:100',
            'Content' => 'required|string',
            'EditedBy' => 'required|string|max:50',
        ]);

        $announcement = new Notice();
        $announcement->Title = $request->Title;
        $announcement->Content = $request->Content;
        $announcement->EditedBy = $request->EditedBy;
        $announcement->EditDate = now();
        $announcement->save();

        return redirect()->route('admin.announcements.index')
            ->with('success', 'Announcement created successfully.');
    }

    /**
     * Display the specified announcement
     *
     * @param int $id
     * @return View
     */
    public function show($id)
    {
        $announcement = Notice::findOrFail($id);
        return view('admin.announcements.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified announcement
     *
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        $announcement = Notice::findOrFail($id);
        return view('admin.announcements.edit', compact('announcement'));
    }

    /**
     * Update the specified announcement
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Title' => 'required|string|max:100',
            'Content' => 'required|string',
            'EditedBy' => 'required|string|max:50',
        ]);

        $announcement = Notice::findOrFail($id);
        $announcement->Title = $request->Title;
        $announcement->Content = $request->Content;
        $announcement->EditedBy = $request->EditedBy;
        $announcement->EditDate = now();
        $announcement->save();

        return redirect()->route('admin.announcements.show', $id)
            ->with('success', 'Announcement updated successfully.');
    }

    /**
     * Remove the specified announcement
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $announcement = Notice::findOrFail($id);
        $announcement->delete();

        return redirect()->route('admin.announcements.index')
            ->with('success', 'Announcement deleted successfully.');
    }
}
