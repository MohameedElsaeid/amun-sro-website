
<div class="bg-midnight rounded-lg border border-gold/30 overflow-hidden mb-8">
    <div class="flex border-b border-gold/30">
        <button class="tab-button flex-1 py-4 font-cinzel font-bold text-sand-light hover:text-gold bg-midnight-light border-r border-gold/30" data-tab="stats">Stats</button>
        <button class="tab-button flex-1 py-4 font-cinzel font-bold text-sand-light hover:text-gold border-r border-gold/30" data-tab="equipment">Equipment</button>
        <button class="tab-button flex-1 py-4 font-cinzel font-bold text-sand-light hover:text-gold border-r border-gold/30" data-tab="skills">Skills</button>
        <button class="tab-button flex-1 py-4 font-cinzel font-bold text-sand-light hover:text-gold" data-tab="inventory">Inventory</button>
    </div>
    
    <!-- Tab Contents -->
    @include('Website.pages.character.components.stats-tab-content')
    @include('Website.pages.character.components.equipment-tab-content')
    @include('Website.pages.character.components.skills-tab-content')
    @include('Website.pages.character.components.inventory-tab-content')
</div>
