import './bootstrap';


import {initMobileMenu} from './modules/mobile-menu.js';
import { initSmoothScrolling } from './modules/navigation.js';
import { initDonationForm } from './modules/donation/index.js';
import { initCharacterModule } from './modules/character.js';

document.addEventListener('DOMContentLoaded', function() {
    initMobileMenu();
    initSmoothScrolling();
    initDonationForm();
    initCharacterModule();

});
