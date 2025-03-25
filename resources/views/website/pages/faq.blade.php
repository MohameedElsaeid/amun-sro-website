@extends('website.layouts.app')

@section('title', 'Frequently Asked Question - ASRO Game')
@section('meta-description', 'View player rankings for ASRO game. See the top players, leaderboards, and character stats in the ancient Egyptian online world.')
@section('meta-keywords', 'FAQ, Frequently Asked Questions, ASRO FAQ, Game FAQ, ASRO Game, Support, Help, Common Questions')

@section('content')
    <div class="relative py-16 z-20">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-cinzel font-bold text-gold text-center mb-12">Frequently Asked Questions</h1>

            <div class="max-w-3xl mx-auto space-y-6">
                <!-- General Questions -->
                <div class="bg-midnight-light p-6 rounded-lg">
                    <h2 class="text-2xl font-cinzel text-gold mb-6">General Questions</h2>

                    <div class="space-y-4">
                        <div class="border-b border-gold/20 pb-4">
                            <h3 class="text-gold font-bold mb-2">How do I download and install the game?</h3>
                            <p class="text-sand">Visit our Downloads page and follow the installation guide. Make sure your system meets the minimum requirements.</p>
                        </div>

                        <div class="border-b border-gold/20 pb-4">
                            <h3 class="text-gold font-bold mb-2">What are the system requirements?</h3>
                            <p class="text-sand">Minimum: Windows 7/8/10, 4GB RAM, 2GB free disk space, DirectX 9.0c compatible graphics card.</p>
                        </div>

                        <div class="border-b border-gold/20 pb-4">
                            <h3 class="text-gold font-bold mb-2">Is the game free to play?</h3>
                            <p class="text-sand">Yes, ASRO is completely free to play. We offer optional premium items through our shop.</p>
                        </div>
                    </div>
                </div>

                <!-- Account Questions -->
                <div class="bg-midnight-light p-6 rounded-lg">
                    <h2 class="text-2xl font-cinzel text-gold mb-6">Account Questions</h2>

                    <div class="space-y-4">
                        <div class="border-b border-gold/20 pb-4">
                            <h3 class="text-gold font-bold mb-2">How do I create an account?</h3>
                            <p class="text-sand">Click the Register button on the top right of the website and fill out the registration form.</p>
                        </div>

                        <div class="border-b border-gold/20 pb-4">
                            <h3 class="text-gold font-bold mb-2">I forgot my password. What should I do?</h3>
                            <p class="text-sand">Use the "Forgot Password" link on the login page to reset your password via email.</p>
                        </div>
                    </div>
                </div>

                <!-- Technical Issues -->
                <div class="bg-midnight-light p-6 rounded-lg">
                    <h2 class="text-2xl font-cinzel text-gold mb-6">Technical Issues</h2>

                    <div class="space-y-4">
                        <div class="border-b border-gold/20 pb-4">
                            <h3 class="text-gold font-bold mb-2">What should I do if the game crashes?</h3>
                            <p class="text-sand">Try updating your graphics drivers and DirectX. If the issue persists, contact our support team.</p>
                        </div>

                        <div class="border-b border-gold/20 pb-4">
                            <h3 class="text-gold font-bold mb-2">How can I improve my game performance?</h3>
                            <p class="text-sand">Lower your graphics settings, close background applications, and ensure your PC meets the requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
