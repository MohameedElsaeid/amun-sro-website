@extends('website.layouts.app')

@section('title', 'Register - Amun Sro')
@section('meta-description', 'Create your Amun Sro account and join our Silkroad private server. Sign up now to embark on an epic ancient Egyptian adventure.')

@section('content')
    <!-- Hero Section -->
    <div class="page-hero" style="background-image: url('{{ asset('icons/cover.webp') }}');">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-cinzel font-bold text-white mb-4">Create Account</h1>
            <p class="text-xl text-sand-light max-w-3xl mx-auto">Join thousands of players in the ancient world of Amun
                Sro</p>
        </div>
    </div>

    <!-- Registration Form Section -->
    <section class="py-12 bg-midnight relative">
        <div class="container mx-auto px-4">
            <div class="content-section p-8 max-w-2xl mx-auto">
                <div class="mb-8 text-center">
                    <img src="{{ asset('icons/logo.webp') }}" alt="Amun Sro Logo" class="h-20 mx-auto mb-4"
                         loading="lazy">
                    <h2 class="text-3xl font-cinzel font-bold gold-gradient-text">Begin Your Adventure</h2>
                    <p class="text-sand-light mt-2">Create your account to start playing</p>
                </div>

                <form method="POST" action="{{ route('website.register.submit') }}" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="username" class="block text-sand-light font-medium mb-2">Username</label>
                            <input type="text" id="username" name="username"
                                   value="{{ old('username') }}"
                                   class="w-full bg-midnight-light border border-gold-dark/20 focus:border-gold px-4 py-3 rounded-md text-sand-light"
                                   placeholder="Choose a username" required>
                            @error('username')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sand-light font-medium mb-2">Email Address</label>
                            <input type="email" id="email" name="email"
                                   value="{{ old('email') }}"
                                   class="w-full bg-midnight-light border border-gold-dark/20 focus:border-gold px-4 py-3 rounded-md text-sand-light"
                                   placeholder="Enter your email" required>
                            @error('email')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="block text-sand-light font-medium mb-2">Password</label>
                            <input type="password" id="password" name="password"
                                   class="w-full bg-midnight-light border border-gold-dark/20 focus:border-gold px-4 py-3 rounded-md text-sand-light"
                                   placeholder="Create a password" required>
                            @error('password')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="password_confirmation" class="block text-sand-light font-medium mb-2">Confirm
                                Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                   class="w-full bg-midnight-light border border-gold-dark/20 focus:border-gold px-4 py-3 rounded-md text-sand-light"
                                   placeholder="Confirm your password" required>
                        </div>
                    </div>
                    @if(isset($referrerId))
                        <input type="hidden" name="code" value="{{ $referrerId }}">
                        <div class="bg-gold/10 text-gold border border-gold/20 p-3 rounded-md mb-6 text-center">
                            <p>You are registering with an invitation link.</p>
                        </div>
                    @endif
                    <div class="border-t border-gold-dark/20 pt-6">
                        <div class="flex items-start">
                            <input type="checkbox" id="terms" name="terms"
                                   class="h-5 w-5 mt-1 border border-gold-dark/20 rounded accent-gold"
                                   {{ old('terms') ? 'checked' : '' }} required>
                            <label for="terms" class="ml-2 text-sand-light">
                                I agree to the <a href="{{ route('website.terms') }}"
                                                  class="text-gold hover:text-gold-light">Terms of Service</a> and
                                <a href="{{ route('website.privacy') }}" class="text-gold hover:text-gold-light">Privacy
                                    Policy</a>
                            </label>
                        </div>
                    </div>

                    <button type="submit"
                            class="w-full bg-gold hover:bg-gold-light text-midnight-dark font-bold py-3 px-6 rounded-md transition duration-300 flex items-center justify-center">
                        <span>Create Your Account</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </form>

                <div class="mt-8 text-center">
                    <p class="text-sand-light">Already have an account?
                        <a href="{{ route('website.login') }}"
                           class="text-gold hover:text-gold-light font-medium">Login</a>
                    </p>
                </div>

                <div class="mt-8 bg-midnight-light p-4 rounded-md border border-gold-dark/20">
                    <h3 class="text-lg font-bold text-sand-light mb-2">Important Information</h3>
                    <ul class="text-sand-light/80 text-sm space-y-2">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 flex-shrink-0"
                                 viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <span>Your account credentials will be used to access both the game and website features.</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 flex-shrink-0"
                                 viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <span>Using a strong password will help keep your account secure.</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 flex-shrink-0"
                                 viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <span>A verification email will be sent to complete your registration.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
