import AOS from 'aos';

/**
 * AOS Initialization
 * This script runs on the front end of the site.
 */
document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        // You can change these settings based on the docs you found
        duration: 1000, 
        once: true,     
        offset: 120,    
        easing: 'ease-in-out',
    });
});