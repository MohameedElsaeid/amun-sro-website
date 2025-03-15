@extends('website.layouts.app')

@section('title', 'Recharge Silk - Amun Sro')
@section('meta-description', 'Recharge Silk Units to enhance your gameplay on Amun Sro. Choose from various packages and power up your adventure in our Silkroad private server.')

@section('content')
    @include('website.pages.donation.components.hero-section')

    <!-- Main Content -->
    <main class="py-16 bg-sand-light relative z-20">
        <div class="container mx-auto px-4">

            @include('website.pages.donation.components.special-offer')

            @include('website.pages.donation.components.benefits-section')

            @include('website.pages.donation.components.currency-selection')

            <!-- Silk Packages -->
            <div id="silk-packages" class="silk-container bg-white rounded-lg shadow-xl p-8 relative z-10">
                <h2 class="text-3xl font-cinzel font-bold text-midnight text-center mb-6">Recharge Silk Units</h2>
                <p class="text-midnight text-center mb-10">Select a package below to enhance your Amun Sro experience
                    with Silk units.</p>

                <form id="donation-form">
                    @include('website.pages.donation.components.package-cards')

                    @include('website.pages.donation.components.mobile-summary')

                    @include('website.pages.donation.components.payment-section')
                </form>
            </div>

            @include('website.pages.donation.components.payment-modal')

            @include('website.pages.donation.components.how-to-recharge')

            @include('website.pages.donation.components.customer-reviews')

            @include('website.pages.donation.components.faq-section')
        </div>
    </main>
@endsection
