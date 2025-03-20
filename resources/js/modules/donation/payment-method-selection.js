
/**
 * Payment method selection module for donation functionality
 */

export function initPaymentMethodSelection(state) {
    const paymentMethods = document.querySelectorAll('.payment-method');
    
    paymentMethods.forEach((method, index) => {
        // Add data attribute for method ID
        method.setAttribute('data-method-id', index);
        
        method.addEventListener('click', function() {
            // Update state
            state.selectedPaymentMethod = index;
            
            // Update UI
            paymentMethods.forEach(pm => {
                pm.classList.remove('selected');
                pm.style.borderColor = '';
            });
            
            method.classList.add('selected');
            method.style.borderColor = '#D5A021'; // Gold color
            
            // Update summary
            updatePaymentSummary(state, method);
            
            // Check if we can enable the submit button
            checkSubmitButton(state);
        });
    });
}

/**
 * Update the payment summary with selected payment method
 */
function updatePaymentSummary(state, selectedMethod) {
    const summaryPayment = document.getElementById('summary-payment');
    
    if (summaryPayment) {
        const methodName = selectedMethod.querySelector('.payment-name').textContent;
        summaryPayment.textContent = methodName || 'Select payment method';
    }
}

/**
 * Check if submit button can be enabled
 */
function checkSubmitButton(state) {
    const submitBtn = document.querySelector('.donation-submit-btn');
    if (!submitBtn) return;
    
    if (state.selectedPackage !== null && state.selectedPaymentMethod !== null) {
        submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
        submitBtn.disabled = false;
    } else {
        submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
        submitBtn.disabled = true;
    }
}
