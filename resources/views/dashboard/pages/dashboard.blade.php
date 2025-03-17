
@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container px-4 mx-auto">
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gold mb-2">Admin Dashboard</h1>
        <p class="text-sand-light">Welcome to the ASRO Game administration panel.</p>
    </div>

    <!-- Overview Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        <div class="bg-midnight-light/30 border border-gold/30 rounded-lg p-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-sand-light/70 text-sm mb-1">Total Users</h3>
                    <p class="text-gold text-2xl font-bold">{{ number_format($totalUsers) }}</p>
                </div>
                <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                    </svg>
                </div>
            </div>
            <div class="mt-2 text-sand-light/60 text-xs">
                <span class="text-green-400">+{{ $newUsersToday }}</span> new today
            </div>
        </div>

        <div class="bg-midnight-light/30 border border-gold/30 rounded-lg p-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-sand-light/70 text-sm mb-1">Online Players</h3>
                    <p class="text-gold text-2xl font-bold">{{ number_format($onlineUsers) }}</p>
                </div>
                <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="mt-2 text-sand-light/60 text-xs">
                Active now
            </div>
        </div>

        <div class="bg-midnight-light/30 border border-gold/30 rounded-lg p-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-sand-light/70 text-sm mb-1">Total Characters</h3>
                    <p class="text-gold text-2xl font-bold">{{ number_format($totalCharacters) }}</p>
                </div>
                <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <div class="mt-2 text-sand-light/60 text-xs">
                Across {{ number_format($totalUsers) }} accounts
            </div>
        </div>

        <div class="bg-midnight-light/30 border border-gold/30 rounded-lg p-4">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-sand-light/70 text-sm mb-1">Total Guilds</h3>
                    <p class="text-gold text-2xl font-bold">{{ number_format($totalGuilds) }}</p>
                </div>
                <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v1h8v-1zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-1a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v1H1v-3a3 3 0 013.75-.906z" />
                    </svg>
                </div>
            </div>
            <div class="mt-2 text-sand-light/60 text-xs">
                Active guilds
            </div>
        </div>
    </div>

    <!-- Economy Overview -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-midnight-light/30 border border-gold/30 rounded-lg p-6">
            <h2 class="text-xl font-cinzel font-bold text-gold mb-4">Economy Overview</h2>
            
            <div class="space-y-4">
                <div class="flex justify-between items-center p-3 bg-midnight-light/40 rounded-lg">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center mr-3">
                            <span class="text-gold">💰</span>
                        </div>
                        <span class="text-sand-light">Total Gold</span>
                    </div>
                    <span class="text-gold font-bold">{{ number_format($totalGold) }}M</span>
                </div>
                
                <div class="flex justify-between items-center p-3 bg-midnight-light/40 rounded-lg">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center mr-3">
                            <span class="text-gold">💎</span>
                        </div>
                        <span class="text-sand-light">Total Silk</span>
                    </div>
                    <span class="text-gold font-bold">{{ number_format($totalSilk) }}</span>
                </div>
            </div>
            
            <div class="mt-4">
                <a href="{{ route('admin.statistics.economy') }}" class="text-gold hover:text-gold-light text-sm flex items-center justify-end">
                    View detailed economy stats
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
        
        <div class="bg-midnight-light/30 border border-gold/30 rounded-lg p-6">
            <h2 class="text-xl font-cinzel font-bold text-gold mb-4">Gamification Stats</h2>
            
            <div class="space-y-4">
                <div class="flex justify-between items-center p-3 bg-midnight-light/40 rounded-lg">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center mr-3">
                            <span class="text-gold">🏆</span>
                        </div>
                        <span class="text-sand-light">Total Achievements</span>
                    </div>
                    <span class="text-gold font-bold">{{ number_format($totalAchievements) }}</span>
                </div>
                
                <div class="flex justify-between items-center p-3 bg-midnight-light/40 rounded-lg">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center mr-3">
                            <span class="text-gold">⭐</span>
                        </div>
                        <span class="text-sand-light">Leaderboard Leaders</span>
                    </div>
                    <span class="text-gold font-bold">
                        @if($topUsers->count() > 0)
                            {{ $topUsers->first()->StrUserID }} ({{ number_format($topUsers->first()->points) }})
                        @else
                            No data
                        @endif
                    </span>
                </div>
            </div>
            
            <div class="mt-4">
                <a href="{{ route('admin.gamification') }}" class="text-gold hover:text-gold-light text-sm flex items-center justify-end">
                    Manage gamification
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Access -->
    <div class="bg-midnight-light/30 border border-gold/30 rounded-lg p-6 mb-8">
        <h2 class="text-xl font-cinzel font-bold text-gold mb-4">Quick Access</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <a href="{{ route('admin.users.index') }}" class="flex items-center p-3 bg-midnight-light/40 rounded-lg hover:bg-gold/20 transition-colors">
                <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v1h8v-1zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-1a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v1H1v-3a3 3 0 013.75-.906z" />
                    </svg>
                </div>
                <div>
                    <h4 class="text-sand-light font-medium">User Management</h4>
                    <p class="text-sand-light/70 text-xs">Manage user accounts</p>
                </div>
            </a>
            
            <a href="{{ route('admin.characters.index') }}" class="flex items-center p-3 bg-midnight-light/40 rounded-lg hover:bg-gold/20 transition-colors">
                <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h4 class="text-sand-light font-medium">Characters</h4>
                    <p class="text-sand-light/70 text-xs">Manage game characters</p>
                </div>
            </a>
            
            <a href="{{ route('admin.guilds.index') }}" class="flex items-center p-3 bg-midnight-light/40 rounded-lg hover:bg-gold/20 transition-colors">
                <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v1h8v-1zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-1a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v1H1v-3a3 3 0 013.75-.906z" />
                    </svg>
                </div>
                <div>
                    <h4 class="text-sand-light font-medium">Guilds</h4>
                    <p class="text-sand-light/70 text-xs">Manage in-game guilds</p>
                </div>
            </a>
            
            <a href="{{ route('admin.announcements.index') }}" class="flex items-center p-3 bg-midnight-light/40 rounded-lg hover:bg-gold/20 transition-colors">
                <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h4 class="text-sand-light font-medium">Announcements</h4>
                    <p class="text-sand-light/70 text-xs">Manage game announcements</p>
                </div>
            </a>
            
            <a href="{{ route('admin.statistics.index') }}" class="flex items-center p-3 bg-midnight-light/40 rounded-lg hover:bg-gold/20 transition-colors">
                <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                    </svg>
                </div>
                <div>
                    <h4 class="text-sand-light font-medium">Statistics</h4>
                    <p class="text-sand-light/70 text-xs">View game statistics</p>
                </div>
            </a>
            
            <a href="{{ route('admin.gamification') }}" class="flex items-center p-3 bg-midnight-light/40 rounded-lg hover:bg-gold/20 transition-colors">
                <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                <div>
                    <h4 class="text-sand-light font-medium">Gamification</h4>
                    <p class="text-sand-light/70 text-xs">Manage point system</p>
                </div>
            </a>
        </div>
    </div>

    <!-- Top Users -->
    <div class="bg-midnight-light/30 border border-gold/30 rounded-lg p-6">
        <h2 class="text-xl font-cinzel font-bold text-gold mb-4">Top Gamification Users</h2>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="text-sand-light/70 border-b border-midnight">
                        <th class="p-2">Rank</th>
                        <th class="p-2">Username</th>
                        <th class="p-2 text-right">Points</th>
                        <th class="p-2 text-right">Level</th>
                        <th class="p-2 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($topUsers as $index => $user)
                        <tr class="border-b border-midnight/50 text-sand-light">
                            <td class="p-2">
                                <span class="w-6 h-6 rounded-full inline-flex items-center justify-center {{ $index < 3 ? 'bg-gold/20' : 'bg-midnight-light/50' }}">
                                    {{ $index + 1 }}
                                </span>
                            </td>
                            <td class="p-2">{{ $user->StrUserID }}</td>
                            <td class="p-2 text-right">{{ number_format($user->points) }}</td>
                            <td class="p-2 text-right">{{ floor($user->points / 100) + 1 }}</td>
                            <td class="p-2 text-right">
                                <a href="{{ route('admin.users.show', $user->JID) }}" class="text-gold hover:text-gold-light">
                                    View
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="mt-4">
            <a href="{{ route('admin.gamification') }}" class="text-gold hover:text-gold-light text-sm flex items-center justify-end">
                View full leaderboard
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</div>
@endsection
