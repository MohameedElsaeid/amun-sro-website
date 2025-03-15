
import { initCurrencySelection } from './currency-selection.js';
import { initPackageSelection } from './package-selection.js';
import { initPaymentMethodSelection } from './payment-method-selection.js';
import { initFormSubmission } from './form-submission.js';

/**
 * Initialize the donation form functionality
 */
export function initDonationForm() {
    // Get donation form element
    const donationForm = document.getElementById('donation-form');
    if (!donationForm) return;

    // Initialize form state
    const state = {
        donationForm: donationForm,
        selectedCurrency: 'TL', // Default currency
        selectedPackage: null,
        packageName: null,
        packageBonus: null,
        packagePrice: null,
        selectedPaymentMethod: null
    };

    // Check if we have saved state from a previous session (e.g. after login)
    const savedState = localStorage.getItem('donation_state');
    if (savedState) {
        try {
            const parsedState = JSON.parse(savedState);
            state.selectedPackage = parsedState.selectedPackage;
            state.selectedPaymentMethod = parsedState.selectedPaymentMethod;
            state.selectedCurrency = parsedState.selectedCurrency;

            // Clear the stored state since we've now retrieved it
            localStorage.removeItem('donation_state');

            // Delay to ensure DOM elements are fully loaded
            setTimeout(() => {
                // Re-select the package
                if (state.selectedPackage !== null) {
                    const packageCard = document.querySelector(`.package-card[data-package-id="${state.selectedPackage}"]`);
                    if (packageCard) {
                        const selectButton = packageCard.querySelector('.select-package');
                        if (selectButton) selectButton.click();
                    }
                }

                // Re-select the payment method
                if (state.selectedPaymentMethod !== null) {
                    const paymentMethod = document.querySelector(`.payment-method[data-method="${state.selectedPaymentMethod}"]`);
                    if (paymentMethod) paymentMethod.click();
                }

                // Re-select the currency
                if (state.selectedCurrency) {
                    const currencyButton = document.querySelector(`.currency-btn[data-currency="${state.selectedCurrency}"]`);
                    if (currencyButton) currencyButton.click();
                }
            }, 500);
        } catch (e) {
            console.error('Error restoring donation state:', e);
            localStorage.removeItem('donation_state');
        }
    }

    // Initialize sub-modules
    initCurrencySelection(state);
    initPackageSelection(state);
    initPaymentMethodSelection(state);
    initFormSubmission(state);

    initModalClose();
}

/**
 * Initialize modal close functionality
 */
function initModalClose() {
    // Close payment modal when user clicks the close button
    const paymentModal = document.getElementById('payment-modal');
    const closePaymentModal = document.getElementById('close-payment-modal');

    if (paymentModal && closePaymentModal) {
        closePaymentModal.addEventListener('click', function() {
            paymentModal.classList.add('hidden');
            // Reset iframe src to prevent continued loading
            const iframe = document.getElementById('payment-iframe');
            if (iframe) iframe.src = 'about:blank';
        });
    }

    // Handle login modal close buttons if they exist
    const loginModal = document.getElementById('login-modal');
    const closeLoginModal = document.getElementById('close-login-modal');

    if (loginModal && closeLoginModal) {
        closeLoginModal.addEventListener('click', function() {
            loginModal.classList.add('hidden');
        });
    }
}
