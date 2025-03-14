import './bootstrap';


import {initMobileMenu} from './modules/mobile-menu.js';
import { initNewsletterForm, initLoginForm, initCareersForm } from './modules/forms.js';
import { initSmoothScrolling } from './modules/navigation.js';
import { initDonationForm } from './modules/donation/index.js';
import { initCharacterModule } from './modules/character.js';




// DOM content loaded event
document.addEventListener('DOMContentLoaded', function() {
    initMobileMenu();
    initNewsletterForm();
    initLoginForm();
    initCareersForm();
    initSmoothScrolling();
    initDonationForm();
    initCharacterModule();

    // // Mobile menu toggle
    // const mobileMenuButton = document.querySelector('.mobile-menu-button');
    // const mobileMenu = document.querySelector('.mobile-menu');
    //
    // if (mobileMenuButton && mobileMenu) {
    //     mobileMenuButton.addEventListener('click', function() {
    //         mobileMenu.classList.toggle('hidden');
    //
    //         // Update aria-expanded attribute for accessibility
    //         const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
    //         mobileMenuButton.setAttribute('aria-expanded', !expanded);
    //     });
    // }
    //
    // // Smooth scrolling for anchor links
    // document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    //     anchor.addEventListener('click', function(e) {
    //         e.preventDefault();
    //
    //         const targetId = this.getAttribute('href');
    //         if (targetId === '#') return;
    //
    //         const targetElement = document.querySelector(targetId);
    //         if (targetElement) {
    //             targetElement.scrollIntoView({
    //                 behavior: 'smooth',
    //                 block: 'start'
    //             });
    //         }
    //     });
    // });
    //
    // // Form submissions with validation
    // const forms = document.querySelectorAll('form');
    // forms.forEach(form => {
    //     form.addEventListener('submit', function(e) {
    //         const requiredFields = form.querySelectorAll('[required]');
    //         let isValid = true;
    //
    //         requiredFields.forEach(field => {
    //             if (!field.value.trim()) {
    //                 isValid = false;
    //                 // Add error styling
    //                 field.classList.add('border-red-500');
    //
    //                 // Create or update error message
    //                 let errorMessage = field.nextElementSibling;
    //                 if (!errorMessage || !errorMessage.classList.contains('error-message')) {
    //                     errorMessage = document.createElement('p');
    //                     errorMessage.classList.add('error-message', 'text-red-500', 'text-sm', 'mt-1');
    //                     field.parentNode.insertBefore(errorMessage, field.nextSibling);
    //                 }
    //                 errorMessage.textContent = 'This field is required';
    //             } else {
    //                 field.classList.remove('border-red-500');
    //                 const errorMessage = field.nextElementSibling;
    //                 if (errorMessage && errorMessage.classList.contains('error-message')) {
    //                     errorMessage.remove();
    //                 }
    //             }
    //         });
    //
    //         if (!isValid) {
    //             e.preventDefault();
    //         }
    //     });
    // });
});

// Add any additional JavaScript functionality here
console.log('App JS loaded successfully!');
