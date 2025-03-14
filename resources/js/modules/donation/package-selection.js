
/**
 * Package selection module for donation functionality
 */

import { updateSelectedPrice } from './price-utils.js';

export function initPackageSelection(state) {
    const packageButtons = document.querySelectorAll('.select-package');
    const packageCards = document.querySelectorAll('.package-card');

    packageButtons.forEach((button, index) => {
        button.addEventListener('click', function() {
            // Reset all buttons
            packageButtons.forEach(btn => {
                btn.textContent = 'Select Package';
                btn.classList.remove('bg-midnight');
                btn.classList.remove('text-gold');
                btn.classList.add('bg-gold');
                btn.classList.add('text-midnight-dark');
            });

            // Set selected button
            this.textContent = 'Selected ✓';
            this.classList.remove('bg-gold');
            this.classList.remove('text-midnight-dark');
            this.classList.add('bg-midnight');
            this.classList.add('text-gold');

            state.selectedPackage = index;

            // Get package details for summary
            const packageCard = this.closest('.package-card');
            const silkAmountElement = packageCard.querySelector('.silk-amount');
            const packageBonusElement = packageCard.querySelector('.package-bonus');

            if (silkAmountElement) {
                state.packageName = silkAmountElement.textContent.trim();
            }

            if (packageBonusElement) {
                state.packageBonus = packageBonusElement.textContent.trim();
            }

            // Update prices based on selected currency
            updateSelectedPrice(packageCard, state);

            // Update summary in main summary section
            const summaryPackage = document.getElementById('summary-package');
            const summaryBonus = document.getElementById('summary-bonus');

            if (summaryPackage) {
                summaryPackage.textContent = state.packageName;
            }

            if (summaryBonus) {
                summaryBonus.textContent = state.packageBonus;
            }

            // Update summary in floating summary (mobile)
            const floatingSummaryPackage = document.getElementById('floating-summary-package');
            const floatingSummaryTotal = document.getElementById('floating-summary-total');

            if (floatingSummaryPackage) {
                floatingSummaryPackage.textContent = state.packageName;
            }

            if (floatingSummaryTotal && state.packagePrice) {
                floatingSummaryTotal.textContent = state.packagePrice;
            }

            // Show the floating summary on mobile
            const floatingSummary = document.querySelector('.floating-summary-container');
            if (floatingSummary && window.innerWidth < 768) {
                floatingSummary.classList.remove('hidden');
            }

            // Enable submit button if payment method is also selected
            const submitBtn = document.querySelector('.donation-submit-btn');
            if (submitBtn && state.selectedPaymentMethod !== null) {
                submitBtn.removeAttribute('disabled');
                submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
            }

            // Scroll to payment section
            const paymentSection = document.querySelector('.payment-section');
            if (paymentSection) {
                paymentSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
}
