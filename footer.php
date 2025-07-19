<footer class="footer-wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/style/crack9.png" class="img-fluid" alt="Image description">
    <div class="container">
         <!-- Sign Up Email -->
        <div class="container signup-email text-center pb-3">
            <h2 class="footer-h2 fs-3 fs-md-2 fs-lg-1 pb-2">Don’t Miss a Crumb!</h2>
            <p class="footer-p">Be the first to know about new flavours, specials, and Hatch news. Sign up for tasty updates!</p>
            <input type="text" class="emailbox" placeholder="Email Address:">
            <button class="emailbutton" aria-label="Email box">Sign Up</button>
        </div>

         <!-- Social Media Icons -->
        <div class="container text-center mb-4">
            <a href="#" class="icons me-3"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="icons me-3"><i class="fa-brands fa-tiktok"></i></a>
            <a href="#" class="icons me-3"><i class="fa-brands fa-facebook"></i></a>
        </div>

        <!-- Navigation Links -->
        <div class="container text-center">
            <ul class="list-inline mb-0">
                <li class="list-inline-item mx-2"><a href="#" class="text-white text-decoration-none">About Us</a></li>
                <li class="list-inline-item mx-2"><a href="#" class="text-white text-decoration-none">Menu</a></li>
                <li class="list-inline-item mx-2"><a href="#" class="text-white text-decoration-none">Membership</a></li>
                <li class="list-inline-item mx-2"><a href="#" class="text-white text-decoration-none">Gift Card</a></li>
                <li class="list-inline-item mx-2"><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
            </ul>
        </div>

        <!-- Bottom -->
        <div class="text-center py-3 border-top border-secondary mt-3" style="color: #f9f9f9;">
            <small>&copy; 2025 Hatch Café. All rights reserved.</small>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<!-- Bootstrap JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>

<!-- Preloader Script -->
<script>
    window.addEventListener("load", function () {
        const preloader = document.getElementById("preloader");
        const header = document.querySelector('.animated-header');

        setTimeout(() => {
            preloader.style.opacity = "0";
            preloader.style.pointerEvents = "none";

            setTimeout(() => {
                preloader.style.display = "none";
                header.classList.add('start');
            }, 500);
        }, 1500);
    });
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Swiper Init -->
<script>
    const FlavourSlider = new Swiper('.tranding-slider', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        loop: false,
        slidesPerView: 'auto',
        initialSlide: 1,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 1.5,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        }
    });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const egg = document.getElementById('crackEgg');
    const targetURL = "https://www.hatchcafe.com.au/s/order";

    egg.addEventListener('click', function () {
      egg.classList.add('egg-cracked');
      const newTab = window.open('', '_blank');
      setTimeout(() => {
        if (newTab) {
          newTab.location.href = targetURL;
        }
      }, 1200);
    });
  });
</script>

</body>
</html>
