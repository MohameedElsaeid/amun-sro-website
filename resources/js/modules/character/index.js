
/**
 * Main character module that coordinates all character functionality
 */

import { initCharacterStats } from './character-stats.js';
import { initCharacterEquipment } from './character-equipment.js';
import { initCharacterSkills } from './character-skills.js';
import { initCharacterTooltips } from './character-tooltips.js';
import { initTabNavigation } from './tab-navigation.js';
import { initCharacterSelection } from './character-selection.js';

export function initCharacterModule() {
    console.log('Initializing character module...');
    
    const characterPage = document.querySelector('.character-page');
    if (!characterPage) {
        console.log('Character page not found');
        return;
    }
    
    console.log('Character page found, initializing components...');
    
    // Create shared state object
    const state = {
        currentCharacter: null,
        selectedTab: 'stats', // Default tab
        characterData: {},
        updateCharacter: function(characterId) {
            // Method to update the character display
            console.log(`Updating character display for ID: ${characterId}`);
            this.currentCharacter = characterId;
            // Trigger UI updates across all components
            this.triggerUpdate();
        },
        triggerUpdate: function() {
            // Publish an event that all components can listen to
            const event = new CustomEvent('character:updated', { 
                detail: { characterId: this.currentCharacter } 
            });
            document.dispatchEvent(event);
        }
    };
    
    // Initialize all character module components
    initTabNavigation(state);
    initCharacterStats(state);
    initCharacterEquipment(state);
    initCharacterSkills(state);
    initCharacterTooltips();
    initCharacterSelection(state);
    
    // Add styles for character module
    addCharacterStyles();
    
    console.log('Character module initialization complete');
}

// Add CSS styles for character components
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
