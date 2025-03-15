/**
 * Currency selection module for donation functionality
 */

export function initCurrencySelection(state) {
    const currencyOptions = document.querySelectorAll('.currency-option');

    // Set default currency active
    const defaultCurrency = document.querySelector(`.currency-option[data-currency="${state.selectedCurrency}"]`);
    if (defaultCurrency) {
        defaultCurrency.classList.add('active', 'bg-gold', 'text-midnight-dark');
        defaultCurrency.classList.remove('bg-midnight-light/10', 'text-midnight');
    }

    currencyOptions.forEach(option => {
        option.addEventListener('click', function () {
            const currency = this.getAttribute('data-currency');

            // Update state
            state.selectedCurrency = currency;

            // Update UI
            currencyOptions.forEach(opt => {
                opt.classList.remove('active', 'bg-gold', 'text-midnight-dark');
                opt.classList.add('bg-midnight-light/10', 'text-midnight');
            });

            this.classList.add('active', 'bg-gold', 'text-midnight-dark');
            this.classList.remove('bg-midnight-light/10', 'text-midnight');

            // Update summary currency
            const summaryCurrency = document.getElementById('summary-currency');
            if (summaryCurrency) {
                summaryCurrency.textContent = currency;
            }

            // Reset package selection
            if (state.selectedPackage !== null) {
                const selectedPackageCard = document.querySelector('.package-card.selected');
                if (selectedPackageCard) {
                    selectedPackageCard.querySelector('.select-package').click();
                }
            }
        });
    });
}
