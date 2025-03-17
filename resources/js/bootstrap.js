import 'bootstrap';

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
import axios from 'axios';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ?? `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
// Main JavaScript file for ASRO Game website

// document.addEventListener('DOMContentLoaded', function () {
//     // Mobile menu toggle
//     const mobileMenuButton = document.getElementById('mobile-menu-button');
//     const mobileMenu = document.getElementById('mobile-menu');
//
//     if (mobileMenuButton && mobileMenu) {
//         mobileMenuButton.addEventListener('click', () => {
//             mobileMenu.classList.toggle('hidden');
//         });
//     }
//
//     // Newsletter form submission
//     const newsletterForm = document.querySelector('.newsletter-form');
//     if (newsletterForm) {
//         newsletterForm.addEventListener('submit', function (e) {
//             e.preventDefault();
//             const emailInput = this.querySelector('input[type="email"]');
//             if (emailInput && emailInput.value) {
//                 alert('Thank you for subscribing to our newsletter!');
//                 emailInput.value = '';
//             } else {
//                 alert('Please enter a valid email address.');
//             }
//         });
//     }
//
//     // Login form submission
//     const loginForm = document.querySelector('form.login-form');
//     if (loginForm) {
//         loginForm.addEventListener('submit', function (e) {
//             e.preventDefault();
//             const username = document.getElementById('username').value;
//             const password = document.getElementById('password').value;
//
//             if (username && password) {
//                 alert('Login functionality would connect to server here.');
//                 // In a real application, this would send data to server
//             } else {
//                 alert('Please enter both username and password.');
//             }
//         });
//     }
//
//     // Donation page functionality
//     const donationForm = document.getElementById('donation-form');
//     if (donationForm) {
//         // Package selection
//         const packageButtons = document.querySelectorAll('.select-package');
//         let selectedPackage = null;
//
//         packageButtons.forEach((button, index) => {
//             button.addEventListener('click', function () {
//                 // Reset all buttons
//                 packageButtons.forEach(btn => {
//                     btn.textContent = 'Select Package';
//                     btn.style.backgroundColor = '';
//                 });
//
//                 // Set selected button
//                 this.textContent = 'Selected ✓';
//                 this.style.backgroundColor = '#f5d77f';
//                 selectedPackage = index;
//
//                 // Scroll to payment methods
//                 document.querySelector('.payment-section').scrollIntoView({
//                     behavior: 'smooth'
//                 });
//             });
//         });
//
//         // Payment method selection
//         const paymentMethods = document.querySelectorAll('.payment-method');
//         const paymentDetails = document.getElementById('payment-details');
//         let selectedPaymentMethod = null;
//
//         paymentMethods.forEach((method, index) => {
//             method.addEventListener('click', function () {
//                 // Reset all payment methods
//                 paymentMethods.forEach(m => {
//                     m.classList.remove('selected');
//                 });
//
//                 // Set selected method
//                 this.classList.add('selected');
//                 selectedPaymentMethod = index;
//
//                 // Show relevant payment details form
//                 updatePaymentDetailsForm(index);
//             });
//         });
//
//         // Update payment details form based on selected method
//         function updatePaymentDetailsForm(methodIndex) {
//             let formContent = '';
//
//             switch (methodIndex) {
//                 case 0: // Binance
//                     formContent = `
//                         <label class="form-label">Binance Email or ID</label>
//                         <input type="text" class="form-input mb-4" placeholder="Enter your Binance email or ID" required>
//                         <p class="text-sand-light text-sm mb-4">After submitting, you will receive USDT payment details.</p>
//                     `;
//                     break;
//                 case 1: // PayPal
//                     formContent = `
//                         <label class="form-label">PayPal Email</label>
//                         <input type="email" class="form-input mb-4" placeholder="Enter your PayPal email" required>
//                         <p class="text-sand-light text-sm mb-4">You will be redirected to PayPal to complete your payment.</p>
//                     `;
//                     break;
//                 case 2: // Mobile Wallets
//                     formContent = `
//                         <label class="form-label">Mobile Wallet Type</label>
//                         <select class="form-input mb-4" required>
//                             <option value="">Select wallet type</option>
//                             <option value="vodafone">Vodafone Cash</option>
//                             <option value="etisalat">Etisalat Cash</option>
//                             <option value="orange">Orange Money</option>
//                             <option value="we">WE Pay</option>
//                         </select>
//                         <label class="form-label">Mobile Number</label>
//                         <input type="tel" class="form-input mb-4" placeholder="Enter mobile number (Egypt)" required>
//                         <p class="text-sand-light text-sm mb-4">Egyptian mobile wallets only. You will receive payment instructions via SMS.</p>
//                     `;
//                     break;
//                 case 3: // Bank Transfer
//                     formContent = `
//                         <p class="text-gold mb-4">Bank Transfer Details:</p>
//                         <div class="bg-midnight-light p-4 mb-4 rounded">
//                             <p class="text-sand-light text-sm mb-2">Bank: Egypt National Bank</p>
//                             <p class="text-sand-light text-sm mb-2">Account Name: ASRO Game</p>
//                             <p class="text-sand-light text-sm mb-2">Account Number: 0123456789</p>
//                             <p class="text-sand-light text-sm mb-2">IBAN: EG012345678901234567890123456</p>
//                         </div>
//                         <label class="form-label">Transfer Reference Number</label>
//                         <input type="text" class="form-input mb-4" placeholder="Enter bank transfer reference" required>
//                         <p class="text-sand-light text-sm mb-4">After making the bank transfer, enter the reference number here.</p>
//                     `;
//                     break;
//                 case 4: // Credit/Debit Cards
//                     formContent = `
//                         <label class="form-label">Card Number</label>
//                         <input type="text" class="form-input mb-4" placeholder="XXXX XXXX XXXX XXXX" required>
//                         <div class="grid grid-cols-2 gap-4 mb-4">
//                             <div>
//                                 <label class="form-label">Expiration Date</label>
//                                 <input type="text" class="form-input" placeholder="MM/YY" required>
//                             </div>
//                             <div>
//                                 <label class="form-label">CVV</label>
//                                 <input type="text" class="form-input" placeholder="123" required>
//                             </div>
//                         </div>
//                         <label class="form-label">Cardholder Name</label>
//                         <input type="text" class="form-input mb-4" placeholder="Name on card" required>
//                         <p class="text-sand-light text-sm mb-4">Your card information is securely processed through our payment gateway.</p>
//                     `;
//                     break;
//                 default:
//                     formContent = `<p class="text-gold">Please select a payment method to continue</p>`;
//             }
//
//             paymentDetails.innerHTML = formContent;
//         }
//
//         // Form submission
//         donationForm.addEventListener('submit', function (e) {
//             e.preventDefault();
//
//             if (selectedPackage === null) {
//                 alert('Please select a Silk package');
//                 return;
//             }
//
//             if (selectedPaymentMethod === null) {
//                 alert('Please select a payment method');
//                 return;
//             }
//
//             // In a real application, this would send data to server
//             alert('Thank you for your donation! Your transaction is being processed. The Silk will be added to your account soon.');
//
//             // Reset form
//             this.reset();
//             packageButtons.forEach(btn => {
//                 btn.textContent = 'Select Package';
//                 btn.style.backgroundColor = '';
//             });
//             paymentMethods.forEach(m => {
//                 m.classList.remove('selected');
//             });
//             selectedPackage = null;
//             selectedPaymentMethod = null;
//             updatePaymentDetailsForm(-1);
//         });
//     }
//
//     // Careers page functionality
//     const careersForm = document.getElementById('careers-form');
//     if (careersForm) {
//         careersForm.addEventListener('submit', function (e) {
//             e.preventDefault();
//
//             // Get form values
//             const position = document.getElementById('position').value;
//             const firstName = document.getElementById('first-name').value;
//             const lastName = document.getElementById('last-name').value;
//             const email = document.getElementById('email').value;
//             const phone = document.getElementById('phone').value;
//             const country = document.getElementById('country').value;
//             const city = document.getElementById('city').value;
//             const address = document.getElementById('address').value;
//             const area = document.getElementById('area').value;
//
//             // Basic validation
//             if (!position || !firstName || !lastName || !email || !phone || !country || !city || !address || !area) {
//                 alert('Please fill in all required fields.');
//                 return;
//             }
//
//             // Email validation
//             const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//             if (!emailRegex.test(email)) {
//                 alert('Please enter a valid email address.');
//                 return;
//             }
//
//             // In a real application, this would send data to server
//             alert('Thank you for your application! We will review your information and contact you soon.');
//
//             // Reset form
//             this.reset();
//         });
//
//         // Anchor link smooth scrolling
//         document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//             anchor.addEventListener('click', function (e) {
//                 e.preventDefault();
//
//                 const targetId = this.getAttribute('href');
//                 if (targetId === '#') return;
//
//                 const target = document.querySelector(targetId);
//                 if (target) {
//                     target.scrollIntoView({
//                         behavior: 'smooth'
//                     });
//                 }
//             });
//         });
//     }
// });
