
/**
 * Character statistics display and functionality
 */

export function initCharacterStats(state) {
    const statsContainer = document.querySelector('.character-stats');
    if (!statsContainer) {
        console.log('Character stats container not found');
        return;
    }
    
    console.log('Initializing character stats');
    
    // Initialize elemental resistances with visual indicators
    updateElementalResistances();
    
    // Listen for character updates
    document.addEventListener('character:updated', function(e) {
        const characterId = e.detail.characterId;
        updateCharacterStatsDisplay(characterId);
    });
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

function updateCharacterStatsDisplay(characterId) {
    // This would fetch character data from an API in a real implementation
    const mockCharData = {
        'char1': {
            name: 'MRmody',
            level: 100,
            strength: 416,
            agility: 210,
            intellect: 119,
            vitality: 289,
            hp: 45495,
            mp: 17481,
            guild: 'UnitedBroZ',
            guildLevel: 5,
            race: 'China ch',
            lastLogout: '2025-03-13 02:14',
            itemPoints: 10595,
            attackPower: '1,248 - 1,562',
            defense: 875,
            hitRate: '89%',
            evasion: '32%',
            critRate: '18%',
            critDamage: '+85%',
            attackSpeed: '1.8s',
            movementSpeed: '+15%',
            resistances: {
                fire: '+45%',
                ice: '+22%',
                lightning: '+30%',
                poison: '+18%',
                dark: '+27%'
            }
        },
        'char2': {
            name: 'Bikaaa',
            level: 85,
            strength: 320,
            agility: 175,
            intellect: 95,
            vitality: 230,
            hp: 32000,
            mp: 12000,
            guild: 'ShadowWalkers',
            guildLevel: 4,
            race: 'Europe eu',
            lastLogout: '2025-03-12 18:22',
            itemPoints: 8750,
            attackPower: '980 - 1,210',
            defense: 720,
            hitRate: '84%',
            evasion: '28%',
            critRate: '15%',
            critDamage: '+70%',
            attackSpeed: '1.9s',
            movementSpeed: '+12%',
            resistances: {
                fire: '+35%',
                ice: '+40%',
                lightning: '+20%',
                poison: '+15%',
                dark: '+18%'
            }
        }
    };
    
    // Get the data for the selected character
    const charData = mockCharData[characterId] || mockCharData['char1'];
    
    // Update primary stats
    document.querySelector('.char-strength').textContent = charData.strength;
    document.querySelector('.char-agility').textContent = charData.agility;
    document.querySelector('.char-intellect').textContent = charData.intellect;
    document.querySelector('.char-vitality').textContent = charData.vitality;
    
    // Update combat stats
    document.querySelector('.char-attack-power').textContent = charData.attackPower;
    document.querySelector('.char-defense').textContent = charData.defense;
    document.querySelector('.char-hit-rate').textContent = charData.hitRate;
    document.querySelector('.char-evasion').textContent = charData.evasion;
    document.querySelector('.char-crit-rate').textContent = charData.critRate;
    document.querySelector('.char-crit-damage').textContent = charData.critDamage;
    document.querySelector('.char-attack-speed').textContent = charData.attackSpeed;
    document.querySelector('.char-movement-speed').textContent = charData.movementSpeed;
    
    // Update resistances
    const resistances = document.querySelectorAll('.resistance-element');
    resistances.forEach(element => {
        const type = element.getAttribute('data-resistance');
        if (type && charData.resistances[type]) {
            element.textContent = charData.resistances[type];
            
            // Clear existing color classes
            element.classList.remove('text-green-500', 'text-yellow-400', 'text-red-400');
            
            // Add appropriate color class
            const value = parseInt(charData.resistances[type].replace('%', '').replace('+', ''));
            if (value >= 40) {
                element.classList.add('text-green-500');
            } else if (value >= 20) {
                element.classList.add('text-yellow-400');
            } else {
                element.classList.add('text-red-400');
            }
        }
    });
}
