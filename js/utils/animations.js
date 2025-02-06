export function rotate(card) {
    const serviceItemInner = card.querySelector('.service-item-inner');
    serviceItemInner.style.transform = 'rotateY(180deg)';
}

export function rotateback(card) {
    const serviceItemInner = card.querySelector('.service-item-inner');
    serviceItemInner.style.transform = 'rotateY(0deg)';
} 

export function menuAnimationIn() {
    let line1 = document.querySelector(".mobile-menu .hamburger-lines .line1");
    let line2 = document.querySelector(".mobile-menu .hamburger-lines .line2");
    let line3 = document.querySelector(".mobile-menu .hamburger-lines .line3");
    let mobileMenuItems = document.querySelector(".mobile-menu-items");

    // Set the transform origin to the center of the elements
    line1.style.transformOrigin = "center";
    line3.style.transformOrigin = "center";

    // Apply transitions
    line1.style.transition = "transform 0.5s, background 0.5s";
    line2.style.transition = "transform 0.5s, background 0.5s";
    line3.style.transition = "transform 0.5s, background 0.5s";

    // Show mobile menu
    mobileMenuItems.style.transform = "translateX(0)";

    // Animate hamburger to X
    line1.style.transform = "translateY(15px) rotate(45deg)";
    line2.style.opacity = "0";
    line3.style.transform = "translateY(-15px) rotate(-45deg)";
}

export function menuAnimationReset() {
    let line1 = document.querySelector(".mobile-menu .hamburger-lines .line1");
    let line2 = document.querySelector(".mobile-menu .hamburger-lines .line2");
    let line3 = document.querySelector(".mobile-menu .hamburger-lines .line3");
    let mobileMenuItems = document.querySelector(".mobile-menu-items");

    // Hide mobile menu
    mobileMenuItems.style.transform = "translateX(-150%)";

    // Reset hamburger
    line1.style.transform = "translateY(0) rotate(0)";
    line2.style.opacity = "1";
    line3.style.transform = "translateY(0) rotate(0)";
}