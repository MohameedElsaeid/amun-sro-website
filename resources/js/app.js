import './bootstrap';

// DOM content loaded event
document.addEventListener('DOMContentLoaded', function () {
    // Mobile menu toggle
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');

            // Update aria-expanded attribute for accessibility
            const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
            mobileMenuButton.setAttribute('aria-expanded', !expanded);
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Form submissions with validation
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function (e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    // Add error styling
                    field.classList.add('border-red-500');

                    // Create or update error message
                    let errorMessage = field.nextElementSibling;
                    if (!errorMessage || !errorMessage.classList.contains('error-message')) {
                        errorMessage = document.createElement('p');
                        errorMessage.classList.add('error-message', 'text-red-500', 'text-sm', 'mt-1');
                        field.parentNode.insertBefore(errorMessage, field.nextSibling);
                    }
                    errorMessage.textContent = 'This field is required';
                } else {
                    field.classList.remove('border-red-500');
                    const errorMessage = field.nextElementSibling;
                    if (errorMessage && errorMessage.classList.contains('error-message')) {
                        errorMessage.remove();
                    }
                }
            });

            if (!isValid) {
                e.preventDefault();
            }
        });
    });
});

document.getElementById('mobile-menu-button').addEventListener('click', () => {
    console.log('asd')
    document.getElementById('mobile-menu')?.classList.toggle('hidden');
});

window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}

gtag('js', new Date());
gtag('config', 'G-1DDLY8K3BF');
(function (w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start':
            new Date().getTime(), event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-PVZ3ZTR6');


// Initial values based on your starting numbers
let currentPlayers = 1116;
const maxPlayers = 5000;
let currentSupporters = 11;
const maxSupporters = 11;

function updateCounters() {
    // For players, adjust by a small delta between -10 and +10
    const playerDelta = Math.floor(Math.random() * 21) - 10; // Random number in [-10, +10]
    currentPlayers += playerDelta;
    // Clamp the value between 0 and maxPlayers
    currentPlayers = Math.max(0, Math.min(currentPlayers, maxPlayers));

    // For supporters, adjust by -1, 0, or +1
    const supporterDelta = Math.floor(Math.random() * 3) - 1;
    currentSupporters += supporterDelta;
    // Clamp the value between 0 and maxSupporters
    currentSupporters = Math.max(0, Math.min(currentSupporters, maxSupporters));

    // Update the DOM with the new values
    document.getElementById('playersCounter').textContent = currentPlayers + " / " + maxPlayers;
    document.getElementById('supportersCounter').textContent = currentSupporters + " / " + maxSupporters;
}

// Update every 3 minutes (180000 milliseconds)
setInterval(updateCounters, 180000);

// Optionally, run the function once immediately so the page doesn't start with static numbers.
updateCounters();


