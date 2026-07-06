/**
 * Header JavaScript
 * Handles sticky header effects and mobile menu toggling.
 */
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('masthead');
    const menuToggle = document.querySelector('.menu-toggle');
    const siteNavigation = document.getElementById('site-navigation');

    // 1. Sticky Header Shadow on Scroll
    window.addEventListener('scroll', function() {
        if (window.scrollY > 10) {
            header.classList.add('is-scrolled');
        } else {
            header.classList.remove('is-scrolled');
        }
    });

    // 2. Mobile Menu Toggle
    if (menuToggle && siteNavigation) {
        menuToggle.addEventListener('click', function() {
            siteNavigation.classList.toggle('toggled');
            
            // Accessibility update
            if (siteNavigation.classList.contains('toggled')) {
                menuToggle.setAttribute('aria-expanded', 'true');
            } else {
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        });
    }
});
