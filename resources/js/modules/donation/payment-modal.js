
/**
 * Payment modal module for donation functionality
 */

export function initPaymentModal() {
    const modal = document.getElementById('payment-modal');
    const closeModalBtn = document.getElementById('close-modal-btn');
    
    if (!modal || !closeModalBtn) return;
    
    closeModalBtn.addEventListener('click', function() {
        modal.classList.add('hidden');
        const iframe = document.getElementById('payment-iframe');
        if (iframe) {
            iframe.src = 'about:blank';
        }
    });
    
    // Close modal when clicking outside of content
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModalBtn.click();
        }
    });
}
