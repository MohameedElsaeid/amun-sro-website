
@extends('website.layouts.app')

@section('title', 'Gamification Dashboard - ASRO')
@section('meta-description', 'Track your progress, achievements, and rewards in your ASRO gamification dashboard.')

@section('content')
    <!-- Hero Section -->
    <div class="page-hero" style="background-image: url('{{ asset('icons/feat_5.webp') }}');">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4">Gamification Dashboard</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8">Track your progress and achievements</p>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-16 bg-midnight">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Dashboard Overview -->
                <div class="bg-midnight-light/30 border border-gold/30 rounded-lg p-6 mb-8">
                    <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-6">
                        <div>
                            <h2 class="text-2xl font-cinzel font-bold text-gold">Welcome, {{ Auth::user()->StrUserID }}</h2>
                            <p class="text-sand-light">Keep earning points to unlock new achievements!</p>
                        </div>
                        <div class="mt-4 md:mt-0 flex items-center space-x-2 bg-midnight rounded-md px-4 py-2 border border-gold/20">
                            <span class="text-gold font-bold text-lg">{{ number_format($user->points) }}</span>
                            <span class="text-sand-light/70">points</span>
                        </div>
                    </div>
                    
                    <!-- Level Progress -->
                    <div class="mb-8">
                        <div class="flex justify-between items-center mb-2">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-gold font-bold">{{ $level }}</span>
                                </div>
                                <span class="text-sand-light font-medium">Level {{ $level }}</span>
                            </div>
                            <span class="text-sand-light/70 text-sm">{{ $user->points % 100 }}/100 to next level</span>
                        </div>
                        <div class="h-4 bg-midnight rounded-full overflow-hidden">
                            <div class="h-full bg-gold rounded-full" style="width: {{ $progressPercentage }}%"></div>
                        </div>
                    </div>
                    
                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div class="bg-midnight-light/50 rounded-lg p-4 border border-gold/10">
                            <h3 class="text-sand-light/70 text-sm mb-1">Total Achievements</h3>
                            <p class="text-gold text-2xl font-bold">{{ $achievements->count() }}</p>
                        </div>
                        <div class="bg-midnight-light/50 rounded-lg p-4 border border-gold/10">
                            <h3 class="text-sand-light/70 text-sm mb-1">Current Rank</h3>
                            <p class="text-gold text-2xl font-bold">Adventurer</p>
                        </div>
                        <div class="bg-midnight-light/50 rounded-lg p-4 border border-gold/10">
                            <h3 class="text-sand-light/70 text-sm mb-1">Next Milestone</h3>
                            <p class="text-gold text-2xl font-bold">{{ $nextLevelPoints }} pts</p>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Activity and Achievements -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Recent Activity -->
                    <div class="bg-midnight-light/30 border border-gold/30 rounded-lg p-6">
                        <h2 class="text-xl font-cinzel font-bold text-gold mb-4">Recent Activity</h2>
                        
                        @if($recentActivity->count() > 0)
                            <div class="space-y-4">
                                @foreach($recentActivity as $activity)
                                <div class="flex items-start space-x-3 p-3 bg-midnight-light/40 rounded-lg">
                                    <div class="w-8 h-8 bg-gold/20 rounded-full flex items-center justify-center flex-shrink-0">
                                        <span class="text-gold">🏆</span>
                                    </div>
                                    <div>
                                        <h4 class="text-sand-light font-medium">{{ $activity->name }}</h4>
                                        <p class="text-sand-light/70 text-sm">{{ $activity->description }}</p>
                                        <p class="text-gold text-xs mt-1">+{{ $activity->points_awarded }} points</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @else
                            <div class="p-4 bg-midnight-light/40 rounded-lg text-center">
                                <p class="text-sand-light/70">No recent activity yet. Start earning points!</p>
                            </div>
                        @endif
                    </div>
                    
                    <!-- Achievements -->
                    <div class="bg-midnight-light/30 border border-gold/30 rounded-lg p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-cinzel font-bold text-gold">Your Achievements</h2>
                            <a href="#" class="text-gold hover:text-gold-light text-sm">View All</a>
                        </div>
                        
                        @if($achievements->count() > 0)
                            <div class="space-y-4">
                                @foreach($achievements as $achievement)
                                <div class="flex items-start space-x-3 p-3 bg-midnight-light/40 rounded-lg">
                                    <div class="w-8 h-8 bg-gold/20 rounded-full flex items-center justify-center flex-shrink-0">
                                        <span class="text-gold">🏆</span>
                                    </div>
                                    <div>
                                        <h4 class="text-sand-light font-medium">{{ $achievement->name }}</h4>
                                        <p class="text-sand-light/70 text-sm">{{ $achievement->description }}</p>
                                        <p class="text-gold text-xs mt-1">+{{ $achievement->points_awarded }} points</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @else
                            <div class="p-4 bg-midnight-light/40 rounded-lg text-center">
                                <p class="text-sand-light/70">No achievements unlocked yet. Keep going!</p>
                            </div>
                        @endif
                    </div>
                </div>
                
                <!-- Actions Section -->
                <div class="mt-8 p-6 bg-midnight-light/30 border border-gold/30 rounded-lg">
                    <h2 class="text-xl font-cinzel font-bold text-gold mb-4">Earn More Points</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        <a href="{{ route('website.donate') }}" class="flex items-center p-3 bg-midnight-light/40 rounded-lg hover:bg-gold/20 transition-colors">
                            <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center mr-3">
                                <span class="text-gold">💰</span>
                            </div>
                            <div>
                                <h4 class="text-sand-light font-medium">Make a Donation</h4>
                                <p class="text-gold text-xs">+20 points</p>
                            </div>
                        </a>
                        <a href="#" id="update-profile-btn" class="flex items-center p-3 bg-midnight-light/40 rounded-lg hover:bg-gold/20 transition-colors">
                            <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center mr-3">
                                <span class="text-gold">👤</span>
                            </div>
                            <div>
                                <h4 class="text-sand-light font-medium">Update Profile</h4>
                                <p class="text-gold text-xs">+15 points</p>
                            </div>
                        </a>
                        <a href="#" class="flex items-center p-3 bg-midnight-light/40 rounded-lg hover:bg-gold/20 transition-colors">
                            <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center mr-3">
                                <span class="text-gold">🐞</span>
                            </div>
                            <div>
                                <h4 class="text-sand-light font-medium">Report a Bug</h4>
                                <p class="text-gold text-xs">+25 points</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Leaderboard Preview -->
                <div class="mt-8 p-6 bg-midnight-light/30 border border-gold/30 rounded-lg">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-cinzel font-bold text-gold">Leaderboard</h2>
                        <a href="{{ route('website.leaderboard') }}" class="text-gold hover:text-gold-light flex items-center">
                            View Full Leaderboard
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                    
                    <div class="leaderboard-preview space-y-2">
                        <p class="text-center text-sand-light/70">Loading leaderboard data...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Load leaderboard data
        fetch('/api/gamification/leaderboard')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const leaderboardPreview = document.querySelector('.leaderboard-preview');
                    leaderboardPreview.innerHTML = '';
                    
                    if (data.leaderboard.length) {
                        // Create table
                        const table = document.createElement('table');
                        table.className = 'w-full text-left';
                        
                        // Create header
                        const thead = document.createElement('thead');
                        thead.innerHTML = `
                            <tr class="text-sand-light/70 border-b border-midnight">
                                <th class="p-2">Rank</th>
                                <th class="p-2">Player</th>
                                <th class="p-2 text-right">Points</th>
                            </tr>
                        `;
                        table.appendChild(thead);
                        
                        // Create body
                        const tbody = document.createElement('tbody');
                        data.leaderboard.slice(0, 5).forEach((user, index) => {
                            const row = document.createElement('tr');
                            row.className = 'border-b border-midnight/50 text-sand-light';
                            
                            // Determine if current user
                            const isCurrentUser = user.StrUserID === '{{ Auth::user()->StrUserID }}';
                            const userClass = isCurrentUser ? 'text-gold font-bold' : '';
                            
                            row.innerHTML = `
                                <td class="p-2">
                                    <span class="w-6 h-6 rounded-full inline-flex items-center justify-center ${index < 3 ? 'bg-gold/20' : 'bg-midnight-light/50'}">
                                        ${index + 1}
                                    </span>
                                </td>
                                <td class="p-2 ${userClass}">${user.StrUserID}</td>
                                <td class="p-2 text-right ${userClass}">${user.points}</td>
                            `;
                            tbody.appendChild(row);
                        });
                        table.appendChild(tbody);
                        
                        leaderboardPreview.appendChild(table);
                    } else {
                        leaderboardPreview.innerHTML = '<p class="text-center text-sand-light/70">No leaderboard data available yet.</p>';
                    }
                }
            })
            .catch(error => {
                console.error('Error loading leaderboard data:', error);
                const leaderboardPreview = document.querySelector('.leaderboard-preview');
                leaderboardPreview.innerHTML = '<p class="text-center text-sand-light/70">Failed to load leaderboard data.</p>';
            });
            
        // Handle update profile button
        const updateProfileBtn = document.getElementById('update-profile-btn');
        if (updateProfileBtn) {
            updateProfileBtn.addEventListener('click', function(e) {
                e.preventDefault();
                
                fetch('/api/gamification/award-points', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        action: 'profile_update'
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Trigger gamification event for frontend notification
                        const event = new CustomEvent('gamification-event', {
                            detail: {
                                action: 'profile_update',
                                points: 15,
                                totalPoints: data.points
                            }
                        });
                        document.dispatchEvent(event);
                        
                        // Reload page after a short delay to show updated points
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        }
    });
    </script>
@endsection
