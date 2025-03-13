
/**
 * Form handling functionality for ASRO Game website
 */

export function initNewsletterForm() {
    const newsletterForm = document.querySelector('.newsletter-form');
    if(newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('input[type="email"]');
            if(emailInput && emailInput.value) {
                alert('Thank you for subscribing to our newsletter!');
                emailInput.value = '';
            } else {
                alert('Please enter a valid email address.');
            }
        });
    }
}

export function initLoginForm() {
    const loginForm = document.querySelector('form.login-form');
    if(loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            if(username && password) {
                alert('Login functionality would connect to server here.');
                // In a real application, this would send data to server
            } else {
                alert('Please enter both username and password.');
            }
        });
    }
}

export function initCareersForm() {
    const careersForm = document.getElementById('careers-form');
    if(careersForm) {
        careersForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const position = document.getElementById('position').value;
            const firstName = document.getElementById('first-name').value;
            const lastName = document.getElementById('last-name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const country = document.getElementById('country').value;
            const city = document.getElementById('city').value;
            const address = document.getElementById('address').value;
            const area = document.getElementById('area').value;
            
            // Basic validation
            if(!position || !firstName || !lastName || !email || !phone || !country || !city || !address || !area) {
                alert('Please fill in all required fields.');
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if(!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }
            
            // In a real application, this would send data to server
            alert('Thank you for your application! We will review your information and contact you soon.');
            
            // Reset form
            this.reset();
        });
    }
}
