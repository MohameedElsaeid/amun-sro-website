@extends('website.layouts.app')

@section('title', 'Character Information - ASRO Game | Silkroad Private Server')
@section('meta-description',
    'View and manage your character stats, equipment, skills, and progression on ASRO – the
    ultimate Silkroad private server experience. Track your achievements and dominate the game!')
    <style>
        .hp-mp-container {
            width: 220px;
            margin-bottom: 10px;
            font-family: Arial, sans-serif;
        }

        .hp-bar-container,
        .mp-bar-container {
            display: flex;
            align-items: center;
            gap: 10px;
            /* Space between bar and text */
        }

        .hp-bar,
        .mp-bar {
            width: 100%;
            /* Adjust width of bar */
            height: 20px;
            border-radius: 5px;
            overflow: hidden;
            border: 2px solid #444;
            background-color: #222;
            position: relative;
        }

        .hp-fill,
        .mp-fill {
            width: 100%;
            /* Always full */
            height: 100%;
        }

        .hp-fill {
            background-color: red;
        }

        .mp-fill {
            background-color: blue;
        }

        .hp-text,
        .mp-text {
            font-size: 14px;
            font-weight: bold;
            color: white;
            text-shadow: 1px 1px 2px black;
        }
    </style>
@section('meta-tags')
    <meta property="og:title" content="Character Information - ASRO Game | Silkroad Private Server">
    <meta property="og:description"
        content="View and manage your character stats, equipment, skills, and progression on ASRO – the ultimate Silkroad private server experience.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('public/lovable-uploads/00d20ad0-c6a0-4811-a4cf-50337cbd64b2.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="keywords"
        content="ASRO, Silkroad, Character Stats, Character Equipment, Character Skills, MMO, RPG, Gaming">
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')

    <!-- Hero Section with Background Image and SEO-optimized content -->
    <section class="page-hero"
        style="background-image: url('{{ asset('public/lovable-uploads/fc3b6f4b-cf5b-4e27-ad49-df8a01fb98bd.png') }}');">
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-5xl md:text-6xl font-cinzel font-bold text-gold mb-4">Character Information</h1>
            <p class="text-xl md:text-2xl text-sand-light max-w-3xl mx-auto mb-8">Master your destiny by understanding your
                character's strengths, equipment, and abilities</p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('website.downloads') }}"
                    class="bg-gold/20 hover:bg-gold/30 text-gold px-6 py-2 rounded-full border border-gold/50 transition-all">
                    Download Game
                </a>
                <a href="{{ route('website.ranking') }}"
                    class="bg-midnight/70 hover:bg-midnight/90 text-sand hover:text-gold px-6 py-2 rounded-full border border-gold/30 transition-all">
                    View Rankings
                </a>
            </div>
        </div>
    </section>


    <!-- Main Content -->
    <section class="py-16 character-page">
        <div class="container mx-auto px-4">
            <div class="content-section p-8">
                <!-- Character Selector -->
                <div class="mb-8 text-center">
                    <label for="character-selector" class="text-gold font-cinzel font-bold mr-2">Select Character:</label>
                    <select id="character-selector"
                        class="bg-midnight-light text-sand border border-gold/30 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gold/50">
                        @foreach ($user->getShardUser as $index => $char)
                            <option value="{{ $char->CharID }}" data-name="{{ $char->CharName16 ?? 'none' }}"
                                data-level="{{ $char->CurLevel ?? '0' }}"
                                data-guild="{{ $char->getGuildUser->Name ?? 'No Guild' }}"
                                data-rank="{{ $char->Rank ?? 'Unknown' }}"
                                data-reputation="{{ $char->Reputation ?? 'Neutral' }}"
                                data-strength="{{ $char->Strength ?? 0 }}" data-intellect="{{ $char->Intellect ?? 0 }}"
                                data-hp="{{ $char->HP ?? 0 }}" data-mp="{{ $char->MP ?? 0 }}"
                                data-items="{{ $char->ItemPoints ?? 0 }}"
                                data-total-kills="{{ $char->TotalKills ?? 0 }}"
                                data-playtime="{{ $char->Playtime ?? '0 hours' }}"
                                data-silk="{{ $user->getSkSilk->silk_own ?? 0 }}"
                                data-gsilk="{{ $user->getSkSilk->silk_gift ?? 0 }}"
                                data-image="{{ asset('public/lovable-uploads/' . ($char->image ?? 'default.png')) }}"
                               
                                {{ $index === 0 ? 'selected' : '' }}>
                                {{ $char->CharName16 }} - Level {{ $char->CurLevel }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Left Column: Character Preview -->
                    <div class="col-span-1">
                        <div class="bg-midnight p-6 rounded-lg border border-gold/30">
                            <div class="text-center mb-6">
                                <img id="char-portrait" src="{{ asset('lovable-uploads/default.png') }}"
                                    alt="Character Preview"
                                    class="character-portrait mx-auto mb-4 h-80 object-cover rounded-lg border-4 border-gold-dark"
                                    loading="lazy">
                                <h2 id="char-name" class="text-3xl font-cinzel font-bold gold-gradient-text char-name">
                                    Character Name</h2>
                                <p class="text-sand mb-2">Level <span id="char-level">0</span> </p>
                                <p class="text-sand mb-2">Item Points <span id="item-points">0</span> </p>
                                <p class="text-sand mb-2">Silk <span id="silk">0</span> </p>
                                <p class="text-sand mb-2">Gift Silk <span id="gsilk">0</span> </p>
                                <div class="w-full hp-mp-container">
                                 
                                    <div class="hp-bar-container">
                                        <img src="{{asset('images/item_hp_potion.png')}}" alt="MP" class="mp-icon">
                                        <div class="hp-bar">
                                            <div class="hp-fill"></div>
                                        </div>
                                        <p class="hp-text" id="HP">0</p>
                                    </div>
                                    <div class="mp-bar-container">
                                        <img src="{{asset('images/item_mp_potion.png')}}" alt="MP" class="mp-icon">
                                        <div class="mp-bar">
                                            <div class="mp-fill"></div>
                                        </div>
                                        <p class="mp-text" id="MP">0</p>
                                    </div>
                                </div>



                            </div>

                            <div class="grid grid-cols-2 gap-4 text-left">
                                <div>
                                    <p class="text-sand-light text-sm">Guild</p>
                                    <p id="char-guild" class="text-gold char-guild">No Guild</p>
                                </div>
                                <div>
                                    <p class="text-sand-light text-sm">Rank</p>
                                    <p id="char-rank" class="text-gold char-rank">Member</p>
                                </div>
                                <div>
                                    <p class="text-sand-light text-sm">Reputation</p>
                                    <p id="char-reputation" class="text-gold char-reputation">Neutral</p>
                                </div>
                                <div>
                                    <p class="text-sand-light text-sm">PvP Rank</p>
                                    <p id="char-pvp-rank" class="text-gold char-pvp-rank">Unranked</p>
                                </div>
                                <div>
                                    <p class="text-sand-light text-sm">Total Kills</p>
                                    <p id="char-total-kills" class="text-gold char-total-kills">0</p>
                                </div>
                                <div>
                                    <p class="text-sand-light text-sm">Playtime</p>
                                    <p id="char-playtime" class="text-gold char-playtime">0 hours</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Right Column: Detailed Stats -->
                    <div class="lg:col-span-2">
                        <!-- Tab Navigation and Content -->

                        <div class="bg-midnight rounded-lg border border-gold/30 overflow-hidden mb-8">
                            <div class="flex border-b border-gold/30">
                                <button
                                    class="tab-button flex-1 py-4 font-cinzel font-bold text-sand-light hover:text-gold bg-midnight-light border-r border-gold/30"
                                    data-tab="stats">Stats</button>
                                <button
                                    class="tab-button flex-1 py-4 font-cinzel font-bold text-sand-light hover:text-gold border-r border-gold/30"
                                    data-tab="equipment">Equipment</button>
                                <button
                                    class="tab-button flex-1 py-4 font-cinzel font-bold text-sand-light hover:text-gold border-r border-gold/30"
                                    data-tab="skills">Skills</button>
                                <button class="tab-button flex-1 py-4 font-cinzel font-bold text-sand-light hover:text-gold"
                                    data-tab="inventory">Inventory</button>
                            </div>

                            <!-- Tab Contents -->

                            <div class="tab-content p-6" data-tab="stats">
                                <h3 class="text-2xl font-cinzel font-bold text-gold mb-6">Character Stats</h3>

                                <!-- Primary Stats -->
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8 character-stats">
                                    <div class="bg-midnight-light p-4 rounded-lg text-center">
                                        <p class="text-sand-light text-sm mb-1">STR</p>
                                        <p id="strength" class="text-2xl font-bold text-gold char-strength">325</p>
                                    </div>
                           
                                    <div class="bg-midnight-light p-4 rounded-lg text-center">
                                        <p class="text-sand-light text-sm mb-1">INT</p>
                                        <p id="intellect" class="text-2xl font-bold text-gold char-intellect">156</p>
                                    </div>
                             
                                </div>

                                <!-- Combat Stats -->
                                <h4 class="font-cinzel font-bold text-gold mb-3">Combat Statistics</h4>
                                <div class="grid grid-cols-2 gap-4 mb-8">
                                    <div class="flex justify-between items-center border-b border-midnight-light pb-2">
                                        <span class="text-sand">Attack Power</span>
                                        <span class="text-gold font-bold char-attack-power">1,248 - 1,562</span>
                                    </div>
                                    <div class="flex justify-between items-center border-b border-midnight-light pb-2">
                                        <span class="text-sand">Defense</span>
                                        <span class="text-gold font-bold char-defense">875</span>
                                    </div>
                                    <div class="flex justify-between items-center border-b border-midnight-light pb-2">
                                        <span class="text-sand">Hit Rate</span>
                                        <span class="text-gold font-bold char-hit-rate">89%</span>
                                    </div>
                                    <div class="flex justify-between items-center border-b border-midnight-light pb-2">
                                        <span class="text-sand">Evasion</span>
                                        <span class="text-gold font-bold char-evasion">32%</span>
                                    </div>
                                    <div class="flex justify-between items-center border-b border-midnight-light pb-2">
                                        <span class="text-sand">Critical Rate</span>
                                        <span class="text-gold font-bold char-crit-rate">18%</span>
                                    </div>
                                    <div class="flex justify-between items-center border-b border-midnight-light pb-2">
                                        <span class="text-sand">Critical Damage</span>
                                        <span class="text-gold font-bold char-crit-damage">+85%</span>
                                    </div>
                                    <div class="flex justify-between items-center border-b border-midnight-light pb-2">
                                        <span class="text-sand">Attack Speed</span>
                                        <span class="text-gold font-bold char-attack-speed">1.8s</span>
                                    </div>
                                    <div class="flex justify-between items-center border-b border-midnight-light pb-2">
                                        <span class="text-sand">Movement Speed</span>
                                        <span class="text-gold font-bold char-movement-speed">+15%</span>
                                    </div>
                                </div>

                        
                                </div>
                            </div>


                            <div class="tab-content p-6 hidden" data-tab="equipment">
                                <h3 class="text-2xl font-cinzel font-bold text-gold mb-6">Character Equipment</h3>

                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                    <div class="equipment-slot bg-midnight-light p-3 rounded-lg text-center"
                                        data-slot="helmet">
                                        <img src="{{ asset('public/lovable-uploads/7f1e59dd-2b2a-4e4b-a58a-38e15e614ab4.png') }}"
                                            alt="Helmet" class="w-16 h-16 mx-auto mb-2 object-cover rounded"
                                            loading="lazy">
                                        <p class="text-sand item-name">Dragon Helm</p>
                                        <p class="item-rarity text-xs text-gold">Legendary</p>
                                    </div>
                                    <div class="equipment-slot bg-midnight-light p-3 rounded-lg text-center"
                                        data-slot="armor">
                                        <img src="{{ asset('public/lovable-uploads/00d20ad0-c6a0-4811-a4cf-50337cbd64b2.png') }}"
                                            alt="Armor" class="w-16 h-16 mx-auto mb-2 object-cover rounded"
                                            loading="lazy">
                                        <p class="text-sand item-name">Phoenix Plate</p>
                                        <p class="item-rarity text-xs text-purple-500">Epic</p>
                                    </div>
                                    <div class="equipment-slot bg-midnight-light p-3 rounded-lg text-center"
                                        data-slot="weapon">
                                        <img src="{{ asset('public/lovable-uploads/c5b5f922-42d6-4f40-af04-a9b21a535166.png') }}"
                                            alt="Weapon" class="w-16 h-16 mx-auto mb-2 object-cover rounded"
                                            loading="lazy">
                                        <p class="text-sand item-name">Inferno Blade</p>
                                        <p class="item-rarity text-xs text-gold">Legendary</p>
                                    </div>
                                    <div class="equipment-slot bg-midnight-light p-3 rounded-lg text-center"
                                        data-slot="shield">
                                        <img src="{{ asset('public/lovable-uploads/fc3b6f4b-cf5b-4e27-ad49-df8a01fb98bd.png') }}"
                                            alt="Shield" class="w-16 h-16 mx-auto mb-2 object-cover rounded"
                                            loading="lazy">
                                        <p class="text-sand item-name">Guardian Shield</p>
                                        <p class="item-rarity text-xs text-blue-400">Rare</p>
                                    </div>
                                </div>

                                <div class="mt-6">
                                    <h4 class="font-cinzel font-bold text-gold mb-3">Item Set Progress</h4>
                                    <div id="item-set-tracker" class="mb-2">
                                        <div class="w-full bg-midnight-dark h-4 rounded-full">
                                            <div id="item-set-progress" class="bg-gold h-4 rounded-full"
                                                style="width: 75%"></div>
                                        </div>
                                    </div>
                                    <p id="set-bonus-text" class="text-blue-400 text-sm text-center">Partial Set Bonus:
                                        +15% All Stats</p>
                                </div>
                            </div>


                            <div class="tab-content p-6 hidden" data-tab="skills">
                                <h3 class="text-2xl font-cinzel font-bold text-gold mb-6">Skills & Abilities</h3>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 skills-container">
                                    <div class="bg-midnight-light p-4 rounded-lg border border-gold/10">
                                        <div class="flex justify-between items-center mb-2">
                                            <div class="flex items-center">
                                                <img src="{{ asset('public/lovable-uploads/7c8740e7-41d7-4bd9-8050-af2f261d732c.png') }}"
                                                    alt="Skill Icon" class="w-10 h-10 rounded mr-3 object-cover">
                                                <p class="font-bold text-gold">Dragon's Fury</p>
                                            </div>
                                            <span class="text-xs text-white bg-gold-dark px-2 py-1 rounded">Level 8</span>
                                        </div>
                                        <p class="text-sm text-sand-light">Unleash a devastating strike that deals 250%
                                            weapon damage and applies a burn effect.</p>
                                        <div class="mt-2 text-xs text-sand-light">
                                            <span class="text-gold">Cooldown:</span> 12s |
                                            <span class="text-gold">Mana Cost:</span> 45
                                        </div>
                                    </div>
                                    <!-- Additional skills will be loaded dynamically -->
                                </div>

                                <div class="mt-4 text-center">
                                    <a href="#" class="text-gold hover:underline text-sm">View All Skills</a>
                                </div>
                            </div>


                            <div class="tab-content p-6 hidden" data-tab="inventory">
                                <h3 class="text-2xl font-cinzel font-bold text-gold mb-6">Inventory</h3>

                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                    <div class="bg-midnight-light p-3 rounded-lg text-center">
                                        <img src="{{ asset('public/lovable-uploads/13bfe58b-10ba-451c-bb7b-740b3c03cbf0.png') }}"
                                            alt="Item" class="w-16 h-16 mx-auto mb-2 object-cover rounded"
                                            loading="lazy">
                                        <p class="text-sand">Healing Potion</p>
                                        <p class="text-xs text-sand-light">Qty: 18</p>
                                    </div>
                                    <div class="bg-midnight-light p-3 rounded-lg text-center">
                                        <img src="{{ asset('public/lovable-uploads/426e4d3b-6678-4c5b-ad59-2a77c224da22.png') }}"
                                            alt="Item" class="w-16 h-16 mx-auto mb-2 object-cover rounded"
                                            loading="lazy">
                                        <p class="text-sand">Mana Potion</p>
                                        <p class="text-xs text-sand-light">Qty: 12</p>
                                    </div>
                                    <div class="bg-midnight-light p-3 rounded-lg text-center">
                                        <img src="{{ asset('public/lovable-uploads/2b42bee2-ed9c-402b-b071-2de45bf0394b.png') }}"
                                            alt="Item" class="w-16 h-16 mx-auto mb-2 object-cover rounded"
                                            loading="lazy">
                                        <p class="text-sand">Dragon Scale</p>
                                        <p class="text-xs text-sand-light">Qty: 5</p>
                                    </div>
                                    <div class="bg-midnight-light p-3 rounded-lg text-center">
                                        <img src="{{ asset('public/lovable-uploads/7c8740e7-41d7-4bd9-8050-af2f261d732c.png') }}"
                                            alt="Item" class="w-16 h-16 mx-auto mb-2 object-cover rounded"
                                            loading="lazy">
                                        <p class="text-sand">Gold Coin</p>
                                        <p class="text-xs text-sand-light">Qty: 1,450</p>
                                    </div>
                                </div>

                                <div class="mt-6 text-center">
                                    <p class="text-sand-light mb-2">Inventory Space: 24/40 slots used</p>
                                    <div class="w-full bg-midnight-dark h-3 rounded-full">
                                        <div class="bg-gold h-3 rounded-full" style="width: 60%"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Recent Activity -->

                <div class="mt-8">
                    <div class="section-header">
                        <h2 class="text-3xl font-cinzel font-bold gold-gradient-text">Recent Activity</h2>
                    </div>

                    <div class="bg-midnight p-6 rounded-lg border border-gold/30 mt-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="text-left">
                                    <tr class="border-b border-gold/30">
                                        <th class="pb-3 font-cinzel text-gold">Date</th>
                                        <th class="pb-3 font-cinzel text-gold">Activity</th>
                                        <th class="pb-3 font-cinzel text-gold">Details</th>
                                        <th class="pb-3 font-cinzel text-gold">Rewards</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-midnight-light/30">
                                        <td class="py-3 text-sand-light">Today, 10:45 AM</td>
                                        <td class="py-3 text-sand-light">Dungeon Cleared</td>
                                        <td class="py-3 text-sand-light">The Forgotten Catacombs (Hard)</td>
                                        <td class="py-3 text-sand-light">1200 XP, 4500 Gold</td>
                                    </tr>
                                    <tr class="border-b border-midnight-light/30">
                                        <td class="py-3 text-sand-light">Today, 09:30 AM</td>
                                        <td class="py-3 text-sand-light">PvP Battle</td>
                                        <td class="py-3 text-sand-light">Victory against ShadowAssassin</td>
                                        <td class="py-3 text-sand-light">25 Honor Points</td>
                                    </tr>
                                    <tr class="border-b border-midnight-light/30">
                                        <td class="py-3 text-sand-light">Yesterday, 8:15 PM</td>
                                        <td class="py-3 text-sand-light">Quest Completed</td>
                                        <td class="py-3 text-sand-light">The Dragon's Lair (Epic)</td>
                                        <td class="py-3 text-sand-light">1800 XP, Dragon Scale x5</td>
                                    </tr>
                                    <tr class="border-b border-midnight-light/30">
                                        <td class="py-3 text-sand-light">Yesterday, 6:30 PM</td>
                                        <td class="py-3 text-sand-light">Item Crafted</td>
                                        <td class="py-3 text-sand-light">Phoenix Plate (Epic)</td>
                                        <td class="py-3 text-sand-light">50 Crafting XP</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 text-sand-light">June 27, 2023</td>
                                        <td class="py-3 text-sand-light">Level Up</td>
                                        <td class="py-3 text-sand-light">Reached Level 92</td>
                                        <td class="py-3 text-sand-light">5 Stat Points, 3 Skill Points</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Equipment Modal -->

    <div id="equipment-modal" class="fixed inset-0 bg-black/70 flex items-center justify-center z-50 hidden">
        <div class="bg-midnight border border-gold/30 rounded-lg max-w-2xl w-full max-h-[80vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-2xl font-cinzel font-bold text-gold">Select Equipment</h3>
                    <button id="close-equipment-modal" class="text-sand-light hover:text-gold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div id="equipment-items-list" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Equipment items will be populated here -->
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')


@endsection
