/**
 * Portfolio Website - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('header');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const sections = document.querySelectorAll('section[id]');
    const fadeElements = document.querySelectorAll('.fade-in-up');
    
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            // Close mobile menu when a link is clicked
            if (mobileMenu.classList.contains('translate-y-0')) {
                mobileMenu.classList.remove('translate-y-0');
                mobileMenu.classList.add('-translate-y-full');
            }
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 64, // Adjust for header height
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Toggle mobile menu
    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', function() {
            if (mobileMenu.classList.contains('-translate-y-full')) {
                mobileMenu.classList.remove('-translate-y-full');
                mobileMenu.classList.add('translate-y-0');
            } else {
                mobileMenu.classList.remove('translate-y-0');
                mobileMenu.classList.add('-translate-y-full');
            }
        });
    }
    
    // Scroll event for header background
    window.addEventListener('scroll', function() {
        // Add/remove header background based on scroll position
        if (window.scrollY > 50) {
            header.classList.add('bg-white/95');
            header.classList.add('dark:bg-slate-900/95');
            header.classList.add('shadow-sm');
        } else {
            header.classList.remove('bg-white/95');
            header.classList.remove('dark:bg-slate-900/95');
            header.classList.remove('shadow-sm');
        }
        
        // Update active menu based on scroll position
        let currentSection = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.offsetHeight;
            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                currentSection = section.getAttribute('id');
            }
        });
        
        // Highlight current section in navigation
        document.querySelectorAll('nav a').forEach(link => {
            link.classList.remove('text-primary');
            link.classList.remove('dark:text-primary');
            if (link.getAttribute('href') === `#${currentSection}`) {
                link.classList.add('text-primary');
                link.classList.add('dark:text-primary');
            }
        });
        
        // Animate sections on scroll
        fadeElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (elementTop < windowHeight * 0.85) {
                element.classList.add('visible');
            }
        });
    });
    
    // Contact form validation
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            // Form is validated by PHP, so no need to prevent submission
            // This is where you'd add client-side validation if needed
        });
    }
    
    // Initialize - trigger scroll event to set initial states
    window.dispatchEvent(new Event('scroll'));
});