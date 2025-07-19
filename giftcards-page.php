<?php
/**
 * Template Name: GiftCards Page
 */
get_header();
?>

<div class="giftcard-wrapper">
    <div class="giftcard-content-1">
        <!-- Gift Cards Hero Section -->
        <section class="giftcard-hero-section py-5 text-dark animate__animated animate__bounceIn">
            <div class="giftcard-hero container text-center py-5">
                <h1 class="display-4 fw-bold mb-3">Give the Gift of Hatch</h1>
                <p class="lead">Perfect for birthdays, thank-yous, or just because - our gift cards are the ultimate treat. 🧇✨</p>                
                <button class="btn btn-warning btn-lg rounded-pill fw-bold mt-3 shadow animate__animated animate__bounceIn animate__delay-1s animate__faster" data-bs-toggle="modal" data-bs-target="#giftCardModal">🎁 Purchase a Gift Card</button>
            </div>
        </section>

        <!-- Gift Card Modal -->
        <div class="modal fade" id="giftCardModal" tabindex="-1" aria-labelledby="giftCardModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content gift-modal-content rounded-4 border-0 animate__animated animate__fadeInDown animate__faster">
                    <div class="modal-header border-0">
                        <h5 class="modal-title fw-bold" id="giftCardModalLabel">🎁 Choose a Gift Card Option</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-md-8 mx-auto">
                                <div class="giftcard-option bg-white rounded-4 shadow-sm p-4 h-100 text-center border">
                                    <h3 class="fw-bold mb-2">🎫 E-Gift Card</h3>
                                    <p>Instant delivery via email — perfect for last-minute surprises! Customize your amount and message.</p>
                                    <a href="https://www.hatchcafe.com.au/s/gift-cards" target="_blank" class="btn btn-outline-warning rounded-pill fw-bold mt-2">Buy E-Gift Card</a>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="giftcard-content-2">
        <section class="gift-how-section py-5 text-dark">
            <!-- How It Works -->
            <div class="container text-center">
                <h2 class="fw-bold mb-4">How It Works</h2>
                <div class="row g-4">
                    <!-- Step 1 -->
                    <div class="col-md-3">
                        <div class="p-4 rounded-4 shadow-sm bg-white h-100 hover-shadow transition">
                            <div class="display-6 mb-2">🛒</div>
                            <h6 class="fw-bold">Step 1: Click 'Purchase a Gift Card'</h6>
                            <p class="text-muted">Start the journey by clicking the big yellow button above.</p>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="col-md-3">
                        <div class="p-4 rounded-4 shadow-sm bg-white h-100 hover-shadow transition">
                            <div class="display-6 mb-2">🔗</div>
                            <h6 class="fw-bold">Step 2: Redirect to Square</h6>
                            <p class="text-muted">You'll be redirected to our secure Square site to continue your purchase.</p>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="col-md-3">
                        <div class="p-4 rounded-4 shadow-sm bg-white h-100 hover-shadow transition">
                            <div class="display-6 mb-2">💌</div>
                            <h6 class="fw-bold">Step 3: Personalize</h6>
                            <p class="text-muted">Add a message, select the amount, and choose who to send it to.</p>
                        </div>
                    </div>
                    <!-- Step 4 -->
                    <div class="col-md-3">
                        <div class="p-4 rounded-4 shadow-sm bg-white h-100 hover-shadow transition">
                            <div class="display-6 mb-2">📬</div>
                            <h6 class="fw-bold">Step 4: Send or Pick Up</h6>
                            <p class="text-muted">Send your personalized gift card instantly via email or SMS. Done!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="giftcard-content-3">
        <section class="gift-faq-section py-5 text-dark">
            <!-- FAQ -->
            <div class="container">
                <h2 class="fw-bold text-center mb-4">FAQs</h2>
                <div class="accordion" id="giftCardFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                Can I use the gift card online and in-store?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#giftCardFAQ">
                            <div class="accordion-body">
                                Yes! Hatch gift cards are redeemable online and in-store.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                Do the gift cards expire?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#giftCardFAQ">
                            <div class="accordion-body">
                                Nope! They’re valid forever — just like your love for waffles.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Confetti Canvas -->
<canvas id="confetti-canvas"></canvas>

<?php get_footer(); ?>
