
@extends('website.layouts.app')

@section('title', 'Recharge Silk - Amun Sro')
@section('meta-description', 'Recharge Silk Units to enhance your gameplay on Amun Sro. Choose from various packages and power up your adventure in our Silkroad private server.')

@section('content')
    <!-- Hero Section -->
    <div class="page-hero relative" style="background-image: url('{{ asset('icons/feat_5.webp') }}');">
        <div class="container mx-auto px-4 text-center relative z-10 py-16">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4 hero-animate">Recharge Silk</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8 hero-animate hero-animate-delay-1">
                Power up your Amun Sro adventure with Silk - the fastest way to level up your gameplay
            </p>
            <div class="bg-midnight-dark/70 backdrop-blur-sm p-6 rounded-lg max-w-2xl mx-auto">
                <p class="text-gold mb-4 text-xl">Why choose Silk?</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sand-light">
                    <div class="flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gold mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <span>Power Up Fast</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gold mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                        </svg>
                        <span>Exclusive Items</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gold mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span>Stand Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="py-10 bg-sand-light relative z-20">
        <div class="container mx-auto px-4">
            <!-- Currency Selection -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-cinzel font-bold text-midnight mb-6">Select Your Currency</h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-3xl mx-auto">
                    <a href="{{ route('website.donate.currency', 'USDT') }}" class="bg-white hover:bg-gold-light border border-gold rounded-lg shadow p-6 flex flex-col items-center transition-all hover:scale-105">
                        <div class="bg-gold rounded-full p-3 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-midnight" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-midnight">US Dollar (USDT)</h3>
                        <p class="text-sm text-midnight-light mt-2">Stable cryptocurrency pegged to USD</p>
                    </a>
                    <a href="{{ route('website.donate.currency', 'TL') }}" class="bg-white hover:bg-gold-light border border-sand rounded-lg shadow p-6 flex flex-col items-center transition-all hover:scale-105">
                        <div class="bg-midnight-light/10 rounded-full p-3 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-midnight" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-midnight">Turkish Lira (TL)</h3>
                        <p class="text-sm text-midnight-light mt-2">Local Turkish currency</p>
                    </a>
                    <a href="{{ route('website.donate.currency', 'EGP') }}" class="bg-white hover:bg-gold-light border border-sand rounded-lg shadow p-6 flex flex-col items-center transition-all hover:scale-105">
                        <div class="bg-midnight-light/10 rounded-full p-3 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-midnight" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-midnight">Egyptian Pound (EGP)</h3>
                        <p class="text-sm text-midnight-light mt-2">Local Egyptian currency</p>
                    </a>
                    <a href="{{ route('website.donate.currency', 'BRL') }}" class="bg-white hover:bg-gold-light border border-sand rounded-lg shadow p-6 flex flex-col items-center transition-all hover:scale-105">
                        <div class="bg-midnight-light/10 rounded-full p-3 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-midnight" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-midnight">Brazilian Real (BRL)</h3>
                        <p class="text-sm text-midnight-light mt-2">Local Brazilian currency</p>
                    </a>
                </div>
            </div>

            <!-- Featured Packages Preview -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-10">
                <h3 class="text-2xl font-cinzel font-bold text-midnight text-center mb-6">Popular Packages</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach(array_slice($paymentInformation['packages'], 4, 3) as $package)
                        <div class="border border-sand rounded-lg overflow-hidden transition-all hover:border-gold">
                            <div class="bg-gradient-to-r from-gold-dark to-gold p-4 text-center">
                                <div class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    +{{ $package['bonus'] }} BONUS
                                </div>
                                <h3 class="text-2xl font-cinzel font-bold text-midnight-dark">{{ number_format($package['silk']) }} Silk</h3>
                            </div>
                            <div class="p-4 text-center">
                                <p class="text-midnight-light mb-4">Select your currency to see pricing and purchase this package</p>
                                <div class="flex justify-center space-x-3">
                                    <a href="{{ route('website.donate.currency', 'USDT') }}" class="px-3 py-1 bg-gold text-midnight-dark text-sm rounded font-bold hover:bg-gold-dark transition-colors">USDT</a>
                                    <a href="{{ route('website.donate.currency', 'TL') }}" class="px-3 py-1 bg-midnight-light/10 text-midnight text-sm rounded font-bold hover:bg-midnight-light/20 transition-colors">TL</a>
                                    <a href="{{ route('website.donate.currency', 'EGP') }}" class="px-3 py-1 bg-midnight-light/10 text-midnight text-sm rounded font-bold hover:bg-midnight-light/20 transition-colors">EGP</a>
                                    <a href="{{ route('website.donate.currency', 'BRL') }}" class="px-3 py-1 bg-midnight-light/10 text-midnight text-sm rounded font-bold hover:bg-midnight-light/20 transition-colors">BRL</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Simple FAQ -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-10">
                <h3 class="text-2xl font-cinzel font-bold text-midnight text-center mb-6">Common Questions</h3>
                <div class="space-y-4">
                    <div class="border-b border-sand pb-4">
                        <h4 class="text-lg font-bold text-midnight mb-2">How quickly will I receive my Silk?</h4>
                        <p class="text-midnight-light">Silk is credited to your account immediately after payment confirmation. You'll be ready to use it within minutes!</p>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-midnight mb-2">Is it safe to purchase Silk?</h4>
                        <p class="text-midnight-light">Absolutely! We use industry-standard encryption to protect your payment details. We never store sensitive payment information on our servers.</p>
                    </div>
                </div>
            </div>

            <!-- CTA at Bottom -->
            <div class="text-center mb-8">
                <h3 class="text-2xl font-cinzel font-bold text-midnight mb-4">Ready to Power Up Your Gameplay?</h3>
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('website.donate.currency', 'USDT') }}" class="inline-block bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-3 px-6 rounded-lg transition-colors">
                        Buy with USDT
                    </a>
                    <a href="{{ route('website.donate.currency', 'TL') }}" class="inline-block border border-midnight-light text-midnight hover:bg-midnight-light/10 font-bold py-3 px-6 rounded-lg transition-colors">
                        Buy with TL
                    </a>
                    <a href="{{ route('website.donate.currency', 'EGP') }}" class="inline-block border border-midnight-light text-midnight hover:bg-midnight-light/10 font-bold py-3 px-6 rounded-lg transition-colors">
                        Buy with EGP
                    </a>
                    <a href="{{ route('website.donate.currency', 'BRL') }}" class="inline-block border border-midnight-light text-midnight hover:bg-midnight-light/10 font-bold py-3 px-6 rounded-lg transition-colors">
                        Buy with BRL
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
