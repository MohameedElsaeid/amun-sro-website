<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\TBUser;
use App\Models\UserAchievement;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GamificationController extends Controller
{
    /**
     * Display the leaderboard page
     *
     * @return View
     */
    public function index()
    {
        return view('website.pages.leaderboard');
    }

    /**
     * Display the user's gamification dashboard
     *
     * @return View
     */
    public function dashboard()
    {
        // Get authenticated user
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        // Get user's achievements
        $achievements = UserAchievement::where('JID', $user->JID)->get();

        // Calculate level based on points (every 100 points = 1 level)
        $level = floor($user->points / 100) + 1;
        $nextLevelPoints = $level * 100;
        $progressPercentage = ($user->points % 100) / 100 * 100;

        // Get recent activity (for demo we'll use achievements)
        $recentActivity = $achievements->sortByDesc('created_at')->take(5);

        return view('website.pages.gamification.dashboard', compact(
            'user',
            'achievements',
            'level',
            'nextLevelPoints',
            'progressPercentage',
            'recentActivity'
        ));
    }

    /**
     * Get user gamification data for API calls
     *
     * @return JsonResponse
     */
    public function getUserData()
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not authenticated'], 401);
        }

        // Get user's achievements
        $achievements = UserAchievement::where('JID', $user->JID)->get();

        return response()->json([
            'success' => true,
            'points' => $user->points,
            'achievements' => $achievements
        ]);
    }

    /**
     * Award points to user for specific actions
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function awardPoints(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not authenticated'], 401);
        }

        $action = $request->input('action');
        $points = 0;

        // Determine points based on action
        switch ($action) {
            case 'login':
                $points = 10;
                break;
            case 'profile_update':
                $points = 15;
                break;
            case 'bug_report':
                $points = 25;
                break;
            case 'recharge':
                $points = 20;
                break;
            case 'registration':
                $points = 50;
                break;
            default:
                $points = 5;
        }

        // Award points to user
        $user->points += $points;
        $user->save();

        // Check for achievements
        $this->checkForAchievements($user, $action);

        return response()->json([
            'success' => true,
            'points_awarded' => $points,
            'points' => $user->points,
            'message' => "You earned {$points} points for this action!"
        ]);
    }

    /**
     * Check and award achievements based on user actions
     *
     * @param TBUser $user
     * @param string $action
     * @return void
     */
    private function checkForAchievements($user, $action)
    {
        // Example achievement: First login
        if ($action === 'login') {
            $achievementExists = UserAchievement::where('JID', $user->JID)
                ->where('achievement_code', 'first_login')
                ->exists();

            if (!$achievementExists) {
                UserAchievement::create([
                    'JID' => $user->JID,
                    'achievement_code' => 'first_login',
                    'name' => 'First Login',
                    'description' => 'You logged in for the first time!',
                    'points_awarded' => 20
                ]);

                // Add points for achievement
                $user->points += 20;
                $user->save();
            }
        }

        // Example achievement: Profile updater
        if ($action === 'profile_update') {
            $achievementExists = UserAchievement::where('JID', $user->JID)
                ->where('achievement_code', 'profile_updater')
                ->exists();

            if (!$achievementExists) {
                UserAchievement::create([
                    'JID' => $user->JID,
                    'achievement_code' => 'profile_updater',
                    'name' => 'Profile Updater',
                    'description' => 'You updated your profile information!',
                    'points_awarded' => 15
                ]);

                // Add points for achievement
                $user->points += 15;
                $user->save();
            }
        }
    }

    /**
     * Get leaderboard data
     *
     * @return JsonResponse
     */
    public function getLeaderboard()
    {
        // Get top 10 users by points
        $topUsers = TBUser::orderBy('points', 'desc')
            ->select('StrUserID', 'points')
            ->take(10)
            ->get();

        return response()->json([
            'success' => true,
            'leaderboard' => $topUsers
        ]);
    }
}
