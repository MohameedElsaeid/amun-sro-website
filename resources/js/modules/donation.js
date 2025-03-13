
/**
 * Donation page functionality for ASRO Game website
 */

export function initDonationForm() {
    const donationForm = document.getElementById('donation-form');
    if(!donationForm) return;

    // Package selection
    let selectedPackage = null;
    let packagePrice = 0;
    let packageName = '';
    let packageBonus = '';
    initPackageSelection();
    
    // Payment method selection
    let selectedPaymentMethod = null;
    initPaymentMethodSelection();
    
    // Form submission
    initFormSubmission();

    /**
     * Initialize package selection functionality
     */
    function initPackageSelection() {
        const packageButtons = document.querySelectorAll('.select-package');
        
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
                
                selectedPackage = index;
                
                // Get package details for summary
                const packageCard = this.closest('.package-card');
                packageName = packageCard.querySelector('.silk-amount').textContent;
                packageBonus = packageCard.querySelector('.package-bonus').textContent;
                
                // Update order summary
                document.getElementById('summary-package').textContent = packageName;
                document.getElementById('summary-bonus').textContent = packageBonus;
                
                // Get selected currency price
                const priceItems = packageCard.querySelectorAll('.price-item');
                let selectedCurrencyPrice = "";
                
                // Default to the first price option
                if (priceItems.length > 0) {
                    selectedCurrencyPrice = priceItems[0].querySelector('span:last-child').textContent;
                }
                
                // Update total in summary
                document.getElementById('summary-total').textContent = selectedCurrencyPrice;
                
                // Show the payment section
                const paymentSection = document.querySelector('.payment-section');
                if(paymentSection) {
                    paymentSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Initialize payment method selection
     */
    function initPaymentMethodSelection() {
        const paymentMethods = document.querySelectorAll('.payment-method');
        const paymentDetails = document.getElementById('payment-details');
        
        paymentMethods.forEach((method, index) => {
            method.addEventListener('click', function() {
                // Reset all payment methods
                paymentMethods.forEach(m => {
                    m.classList.remove('border-gold');
                    m.classList.add('border-sand');
                });
                
                // Set selected method
                this.classList.remove('border-sand');
                this.classList.add('border-gold');
                selectedPaymentMethod = index;
                
                // Update payment method in summary
                const paymentName = this.querySelector('.payment-name').textContent;
                document.getElementById('summary-payment').textContent = paymentName;
                
                // Show relevant payment details form
                updatePaymentDetailsForm(index);
                
                // Show payment details section
                paymentDetails.classList.remove('hidden');
                
                // Enable submit button if package is also selected
                const submitBtn = document.querySelector('.donation-submit-btn');
                if(selectedPackage !== null) {
                    submitBtn.removeAttribute('disabled');
                    submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                }
            });
        });
    }

    /**
     * Update payment details form based on selected method
     */
    function updatePaymentDetailsForm(methodIndex) {
        const paymentDetails = document.getElementById('payment-details');
        if (!paymentDetails) return;
        
        let formContent = '';
        
        switch(methodIndex) {
            case 0: // PayPal
                formContent = `
                    <label class="form-label">PayPal Email</label>
                    <input type="email" class="form-input mb-4" placeholder="Enter your PayPal email" required>
                    <p class="text-midnight-light text-sm mb-4">You will be redirected to PayPal to complete your payment.</p>
                `;
                break;
            case 1: // Credit/Debit Cards
                formContent = `
                    <label class="form-label">Card Number</label>
                    <input type="text" class="form-input mb-4" placeholder="XXXX XXXX XXXX XXXX" required>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="form-label">Expiration Date</label>
                            <input type="text" class="form-input" placeholder="MM/YY" required>
                        </div>
                        <div>
                            <label class="form-label">CVV</label>
                            <input type="text" class="form-input" placeholder="123" required>
                        </div>
                    </div>
                    <label class="form-label">Cardholder Name</label>
                    <input type="text" class="form-input mb-4" placeholder="Name on card" required>
                    <p class="text-midnight-light text-sm mb-4">Your card information is securely processed through our payment gateway.</p>
                `;
                break;
            case 2: // Mobile Wallets
                formContent = `
                    <label class="form-label">Mobile Wallet Type</label>
                    <select class="form-input mb-4" required>
                        <option value="">Select wallet type</option>
                        <option value="vodafone">Vodafone Cash</option>
                        <option value="etisalat">Etisalat Cash</option>
                        <option value="orange">Orange Money</option>
                        <option value="we">WE Pay</option>
                    </select>
                    <label class="form-label">Mobile Number</label>
                    <input type="tel" class="form-input mb-4" placeholder="Enter mobile number (Egypt)" required>
                    <p class="text-midnight-light text-sm mb-4">Egyptian mobile wallets only. You will receive payment instructions via SMS.</p>
                `;
                break;
            default:
                formContent = `<p class="text-gold">Please select a payment method to continue</p>`;
        }
        
        paymentDetails.innerHTML = formContent;
    }

    /**
     * Initialize form submission
     */
    function initFormSubmission() {
        donationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if(selectedPackage === null) {
                alert('Please select a Silk package');
                return;
            }
            
            if(selectedPaymentMethod === null) {
                alert('Please select a payment method');
                return;
            }
            
            // In a real application, this would send data to server
            alert('Thank you for your donation! Your transaction is being processed. The Silk will be added to your account soon.');
            
            // Reset form
            resetForm();
        });
    }

    /**
     * Reset the donation form
     */
    function resetForm() {
        donationForm.reset();
        
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
        });
        
        // Reset variables and UI
        selectedPackage = null;
        selectedPaymentMethod = null;
        updatePaymentDetailsForm(-1);
        
        const paymentDetails = document.getElementById('payment-details');
        if (paymentDetails) {
            paymentDetails.classList.add('hidden');
        }
        
        // Reset summary
        document.getElementById('summary-package').textContent = 'Select a package';
        document.getElementById('summary-bonus').textContent = '-';
        document.getElementById('summary-payment').textContent = 'Select payment method';
        document.getElementById('summary-total').textContent = '-';
        
        // Disable submit button
        const submitBtn = document.querySelector('.donation-submit-btn');
        if (submitBtn) {
            submitBtn.setAttribute('disabled', 'disabled');
            submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
        }
    }
}
