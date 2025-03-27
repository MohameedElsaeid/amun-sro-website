/**
 * Initialize character selection
 */
export function initCharacterSelection() {
    const selector = document.getElementById('character-selector');
    
    if (!selector) return;

    // Initialize with first character
    updateCharacter(selector.options[selector.selectedIndex].dataset);

    // Update when selection changes
    selector.addEventListener('change', () => {
        const selectedChar = selector.options[selector.selectedIndex].dataset;
        updateCharacter(selectedChar);
    });
}

/**
 * Update DOM with character data
 */
function updateCharacter(charData) {
    // Update basic fields
    document.getElementById('char-name').textContent = charData.name || 'Unknown';
    document.getElementById('char-level').textContent = charData.level || '0';
    document.getElementById('char-guild').textContent = charData.guild || 'No Guild';
    document.getElementById('strength').textContent = charData.strength || '0';
    document.getElementById('intellect').textContent = charData.intellect || '0';

    // Update portrait with error handling
    const portrait = document.getElementById('char-portrait');
    // if (portrait) {
    //     portrait.src = `/public/lovable-uploads/${charData.image || 'default.png'}`;
    //     portrait.onerror = () => {
    //         portrait.src = '/public/lovable-uploads/default.png';
    //     };
    // }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', initCharacterSelection);