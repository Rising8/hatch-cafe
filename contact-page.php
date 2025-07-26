<?php
/**
 * Template Name: Contact Page
 */
get_header();
?>

<div class="contact-wrapper py-5">

    <div class="container">
        <!-- Hero Section -->
        <div class="text-center py-5">
            <h1 class="display-4 fw-bold text-dark">Hatch-ing a Plan to Visit?</h1>
            <p class="fs-5">Hidden down the laneway, Hatch is your sweet little escape. Got questions, collab ideas, or just want to say hi? Reach out we’re all ears.</p>
        </div>

        <div class="row g-5">
            <!-- Left Column -->
            <div class="col-lg-6">
                <!-- Info Boxes -->
                <div class="row g-3 mb-4">
                    <div class="col-md-4 col-12">
                        <div class="contact-info-boxes p-4 rounded shadow text-center h-100">
                            <i class="fa-solid fa-phone fs-4 mb-2 text-warning"></i>
                            <h6 class="fw-bold">Phone</h6>
                            <p class="mb-0">+61 493 346 288</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="contact-info-boxes p-4 rounded shadow text-center h-100">
                            <i class="fa-solid fa-envelope fs-4 mb-2 text-warning"></i>
                            <h6 class="fw-bold">Email</h6>
                            <p class="mb-0">hatchawaffleegg<br>@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="contact-info-boxes p-4 rounded shadow text-center h-100">
                            <i class="fa-solid fa-location-dot fs-4 mb-2 text-warning"></i>
                            <h6 class="fw-bold">Our Shop</h6>
                            <p class="mb-0">189 William Street,<br>Northbridge, WA 6003</p>
                        </div>
                    </div>
                </div>

                <!-- Map -->                
                <h5 class="fw-bold text-center mb-2">📍 Find Us!</h5>
                <div class="ratio ratio-16x9 rounded overflow-hidden shadow">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423.1829216736262!2d115.85627945210244!3d-31.948323616478945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32bad15d0ece61%3A0x1af6955b617a572f!2sShop%209%2F189%20William%20St%2C%20Northbridge%20WA%206003!5e0!3m2!1sen!2sau!4v1751790998782!5m2!1sen!2sau" 
                        class="contact-map-iframe position-absolute top-0 start-0 w-100 h-100"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <!-- Hours -->
                <h5 class="fw-bold text-center pt-3 mb-3">⏰ Opening Hours</h5>
                <div class="row text-center contact-opening-hours mb-3">
                    <div class="col-6">Mon-Sat: 4:00–10:00 pm</div>
                    <div class="col-6">Sunday: <strong>Closed</strong></div>
                </div>
            </div>

            <!-- Right Column (Form) -->
            <div class="col-lg-6">
                <div class="contact-form-card p-5 rounded-5 shadow-sm">
                    <h2 class="fw-bold text-center mb-2">📬 Drop Us a Yolk!</h2>
                    <p class="text-center text-muted mb-4">Lost? Curious? Craving waffles? Send us a message and we’ll get crackin’ 🍳</p>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Let us know what's on your mind..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="inquiry-type" class="form-label">What’s this about?</label>
                            <select class="form-select" id="inquiry-type">
                                <option selected disabled>Select one</option>
                                <option>Question</option>
                                <option>Collab Idea</option>
                                <option>Feedback</option>
                                <option>Lost in the alley 😅</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-warning px-5 py-2 fw-bold rounded-pill shadow-sm">Send ✨</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>