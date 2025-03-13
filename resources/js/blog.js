
// Blog JavaScript file

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle for blog
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if(mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            // Toggle aria-expanded for accessibility
            const isExpanded = mobileMenu.classList.contains('hidden') ? 'false' : 'true';
            this.setAttribute('aria-expanded', isExpanded);
            
            // Toggle active state for mobile menu button
            this.classList.toggle('active');
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
                mobileMenuButton.classList.remove('active');
            }
        });
    }
    
    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            if(this.getAttribute('href') !== '#') {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const target = document.querySelector(targetId);
                
                if(target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Close mobile menu if open
                    if(mobileMenu && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        if(mobileMenuButton) {
                            mobileMenuButton.setAttribute('aria-expanded', 'false');
                            mobileMenuButton.classList.remove('active');
                        }
                    }
                }
            }
        });
    });
});
