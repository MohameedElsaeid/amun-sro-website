
/**
 * Currency selection module for donation functionality
 */

export function initCurrencySelection(state) {
    const currencyButtons = document.querySelectorAll('.currency-option');
    
    // Set default currency active
    const defaultCurrency = document.querySelector(`.currency-option[data-currency="${state.selectedCurrency}"]`);
    if (defaultCurrency) {
        defaultCurrency.classList.add('active', 'bg-gold', 'text-midnight-dark');
        defaultCurrency.classList.remove('bg-midnight-light/10', 'text-midnight');
        
        // Show prices for default currency
        showPricesForCurrency(state.selectedCurrency);
    }
    
    currencyButtons.forEach(button => {
        button.addEventListener('click', function() {
            const currency = this.getAttribute('data-currency');
            
            // Update state
            state.selectedCurrency = currency;
            
            // Update UI
            currencyButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-gold', 'text-midnight-dark');
                btn.classList.add('bg-midnight-light/10', 'text-midnight');
            });
            
            this.classList.add('active', 'bg-gold', 'text-midnight-dark');
            this.classList.remove('bg-midnight-light/10', 'text-midnight');
            
            // Update summary currency
            const summaryCurrency = document.getElementById('summary-currency');
            if (summaryCurrency) {
                summaryCurrency.textContent = currency;
            }
            
            // Show prices for selected currency
            showPricesForCurrency(currency);
            
            console.log('Currency selected:', currency);
            
            // If a package is already selected, update the price display
            if (state.selectedPackage !== null) {
                const packageCard = document.querySelector(`.package-card[data-package-id="${state.selectedPackage}"]`);
                if (packageCard) {
                    const priceItems = packageCard.querySelectorAll('.price-item');
                    priceItems.forEach(item => {
                        if (item.getAttribute('data-currency') === currency) {
                            state.packagePrice = item.querySelector('span:last-child').textContent;
                            
                            // Update summary
                            const summaryTotal = document.getElementById('summary-total');
                            if (summaryTotal) {
                                summaryTotal.textContent = state.packagePrice;
                            }
                        }
                    });
                }
            }
        });
    });
    
    /**
     * Show prices for selected currency and hide others
     */
    function showPricesForCurrency(currency) {
        // Show all price lists
        document.querySelectorAll('.price-list').forEach(list => {
            list.classList.remove('hidden');
        });
        
        // Hide select currency messages
        document.querySelectorAll('.select-currency-message').forEach(message => {
            message.classList.add('hidden');
        });
        
        // Show only the price items for the selected currency
        document.querySelectorAll('.price-item').forEach(item => {
            if (item.getAttribute('data-currency') === currency) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    }
}
