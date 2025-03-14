/**
 * Price utilities for donation functionality
 */

export function updateSelectedPrice(packageCard, state) {
    if (!packageCard) return;

    const priceItems = packageCard.querySelectorAll('.price-item');
    let selectedCurrencyPrice = "";

    priceItems.forEach(item => {
        const currencyLabel = item.querySelector('span:first-child')?.textContent || '';
        const priceElement = item.querySelector('span:last-child');

        if (currencyLabel.includes(state.selectedCurrency) && priceElement) {
            selectedCurrencyPrice = priceElement.textContent.trim();
            item.classList.remove('hidden');
        } else {
            item.classList.add('hidden');
        }
    });

    // Update price in the packageCard
    const activePriceDisplay = packageCard.querySelector('.active-price');
    if (activePriceDisplay) {
        activePriceDisplay.textContent = selectedCurrencyPrice;
    }

    // Store the selected price
    state.packagePrice = selectedCurrencyPrice;

    // Update total in both summary areas
    const summaryTotal = document.getElementById('summary-total');
    if (summaryTotal) {
        summaryTotal.textContent = selectedCurrencyPrice;
    }

    const summaryTotalAmount = document.getElementById('summary-total-amount');
    if (summaryTotalAmount) {
        let currencySymbol = '';

        switch (state.selectedCurrency) {
            case 'USD':
            case 'USDT':
                currencySymbol = '$';
                break;
            case 'EUR':
                currencySymbol = '€';
                break;
            case 'TL':
                currencySymbol = '₺';
                break;
            case 'EGP':
                currencySymbol = 'E£';
                break;
            default:
                currencySymbol = state.selectedCurrency + ' ';
        }

        summaryTotalAmount.textContent = currencySymbol + selectedCurrencyPrice;
    }
}
