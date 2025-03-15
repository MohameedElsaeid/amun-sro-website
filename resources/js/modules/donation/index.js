
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
    const donationForm = document.getElementById('donation-form');
    if(!donationForm) {
        return;
    }

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
    initPackageSelection(state);
    initPaymentMethodSelection(state);
    initCurrencySelection(state);
    initFormSubmission(state);
    initCancelButton(state);
    initPaymentModal();
}
