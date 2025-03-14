
/**
 * Handles payment method selection in the donation form
 */

export function initPaymentMethodSelection(state) {
    const paymentMethods = document.querySelectorAll('.payment-method');
    const paymentDetails = document.getElementById('payment-details');

    // Payment method details containers
    const paypalDetails = document.getElementById('paypal-details');
    const stripeDetails = document.getElementById('stripe-details');
    const mobileWalletDetails = document.getElementById('mobile-wallet-details');

    // Summary elements
    const summaryPackageName = document.getElementById('summary-package-name');
    const summaryPackageBonus = document.getElementById('summary-package-bonus');
    const summaryPaymentMethod = document.getElementById('summary-payment-method');
    const summaryTotalAmount = document.getElementById('summary-total-amount');

    if (!paymentMethods || !paymentDetails) return;

    paymentMethods.forEach((method, index) => {
        method.addEventListener('click', function() {
            // Remove selection from all methods
            paymentMethods.forEach(m => {
                m.classList.remove('border-gold');
                m.classList.add('border-sand');
                m.classList.remove('bg-gold-light');
            });

            // Add selection to clicked method
            this.classList.add('border-gold');
            this.classList.add('bg-gold-light');
            this.classList.remove('border-sand');

            // Get payment method type
            const paymentMethod = this.dataset.paymentMethod || ['paypal', 'stripe', 'mobile-wallet'][index];
            state.selectedPaymentMethod = index;

            // Show payment details section
            paymentDetails.classList.remove('hidden');

            // Hide all payment method details first
            if (paypalDetails) paypalDetails.classList.add('hidden');
            if (stripeDetails) stripeDetails.classList.add('hidden');
            if (mobileWalletDetails) mobileWalletDetails.classList.add('hidden');

            // Show the appropriate payment method details
            if (index === 0 && paypalDetails) {
                paypalDetails.classList.remove('hidden');
            } else if (index === 1 && stripeDetails) {
                stripeDetails.classList.remove('hidden');
            } else if (index === 2 && mobileWalletDetails) {
                mobileWalletDetails.classList.remove('hidden');
            }

            // Update the summary
            updatePaymentSummary(state, index);

            // Enable submit button
            const submitBtn = document.querySelector('.donation-submit-btn');
            if (submitBtn && state.selectedPackage !== null) {
                submitBtn.removeAttribute('disabled');
                submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
            }
        });
    });

    function updatePaymentSummary(state, paymentMethodIndex) {
        // Update package info in the summary if it exists
        if (state.packageName && summaryPackageName) {
            summaryPackageName.textContent = state.packageName;
        }

        if (state.packageBonus && summaryPackageBonus) {
            summaryPackageBonus.textContent = state.packageBonus;
        }

        // Update payment method in the summary
        if (summaryPaymentMethod) {
            let paymentMethodText = '';

            switch(paymentMethodIndex) {
                case 0:
                    paymentMethodText = 'PayPal';
                    break;
                case 1:
                    paymentMethodText = 'Credit Card (Stripe)';
                    break;
                case 2:
                    paymentMethodText = 'Mobile Wallet Egypt';
                    break;
                default:
                    paymentMethodText = 'Unknown';
            }

            summaryPaymentMethod.textContent = paymentMethodText;
        }

        // Update total amount in the summary
        if (summaryTotalAmount && state.packagePrice) {
            let currencySymbol = '';

            switch(state.selectedCurrency) {
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

            summaryTotalAmount.textContent = currencySymbol + state.packagePrice;
        }
    }
}
