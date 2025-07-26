<?php
/**
 * Template Name: GiftCards Page
 */
get_header();
?>

<div class="giftcard-wrapper">
    <div class="giftcard-content-1">
        <!-- Gift Cards Hero Section -->
        <section class="giftcard-content-1-section pt-5 pb-3 text-dark animate__animated animate__bounceIn">
            <div class="giftcard-hero container text-center py-5">
                <h1 class="display-4 fw-bold mb-3">Give the Gift of Hatch</h1>
                <p class="fs-5">Perfect for birthdays, thank-yous, or just because - our gift cards are the ultimate treat.</p>                
                <button id="giftCardRedirectBtn" class="btn btn-warning btn-lg rounded-pill fw-bold mt-3 shadow animate__animated animate__bounceIn animate__delay-1s animate__faster">
                    🎁 Purchase a Gift Card
                </button>
            </div>
        </section>        
    </div>

    <div class="giftcard-content-2">
        <h2 class="text-center pb-5">How it Works!</h2>
        <div class="container pt-5">
            <div class="how-it-work-section row text-center py-5 gx-5 gy-5">
                <?php 
                $steps = [
                    ['img' => 'hiw1.png', 'title' => "Step 1: Click 'Purchase a Gift Card'", 'desc' => 'Crispy, golden, and unforgettable'],
                    ['img' => 'hiw2.png', 'title' => "Step 2: Choose Gift Type", 'desc' => 'Pick how you want to send your gift'],
                    ['img' => 'hiw3.png', 'title' => "Step 3: Add Personal Details", 'desc' => 'Add a message and choose your amount with love'],
                    ['img' => 'hiw4.png', 'title' => "Step 4: Check Out and Send", 'desc' => 'Review everything and complete your purchase. Done!']
                ];
                foreach ($steps as $index => $step): 
                    $marginStyle = ($index % 2 == 1) ? 'style="margin-top: -50px;"' : '';
                ?>
                    <div class="col-12 col-sm-6 col-md-3 d-flex justify-content-center mb-4">
                        <div class="gift-card-hiw text-center" <?php echo $marginStyle; ?>>
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/giftcard-page/<?php echo $step['img']; ?>" 
                                alt="Step" 
                                class="card-img-gift mb-3">
                            <h3 class="giftcard-h3"><?php echo $step['title']; ?></h3>
                            <p class="p-style"><?php echo $step['desc']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="giftcard-content-3">
        <section class="giftcard-section pt-3 pb-5 text-dark">
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
