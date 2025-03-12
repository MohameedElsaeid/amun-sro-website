
@extends('website.layouts.app')

@section('title', 'Events - Amun Sro')
@section('meta-description', 'View upcoming events and tournaments on Amun Sro – join battles, quests, and special community events on our Silkroad private server.')

@section('content')
    <!-- Hero Section -->
    <div class="page-hero relative" style="background-image: url('{{ asset('public/lovable-uploads/448f96e1-5e53-49a0-9d19-174707828ae4.png') }}');">
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4">Upcoming Events</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8">Join our special tournaments and community gatherings</p>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-16 bg-midnight-dark relative z-20">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-lg shadow-lg p-8 mb-12 relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Featured Event -->
                    <div class="md:col-span-2 lg:col-span-3">
                        <div class="relative rounded-lg overflow-hidden">
                            <img src="{{ asset('icons/feat_4.webp') }}" alt="Featured Event" class="w-full h-64 object-cover" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-midnight-dark to-transparent"></div>
                            <div class="absolute bottom-0 left-0 p-6">
                                <span class="bg-gold-dark text-midnight-dark text-xs font-bold px-3 py-1 rounded-full inline-block mb-3">FEATURED</span>
                                <h2 class="text-2xl font-cinzel font-bold text-white mb-2">Pharaoh's Tournament</h2>
                                <p class="text-sand-light mb-4">Join the ultimate battle for glory and treasures!</p>
                                <div class="flex items-center text-sand">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span>May 15 - May 20, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Regular Event Cards -->
                    <div class="bg-sand p-6 rounded-lg transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-gold-dark text-white text-xs font-bold px-3 py-1 rounded-full">PVP</span>
                            <span class="text-midnight-light text-sm">May 5, 2023</span>
                        </div>
                        <h3 class="text-xl font-cinzel font-bold text-midnight-dark mb-2">Desert Arena Challenge</h3>
                        <p class="text-midnight mb-4">Compete in duels to claim the title of Arena Champion.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-midnight-light">Level Requirement: 50+</span>
                            <a href="#" class="text-gold-dark hover:text-gold font-medium">Details →</a>
                        </div>
                    </div>

                    <div class="bg-sand p-6 rounded-lg transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-gold-dark text-white text-xs font-bold px-3 py-1 rounded-full">Guild War</span>
                            <span class="text-midnight-light text-sm">May 12, 2023</span>
                        </div>
                        <h3 class="text-xl font-cinzel font-bold text-midnight-dark mb-2">Battle for Oasis</h3>
                        <p class="text-midnight mb-4">Guild versus guild battle for control of the sacred oasis.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-midnight-light">Guild Requirement: Level 5+</span>
                            <a href="#" class="text-gold-dark hover:text-gold font-medium">Details →</a>
                        </div>
                    </div>

                    <div class="bg-sand p-6 rounded-lg transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-gold-dark text-white text-xs font-bold px-3 py-1 rounded-full">Boss Hunt</span>
                            <span class="text-midnight-light text-sm">May 20, 2023</span>
                        </div>
                        <h3 class="text-xl font-cinzel font-bold text-midnight-dark mb-2">Anubis Awakening</h3>
                        <p class="text-midnight mb-4">Team up to defeat the mighty Anubis and claim ancient relics.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-midnight-light">Level Requirement: 70+</span>
                            <a href="#" class="text-gold-dark hover:text-gold font-medium">Details →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
