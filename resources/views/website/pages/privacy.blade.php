@extends('website.layouts.app')

@section('title', 'Privacy Policy - ASRO')
@section('meta-description', 'Learn about how we collect, use, and protect your personal information.')

@section('content')
    <!-- Hero Section -->
    <div class="page-hero"
         style="background-image: url('{{ asset('icons/feat_5.webp') }}');">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4">Privacy Policy</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8">How we protect your privacy</p>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-16 bg-midnight">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-midnight-light rounded-lg border border-gold/30 p-8">
                <!-- Last Updated -->
                <div class="mb-8 text-sand-light">
                    <p>Last Updated: January 1, 2024</p>
                </div>

                <!-- Privacy Content -->
                <div class="space-y-8 text-sand-light">
                    <div>
                        <h2 class="text-2xl font-cinzel font-bold text-gold mb-4">1. Information We Collect</h2>
                        <p class="mb-4">We collect information that you provide directly to us, including:</p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Account registration details</li>
                            <li>Game activity and progress</li>
                            <li>Communication with other players</li>
                            <li>Technical information about your device</li>
                        </ul>
                    </div>

                    <div>
                        <h2 class="text-2xl font-cinzel font-bold text-gold mb-4">2. How We Use Your Information</h2>
                        <p class="mb-4">We use the collected information to:</p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Provide and maintain our services</li>
                            <li>Improve user experience</li>
                            <li>Communicate with you about updates</li>
                            <li>Ensure compliance with our terms</li>
                        </ul>
                    </div>

                    <div>
                        <h2 class="text-2xl font-cinzel font-bold text-gold mb-4">3. Information Security</h2>
                        <p class="mb-4">We implement appropriate security measures to protect your personal information
                            from unauthorized access or disclosure.</p>
                    </div>

                    <div>
                        <h2 class="text-2xl font-cinzel font-bold text-gold mb-4">4. Data Sharing</h2>
                        <p class="mb-4">We do not sell or share your personal information with third parties except as
                            described in this policy.</p>
                    </div>

                    <div>
                        <h2 class="text-2xl font-cinzel font-bold text-gold mb-4">5. Your Rights</h2>
                        <p class="mb-4">You have the right to access, correct, or delete your personal information.
                            Contact us to exercise these rights.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
