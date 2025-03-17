
/**
 * Tab navigation functionality for character page
 */

export function initTabNavigation(state) {
    const tabButtons = document.querySelectorAll('.tab-button');

    if (tabButtons.length === 0) {
        return;
    }

    // Set the first tab as active by default
    tabButtons[0].classList.add('active-tab');
    tabButtons[0].classList.add('text-gold');
    tabButtons[0].classList.remove('text-sand-light');

    // Show the first tab content by default
    const firstTabId = tabButtons[0].getAttribute('data-tab');
    const firstTabContent = document.querySelector(`.tab-content[data-tab="${firstTabId}"]`);
    if (firstTabContent) {
        firstTabContent.classList.remove('hidden');
    }

    // Set up click listeners for all tab buttons
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Update state
            state.selectedTab = this.getAttribute('data-tab');

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
            const tabContents = document.querySelectorAll('.tab-content');

            tabContents.forEach(content => {
                content.classList.add('hidden');
            });

            const activeContent = document.querySelector(`.tab-content[data-tab="${tabId}"]`);
            if (activeContent) {
                activeContent.classList.remove('hidden');
            }

        });
    });
}
