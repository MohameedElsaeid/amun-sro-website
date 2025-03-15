@extends('website.layouts.app')

@section('title', 'Account Management - ASRO')
@section('meta-description', 'Manage your ASRO account settings, security, and character information from one central
    dashboard.')

@section('content')

    <!-- Hero Section -->
    <div class="page-hero" style="background-image: url('{{ asset('icons/feat_3.webp') }}');">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4">My Account</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8">Manage your ASRO account</p>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-16 bg-midnight">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Account Information Card -->
                <div class="bg-midnight-light rounded-lg border border-gold/30 overflow-hidden shadow-lg">
                    <!-- Account Header -->
                    <div class="p-6 border-b border-gold/30">
                        <div class="flex items-center space-x-4">
                            <img src="{{ asset('icons/feat_5.webp') }}" alt="Profile Avatar"
                                class="w-20 h-20 rounded-full border-2 border-gold">
                            <div>
                                <h2 class="text-2xl font-cinzel font-bold text-gold">Account Information</h2>
                                <p class="text-sand-light">Manage your personal details</p>
                                @if(session('success'))
                                <div class="bg-green-500 text-white p-4 rounded-md mb-4">
                                    {{ session('success') }}
                                </div>
                            @endif
                            
                            @if(session('error'))
                                <div class="bg-red-500 text-white p-4 rounded-md mb-4">
                                    {{ session('error') }}
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>

                    <!-- Account Details -->
                    <div class="p-6 space-y-6">
                        <form action="{{ route('website.change.password') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                                <div>
                                    <label class="block text-sand-light text-sm font-medium mb-2">Old Password</label>
                                    <input type="password" name="old_password"
                                        class="w-full bg-midnight border border-gold/20 rounded-md px-4 py-2 text-sand-light">
                                    @error('old_password')
                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sand-light text-sm font-medium mb-2">New Password</label>
                                    <input type="password" name="new_password"
                                        class="w-full bg-midnight border border-gold/20 rounded-md px-4 py-2 text-sand-light">
                                    @error('new_password')
                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sand-light text-sm font-medium mb-2">Password
                                        Confirmation</label>
                                    <input type="password" name="password_confirmation"
                                        class="w-full bg-midnight border border-gold/20 rounded-md px-4 py-2 text-sand-light">
                                    @error('password_confirmation')
                                        <p class="text-red-500 text-sm">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="bg-gold text-white px-6 py-2 rounded-md mt-4">Update
                                Password</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
