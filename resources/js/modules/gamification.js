
/**
 * Gamification module to handle points, achievements, and notifications
 */

// Initialize gamification system
export function initGamification() {
    document.addEventListener('gamification-event', handleGamificationEvent);
}

/**
 * Handle gamification events
 * @param {CustomEvent} event - Gamification event with details
 */
function handleGamificationEvent(event) {
    const { action, points, totalPoints } = event.detail;
    awardPoints(action, window.userName || 'user', totalPoints, points);
}

/**
 * Award points and show notification
 * @param {string} action - The action that triggered the points award
 * @param {string} userName - User's name
 * @param {number} totalPoints - Total user points after award
 * @param {number} points - Points awarded for this action
 */
export function awardPoints(action, userName, totalPoints, points = 0) {
    const actionName = getActionName(action);
    const level = Math.floor(totalPoints / 100) + 1;
    showGamificationNotification({
        title: `${getRandomEncouragement()} ${userName}!`,
        message: `You earned ${points} points for ${actionName}`,
        footer: `Total: ${totalPoints} points | Level: ${level}`,
        icon: getActionIcon(action),
        type: 'success'
    });
}

/**
 * Show gamification notification
 * @param {Object} options - Notification options
 */
function showGamificationNotification(options) {
    let container = document.querySelector('.gamification-notifications');
    if (!container) {
        container = document.createElement('div');
        container.className = 'gamification-notifications fixed top-4 right-4 z-50 space-y-2 max-w-sm';
        document.body.appendChild(container);
    }
    const notification = document.createElement('div');
    notification.className = 'bg-midnight-light border border-gold/30 rounded-lg p-4 shadow-lg transform transition-all duration-300 translate-x-full opacity-0';
    notification.innerHTML = `
        <div class="flex items-start">
            <div class="flex-shrink-0 mr-3">
                <div class="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center text-gold">
                    ${options.icon || '🏆'}
                </div>
            </div>
            <div class="flex-1">
                <h3 class="text-gold font-bold text-lg">${options.title}</h3>
                <p class="text-sand-light">${options.message}</p>
                ${options.footer ? `<p class="text-sand-light/70 text-sm mt-1">${options.footer}</p>` : ''}
            </div>
        </div>
    `;
    container.appendChild(notification);
    setTimeout(() => {
        notification.classList.remove('translate-x-full', 'opacity-0');
    }, 10);
    setTimeout(() => {
        notification.classList.add('translate-x-full', 'opacity-0');
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 5000);
}

/**
 * Get friendly name for action
 * @param {string} action - Action code
 * @returns {string} - Friendly action name
 */
function getActionName(action) {
    const actionNames = {
        'login': 'logging in',
        'registration': 'creating your account',
        'profile_update': 'updating your profile',
        'bug_report': 'reporting a bug',
        'recharge': 'making a donation',
        'contact': 'contacting us',
        'job_application': 'applying for a job'
    };
    return actionNames[action] || 'completing an action';
}

/**
 * Get icon for action
 * @param {string} action - Action code
 * @returns {string} - Icon HTML
 */
function getActionIcon(action) {
    const actionIcons = {
        'login': '🔑',
        'registration': '📝',
        'profile_update': '👤',
        'bug_report': '🐞',
        'recharge': '💰',
        'contact': '✉️',
        'job_application': '💼'
    };
    return actionIcons[action] || '🏆';
}

/**
 * Get random encouragement message
 * @returns {string} - Random encouragement message
 */
function getRandomEncouragement() {
    const encouragements = [
        'Great job',
        'Awesome',
        'Well done',
        'Amazing work',
        'Fantastic',
        'Excellent',
        'Brilliant',
        'Superb',
        'Impressive',
        'Outstanding'
    ];
    return encouragements[Math.floor(Math.random() * encouragements.length)];
}
