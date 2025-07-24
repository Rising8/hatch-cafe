<?php
/**
 * Template Name: GiftCards Page
 */
get_header();
?>

<div class="giftcard-wrapper">
    <div class="giftcard-content-1">
        <!-- Gift Cards Hero Section -->
        <section class="giftcard-hero-section pt-5 pb-3 text-dark animate__animated animate__bounceIn">
            <div class="giftcard-hero container text-center py-5">
                <h1 class="display-4 fw-bold mb-3">Give the Gift of Hatch</h1>
                <p class="lead">Perfect for birthdays, thank-yous, or just because - our gift cards are the ultimate treat.</p>                
                <button id="giftCardRedirectBtn" class="btn btn-warning btn-lg rounded-pill fw-bold mt-3 shadow animate__animated animate__bounceIn animate__delay-1s animate__faster">
                    🎁 Purchase a Gift Card
                </button>
            </div>
        </section>        
    </div>

    <div class="giftcard-content-2">
        <section class="gift-how-section pt-3 pb-4">
            <!-- How It Works -->
            <div class="container text-center">
                <h2 class="fw-bold mb-2">How It Works!</h2>
                <div class="row justify-content-center g-4">
                    <!-- Steps -->
                    <?php 
                    $steps = [
                        ['img' => 'hiw1.png', 'title' => "Step 1: Click 'Purchase a Gift Card'", 'desc' => 'Start the journey by clicking the big yellow button above.'],
                        ['img' => 'hiw2.png', 'title' => "Step 2: Redirect to Square", 'desc' => 'You\'ll be redirected to our secure Square site to continue your purchase.'],
                        ['img' => 'hiw3.png', 'title' => "Step 3: Personalize", 'desc' => 'Add a message, select the amount, and choose who to send it to.'],
                        ['img' => 'hiw4.png', 'title' => "Step 4: Send or Pick Up", 'desc' => 'Send your personalized gift card instantly via email or SMS. Done!']
                    ];
                    foreach ($steps as $index => $step): 
                        $staggerClass = ($index % 2 == 1) ? 'step-down' : '';
                    ?>
                        <div class="col-12 col-sm-6 col-md-3 pt-5 d-flex justify-content-center">
                            <div class="hiw-step shadow <?php echo $staggerClass; ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/giftcard-page/<?php echo $step['img']; ?>" 
                                    alt="Step" 
                                    class="rounded-circle mb-3">
                                <h3 class="fw-bold" style="font-size: 0.95rem;"><?php echo $step['title']; ?></h6>
                                <p class="text-muted" style="font-size: 0.85rem;"><?php echo $step['desc']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>

    <div class="giftcard-content-3">
        <section class="gift-faq-section pt-3 pb-5 text-dark">
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
