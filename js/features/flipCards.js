import { rotate, rotateback } from '../utils/animations.js';

export function initFlipCards() {
    // Initialize legacy flip card functionality
    document.querySelectorAll('.service-item .learn-more').forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            const card = this.closest('.service-item');
            if (this.textContent.includes('Více informací')) {
                rotate(card);
            } else {
                rotateback(card);
            }
        });
    });

    // Initialize modern flip card functionality
    const serviceItems = document.querySelectorAll('.service-item');
    serviceItems.forEach(item => {
        const frontButton = item.querySelector('.service-item-front .learn-more');
        const backButton = item.querySelector('.service-item-back .learn-more');

        if (frontButton) {
            frontButton.addEventListener('click', (e) => {
                e.stopPropagation();
                item.classList.add('flipped');
            });
        }

        if (backButton) {
            backButton.addEventListener('click', (e) => {
                e.stopPropagation();
                item.classList.remove('flipped');
            });
        }
    });
} 