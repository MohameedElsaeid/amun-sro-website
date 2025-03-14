
/**
 * Currency selection module for donation functionality
 */

import { updateSelectedPrice } from './price-utils.js';

export function initCurrencySelection(state) {
    const currencyButtons = document.querySelectorAll('.currency-option');
    
    currencyButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Reset all buttons
            currencyButtons.forEach(btn => {
                btn.classList.remove('bg-gold');
                btn.classList.remove('text-midnight-dark');
                btn.classList.add('bg-midnight-light/10');
                btn.classList.add('text-midnight');
            });
            
            // Set selected button
            this.classList.remove('bg-midnight-light/10');
            this.classList.remove('text-midnight');
            this.classList.add('bg-gold');
            this.classList.add('text-midnight-dark');
            
            // Update selected currency
            state.selectedCurrency = this.dataset.currency;
            
            // Update prices for all packages
            const packageCards = document.querySelectorAll('.package-card');
            packageCards.forEach(card => {
                if (state.selectedPackage !== null && card === packageCards[state.selectedPackage]) {
                    updateSelectedPrice(card, state);
                }
            });
        });
    });
    
    // Set default currency
    const defaultCurrency = document.querySelector('.currency-option[data-currency="TL"]');
    if (defaultCurrency) {
        defaultCurrency.click();
    }
}
