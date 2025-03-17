@extends('website.layouts.app')

@section('title', 'Affiliate Program - ASRO')
@section('meta-description', 'Earn rewards by inviting friends to join ASRO through our affiliate program.')

@section('content')
    <!-- Hero Section -->
    <div class="page-hero" style="background-image: url('{{ asset('icons/feat_3.webp') }}');">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4">Affiliate Program</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8">Invite friends and earn rewards</p>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-16 bg-midnight">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <!-- Invitation Link Card -->
                <div class="bg-midnight-light rounded-lg border border-gold/30 overflow-hidden shadow-lg mb-8">
                    <div class="p-6">
                        <h2 class="text-2xl font-cinzel font-bold text-gold mb-4">Your Invitation Link</h2>
                        <p class="text-sand-light mb-4">Share this link with your friends to invite them to join
                            ASRO.</p>

                        <div class="flex items-center space-x-2 bg-midnight border border-gold/20 rounded-md p-2 mb-4">
                            <input type="text" value="{{ $invitationLink }}" id="invitation-link" readonly
                                   class="w-full bg-midnight border-none text-sand-light focus:outline-none">
                            <button type="button" onclick="copyInvitationLink()"
                                    class="bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-2 px-4 rounded-md transition-colors">
                                Copy
                            </button>
                        </div>

                        <div class="flex justify-center space-x-4">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($invitationLink) }}"
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 bg-[#3b5998] hover:bg-[#2d4373] text-white font-bold rounded-md transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                                </svg>
                                Share on Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode($invitationLink) }}&text=Join%20me%20on%20ASRO!"
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 bg-[#1da1f2] hover:bg-[#0c85d0] text-white font-bold rounded-md transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                                </svg>
                                Share on Twitter
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Reward System Card -->
                <div class="bg-midnight-light rounded-lg border border-gold/30 overflow-hidden shadow-lg mb-8">
                    <div class="p-6">
                        <h2 class="text-2xl font-cinzel font-bold text-gold mb-4">Reward System</h2>

                        <div class="space-y-4 mb-6">
                            <h3 class="text-xl font-bold text-sand-light">Reward Conditions</h3>
                            <p class="text-sand-light">To qualify for rewards, users registered through your link must
                                meet one of the following goals:</p>

                            <ul class="list-disc list-inside text-sand-light pl-4 space-y-1">
                                <li>Buy Premium Plus</li>
                                <li>Buy 1k Silk</li>
                                <li>Reach Level 100</li>
                            </ul>

                            <h3 class="text-xl font-bold text-sand-light pt-2">Reward System</h3>
                            <p class="text-sand-light">For every 16 users who meet the required conditions, you will
                                earn a cash reward of $100.</p>
                        </div>

                        <!-- Stats Cards -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div class="bg-midnight border border-gold/20 rounded-lg p-4 text-center">
                                <p class="text-sand-light/70 text-sm">Total Registered Users</p>
                                <p class="text-3xl font-bold text-gold">{{ $rewardStats['totalUsers'] }}</p>
                            </div>
                            <div class="bg-midnight border border-gold/20 rounded-lg p-4 text-center">
                                <p class="text-sand-light/70 text-sm">Users Who Met Conditions</p>
                                <p class="text-3xl font-bold text-gold">{{ $rewardStats['usersMetConditions'] }}</p>
                            </div>
                            <div class="bg-midnight border border-gold/20 rounded-lg p-4 text-center">
                                <p class="text-sand-light/70 text-sm">Total Earnings</p>
                                <p class="text-3xl font-bold text-gold">$ {{ $rewardStats['totalEarnings'] }}</p>
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mb-2">
                            <div class="flex justify-between items-center mb-1">
                                <span class="text-sm text-sand-light/70">Progress to next reward</span>
                                <span class="text-sm text-sand-light/70">
                                    {{ $rewardStats['usersMetConditions'] % 16 }}/16 users
                                </span>
                            </div>
                            <div class="w-full bg-midnight rounded-full h-2.5">
                                <div class="bg-gold h-2.5 rounded-full"
                                     style="width: {{ (($rewardStats['usersMetConditions'] % 16) / 16) * 100 }}%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Invited Users Table -->
                <div class="bg-midnight-light rounded-lg border border-gold/30 overflow-hidden shadow-lg mb-8">
                    <div class="p-6">
                        <h2 class="text-2xl font-cinzel font-bold text-gold mb-4">Users You Invited</h2>

                        @if(count($invitedUsers) > 0)
                            <div class="overflow-x-auto">
                                <table class="w-full text-left">
                                    <thead class="bg-midnight text-sand-light">
                                    <tr>
                                        <th class="p-3">Username</th>
                                        <th class="p-3">Invited On</th>
                                        <th class="p-3">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gold/10">
                                    @foreach($invitedUsers as $invitedUser)
                                        <tr class="hover:bg-midnight/50 transition-colors">
                                            <td class="p-3 text-sand-light">{{ $invitedUser['user']->StrUserID }}</td>
                                            <td class="p-3 text-sand-light">{{ $invitedUser['date'] }}</td>
                                            <td class="p-3">
                                                @if($invitedUser['metConditions'])
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                            Conditions Met
                                                        </span>
                                                @else
                                                    <span
                                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                            Pending
                                                        </span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="text-center py-6">
                                <p class="text-sand-light">You haven't invited any users yet. Share your invitation link
                                    to start earning rewards!</p>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Invited By Card -->
                @if($invitedBy)
                    <div class="bg-midnight-light rounded-lg border border-gold/30 overflow-hidden shadow-lg">
                        <div class="p-6">
                            <h2 class="text-2xl font-cinzel font-bold text-gold mb-4">You Were Invited By</h2>

                            <div class="flex items-center space-x-4">
                                <div
                                    class="flex-shrink-0 bg-midnight border border-gold/30 rounded-full w-16 h-16 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gold" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-sand-light">{{ $invitedBy['user']->StrUserID }}</h3>
                                    <p class="text-sand-light/70">Joined on {{ $invitedBy['date'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <script>
        function copyInvitationLink() {
            const linkInput = document.getElementById('invitation-link');
            linkInput.select();
            linkInput.setSelectionRange(0, 99999); // For mobile devices

            document.execCommand('copy');

            // Show notification
            const event = new CustomEvent('gamification-event', {
                detail: {
                    action: 'copy_link',
                    points: 0,
                    totalPoints: {{ Auth::user()->points ?? 0 }}
                }
            });
            document.dispatchEvent(event);

            // This would be handled by your notification system
            alert('Invitation link copied to clipboard!');
        }
    </script>
@endsection
