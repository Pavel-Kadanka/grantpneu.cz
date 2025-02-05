export function initContactForm() {
    const form = document.getElementById('contact-form');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Děkujeme za vaši zprávu! Brzy vás budeme kontaktovat.');
            this.reset();
        });
    }
} 