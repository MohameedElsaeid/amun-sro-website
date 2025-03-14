
/**
 * Form submission module for donation functionality
 */

export function initFormSubmission(state) {
    state.donationForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if(state.selectedPackage === null) {
            alert('Please select a Silk package');
            return;
        }
        
        if(state.selectedPaymentMethod === null) {
            alert('Please select a payment method');
            return;
        }
        
        // Show payment processing modal with appropriate iframe
        const modal = document.getElementById('payment-modal');
        const iframe = document.getElementById('payment-iframe');
        const modalTitle = document.getElementById('modal-title');
        
        if (modal && iframe && modalTitle) {
            // Set iframe source based on payment method
            // In a real implementation, this would be a URL to the payment provider
            switch(state.selectedPaymentMethod) {
                case 0: // PayPal
                    iframe.src = "https://www.paypal.com/checkout/";
                    modalTitle.textContent = "Complete PayPal Payment";
                    break;
                case 1: // Stripe
                    iframe.src = "https://checkout.stripe.com/";
                    modalTitle.textContent = "Complete Card Payment";
                    break;
                case 2: // Mobile Wallets
                    iframe.src = "https://api.mobilewallet.eg/payment/";
                    modalTitle.textContent = "Complete Mobile Wallet Payment";
                    break;
            }
            
            modal.classList.remove('hidden');
        } else {
            // Fallback if modal elements don't exist
            alert('Thank you for your purchase! Your transaction is being processed. The Silk will be added to your account soon.');
            state.resetForm();
        }
    });
}
