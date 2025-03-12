
@extends('website.layouts.app')

@section('title', 'Ranking - Amun Sro')
@section('meta-description', 'View player rankings for Amun Sro. See the top warriors, leaderboards, and character stats on our Silkroad private server.')

@section('content')
    <!-- Hero Section -->
    <div class="page-hero relative" style="background-image: url('{{ asset('public/lovable-uploads/7499e1eb-7ca5-42dd-8414-75d7d21a379e.png') }}');">
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4">Player Rankings</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8">Discover the most powerful warriors in Amun Sro's ancient world</p>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-16 bg-sand relative z-20">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-lg shadow-md overflow-hidden relative z-10">
                <div class="p-4 bg-midnight text-sand flex flex-col md:flex-row justify-between items-center">
                    <h2 class="text-2xl font-cinzel font-bold mb-4 md:mb-0">Top 100 Players</h2>
                    <div class="flex space-x-2">
                        <select class="bg-midnight-light text-sand-light border border-gold-dark rounded px-3 py-2">
                            <option>All Classes</option>
                            <option>Pharaoh</option>
                            <option>High Priest</option>
                            <option>Guardian</option>
                            <option>Scribe</option>
                            <option>Warrior</option>
                        </select>
                        <select class="bg-midnight-light text-sand-light border border-gold-dark rounded px-3 py-2">
                            <option>Level</option>
                            <option>Power</option>
                            <option>PvP Score</option>
                            <option>Guild Rank</option>
                        </select>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-midnight-light/10 text-midnight">
                        <tr>
                            <th class="py-3 px-6 font-cinzel">Rank</th>
                            <th class="py-3 px-6 font-cinzel">Character</th>
                            <th class="py-3 px-6 font-cinzel">Class</th>
                            <th class="py-3 px-6 font-cinzel">Level</th>
                            <th class="py-3 px-6 font-cinzel">Power</th>
                            <th class="py-3 px-6 font-cinzel">Guild</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Example static rows; replace with dynamic data -->
                        <tr class="border-b border-sand">
                            <td class="py-4 px-6">
                                <span class="inline-block bg-gold text-white font-bold px-2 py-1 rounded text-center w-8">1</span>
                            </td>
                            <td class="py-4 px-6 font-medium">Anubis_King</td>
                            <td class="py-4 px-6">Guardian</td>
                            <td class="py-4 px-6">120</td>
                            <td class="py-4 px-6">25,430</td>
                            <td class="py-4 px-6">Pharaoh's Elite</td>
                        </tr>
                        <!-- Repeat for more rows -->
                        </tbody>
                    </table>
                </div>

                <div class="flex justify-between items-center p-4 border-t border-sand">
                    <div class="text-midnight">Showing 1-10 of 100 players</div>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 bg-midnight text-sand-light rounded disabled:opacity-50" disabled>Previous</button>
                        <!-- Pagination links (replace with Laravel pagination links) -->
                        <button class="px-3 py-1 bg-gold-dark text-white rounded">1</button>
                        <button class="px-3 py-1 bg-midnight-light/10 text-midnight rounded hover:bg-midnight-light/20">2</button>
                        <button class="px-3 py-1 bg-midnight-light/10 text-midnight rounded hover:bg-midnight-light/20">3</button>
                        <button class="px-3 py-1 bg-midnight-light/10 text-midnight rounded hover:bg-midnight-light/20">...</button>
                        <button class="px-3 py-1 bg-midnight-light/10 text-midnight rounded hover:bg-midnight-light/20">10</button>
                        <button class="px-3 py-1 bg-midnight text-sand-light rounded hover:bg-midnight-dark">Next</button>
                    </div>
                </div>
            </div>

            <!-- Additional sections: Top Guilds, PvP Leaders, Recent Achievements -->
        </div>
    </section>
@endsection
