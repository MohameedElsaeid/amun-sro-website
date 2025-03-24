@extends('support.layouts.app')

@section('title', 'Support login - Amun Sro')

@section('content')
    <!-- Login Form Section -->
    <section class="py-12 bg-midnight relative">
        <div class="container mx-auto px-4">
            <div class="content-section p-8 max-w-md mx-auto">
                <div class="mb-8 text-center">
                    <img src="{{ asset('icons/logo.webp') }}" alt="Amun Sro Logo" class="h-20 mx-auto mb-4"
                         loading="lazy">
                    <h2 class="text-3xl font-cinzel font-bold gold-gradient-text">Welcome Back</h2>
                    <p class="text-sand-light mt-2">Enter your credentials to continue</p>
                </div>

                <form method="POST" action="{{ route('support.login.submit') }}" class="space-y-6">
                    @csrf
                    <div>
                        <label for="username" class="block text-sand-light font-medium mb-2">Username</label>
                        <input type="text" id="username" name="StrUserID"
                               class="w-full bg-midnight-light border border-gold-dark/20 focus:border-gold px-4 py-3 rounded-md text-sand-light"
                               placeholder="Enter your username" required>
                        @error('username')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <div class="flex justify-between mb-2">
                            <label for="password" class="block text-sand-light font-medium">Password</label>
                            <a href="{{ route('website.forgotPassword') }}"
                               class="text-gold hover:text-gold-light text-sm">Forgot Password?</a>
                        </div>
                        <input type="password" id="password" name="password"
                               class="w-full bg-midnight-light border border-gold-dark/20 focus:border-gold px-4 py-3 rounded-md text-sand-light"
                               placeholder="Enter your password" required>
                        @error('password')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>


                    <button type="submit"
                            class="w-full bg-gold hover:bg-gold-light text-midnight-dark font-bold py-3 px-6 rounded-md transition duration-300 flex items-center justify-center">
                        <span>Login to Your Account</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </form>


                <div class="mt-8 flex justify-center">
                    <div class="flex items-center text-sand-light/70 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span>Secure login with 256-bit encryption</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
