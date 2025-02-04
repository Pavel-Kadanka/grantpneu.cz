// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Scroll-triggered animations
const sections = document.querySelectorAll('section');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, { threshold: 0.1 });

sections.forEach(section => {
    observer.observe(section);
});

// Contact form submission
document.getElementById('contact-form').addEventListener('submit', function (e) {
    e.preventDefault();
    alert('Děkujeme za vaši zprávu! Brzy vás budeme kontaktovat.');
    this.reset();
});

// Flip card functionality
function rotate(card) {
    const serviceItemInner = card.querySelector('.service-item-inner');
    serviceItemInner.style.transform = 'rotateY(180deg)';
}

function rotateback(card) {
    const serviceItemInner = card.querySelector('.service-item-inner');
    serviceItemInner.style.transform = 'rotateY(0deg)';
}

// Add event listeners to all "Více informací" and "Zpět" buttons
document.querySelectorAll('.service-item .learn-more').forEach(button => {
    button.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent default button behavior
        const card = this.closest('.service-item');
        if (this.textContent.includes('Více informací')) {
            rotate(card);
        } else {
            rotateback(card);
        }
    });
});