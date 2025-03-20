
/**
 * Payment handling module for the donation system
 */

export function initPaymentHandling() {
    // DOM elements
    const paymentForm = document.getElementById('payment-form');
    
    if (!paymentForm) return;
    
    const paymentMethodOptions = document.querySelectorAll('.payment-method-option');
    const selectedPaymentMethodInput = document.getElementById('selected-payment-method');
    const submitButton = document.getElementById('submit-payment');
    const paymentModal = document.getElementById('payment-modal');
    const closePaymentModal = document.getElementById('close-payment-modal');
    const paymentIframe = document.getElementById('payment-iframe');
    const paymentModalTitle = document.getElementById('payment-modal-title');
    const transactionIdDisplay = document.getElementById('transaction-id');
    const externalPaymentLink = document.getElementById('external-payment-link');
    
    // Payment method selection
    paymentMethodOptions.forEach(option => {
        option.addEventListener('click', function() {
            const methodId = this.getAttribute('data-method-id');
            
            // Update UI
            paymentMethodOptions.forEach(opt => {
                opt.classList.remove('border-gold', 'bg-gold-light/20');
                const radioInner = opt.querySelector('.payment-radio-inner');
                if (radioInner) radioInner.classList.add('hidden');
            });
            
            this.classList.add('border-gold', 'bg-gold-light/20');
            const radioInner = this.querySelector('.payment-radio-inner');
            if (radioInner) radioInner.classList.remove('hidden');
            
            // Update form value
            if (selectedPaymentMethodInput) {
                selectedPaymentMethodInput.value = methodId;
            }
            
            // Enable submit button
            if (submitButton) {
                submitButton.disabled = false;
                submitButton.classList.remove('opacity-50', 'cursor-not-allowed');
            }
        });
    });
    
    // Form submission
    if (paymentForm) {
        paymentForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!selectedPaymentMethodInput || !selectedPaymentMethodInput.value) {
                alert('Please select a payment method');
                return;
            }
            
            // Show loading state
            let originalButtonText = '';
            if (submitButton) {
                originalButtonText = submitButton.innerHTML;
                submitButton.innerHTML = '<svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-midnight-dark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Processing...';
                submitButton.disabled = true;
            }
            
            // Create form data
            const formData = new FormData(paymentForm);
            
            // Get the action URL from the form or use the default
            const actionUrl = paymentForm.getAttribute('action') || '/donate/process';
            
            // Submit form
            fetch(actionUrl, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log('Payment processed successfully:', data);
                    
                    // Update payment modal
                    if (paymentIframe && paymentModal && paymentModalTitle) {
                        paymentIframe.src = data.iframe_url;
                        paymentModalTitle.textContent = data.modal_title || 'Complete Payment';
                        
                        if (transactionIdDisplay) {
                            transactionIdDisplay.textContent = data.transaction_id || '-';
                        }
                        
                        if (externalPaymentLink) {
                            externalPaymentLink.href = data.iframe_url;
                        }
                        
                        paymentModal.classList.remove('hidden');
                    }
                } else {
                    console.error('Error processing payment:', data);
                    
                    if (data.redirect) {
                        window.location.href = data.redirect;
                        return;
                    }
                    
                    alert(data.message || 'There was an error processing your payment. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error processing payment:', error);
                alert('There was an error processing your payment. Please try again.');
            })
            .finally(() => {
                // Reset button
                if (submitButton) {
                    submitButton.innerHTML = originalButtonText;
                    submitButton.disabled = false;
                }
            });
        });
    }
    
    // Close payment modal
    if (closePaymentModal && paymentModal) {
        closePaymentModal.addEventListener('click', function() {
            paymentModal.classList.add('hidden');
            if (paymentIframe) {
                paymentIframe.src = 'about:blank';
            }
        });
    }
}
