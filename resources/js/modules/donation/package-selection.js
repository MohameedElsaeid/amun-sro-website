/**
 * Package selection module for donation functionality
 */

export function initPackageSelection(state) {
    const packageCards = document.querySelectorAll('.package-card');

    packageCards.forEach((card, index) => {
        // Add data attribute for package ID
        card.setAttribute('data-package-id', index);

        const selectButton = card.querySelector('.select-package');
        if (!selectButton) return;

        selectButton.addEventListener('click', function () {
            // Get package information
            const silkAmount = card.querySelector('.silk-amount').textContent;
            const bonusText = card.querySelector('.package-bonus').textContent.trim();

            // Get price based on selected currency - using a more compatible approach
            const priceItems = card.querySelectorAll('.price-item');
            let price = '';

            // Find the price item that matches the selected currency
            priceItems.forEach(item => {
                const currencySpan = item.querySelector('span:first-child');
                if (currencySpan && currencySpan.textContent.includes(state.selectedCurrency)) {
                    price = item.querySelector('span:last-child').textContent;
                }
            });

            // Fallback: look for price by position based on currency
            if (!price) {
                let priceIndex = 0;

                switch (state.selectedCurrency) {
                    case 'TL':
                        priceIndex = 0;
                        break;
                    case 'EGP':
                        priceIndex = 1;
                        break;
                    case 'USDT':
                        priceIndex = 2;
                        break;
                }

                if (priceItems && priceItems.length > priceIndex) {
                    price = priceItems[priceIndex].querySelector('span:last-child').textContent;
                }
            }

            // Update state
            state.selectedPackage = index;
            state.packageName = silkAmount;
            state.packageBonus = bonusText;
            state.packagePrice = price;

            // Update UI
            packageCards.forEach(pc => {
                pc.classList.remove('selected');
                pc.style.borderColor = '';
            });

            card.classList.add('selected');
            card.style.borderColor = '#D5A021'; // Gold color

            // Update summary
            updateOrderSummary(state);

            // Check if we can enable the submit button
            checkSubmitButton(state);
        });
    });
}

/**
 * Update the order summary with selected package information
 */
function updateOrderSummary(state) {
    const summaryPackage = document.getElementById('summary-package');
    const summaryBonus = document.getElementById('summary-bonus');
    const summaryTotal = document.getElementById('summary-total');
    const summaryCurrency = document.getElementById('summary-currency');

    if (summaryPackage) {
        summaryPackage.textContent = state.packageName || 'Select a package';
    }

    if (summaryBonus) {
        summaryBonus.textContent = state.packageBonus || '-';
    }

    if (summaryTotal) {
        summaryTotal.textContent = state.packagePrice || '-';
    }

    if (summaryCurrency) {
        summaryCurrency.textContent = state.selectedCurrency;
    }
}

/**
 * Check if submit button can be enabled
 */
function checkSubmitButton(state) {
    const submitBtn = document.querySelector('.donation-submit-btn');
    if (!submitBtn) return;

    if (state.selectedPackage !== null && state.selectedPaymentMethod !== null) {
        submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
        submitBtn.disabled = false;
    } else {
        submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
        submitBtn.disabled = true;
    }
}
