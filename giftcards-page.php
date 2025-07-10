<?php
/**
 * Template Name: GiftCards Page
 */
get_header();?>


<div class="giftcard-wrapper">
  <div class="giftcard-content-1 pt-5">
    <div class="container px-4 py-5 text-center">
            <h1 class="fw-bold" style="color: #f9f9f9;">Give the Gift of Hatch</h1>
            <p class="lead mb-4" style="color: #f9f9f9;">
                Perfect for birthdays, thank-yous, or just because — our gift cards are the ultimate treat
            </p>
            <button class="btn btn-lg rounded-pill fw-bold mt-3 shadow animate__animated animate__bounceIn animate__delay-1s animate__faster" style="background-color:#f9f9f9; color:black;" data-bs-toggle="modal" data-bs-target="#giftCardModal">Purchase a Gift Card</button>
    </div>
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/style/crack11.png" class="img-fluid" alt="Image description">
  </div>

  <div class="giftcard-content-2">
    <h2 class="giftcard-h2 text-center pb-5">How it Works!</h2>
        <div class="container pt-5">
            <!-- Row 1 -->
            <div class="row text-center pt-5">
                <div class="col-3">
                    <div class="about-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/giftcard-page/hiw1.png" alt="Takeaway" class="rounded-pill card-img-about">
                        <h3 class="giftcard-h3">Step 1: Click 'Purchase a Gift Card'</h3>
                        <p class="giftcard-p">Crispy, golden, and unforgettable</p>
                    </div>
                </div>

                <div class="col-3">
                    <div class="about-card category-card text-center" style="margin-top: -50px;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/giftcard-page/hiw2.png" alt="Takeaway" class="rounded-pill card-img-about">
                        <h3 class="giftcard-h3">Step 2: Choose Gift Type</h3>
                        <p class="giftcard-p">Pick how you want to send your gift</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="about-card category-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/giftcard-page/hiw3.png" alt="Takeaway" class="rounded-pill card-img-about">
                        <h3 class="giftcard-h3">Step 3: Add Personal Details</h3>
                        <p class="giftcard-p">Add a message and choose your amount with love</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="about-card category-card text-center" style="margin-top: -50px;">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/giftcard-page/hiw4.png" alt="Takeaway" class="rounded-pill card-img-about">
                        <h3 class="giftcard-h3">Step 4: Check Out and Send</h3>
                        <p class="giftcard-p">Review everything and complete your purchase. Done!</p>
                    </div>
                </div>
            </div>
        </div>
  </div>

  <div class="giftcard-content-3">
    <section class="py-5 text-dark">
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

  <div class="giftcard-content-4">

  </div>

  <div class="giftcard-content-5">

  </div>

</div>





<!-- Animate.css CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Confetti Canvas -->
<canvas id="confetti-canvas" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 9999;"></canvas>

<!-- Confetti Script -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
<script>
  const giftModal = document.getElementById('giftCardModal');
  const confettiCanvas = document.getElementById('confetti-canvas');

  const myConfetti = confetti.create(confettiCanvas, {
    resize: true,
    useWorker: true,
  });

  // Burst & drizzle when modal opens
  giftModal.addEventListener('shown.bs.modal', () => {
    // Main burst
    myConfetti({
      particleCount: 80,
      spread: 100,
      origin: { y: 0.4 },
    });

    // Gentle drizzle effect
    const duration = 2000;
    const end = Date.now() + duration;

    (function frame() {
      myConfetti({
        particleCount: 5,
        startVelocity: 20,
        ticks: 200,
        spread: 60,
        origin: {
          x: Math.random(),
          y: 0
        }
      });

      if (Date.now() < end) {
        requestAnimationFrame(frame);
      }
    })();
  });
</script>

<?php get_footer(); ?>
