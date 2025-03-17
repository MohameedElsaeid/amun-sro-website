
/**
 * Character skills functionality
 */

export function initCharacterSkills(state) {
    const skillsContainer = document.querySelector('.skills-container');

    if (!skillsContainer) {
        return;
    }

    document.addEventListener('character:updated', function(e) {
        const characterId = e.detail.characterId;
        updateCharacterSkills(characterId);
    });
}

function updateCharacterSkills(characterId) {
    // This would fetch character skills data from an API in a real implementation
    const mockSkills = {
        'char1': [
            {
                id: 's1',
                name: 'Dragon\'s Fury',
                level: 8,
                icon: '7c8740e7-41d7-4bd9-8050-af2f261d732c.png',
                description: 'Unleash a devastating strike that deals 250% weapon damage and applies a burn effect.',
                cooldown: '12s',
                manaCost: 45
            },
            {
                id: 's2',
                name: 'Whirlwind',
                level: 6,
                icon: '2b42bee2-ed9c-402b-b071-2de45bf0394b.png',
                description: 'Spin in a circle, dealing 180% weapon damage to all enemies within 8 yards.',
                cooldown: '8s',
                manaCost: 35
            },
            {
                id: 's3',
                name: 'Titan\'s Endurance',
                level: 4,
                icon: '13bfe58b-10ba-451c-bb7b-740b3c03cbf0.png',
                description: 'Increase your maximum health by 20% and reduce incoming damage by 15% for 12 seconds.',
                cooldown: '60s',
                manaCost: 60
            },
            {
                id: 's4',
                name: 'Crushing Blow',
                level: 5,
                icon: '426e4d3b-6678-4c5b-ad59-2a77c224da22.png',
                description: 'Deliver a powerful blow that deals 220% weapon damage and stuns the target for 2 seconds.',
                cooldown: '15s',
                manaCost: 40
            }
        ],
        'char2': [
            {
                id: 's5',
                name: 'Lightning Storm',
                level: 7,
                icon: '7c8740e7-41d7-4bd9-8050-af2f261d732c.png',
                description: 'Call down lightning strikes that deal 200% weapon damage to enemies in a 10-yard radius.',
                cooldown: '20s',
                manaCost: 55
            },
            {
                id: 's6',
                name: 'Shadow Step',
                level: 5,
                icon: '2b42bee2-ed9c-402b-b071-2de45bf0394b.png',
                description: 'Teleport behind your target and gain 25% increased critical strike chance for 5 seconds.',
                cooldown: '30s',
                manaCost: 45
            },
            {
                id: 's7',
                name: 'Frost Nova',
                level: 6,
                icon: '13bfe58b-10ba-451c-bb7b-740b3c03cbf0.png',
                description: 'Freeze all enemies within 8 yards for 3 seconds and deal 150% weapon damage.',
                cooldown: '25s',
                manaCost: 50
            },
            {
                id: 's8',
                name: 'Battle Shout',
                level: 4,
                icon: '426e4d3b-6678-4c5b-ad59-2a77c224da22.png',
                description: 'Increase attack power by 10% for you and all party members for 30 seconds.',
                cooldown: '45s',
                manaCost: 35
            }
        ]
    };

    // Get the skills for the selected character
    const skills = mockSkills[characterId] || mockSkills['char1'];

    // Get the skills container
    const skillsContainer = document.querySelector('.skills-container');
    if (!skillsContainer) return;

    // Clear existing skills
    skillsContainer.innerHTML = '';

    // Add the skills to the container
    skills.forEach(skill => {
        const skillElement = document.createElement('div');
        skillElement.className = 'bg-midnight-light p-4 rounded-lg border border-gold/10';
        skillElement.innerHTML = `
            <div class="flex justify-between items-center mb-2">
                <div class="flex items-center">
                    <img src="/public/lovable-uploads/${skill.icon}" alt="${skill.name}" class="w-10 h-10 rounded mr-3 object-cover">
                    <p class="font-bold text-gold">${skill.name}</p>
                </div>
                <span class="text-xs text-white bg-gold-dark px-2 py-1 rounded">Level ${skill.level}</span>
            </div>
            <p class="text-sm text-sand-light">${skill.description}</p>
            <div class="mt-2 text-xs text-sand-light">
                <span class="text-gold">Cooldown:</span> ${skill.cooldown} |
                <span class="text-gold">Mana Cost:</span> ${skill.manaCost}
            </div>
        `;

        skillsContainer.appendChild(skillElement);
    });
}
