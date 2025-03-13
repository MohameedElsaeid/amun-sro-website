@extends('website.layouts.app')

@section('title', 'Rules - Amun Sro')
@section('meta-description', 'Review the game rules and guidelines for Amun Sro. Learn about general conduct, account policies, gameplay rules, and more on our Silkroad private server.')

@section('content')
    <!-- Hero Section -->
    <div class="page-hero page-hero-accent relative"
         style="background-image: url('{{ asset('icons/feat_6.webp') }}');">
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4 hero-animate">Game Rules</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8 hero-animate hero-animate-delay-1">
                Please familiarize yourself with our rules to ensure a fair and enjoyable gaming experience for all players.</p>
        </div>
    </div>
        <section class="py-12 bg-sand">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-cinzel font-bold text-midnight-dark mb-6 text-center"></h1>
                <p class="text-xl text-midnight text-center mb-12 max-w-3xl mx-auto"></p>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6 flex flex-col md:flex-row gap-8">
                        <aside class="md:w-1/4">
                            <div class="sticky top-6">
                                <h2 class="text-2xl font-cinzel font-bold text-midnight-dark mb-6">Table of Contents</h2>
                                <ul class="space-y-3">
                                    <li><a href="#general" class="text-gold-dark hover:text-gold transition-colors">General Rules</a></li>
                                    <li><a href="#account" class="text-gold-dark hover:text-gold transition-colors">Account Rules</a></li>
                                    <li><a href="#gameplay" class="text-gold-dark hover:text-gold transition-colors">Gameplay Rules</a></li>
                                    <li><a href="#chat" class="text-gold-dark hover:text-gold transition-colors">Chat & Communication</a></li>
                                    <li><a href="#guild" class="text-gold-dark hover:text-gold transition-colors">Guild Rules</a></li>
                                    <li><a href="#trading" class="text-gold-dark hover:text-gold transition-colors">Trading & Economy</a></li>
                                    <li><a href="#pvp" class="text-gold-dark hover:text-gold transition-colors">PvP Rules</a></li>
                                    <li><a href="#events" class="text-gold-dark hover:text-gold transition-colors">Event Participation</a></li>
                                    <li><a href="#violations" class="text-gold-dark hover:text-gold transition-colors">Rule Violations</a></li>
                                </ul>
                            </div>
                        </aside>
                        <article class="md:w-3/4">
                            <section id="general" class="mb-12">
                                <h2 class="text-2xl font-cinzel font-bold text-midnight-dark mb-4">General Rules</h2>
                                <div class="space-y-4">
                                    <p>ASRO is designed to be an enjoyable experience for all players. To maintain a respectful and fun environment, please follow these rules:</p>
                                    <ul class="list-disc pl-6 space-y-2">
                                        <li>Respect all players.</li>
                                        <li>No harassment or hate speech.</li>
                                        <li>Avoid offensive content.</li>
                                        <li>Do not impersonate staff.</li>
                                        <li>Report bugs or exploits immediately.</li>
                                        <li>Follow moderator instructions.</li>
                                    </ul>
                                    <p class="bg-midnight-light/10 p-4 rounded-md border-l-4 border-gold-dark mt-4">Our goal is a fair and welcoming environment for everyone.</p>
                                </div>
                            </section>
                            <!-- Repeat similar sections for Account, Gameplay, Chat, Guild, Trading, PvP, Events, Violations -->
                            <section id="violations" class="mb-12">
                                <h2 class="text-2xl font-cinzel font-bold text-midnight-dark mb-4">Rule Violations</h2>
                                <div class="space-y-4">
                                    <p>Violations will be penalized as follows:</p>
                                    <ul class="list-disc pl-6 space-y-2">
                                        <li>First offense: Warning</li>
                                        <li>Repeated minor offenses: Temporary suspension</li>
                                        <li>Serious violations: Longer suspension or permanent ban</li>
                                        <li>Severe violations may result in immediate bans.</li>
                                    </ul>
                                    <p class="bg-midnight-light/10 p-4 rounded-md border-l-4 border-gold-dark mt-4">The administration reserves the right to adjust penalties as needed.</p>
                                </div>
                            </section>
                            <!-- Final Note -->
                            <div class="p-6 bg-midnight text-sand-light rounded-lg">
                                <h3 class="text-xl font-cinzel font-bold mb-3">Final Note</h3>
                                <p>By playing ASRO you agree to these rules. If you have questions, please contact support.</p>
                                <p class="mt-3 text-gold">Last updated: July 15, 2023</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
@endsection
