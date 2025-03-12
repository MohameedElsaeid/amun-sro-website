@extends('website.layouts.app')

@section('title', 'Donate - Amun Sro')
@section('meta-description', 'Recharge Silk Units to support Amun Sro. Choose from various packages and enhance your gameplay on our Silkroad private server.')

@section('content')
    <main class="py-12">
        <div class="container mx-auto px-4">
            <div class="donation-container">
                <h1 class="text-4xl font-cinzel font-bold text-midnight-dark text-center mb-4">Recharge Silk Units</h1>
                <p class="text-sand-light text-center mb-8">Support Amun Sro and enhance your gameplay with Silk units. Select a package below.</p>
                <form id="donation-form">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Package cards (repeat as needed) -->
                        <div class="package-card p-6 border rounded-lg hover:shadow-lg transition">
                            <div class="package-bonus text-sm font-bold text-gold mb-2">+2%</div>
                            <h3 class="silk-amount text-2xl font-cinzel font-bold text-midnight mb-2">750 Silk Units</h3>
                            <div class="price-list mb-4">
                                <div class="price-item flex justify-between"><span>Price (TL):</span><span>5</span></div>
                                <div class="price-item flex justify-between"><span>Price (EGP):</span><span>130</span></div>
                                <div class="price-item flex justify-between"><span>Price (USDT):</span><span>195</span></div>
                            </div>
                            <button type="button" class="select-package bg-gold-dark hover:bg-gold text-white font-bold px-4 py-2 rounded">Select Package</button>
                        </div>
                        <!-- Repeat for other packages -->
                    </div>
                    <div class="payment-section mt-12">
                        <h2 class="text-2xl font-cinzel font-bold text-midnight mb-4 text-center">Select Payment Method</h2>
                        <div class="payment-methods flex flex-wrap gap-4 justify-center mb-4">
                            <!-- Payment methods (Binance, PayPal, etc.) -->
                            <div class="payment-method flex flex-col items-center">
                                <svg class="payment-icon h-8 w-8 mb-1" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 1L4 5v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V5l-8-4zm0 3.13l6 3.03v4.84c0 4.22-2.9 8.1-6 9.27-3.1-1.16-6-5.04-6-9.27V7.16l6-3.03zm3.45 6.37l-1.41-1.41L12 11.13 9.96 9.09 8.55 10.5 12 13.95l3.45-3.45z"/>
                                </svg>
                                <span class="payment-name">Binance</span>
                            </div>
                            <!-- Repeat for PayPal, Mobile Wallets, Bank Transfer, Cards -->
                        </div>
                        <div id="payment-details" class="payment-details text-center mb-4">
                            <p class="text-gold">Please select a payment method to continue</p>
                        </div>
                        <button type="submit" class="donation-submit-btn w-full bg-midnight text-sand-light py-3 rounded hover:bg-midnight-dark transition">Complete Purchase</button>
                        <p class="security-note mt-4 text-center text-sm text-midnight">
                            <svg class="secure-icon inline-block h-4 w-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
                            </svg>
                            Your payment information is encrypted and secure.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
