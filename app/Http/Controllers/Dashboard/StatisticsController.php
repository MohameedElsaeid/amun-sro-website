<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Char;
use App\Models\Guild;
use App\Models\SKSilk;
use App\Models\SKSilkChangeBYWeb;
use App\Models\TBUser;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    /**
     * Display the main statistics page
     *
     * @return View
     */
    public function index()
    {
        // Get statistics for the past 7 days
        $dates = collect();
        for ($i = 6; $i >= 0; $i--) {
            $dates->push(Carbon::now()->subDays($i)->format('Y-m-d'));
        }

        // New users per day for last 7 days
        $newUsers = collect();
        foreach ($dates as $date) {
            $newUsers->push(TBUser::whereDate('regtime', $date)->count());
        }

        // Online users over time (hourly for today)
        $hours = collect();
        $onlineData = collect();
        for ($i = 0; $i < 24; $i++) {
            $hour = $i < 10 ? "0$i" : "$i";
            $hours->push("$hour:00");

            // This is a placeholder - in a real implementation you'd need to have hourly data stored
            // For now we'll generate random data between 10 and 100
            $onlineData->push(rand(10, 100));
        }

        // Total characters by level ranges
        $levelRanges = [
            '1-20' => Char::where('Deleted', 0)->whereBetween('CurLevel', [1, 20])->count(),
            '21-40' => Char::where('Deleted', 0)->whereBetween('CurLevel', [21, 40])->count(),
            '41-60' => Char::where('Deleted', 0)->whereBetween('CurLevel', [41, 60])->count(),
            '61-80' => Char::where('Deleted', 0)->whereBetween('CurLevel', [61, 80])->count(),
            '81-100' => Char::where('Deleted', 0)->whereBetween('CurLevel', [81, 100])->count(),
            '101+' => Char::where('Deleted', 0)->where('CurLevel', '>', 100)->count(),
        ];

        return view('admin.statistics.index', compact(
            'dates',
            'newUsers',
            'hours',
            'onlineData',
            'levelRanges'
        ));
    }

    /**
     * Display user-specific statistics
     *
     * @return View
     */
    public function users()
    {
        // Distribution by registration date (monthly for the past year)
        $months = collect();
        $registrations = collect();

        for ($i = 11; $i >= 0; $i--) {
            $month = Carbon::now()->subMonths($i);
            $monthLabel = $month->format('M Y');
            $months->push($monthLabel);

            $count = TBUser::whereYear('regtime', $month->year)
                ->whereMonth('regtime', $month->month)
                ->count();

            $registrations->push($count);
        }

        // Top countries (if user IP geolocation is available)
        // This is a placeholder - in a real implementation you'd need to have country data
        $topCountries = [
            'United States' => 1245,
            'Germany' => 876,
            'United Kingdom' => 735,
            'Brazil' => 624,
            'France' => 512,
        ];

        // Active vs inactive users
        // For this example, we'll consider users who logged in within the last 30 days as active
        $activeUsers = TBUser::where('Time_log', '>=', Carbon::now()->subDays(30))->count();
        $totalUsers = TBUser::count();
        $inactiveUsers = $totalUsers - $activeUsers;

        return view('admin.statistics.users', compact(
            'months',
            'registrations',
            'topCountries',
            'activeUsers',
            'inactiveUsers',
            'totalUsers'
        ));
    }

    /**
     * Display character-specific statistics
     *
     * @return View
     */
    public function characters()
    {
        // Characters by class
        $characterClasses = Char::where('Deleted', 0)
            ->join('_RefObjChar', '_Char.RefObjID', '=', '_RefObjChar.ID')
            ->select('_RefObjChar.CodeName as ClassName', DB::raw('count(*) as total'))
            ->groupBy('_RefObjChar.CodeName')
            ->orderBy('total', 'desc')
            ->get();

        // Average level
        $avgLevel = Char::where('Deleted', 0)->avg('CurLevel');

        // Distribution of characters by creation date (monthly)
        $months = collect();
        $creations = collect();

        for ($i = 5; $i >= 0; $i--) {
            $month = Carbon::now()->subMonths($i);
            $months->push($month->format('M Y'));

            // Placeholder - assuming LastLogout can be used as proxy for creation date
            $count = Char::where('Deleted', 0)
                ->whereYear('LastLogout', $month->year)
                ->whereMonth('LastLogout', $month->month)
                ->count();

            $creations->push($count);
        }

        return view('admin.statistics.characters', compact(
            'characterClasses',
            'avgLevel',
            'months',
            'creations'
        ));
    }

    /**
     * Display guild-specific statistics
     *
     * @return View
     */
    public function guilds()
    {
        // Total number of guilds
        $totalGuilds = Guild::count();

        // Guilds by size (number of members)
        $guildSizes = [
            '1-5' => 0,
            '6-10' => 0,
            '11-20' => 0,
            '21-30' => 0,
            '31+' => 0
        ];

        // This would need to be adjusted based on your actual Guild-Member relationship
        $guilds = Guild::select('ID')->withCount('members')->get();

        foreach ($guilds as $guild) {
            if ($guild->members_count <= 5) {
                $guildSizes['1-5']++;
            } else if ($guild->members_count <= 10) {
                $guildSizes['6-10']++;
            } else if ($guild->members_count <= 20) {
                $guildSizes['11-20']++;
            } else if ($guild->members_count <= 30) {
                $guildSizes['21-30']++;
            } else {
                $guildSizes['31+']++;
            }
        }

        // Average guild size
        $avgGuildSize = $guilds->avg('members_count') ?? 0;

        return view('admin.statistics.guilds', compact(
            'totalGuilds',
            'guildSizes',
            'avgGuildSize'
        ));
    }

    /**
     * Display economy statistics
     *
     * @return View
     */
    public function economy()
    {
        // Total gold in the system
        $totalGold = Char::sum('RemainGold');

        // Total silk (all types)
        $totalOwnSilk = SKSilk::sum('silk_own');
        $totalGiftSilk = SKSilk::sum('silk_gift');
        $totalSilkPoints = SKSilk::sum('silk_point');

        // Silk purchases over time (monthly)
        $months = collect();
        $silkPurchases = collect();

        for ($i = 5; $i >= 0; $i--) {
            $month = Carbon::now()->subMonths($i);
            $months->push($month->format('M Y'));

            // Sum of positive silk changes for the month
            $amount = SKSilkChangeBYWeb::whereYear('RegDate', $month->year)
                ->whereMonth('RegDate', $month->month)
                ->where('silk_offset', '>', 0)
                ->sum('silk_offset');

            $silkPurchases->push($amount);
        }

        // Distribution of wealth (gold)
        $goldDistribution = [
            '0-1M' => Char::where('RemainGold', '<', 1000000)->count(),
            '1M-10M' => Char::whereBetween('RemainGold', [1000000, 10000000])->count(),
            '10M-100M' => Char::whereBetween('RemainGold', [10000000, 100000000])->count(),
            '100M-1B' => Char::whereBetween('RemainGold', [100000000, 1000000000])->count(),
            '1B+' => Char::where('RemainGold', '>', 1000000000)->count(),
        ];

        return view('admin.statistics.economy', compact(
            'totalGold',
            'totalOwnSilk',
            'totalGiftSilk',
            'totalSilkPoints',
            'months',
            'silkPurchases',
            'goldDistribution'
        ));
    }
}
