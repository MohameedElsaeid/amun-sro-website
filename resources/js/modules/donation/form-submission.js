
/**
 * Form submission module for donation functionality
 */

export function initFormSubmission(state) {
    const donationForm = state.donationForm;

    if (!donationForm) {
        console.warn('Donation form not found');
        return;
    }

    donationForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Check if user is logged in
        const isLoggedIn = checkUserLoggedIn();

        if (!isLoggedIn) {
            console.log('User not logged in, showing login modal');
            saveCurrentState(state);
            showLoginModal();
            return;
        }

        // Validate form
        if (!validateForm(state)) {
            return;
        }

        // Submit form
        submitDonationForm(state);
    });
}

/**
 * Check if user is logged in
 */
function checkUserLoggedIn() {
    // This needs to be replaced with actual logic based on your authentication system
    return window.userAuthenticated;
}

/**
 * Save current state for after login
 */
function saveCurrentState(state) {
    const stateToSave = {
        currency: state.selectedCurrency,
        packageId: state.selectedPackage,
        paymentMethod: state.selectedPaymentMethod
    };

    localStorage.setItem('donation_state', JSON.stringify(stateToSave));
}

/**
 * Show login modal
 */
function showLoginModal() {
    const loginModal = document.getElementById('login-modal');
    if (loginModal) {
        loginModal.classList.remove('hidden');
    } else {
        // Redirect to login page if no modal exists
        window.location.href = '/login?redirect=donation';
    }
}

/**
 * Validate form before submission
 */
function validateForm(state) {
    let isValid = true;
    let errorMessage = '';

    // Check if package is selected
    if (state.selectedPackage === null) {
        isValid = false;
        errorMessage = 'Please select a package';
    }

    // Check if payment method is selected
    if (state.selectedPaymentMethod === null) {
        isValid = false;
        errorMessage += errorMessage ? '\n' : '';
        errorMessage += 'Please select a payment method';
    }

    // Show error message if validation fails
    if (!isValid) {
        alert(errorMessage);
    }

    return isValid;
}

/**
 * Submit donation form
 */
function submitDonationForm(state) {
    // Show loading state
    const submitButton = document.querySelector('.donation-submit-btn');
    if (submitButton) {
        const originalText = submitButton.innerHTML;
        submitButton.innerHTML = '<svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-midnight-dark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Processing...';
        submitButton.disabled = true;
    }

    // Create form data
    const formData = new FormData();
    formData.append('package_id', state.selectedPackage);
    formData.append('payment_method', state.selectedPaymentMethod);
    formData.append('currency', state.selectedCurrency);
    formData.append('_token', document.querySelector('input[name="_token"]').value);

    // Submit form
    fetch('/donation/process', {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log('Donation processed successfully:', data);

                // Update payment modal with iframe URL
                const paymentIframe = document.getElementById('payment-iframe');
                const paymentModal = document.getElementById('payment-modal');
                const paymentModalTitle = document.getElementById('payment-modal-title');
                const transactionId = document.getElementById('transaction-id');
                const externalPaymentLink = document.getElementById('external-payment-link');

                if (paymentIframe && paymentModal && paymentModalTitle) {
                    paymentIframe.src = data.iframe_url;
                    paymentModalTitle.textContent = data.modal_title || 'Complete Payment';

                    if (transactionId) {
                        transactionId.textContent = data.transaction_id || '-';
                    }

                    if (externalPaymentLink) {
                        externalPaymentLink.href = data.iframe_url;
                    }

                    paymentModal.classList.remove('hidden');
                }
            } else {
                console.error('Error processing donation:', data);
                alert(data.message || 'There was an error processing your donation. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error processing donation:', error);
            alert('There was an error processing your donation. Please try again.');
        })
        .finally(() => {
            // Reset button
            if (submitButton) {
                submitButton.innerHTML = 'Complete Purchase';
                submitButton.disabled = false;
            }
        });
}
