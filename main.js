// Neo Salon - Clean & Modern JavaScript
// Scroll animations and interactive elements

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initScrollAnimations();
    initImageLoading();
    initFormHandlers();
    initSmoothScrolling();
    initServiceCards();
    initLoadingStates();
});

// Scroll-based animations
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                
                // Add stagger delay for multiple elements
                const delay = entry.target.dataset.delay || 0;
                if (delay > 0) {
                    entry.target.style.transitionDelay = delay + 'ms';
                }
                
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe all animated elements
    const animatedElements = document.querySelectorAll(
        '.fade-in, .slide-in-left, .slide-in-right, .scale-in, .service-card, h2, h3'
    );
    
    animatedElements.forEach((el, index) => {
        // Set stagger delay for similar elements
        if (el.classList.contains('service-card')) {
            el.dataset.delay = (index * 200);
        }
        
        observer.observe(el);
    });
}

// Image loading with fade-in effect
function initImageLoading() {
    const images = document.querySelectorAll('img');
    
    images.forEach(img => {
        if (img.complete) {
            img.style.opacity = '1';
        } else {
            img.style.opacity = '0';
            img.style.transition = 'opacity 0.3s ease';
            
            img.addEventListener('load', function() {
                this.style.opacity = '1';
            });
            
            img.addEventListener('error', function() {
                this.style.opacity = '0.5';
                console.log('Image failed to load:', this.src);
            });
        }
    });
}

// Form handling
function initFormHandlers() {
    // Contact form
    const contactForm = document.querySelector('#contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            
            // Show loading
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Sending...';
            submitBtn.disabled = true;
            
            try {
                // Simulate form submission
                await new Promise(resolve => setTimeout(resolve, 2000));
                
                showMessage('Thank you! Your message has been sent successfully.', 'success');
                this.reset();
                
            } catch (error) {
                showMessage('Sorry, there was an error. Please try again.', 'error');
            } finally {
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }
        });
        
        // Form validation
        const inputs = contactForm.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            input.addEventListener('blur', validateInput);
            input.addEventListener('input', clearErrors);
        });
    }
    
    // Newsletter form
    const newsletterForm = document.querySelector('#newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const email = this.querySelector('input[type="email"]').value;
            const submitBtn = this.querySelector('button[type="submit"]');
            
            if (email && isValidEmail(email)) {
                const originalText = submitBtn.textContent;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Subscribing...';
                submitBtn.disabled = true;
                
                // Simulate subscription
                await new Promise(resolve => setTimeout(resolve, 1500));
                
                showMessage('Thank you for subscribing!', 'success');
                this.reset();
                
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            } else {
                showMessage('Please enter a valid email address.', 'error');
            }
        });
    }
}

// Service cards interactions
function initServiceCards() {
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
            this.style.boxShadow = '0 20px 40px rgba(255, 215, 0, 0.15)';
            
            // Image effect
            const img = this.querySelector('img');
            if (img) {
                img.style.transform = 'scale(1.1)';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '0 4px 15px rgba(0, 0, 0, 0.1)';
            
            // Reset image
            const img = this.querySelector('img');
            if (img) {
                img.style.transform = 'scale(1)';
            }
        });
    });
}

// Smooth scrolling
function initSmoothScrolling() {
    const smoothScrollLinks = document.querySelectorAll('a[href^="#"]');
    
    smoothScrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const headerHeight = document.querySelector('nav').offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Loading states
function initLoadingStates() {
    // Show loading for page transitions
    const pageLinks = document.querySelectorAll('a[href$=".php"]:not([href^="#"])');
    
    pageLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            if (this.getAttribute('href') !== '#' && !this.target) {
                showLoading();
            }
        });
    });
    
    // Hide loading when page loads
    window.addEventListener('load', function() {
        hideLoading();
    });
}

// Utility Functions
function showMessage(message, type = 'info') {
    const messageContainer = document.createElement('div');
    messageContainer.className = `fixed top-4 right-4 z-50 max-w-md transform translate-x-full transition-transform duration-300`;
    
    const bgColors = {
        success: 'bg-green-500',
        error: 'bg-red-500',
        warning: 'bg-yellow-500',
        info: 'bg-blue-500'
    };
    
    const icons = {
        success: 'check-circle',
        error: 'times-circle',
        warning: 'exclamation-triangle',
        info: 'info-circle'
    };
    
    messageContainer.innerHTML = `
        <div class="${bgColors[type]} text-white p-4 rounded-lg shadow-2xl flex items-center space-x-3">
            <i class="fas fa-${icons[type]} text-xl"></i>
            <span class="flex-1">${message}</span>
            <button onclick="this.closest('.fixed').remove()" class="hover:opacity-70 transition-opacity">
                <i class="fas fa-times"></i>
            </button>
        </div>
    `;
    
    document.body.appendChild(messageContainer);
    
    // Animate in
    setTimeout(() => {
        messageContainer.classList.remove('translate-x-full');
    }, 100);
    
    // Auto remove
    setTimeout(() => {
        messageContainer.classList.add('translate-x-full');
        setTimeout(() => messageContainer.remove(), 300);
    }, 5000);
}

function validateInput(event) {
    const input = event.target;
    const value = input.value.trim();
    
    clearErrors(event);
    
    let isValid = true;
    let errorMessage = '';
    
    if (input.hasAttribute('required') && !value) {
        isValid = false;
        errorMessage = 'This field is required';
    } else if (input.type === 'email' && value && !isValidEmail(value)) {
        isValid = false;
        errorMessage = 'Please enter a valid email address';
    } else if (input.type === 'tel' && value && !isValidPhone(value)) {
        isValid = false;
        errorMessage = 'Please enter a valid phone number';
    }
    
    if (!isValid) {
        showInputError(input, errorMessage);
    }
    
    return isValid;
}

function clearErrors(event) {
    const input = event.target;
    const errorElement = input.parentNode.querySelector('.error-message');
    if (errorElement) {
        errorElement.remove();
    }
    input.classList.remove('border-red-500');
}

function showInputError(input, message) {
    input.classList.add('border-red-500');
    
    const errorElement = document.createElement('div');
    errorElement.className = 'error-message text-red-500 text-sm mt-1';
    errorElement.textContent = message;
    
    input.parentNode.appendChild(errorElement);
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function isValidPhone(phone) {
    const phoneRegex = /^(\+94|0)?[0-9]{9}$/;
    return phoneRegex.test(phone.replace(/\s/g, ''));
}

function showLoading() {
    const loadingOverlay = document.getElementById('loading-overlay');
    if (loadingOverlay) {
        loadingOverlay.classList.remove('hidden');
    }
}

function hideLoading() {
    const loadingOverlay = document.getElementById('loading-overlay');
    if (loadingOverlay) {
        loadingOverlay.classList.add('hidden');
    }
}

// Parallax scrolling effect (lightweight)
function initParallaxEffect() {
    let ticking = false;
    
    function updateParallax() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.parallax');
        
        parallaxElements.forEach(element => {
            const speed = element.dataset.speed || 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
        
        ticking = false;
    }
    
    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    });
}

// Initialize parallax if elements exist
if (document.querySelector('.parallax')) {
    initParallaxEffect();
}

// Performance optimization
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Window resize handler
window.addEventListener('resize', debounce(function() {
    // Handle responsive updates if needed
}, 250));

// Error handling
window.addEventListener('error', function(event) {
    console.error('JavaScript Error:', event.error);
});

// Page visibility API for performance
document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
        // Page is hidden, pause animations if needed
    } else {
        // Page is visible, resume animations
    }
});