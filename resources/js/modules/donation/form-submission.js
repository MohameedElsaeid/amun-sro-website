import {checkUserAuthenticated} from '../auth-check.js';
import {showNotification} from '../notifications.js';

/**
 * Form submission module for donation functionality
 */
export function initFormSubmission(state) {
    const donationForm = state.donationForm;

    if (!donationForm) return;

    donationForm.addEventListener('submit', function (e) {
        e.preventDefault();

        // Check if user is authenticated
        if (!checkUserAuthenticated()) {
            // Show login modal if it exists
            const loginModal = document.getElementById('login-modal');
            if (loginModal) {
                loginModal.classList.remove('hidden');

                // Store the form state in localStorage to maintain after login
                localStorage.setItem('donation_state', JSON.stringify({
                    selectedPackage: state.selectedPackage,
                    selectedPaymentMethod: state.selectedPaymentMethod,
                    selectedCurrency: state.selectedCurrency
                }));

                // Early return - user needs to log in first
                return;
            } else {
                showNotification('error', 'Please log in to continue with your donation');
                return;
            }
        }

        if (state.selectedPackage === null) {
            showNotification('error', 'Please select a Silk package');
            return;
        }

        if (state.selectedPaymentMethod === null) {
            showNotification('error', 'Please select a payment method');
            return;
        }

        // Create form data for submission
        const formData = new FormData();
        formData.append('package_id', state.selectedPackage);
        formData.append('payment_method', state.selectedPaymentMethod);
        formData.append('currency', state.selectedCurrency);
        formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

        // Show loading state
        const submitBtn = donationForm.querySelector('.donation-submit-btn');
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="mdi mdi-loading mdi-spin"></i> Processing...';
        submitBtn.disabled = true;

        // Submit the form via AJAX
        fetch('/donation/process', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            credentials: 'same-origin'
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Payment processing failed');
                }
                return response.json();
            })
            .then(data => {
                // Reset button state
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;

                if (data.success && data.iframe_url) {
                    // Show payment processing modal with appropriate iframe
                    const modal = document.getElementById('payment-modal');
                    const iframe = document.getElementById('payment-iframe');
                    const modalTitle = document.getElementById('modal-title');

                    if (modal && iframe && modalTitle) {
                        // Set iframe source based on payment method
                        iframe.src = data.iframe_url;
                        modalTitle.textContent = data.modal_title || "Complete Payment";

                        // Show modal
                        modal.classList.remove('hidden');
                    } else {
                        // Fallback if modal elements don't exist
                        showNotification('success', 'Thank you for your purchase! Redirecting to payment gateway...');
                        window.location.href = data.iframe_url;
                    }
                } else {
                    showNotification('error', data.message || 'An error occurred during payment processing');
                }
            })
            .catch(error => {
                // Reset button state
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;

                showNotification('error', error.message || 'An error occurred during payment processing');
            });
    });
}
