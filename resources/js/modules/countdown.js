
/**
 * Initialize countdown functionality
 */
export function initCountdown() {
    const countdownContainer = document.querySelector('.countdown-container');

    if (!countdownContainer) return;

    const targetDate = new Date(countdownContainer.dataset.targetDate).getTime();

    const daysElement = document.getElementById('days');
    const hoursElement = document.getElementById('hours');
    const minutesElement = document.getElementById('minutes');
    const secondsElement = document.getElementById('seconds');

    // Update the countdown every second
    const countdown = setInterval(function() {
        // Get current date and time
        const now = new Date().getTime();

        // Find the distance between now and the countdown date
        const distance = targetDate - now;

        // Calculate time units
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result
        if (daysElement) daysElement.textContent = String(days).padStart(2, '0');
        if (hoursElement) hoursElement.textContent = String(hours).padStart(2, '0');
        if (minutesElement) minutesElement.textContent = String(minutes).padStart(2, '0');
        if (secondsElement) secondsElement.textContent = String(seconds).padStart(2, '0');

        // If the countdown is finished, show expired message
        if (distance < 0) {
            clearInterval(countdown);
            if (daysElement) daysElement.textContent = '00';
            if (hoursElement) hoursElement.textContent = '00';
            if (minutesElement) minutesElement.textContent = '00';
            if (secondsElement) secondsElement.textContent = '00';

            // Add a message that the countdown has expired
            const expiredElement = document.createElement('div');
            expiredElement.className = 'text-center mt-8';
            expiredElement.innerHTML = '<h2 class="text-3xl font-cinzel font-bold text-gold">The event has started!</h2>';
            countdownContainer.appendChild(expiredElement);
        }
    }, 1000);
}
