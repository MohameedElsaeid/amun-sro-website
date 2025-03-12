
@extends('website.layouts.app')

@section('title', 'Error - Something Went Wrong - ASRO')
@section('meta-description', 'We encountered an unexpected error. Our team has been notified.')

@section('content')
    <!-- Hero Section -->
    <div class="page-hero" style="background-image: url('{{ asset('public/lovable-uploads/42271246-1e84-4bfd-b0f3-9fb95bfb7992.png') }}');">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4">Error</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8">Something Went Wrong</p>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-16 bg-midnight">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-midnight-light rounded-lg border border-gold/30 p-8 text-center">
                <img src="{{ asset('icons/logo.png') }}" alt="ASRO Logo" class="h-24 mx-auto mb-8">

                <h2 class="text-3xl font-cinzel font-bold text-gold mb-6">Oops! Something went wrong.</h2>

                <p class="text-sand-light text-lg mb-8">
                    We're experiencing some technical difficulties. Our team has been notified of this issue and is working to fix it.
                </p>

                <div class="flex justify-center space-x-4">
                    <a href="{{ route('website.home') }}" class="bg-gold hover:bg-gold-dark text-midnight font-bold py-3 px-6 rounded-lg transition-colors">
                        Return to Homepage
                    </a>
                    <a href="{{ route('website.contact-us') }}" class="border border-gold text-gold hover:bg-gold/10 font-bold py-3 px-6 rounded-lg transition-colors">
                        Contact Support
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
