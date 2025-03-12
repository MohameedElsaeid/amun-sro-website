@extends('website.layouts.app')

@section('title', 'Downloads - Amun Sro')
@section('meta-description', 'Download the Amun Sro game client and patches. Get the latest version, system requirements, and installation guides for your Silkroad private server experience.')

@section('content')
    <!-- Hero Section with Background Image -->
    <section class="page-hero"
             style="background-image: url('{{ asset('public/lovable-uploads/7c8740e7-41d7-4bd9-8050-af2f261d732c.png') }}');">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4">Game Downloads</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8">Begin your journey on the legendary
                Silk Road. Download everything you need to start your adventure.</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="content-section p-8">
                <!-- Client Downloads -->
                <div class="mb-16">
                    <div class="section-header">
                        <h2 class="text-4xl font-cinzel font-bold gold-gradient-text">Game Client</h2>
                        <p class="text-sand mt-2">Download the complete game client to begin your adventure</p>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Full Client -->
                        <div
                            class="bg-midnight p-6 rounded-lg border border-gold/30 hover:border-gold transition-all card-hover-effect">
                            <div class="flex flex-col md:flex-row items-center">
                                <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
                                    <img src="{{ asset('icons/logo.webp') }}" alt="Full Client"
                                         class="w-24 h-24 object-cover rounded-full border-2 border-gold">
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-cinzel font-bold text-gold mb-2">Full Game Client</h3>
                                    <p class="text-sand-light mb-4">Complete game installation package with all files
                                        needed to play</p>
                                    <div class="grid grid-cols-2 gap-2 mb-4">
                                        <div class="text-sm text-sand-light"><span class="text-gold">Size:</span> 2.6 GB
                                        </div>
                                        <div class="text-sm text-sand-light"><span class="text-gold">Version:</span>
                                            4.2.3
                                        </div>
                                        <div class="text-sm text-sand-light"><span class="text-gold">Platform:</span>
                                            Windows
                                        </div>
                                    </div>
                                    <a href="{{asset('data/AmunSro.rar')}}"
                                       class="inline-flex items-center justify-center bg-gold hover:bg-gold-dark text-midnight-dark font-bold px-6 py-3 rounded-lg transition-colors w-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                        </svg>
                                        Download Full Client
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Patch -->
                        <div
                            class="bg-midnight p-6 rounded-lg border border-gold/30 hover:border-gold transition-all card-hover-effect">
                            <div class="flex flex-col md:flex-row items-center">
                                <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
                                    <img src="{{ asset('icons/sBotLogo.webp') }}" alt="Patch"
                                         class="w-24 h-24 object-cover rounded-full border-2 border-gold">
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-cinzel font-bold text-gold mb-2">SBoot</h3>
                                    <p class="text-sand-light mb-4">Take The Best Experience</p>
                                    <div class="grid grid-cols-2 gap-2 mb-4">
                                        <div class="text-sm text-sand-light"><span class="text-gold">Size:</span>14.0 MB
                                        </div>
                                        <div class="text-sm text-sand-light"><span class="text-gold">Version:</span>1.0.51
                                        </div>
                                        <div class="text-sm text-sand-light"><span class="text-gold">Platform:</span>
                                            Windows
                                        </div>
                                    </div>
                                    <a href="{{asset('data/AmunSro_SBotP_1.0.51.rar')}}"
                                       class="inline-flex items-center justify-center bg-gold hover:bg-gold-dark text-midnight-dark font-bold px-6 py-3 rounded-lg transition-colors w-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"/>
                                        </svg>
                                        Download
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- System Requirements -->
                <div class="mb-16">
                    <div class="section-header">
                        <h2 class="text-4xl font-cinzel font-bold gold-gradient-text">System Requirements</h2>
                        <p class="text-sand mt-2">Check if your computer meets the requirements to run ASRO</p>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Minimum Requirements -->
                        <div class="bg-midnight p-6 rounded-lg border border-gold/30">
                            <h3 class="text-2xl font-cinzel font-bold text-gold mb-4">Minimum Requirements</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><span class="text-gold font-bold">OS:</span> Windows 7/8/10 (64-bit)</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><span class="text-gold font-bold">CPU:</span> Intel Core i3 or AMD equivalent</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><span class="text-gold font-bold">RAM:</span> 4 GB</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><span class="text-gold font-bold">GPU:</span> NVIDIA GeForce GTX 550 or AMD equivalent</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><span class="text-gold font-bold">DirectX:</span> Version 9.0c</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><span class="text-gold font-bold">Storage:</span> 8 GB available space</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><span class="text-gold font-bold">Network:</span> Broadband Internet connection</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Recommended Requirements -->
                        <div class="bg-midnight p-6 rounded-lg border border-gold/30">
                            <h3 class="text-2xl font-cinzel font-bold text-gold mb-4">Recommended Requirements</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><span class="text-gold font-bold">OS:</span> Windows 10 (64-bit)</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><span
                                            class="text-gold font-bold">CPU:</span> Intel Core i5 or AMD Ryzen 5</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><span class="text-gold font-bold">RAM:</span> 8 GB</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><span class="text-gold font-bold">GPU:</span> NVIDIA GeForce GTX 960 or AMD Radeon R9 380</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><span class="text-gold font-bold">DirectX:</span> Version 11</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><span class="text-gold font-bold">Storage:</span> 8 GB available space (SSD recommended)</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold mr-2 mt-0.5"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><span class="text-gold font-bold">Network:</span> Broadband Internet connection</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Installation Guide -->
                <div>
                    <div class="section-header">
                        <h2 class="text-4xl font-cinzel font-bold gold-gradient-text">Installation Guide</h2>
                        <p class="text-sand mt-2">Follow these steps to properly install ASRO</p>
                    </div>

                    <div class="bg-midnight p-6 rounded-lg border border-gold/30">
                        <ol class="space-y-4">
                            <li class="flex">
                                <span
                                    class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-gold text-midnight-dark font-bold mr-3">1</span>
                                <div>
                                    <h4 class="text-xl font-cinzel font-bold text-gold">Download the Game Client</h4>
                                    <p class="text-sand-light">Download the full client or patch from the links
                                        above.</p>
                                </div>
                            </li>
                            <li class="flex">
                                <span
                                    class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-gold text-midnight-dark font-bold mr-3">2</span>
                                <div>
                                    <h4 class="text-xl font-cinzel font-bold text-gold">Extract the Files</h4>
                                    <p class="text-sand-light">Extract the downloaded files to a location of your choice
                                        using WinRAR or 7-Zip.</p>
                                </div>
                            </li>
                            <li class="flex">
                                <span
                                    class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-gold text-midnight-dark font-bold mr-3">3</span>
                                <div>
                                    <h4 class="text-xl font-cinzel font-bold text-gold">Run the Installer</h4>
                                    <p class="text-sand-light">Run the setup file and follow the on-screen instructions
                                        to install the game.</p>
                                </div>
                            </li>
                            <li class="flex">
                                <span
                                    class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-gold text-midnight-dark font-bold mr-3">4</span>
                                <div>
                                    <h4 class="text-xl font-cinzel font-bold text-gold">Create an Account</h4>
                                    <p class="text-sand-light">Register an account on our website to play the game.</p>
                                </div>
                            </li>
                            <li class="flex">
                                <span
                                    class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-gold text-midnight-dark font-bold mr-3">5</span>
                                <div>
                                    <h4 class="text-xl font-cinzel font-bold text-gold">Launch the Game</h4>
                                    <p class="text-sand-light">Use the launcher to start the game and enter your account
                                        credentials.</p>
                                </div>
                            </li>
                        </ol>

                        <div class="mt-8 p-4 bg-midnight-light rounded-lg">
                            <div class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold mr-2 flex-shrink-0"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-sand-light text-sm">If you encounter any issues during installation,
                                    please visit our <a href="{{route('website.help')}}"
                                                        class="text-gold hover:underline">Help Center</a> or contact our
                                    <a href="https://discord.gg/CjacDZVaff" class="text-gold hover:underline">Support Team</a> for assistance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
