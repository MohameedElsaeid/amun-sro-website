import {showNotification} from './notifications.js';

/**
 * Check if user is authenticated and show login modal if not
 * @returns {boolean} - Returns true if user is authenticated, false otherwise
 */
export function checkUserAuthenticated() {

    // Check if the auth data exists in the window object
    // This will be set in the blade template
    if (!window.userAuthenticated) {
        // Show login modal
        const loginModal = document.getElementById('login-modal');
        if (loginModal) {
            loginModal.classList.remove('hidden');

            // Remember the current state to restore after login
            const currentState = {
                currency: document.querySelector('.currency-option.active')?.dataset.currency,
                packageId: document.querySelector('.package-card.selected')?.dataset.packageId,
                paymentMethod: document.querySelector('.payment-method.selected')?.dataset.methodId,
            };

            // Store current state in sessionStorage
            sessionStorage.setItem('donationState', JSON.stringify(currentState));

            // Show notification
            showNotification('info', 'Please login or register to continue with your purchase.');
            return false;
        } else {
            // If no modal exists, redirect to login page
            window.location.href = '/login';
            return false;
        }
    }

    return true;
}

/**
 * Close the login modal
 */
export function closeLoginModal() {
    const loginModal = document.getElementById('login-modal');
    if (loginModal) {
        loginModal.classList.add('hidden');
    }
}

/**
 * Initialize login modal events
 */
export function initLoginModal() {
    const loginModal = document.getElementById('login-modal');
    if (!loginModal) return;

    // Close button
    const closeBtn = loginModal.querySelector('.close-modal-btn');
    if (closeBtn) {
        closeBtn.addEventListener('click', closeLoginModal);
    }

    // Close when clicking outside modal content
    loginModal.addEventListener('click', (e) => {
        if (e.target === loginModal) {
            closeLoginModal();
        }
    });
}
