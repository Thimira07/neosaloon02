<!-- Footer -->
<footer class="bg-black text-white pt-16 pb-8">
    <div class="container mx-auto px-4">
        
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            
            <!-- Company Info -->
            <div class="lg:col-span-2">
                <div class="flex items-center space-x-3 mb-6">
                    <img src="images/logo/Neo Salon Name.png" alt="Neo Salon Logo" class="h-12 w-auto" 
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="hidden bg-golden-primary text-black px-3 py-1 rounded font-bold">Neo Salon</div>
                    <div>
                        <h3 class="text-2xl font-bold text-golden-primary font-playfair">Neo Salon</h3>
                        <p class="text-gray-400">Premium Unisex Salon</p>
                    </div>
                </div>
                <p class="text-gray-300 mb-6 leading-relaxed max-w-md">
                    Transform your look with our professional beauty and grooming services. 
                    We provide exceptional care with premium products and expert techniques 
                    to enhance your natural beauty.
                </p>
                
                <!-- Social Media -->
                <div class="flex space-x-4">
                    <a href="#" class="bg-gray-800 hover:bg-golden-primary hover:text-black p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="bg-gray-800 hover:bg-golden-primary hover:text-black p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="bg-gray-800 hover:bg-golden-primary hover:text-black p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://wa.me/94719090000" class="bg-gray-800 hover:bg-green-500 p-3 rounded-full transition-all duration-300 transform hover:scale-110">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h4 class="text-xl font-bold text-golden-primary mb-6">Quick Links</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="index.php" class="text-gray-300 hover:text-golden-primary transition-colors flex items-center group">
                            <i class="fas fa-chevron-right mr-2 text-xs group-hover:translate-x-1 transition-transform"></i>Home
                        </a>
                    </li>
                    <li>
                        <a href="services.php" class="text-gray-300 hover:text-golden-primary transition-colors flex items-center group">
                            <i class="fas fa-chevron-right mr-2 text-xs group-hover:translate-x-1 transition-transform"></i>Our Services
                        </a>
                    </li>
                    <li>
                        <a href="about.php" class="text-gray-300 hover:text-golden-primary transition-colors flex items-center group">
                            <i class="fas fa-chevron-right mr-2 text-xs group-hover:translate-x-1 transition-transform"></i>About Us
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" class="text-gray-300 hover:text-golden-primary transition-colors flex items-center group">
                            <i class="fas fa-chevron-right mr-2 text-xs group-hover:translate-x-1 transition-transform"></i>Contact Us
                        </a>
                    </li>
                </ul>
                
                <!-- Services -->
                <h5 class="text-lg font-semibold text-white mt-6 mb-3">Services</h5>
                <ul class="space-y-2 text-sm">
                    <li><a href="services.php#hair-services" class="text-gray-400 hover:text-golden-primary transition-colors">Hair Styling</a></li>
                    <li><a href="services.php#beauty-services" class="text-gray-400 hover:text-golden-primary transition-colors">Beauty Treatments</a></li>
                    <li><a href="services.php#grooming-services" class="text-gray-400 hover:text-golden-primary transition-colors">Men's Grooming</a></li>
                    <li><a href="services.php#special-services" class="text-gray-400 hover:text-golden-primary transition-colors">Bridal Packages</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h4 class="text-xl font-bold text-golden-primary mb-6">Contact Info</h4>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-map-marker-alt text-golden-primary mt-1"></i>
                        <div>
                            <p class="text-gray-300">Neo Salon</p>
                            <p class="text-gray-300">Main Street, Colombo</p>
                            <p class="text-gray-300">Sri Lanka</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-phone text-golden-primary"></i>
                        <div>
                            <a href="tel:+94719090000" class="text-gray-300 hover:text-golden-primary transition-colors">071 909 0000</a><br>
                            <a href="tel:+94755551045" class="text-gray-300 hover:text-golden-primary transition-colors">075 555 1045</a>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-envelope text-golden-primary"></i>
                        <a href="mailto:info@neosalon.lk" class="text-gray-300 hover:text-golden-primary transition-colors">info@neosalon.lk</a>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-clock text-golden-primary"></i>
                        <div>
                            <p class="text-gray-300">Monday - Sunday</p>
                            <p class="text-golden-primary font-semibold">9:00 AM - 8:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Newsletter Signup -->
        <div class="bg-golden-primary rounded-lg p-8 mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-center">
                <div>
                    <h4 class="text-2xl font-bold text-black mb-2 font-playfair">Stay Beautiful, Stay Connected!</h4>
                    <p class="text-black opacity-80">Subscribe for exclusive offers, beauty tips, and latest trends.</p>
                </div>
                <div>
                    <form id="newsletter-form" class="flex flex-col sm:flex-row gap-4">
                        <input type="email" placeholder="Enter your email" required
                               class="flex-1 px-4 py-3 bg-white text-black rounded focus:outline-none focus:ring-2 focus:ring-black">
                        <button type="submit" 
                                class="bg-black hover:bg-gray-800 text-golden-primary font-bold px-6 py-3 rounded transition-all duration-300">
                            <i class="fas fa-paper-plane mr-2"></i>Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Bottom Section -->
        <div class="border-t border-gray-800 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 mb-4 md:mb-0">
                    &copy; <?php echo date('Y'); ?> Neo Salon. All rights reserved.
                </p>
                
                <!-- Developer Credit -->
                <div class="text-center mb-4 md:mb-0">
                    <p class="text-gray-400 text-sm">
                        Designed & Developed with 
                        <i class="fas fa-heart text-red-500 mx-1"></i> 
                        by 
                        <a href="https://ceylonydigital.com" target="_blank" 
                           class="text-golden-primary hover:text-yellow-300 font-semibold transition-colors duration-300">
                            Ceylony Digital
                        </a>
                    </p>
                </div>
                
                <div class="flex space-x-6 text-sm">
                    <a href="#" class="text-gray-400 hover:text-golden-primary transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-golden-primary transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button id="back-to-top" class="fixed bottom-20 right-6 bg-golden-primary hover:bg-yellow-600 text-black p-3 rounded-full shadow-lg transform translate-y-16 transition-all duration-300 z-40">
    <i class="fas fa-arrow-up"></i>
</button>

<!-- Floating WhatsApp Button -->
<div class="fixed bottom-6 right-6 z-50">
    <a href="https://wa.me/94719090000" target="_blank" 
       class="bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg transform hover:scale-110 transition-all duration-300">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Back to top functionality
    const backToTopButton = document.getElementById('back-to-top');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.remove('translate-y-16');
        } else {
            backToTopButton.classList.add('translate-y-16');
        }
    });
    
    backToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Newsletter form
    const newsletterForm = document.getElementById('newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            if (email) {
                alert('Thank you for subscribing! We\'ll keep you updated with our latest offers.');
                this.querySelector('input[type="email"]').value = '';
            }
        });
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});
</script>

</body>
</html>