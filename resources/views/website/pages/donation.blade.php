@extends('website.layouts.app')

@section('title', 'Donate - Amun Sro')
@section('meta-description', 'Recharge Silk Units to support Amun Sro. Choose from various packages and enhance your gameplay on our Silkroad private server.')

@section('content')
    <!-- Hero Section -->
    <div class="page-hero page-hero-accent relative"
         style="background-image: url('{{ asset('public/lovable-uploads/ec116570-dc0d-4770-a1d8-bdabf61fe725.png') }}');">
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4 hero-animate">Support Amun Sro</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8 hero-animate hero-animate-delay-1">
                Enhance your gameplay with Silk units and help us maintain the world of Amun Sro</p>
            <a href="#donation-packages" class="hero-cta hero-animate hero-animate-delay-2">View Packages</a>
        </div>
    </div>

    <!-- Main Content -->
    <main class="py-16 bg-sand-light relative z-20">
        <div class="container mx-auto px-4">

            <!-- Why Donate Section -->
            <div class="mb-16 text-center">
                <h2 class="text-3xl font-cinzel font-bold text-midnight mb-6">Why Support Us?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
                    <div
                        class="benefit-card bg-white p-8 rounded-lg shadow-lg border-t-4 border-gold transform hover:scale-105 transition-all">
                        <div class="benefit-icon mb-4 text-gold-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path
                                    d="M20.42 4.58a5.4 5.4 0 0 0-7.65 0l-.77.78-.77-.78a5.4 5.4 0 0 0-7.65 0C1.46 6.7 1.33 10.28 4 13l8 8 8-8c2.67-2.72 2.54-6.3.42-8.42z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-cinzel font-bold text-midnight-dark mb-2">Support Development</h3>
                        <p class="text-midnight">Your donations help us improve the server, add new features, and ensure
                            stable gameplay for everyone.</p>
                    </div>
                    <div
                        class="benefit-card bg-white p-8 rounded-lg shadow-lg border-t-4 border-gold transform hover:scale-105 transition-all">
                        <div class="benefit-icon mb-4 text-gold-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <path d="M12 1v22"></path>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-cinzel font-bold text-midnight-dark mb-2">Enhance Gameplay</h3>
                        <p class="text-midnight">Gain access to premium items, unique mounts, and special advantages to
                            enhance your Silkroad experience.</p>
                    </div>
                    <div
                        class="benefit-card bg-white p-8 rounded-lg shadow-lg border-t-4 border-gold transform hover:scale-105 transition-all">
                        <div class="benefit-icon mb-4 text-gold-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 16v-4"></path>
                                <path d="M12 8h.01"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-cinzel font-bold text-midnight-dark mb-2">Premium Support</h3>
                        <p class="text-midnight">Donors receive priority support from our team and exclusive access to
                            VIP channels in our community.</p>
                    </div>
                </div>
            </div>

            <!-- Donation Packages -->
            <div id="donation-packages" class="donation-container bg-white rounded-lg shadow-xl p-8 relative z-10">
                <h2 class="text-3xl font-cinzel font-bold text-midnight text-center mb-6">Recharge Silk Units</h2>
                <p class="text-midnight text-center mb-10">Select a package below to support Amun Sro and receive Silk
                    units for your account.</p>

                <form id="donation-form">
                    <!-- Package Selection -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                        <!-- Package 1 -->
                        <div
                            class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-1">
                            <div class="package-header bg-gradient-to-r from-gold-dark to-gold p-4 text-center">
                                <div
                                    class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    +2% BONUS
                                </div>
                                <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">750 Silk
                                    Units</h3>
                            </div>
                            <div class="package-content p-6">
                                <div class="price-list space-y-2 mb-6">
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (TL):</span><span
                                            class="font-bold text-midnight">5</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (EGP):</span><span
                                            class="font-bold text-midnight">130</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (USDT):</span><span
                                            class="font-bold text-midnight">195</span></div>
                                </div>
                                <button type="button"
                                        class="select-package w-full bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-2 px-4 rounded-lg transition-colors">
                                    Select Package
                                </button>
                            </div>
                        </div>

                        <!-- Package 2 -->
                        <div
                            class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-1">
                            <div
                                class="package-header bg-gradient-to-r from-gold to-light-gold p-4 text-center relative overflow-hidden">
                                <div
                                    class="package-popular absolute top-0 right-0 bg-midnight text-gold text-xs font-bold px-4 py-1 transform rotate-45 translate-x-6 translate-y-3">
                                    POPULAR
                                </div>
                                <div
                                    class="package-bonus inline-block bg-midnight text-gold text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    +5% BONUS
                                </div>
                                <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">1500 Silk
                                    Units</h3>
                            </div>
                            <div class="package-content p-6">
                                <div class="price-list space-y-2 mb-6">
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (TL):</span><span
                                            class="font-bold text-midnight">10</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (EGP):</span><span
                                            class="font-bold text-midnight">260</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (USDT):</span><span
                                            class="font-bold text-midnight">390</span></div>
                                </div>
                                <button type="button"
                                        class="select-package w-full bg-midnight hover:bg-midnight-dark text-gold font-bold py-2 px-4 rounded-lg transition-colors">
                                    Select Package
                                </button>
                            </div>
                        </div>

                        <!-- Package 3 -->
                        <div
                            class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-1">
                            <div class="package-header bg-gradient-to-r from-gold-dark to-gold p-4 text-center">
                                <div
                                    class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    +10% BONUS
                                </div>
                                <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">3000 Silk
                                    Units</h3>
                            </div>
                            <div class="package-content p-6">
                                <div class="price-list space-y-2 mb-6">
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (TL):</span><span
                                            class="font-bold text-midnight">20</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (EGP):</span><span
                                            class="font-bold text-midnight">520</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (USDT):</span><span
                                            class="font-bold text-midnight">780</span></div>
                                </div>
                                <button type="button"
                                        class="select-package w-full bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-2 px-4 rounded-lg transition-colors">
                                    Select Package
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method Selection -->
                    <div class="payment-section bg-midnight-light/5 p-8 rounded-lg border border-sand">
                        <h3 class="text-2xl font-cinzel font-bold text-midnight mb-6 text-center">Select Payment
                            Method</h3>

                        <div class="payment-methods grid grid-cols-2 md:grid-cols-5 gap-4 mb-8">
                            <!-- Binance -->
                            <div
                                class="payment-method bg-white border border-sand rounded-lg p-4 text-center cursor-pointer hover:border-gold transition-colors">
                                <div class="payment-icon h-16 w-16 mx-auto mb-2 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-midnight" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M12 1L4 5v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V5l-8-4zm0 3.13l6 3.03v4.84c0 4.22-2.9 8.1-6 9.27-3.1-1.16-6-5.04-6-9.27V7.16l6-3.03zm3.45 6.37l-1.41-1.41L12 11.13 9.96 9.09 8.55 10.5 12 13.95l3.45-3.45z"/>
                                    </svg>
                                </div>
                                <span class="payment-name font-bold text-midnight">Binance</span>
                            </div>

                            <!-- PayPal -->
                            <div
                                class="payment-method bg-white border border-sand rounded-lg p-4 text-center cursor-pointer hover:border-gold transition-colors">
                                <div class="payment-icon h-16 w-16 mx-auto mb-2 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-midnight" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M20.067 8.478c.492.876.78 1.865.78 2.922 0 3.314-2.686 6-6 6a5.93 5.93 0 0 1-2.922-.78l-3.246 3.246A2 2 0 0 1 7.323 20H3a2 2 0 0 1-2-2v-4.323c0-.53.211-1.039.586-1.414L4.83 8.016C4.08 6.626 4 4.536 4 3.5c0-.663.54-1.203 1.203-1.203.802 0 1.62.043 2.394.129a10.5 10.5 0 0 1 6.151 2.501 10.515 10.515 0 0 1 2.504 6.146c.086.775.128 1.593.128 2.395 0 .663-.54 1.203-1.203 1.203-1.036 0-3.126-.08-4.516-.83l-4.247 4.246a.997.997 0 0 1-1.414 0 .999.999 0 0 1 0-1.414l4.246-4.246a3.5 3.5 0 0 0 4.9-4.9l-3.246-3.246A5.94 5.94 0 0 1 11 3c3.314 0 6 2.686 6 6a5.94 5.94 0 0 1-.933 3.212l4 4a.997.997 0 0 1 0 1.414.999.999 0 0 1-1.414 0l-4-4A5.926 5.926 0 0 1 11 15c-3.314 0-6-2.686-6-6 0-1.057.288-2.046.78-2.922L3.414 14.05c-.189.189-.292.44-.293.704L3.118 15 3 19c0 .102.033.254.293.293H8l.246-.003c.264-.001.515-.104.704-.293l8.962-8.962a5.94 5.94 0 0 0-.933-3.212l4-4a.997.997 0 0 0 0-1.414.999.999 0 0 0-1.414 0l-4 4A5.926 5.926 0 0 0 11 3c-1.057 0-2.046.288-2.922.78l8.962 8.962c.189.189.292.44.293.704l.003.246v5c0 .102-.033.254-.293.293H11.75c-.689 0-1.25-.56-1.25-1.25v-1c0-.69.56-1.25 1.25-1.25h1c.69 0 1.25.56 1.25 1.25v.5h3v-4.5c0-.689-.56-1.25-1.25-1.25h-1c-.69 0-1.25-.56-1.25-1.25v-1c0-.69.56-1.25 1.25-1.25h1c.69 0 1.25.56 1.25 1.25v.5h.5z"/>
                                    </svg>
                                </div>
                                <span class="payment-name font-bold text-midnight">PayPal</span>
                            </div>

                            <!-- Credit Card -->
                            <div
                                class="payment-method bg-white border border-sand rounded-lg p-4 text-center cursor-pointer hover:border-gold transition-colors">
                                <div class="payment-icon h-16 w-16 mx-auto mb-2 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-midnight" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/>
                                    </svg>
                                </div>
                                <span class="payment-name font-bold text-midnight">Credit Card</span>
                            </div>

                            <!-- Bank Transfer -->
                            <div
                                class="payment-method bg-white border border-sand rounded-lg p-4 text-center cursor-pointer hover:border-gold transition-colors">
                                <div class="payment-icon h-16 w-16 mx-auto mb-2 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-midnight" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M4 10v7h3v-7H4zm6 0v7h3v-7h-3zM2 22h19v-3H2v3zm14-12v7h3v-7h-3zm-4.5-9L2 6v2h19V6l-9.5-5z"/>
                                    </svg>
                                </div>
                                <span class="payment-name font-bold text-midnight">Bank Transfer</span>
                            </div>

                            <!-- Mobile Wallet -->
                            <div
                                class="payment-method bg-white border border-sand rounded-lg p-4 text-center cursor-pointer hover:border-gold transition-colors">
                                <div class="payment-icon h-16 w-16 mx-auto mb-2 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-midnight" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"/>
                                    </svg>
                                </div>
                                <span class="payment-name font-bold text-midnight">Mobile Wallet</span>
                            </div>
                        </div>

                        <!-- Payment Details Card -->
                        <div id="payment-details"
                             class="payment-details bg-white p-6 rounded-lg border border-sand mb-8">
                            <div
                                class="selected-method flex items-center justify-between mb-4 pb-4 border-b border-sand">
                                <div class="flex items-center">
                                    <div class="method-icon mr-3">
                                        <svg class="w-8 h-8 text-gold" viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M12 1L4 5v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V5l-8-4zm0 3.13l6 3.03v4.84c0 4.22-2.9 8.1-6 9.27-3.1-1.16-6-5.04-6-9.27V7.16l6-3.03zm3.45 6.37l-1.41-1.41L12 11.13 9.96 9.09 8.55 10.5 12 13.95l3.45-3.45z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="font-bold text-midnight">Binance Payment</span>
                                        <p class="text-sm text-midnight-light">Secure cryptocurrency payment</p>
                                    </div>
                                </div>
                                <button type="button"
                                        class="change-method text-gold hover:text-gold-dark font-bold text-sm">Change
                                </button>
                            </div>

                            <div class="payment-instructions">
                                <h4 class="font-bold text-midnight mb-3">Payment Instructions:</h4>
                                <ol class="list-decimal list-inside space-y-2 mb-4 text-midnight-light">
                                    <li>Scan the QR code below or copy the wallet address</li>
                                    <li>Send the exact amount of 195 USDT (TRC20 network)</li>
                                    <li>Include your character name in the memo/note</li>
                                    <li>Click "I've Sent Payment" after completing the transaction</li>
                                </ol>

                                <div
                                    class="wallet-info bg-midnight-light/5 p-4 rounded-lg flex flex-col sm:flex-row items-center mb-4">
                                    <div class="qr-code bg-white p-2 rounded-lg mb-4 sm:mb-0 sm:mr-4">
                                        <svg class="w-32 h-32" viewBox="0 0 100 100" fill="currentColor">
                                            <path
                                                d="M30,30H10V10h20V30z M70,10v20h20V10H70z M30,70H10v20h20V70z M40,40v20h20V40H40z M60,60v20h20V60H60z"/>
                                        </svg>
                                    </div>
                                    <div class="wallet-address flex-1">
                                        <p class="font-mono text-sm text-midnight mb-2 break-all">
                                            TJYeasdfghjkqwertyvbnmc5678iuytrwsdfghjnbv</p>
                                        <button type="button"
                                                class="copy-address bg-gold-dark/10 text-gold-dark text-sm font-bold px-3 py-1 rounded hover:bg-gold-dark/20 transition-colors">
                                            Copy Address
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-summary bg-midnight-light/5 p-6 rounded-lg mb-8">
                            <h4 class="font-bold text-midnight mb-4">Order Summary</h4>
                            <div class="summary-details space-y-3 mb-4">
                                <div class="flex justify-between">
                                    <span class="text-midnight-light">Package:</span>
                                    <span class="font-bold text-midnight">750 Silk Units</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-midnight-light">Bonus:</span>
                                    <span class="text-gold-dark font-bold">+15 Silk Units (2%)</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-midnight-light">Payment Method:</span>
                                    <span class="font-bold text-midnight">Binance (USDT)</span>
                                </div>
                                <div class="flex justify-between border-t border-sand pt-3 mt-3">
                                    <span class="text-midnight font-bold">Total Amount:</span>
                                    <span class="font-bold text-midnight">195 USDT</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row gap-4">
                            <button type="submit"
                                    class="donation-submit-btn flex-1 bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-3 px-6 rounded-lg transition-colors">
                                I've Sent Payment
                            </button>
                            <button type="button"
                                    class="cancel-btn flex-1 border border-midnight-light text-midnight hover:bg-midnight-light/10 font-bold py-3 px-6 rounded-lg transition-colors">
                                Cancel
                            </button>
                        </div>

                        <p class="security-note mt-6 text-center text-sm text-midnight-light flex items-center justify-center">
                            <svg class="secure-icon inline-block h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                            Your payment information is encrypted and secure. We never store your payment details.
                        </p>
                    </div>
                </form>
            </div>

            <!-- Testimonials -->
            <div class="mt-16">
                <h2 class="text-3xl font-cinzel font-bold text-midnight text-center mb-10">Why Players Choose Us</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="testimonial-card bg-white p-6 rounded-lg shadow-lg border border-sand relative">
                        <div class="testimonial-quote absolute -top-4 left-6 text-gold text-5xl">"</div>
                        <p class="text-midnight mb-4 pt-4">The Silk packages are very affordable and the customer
                            service is excellent. I received my Silk units instantly after payment!</p>
                        <div class="testimonial-author flex items-center">
                            <div
                                class="testimonial-avatar bg-gold-dark/20 h-10 w-10 rounded-full flex items-center justify-center mr-3">
                                <span class="text-gold-dark font-bold">A</span>
                            </div>
                            <div>
                                <h5 class="font-bold text-midnight">Anubis_King</h5>
                                <div class="testimonial-stars flex text-gold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card bg-white p-6 rounded-lg shadow-lg border border-sand relative">
                        <div class="testimonial-quote absolute -top-4 left-6 text-gold text-5xl">"</div>
                        <p class="text-midnight mb-4 pt-4">Great value for money compared to other private servers. The
                            bonus silk for larger packages is really generous!</p>
                        <div class="testimonial-author flex items-center">
                            <div
                                class="testimonial-avatar bg-gold-dark/20 h-10 w-10 rounded-full flex items-center justify-center mr-3">
                                <span class="text-gold-dark font-bold">H</span>
                            </div>
                            <div>
                                <h5 class="font-bold text-midnight">Horus_Slayer</h5>
                                <div class="testimonial-stars flex text-gold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card bg-white p-6 rounded-lg shadow-lg border border-sand relative">
                        <div class="testimonial-quote absolute -top-4 left-6 text-gold text-5xl">"</div>
                        <p class="text-midnight mb-4 pt-4">I've tried many Silkroad servers, but Amun Sro's donation
                            system is the most fair and straightforward. The items are well balanced.</p>
                        <div class="testimonial-author flex items-center">
                            <div
                                class="testimonial-avatar bg-gold-dark/20 h-10 w-10 rounded-full flex items-center justify-center mr-3">
                                <span class="text-gold-dark font-bold">S</span>
                            </div>
                            <div>
                                <h5 class="font-bold text-midnight">ScarabArcher</h5>
                                <div class="testimonial-stars flex text-gold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="mt-16">
                <h2 class="text-3xl font-cinzel font-bold text-midnight text-center mb-10">Frequently Asked
                    Questions</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="faq-item bg-white p-6 rounded-lg shadow-md border border-sand">
                        <h3 class="text-xl font-bold text-midnight mb-3">How quickly will I receive my Silk?</h3>
                        <p class="text-midnight-light">Silk units are credited to your account immediately after payment
                            confirmation. For cryptocurrency payments, this may take 5-10 minutes depending on
                            blockchain confirmation times.</p>
                    </div>
                    <div class="faq-item bg-white p-6 rounded-lg shadow-md border border-sand">
                        <h3 class="text-xl font-bold text-midnight mb-3">What can I purchase with Silk?</h3>
                        <p class="text-midnight-light">Silk can be used to buy premium items, special mounts, inventory
                            expansions, and various convenience items from our in-game store.</p>
                    </div>
                    <div class="faq-item bg-white p-6 rounded-lg shadow-md border border-sand">
                        <h3 class="text-xl font-bold text-midnight mb-3">Is it safe to donate?</h3>
                        <p class="text-midnight-light">Yes, all our payment methods are secure and we never store
                            sensitive payment information. Your financial details are protected with industry-standard
                            encryption.</p>
                    </div>
                    <div class="faq-item bg-white p-6 rounded-lg shadow-md border border-sand">
                        <h3 class="text-xl font-bold text-midnight mb-3">Can I get a refund?</h3>
                        <p class="text-midnight-light">We generally don't offer refunds for Silk purchases, but we'll
                            handle specific cases on an individual basis. Please contact support if you have any issues
                            with your purchase.</p>
                    </div>
                </div>
                <div class="text-center mt-8">
                    <a href="/contactus" class="inline-block text-gold hover:text-gold-dark font-bold">Still have
                        questions? Contact our support team</a>
                </div>
            </div>
        </div>
    </main>
@endsection
