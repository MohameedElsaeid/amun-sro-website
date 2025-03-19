
@extends('website.layouts.app')

@section('title', 'Recharge Silk - Amun Sro')
@section('meta-description', 'Recharge Silk Units to enhance your gameplay on Amun Sro. Choose from various packages and power up your adventure in our Silkroad private server.')

@section('content')
    <!-- Hero Section with Simplified Message -->
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

    <!-- Main Content - Simplified Package Selection -->
    <main class="py-10 bg-sand-light relative z-20">
        <div class="container mx-auto px-4">
            <!-- Currency Selection - Simplified -->
            <div class="text-center mb-8 bg-white p-4 rounded-lg shadow">
                <h3 class="text-xl font-bold text-midnight mb-4">Select Currency</h3>
                <div class="flex justify-center flex-wrap gap-2">
                    <button type="button" class="currency-option px-4 py-2 rounded-lg bg-midnight-light/10 text-midnight font-bold hover:bg-gold hover:text-midnight-dark transition-colors" data-currency="TL">TL</button>
                    <button type="button" class="currency-option px-4 py-2 rounded-lg bg-midnight-light/10 text-midnight font-bold hover:bg-gold hover:text-midnight-dark transition-colors" data-currency="EGP">EGP</button>
                    <button type="button" class="currency-option px-4 py-2 rounded-lg bg-midnight-light/10 text-midnight font-bold hover:bg-gold hover:text-midnight-dark transition-colors" data-currency="USDT">USDT</button>
                </div>
            </div>

            <!-- Most Popular Packages - Highlight only a few options -->
            <div id="silk-packages" class="mb-10">
                <h2 class="text-3xl font-cinzel font-bold text-midnight text-center mb-6">Popular Packages</h2>

                <form id="donation-form">
                    @csrf
                    <!-- Featured Packages - Only show 3 most popular -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        @foreach(array_slice($paymentInformation['packages'], 4, 3) as $index => $package)
                            <div class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all transform hover:scale-105" data-package-id="{{ $index + 4 }}">
                                <div class="package-header bg-gradient-to-r from-gold-dark to-gold p-4 text-center @if($package['label']) relative overflow-hidden @endif">
                                    @if($package['label'])
                                        <div class="package-popular absolute top-0 right-0 bg-midnight text-gold text-xs font-bold px-4 py-1 transform rotate-45 translate-x-6 translate-y-3">
                                            {{ $package['label'] }}
                                        </div>
                                    @endif

                                    <div class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">
                                        +{{ $package['bonus'] }} BONUS
                                    </div>
                                    <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">{{ number_format($package['silk']) }} Silk</h3>
                                </div>
                                <div class="package-content p-6">
                                    <div class="price-list space-y-2 mb-6">
                                        @foreach($package['prices'] as $currency => $price)
                                            <div class="price-item flex justify-between" data-currency="{{ $currency }}">
                                                <span class="text-midnight-light">Price ({{ $currency }}):</span>
                                                <span class="font-bold text-midnight">{{ number_format($price) }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button type="button" class="select-package w-full bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-2 px-4 rounded-lg transition-colors">
                                        Select Package
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Show More Packages Toggle Button -->
                    <div class="text-center mb-8">
                        <button type="button" id="toggle-all-packages" class="inline-flex items-center px-6 py-3 border border-gold rounded-md shadow-sm text-base font-medium text-midnight bg-gold hover:bg-gold-dark transition-colors">
                            <span id="toggle-text">Show All Packages</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" id="toggle-icon">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <!-- All Packages (Initially Hidden) -->
                    <div id="all-packages" class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-12 hidden">
                        @foreach($paymentInformation['packages'] as $index => $package)
                            @if(!in_array($index, [4, 5, 6]))
                                <div class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-md" data-package-id="{{ $index }}">
                                    <div class="package-header bg-gradient-to-r from-gold-dark to-gold p-3 text-center @if($package['label']) relative overflow-hidden @endif">
                                        @if($package['label'])
                                            <div class="package-popular absolute top-0 right-0 bg-midnight text-gold text-xs font-bold px-4 py-1 transform rotate-45 translate-x-6 translate-y-3">
                                                {{ $package['label'] }}
                                            </div>
                                        @endif
                                        <div class="package-bonus inline-block bg-midnight text-gold-dark text-xs font-bold px-2 py-1 rounded-full mb-2">
                                            +{{ $package['bonus'] }} BONUS
                                        </div>
                                        <h3 class="silk-amount text-xl font-cinzel font-bold text-midnight-dark">{{ number_format($package['silk']) }} Silk</h3>
                                    </div>
                                    <div class="package-content p-4">
                                        <div class="price-list space-y-1 mb-4 text-sm">
                                            @foreach($package['prices'] as $currency => $price)
                                                <div class="price-item flex justify-between" data-currency="{{ $currency }}">
                                                    <span class="text-midnight-light">{{ $currency }}:</span>
                                                    <span class="font-bold text-midnight">{{ number_format($price) }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="button" class="select-package w-full bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-2 px-4 rounded-lg transition-colors text-sm">
                                            Select
                                        </button>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <!-- Payment Section - Simplified -->
                    <div class="payment-section bg-white p-6 rounded-lg shadow-lg border border-gold mb-8 hidden" id="payment-container">
                        <div class="flex items-center justify-between mb-4 border-b border-sand pb-4">
                            <h3 class="text-2xl font-cinzel font-bold text-midnight">Complete Your Purchase</h3>
                            <button type="button" id="change-package" class="text-gold hover:text-gold-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Order Summary - Compact -->
                        <div class="order-summary bg-midnight-light/5 p-4 rounded-lg mb-6">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-midnight font-bold">Selected Package:</span>
                                <span class="font-bold text-midnight-dark text-lg" id="summary-package">-</span>
                            </div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-midnight-light">Bonus:</span>
                                <span class="text-gold-dark font-bold" id="summary-bonus">-</span>
                            </div>
                            <div class="border-t border-sand-light my-2 pt-2">
                                <div class="flex justify-between items-center text-lg">
                                    <span class="text-midnight font-bold">Total Amount:</span>
                                    <div>
                                        <span class="font-bold text-midnight-dark" id="summary-total">-</span>
                                        <span class="font-bold text-midnight-light ml-1" id="summary-currency">TL</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Methods - Simplified Grid -->
                        <div class="mb-6">
                            <h4 class="font-bold text-midnight mb-3">Select Payment Method:</h4>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                @foreach($paymentInformation['paymentMethods'] as $index => $paymentMethod)
                                    <div class="payment-method bg-white border border-sand hover:bg-gold-light rounded-lg p-3 text-center cursor-pointer hover:border-gold transition-colors" data-method-id="{{ $index }}">
                                        <img src="{{ $paymentMethod['icon'] }}" alt="{{ $paymentMethod['method'] }}" class="h-8 mx-auto mb-2">
                                        <span class="payment-name font-bold text-midnight text-sm">{{ $paymentMethod['method'] }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Submit Button - More Prominent -->
                        <button type="submit" class="donation-submit-btn w-full bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-4 px-6 rounded-lg transition-colors text-lg opacity-50 cursor-not-allowed flex items-center justify-center" disabled>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Complete Purchase
                        </button>

                        <p class="security-note mt-4 text-center text-sm text-midnight-light flex items-center justify-center">
                            <svg class="secure-icon inline-block h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                            Secure payment processing. Your payment details are encrypted and protected.
                        </p>
                    </div>
                </form>
            </div>
            <!-- CTA at Bottom -->
            <div class="text-center mb-8">
                <h3 class="text-2xl font-cinzel font-bold text-midnight mb-4">Ready to Power Up Your Gameplay?</h3>
                <a href="#silk-packages" class="inline-block bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-3 px-8 rounded-lg transition-colors text-lg">
                    Choose Your Package Now
                </a>
            </div>
        </div>
    </main>

    @include('website.pages.donation.components.payment-modal')
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle all packages
            const toggleButton = document.getElementById('toggle-all-packages');
            const allPackagesContainer = document.getElementById('all-packages');
            const toggleText = document.getElementById('toggle-text');
            const toggleIcon = document.getElementById('toggle-icon');

            if (toggleButton && allPackagesContainer) {
                toggleButton.addEventListener('click', function() {
                    allPackagesContainer.classList.toggle('hidden');
                    if (allPackagesContainer.classList.contains('hidden')) {
                        toggleText.textContent = 'Show All Packages';
                        toggleIcon.innerHTML = '<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />';
                    } else {
                        toggleText.textContent = 'Hide Extra Packages';
                        toggleIcon.innerHTML = '<path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />';
                    }
                });
            }

            // Change package button functionality
            const changePackageBtn = document.getElementById('change-package');
            const paymentContainer = document.getElementById('payment-container');

            if (changePackageBtn && paymentContainer) {
                changePackageBtn.addEventListener('click', function() {
                    paymentContainer.classList.add('hidden');
                    document.querySelectorAll('.package-card').forEach(card => {
                        card.classList.remove('selected');
                    });
                });
            }
        });
    </script>
@endpush
