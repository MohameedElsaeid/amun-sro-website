
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
                @include('Website.pages.character.components.character-selector')
                
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Left Column: Character Preview -->
                    @include('Website.pages.character.components.character-preview')
                    
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
@endsection
