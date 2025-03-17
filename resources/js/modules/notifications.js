/**
 * Notification system for displaying messages to users
 */

export function initNotifications() {
    // Check for flash messages from server
    const flashMessages = window.flashMessages || {};

    // Display any flash messages that were set during page load
    if (flashMessages.success) showNotification('success', flashMessages.success);
    if (flashMessages.error) showNotification('error', flashMessages.error);
    if (flashMessages.warning) showNotification('warning', flashMessages.warning);
    if (flashMessages.info) showNotification('info', flashMessages.info);
}

/**
 * Show a notification message
 * @param {string} type - The type of notification: 'success', 'error', 'warning', or 'info'
 * @param {string} message - The message to display
 * @param {number} [duration=5000] - How long to display the notification in milliseconds
 */
export function showNotification(type, message, duration = 5000) {
    const container = document.getElementById('notification-container');
    if (!container) return;

    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification notification-${type} animated fadeInRight`;

    // Icons based on notification type
    let icon;
    switch (type) {
        case 'success':
            icon = 'mdi mdi-check-circle';
            break;
        case 'error':
            icon = 'mdi mdi-alert-circle';
            break;
        case 'warning':
            icon = 'mdi mdi-alert';
            break;
        case 'info':
        default:
            icon = 'mdi mdi-information';
            break;
    }

    // Set notification content
    notification.innerHTML = `
        <div class="notification-content">
            <i class="${icon}"></i>
            <div class="notification-message">${message}</div>
        </div>
        <button class="btn-close" aria-label="Close notification">
            <i class="mdi mdi-close"></i>
        </button>
    `;

    // Add to container
    container.appendChild(notification);

    // Set up close button
    const closeBtn = notification.querySelector('.btn-close');
    closeBtn.addEventListener('click', () => removeNotification(notification));

    // Auto remove after duration
    setTimeout(() => removeNotification(notification), duration);
}

/**
 * Remove a notification with animation
 * @param {HTMLElement} notification - The notification element to remove
 */
function removeNotification(notification) {
    // Skip if already being removed
    if (notification.classList.contains('fadeOutRight')) return;

    // Add fadeout animation
    notification.classList.remove('fadeInRight');
    notification.classList.add('fadeOutRight');

    // Remove from DOM after animation completes
    setTimeout(() => {
        if (notification.parentNode) {
            notification.parentNode.removeChild(notification);
        }
    }, 300);
}
