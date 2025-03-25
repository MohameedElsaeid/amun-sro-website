@extends('website.layouts.app')

@section('title', 'Help - ASRO Game')
@section('meta-description', 'View player rankings for ASRO game. See the top players, leaderboards, and character stats in the ancient Egyptian online world.')
@section('meta-keywords', 'Help Center, ASRO Support, FAQs, Report a Bug, Contact Support, ASRO Game Help')

@section('content')
    <div class="relative py-16 z-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-cinzel font-bold text-gold text-center mb-12">Help Center</h1>

            <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Quick Links -->
                <div class="bg-midnight-light p-6 rounded-lg">
                    <h2 class="text-2xl font-cinzel text-gold mb-6">Quick Links</h2>
                    <div class="space-y-4">
                        <a href="{{ route('website.faq') }}"
                           class="flex items-center p-4 bg-midnight hover:bg-midnight-dark rounded-lg transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold mr-3" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-sand">Frequently Asked Questions</span>
                        </a>

                        <a href="{{ route('website.bug-report') }}"
                           class="flex items-center p-4 bg-midnight hover:bg-midnight-dark rounded-lg transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold mr-3" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                            </svg>
                            <span class="text-sand">Report a Bug</span>
                        </a>

                        <a href="{{ route('website.contact-us') }}"
                           class="flex items-center p-4 bg-midnight hover:bg-midnight-dark rounded-lg transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold mr-3" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-sand">Contact Support</span>
                        </a>
                    </div>
                </div>

                <!-- Common Issues -->
                <div class="bg-midnight-light p-6 rounded-lg">
                    <h2 class="text-2xl font-cinzel text-gold mb-6">Common Issues</h2>
                    <div class="space-y-4">
                        <div class="p-4 bg-midnight rounded-lg">
                            <h3 class="text-gold font-bold mb-2">Connection Problems</h3>
                            <p class="text-sand">Check your internet connection and firewall settings. Make sure ports 27015-27020 are open.</p>
                        </div>

                        <div class="p-4 bg-midnight rounded-lg">
                            <h3 class="text-gold font-bold mb-2">Game Crashes</h3>
                            <p class="text-sand">Update your graphics drivers and DirectX. Verify game files through the launcher.</p>
                        </div>

                        <div class="p-4 bg-midnight rounded-lg">
                            <h3 class="text-gold font-bold mb-2">Account Issues</h3>
                            <p class="text-sand">Use the password reset feature or contact support for account recovery assistance.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Support Hours -->
            <div class="max-w-4xl mx-auto mt-8">
                <div class="bg-midnight-light p-6 rounded-lg">
                    <h2 class="text-2xl font-cinzel text-gold mb-6">Support Hours</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="p-4 bg-midnight rounded-lg">
                            <h3 class="text-gold font-bold mb-2">Live Chat Support</h3>
                            <p class="text-sand">Monday - Friday: 9:00 AM - 6:00 PM (GMT)</p>
                        </div>

                        <div class="p-4 bg-midnight rounded-lg">
                            <h3 class="text-gold font-bold mb-2">Email Support</h3>
                            <p class="text-sand">24/7 - Response within 24 hours</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
