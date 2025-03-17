<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Referral;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AffiliateController extends Controller
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
     * Show the affiliate dashboard.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        $invitationLink = route('website.register', ['code' => $user->referral_code]);

        $invitedUsers = $this->getInvitedUsers($user->JID);

        $invitedBy = $this->getInvitedBy($user->JID);

        $rewardStats = $this->calculateRewards($invitedUsers);

        return view('website.pages.affiliate', compact('invitationLink', 'invitedUsers', 'invitedBy', 'rewardStats'));
    }

    /**
     * Get users invited by the given user ID
     *
     * @param int $userId
     * @return array
     */
    private function getInvitedUsers($userId)
    {
        $referrals = Referral::where('referrer_id', $userId)->get();
        $invitedUsers = [];
        foreach ($referrals as $referral) {
            $invitedUser = User::find($referral->referee_id);
            if ($invitedUser) {
                $metConditions = $this->checkRewardConditions($invitedUser);
                $invitedUsers[] = [
                    'user' => $invitedUser,
                    'date' => $referral->time,
                    'metConditions' => $metConditions
                ];
            }
        }

        return $invitedUsers;
    }

    /**
     * Check if a user has met the reward conditions
     *
     * @param User $user
     * @return bool
     */
    private function checkRewardConditions($user)
    {
        // TODO: Implement actual condition checks based on your game logic
        // For now, we'll use a random value for demonstration

        // Example conditions to check:
        // 1. Has Premium Plus
        // 2. Bought 1k Silk
        // 3. Reached Level 100

        // This should be replaced with actual logic
        return rand(0, 1) === 1;
    }

    /**
     * Get user who invited the given user ID
     *
     * @param int $userId
     * @return array|null
     */
    private function getInvitedBy($userId)
    {
        $referral = Referral::where('referee_id', $userId)->first();

        if ($referral) {
            $inviter = User::find($referral->reffererJID);

            if ($inviter) {
                return [
                    'user' => $inviter,
                    'date' => $referral->time
                ];
            }
        }

        return null;
    }

    /**
     * Calculate reward statistics
     *
     * @param array $invitedUsers
     * @return array
     */
    private function calculateRewards($invitedUsers)
    {
        $totalUsers = count($invitedUsers);
        $usersMetConditions = 0;

        foreach ($invitedUsers as $invitedUser) {
            if ($invitedUser['metConditions']) {
                $usersMetConditions++;
            }
        }

        // Calculate earnings based on reward system
        // For every 16 users who meet conditions, earn $100
        $rewardMultiplier = 16;
        $rewardAmount = 100;

        $totalEarnings = floor($usersMetConditions / $rewardMultiplier) * $rewardAmount;

        return [
            'totalUsers' => $totalUsers,
            'usersMetConditions' => $usersMetConditions,
            'totalEarnings' => $totalEarnings
        ];
    }
}
