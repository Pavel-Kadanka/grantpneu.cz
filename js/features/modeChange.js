export function initThemeToggle() {
    const themeToggle = document.getElementById('theme-toggle');
    const themeMobileToggle = document.querySelector('#theme-mobile #theme-toggle');
    
    // Check for saved theme preference, default to dark if none
    const currentTheme = localStorage.getItem('theme') || 'dark';
    
    // Set initial theme
    document.documentElement.setAttribute('data-theme', currentTheme);
    updateToggleButton(currentTheme);

    // Toggle theme when buttons are clicked
    themeToggle?.addEventListener('click', handleThemeToggle);
    themeMobileToggle?.addEventListener('click', handleThemeToggle);
}

function handleThemeToggle() {
    const newTheme = document.documentElement.getAttribute('data-theme') === 'light' 
        ? 'dark' 
        : 'light';
    
    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
    updateToggleButton(newTheme);
}

export function updateToggleButton(theme) {
    const desktopToggle = document.getElementById('theme-toggle');
    const mobileToggle = document.querySelector('#theme-mobile #theme-toggle');
    const buttons = [desktopToggle, mobileToggle];
    
    // Get all logo elements (both desktop and mobile)
    const blackLogos = document.querySelectorAll('.black-logo');
    const whiteLogos = document.querySelectorAll('.white-logo');
    
    buttons.forEach(toggle => {
        if (!toggle) return;
        
        const icon = toggle.querySelector('i');
        if (!icon) return;
        
        // Add rotate class to trigger animation
        toggle.classList.add('rotate');

        if (theme === 'light') {
            blackLogos.forEach(logo => logo.style.display = 'block');
            whiteLogos.forEach(logo => logo.style.display = 'none');
        } else {
            whiteLogos.forEach(logo => logo.style.display = 'block');
            blackLogos.forEach(logo => logo.style.display = 'none');
        }
        
        // Wait for animation to complete before changing the icon
        setTimeout(() => {
            if (theme === 'light') {
                icon.classList.remove('bi-sun-fill');
                icon.classList.add('bi-moon-fill');
                blackLogos.forEach(logo => logo.style.display = 'block');
                whiteLogos.forEach(logo => logo.style.display = 'none');
            } else {
                icon.classList.remove('bi-moon-fill');
                icon.classList.add('bi-sun-fill');
                whiteLogos.forEach(logo => logo.style.display = 'block');
                blackLogos.forEach(logo => logo.style.display = 'none');
            }
            // Remove rotate class to reset for next animation
            toggle.classList.remove('rotate');
        }, 250);
    });
}

export function toggleTheme() {
    const currentTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';
    
    document.documentElement.setAttribute('data-theme', newTheme);
    
    // Update button icon
    const toggle = document.getElementById('theme-toggle');
    const icon = toggle.querySelector('i');
    
    if (newTheme === 'light') {
        icon.classList.remove('bi-sun-fill');
        icon.classList.add('bi-moon-fill');
    } else {
        icon.classList.remove('bi-moon-fill');
        icon.classList.add('bi-sun-fill');
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', initThemeToggle);
