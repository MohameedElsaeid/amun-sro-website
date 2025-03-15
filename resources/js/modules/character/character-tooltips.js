
/**
 * Character equipment tooltips functionality
 */

export function initCharacterTooltips() {
    const equipmentItems = document.querySelectorAll('.equipment-item');
    const achievementIcons = document.querySelectorAll('.achievement-icon');

    // Setup equipment item tooltips
    if (equipmentItems.length > 0) {
        equipmentItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                // Position tooltip based on screen position
                const tooltip = this.querySelector('.item-details');
                if (tooltip) {
                    tooltip.classList.remove('hidden');

                    // Position tooltip to avoid going off-screen
                    positionTooltip(tooltip);
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

    // Setup achievement tooltips
    if (achievementIcons.length > 0) {
        achievementIcons.forEach(icon => {
            const title = icon.getAttribute('title');
            if (title) {
                // Create tooltip element
                const tooltip = document.createElement('div');
                tooltip.className = 'achievement-tooltip hidden absolute z-10 bg-midnight-dark p-2 rounded text-sand text-xs border border-gold/30';
                tooltip.style.bottom = '120%';
                tooltip.style.left = '50%';
                tooltip.style.transform = 'translateX(-50%)';
                tooltip.textContent = title;

                // Add tooltip to icon
                icon.style.position = 'relative';
                icon.appendChild(tooltip);

                // Show tooltip on hover
                icon.addEventListener('mouseenter', function() {
                    tooltip.classList.remove('hidden');
                });

                icon.addEventListener('mouseleave', function() {
                    tooltip.classList.add('hidden');
                });
            }
        });
    }
}

function positionTooltip(tooltip) {
    const rect = tooltip.getBoundingClientRect();
    const viewportHeight = window.innerHeight;
    const viewportWidth = window.innerWidth;

    // Check if tooltip goes below the viewport
    if (rect.bottom > viewportHeight) {
        tooltip.style.top = 'auto';
        tooltip.style.bottom = '100%';
    }

    // Check if tooltip goes beyond the right edge of the viewport
    if (rect.right > viewportWidth) {
        tooltip.style.left = 'auto';
        tooltip.style.right = '0';
    }
}
