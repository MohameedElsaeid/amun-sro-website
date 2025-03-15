
/**
 * Character equipment functionality
 */

export function initCharacterEquipment(state) {
    const equipmentSlots = document.querySelectorAll('.equipment-slot');

    if (equipmentSlots.length === 0) {
        return;
    }

    initItemSetTracker();

    // Listen for character updates
    document.addEventListener('character:updated', function(e) {
        const characterId = e.detail.characterId;
        updateCharacterEquipment(characterId);
    });

    // Enable equipment slot interactions
    equipmentSlots.forEach(slot => {
        slot.addEventListener('click', function() {
            const slotName = this.dataset.slot;
            const equipmentModal = document.querySelector('#equipment-modal');
            if (equipmentModal) {
                equipmentModal.classList.remove('hidden');
                equipmentModal.setAttribute('data-target-slot', slotName);
                populateEquipmentModal(slotName);
            }
        });
    });

    // Close modal button
    const closeModalBtn = document.querySelector('#close-equipment-modal');
    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', function() {
            const equipmentModal = document.querySelector('#equipment-modal');
            if (equipmentModal) {
                equipmentModal.classList.add('hidden');
            }
        });
    }
}

function updateCharacterEquipment(characterId) {
    // This would fetch character equipment data from an API in a real implementation
    const mockEquipment = {
        'char1': {
            helmet: { id: 'h1', name: 'Dragon Helm', rarity: 'Legendary', level: 95 },
            armor: { id: 'a1', name: 'Phoenix Plate', rarity: 'Epic', level: 94 },
            weapon: { id: 'w1', name: 'Inferno Blade', rarity: 'Legendary', level: 95 },
            shield: { id: 'sh1', name: 'Guardian Shield', rarity: 'Rare', level: 90 }
        },
        'char2': {
            helmet: { id: 'h2', name: 'Mystic Crown', rarity: 'Epic', level: 92 },
            armor: { id: 'a3', name: 'Ice Mail', rarity: 'Rare', level: 90 },
            weapon: { id: 'w2', name: 'Thunder Axe', rarity: 'Epic', level: 93 },
            shield: { id: 'sh2', name: 'Dragonscale Buckler', rarity: 'Epic', level: 91 }
        }
    };

    // Get the equipment for the selected character
    const equipment = mockEquipment[characterId] || mockEquipment['char1'];

    // Update each equipment slot
    Object.keys(equipment).forEach(slotName => {
        const slot = document.querySelector(`.equipment-slot[data-slot="${slotName}"]`);
        if (slot) {
            const item = equipment[slotName];
            const itemName = slot.querySelector('.item-name');
            const itemRarity = slot.querySelector('.item-rarity');

            if (itemName) itemName.textContent = item.name;
            if (itemRarity) {
                itemRarity.textContent = item.rarity;
                itemRarity.className = `item-rarity text-xs ${getRarityColor(item.rarity)}`;
            }

            slot.classList.add('item-equipped');
        }
    });

    // Update item set bonuses
    checkItemSets();
}

function populateEquipmentModal(slotName) {
    // This function populates the equipment modal with items that can be equipped in the given slot
    // For demonstration, we'll use mock data
    const mockEquipment = {
        'helmet': [
            { id: 'h1', name: 'Dragon Helm', rarity: 'Legendary', level: 95, stats: '+45 STR, +25 Defense' },
            { id: 'h2', name: 'Mystic Crown', rarity: 'Epic', level: 92, stats: '+38 INT, +20 Defense' },
            { id: 'h3', name: 'Warrior Cap', rarity: 'Rare', level: 88, stats: '+30 STR, +18 Defense' }
        ],
        'armor': [
            { id: 'a1', name: 'Phoenix Plate', rarity: 'Epic', level: 94, stats: '+50 Defense, +20 Fire Resist' },
            { id: 'a2', name: 'Shadow Armor', rarity: 'Legendary', level: 96, stats: '+60 Defense, +15 Dark Resist' },
            { id: 'a3', name: 'Ice Mail', rarity: 'Rare', level: 90, stats: '+40 Defense, +25 Ice Resist' }
        ],
        'weapon': [
            { id: 'w1', name: 'Inferno Blade', rarity: 'Legendary', level: 95, stats: '+85 Attack, +25 Fire Damage' },
            { id: 'w2', name: 'Thunder Axe', rarity: 'Epic', level: 93, stats: '+75 Attack, +30 Lightning Damage' },
            { id: 'w3', name: 'Frost Mace', rarity: 'Rare', level: 89, stats: '+65 Attack, +20 Ice Damage' }
        ],
        'shield': [
            { id: 'sh1', name: 'Guardian Shield', rarity: 'Rare', level: 90, stats: '+40 Defense, +10% Block Chance' },
            { id: 'sh2', name: 'Dragonscale Buckler', rarity: 'Epic', level: 91, stats: '+55 Defense, +15% Block Chance' },
            { id: 'sh3', name: 'Aegis of Protection', rarity: 'Legendary', level: 94, stats: '+70 Defense, +20% Block Chance' }
        ]
    };

    const items = mockEquipment[slotName] || [];
    const modalContent = document.querySelector('#equipment-items-list');

    if (modalContent) {
        modalContent.innerHTML = '';

        items.forEach(item => {
            const itemElement = document.createElement('div');
            itemElement.className = 'bg-midnight-light p-3 rounded-lg text-center cursor-pointer hover:border hover:border-gold transition-all';
            itemElement.innerHTML = `
                <p class="font-bold ${getRarityColor(item.rarity)}">${item.name}</p>
                <p class="text-sand-light text-xs">Level ${item.level} ${item.rarity}</p>
                <p class="text-sand text-xs mt-1">${item.stats}</p>
            `;

            itemElement.addEventListener('click', function() {
                equipItem(slotName, item);
                const equipmentModal = document.querySelector('#equipment-modal');
                if (equipmentModal) {
                    equipmentModal.classList.add('hidden');
                }
            });

            modalContent.appendChild(itemElement);
        });
    }
}

function equipItem(slotName, item) {
    // Update the UI to show the equipped item
    const slot = document.querySelector(`.equipment-slot[data-slot="${slotName}"]`);
    if (slot) {
        const itemName = slot.querySelector('.item-name');
        const itemRarity = slot.querySelector('.item-rarity');

        if (itemName) itemName.textContent = item.name;
        if (itemRarity) {
            itemRarity.textContent = item.rarity;
            itemRarity.className = `item-rarity text-xs ${getRarityColor(item.rarity)}`;
        }

        // Add equipped class to indicate the slot has an item
        slot.classList.add('item-equipped');

        // Check if we've completed any item sets
        checkItemSets();
    }
}

function getRarityColor(rarity) {
    switch (rarity.toLowerCase()) {
        case 'legendary': return 'text-gold';
        case 'epic': return 'text-purple-500';
        case 'rare': return 'text-blue-400';
        case 'uncommon': return 'text-green-500';
        default: return 'text-sand-light';
    }
}

function initItemSetTracker() {
    // Initialize the item set tracker UI
    const setTrackerContainer = document.querySelector('#item-set-tracker');
    if (setTrackerContainer) {
        // Set up the initial state of the tracker
        const totalSlots = document.querySelectorAll('.equipment-slot').length;
        const equippedSlots = document.querySelectorAll('.equipment-slot.item-equipped').length;
        const progressPercent = (equippedSlots / totalSlots) * 100;

        const setProgressBar = document.querySelector('#item-set-progress');
        if (setProgressBar) {
            setProgressBar.style.width = `${progressPercent}%`;
        }
    }
}

function checkItemSets() {
    // This function checks if the player has completed any item sets
    const equippedSlots = document.querySelectorAll('.equipment-slot.item-equipped');
    const totalEquipped = equippedSlots.length;

    const setProgressBar = document.querySelector('#item-set-progress');
    if (setProgressBar) {
        // Update the item set completion progress bar
        const totalSlots = document.querySelectorAll('.equipment-slot').length;
        const progressPercent = (totalEquipped / totalSlots) * 100;
        setProgressBar.style.width = `${progressPercent}%`;

        // Update the set bonus text
        const setBonusText = document.querySelector('#set-bonus-text');
        if (setBonusText) {
            if (totalEquipped >= 6) {
                setBonusText.textContent = 'Full Set Bonus: +25% All Stats, +15% Damage';
                setBonusText.classList.remove('text-sand-light');
                setBonusText.classList.add('text-gold');
            } else if (totalEquipped >= 4) {
                setBonusText.textContent = 'Partial Set Bonus: +15% All Stats';
                setBonusText.classList.remove('text-sand-light');
                setBonusText.classList.add('text-blue-400');
            } else if (totalEquipped >= 2) {
                setBonusText.textContent = 'Minor Set Bonus: +5% All Stats';
                setBonusText.classList.remove('text-sand-light');
                setBonusText.classList.add('text-green-500');
            } else {
                setBonusText.textContent = 'Equip more items for set bonuses';
                setBonusText.classList.remove('text-gold', 'text-blue-400', 'text-green-500');
                setBonusText.classList.add('text-sand-light');
            }
        }
    }
}
