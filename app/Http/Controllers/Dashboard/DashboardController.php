<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\Guild;
use App\Models\OnlineOffline;
use App\Models\SKSilk;
use App\Models\TBUser;
use App\Models\UserAchievement;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    /**
     * Display admin dashboard with overview statistics
     *
     * @return View
     */
    public function index()
    {
        // Get quick statistics for dashboard overview
        $totalUsers = TBUser::count();
        $newUsersToday = TBUser::whereDate('regtime', today())->count();
        $totalCharacters = Char::where('Deleted', 0)->count();
        $totalGuilds = Guild::count();
        $onlineUsers = OnlineOffline::where('Status', 'Online')->count();

        // Calculate total silk in the system
        $totalSilk = SKSilk::sum('silk_own') + SKSilk::sum('silk_gift') + SKSilk::sum('silk_point');

        // Total gold in the system (convert to millions for readability)
        $totalGold = round(Char::sum('RemainGold') / 1000000, 2);

        // Get users with most points (gamification leaders)
        $topUsers = TBUser::orderBy('points', 'desc')
            ->take(5)
            ->select('JID', 'StrUserID', 'points')
            ->get();

        // Total achievements awarded
        $totalAchievements = UserAchievement::count();

        return view('admin.dashboard', compact(
            'totalUsers',
            'newUsersToday',
            'totalCharacters',
            'totalGuilds',
            'onlineUsers',
            'totalSilk',
            'totalGold',
            'topUsers',
            'totalAchievements'
        ));
    }
}
