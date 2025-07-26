<footer class="footer-wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/style/crack9.png" class="img-fluid" alt="Image description">
    <div class="container">
         <!-- Sign Up Email -->
        <div class="container footer-signup-email text-center pt-2 pb-3 mt-n2">
            <h2 class="footer-h2 fs-3 fs-md-2 fs-lg-1 pb-2">Don’t Miss a Crumb!</h2>
            <p class="footer-p">Be the first to know about new flavours, specials, and Hatch news. Sign up for tasty updates!</p>
            <div class="footer-email-form">
                <input type="text" class="footer-emailbox" placeholder="Email Address:">
                <button class="footer-emailbutton" aria-label="Email box">Sign Up</button>
            </div>
        </div>

         <!-- Social Media Icons -->
        <div class="container text-center mb-4">
            <a href="https://www.instagram.com/hatch.perth/" target="_blank" rel="noopener" class="footer-icons me-3"><i class="fa-brands fa-instagram"></i></a>
            <p class="footer-p mb-2">Follow us on Instagram for sweet surprises 🍓</p>
        </div>

        <!-- Navigation Links -->
        <div class="footer-nav-links container text-center">
            <ul class="list-inline mb-0">
                <li class="list-inline-item mx-2"><a href="<?php echo site_url('/about'); ?>" class="text-white text-decoration-none">About Us</a></li>
                <li class="list-inline-item mx-2"><a href="<?php echo site_url('/menu'); ?>" class="text-white text-decoration-none">Menu</a></li>
                <li class="list-inline-item mx-2"><a href="<?php echo site_url('/gift-cards'); ?>" class="text-white text-decoration-none">Gift Cards</a></li>
                <li class="list-inline-item mx-2"><a href="<?php echo site_url('/membership'); ?>" class="text-white text-decoration-none">Membership</a></li>
                <li class="list-inline-item mx-2"><a href="<?php echo site_url('/contact'); ?>" class="text-white text-decoration-none">Contact Us</a></li>
            </ul>
        </div>

        <!-- Bottom -->
        <div class="text-center py-3 border-top border-secondary mt-3" style="color: #f9f9f9;">
            <small>&copy; 2025 Hatch Café. All rights reserved.</small>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
