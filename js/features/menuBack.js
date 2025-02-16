import { menuAnimationReset } from '../utils/animations.js';

export function closeMenu() {
    let menuItems = document.querySelectorAll(".mobile-menu-items ul li a");

    menuItems.forEach(menuItem => {
        menuItem.addEventListener('click', (e) => {
            menuAnimationReset();
        });
    });
}