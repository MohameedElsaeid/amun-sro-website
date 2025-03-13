@extends('website.layouts.app')

@section('title', 'Ranking - Amun Sro')
@section('meta-description', 'View player rankings for Amun Sro. See the top warriors, leaderboards, and character stats on our Silkroad private server.')

@section('content')
    <!-- Hero Section -->
    <div class="page-hero page-hero-accent relative"
         style="background-image: url('{{ asset('icons/feat_6.webp') }}');">
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4 hero-animate">Player Rankings</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8 hero-animate hero-animate-delay-1">
                Discover the most powerful warriors in Amun Sro's ancient world</p>
            <a href="#rankings-table" class="hero-cta hero-animate hero-animate-delay-2">View Rankings</a>
        </div>
    </div>

    <!-- Main Content -->
    <section id="rankings-table" class="py-16 bg-sand-light relative z-20"  style="background-image: url('{{ asset('icons/feat_2_opacity_30.webp') }}');">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-lg shadow-xl overflow-hidden relative z-10">
                <div class="p-6 bg-midnight text-sand">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <h2 class="text-2xl font-cinzel font-bold mb-4 md:mb-0">Top 100 Players</h2>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <div class="flex space-x-2">
                                <select
                                    class="bg-midnight-light text-sand-light border border-gold-dark rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gold">
                                    <option>All Classes</option>
                                    <option>Pharaoh</option>
                                    <option>High Priest</option>
                                    <option>Guardian</option>
                                    <option>Scribe</option>
                                    <option>Warrior</option>
                                </select>
                                <select
                                    class="bg-midnight-light text-sand-light border border-gold-dark rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gold">
                                    <option>Level</option>
                                    <option>Power</option>
                                    <option>PvP Score</option>
                                    <option>Guild Rank</option>
                                </select>
                            </div>
                            <div class="relative">
                                <input
                                    type="text"
                                    placeholder="Search character..."
                                    class="bg-midnight-light text-sand-light border border-gold-dark rounded pl-10 pr-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-gold"
                                >
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5 absolute left-3 top-2.5 text-gold-dark" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-midnight-light/10 text-midnight">
                        <tr>
                            <th class="py-4 px-6 font-cinzel">Rank</th>
                            <th class="py-4 px-6 font-cinzel">Character</th>
                            <th class="py-4 px-6 font-cinzel">Class</th>
                            <th class="py-4 px-6 font-cinzel">Level</th>
                            <th class="py-4 px-6 font-cinzel">Power</th>
                            <th class="py-4 px-6 font-cinzel">Guild</th>
                            <th class="py-4 px-6 font-cinzel">PvP Score</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Top rank with special styling -->
                        <tr class="border-b border-sand bg-gold/5 hover:bg-gold/10 transition-colors">
                            <td class="py-4 px-6">
                                <span
                                    class="inline-block bg-gold text-white font-bold px-2 py-1 rounded text-center w-8">1</span>
                            </td>
                            <td class="py-4 px-6 font-medium">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    Anubis_King
                                </div>
                            </td>
                            <td class="py-4 px-6">Guardian</td>
                            <td class="py-4 px-6">120</td>
                            <td class="py-4 px-6">25,430</td>
                            <td class="py-4 px-6">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gold/20 text-gold-dark">
                                        Pharaoh's Elite
                                    </span>
                            </td>
                            <td class="py-4 px-6">1,245</td>
                        </tr>

                        <!-- Rank 2 -->
                        <tr class="border-b border-sand hover:bg-sand/10 transition-colors">
                            <td class="py-4 px-6">
                                <span
                                    class="inline-block bg-sand-dark text-white font-bold px-2 py-1 rounded text-center w-8">2</span>
                            </td>
                            <td class="py-4 px-6 font-medium">ShadowHunter</td>
                            <td class="py-4 px-6">Warrior</td>
                            <td class="py-4 px-6">118</td>
                            <td class="py-4 px-6">24,850</td>
                            <td class="py-4 px-6">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-midnight-light/20 text-midnight">
                                        Dark Raiders
                                    </span>
                            </td>
                            <td class="py-4 px-6">1,120</td>
                        </tr>

                        <!-- Rank 3 -->
                        <tr class="border-b border-sand hover:bg-sand/10 transition-colors">
                            <td class="py-4 px-6">
                                <span
                                    class="inline-block bg-sand-dark text-white font-bold px-2 py-1 rounded text-center w-8">3</span>
                            </td>
                            <td class="py-4 px-6 font-medium">MysticQueen</td>
                            <td class="py-4 px-6">High Priest</td>
                            <td class="py-4 px-6">117</td>
                            <td class="py-4 px-6">23,975</td>
                            <td class="py-4 px-6">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-midnight-light/20 text-midnight">
                                        Nile Guardians
                                    </span>
                            </td>
                            <td class="py-4 px-6">980</td>
                        </tr>

                        <!-- More ranks -->
                        <tr class="border-b border-sand hover:bg-sand/10 transition-colors">
                            <td class="py-4 px-6">
                                <span
                                    class="inline-block bg-midnight-light/20 text-midnight font-bold px-2 py-1 rounded text-center w-8">4</span>
                            </td>
                            <td class="py-4 px-6 font-medium">DesertStorm</td>
                            <td class="py-4 px-6">Warrior</td>
                            <td class="py-4 px-6">116</td>
                            <td class="py-4 px-6">22,340</td>
                            <td class="py-4 px-6">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-midnight-light/20 text-midnight">
                                        Sand Raiders
                                    </span>
                            </td>
                            <td class="py-4 px-6">890</td>
                        </tr>

                        <tr class="border-b border-sand hover:bg-sand/10 transition-colors">
                            <td class="py-4 px-6">
                                <span
                                    class="inline-block bg-midnight-light/20 text-midnight font-bold px-2 py-1 rounded text-center w-8">5</span>
                            </td>
                            <td class="py-4 px-6 font-medium">PharaohKing</td>
                            <td class="py-4 px-6">Pharaoh</td>
                            <td class="py-4 px-6">115</td>
                            <td class="py-4 px-6">21,580</td>
                            <td class="py-4 px-6">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gold/20 text-gold-dark">
                                        Pharaoh's Elite
                                    </span>
                            </td>
                            <td class="py-4 px-6">865</td>
                        </tr>

                        <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>

                <div
                    class="flex flex-col md:flex-row justify-between items-center p-6 border-t border-sand bg-midnight-light/5">
                    <div class="text-midnight mb-4 md:mb-0">Showing 1-10 of 100 players</div>
                    <div class="flex flex-wrap justify-center gap-2">
                        <button class="px-3 py-1 bg-midnight text-sand-light rounded disabled:opacity-50" disabled>
                            Previous
                        </button>
                        <button class="px-3 py-1 bg-gold-dark text-white rounded">1</button>
                        <button class="px-3 py-1 bg-midnight-light/10 text-midnight rounded hover:bg-midnight-light/20">
                            2
                        </button>
                        <button class="px-3 py-1 bg-midnight-light/10 text-midnight rounded hover:bg-midnight-light/20">
                            3
                        </button>
                        <button class="px-3 py-1 bg-midnight-light/10 text-midnight rounded hover:bg-midnight-light/20">
                            ...
                        </button>
                        <button class="px-3 py-1 bg-midnight-light/10 text-midnight rounded hover:bg-midnight-light/20">
                            10
                        </button>
                        <button class="px-3 py-1 bg-midnight text-sand-light rounded hover:bg-midnight-dark">Next
                        </button>
                    </div>
                </div>
            </div>

            <!-- Additional Ranking Categories -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-16">
                <!-- Top Guilds -->
                <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                    <div class="p-4 bg-midnight text-sand">
                        <h2 class="text-xl font-cinzel font-bold">Top Guilds</h2>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-4">
                            <li class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <span
                                        class="inline-block bg-gold text-white font-bold px-2 py-1 rounded text-center w-8 mr-3">1</span>
                                    <span class="font-medium">Pharaoh's Elite</span>
                                </div>
                                <span class="text-midnight">Level 15</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <span
                                        class="inline-block bg-sand-dark text-white font-bold px-2 py-1 rounded text-center w-8 mr-3">2</span>
                                    <span class="font-medium">Dark Raiders</span>
                                </div>
                                <span class="text-midnight">Level 14</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <span
                                        class="inline-block bg-sand-dark text-white font-bold px-2 py-1 rounded text-center w-8 mr-3">3</span>
                                    <span class="font-medium">Nile Guardians</span>
                                </div>
                                <span class="text-midnight">Level 13</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <span
                                        class="inline-block bg-midnight-light/20 text-midnight font-bold px-2 py-1 rounded text-center w-8 mr-3">4</span>
                                    <span class="font-medium">Sand Raiders</span>
                                </div>
                                <span class="text-midnight">Level 12</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <span
                                        class="inline-block bg-midnight-light/20 text-midnight font-bold px-2 py-1 rounded text-center w-8 mr-3">5</span>
                                    <span class="font-medium">Ancient Seekers</span>
                                </div>
                                <span class="text-midnight">Level 11</span>
                            </li>
                        </ul>
                        <div class="mt-4 text-center">
                            <a href="#" class="text-gold hover:text-gold-dark font-medium">View All Guilds</a>
                        </div>
                    </div>
                </div>

                <!-- PvP Leaders -->
                <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                    <div class="p-4 bg-midnight text-sand">
                        <h2 class="text-xl font-cinzel font-bold">PvP Leaderboard</h2>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-4">
                            <li class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <span
                                        class="inline-block bg-gold text-white font-bold px-2 py-1 rounded text-center w-8 mr-3">1</span>
                                    <span class="font-medium">ShadowHunter</span>
                                </div>
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gold/20 text-gold-dark">1,245 Kills</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <span
                                        class="inline-block bg-sand-dark text-white font-bold px-2 py-1 rounded text-center w-8 mr-3">2</span>
                                    <span class="font-medium">Anubis_King</span>
                                </div>
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-midnight-light/20 text-midnight">1,120 Kills</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <span
                                        class="inline-block bg-sand-dark text-white font-bold px-2 py-1 rounded text-center w-8 mr-3">3</span>
                                    <span class="font-medium">DesertStorm</span>
                                </div>
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-midnight-light/20 text-midnight">980 Kills</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <span
                                        class="inline-block bg-midnight-light/20 text-midnight font-bold px-2 py-1 rounded text-center w-8 mr-3">4</span>
                                    <span class="font-medium">MysticQueen</span>
                                </div>
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-midnight-light/20 text-midnight">890 Kills</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <span
                                        class="inline-block bg-midnight-light/20 text-midnight font-bold px-2 py-1 rounded text-center w-8 mr-3">5</span>
                                    <span class="font-medium">PharaohKing</span>
                                </div>
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-midnight-light/20 text-midnight">865 Kills</span>
                            </li>
                        </ul>
                        <div class="mt-4 text-center">
                            <a href="#" class="text-gold hover:text-gold-dark font-medium">View All PvP Rankings</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Achievement Showcase -->
            <div class="mt-16 bg-white rounded-lg shadow-xl overflow-hidden">
                <div class="p-4 bg-midnight text-sand">
                    <h2 class="text-xl font-cinzel font-bold">Recent Achievements</h2>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div
                            class="achievement-card border border-sand rounded-lg p-4 hover:border-gold transition-colors">
                            <div class="flex items-center mb-3">
                                <div class="achievement-icon mr-3 text-gold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-midnight">Dungeon Conqueror</h4>
                                    <p class="text-sm text-midnight-light">2 hours ago</p>
                                </div>
                            </div>
                            <p class="text-midnight">Anubis_King completed the Temple of Osiris on Legendary
                                difficulty</p>
                        </div>

                        <div
                            class="achievement-card border border-sand rounded-lg p-4 hover:border-gold transition-colors">
                            <div class="flex items-center mb-3">
                                <div class="achievement-icon mr-3 text-gold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                                              clip-rule="evenodd"/>
                                        <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-midnight">Guild Formation</h4>
                                    <p class="text-sm text-midnight-light">5 hours ago</p>
                                </div>
                            </div>
                            <p class="text-midnight">Dark Raiders guild has been formed by ShadowHunter</p>
                        </div>

                        <div
                            class="achievement-card border border-sand rounded-lg p-4 hover:border-gold transition-colors">
                            <div class="flex items-center mb-3">
                                <div class="achievement-icon mr-3 text-gold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-midnight">Level Milestone</h4>
                                    <p class="text-sm text-midnight-light">1 day ago</p>
                                </div>
                            </div>
                            <p class="text-midnight">MysticQueen has reached level 117 - the first High Priest to do
                                so</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
