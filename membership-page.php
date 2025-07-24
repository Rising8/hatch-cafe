<?php
/**
 * Template Name: Membership Page
 */
get_header();
?>

<div class="membership-wrapper text-dark">
    <!-- Hero Section -->
    <div class="membership-content-1 py-5 text-center hero-gradient position-relative">
        <div class="container position-relative z-2">
            <div class="membership-hero-spacer"></div>
            <h1 class="display-4 fw-bold mb-3 text-shadow">
                Join the <span class="text-warning">Eggclusive</span> Club 🍳
            </h1>

            <!-- Floating Eggs -->
            <div class="position-relative d-inline-block mx-auto" style="max-width: 700px;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/membership/golden-egg.jpg"
                    alt="Golden Egg Left"
                    class="floating-egg golden-egg-left d-none d-md-block position-absolute"> 
                <p class="lead text-shadow mb-0 px-5">
                    Get surprise rewards, sneak peeks of new flavours, and a chance to win a FREE egg waffle just for being a member.
                </p>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/membership/golden-egg.jpg"
                    alt="Golden Egg Right"
                    class="floating-egg golden-egg-right d-none d-md-block position-absolute">
            </div>

            <!-- Egg Crack Animation -->
            <div class="my-4">
                <p class="fw-bold fs-5 text-shadow tracking-wide text-danger-emphasis" style="letter-spacing: 1px;">
                    Tap to crack... something sweet might hatch 🐣
                </p>
                <!-- Egg Animation Trigger -->
                <div class="egg-wrapper-page position-relative" id="crackEggMemberPage" style="cursor: pointer;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animation-egg/top.png" alt="Top Egg" class="egg-part egg-top">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animation-egg/bottom.png" alt="Bottom Egg" class="egg-part egg-bottom">
                    <div class="sprinkles" id="sprinkles"></div>
                </div>
            </div>

            <div class="alert alert-light border mt-3 mx-auto" style="max-width: 420px">
                <strong>Note:</strong> After clicking the egg, on the square page, tap the <strong>👤 profile icon</strong> to sign up!
            </div>
        </div>

        <!-- Animated Badge -->
        <div class="animated-badge position-absolute start-50 translate-middle-x mt-5 glow" id="badgeAnchor">
            <span class="badge rounded-pill bg-danger-subtle text-danger-emphasis fs-6 fw-bold pulse">Top Fan Reward System!</span>
        </div>
    </div>

    <!-- How It Works Section -->
    <div class="membership-content-2 py-5 how-gradient text-white">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">How It Works</h2>
            <div class="row justify-content-center gx-5">
                <!-- Step 1 -->
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <div class="how-step p-4 rounded-4 shadow-lg text-center h-100">
                        <div class="icon-circle mb-3">🥚</div>
                        <h5 class="fw-bold mb-2">1. Tap the Egg</h5>
                        <p>Click or tap the egg above to start your journey with us and open the Square portal.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <div class="how-step p-4 rounded-4 shadow-lg text-center h-100">
                        <div class="icon-circle mb-3">👤</div>
                        <h5 class="fw-bold mb-2">2. Create Your Account</h5>
                        <p>Tap the <strong>👤 profile icon</strong> on the top right, then enter your email to sign up.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="col-12 col-md-4">
                    <div class="how-step p-4 rounded-4 shadow-lg text-center h-100">
                        <div class="icon-circle mb-3">🏱</div>
                        <h5 class="fw-bold mb-2">3. Enjoy Membership Perks</h5>
                        <p>You're in! Get loyalty rewards, surprise drops & more sweet goodies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Perks Section -->
    <div class="membership-content-3 py-5 perks-gradient text-white">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Your Hatch Perks</h2>
            <div class="row g-4 justify-content-center">
                <?php
                $perks = [
                ['🥚', 'Free Birthday Waffle'],
                ['🍰', 'Surprise Flavour Drops'],
                ['💲', 'Exclusive Member Discounts'],
                ['🌟', 'Loyalty Rewards'],
                ];
                foreach ($perks as $perk) :
                ?>
                    <div class="col-6 col-md-3">
                        <div class="perk-card bg-white text-dark p-4 rounded-4 shadow-sm h-100 text-center transition">
                            <div class="fs-1"><?php echo $perk[0]; ?></div>
                            <h6 class="fw-semibold mt-3"><?php echo $perk[1]; ?></h6>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="membership-content-4 py-5 faq-gradient bg-white">
        <div class="container" style="max-width: 800px">
            <h4 class="fw-bold text-center mb-4">Frequently Asked Questions</h4>
            <div class="accordion" id="membershipFAQ">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq1-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Do I need an app to join?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#membershipFAQ">
                        <div class="accordion-body">Nope! Just tap the egg and sign up in your browser.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq2-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            How much does it cost?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#membershipFAQ">
                        <div class="accordion-body">$10 with exclusive rewards! 🥚</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq3-heading">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            What if I don’t like it?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#membershipFAQ">
                        <div class="accordion-body">You can leave anytime. But you won’t want to — we’re that good 🥰</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOMO (Fear Of Missing Out) CTA Button -->
    <div class="bg-warning-subtle py-5 text-center">
        <div class="container">
            <h2 class="fw-bold mb-3">Still Not Signed Up?</h2>
            <p class="lead">We saved you a warm spot. Treats, smiles, and eggstra love await 🧇</p>
            <a href="https://www.hatchcafe.com.au/s/order" target="_blank" class="btn btn-dark btn-lg rounded-pill px-5 mt-3">
                🔑 Unlock Eggclusive Access
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>