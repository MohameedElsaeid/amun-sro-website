
/**
 * Package selection module for donation functionality
 */

export function initPackageSelection(state) {
    const packageCards = document.querySelectorAll('.package-card');
    const paymentContainer = document.getElementById('payment-container');

    packageCards.forEach((card) => {
        const selectButton = card.querySelector('.select-package');

        selectButton.addEventListener('click', function() {
            // Get package information
            const packageId = parseInt(card.getAttribute('data-package-id'));
            const silkAmount = card.querySelector('.silk-amount').textContent;
            const bonusText = card.querySelector('.package-bonus').textContent;

            // Get price based on selected currency
            const priceElement = card.querySelector(`.price-item[data-currency="${state.selectedCurrency}"]`);
            if (!priceElement) {
                console.error('Price element not found for selected currency:', state.selectedCurrency);
                return;
            }

            const price = priceElement.querySelector('span:last-child').textContent;

            // Update state
            state.selectedPackage = packageId;
            state.packageName = silkAmount;
            state.packageBonus = bonusText;
            state.packagePrice = price;

            // Update UI
            packageCards.forEach(p => p.classList.remove('selected'));
            card.classList.add('selected');

            // Update summary
            updatePackageSummary(state);

            // Show payment container
            if (paymentContainer) {
                paymentContainer.classList.remove('hidden');

                // Scroll to payment container
                paymentContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }

            // Check if submit button can be enabled
            checkSubmitButton(state);
        });
    });
}

/**
 * Update the package summary with selected package information
 */
function updatePackageSummary(state) {
    // Update package name
    const summaryPackage = document.getElementById('summary-package');
    if (summaryPackage) {
        summaryPackage.textContent = state.packageName || 'Select a package';
    }

    // Update bonus
    const summaryBonus = document.getElementById('summary-bonus');
    if (summaryBonus) {
        summaryBonus.textContent = state.packageBonus || '-';
    }

    // Update total
    const summaryTotal = document.getElementById('summary-total');
    if (summaryTotal) {
        summaryTotal.textContent = state.packagePrice || '-';
    }

    // Update currency
    const summaryCurrency = document.getElementById('summary-currency');
    if (summaryCurrency) {
        summaryCurrency.textContent = state.selectedCurrency || 'TL';
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
