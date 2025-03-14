
/**
 * Main donation module that coordinates all donation functionality
 */

import { initPackageSelection } from './package-selection.js';
import { initPaymentMethodSelection } from './payment-method-selection.js';
import { initCurrencySelection } from './currency-selection.js';
import { initFormSubmission } from './form-submission.js';
import { initCancelButton } from './cancel-button.js';
import { initPaymentModal } from './payment-modal.js';
import { resetForm } from './form-utils.js';

export function initDonationForm() {
    console.log('Initializing donation form...');
    const donationForm = document.getElementById('donation-form');
    if(!donationForm) {
        console.log('Donation form not found');
        return;
    }

    console.log('Donation form found, setting up state...');

    // Create state object to share between modules
    const state = {
        donationForm,
        selectedPackage: null,
        packagePrice: '',
        packageName: '',
        packageBonus: '',
        selectedCurrency: 'TL', // Default currency
        selectedPaymentMethod: null,
        resetForm: function() {
            resetForm(this);
        }
    };

    console.log('Initializing donation modules...');

    // Initialize all modules
    initPackageSelection(state);
    initPaymentMethodSelection(state);
    initCurrencySelection(state);
    initFormSubmission(state);
    initCancelButton(state);
    initPaymentModal();

    console.log('Donation form initialization complete');
}
