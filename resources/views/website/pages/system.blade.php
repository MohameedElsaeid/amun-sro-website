
@extends('website.layouts.app')

@section('title', 'System - Amun Sro')
@section('meta-description', 'View system requirements and compatibility information for Amun Sro. Learn what hardware is needed for optimal performance on our Silkroad private server.')

@section('content')
    <!-- Hero Section -->
    <div class="page-hero relative" style="background-image: url('{{ asset('public/lovable-uploads/aee3d338-c6e3-4faa-a1b7-58108ffbd84b.png') }}');">
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4">System Requirements</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8">Hardware and software needed to play Amun Sro</p>
        </div>
    </div>

    <!-- Main Content -->
    <section class="py-16 bg-midnight-dark relative z-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 relative z-10">
                <!-- Minimum Requirements Card -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-midnight-dark p-4">
                        <h2 class="text-2xl font-cinzel font-bold text-gold text-center">Minimum</h2>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-dark mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="font-bold text-midnight-dark">OS</p>
                                    <p class="text-midnight">Windows 7 (64-bit)</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-dark mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="font-bold text-midnight-dark">CPU</p>
                                    <p class="text-midnight">Intel Core i3 (2nd Gen) or AMD equivalent</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-dark mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="font-bold text-midnight-dark">RAM</p>
                                    <p class="text-midnight">4 GB</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-dark mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="font-bold text-midnight-dark">Graphics</p>
                                    <p class="text-midnight">DirectX 9 compatible with 1GB VRAM</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-dark mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="font-bold text-midnight-dark">Storage</p>
                                    <p class="text-midnight">5 GB available space</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Recommended Requirements Card -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="bg-midnight-dark p-4">
                        <h2 class="text-2xl font-cinzel font-bold text-gold text-center">Recommended</h2>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-dark mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="font-bold text-midnight-dark">OS</p>
                                    <p class="text-midnight">Windows 10/11 (64-bit)</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-dark mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="font-bold text-midnight-dark">CPU</p>
                                    <p class="text-midnight">Intel Core i5 (6th Gen) or AMD Ryzen 5</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-dark mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="font-bold text-midnight-dark">RAM</p>
                                    <p class="text-midnight">8 GB</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-dark mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="font-bold text-midnight-dark">Graphics</p>
                                    <p class="text-midnight">DirectX 11 compatible with 2GB VRAM</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gold-dark mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <p class="font-bold text-midnight-dark">Storage</p>
                                    <p class="text-midnight">10 GB SSD</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Optional: System Check Tool -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-cinzel font-bold text-midnight-dark mb-4">System Check Tool</h2>
                    <p class="mb-4">Not sure if your system meets the requirements? Download our system check tool to analyze your computer's specs.</p>
                    <div class="text-center">
                        <a href="#" class="bg-gold-dark hover:bg-gold text-white font-medium px-6 py-3 rounded-md inline-block">Download System Check Tool</a>
                    </div>
                </div>
            </div>

            <!-- Internet Connection Requirements -->
            <div class="bg-white rounded-lg shadow-lg p-8 mb-12 relative z-10">
                <h2 class="text-2xl font-cinzel font-bold text-midnight-dark mb-6 text-center">Internet Connection</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="border-r border-sand pr-4">
                        <h3 class="text-xl font-cinzel font-bold text-gold-dark mb-4">Minimum</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold-dark mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Broadband connection (1 Mbps or higher)</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold-dark mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Stable connection</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pl-4">
                        <h3 class="text-xl font-cinzel font-bold text-gold-dark mb-4">Recommended</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold-dark mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>High-speed connection (5 Mbps or higher)</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold-dark mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Wired connection (Ethernet)</span>
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gold-dark mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Low latency connection (ping under 100ms)</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
