
// Blog specific JavaScript

document.addEventListener('DOMContentLoaded', function() {
    console.log('Blog JS loaded successfully!');
    
    // Mobile menu toggle for blog
    const blogMobileMenuButton = document.querySelector('.blog-mobile-menu-button');
    const blogMobileMenu = document.querySelector('.blog-mobile-menu');
    
    if (blogMobileMenuButton && blogMobileMenu) {
        blogMobileMenuButton.addEventListener('click', function() {
            blogMobileMenu.classList.toggle('hidden');
            
            // Update aria-expanded attribute for accessibility
            const expanded = blogMobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
            blogMobileMenuButton.setAttribute('aria-expanded', !expanded);
        });
    }
    
    // Search functionality
    const searchForm = document.querySelector('.search-form');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const searchInput = this.querySelector('.search-input');
            if (searchInput && searchInput.value.trim()) {
                console.log('Search query:', searchInput.value.trim());
                // Here you would typically redirect to search results or fetch results via AJAX
                // For now, we'll just log the search term
                alert('Searching for: ' + searchInput.value.trim());
            }
        });
    }
    
    // Newsletter sign-up validation
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('.newsletter-input');
            if (emailInput && emailInput.value.trim()) {
                if (isValidEmail(emailInput.value.trim())) {
                    console.log('Newsletter sign-up:', emailInput.value.trim());
                    alert('Thank you for subscribing to our newsletter!');
                    this.reset();
                } else {
                    alert('Please enter a valid email address.');
                }
            }
        });
    }
    
    // Email validation helper function
    function isValidEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }
    
    // Initialize any other blog-specific functionality here
});
