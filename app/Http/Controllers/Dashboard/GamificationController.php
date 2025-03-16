<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\TBUser;
use App\Models\UserAchievement;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GamificationController extends Controller
{
    /**
     * Display the gamification management dashboard
     *
     * @return View
     */
    public function index()
    {
        // Get leaderboard
        $topUsers = TBUser::orderBy('points', 'desc')
            ->select('JID', 'StrUserID', 'points')
            ->take(10)
            ->get();

        // Get total points awarded
        $totalPoints = TBUser::sum('points');

        // Get achievement stats
        $achievements = UserAchievement::select('achievement_code', 'name', 'description', 'points_awarded', DB::raw('count(*) as total_awarded'))
            ->groupBy('achievement_code', 'name', 'description', 'points_awarded')
            ->orderBy('total_awarded', 'desc')
            ->get();

        // Get daily stats (last 7 days)
        $dailyStats = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = now()->subDays($i)->format('Y-m-d');
            $dailyStats[$date] = UserAchievement::whereDate('created_at', $date)->count();
        }

        return view('admin.gamification.index', compact(
            'topUsers',
            'totalPoints',
            'achievements',
            'dailyStats'
        ));
    }

    /**
     * Award points to a user
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function awardPoints(Request $request)
    {
        $request->validate([
            'jid' => 'required|integer|exists:TB_User,JID',
            'points' => 'required|integer',
            'reason' => 'required|string|max:255',
        ]);

        $user = TBUser::findOrFail($request->jid);
        $user->points += $request->points;
        $user->save();

        // Log the points award
        // You might want to create a dedicated table for this

        return redirect()->back()->with('success', "{$request->points} points awarded to {$user->StrUserID}.");
    }

    /**
     * Create a new achievement
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function createAchievement(Request $request)
    {
        $request->validate([
            'jid' => 'required|integer|exists:TB_User,JID',
            'achievement_code' => 'required|string|max:50',
            'name' => 'required|string|max:100',
            'description' => 'required|string|max:255',
            'points_awarded' => 'required|integer|min:0',
        ]);

        // Check if user already has this achievement
        $existingAchievement = UserAchievement::where('JID', $request->jid)
            ->where('achievement_code', $request->achievement_code)
            ->first();

        if ($existingAchievement) {
            return redirect()->back()->with('error', 'User already has this achievement.');
        }

        // Create the achievement
        $achievement = new UserAchievement();
        $achievement->JID = $request->jid;
        $achievement->achievement_code = $request->achievement_code;
        $achievement->name = $request->name;
        $achievement->description = $request->description;
        $achievement->points_awarded = $request->points_awarded;
        $achievement->save();

        // Award points to the user
        $user = TBUser::findOrFail($request->jid);
        $user->points += $request->points_awarded;
        $user->save();

        return redirect()->back()->with('success', "Achievement '{$request->name}' awarded to {$user->StrUserID}.");
    }

    /**
     * Delete an achievement
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function deleteAchievement($id)
    {
        $achievement = UserAchievement::findOrFail($id);
        $user = TBUser::findOrFail($achievement->JID);

        // Remove points from user
        $user->points -= $achievement->points_awarded;
        if ($user->points < 0) {
            $user->points = 0;
        }
        $user->save();

        // Delete the achievement
        $achievement->delete();

        return redirect()->back()->with('success', "Achievement removed from {$user->StrUserID}.");
    }
}
