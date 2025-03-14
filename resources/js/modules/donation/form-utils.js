
/**
 * Form utilities for donation functionality
 */

export function resetForm(state) {
    // Reset package buttons
    const packageButtons = document.querySelectorAll('.select-package');
    packageButtons.forEach(btn => {
        btn.textContent = 'Select Package';
        btn.classList.remove('bg-midnight');
        btn.classList.remove('text-gold');
        btn.classList.add('bg-gold');
        btn.classList.add('text-midnight-dark');
    });

    // Reset payment methods
    const paymentMethods = document.querySelectorAll('.payment-method');
    paymentMethods.forEach(m => {
        m.classList.remove('border-gold');
        m.classList.add('border-sand');
        m.classList.remove('bg-gold-light');
    });

    // Reset variables
    state.selectedPackage = null;
    state.selectedPaymentMethod = null;
    state.packageName = '';
    state.packageBonus = '';
    state.packagePrice = '';

    // Hide payment details
    const paymentDetails = document.getElementById('payment-details');
    if (paymentDetails) {
        paymentDetails.classList.add('hidden');
    }

    // Reset summary in main form
    const summaryPackage = document.getElementById('summary-package');
    const summaryBonus = document.getElementById('summary-bonus');
    const summaryPayment = document.getElementById('summary-payment');
    const summaryTotal = document.getElementById('summary-total');

    if (summaryPackage) summaryPackage.textContent = 'Select a package';
    if (summaryBonus) summaryBonus.textContent = '-';
    if (summaryPayment) summaryPayment.textContent = 'Select payment method';
    if (summaryTotal) summaryTotal.textContent = '-';

    // Reset detailed summary
    const summaryPackageName = document.getElementById('summary-package-name');
    const summaryPackageBonus = document.getElementById('summary-package-bonus');
    const summaryPaymentMethod = document.getElementById('summary-payment-method');
    const summaryTotalAmount = document.getElementById('summary-total-amount');

    if (summaryPackageName) summaryPackageName.textContent = '-';
    if (summaryPackageBonus) summaryPackageBonus.textContent = '-';
    if (summaryPaymentMethod) summaryPaymentMethod.textContent = '-';
    if (summaryTotalAmount) summaryTotalAmount.textContent = '-';

    // Hide floating summary on mobile
    const floatingSummary = document.querySelector('.floating-summary-container');
    if (floatingSummary) {
        floatingSummary.classList.add('hidden');
    }

    // Disable submit button
    const submitBtn = document.querySelector('.donation-submit-btn');
    if (submitBtn) {
        submitBtn.setAttribute('disabled', 'disabled');
        submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
    }

    // Reset the form itself
    if (state.donationForm) {
        state.donationForm.reset();
    }
}
