import './bootstrap';


import {initMobileMenu} from './modules/mobile-menu.js';
import { initSmoothScrolling } from './modules/navigation.js';
import { initDonationForm } from './modules/donation/index.js';
import { initCharacterModule } from './modules/character.js';
import { initNotifications } from './modules/notifications.js';
import {awardPoints, initGamification} from "./modules/gamification.js";

document.addEventListener('DOMContentLoaded', function() {
    initMobileMenu();
    initSmoothScrolling();
    initDonationForm();
    initCharacterModule();
    initNotifications();
    initGamification();

    // Check for gamification event from session flash
    if (window.gamificationEvent) {
        const event = window.gamificationEvent;
        awardPoints(
            event.action,
            window.userName || 'user',
            event.total_points
        );
    }
});
