import { initSmoothScrolling } from './features/smoothScroll.js';
import { initScrollAnimations } from './features/scrollAnimations.js';
import { initContactForm } from './features/contactForm.js';
import { initFlipCards } from './features/flipCards.js';
import { menuAnimationIn, menuAnimationReset } from './utils/animations.js';
import { initThemeToggle } from './features/modeChange.js';

document.addEventListener('DOMContentLoaded', function() {
    initSmoothScrolling();
    initScrollAnimations();
    initContactForm();
    initFlipCards();
    initThemeToggle();

    const checkbox = document.querySelector('.checkbox');
    
    checkbox.addEventListener('change', (e) => {
        if (e.target.checked) {
            menuAnimationIn();
        } else {
            menuAnimationReset();
        }
    });
    
    let menuItems = document.querySelectorAll(".mobile-menu-items ul li a");

    menuItems.forEach(menuItem => {
        menuItem.addEventListener('click', (e) => {
            menuAnimationReset();
        });
    });
});