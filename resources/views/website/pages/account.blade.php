@extends('website.layouts.app')

@section('title', 'Account Management - ASRO')
@section('meta-description', 'Manage your ASRO account settings, security, and character information from one central dashboard.')

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
            <div class="bg-gradient-to-r from-gold to-gold-light text-midnight-dark p-4 rounded-lg mb-12 shadow-lg text-center transform hover:scale-105 transition-all">
                <h2 class="text-2xl font-bold">🎉 Complete Your Profile & Earn 100 Gift Silk! 🎉</h2>
                <p class="mt-2">Fill in your profile details now and receive <span class="font-bold">100 Gift Silk</span> as a reward!</p>
                <div class="mt-4">
                    <a href="{{route('website.view.profile')}}" class="inline-flex items-center px-4 py-2 bg-gold hover:bg-gold-light text-midnight-dark font-bold rounded-md transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Compelete Profile
                    </a>
                </div>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <!-- Account Information Card -->
                <div class="bg-midnight-light rounded-lg border border-gold/30 overflow-hidden shadow-lg">
                    <!-- Account Header -->
                    <div class="p-6 border-b border-gold/30">
                        <div class="flex items-center space-x-4">
                            <img src="{{ asset('icons/feat_5.webp') }}"
                                 alt="Profile Avatar"
                                 class="w-20 h-20 rounded-full border-2 border-gold">
                            <div>
                                <h2 class="text-2xl font-cinzel font-bold text-gold">Account Information</h2>
                                <p class="text-sand-light">Manage your personal details</p>
                            </div>
                        </div>
                    </div>

                    <!-- Account Details -->
                    <div class="p-6 space-y-6">
                        <!-- Basic Information -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sand-light text-sm font-medium mb-2">Username</label>
                                <input type="text" value="{{$data['StrUserID']}}" readonly
                                       class="w-full bg-midnight border border-gold/20 rounded-md px-4 py-2 text-sand-light">
                            </div>
                            <div>
                                <label class="block text-sand-light text-sm font-medium mb-2">Email Address</label>
                                <input type="email" value="{{$data['Email']}}" readonly
                                       class="w-full bg-midnight border border-gold/20 rounded-md px-4 py-2 text-sand-light">
                            </div>
                            <div>
                                <label class="block text-sand-light text-sm font-medium mb-2">Account Created</label>
                                <input type="text" value="January 15, 2023" readonly
                                       class="w-full bg-midnight border border-gold/20 rounded-md px-4 py-2 text-sand-light">
                            </div>
                            <div>
                                <label class="block text-sand-light text-sm font-medium mb-2">Last Login</label>
                                <input type="text" value="Today at 09:34 AM" readonly
                                       class="w-full bg-midnight border border-gold/20 rounded-md px-4 py-2 text-sand-light">
                            </div>
                        </div>

                        <!-- Account Actions -->
                        <div class="space-y-4 pt-6 border-t border-gold/30">
                            <div class="flex flex-wrap gap-4">
                                <a href="{{route('website.view.change.password')}}" class="inline-flex items-center px-4 py-2 bg-gold hover:bg-gold-light text-midnight-dark font-bold rounded-md transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                    Change Password
                                </a>
                                <a href="{{route('website.view.profile')}}" class="inline-flex items-center px-4 py-2 bg-gold hover:bg-gold-light text-midnight-dark font-bold rounded-md transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    Update Profile
                                </a>
                                <a href="{{route('website.character')}}" class="inline-flex items-center px-4 py-2 bg-midnight-light hover:bg-gold/20 text-gold font-bold rounded-md transition-colors border border-gold/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                    View Characters
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
