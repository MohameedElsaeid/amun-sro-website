
/**
 * Cancel button module for donation functionality
 */

export function initCancelButton(state) {
    const cancelBtn = document.querySelector('.cancel-btn');
    if (cancelBtn) {
        cancelBtn.addEventListener('click', function() {
            state.resetForm();
        });
    }
}
