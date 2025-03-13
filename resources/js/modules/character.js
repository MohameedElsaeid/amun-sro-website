
/**
 * Character display and management functionality for ASRO Game website
 */

export function initCharacterPage() {
    const tabButtons = document.querySelectorAll('.tab-button');
    const characterItems = document.querySelectorAll('.character-item');
    const equipmentSlots = document.querySelectorAll('.equipment-slot');
    const characterSelector = document.querySelector('#character-selector');
    
    // Initialize character tab navigation
    if (tabButtons.length > 0) {
        // Set the first tab as active by default
        tabButtons[0].classList.add('active-tab');
        
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all tabs
                tabButtons.forEach(btn => {
                    btn.classList.remove('active-tab');
                    btn.classList.remove('text-gold');
                    btn.classList.add('text-sand-light');
                });
                
                // Add active class to clicked tab
                this.classList.add('active-tab');
                this.classList.add('text-gold');
                this.classList.remove('text-sand-light');
                
                // Show corresponding tab content
                const tabId = this.getAttribute('data-tab');
                const tabContent = document.querySelectorAll('.tab-content');
                
                tabContent.forEach(content => {
                    content.classList.add('hidden');
                });
                
                const activeContent = document.querySelector(`.tab-content[data-tab="${tabId}"]`);
                if (activeContent) {
                    activeContent.classList.remove('hidden');
                }
            });
        });
    }
    
    // Character selector functionality
    if (characterSelector) {
        characterSelector.addEventListener('change', function() {
            const selectedCharId = this.value;
            console.log(`Switching to character: ${selectedCharId}`);
            
            // In a real implementation, this would load character data via AJAX
            // For now, we'll just update the UI with mock data
            updateCharacterDisplay(selectedCharId);
        });
    }
    
    // Initialize equipment item hover tooltips
    if (characterItems.length > 0) {
        characterItems.forEach(item => {
            // Add hover effect for items
            item.addEventListener('mouseenter', function() {
                // Show item tooltip
                const tooltip = this.querySelector('.item-tooltip');
                if (tooltip) {
                    tooltip.classList.remove('hidden');
                }
            });
            
            item.addEventListener('mouseleave', function() {
                // Hide item tooltip
                const tooltip = this.querySelector('.item-tooltip');
                if (tooltip) {
                    tooltip.classList.add('hidden');
                }
            });
        });
    }
    
    // Enable equipment slot interactions
    if (equipmentSlots.length > 0) {
        equipmentSlots.forEach(slot => {
            slot.addEventListener('click', function() {
                const slotName = this.dataset.slot;
                console.log(`Clicked on equipment slot: ${slotName}`);
                // Open equipment selector modal
                const equipmentModal = document.querySelector('#equipment-modal');
                if (equipmentModal) {
                    equipmentModal.classList.remove('hidden');
                    equipmentModal.setAttribute('data-target-slot', slotName);
                    
                    // Populate modal with items that can be equipped in this slot
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
    
    // Handle character stats display
    const statsContainer = document.querySelector('.character-stats');
    if (statsContainer) {
        // Implement any dynamic stat calculations or displays here
        console.log('Character stats initialized');
    }
    
    // Update elemental resistances display with visual indicators
    updateElementalResistances();
    
    // Initialize the item set completion tracker
    initItemSetTracker();
}

function updateCharacterDisplay(characterId) {
    // This function would update the character display with actual data
    // For now, we'll use mock data
    const mockCharData = {
        'char1': {
            name: 'MRmody',
            level: 100,
            strength: 416,
            intellect: 119,
            hp: 45495,
            mp: 17481,
            guild: 'UnitedBroZ',
            guildLevel: 5,
            race: 'China ch',
            lastLogout: '2025-03-13 02:14',
            itemPoints: 10595
        },
        'char2': {
            name: 'Bikaaa',
            level: 85,
            strength: 320,
            intellect: 95,
            hp: 32000,
            mp: 12000,
            guild: 'ShadowWalkers',
            guildLevel: 4,
            race: 'Europe eu',
            lastLogout: '2025-03-12 18:22',
            itemPoints: 8750
        }
    };
    
    // Get the data for the selected character
    const charData = mockCharData[characterId] || mockCharData['char1'];
    
    // Update UI elements with character data
    document.querySelectorAll('.char-name').forEach(el => {
        el.textContent = charData.name;
    });
    
    document.querySelectorAll('.char-level').forEach(el => {
        el.textContent = charData.level;
    });
    
    document.querySelector('.char-strength').textContent = charData.strength;
    document.querySelector('.char-intellect').textContent = charData.intellect;
    document.querySelector('.char-hp').textContent = charData.hp;
    document.querySelector('.char-mp').textContent = charData.mp;
    document.querySelector('.char-guild').textContent = `${charData.guild} | Level ${charData.guildLevel}`;
    document.querySelector('.char-race').textContent = charData.race;
    document.querySelector('.char-item-points').textContent = charData.itemPoints;
    document.querySelector('.char-last-logout').textContent = charData.lastLogout;
    
    // Update character portrait (in a real app, would use actual character images)
    const portrait = document.querySelector('.character-portrait');
    if (portrait) {
        portrait.src = `/public/lovable-uploads/${characterId === 'char1' ? '00d20ad0-c6a0-4811-a4cf-50337cbd64b2.png' : '7f1e59dd-2b2a-4e4b-a58a-38e15e614ab4.png'}`;
    }
}

function populateEquipmentModal(slotName) {
    // This function would populate the equipment modal with items that can be equipped in the given slot
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
        'accessory': [
            { id: 'ac1', name: 'Dragon Pendant', rarity: 'Epic', level: 92, stats: '+25 All Stats' },
            { id: 'ac2', name: 'Lucky Charm', rarity: 'Rare', level: 88, stats: '+15% Critical Rate' },
            { id: 'ac3', name: 'Ancient Relic', rarity: 'Legendary', level: 95, stats: '+20 All Stats, +10% Damage' }
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
                <p class="text-sand-light text-xs">Level ${item.level} ${getRarityText(item.rarity)}</p>
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
        
        // Update stats based on equipped item
        updateCharacterStats();
        
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

function getRarityText(rarity) {
    return rarity;
}

function updateElementalResistances() {
    const resistanceElements = document.querySelectorAll('.resistance-element');
    
    if (resistanceElements.length > 0) {
        resistanceElements.forEach(element => {
            const value = parseInt(element.textContent.replace('%', ''));
            
            // Add visual indicator based on resistance value
            if (value >= 40) {
                element.classList.add('text-green-500');
            } else if (value >= 20) {
                element.classList.add('text-yellow-400');
            } else {
                element.classList.add('text-red-400');
            }
        });
    }
}

function updateCharacterStats() {
    // This function would recalculate character stats based on equipped items
    console.log('Updating character stats based on equipped items');
    
    // In a real implementation, this would gather all equipped items,
    // calculate their combined stat bonuses, and update the character stats display
}

function checkItemSets() {
    // This function would check if the player has completed any item sets
    console.log('Checking for completed item sets');
    
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

function initItemSetTracker() {
    // Initialize the item set tracker UI
    console.log('Initializing item set tracker');
    
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

// Add equipment tooltip functionality
export function initEquipmentTooltips() {
    const equipmentItems = document.querySelectorAll('.equipment-item');
    
    equipmentItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            // Position tooltip based on screen position
            const tooltip = this.querySelector('.item-details');
            if (tooltip) {
                tooltip.classList.remove('hidden');
                
                // Position tooltip to avoid going off-screen
                const rect = tooltip.getBoundingClientRect();
                const viewportHeight = window.innerHeight;
                const viewportWidth = window.innerWidth;
                
                if (rect.bottom > viewportHeight) {
                    tooltip.style.top = 'auto';
                    tooltip.style.bottom = '100%';
                }
                
                if (rect.right > viewportWidth) {
                    tooltip.style.left = 'auto';
                    tooltip.style.right = '0';
                }
            }
        });
        
        item.addEventListener('mouseleave', function() {
            const tooltip = this.querySelector('.item-details');
            if (tooltip) {
                tooltip.classList.add('hidden');
            }
        });
    });
}

// Add extra CSS style for active tab
function addCharacterStyles() {
    const styleEl = document.createElement('style');
    styleEl.textContent = `
        .active-tab {
            background-color: var(--midnight-dark);
            border-bottom: 2px solid var(--gold);
        }
        
        .item-tooltip {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 10;
            min-width: 200px;
            padding: 0.5rem;
            background-color: var(--midnight-dark);
            border: 1px solid var(--gold);
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }
        
        .item-equipped {
            border: 2px solid var(--gold);
        }
        
        .equipment-slot {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .equipment-slot:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.5);
        }
    `;
    document.head.appendChild(styleEl);
}

// Initialize character styles when the page loads
export function initCharacterModule() {
    // Wait for DOM content to be loaded
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            addCharacterStyles();
            initCharacterPage();
            initEquipmentTooltips();
        });
    } else {
        addCharacterStyles();
        initCharacterPage();
        initEquipmentTooltips();
    }
}
