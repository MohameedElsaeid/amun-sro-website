
<div class="tab-content p-6 hidden" data-tab="equipment">
    <h3 class="text-2xl font-cinzel font-bold text-gold mb-6">Character Equipment</h3>
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="equipment-slot bg-midnight-light p-3 rounded-lg text-center" data-slot="helmet">
            <img src="{{ asset('public/lovable-uploads/7f1e59dd-2b2a-4e4b-a58a-38e15e614ab4.png') }}" alt="Helmet" class="w-16 h-16 mx-auto mb-2 object-cover rounded" loading="lazy">
            <p class="text-sand item-name">Dragon Helm</p>
            <p class="item-rarity text-xs text-gold">Legendary</p>
        </div>
        <div class="equipment-slot bg-midnight-light p-3 rounded-lg text-center" data-slot="armor">
            <img src="{{ asset('public/lovable-uploads/00d20ad0-c6a0-4811-a4cf-50337cbd64b2.png') }}" alt="Armor" class="w-16 h-16 mx-auto mb-2 object-cover rounded" loading="lazy">
            <p class="text-sand item-name">Phoenix Plate</p>
            <p class="item-rarity text-xs text-purple-500">Epic</p>
        </div>
        <div class="equipment-slot bg-midnight-light p-3 rounded-lg text-center" data-slot="weapon">
            <img src="{{ asset('public/lovable-uploads/c5b5f922-42d6-4f40-af04-a9b21a535166.png') }}" alt="Weapon" class="w-16 h-16 mx-auto mb-2 object-cover rounded" loading="lazy">
            <p class="text-sand item-name">Inferno Blade</p>
            <p class="item-rarity text-xs text-gold">Legendary</p>
        </div>
        <div class="equipment-slot bg-midnight-light p-3 rounded-lg text-center" data-slot="shield">
            <img src="{{ asset('public/lovable-uploads/fc3b6f4b-cf5b-4e27-ad49-df8a01fb98bd.png') }}" alt="Shield" class="w-16 h-16 mx-auto mb-2 object-cover rounded" loading="lazy">
            <p class="text-sand item-name">Guardian Shield</p>
            <p class="item-rarity text-xs text-blue-400">Rare</p>
        </div>
    </div>
    
    <div class="mt-6">
        <h4 class="font-cinzel font-bold text-gold mb-3">Item Set Progress</h4>
        <div id="item-set-tracker" class="mb-2">
            <div class="w-full bg-midnight-dark h-4 rounded-full">
                <div id="item-set-progress" class="bg-gold h-4 rounded-full" style="width: 75%"></div>
            </div>
        </div>
        <p id="set-bonus-text" class="text-blue-400 text-sm text-center">Partial Set Bonus: +15% All Stats</p>
    </div>
</div>
