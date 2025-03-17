
/**
 * Character selection functionality
 */

export function initCharacterSelection(state) {
    const characterSelector = document.querySelector('#character-selector');

    if (!characterSelector) {
        return;
    }

    // Set default character
    state.currentCharacter = characterSelector.value || 'char1';

    // Initialize UI with default character
    updateCharacterDisplay(state.currentCharacter);

    // Set up change listener
    characterSelector.addEventListener('change', function() {
        const selectedCharId = this.value;
        state.updateCharacter(selectedCharId);
        updateCharacterDisplay(selectedCharId);
    });
}

function updateCharacterDisplay(characterId) {
    // This would fetch character data from an API in a real implementation
    const mockCharData = {
        'char1': {
            name: 'MRmody',
            level: 100,
            xpPercent: 75,
            nextLevel: 101,
            guild: 'UnitedBroZ',
            rank: 'Elite',
            reputation: 'Honored',
            pvpRank: 'Commander',
            totalKills: '1,248',
            playtime: '187 hours',
            portrait: '00d20ad0-c6a0-4811-a4cf-50337cbd64b2.png'
        },
        'char2': {
            name: 'Bikaaa',
            level: 85,
            xpPercent: 60,
            nextLevel: 86,
            guild: 'ShadowWalkers',
            rank: 'Veteran',
            reputation: 'Respected',
            pvpRank: 'Sergeant',
            totalKills: '856',
            playtime: '142 hours',
            portrait: '7f1e59dd-2b2a-4e4b-a58a-38e15e614ab4.png'
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

    // Update character portrait
    const portrait = document.querySelector('.character-portrait');
    if (portrait) {
        portrait.src = `/public/lovable-uploads/${charData.portrait}`;
    }

    // Update XP bar
    const xpBar = document.querySelector('.character-xp-bar');
    if (xpBar) {
        xpBar.style.width = `${charData.xpPercent}%`;
    }

    // Update XP text
    const xpText = document.querySelector('.character-xp-text');
    if (xpText) {
        xpText.textContent = `${charData.xpPercent}% to Level ${charData.nextLevel}`;
    }

    // Update character details
    document.querySelector('.char-guild').textContent = charData.guild;
    document.querySelector('.char-rank').textContent = charData.rank;
    document.querySelector('.char-reputation').textContent = charData.reputation;
    document.querySelector('.char-pvp-rank').textContent = charData.pvpRank;
    document.querySelector('.char-total-kills').textContent = charData.totalKills;
    document.querySelector('.char-playtime').textContent = charData.playtime;
}
