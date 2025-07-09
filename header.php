<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) . ' - Neo Salon' : 'Neo Salon - Ladies Gallery | Premium Unisex Salon'; ?></title>
    
    <!-- Meta Tags -->
    <meta name="description" content="Neo Salon Ladies Gallery - Premier unisex salon offering professional hair styling, beauty treatments, and grooming services with luxury experience.">
    <meta name="keywords" content="salon, beauty, hair, styling, grooming, ladies gallery, makeup, Sri Lanka, Neo Salon">
    <meta name="author" content="Ceylony Digital">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo isset($page_title) ? htmlspecialchars($page_title) . ' - Neo Salon' : 'Neo Salon - Ladies Gallery'; ?>">
    <meta property="og:description" content="Neo Salon Ladies Gallery - Premium unisex salon offering professional beauty and grooming services with luxury experience.">
    <meta property="og:image" content="images/logo/Neo Salon Name.png">
    <meta property="og:url" content="https://www.neosalon.lk">
    <meta property="og:type" content="business.beauty_salon">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/logo/favicon.ico">
    <link rel="apple-touch-icon" href="images/logo/apple-touch-icon.png">
    
    <!-- CSS Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BeautySalon",
        "name": "Neo Salon - Ladies Gallery",
        "description": "Premium unisex salon offering professional beauty and grooming services",
        "url": "https://www.neosalon.lk",
        "telephone": ["+94719090000", "+94755551045"],
        "email": "info@neosalon.lk",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Main Street",
            "addressLocality": "Colombo",
            "addressCountry": "Sri Lanka"
        },
        "openingHours": "Mo-Su 09:00-20:00",
        "priceRange": "$$"
    }
    </script>
    
    <style>
        /* Neo Salon Custom Color Scheme */
        :root {
            --golden-primary: #FFD700;
            --golden-dark: #B8860B;
            --golden-light: #FFF8DC;
            --golden-hover: #E6C200;
        }
        
        /* Golden Color Classes */
        .text-golden { color: var(--golden-primary) !important; }
        .text-golden-primary { color: var(--golden-primary) !important; }
        .text-golden-dark { color: var(--golden-dark) !important; }
        .bg-golden { background-color: var(--golden-primary) !important; }
        .bg-golden-primary { background-color: var(--golden-primary) !important; }
        .bg-golden-dark { background-color: var(--golden-dark) !important; }
        .border-golden { border-color: var(--golden-primary) !important; }
        .border-golden-primary { border-color: var(--golden-primary) !important; }
        .hover\:text-golden:hover { color: var(--golden-primary) !important; }
        .hover\:bg-golden:hover { background-color: var(--golden-primary) !important; }
        .hover\:bg-golden-primary:hover { background-color: var(--golden-primary) !important; }
        .hover\:border-golden:hover { border-color: var(--golden-primary) !important; }
        
        /* Custom Font Families */
        .font-playfair { font-family: 'Playfair Display', serif !important; }
        .font-inter { font-family: 'Inter', sans-serif !important; }
        .font-dancing { font-family: 'Dancing Script', cursive !important; }
        .font-dancing-script { font-family: 'Dancing Script', cursive !important; }
        
        /* Animation Classes */
        .fade-in { 
            opacity: 0; 
            transform: translateY(20px); 
            transition: all 0.6s ease-out; 
        }
        .fade-in.visible { 
            opacity: 1; 
            transform: translateY(0); 
        }
        .slide-in-left { 
            opacity: 0; 
            transform: translateX(-50px); 
            transition: all 0.6s ease-out; 
        }
        .slide-in-left.visible { 
            opacity: 1; 
            transform: translateX(0); 
        }
        .slide-in-right { 
            opacity: 0; 
            transform: translateX(50px); 
            transition: all 0.6s ease-out; 
        }
        .slide-in-right.visible { 
            opacity: 1; 
            transform: translateX(0); 
        }
        .scale-in { 
            opacity: 0; 
            transform: scale(0.9); 
            transition: all 0.6s ease-out; 
        }
        .scale-in.visible { 
            opacity: 1; 
            transform: scale(1); 
        }
        
        /* Form Styles */
        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
        }
        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #D1D5DB;
            border-radius: 0.375rem;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        .form-input:focus {
            outline: none;
            border-color: var(--golden-primary);
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.1);
        }
        .form-textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #D1D5DB;
            border-radius: 0.375rem;
            font-size: 1rem;
            resize: vertical;
            transition: all 0.3s ease;
        }
        .form-textarea:focus {
            outline: none;
            border-color: var(--golden-primary);
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.1);
        }
        
        /* Social Media Icons */
        .social-icon {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .social-icon.facebook {
            background-color: rgba(59, 89, 152, 0.2);
            color: #3b5998;
        }
        .social-icon.facebook:hover {
            background-color: #3b5998;
            color: white;
            transform: scale(1.1);
        }
        
        .social-icon.instagram {
            background-color: rgba(225, 48, 108, 0.2);
            color: #e1306c;
        }
        .social-icon.instagram:hover {
            background: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);
            color: white;
            transform: scale(1.1);
        }
        
        .social-icon.tiktok {
            background-color: rgba(0, 0, 0, 0.2);
            color: #000;
        }
        .social-icon.tiktok:hover {
            background-color: #000;
            color: white;
            transform: scale(1.1);
        }
        
        .social-icon.whatsapp {
            background-color: rgba(37, 211, 102, 0.2);
            color: #25d366;
        }
        .social-icon.whatsapp:hover {
            background-color: #25d366;
            color: white;
            transform: scale(1.1);
        }
        
        /* Navigation Links */
        .nav-link {
            position: relative;
            display: flex;
            align-items: center;
            padding: 12px 24px;
            color: #000;
            font-weight: 600;
            transition: all 0.3s ease;
            border-radius: 8px;
            text-decoration: none;
        }
        
        .nav-link:hover {
            color: var(--golden-primary);
            background-color: rgba(249, 250, 251, 1);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }
        
        .nav-link.active {
            color: var(--golden-primary);
            background: linear-gradient(90deg, rgba(255, 215, 0, 0.1), rgba(255, 215, 0, 0.05));
        }
        
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--golden-primary), transparent);
            border-radius: 2px;
        }
        
        /* CTA Button */
        .cta-button {
            background: linear-gradient(135deg, var(--golden-primary), var(--golden-dark));
            color: #000;
            padding: 16px 32px;
            border-radius: 8px;
            font-weight: 700;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            background: linear-gradient(135deg, var(--golden-dark), var(--golden-primary));
        }
        
        /* Mobile Navigation */
        .mobile-nav-link {
            display: flex;
            align-items: center;
            padding: 16px 24px;
            color: #000;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .mobile-nav-link:hover {
            color: var(--golden-primary);
            background: linear-gradient(90deg, rgba(255, 215, 0, 0.05), transparent);
        }
        
        .mobile-nav-link.active {
            color: var(--golden-primary);
            background: linear-gradient(90deg, rgba(255, 215, 0, 0.1), rgba(255, 215, 0, 0.05));
        }
        
        .mobile-cta {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--golden-primary), var(--golden-dark));
            color: #000;
            padding: 16px;
            border-radius: 8px;
            font-weight: 700;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .mobile-cta:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        /* Hamburger Menu */
        .hamburger {
            width: 24px;
            height: 20px;
            position: relative;
            cursor: pointer;
        }
        
        .hamburger-line {
            position: absolute;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: currentColor;
            transition: all 0.3s ease;
            border-radius: 1px;
        }
        
        .hamburger-line:nth-child(1) { top: 0; }
        .hamburger-line:nth-child(2) { top: 50%; transform: translateY(-50%); }
        .hamburger-line:nth-child(3) { bottom: 0; }
        
        .hamburger.active .hamburger-line:nth-child(1) {
            top: 50%;
            transform: translateY(-50%) rotate(45deg);
        }
        
        .hamburger.active .hamburger-line:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.active .hamburger-line:nth-child(3) {
            bottom: 50%;
            transform: translateY(50%) rotate(-45deg);
        }
        
        /* Contact Icons */
        .contact-icon {
            background-color: var(--golden-primary);
            border-radius: 50%;
            padding: 6px;
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .contact-icon i {
            color: #000;
            font-size: 12px;
        }
        
        /* Business Hours Badge */
        .hours-badge {
            background-color: rgba(255, 215, 0, 0.2);
            padding: 6px 16px;
            border-radius: 9999px;
            border: 1px solid rgba(255, 215, 0, 0.5);
        }
        
        /* Tailwind Color Overrides */
        .border-t-golden { border-top-color: var(--golden-primary) !important; }
        .border-b-golden { border-bottom-color: var(--golden-primary) !important; }
        .border-l-golden { border-left-color: var(--golden-primary) !important; }
        .border-r-golden { border-right-color: var(--golden-primary) !important; }
    </style>
</head>

<body class="font-inter">

<!-- Top Contact Bar -->
<div class="bg-gradient-to-r from-black via-gray-900 to-black text-white py-3 border-b border-golden border-opacity-30 shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row justify-between items-center text-sm">
            <!-- Contact Info -->
            <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-8 mb-2 lg:mb-0">
                <div class="flex items-center space-x-2 hover:text-golden transition-all duration-300">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <a href="tel:+94719090000" class="font-medium hover:scale-105 transition-transform">071 909 0000</a>
                </div>
                <div class="flex items-center space-x-2 hover:text-golden transition-all duration-300">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <a href="tel:+94755551045" class="font-medium hover:scale-105 transition-transform">075 555 1045</a>
                </div>
                <div class="flex items-center space-x-2 hover:text-golden transition-all duration-300">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <a href="mailto:info@neosalon.lk" class="font-medium hover:scale-105 transition-transform">info@neosalon.lk</a>
                </div>
            </div>
            
            <!-- Business Hours & Social Media -->
            <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-6">
                <!-- Business Hours -->
                <div class="flex items-center space-x-2 hours-badge">
                    <i class="fas fa-clock text-golden"></i>
                    <span class="font-semibold text-golden">Open: 9:00 AM - 8:00 PM</span>
                </div>
                
                <!-- Social Media -->
                <div class="flex items-center space-x-3">
                    <a href="#" class="social-icon facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon tiktok">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://wa.me/94719090000" class="social-icon whatsapp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<nav class="bg-white shadow-xl sticky top-0 z-50 border-b-2 border-golden border-opacity-20">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-6">
            
            <!-- Logo Section -->
            <div class="flex items-center space-x-4 cursor-pointer group">
                <div class="relative">
                    <img src="images/logo/Neo Salon Name.png" 
                         alt="Neo Salon Logo" 
                         class="h-16 lg:h-20 w-auto group-hover:scale-110 transition-all duration-500 drop-shadow-lg"
                         loading="lazy">
                </div>
                
                <!-- Brand Text -->
                <div class="hidden lg:block">
                    <h1 class="text-3xl xl:text-4xl font-bold text-black font-playfair group-hover:text-golden transition-all duration-500">
                        Neo Salon
                    </h1>
                    <p class="text-base font-semibold tracking-wider text-golden font-dancing">
                        Ladies Gallery
                    </p>
                    <div class="w-full h-0.5 bg-gradient-to-r from-golden via-golden-dark to-golden mt-1 opacity-70"></div>
                </div>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-2">
                <a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                    <i class="fas fa-home mr-2 text-golden"></i>
                    <span>Home</span>
                </a>
                <a href="services.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">
                    <i class="fas fa-cut mr-2 text-golden"></i>
                    <span>Services</span>
                </a>
                <a href="about.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">
                    <i class="fas fa-users mr-2 text-golden"></i>
                    <span>About</span>
                </a>
                <a href="contact.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">
                    <i class="fas fa-envelope mr-2 text-golden"></i>
                    <span>Contact</span>
                </a>
            </div>
            
            <!-- CTA Button -->
            <div class="hidden md:flex items-center space-x-4">
                <div class="text-right hidden lg:block">
                    <p class="text-xs text-gray-600 font-medium">Ready for a transformation?</p>
                    <p class="text-sm font-bold text-golden">Call Now!</p>
                </div>
                <a href="contact.php" class="cta-button">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <span>Book Now</span>
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="lg:hidden relative p-3 text-black hover:text-golden focus:outline-none">
                <div class="hamburger">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </div>
            </button>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="lg:hidden hidden bg-gradient-to-br from-white to-gray-50 border-t-2 border-golden shadow-xl">
            <div class="py-6 space-y-2">
                <!-- Mobile Brand -->
                <div class="text-center px-4 pb-4 border-b border-golden border-opacity-20">
                    <h2 class="text-2xl font-bold text-black font-playfair">Neo Salon</h2>
                    <p class="text-golden font-dancing text-lg">Ladies Gallery</p>
                </div>
                
                <!-- Mobile Links -->
                <a href="index.php" class="mobile-nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                    <i class="fas fa-home text-golden mr-4 w-5"></i>
                    <span>Home</span>
                    <i class="fas fa-chevron-right ml-auto opacity-50"></i>
                </a>
                <a href="services.php" class="mobile-nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">
                    <i class="fas fa-cut text-golden mr-4 w-5"></i>
                    <span>Services</span>
                    <i class="fas fa-chevron-right ml-auto opacity-50"></i>
                </a>
                <a href="about.php" class="mobile-nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">
                    <i class="fas fa-users text-golden mr-4 w-5"></i>
                    <span>About Us</span>
                    <i class="fas fa-chevron-right ml-auto opacity-50"></i>
                </a>
                <a href="contact.php" class="mobile-nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">
                    <i class="fas fa-envelope text-golden mr-4 w-5"></i>
                    <span>Contact</span>
                    <i class="fas fa-chevron-right ml-auto opacity-50"></i>
                </a>
                
                <!-- Mobile CTA -->
                <div class="px-4 py-6 border-t border-golden border-opacity-20 mt-4">
                    <a href="contact.php" class="mobile-cta">
                        <i class="fas fa-calendar-alt mr-3 text-lg"></i>
                        <span class="text-lg">Book Appointment</span>
                    </a>
                </div>
                
                <!-- Mobile Contact Info -->
                <div class="px-4 py-4 bg-gradient-to-r from-golden to-golden-dark border-t border-golden">
                    <div class="text-center space-y-3">
                        <p class="text-sm font-semibold text-black">Quick Contact</p>
                        <div class="flex justify-center space-x-6">
                            <a href="tel:+94719090000" class="flex items-center text-black hover:text-white transition-colors">
                                <i class="fas fa-phone mr-2"></i>
                                <span class="font-semibold">Call</span>
                            </a>
                            <a href="https://wa.me/94719090000" class="flex items-center text-black hover:text-green-700 transition-colors">
                                <i class="fab fa-whatsapp mr-2"></i>
                                <span class="font-semibold">WhatsApp</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Loading Overlay -->
<div id="loading-overlay" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-2xl p-8 text-center max-w-sm mx-4 shadow-2xl">
        <div class="relative mb-6">
            <div class="animate-spin rounded-full h-16 w-16 border-4 border-gray-200 mx-auto" style="border-top-color: var(--golden-primary);"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <i class="fas fa-cut text-golden text-2xl animate-pulse"></i>
            </div>
        </div>
        <p class="text-black font-bold text-lg">Loading...</p>
        <p class="text-gray-500 text-sm mt-2">Please wait while we prepare your experience</p>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    initMobileMenu();
    initScrollEffects();
    initNavigationAnimations();
    initAnimationObserver();
});

// Mobile Menu Functionality
function initMobileMenu() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburger = mobileMenuButton ? mobileMenuButton.querySelector('.hamburger') : null;
    
    if (mobileMenuButton && mobileMenu && hamburger) {
        mobileMenuButton.addEventListener('click', function(e) {
            e.preventDefault();
            const isOpen = !mobileMenu.classList.contains('hidden');
            
            if (isOpen) {
                // Close menu
                mobileMenu.style.transform = 'translateY(-20px)';
                mobileMenu.style.opacity = '0';
                setTimeout(function() {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.style.transform = '';
                    mobileMenu.style.opacity = '';
                }, 300);
                hamburger.classList.remove('active');
            } else {
                // Open menu
                mobileMenu.classList.remove('hidden');
                mobileMenu.style.transform = 'translateY(-20px)';
                mobileMenu.style.opacity = '0';
                setTimeout(function() {
                    mobileMenu.style.transition = 'all 0.3s ease-out';
                    mobileMenu.style.transform = 'translateY(0)';
                    mobileMenu.style.opacity = '1';
                }, 10);
                hamburger.classList.add('active');
            }
        });
        
        // Close menu when clicking on links
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                hamburger.classList.remove('active');
            });
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
                hamburger.classList.remove('active');
            }
        });
    }
}

// Scroll Effects
function initScrollEffects() {
    const nav = document.querySelector('nav');
    if (!nav) return;
    
    let lastScrollY = window.scrollY;
    
    window.addEventListener('scroll', function() {
        const currentScrollY = window.scrollY;
        
        if (currentScrollY > 100) {
            nav.style.backdropFilter = 'blur(20px)';
            nav.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
            nav.classList.add('shadow-2xl');
        } else {
            nav.style.backdropFilter = '';
            nav.style.backgroundColor = '';
            nav.classList.remove('shadow-2xl');
        }
        
        lastScrollY = currentScrollY;
    });
}

// Navigation Animations
function initNavigationAnimations() {
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(function(link) {
        link.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
}

// Animation Observer
function initAnimationObserver() {
    if ('IntersectionObserver' in window) {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        // Observe all animation elements
        const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .scale-in');
        animatedElements.forEach(function(element) {
            observer.observe(element);
        });
    } else {
        // Fallback for older browsers
        const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .scale-in');
        animatedElements.forEach(function(element) {
            element.classList.add('visible');
        });
    }
}

// Global loading functions
window.showLoading = function() {
    const overlay = document.getElementById('loading-overlay');
    if (overlay) {
        overlay.classList.remove('hidden');
        overlay.style.animation = 'fadeIn 0.3s ease-out';
    }
};

window.hideLoading = function() {
    const overlay = document.getElementById('loading-overlay');
    if (overlay) {
        overlay.style.animation = 'fadeOut 0.3s ease-out';
        setTimeout(function() {
            overlay.classList.add('hidden');
        }, 300);
    }
};

// Error handling for images
document.addEventListener('DOMContentLoaded', function() {
    const logoImg = document.querySelector('img[alt="Neo Salon Logo"]');
    if (logoImg) {
        logoImg.addEventListener('error', function() {
            console.warn('Logo image failed to load');
            // You can add fallback logic here if needed
        });
    }
});

// Utility functions for other pages
window.validateEmail = function(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
};

window.validatePhone = function(phone) {
    const re = /^[\+]?[0-9\s\-\(\)]{10,}$/;
    return re.test(phone.replace(/\s/g, ''));
};

window.sanitizeInput = function(input) {
    if (typeof input !== 'string') return '';
    return input.trim().replace(/[<>]/g, '');
};

// Functions that might be called from other pages
window.getAllServices = function() {
    // This would normally fetch from database
    // For now, return default structure
    return {
        'Hair Services': [
            {service_name: 'Hair Cuts', description: 'Professional haircuts for all styles'},
            {service_name: 'Hair Coloring', description: 'Expert hair coloring and highlights'},
            {service_name: 'Hair Treatments', description: 'Nourishing hair treatments'}
        ],
        'Beauty Services (for Women)': [
            {service_name: 'Facials', description: 'Refreshing facial treatments'},
            {service_name: 'Makeup', description: 'Professional makeup services'}
        ],
        'Grooming Services (for Men)': [
            {service_name: 'Beard Trimming', description: 'Professional beard styling'}
        ],
        'Special Services': [
            {service_name: 'Bridal Packages', description: 'Complete bridal beauty packages'}
        ]
    };
};

window.saveContactMessage = function(name, email, phone, message) {
    // This would normally save to database
    // For now, just return true
    console.log('Contact message:', {name, email, phone, message});
    return true;
};
</script>