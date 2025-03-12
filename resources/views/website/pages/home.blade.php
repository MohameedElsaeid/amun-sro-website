@extends('website.layouts.app')

@section('title', 'Home - ASRO Game')
@section('meta-description', 'View player rankings for ASRO game. See the top players, leaderboards, and character stats in the ancient Egyptian online world.')

@section('content')

    <div class="hero min-h-screen bg-cover bg-center relative"
         style="background-image: url('{{ asset('icons/diff_conver.webp') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div
            class="container mx-auto px-4 relative z-10 flex flex-col items-center justify-center h-screen text-center">
            <img src="{{ asset('icons/logo.webp') }}" alt="ASRO Game Logo" class="mb-8 w-64 md:w-80 animate-pulse-slow"
                 loading="lazy" width="256" height="256">
            <h1 class="text-4xl md:text-6xl font-cinzel font-bold text-gold mb-4 text-shadow">Enter the World of
                ASRO</h1>
            <p class="text-xl md:text-2xl text-sand-light mb-8 max-w-3xl">Embark on an epic journey through the mystical
                lands of ancient Egypt. Battle legendary creatures, uncover ancient artifacts, and rise to power in this
                immersive online adventure.</p>
            <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6">
                @guest
                    <a href="{{ route('website.register') }}" class="play-now-btn">Play Now</a>
                @else
                    <a href="{{ route('website.account') }}" class="play-now-btn">My Account</a>
                @endguest
                <a href="{{ route('website.downloads') }}" class="download-btn">Download Game</a>
            </div>
        </div>
    </div>
    <main>


        <!-- Server Status Detailed Section -->
        <section class="relative py-12 z-20 bg-midnight/80">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-cinzel font-bold text-gold text-center mb-8">Server Information</h2>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Server Status Card -->
                    <div
                        class="bg-midnight-light p-6 rounded-lg border border-gold/30 hover:border-gold/50 transition-all">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-2xl font-cinzel font-bold text-gold">Server Status</h3>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-green-500 mr-2">
                                    <rect width="20" height="14" x="2" y="5" rx="2"/>
                                    <line x1="2" x2="22" y1="10" y2="10"/>
                                    <line x1="6" x2="6" y1="5" y2="1"/>
                                    <line x1="10" x2="10" y1="5" y2="1"/>
                                    <line x1="14" x2="14" y1="5" y2="1"/>
                                    <line x1="18" x2="18" y1="5" y2="1"/>
                                </svg>
                                <span class="text-green-500 font-bold text-lg">ONLINE</span>
                            </div>
                        </div>

                        <div class="flex items-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="text-gold mr-3">
                                <path d="M18 21a8 8 0 0 0-16 0"/>
                                <circle cx="10" cy="8" r="5"/>
                                <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-2-8"/>
                                <path d="M15 9.33a5 5 0 0 1 0 5.34"/>
                            </svg>
                            <span class="text-sand-light">Players: <span id="playersCounter"
                                                                         class="text-gold font-bold">1116 / 5000</span></span>
                        </div>

                        <div class="flex items-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="text-gold mr-3">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="m9 12 2 2 4-4"/>
                            </svg>
                            <span class="text-sand-light">Supporters Online: <span id="supportersCounter"
                                                                                   class="text-gold font-bold">11 / 11</span></span>
                        </div>
                    </div>

                    <!-- Game Features -->
                    <div
                        class="bg-midnight-light p-6 rounded-lg border border-gold/30 hover:border-gold/50 transition-all col-span-1 lg:col-span-2">
                        <h3 class="text-2xl font-cinzel font-bold text-gold mb-4">Game Features</h3>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-x-4 gap-y-3">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/>
                                    <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/>
                                    <path d="M4 22h16"/>
                                    <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/>
                                    <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/>
                                    <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/>
                                </svg>
                                <span class="text-sand-light">Play To Win</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <path d="M6 2 3 6v14a2 2 0 0 0-2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/>
                                    <path d="M3 6h18"/>
                                    <path d="M16 10a4 4 0 0 1-8 0"/>
                                </svg>
                                <span class="text-sand-light">Active Support On</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <rect width="16" height="16" x="4" y="4" rx="2"/>
                                    <rect width="6" height="6" x="9" y="9" rx="1"/>
                                    <path d="M15 2v2"/>
                                    <path d="M15 20v2"/>
                                    <path d="M2 15h2"/>
                                    <path d="M20 15h2"/>
                                </svg>
                                <span class="text-sand-light">Cap 110</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <line x1="2" y1="12" x2="22" y2="12"/>
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                                </svg>
                                <span class="text-sand-light">CH/EU</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/>
                                </svg>
                                <span class="text-sand-light">EXP/SP x4</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <path
                                        d="M20.91 8.84 8.56 2.23a1.93 1.93 0 0 0-1.81 0L3.1 4.13a2.12 2.12 0 0 0-.05 3.69l12.22 6.93a2 2 0 0 0 1.94 0L21 12.51a2.12 2.12 0 0 0-.09-3.67Z"/>
                                    <path
                                        d="m3.09 8.84 12.35-6.61a1.93 1.93 0 0 1 1.81 0l3.65 1.9a2.12 2.12 0 0 1 .1 3.69L8.73 14.75a2 2 0 0 1-1.94 0L3 12.51a2.12 2.12 0 0 1 .09-3.67Z"/>
                                    <line x1="12" y1="22" x2="12" y2="13"/>
                                    <path
                                        d="M20 13.5v3.37a2.06 2.06 0 0 1-1.11 1.83l-6 3.08a1.93 1.93 0 0 1-1.78 0l-6-3.08A2.06 2.06 0 0 1 4 16.87V13.5"/>
                                </svg>
                                <span class="text-sand-light">Tradegoods Enabled</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <path d="M12 2v20"/>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                                </svg>
                                <span class="text-sand-light">Max-Plus 12 No adv</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <rect width="14" height="14" x="5" y="5" rx="1"/>
                                    <path d="M8 2v3"/>
                                    <path d="M16 2v3"/>
                                    <path d="M8 19v3"/>
                                    <path d="M16 19v3"/>
                                    <path d="M2 8h3"/>
                                    <path d="M2 16h3"/>
                                    <path d="M19 8h3"/>
                                    <path d="M19 16h3"/>
                                </svg>
                                <span class="text-sand-light">PC Limit 1</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <path d="M10 2v7.31"/>
                                    <path d="M14 9.3V1.99"/>
                                    <path d="M8.5 2h7"/>
                                    <path d="M14 9.3a6.5 6.5 0 1 1-4 0"/>
                                    <path d="M5.58 16.5h12.85"/>
                                </svg>
                                <span class="text-sand-light">Alchemy rate x3</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <path d="M14.5 12.5 18 9l-5-5-8.5 8.5L9 17h5l.5-4.5Z"/>
                                    <path d="M18 9v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"/>
                                    <path d="m5 15 13-4"/>
                                </svg>
                                <span class="text-sand-light">Pvp Event</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <path d="M12 2v8"/>
                                    <path d="m4.93 10.93 1.41 1.41"/>
                                    <path d="M2 18h2"/>
                                    <path d="M20 18h2"/>
                                    <path d="m19.07 10.93-1.41 1.41"/>
                                    <path d="M22 22H2"/>
                                    <path d="m16 6-4 4-4-4"/>
                                    <path d="M16 18a4 4 0 0 0-8 0"/>
                                </svg>
                                <span class="text-sand-light">FTW Pc limit 1</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <path d="m18 3-3 7-3-7"/>
                                    <path d="m6 3 3 7 3-7"/>
                                    <path d="M18 21a4 4 0 0 0 0-8H6a4 4 0 0 0 0 8"/>
                                    <path d="M12 7v8"/>
                                    <path d="m6 15 12 0"/>
                                </svg>
                                <span class="text-sand-light">Arena battle Pc limit 1</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/>
                                    <line x1="4" y1="22" x2="4" y2="15"/>
                                </svg>
                                <span class="text-sand-light">Capture the flag Pc limit 1</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <path d="M3 7V5c0-1.1.9-2 2-2h2"/>
                                    <path d="M17 3h2c1.1 0 2 .9 2 2v2"/>
                                    <path d="M21 17v2c0 1.1-.9 2-2 2h-2"/>
                                    <path d="M7 21H5c-1.1 0-2-.9-2-2v-2"/>
                                    <path d="M8 14h.01"/>
                                    <path d="M8 10h.01"/>
                                    <path d="M12 16h.01"/>
                                    <path d="M12 12h.01"/>
                                    <path d="M16 14h.01"/>
                                    <path d="M16 10h.01"/>
                                    <path d="M12 8h.01"/>
                                </svg>
                                <span class="text-sand-light">Holywater Temple On</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <rect width="20" height="14" x="2" y="7" rx="2" ry="2"/>
                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                                </svg>
                                <span class="text-sand-light">Job Pc limit 1</span>
                            </div>

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="text-gold mr-2">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                                <span class="text-sand-light">Guild Limit 32</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features Section -->
        <section class="relative py-20 z-20">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-cinzel font-bold text-gold text-center mb-16">Epic Features</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="feature-card">
                        <img src="{{ asset('icons/feat_1.webp') }}" alt="Combat Feature"
                             class="w-full h-48 object-cover rounded-lg mb-6" loading="lazy" width="384" height="192">
                        <h3 class="text-2xl font-cinzel font-bold text-gold mb-4">Dynamic Combat</h3>
                        <p class="text-sand">Master martial arts, unleash devastating combos, and engage in epic PvP
                            battles.</p>
                    </div>
                    <div class="feature-card">
                        <img src="{{ asset('icons/cover.webp') }}" alt="World Feature"
                             class="w-full h-48 object-cover rounded-lg mb-6" loading="lazy" width="384" height="192">
                        <h3 class="text-2xl font-cinzel font-bold text-gold mb-4">Vast World</h3>
                        <p class="text-sand">Explore an immersive world filled with ancient temples, mysterious
                            dungeons, and hidden treasures.</p>
                    </div>
                    <div class="feature-card">
                        <img src="{{ asset('icons/feat_6.webp') }}" alt="Character Feature"
                             class="w-full h-48 object-cover rounded-lg mb-6" loading="lazy" width="384" height="192">
                        <h3 class="text-2xl font-cinzel font-bold text-gold mb-4">Character Growth</h3>
                        <p class="text-sand">Customize your character, master unique skills, and become a legendary
                            warrior.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Community Section -->
        <section class="relative py-20 z-20">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-cinzel font-bold text-gold text-center mb-16">Join Our Community</h2>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Discord Widget -->
                    <div class="flex justify-center">
                        <iframe src="https://discordapp.com/widget?id=1348067790510231673&theme=dark" width="350"
                                height="500" allowtransparency="true" frameborder="0"
                                sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"
                                loading="lazy"></iframe>
                    </div>

                    <!-- Vote for Us -->
                    <div
                        class="bg-midnight-light p-6 rounded-lg border border-gold/30 hover:border-gold/50 transition-all flex flex-col items-center justify-center">
                        <h3 class="text-2xl font-cinzel font-bold text-gold mb-6">Vote For Us</h3>
                        <p class="text-sand-light text-center mb-8">Support our server by voting for us on XtremeTop100.
                            Every vote helps us grow!</p>
                        <!-- XtremeTop100 Widget -->
                        <a href="https://www.xtremetop100.com/in.php?site=1132377058" title="Silkroad Online Server"
                           class="transform hover:scale-105 transition-all" target="_blank" rel="noopener noreferrer">
                            <img src="https://www.xtremeTop100.com/votenew.jpg" border="0" alt="Silkroad Online Server"
                                 class="rounded-lg shadow-md" loading="lazy">
                        </a>
                    </div>

                    <!-- Join Now Card -->
                    <div
                        class="bg-midnight-light p-6 rounded-lg border border-gold/30 hover:border-gold/50 transition-all flex flex-col items-center justify-center">
                        <h3 class="text-2xl font-cinzel font-bold text-gold mb-6">Start Your Adventure</h3>
                        <p class="text-sand-light text-center mb-8">Join over 1000 players in an epic adventure through
                            ancient realms. Download the game client now!</p>
                        <div class="flex flex-col space-y-4">
                            <a href="#" class="play-now-btn text-center">Play Now</a>
                            <a href="#" class="download-btn text-center">Download Client</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest News -->
        <section class="relative py-20 bg-midnight-light z-20">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-cinzel font-bold text-gold text-center mb-16">Latest News</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        class="news-card bg-midnight-dark p-6 rounded-lg hover:shadow-lg transition-all transform hover:scale-105">
                        <img src="{{ asset('icons/diff_conver.webp') }}" alt="News Image"
                             class="w-full h-48 object-cover rounded mb-4" loading="lazy" width="384" height="192">
                        <div class="text-gold text-sm mb-2">June 23, 2023</div>
                        <h3 class="text-xl font-cinzel font-bold text-gold mb-3">New Expansion Release</h3>
                        <p class="text-sand mb-4">Explore the new Crimson Temple expansion with challenging dungeons and
                            powerful rewards!</p>
                        <a href="#" class="text-gold hover:text-gold-light transition-colors">Read More →</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
