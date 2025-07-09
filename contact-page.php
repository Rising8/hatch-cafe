<?php
/**
 * Template Name: Contact Page
 */
get_header();
?>

<div class="contact-wrapper">
    <div class="contact-content-1">
        <section class="contact-section-1 py-5 text-dark">
            <!-- Hero -->
            <div class="contact-hero container text-center mb-5 mt-5">
                <h1 class="display-4 fw-bold mb-3">Contact Hatch Cafe</h1>
                <p class="lead">We'd love to hear from you - whether it's an order, catering request or just waffle talk.</p>
            </div>
            
            <!-- Map and Contact Information -->
            <div class="container d-flex flex-column flex-lg-row justify-content-center align-items-stretch gap-4 mb-5">
                
                <!-- Map -->
                <div class="contact-map position-relative rounded overflow-hidden shadow w-100 w-lg-66">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423.1829216736262!2d115.85627945210244!3d-31.948323616478945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32bad15d0ece61%3A0x1af6955b617a572f!2sShop%209%2F189%20William%20St%2C%20Northbridge%20WA%206003!5e0!3m2!1sen!2sau!4v1751790998782!5m2!1sen!2sau" 
                        class="contact-map-iframe position-absolute top-0 start-0 w-100 h-100"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <!-- Contact Info -->
                <div class="contact-info position-relative rounded overflow-hidden shadow w-100 w-lg-33 d-flex flex-column justify-content-center px-4">
                    <div class="text-center">
                        <h4 class="fw-bold mb-2">📍 Visit Us</h4>
                        <p class="mb-3">Shop 9/189 William St<br>Northbridge WA 6003</p>
        
                        <p class="text-muted small mb-4">
                            We’re tucked away behind <strong>Lord of the Fries</strong> — in a cozy alley. Look for the sign and follow the aroma. 🥚✨
                        </p>
        
                        <h4 class="fw-bold mb-2">⏰ Opening Hours</h4>
                        <p class="mb-0">Mon–Sat: 4PM – 10PM</p>
                        <p class="mb-4">Sun: Closed</p>

                        <h4 class="fw-bold mb-2">📞 Contact</h4>
                        <p>
                            <strong>Phone:</strong> +(61) 493 346 288<br>
                            <!-- CHANGE THIS HREF MAIL LATER -->
                            <strong>Email:</strong> <a href="mailto:hello@hatchperth.com" class="text-decoration-none">hatchawaffleegg@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="contact-content-2">
        <section class="contact-form py-5">
            <div class="container px-4 px-md-5">
                <div class="contact-form-card rounded-4 shadow p-5 mx-auto">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold text-dark">📬 Send Us a Message <span class="frying-egg">🍳</span></h2>
                        <p class="text-muted">Got a question or craving? Slide into our inbox.</p>
                    </div>

                    <form method="post" action="#">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Your Name</label>
                            <input type="text" name="name" class="form-control form-control-lg rounded-3 border-0 shadow-sm" placeholder="Sean Hong" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Your Email</label>
                            <input type="email" name="email" class="form-control form-control-lg rounded-3 border-0 shadow-sm" placeholder="you@example.com" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">Your Message</label>
                            <textarea name="message" rows="5" class="form-control form-control-lg rounded-3 border-0 shadow-sm" placeholder="Let us know what’s on your mind…" required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-warning px-5 py-2 fw-bold rounded-pill shadow">Send ✨</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>