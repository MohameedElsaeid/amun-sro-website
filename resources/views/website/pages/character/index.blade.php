
@extends('website.layouts.app')

@section('title', 'Character Information - ASRO Game | Silkroad Private Server')
@section('meta-description', 'View and manage your character stats, equipment, skills, and progression on ASRO – the ultimate Silkroad private server experience. Track your achievements and dominate the game!')

@section('meta-tags')
<meta property="og:title" content="Character Information - ASRO Game | Silkroad Private Server">
<meta property="og:description" content="View and manage your character stats, equipment, skills, and progression on ASRO – the ultimate Silkroad private server experience.">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ asset('public/lovable-uploads/00d20ad0-c6a0-4811-a4cf-50337cbd64b2.png') }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="keywords" content="ASRO, Silkroad, Character Stats, Character Equipment, Character Skills, MMO, RPG, Gaming">
<link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')
    @include('Website.pages.character.components.hero-section')

    <!-- Main Content -->
    <section class="py-16 character-page">
        <div class="container mx-auto px-4">
            <div class="content-section p-8">
                <!-- Character Selector -->
                <div class="mb-8 text-center">
                    <label for="character-selector" class="text-gold font-cinzel font-bold mr-2">Select Character:</label>
                    <select id="character-selector" class="bg-midnight-light text-sand border border-gold/30 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-gold/50">
                        @foreach($user->getShardUser as $char)
                        <option value="{{$char->CharID}}"
                            data-name="{{$char->CharName16}}"
                            data-level="{{$char->CurLevel}}"
                            data-guild="{{$char->getGuildUser->Name ?? 'No Guild'}}"
                            data-rank="{{$char->Rank ?? 'Unknown'}}"
                            data-reputation="{{$char->Reputation ?? 'Neutral'}}"
                            data-hp="{{$char->HP ??0}}"
                            data-mp="{{$char->MP ??0}}"
                            data-total-kills="{{$char->TotalKills ?? 0}}"
                            data-playtime="{{$char->Playtime ?? '0 hours'}}"
                            data-image="{{ asset('public/lovable-uploads/' . ($char->image ?? 'default.png')) }}">
                            {{$char->CharName16}} - Level {{$char->CurLevel}}
                        </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Left Column: Character Preview -->
                    <div class="col-span-1">
                        <div class="bg-midnight p-6 rounded-lg border border-gold/30">
                            <div class="text-center mb-6">
                                <img id="char-portrait" src="{{ asset('lovable-uploads/default.png') }}" alt="Character Preview" class="character-portrait mx-auto mb-4 h-80 object-cover rounded-lg border-4 border-gold-dark" loading="lazy">
                                <h2 id="char-name" class="text-3xl font-cinzel font-bold gold-gradient-text char-name">Character Name</h2>
                                <p class="text-sand mb-2">Level <span id="char-level">0</span> Warrior</p>
                    
                                <!-- Experience Bar -->
                                <div class="w-full bg-midnight-light rounded-full h-4 mb-4">
                                    <div id="char-xp-bar" class="character-xp-bar bg-gradient-to-r from-gold-dark to-gold h-4 rounded-full" style="width: 0%"></div>
                                </div>
                                <p id="char-xp-text" class="character-xp-text text-sand-light text-sm mb-4">0% to Level 1</p>
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
                        @include('Website.pages.character.components.character-tabs')
                    </div>
                </div>
                
                <!-- Recent Activity -->
                @include('Website.pages.character.components.recent-activity')
            </div>
        </div>
    </section>
    
    <!-- Equipment Modal -->
    @include('Website.pages.character.components.equipment-modal')
@endsection

@section('scripts')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "VideoGame",
    "name": "ASRO Silkroad Online",
    "description": "ASRO is a private server for the popular MMORPG Silkroad Online, offering enhanced gameplay, custom content, and active community.",
    "genre": ["MMORPG", "Fantasy", "Adventure"],
    "gamePlatform": ["PC"],
    "applicationCategory": "Game",
    "operatingSystem": "Windows",
    "author": {
        "@type": "Organization",
        "name": "ASRO Game Team"
    },
    "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock"
    }
}
</script>

<script>
    async function fetchCharacterData(charId) {
       try {
           const response = await fetch(`/character/${charId}`);
           const data = await response.json();
   
           console.log('API Response:', data); // Debugging: Check what the API returns
   
           // Check if the character exists in the response
           if (!data.hasOwnProperty(charId)) {
               console.error(`Character with ID ${charId} not found`);
               return;
           }
   
           const char = data[charId]; // Now safely access the character
   
           document.getElementById('char-portrait').src = `/lovable-uploads/${char.portrait}`;
           document.getElementById('char-name').textContent = char.name;
           document.getElementById('char-level').textContent = char.level;
           document.getElementById('char-xp-bar').style.width = `${char.xpPercent}%`;
           document.getElementById('char-xp-text').textContent = `${char.xpPercent}% to Level ${char.nextLevel}`;
           document.getElementById('char-guild').textContent = char.guild;
           document.getElementById('char-rank').textContent = char.rank;
           document.getElementById('char-reputation').textContent = char.reputation;
           document.getElementById('char-pvp-rank').textContent = char.pvpRank;
           document.getElementById('char-total-kills').textContent = char.totalKills;
           document.getElementById('char-playtime').textContent = char.playtime;
       } catch (error) {
           console.error('Error fetching character data:', error);
       }
   }
   
   // Extract character ID from URL
   document.addEventListener('DOMContentLoaded', () => {
       const urlSegments = window.location.pathname.split('/');
       const characterId = urlSegments[urlSegments.length - 1]; // Gets the last segment of the URL
   
       if (characterId) {
           fetchCharacterData(characterId);
       }
   });
   
   document.addEventListener("DOMContentLoaded", function() {
       let characterSelector = document.getElementById('character-selector');
       let charName = document.getElementById('char-name');
   
       // Function to update character details
       function updateCharacter() {
           let selectedOption = characterSelector.options[characterSelector.selectedIndex];
   
           // Update character name
           charName.innerText = selectedOption.getAttribute('data-name');
           
           // Update other details
           document.getElementById('char-level').innerText = selectedOption.getAttribute('data-level');
           document.getElementById('char-guild').innerText = selectedOption.getAttribute('data-guild');
           document.getElementById('char-rank').innerText = selectedOption.getAttribute('data-rank');
           document.getElementById('char-reputation').innerText = selectedOption.getAttribute('data-reputation');
           document.getElementById('char-pvp-rank').innerText = selectedOption.getAttribute('data-pvp-rank');
           document.getElementById('char-total-kills').innerText = selectedOption.getAttribute('data-total-kills');
           document.getElementById('char-playtime').innerText = selectedOption.getAttribute('data-playtime');
           document.getElementById('hp').innerText = selectedOption.getAttribute('data-hp');
           document.getElementById('mp').innerText = selectedOption.getAttribute('data-mp');
   
           // Update character image
           document.getElementById('char-portrait').src = selectedOption.getAttribute('data-image');
       }
   
       // Set default character on page load
       updateCharacter();
   
       // Update when selection changes
       characterSelector.addEventListener('change', updateCharacter);
   });
   </script>
@endsection
