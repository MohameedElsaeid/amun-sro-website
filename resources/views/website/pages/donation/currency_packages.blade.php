
@extends('website.layouts.app')

@section('title', 'Buy Silk with ' . $currency . ' - Amun Sro')
@section('meta-description', 'Purchase Silk using ' . $currency . ' for Amun Sro. Choose from various packages to enhance your gameplay experience.')

@section('content')
    <!-- Currency-specific Hero -->
    <div class="page-hero relative" style="background-image: url('{{ asset('icons/feat_5.webp') }}');">
        <div class="container mx-auto px-4 text-center relative z-10 py-12">
            <h1 class="text-4xl md:text-5xl font-cinzel font-bold text-gold mb-4 hero-animate">Buy Silk with {{ $currency }}</h1>
            <p class="text-lg md:text-xl text-sand-light max-w-3xl mx-auto hero-animate hero-animate-delay-1">
                Select your preferred package below and complete your purchase
            </p>

            <!-- Currency Switcher -->
            <div class="mt-6 flex justify-center">
                <div class="bg-midnight-dark/70 backdrop-blur-sm rounded-lg overflow-hidden flex">
                    <a href="{{ route('website.donate.currency', 'USDT') }}" class="px-4 py-2 {{ $currency == 'USDT' ? 'bg-gold text-midnight-dark' : 'text-sand-light hover:bg-midnight-light/20' }}">USDT</a>
                    <a href="{{ route('website.donate.currency', 'TL') }}" class="px-4 py-2 {{ $currency == 'TL' ? 'bg-gold text-midnight-dark' : 'text-sand-light hover:bg-midnight-light/20' }}">TL</a>
                    <a href="{{ route('website.donate.currency', 'EGP') }}" class="px-4 py-2 {{ $currency == 'EGP' ? 'bg-gold text-midnight-dark' : 'text-sand-light hover:bg-midnight-light/20' }}">EGP</a>
                    <a href="{{ route('website.donate.currency', 'BRL') }}" class="px-4 py-2 {{ $currency == 'BRL' ? 'bg-gold text-midnight-dark' : 'text-sand-light hover:bg-midnight-light/20' }}">BRL</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Package List View -->
    <main class="py-10 bg-sand-light relative z-20">
        <div class="container mx-auto px-4">
            <!-- Package List -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-10">
                <h2 class="text-2xl font-cinzel font-bold text-midnight text-center mb-6">Available Packages ({{ $currency }})</h2>

                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-sand">
                        <thead class="bg-midnight-light/5">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-midnight-light uppercase tracking-wider">Silk Amount</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-midnight-light uppercase tracking-wider">Bonus</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-midnight-light uppercase tracking-wider">Price ({{ $currency }})</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-midnight-light uppercase tracking-wider"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-sand">
                            @foreach($paymentInformation['packages'] as $index => $package)
                                <tr class="{{ $package['label'] ? 'bg-gold-light/20' : '' }} hover:bg-midnight-light/5">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10 flex items-center justify-center bg-gold-light rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-midnight">{{ number_format($package['silk']) }} Silk</div>
                                                @if($package['label'])
                                                    <div class="text-xs text-gold-dark font-bold">{{ $package['label'] }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gold-dark font-bold">
                                            @if($package['bonus'])
                                                + {{ $package['bonus'] }}
                                            @else
                                                N/A
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-midnight font-bold">{{ number_format($package['prices'][$currency]) }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <form action="{{ route('website.donate.payment-method') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="package_id" value="{{ $index }}">
                                            <input type="hidden" name="currency" value="{{ $currency }}">
                                            <button type="submit" class="text-gold hover:text-gold-dark font-bold">
                                                Select Package →
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-cinzel font-bold text-midnight mb-4">Payment Information</h3>
                    <ul class="space-y-2 text-midnight-light">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Secure payment processing
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Instant delivery to your account
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            24/7 customer support
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Various payment methods available
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-cinzel font-bold text-midnight mb-4">Why Choose Us?</h3>
                    <ul class="space-y-2 text-midnight-light">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            Secure transactions
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            Fast delivery
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
                            </svg>
                            Best rates
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                            Exclusive bonuses
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Return Button -->
            <div class="text-center">
                <a href="{{ route('website.donate') }}" class="inline-flex items-center text-midnight hover:text-gold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                    </svg>
                    Return to Currency Selection
                </a>
            </div>
        </div>
    </main>
@endsection
