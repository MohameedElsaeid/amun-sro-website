@extends('website.layouts.app')

@section('title', 'Character - Amun Sro')
@section('meta-description', 'Explore your character information on Amun Sro – view stats, equipment, skills, and progression on our Silkroad private server.')

@section('content')
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-cinzel font-bold text-midnight-dark mb-8 text-center">Character Information</h1>
            <div class="bg-white rounded-lg shadow-lg p-8 mb-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Left Column: Character Preview -->
                    <div class="col-span-1">
                        <div class="bg-midnight-dark p-6 rounded-lg text-center">
                            <img src="https://via.placeholder.com/300x400/303952/d4af37?text=Character" alt="Character Preview" class="mx-auto mb-4 border-4 border-gold-dark" loading="lazy">
                            <h2 class="text-2xl font-cinzel font-bold text-gold mb-2">Character Name</h2>
                            <p class="text-sand mb-4">Level 75 Warrior</p>
                            <div class="grid grid-cols-2 gap-4 text-left">
                                <div>
                                    <p class="text-sand-light text-sm">Guild</p>
                                    <p class="text-gold">Pharaoh's Guard</p>
                                </div>
                                <div>
                                    <p class="text-sand-light text-sm">Rank</p>
                                    <p class="text-gold">Elite</p>
                                </div>
                                <div>
                                    <p class="text-sand-light text-sm">Reputation</p>
                                    <p class="text-gold">Honored</p>
                                </div>
                                <div>
                                    <p class="text-sand-light text-sm">PvP Rank</p>
                                    <p class="text-gold">Commander</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right Column: Detailed Stats -->
                    <div class="col-span-2">
                        <div class="mb-8">
                            <h3 class="text-2xl font-cinzel font-bold text-midnight-dark mb-4">Character Stats</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="bg-sand p-4 rounded-lg text-center">
                                    <p class="text-midnight-dark text-sm">Strength</p>
                                    <p class="text-xl font-bold text-gold-dark">325</p>
                                </div>
                                <div class="bg-sand p-4 rounded-lg text-center">
                                    <p class="text-midnight-dark text-sm">Agility</p>
                                    <p class="text-xl font-bold text-gold-dark">210</p>
                                </div>
                                <div class="bg-sand p-4 rounded-lg text-center">
                                    <p class="text-midnight-dark text-sm">Intelligence</p>
                                    <p class="text-xl font-bold text-gold-dark">156</p>
                                </div>
                                <div class="bg-sand p-4 rounded-lg text-center">
                                    <p class="text-midnight-dark text-sm">Vitality</p>
                                    <p class="text-xl font-bold text-gold-dark">289</p>
                                </div>
                                <!-- Additional stats… -->
                            </div>
                        </div>
                        <div class="mb-8">
                            <h3 class="text-2xl font-cinzel font-bold text-midnight-dark mb-4">Equipment</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div class="bg-sand p-4 rounded-lg text-center">
                                    <img src="https://via.placeholder.com/60x60/d4af37/303952?text=Helm" alt="Helm" class="mx-auto mb-2" loading="lazy">
                                    <p class="text-midnight-dark">Pharaoh's Crown</p>
                                </div>
                                <!-- Repeat for other equipment -->
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-cinzel font-bold text-midnight-dark mb-4">Skills & Abilities</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="bg-sand p-4 rounded-lg">
                                    <div class="flex justify-between items-center mb-2">
                                        <p class="font-bold text-midnight-dark">Desert Storm</p>
                                        <span class="text-xs text-white bg-gold-dark px-2 py-1 rounded">Level 8</span>
                                    </div>
                                    <p class="text-sm text-midnight">Unleash a powerful sandstorm that damages all enemies in range.</p>
                                </div>
                                <!-- Repeat for other skills -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Achievements and Progression Sections can be added below similarly -->
        </div>
    </section>
@endsection
