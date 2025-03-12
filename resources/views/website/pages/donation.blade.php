@extends('website.layouts.app')

@section('title', 'Recharge Silk - Amun Sro')
@section('meta-description', 'Recharge Silk Units to enhance your gameplay on Amun Sro. Choose from various packages and power up your adventure in our Silkroad private server.')

@section('content')
    <!-- Hero Section -->
    <div class="page-hero page-hero-accent relative"
         style="background-image: url('{{ asset('public/lovable-uploads/ec116570-dc0d-4770-a1d8-bdabf61fe725.png') }}');">
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4 hero-animate">Recharge Silk</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8 hero-animate hero-animate-delay-1">
                Enhance your gameplay with Silk units and dominate the world of Amun Sro</p>
            <a href="#silk-packages" class="hero-cta hero-animate hero-animate-delay-2">View Packages</a>
        </div>
    </div>

    <!-- Main Content -->
    <main class="py-16 bg-sand-light relative z-20">
        <div class="container mx-auto px-4">

            <!-- Why Recharge Section -->
            <div class="mb-16 text-center">
                <h2 class="text-3xl font-cinzel font-bold text-midnight mb-6">Why Recharge Silk?</h2>
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
                        <h3 class="text-xl font-cinzel font-bold text-midnight-dark mb-2">Premium Items</h3>
                        <p class="text-midnight">Access exclusive items, rare equipment, and unique cosmetics that will
                            set you apart from other players.</p>
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
                        <h3 class="text-xl font-cinzel font-bold text-midnight-dark mb-2">Convenience Features</h3>
                        <p class="text-midnight">Enjoy quality-of-life improvements such as expanded inventory, faster
                            travel options, and special abilities.</p>
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
                        <h3 class="text-xl font-cinzel font-bold text-midnight-dark mb-2">Server Support</h3>
                        <p class="text-midnight">Your contributions help us maintain server stability, develop new
                            content, and improve the game for everyone.</p>
                    </div>
                </div>
            </div>

            <!-- Silk Packages -->
            <div id="silk-packages" class="silk-container bg-white rounded-lg shadow-xl p-8 relative z-10">
                <h2 class="text-3xl font-cinzel font-bold text-midnight text-center mb-6">Recharge Silk Units</h2>
                <p class="text-midnight text-center mb-10">Select a package below to enhance your Amun Sro experience
                    with Silk units.</p>

                <form id="donation-form">
                    <!-- Package Selection -->
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
                        <!-- Package 1: 750 Silk -->
                        <div
                            class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all">
                            <div class="package-header bg-gradient-to-r from-gold-dark to-gold p-4 text-center">
                                <div
                                    class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    +2% BONUS
                                </div>
                                <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">750 Silk</h3>
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

                        <!-- Package 2: 1500 Silk -->
                        <div
                            class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all">
                            <div class="package-header bg-gradient-to-r from-gold to-light-gold p-4 text-center">
                                <div
                                    class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    +7% BONUS
                                </div>
                                <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">1,500
                                    Silk</h3>
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
                                        class="select-package w-full bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-2 px-4 rounded-lg transition-colors">
                                    Select Package
                                </button>
                            </div>
                        </div>

                        <!-- Package 3: 3000 Silk -->
                        <div
                            class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all">
                            <div class="package-header bg-gradient-to-r from-gold-dark to-gold p-4 text-center">
                                <div
                                    class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    +9% BONUS
                                </div>
                                <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">3,000
                                    Silk</h3>
                            </div>
                            <div class="package-content p-6">
                                <div class="price-list space-y-2 mb-6">
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (TL):</span><span
                                            class="font-bold text-midnight">19</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (EGP):</span><span
                                            class="font-bold text-midnight">494</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (USDT):</span><span
                                            class="font-bold text-midnight">741</span></div>
                                </div>
                                <button type="button"
                                        class="select-package w-full bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-2 px-4 rounded-lg transition-colors">
                                    Select Package
                                </button>
                            </div>
                        </div>

                        <!-- Package 4: 6000 Silk -->
                        <div
                            class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all">
                            <div class="package-header bg-gradient-to-r from-gold to-light-gold p-4 text-center">
                                <div
                                    class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    +11% BONUS
                                </div>
                                <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">6,000
                                    Silk</h3>
                            </div>
                            <div class="package-content p-6">
                                <div class="price-list space-y-2 mb-6">
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (TL):</span><span
                                            class="font-bold text-midnight">36</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (EGP):</span><span
                                            class="font-bold text-midnight">936</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (USDT):</span><span
                                            class="font-bold text-midnight">1,350</span></div>
                                </div>
                                <button type="button"
                                        class="select-package w-full bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-2 px-4 rounded-lg transition-colors">
                                    Select Package
                                </button>
                            </div>
                        </div>

                        <!-- Package 5: 12,000 Silk -->
                        <div
                            class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all">
                            <div
                                class="package-header bg-gradient-to-r from-gold-dark to-gold p-4 text-center relative overflow-hidden">
                                <div
                                    class="package-popular absolute top-0 right-0 bg-midnight text-gold text-xs font-bold px-4 py-1 transform rotate-45 translate-x-6 translate-y-3">
                                    POPULAR
                                </div>
                                <div
                                    class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    +11% BONUS
                                </div>
                                <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">12,000
                                    Silk</h3>
                            </div>
                            <div class="package-content p-6">
                                <div class="price-list space-y-2 mb-6">
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (TL):</span><span
                                            class="font-bold text-midnight">68</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (EGP):</span><span
                                            class="font-bold text-midnight">1,768</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (USDT):</span><span
                                            class="font-bold text-midnight">2,465</span></div>
                                </div>
                                <button type="button"
                                        class="select-package w-full bg-midnight hover:bg-midnight-dark text-gold font-bold py-2 px-4 rounded-lg transition-colors">
                                    Select Package
                                </button>
                            </div>
                        </div>

                        <!-- Package 6: 25,000 Silk -->
                        <div
                            class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all">
                            <div class="package-header bg-gradient-to-r from-gold to-light-gold p-4 text-center">
                                <div
                                    class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    +13% BONUS
                                </div>
                                <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">25,000
                                    Silk</h3>
                            </div>
                            <div class="package-content p-6">
                                <div class="price-list space-y-2 mb-6">
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (TL):</span><span
                                            class="font-bold text-midnight">133</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (EGP):</span><span
                                            class="font-bold text-midnight">3,458</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (USDT):</span><span
                                            class="font-bold text-midnight">4,655</span></div>
                                </div>
                                <button type="button"
                                        class="select-package w-full bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-2 px-4 rounded-lg transition-colors">
                                    Select Package
                                </button>
                            </div>
                        </div>

                        <!-- Package 7: 50,000 Silk -->
                        <div
                            class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all">
                            <div class="package-header bg-gradient-to-r from-gold-dark to-gold p-4 text-center">
                                <div
                                    class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    +15% BONUS
                                </div>
                                <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">50,000
                                    Silk</h3>
                            </div>
                            <div class="package-content p-6">
                                <div class="price-list space-y-2 mb-6">
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (TL):</span><span
                                            class="font-bold text-midnight">250</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (EGP):</span><span
                                            class="font-bold text-midnight">6,500</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (USDT):</span><span
                                            class="font-bold text-midnight">8,500</span></div>
                                </div>
                                <button type="button"
                                        class="select-package w-full bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-2 px-4 rounded-lg transition-colors">
                                    Select Package
                                </button>
                            </div>
                        </div>

                        <!-- Package 8: 100,000 Silk -->
                        <div
                            class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all">
                            <div class="package-header bg-gradient-to-r from-gold to-light-gold p-4 text-center">
                                <div
                                    class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    +17% BONUS
                                </div>
                                <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">100,000
                                    Silk</h3>
                            </div>
                            <div class="package-content p-6">
                                <div class="price-list space-y-2 mb-6">
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (TL):</span><span
                                            class="font-bold text-midnight">467</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (EGP):</span><span
                                            class="font-bold text-midnight">12,142</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (USDT):</span><span
                                            class="font-bold text-midnight">15,411</span></div>
                                </div>
                                <button type="button"
                                        class="select-package w-full bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-2 px-4 rounded-lg transition-colors">
                                    Select Package
                                </button>
                            </div>
                        </div>

                        <!-- Package 9: 250,000 Silk -->
                        <div
                            class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all">
                            <div
                                class="package-header bg-gradient-to-r from-gold-dark to-gold p-4 text-center relative overflow-hidden">
                                <div
                                    class="package-popular absolute top-0 right-0 bg-midnight text-gold text-xs font-bold px-4 py-1 transform rotate-45 translate-x-6 translate-y-3">
                                    BEST DEAL
                                </div>
                                <div
                                    class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    +20% BONUS
                                </div>
                                <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">250,000
                                    Silk</h3>
                            </div>
                            <div class="package-content p-6">
                                <div class="price-list space-y-2 mb-6">
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (TL):</span><span
                                            class="font-bold text-midnight">1,084</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (EGP):</span><span
                                            class="font-bold text-midnight">28,184</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (USDT):</span><span
                                            class="font-bold text-midnight">34,688</span></div>
                                </div>
                                <button type="button"
                                        class="select-package w-full bg-midnight hover:bg-midnight-dark text-gold font-bold py-2 px-4 rounded-lg transition-colors">
                                    Select Package
                                </button>
                            </div>
                        </div>

                        <!-- Package 10: 500,000 Silk -->
                        <div
                            class="package-card bg-white border border-sand rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-all">
                            <div class="package-header bg-gradient-to-r from-gold to-light-gold p-4 text-center">
                                <div
                                    class="package-bonus inline-block bg-midnight text-gold-dark text-sm font-bold px-3 py-1 rounded-full mb-2">
                                    +22% BONUS
                                </div>
                                <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight-dark">500,000
                                    Silk</h3>
                            </div>
                            <div class="package-content p-6">
                                <div class="price-list space-y-2 mb-6">
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (TL):</span><span
                                            class="font-bold text-midnight">2,000</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (EGP):</span><span
                                            class="font-bold text-midnight">52,000</span></div>
                                    <div class="price-item flex justify-between"><span class="text-midnight-light">Price (USDT):</span><span
                                            class="font-bold text-midnight">62,000</span></div>
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

                        <div class="payment-methods grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                            <!-- PayPal -->
                            <div
                                class="payment-method bg-white border border-sand rounded-lg p-6 text-center cursor-pointer hover:border-gold transition-colors">
                                <div class="payment-icon h-16 w-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-14 h-14 text-[#003087]" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M7.076 21.337H2.47a.641.641 0 0 1-.633-.74L4.944.901C5.026.382 5.474 0 5.998 0h7.46c2.57 0 4.35.543 5.287 1.62.453.52.787 1.09.986 1.718.215.682.241 1.49.08 2.493l-.008.057v.504c-.077 2.12-1.253 3.831-3.218 4.994 1.129.992 1.622 2.428 1.414 4.154-.29 2.432-1.99 4.04-4.782 4.54a12.796 12.796 0 0 1-2.828.257H9.195c-.483 0-.892-.34-.97-.812L7.076 21.337zm8.889-14.946c-.024-.1-.04-.19-.076-.274-.235-.528-.72-.864-1.448-1.016-.282-.059-.582-.087-.893-.09l-.119-.001h-5.5l-.898 5.762h4.839l.13-.002c.392-.009.767-.057 1.15-.147 1.273-.299 2.028-1.005 2.228-2.055.102-.536.051-1.185-.075-1.667v-.51z"/>
                                    </svg>
                                </div>
                                <span class="payment-name font-bold text-midnight text-lg">PayPal</span>
                                <p class="text-midnight-light text-sm mt-2">Fast and secure online payments</p>
                            </div>

                            <!-- Credit/Debit Card -->
                            <div
                                class="payment-method bg-white border border-sand rounded-lg p-6 text-center cursor-pointer hover:border-gold transition-colors">
                                <div class="payment-icon h-16 w-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-14 h-14 text-midnight" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/>
                                    </svg>
                                </div>
                                <span class="payment-name font-bold text-midnight text-lg">Credit/Debit Card</span>
                                <p class="text-midnight-light text-sm mt-2">Pay with Visa, Mastercard, or other
                                    cards</p>
                            </div>

                            <!-- Mobile Wallet -->
                            <div
                                class="payment-method bg-white border border-sand rounded-lg p-6 text-center cursor-pointer hover:border-gold transition-colors">
                                <div class="payment-icon h-16 w-16 mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-14 h-14 text-midnight" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"/>
                                    </svg>
                                </div>
                                <span class="payment-name font-bold text-midnight text-lg">Mobile Wallet</span>
                                <p class="text-midnight-light text-sm mt-2">Pay with your preferred mobile payment
                                    system</p>
                            </div>
                        </div>

                        <!-- Payment Details Card (initially hidden until payment method is selected) -->
                        <div id="payment-details"
                             class="payment-details bg-white p-6 rounded-lg border border-sand mb-8 hidden">
                            <!-- Payment details will be populated via JavaScript -->
                        </div>

                        <div class="order-summary bg-white p-6 rounded-lg border border-sand mb-8">
                            <h4 class="font-bold text-midnight mb-4">Order Summary</h4>
                            <div class="summary-details space-y-3 mb-4">
                                <div class="flex justify-between">
                                    <span class="text-midnight-light">Package:</span>
                                    <span class="font-bold text-midnight" id="summary-package">Select a package</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-midnight-light">Bonus:</span>
                                    <span class="text-gold-dark font-bold" id="summary-bonus">-</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-midnight-light">Payment Method:</span>
                                    <span class="font-bold text-midnight"
                                          id="summary-payment">Select payment method</span>
                                </div>
                                <div class="flex justify-between border-t border-sand pt-3 mt-3">
                                    <span class="text-midnight font-bold">Total Amount:</span>
                                    <span class="font-bold text-midnight" id="summary-total">-</span>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row gap-4">
                            <button type="submit"
                                    class="donation-submit-btn flex-1 bg-gold hover:bg-gold-dark text-midnight-dark font-bold py-3 px-6 rounded-lg transition-colors opacity-50 cursor-not-allowed"
                                    disabled>Complete Purchase
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

            <!-- How To Recharge Guide -->
            <div class="mt-16">
                <h2 class="text-3xl font-cinzel font-bold text-midnight text-center mb-10">How To Recharge Silk</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="step-card bg-white p-6 rounded-lg shadow-lg border border-sand relative">
                        <div
                            class="step-number absolute -top-5 -left-5 w-10 h-10 bg-gold text-midnight font-bold rounded-full flex items-center justify-center">
                            1
                        </div>
                        <h3 class="text-xl font-cinzel font-bold text-midnight-dark mb-3 mt-2">Select Package</h3>
                        <p class="text-midnight">Choose the Silk package that fits your needs from our various
                            options.</p>
                    </div>

                    <div class="step-card bg-white p-6 rounded-lg shadow-lg border border-sand relative">
                        <div
                            class="step-number absolute -top-5 -left-5 w-10 h-10 bg-gold text-midnight font-bold rounded-full flex items-center justify-center">
                            2
                        </div>
                        <h3 class="text-xl font-cinzel font-bold text-midnight-dark mb-3 mt-2">Choose Payment</h3>
                        <p class="text-midnight">Select your preferred payment method from PayPal, credit/debit card, or
                            mobile wallet.</p>
                    </div>

                    <div class="step-card bg-white p-6 rounded-lg shadow-lg border border-sand relative">
                        <div
                            class="step-number absolute -top-5 -left-5 w-10 h-10 bg-gold text-midnight font-bold rounded-full flex items-center justify-center">
                            3
                        </div>
                        <h3 class="text-xl font-cinzel font-bold text-midnight-dark mb-3 mt-2">Receive Silk</h3>
                        <p class="text-midnight">Once payment is confirmed, your Silk will be added to your account
                            instantly.</p>
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
                            confirmation. For certain payment methods, this may take a few minutes to process.</p>
                    </div>
                    <div class="faq-item bg-white p-6 rounded-lg shadow-md border border-sand">
                        <h3 class="text-xl font-bold text-midnight mb-3">What can I purchase with Silk?</h3>
                        <p class="text-midnight-light">Silk can be used to buy premium items, special mounts, inventory
                            expansions, and various convenience items from our in-game store.</p>
                    </div>
                    <div class="faq-item bg-white p-6 rounded-lg shadow-md border border-sand">
                        <h3 class="text-xl font-bold text-midnight mb-3">Is it safe to recharge Silk?</h3>
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
                    <a href="{{route('website.contact-us')}}" class="inline-block text-gold hover:text-gold-dark font-bold">Still have
                        questions? Contact our support team</a>
                </div>
            </div>
        </div>
    </main>
@endsection
