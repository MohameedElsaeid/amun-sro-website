@extends('website.layouts.app')

@section('title', 'Countdown - ASRO')
@section('meta-description', 'The countdown to our special event begins now!')

@section('content')
    <!-- Hero Section -->
    <div class="page-hero" style="background-image: url('{{ asset('icons/feat_3.webp') }}');">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4">Special Event Countdown</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8">Something epic is coming to ASRO
                in...</p>
        </div>
    </div>

    <!-- Countdown Section -->
    <section class="py-16 bg-midnight">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-midnight-light rounded-lg border border-gold/30 overflow-hidden shadow-lg p-8">
                    <div class="countdown-container" data-target-date="{{ $targetDate }}">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                            <div class="countdown-item">
                                <div class="bg-midnight-dark p-4 rounded-lg border border-gold/20">
                                    <span id="days"
                                          class="block text-4xl md:text-6xl font-bold text-gold mb-1">--</span>
                                    <span class="text-sand-light text-lg">Days</span>
                                </div>
                            </div>
                            <div class="countdown-item">
                                <div class="bg-midnight-dark p-4 rounded-lg border border-gold/20">
                                    <span id="hours"
                                          class="block text-4xl md:text-6xl font-bold text-gold mb-1">--</span>
                                    <span class="text-sand-light text-lg">Hours</span>
                                </div>
                            </div>
                            <div class="countdown-item">
                                <div class="bg-midnight-dark p-4 rounded-lg border border-gold/20">
                                    <span id="minutes"
                                          class="block text-4xl md:text-6xl font-bold text-gold mb-1">--</span>
                                    <span class="text-sand-light text-lg">Minutes</span>
                                </div>
                            </div>
                            <div class="countdown-item">
                                <div class="bg-midnight-dark p-4 rounded-lg border border-gold/20">
                                    <span id="seconds"
                                          class="block text-4xl md:text-6xl font-bold text-gold mb-1">--</span>
                                    <span class="text-sand-light text-lg">Seconds</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Event Information -->
                    <div class="mt-12 text-center">
                        <h2 class="text-3xl font-cinzel font-bold text-gold mb-4">Epic Server Launch</h2>
                        <p class="text-sand-light mb-6">Prepare yourself for the most epic adventure in ASRO history!
                            Our new server is launching with exciting new features, events, and rewards.</p>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                            <div class="bg-midnight-dark p-4 rounded-lg border border-gold/20">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gold mx-auto mb-3"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                <h3 class="text-xl font-cinzel font-bold text-gold mb-2">Boosted XP</h3>
                                <p class="text-sand-light">5x XP rates for the first week after launch!</p>
                            </div>

                            <div class="bg-midnight-dark p-4 rounded-lg border border-gold/20">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gold mx-auto mb-3"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <h3 class="text-xl font-cinzel font-bold text-gold mb-2">Welcome Package</h3>
                                <p class="text-sand-light">Free starter items for all new characters!</p>
                            </div>

                            <div class="bg-midnight-dark p-4 rounded-lg border border-gold/20">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gold mx-auto mb-3"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                                <h3 class="text-xl font-cinzel font-bold text-gold mb-2">Guild Bonuses</h3>
                                <p class="text-sand-light">Special bonuses for guilds formed in the first week!</p>
                            </div>
                        </div>

                        <div class="mt-10">
                            <a href="{{route('website.register')}}"
                               class="bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-3 px-6 rounded-md transition-colors inline-block">Pre-Register
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const countdownContainer = document.querySelector('.countdown-container');
            const targetDate = new Date(countdownContainer.dataset.targetDate).getTime();

            const daysElement = document.getElementById('days');
            const hoursElement = document.getElementById('hours');
            const minutesElement = document.getElementById('minutes');
            const secondsElement = document.getElementById('seconds');

            // Update the countdown every second
            const countdown = setInterval(function () {
                // Get current date and time
                const now = new Date().getTime();

                // Find the distance between now and the countdown date
                const distance = targetDate - now;

                // Calculate time units
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result
                if (daysElement) daysElement.textContent = days;
                if (hoursElement) hoursElement.textContent = hours;
                if (minutesElement) minutesElement.textContent = minutes;
                if (secondsElement) secondsElement.textContent = seconds;

                // If the countdown is finished, show expired message
                if (distance < 0) {
                    clearInterval(countdown);
                    if (daysElement) daysElement.textContent = '0';
                    if (hoursElement) hoursElement.textContent = '0';
                    if (minutesElement) minutesElement.textContent = '0';
                    if (secondsElement) secondsElement.textContent = '0';

                    // Add a message that the countdown has expired
                    const expiredElement = document.createElement('div');
                    expiredElement.className = 'text-center mt-8';
                    expiredElement.innerHTML = '<h2 class="text-3xl font-cinzel font-bold text-gold">The event has started!</h2>';
                    countdownContainer.appendChild(expiredElement);
                }
            }, 1000);
        });
    </script>
@endsection
