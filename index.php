<?php get_header(); ?>

<main>
    <!-- <div id="preloader">
        <div class="loader-text">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-wb.png" alt="Hatch Logo" style="width: 60%;" class="logo-animation">
                <p class="loading-caption mt-5">Loading your eggcitement...</p>
            </div>
        </div>
    </div>
     -->
    <div class="index-wrapper">

        <!-- Carousel Hero Section -->
        <?php
        $slides = [
            ['img' => 'slide1.jpeg', 'alt' => 'Slide 1', 'caption' => "Follow the scent of warm waffles and you’ll find us at your secret hideout<br>from the city buzz. Cozy, charming, and always freshly hatched."],
            ['img' => 'slide2.jpeg', 'alt' => 'Slide 2', 'caption' => "Follow the scent of warm waffles and you’ll find us at your secret hideout<br>from the city buzz. Cozy, charming, and always freshly hatched."],
            ['img' => 'slide3.jpeg', 'alt' => 'Slide 3', 'caption' => "Follow the scent of warm waffles and you’ll find us at your secret hideout<br>from the city buzz. Cozy, charming, and always freshly hatched."]
        ];
        ?>

        <div class="index-content-1">
            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                    <?php foreach ($slides as $index => $slide): ?>
                    <div class="carousel-item index-carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <picture>
                            <source 
                                media="(max-width: 600px)" 
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/mobile-<?= $slide['img']; ?>">
                            
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/<?= $slide['img']; ?>" 
                                class="w-100 img-fluid" 
                                alt="<?= htmlspecialchars($slide['alt']) ?>">
                        </picture>

                        <div class="carousel-caption blur-box text-start">
                            <h1 class="index-hero-h text-start">
                                <span class="index-carousel-word1">ARTISAN</span><br>
                                <span class="index-carousel-word2">WAFFLE EGG</span><br>
                                <span class="index-carousel-word2">COFFEE BAR</span>
                            </h1>
                            <p class="index-hero-p py-3 fs-5 sentenceTyping">
                                <?= $slide['caption'] ?>
                            </p>
                            <div class="button1 pt-2">
                                <a href="<?php echo site_url('/menu'); ?>"
                                rel="noopener noreferrer"
                                class="index-hero-order btn btn-lg rounded-pill px-5 py-3 fs-5 pulse">
                                    Explore Menu
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                </div>
            </div>
        </div>

        <!-- How Do You Want It Section -->
        <div class="index-content-2 pt-5">
            <div class="text-center">
                <h2 class="index-menus-h2">How Do You Want It?</h2>
                <div class="index-category-section d-flex flex-wrap justify-content-center gap-5 my-2">
                    <div class="index-category-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="Takeaway" class="index-card-img" width="50">
                        <h3 class="index-menus-h3 mt-3">Eggchi to Go</h3>
                        <p class="index-menus-p">Freshly made egg waffles and drinks ready whenever you are.</p>
                        <a href="<?php echo site_url('/menu'); ?>#eggchi" class="index-menus-btn btn rounded-pill mt-2">Order Now</a>
                    </div>

                    <div class="index-category-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="Party Pack" class="index-card-img" width="50">
                        <h3 class="index-menus-h3 mt-3">Party Pack Joy</h3>
                        <p class="index-menus-p">Perfect for birthdays and gatherings. Waffle happiness in a box!</p>
                        <a href="<?php echo site_url('/menu'); ?>#special-bundle" class="index-menus-btn btn rounded-pill mt-2">View Options</a>
                    </div>

                    <div class="index-category-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="Cakes" class="index-card-img" width="50">
                        <h3 class="index-menus-h3 mt-3">Handcrafted Cakes</h3>
                        <p class="index-menus-p">Golden waffle cakes and sweets beautiful and delicious.</p>
                        <a href="<?php echo site_url('/menu'); ?>#eggchi-cakes" class="index-menus-btn btn rounded-pill mt-2">Explore Cakes</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gift Card Section -->
        <div class="container">
        <div class="index-content-3 p-3 rounded-5 mt-5">
            <div class="index-giftcard row flex-column flex-md-row align-items-center">
                <!-- Image on top on mobile -->
                <div class="col-12 col-md-5 text-center mb-3 mb-md-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/giftcard-picture.png" alt="Gift Card" class="img-fluid index-gift-image">
                </div>
                <!-- Text and Button -->
                <div class="col-12 col-md-7 text-center text-md-start pb-5">
                    <div class="container">
                        <h1 class="animated-header">
                            <span class="index-giftcard-word1">Crack </span>
                            <span class="index-giftcard-word2">A Smile</span>
                        </h1>
                        <p class="py-1 index-giftcard-p" id="sentenceTyping" style="color:#f9f9f9;">
                            Surprise your loved ones with our delicious waffle gift cards perfect for any occasion!  
                            Easy to buy, fun to share, and full of sweet moments.
                        </p>
                        <div class="button1 pt-1">
                            <a href="<?php echo site_url('/gift-cards'); ?>" 
                                class="btn btn-lg rounded-pill px-5 py-3 fs-5 pulse" 
                                style="background: linear-gradient(135deg, #C7A678, #B88A54, #B18149); color: white; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3); box-shadow: 0 4px 10px rgba(177, 129, 73, 0.4); transition: transform 0.2s ease, box-shadow 0.2s ease;" 
                                type="button">
                                Gift Card
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


       <!-- Membership Section -->
        <div class="index-content-4 pt-5">
            <div class="container">
                <div class="index-membership text-white p-3 rounded-5">
                    <div class="px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 px-4">
                            <h3 class="index-header-signup">
                                <span class="index-membership-word1">Eggclusive </span><br>
                                <span class="index-membership-word2">Club</span>
                            </h3>
                            <div class="text-center index-sign-up">
                                <p class="fw-semibold fs-5">Hatch to Sign Up!</p>
                                    
                                <!-- small egg button -->
                                <div class="index-membership-egg" id="crackEgg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animation-egg/top.png" alt="Top Egg" class="index-egg-img index-egg-top">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animation-egg/bottom.png" alt="Bottom Egg" class="index-egg-img index-egg-bottom">
                                </div>
                            </div>
                        </div>
                        <p class="index-membership-p fs-5 text-center" style="width: 70%; margin:0 auto;">
                        Join our Eggclusive Club today and unlock sweet surprises!  
                        Be the first to taste new flavors, score sweet discounts, and crack open exclusive goodies made just for Hatchers.
                        </p>
                        <div class="d-flex justify-content-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/membership-picture.jpeg" alt="Waffle Club" class="index-membership-img img-fluid my-3 rounded-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="container">
        <div class="index-content-5 pt-5">
            <div class="map-animation container p-5 rounded-3">
                <div class="row">
                    <!-- Text Column: shown first on mobile -->
                    <div class="col-12 col-md-6 order-1 order-md-1">
                        <div class="container">
                        <h1 class="text-start animated-header">
                            <span class="index-map-word1">Find </span>
                            <span class="index-map-word2">Your Way</span><br>
                            <span class="index-map-word3">To Hatch!</span>
                        </h1>
                        <p class="index-map-p text-start mx-auto py-3 fs-5" id="sentenceTyping">
                            Find Hatch tucked away like a secret treasure down a cozy alley. Once you discover our spot, you’ll be rewarded with warm smiles, delicious egg waffles, and a unique vibe that’s worth the adventure. Come explore the hidden side of Hatch!
                        </p>
                        </div>
                    </div>

                    <!-- Map Column: shown second on mobile -->
                    <div class="col-12 col-md-6 order-2 order-md-2 justify-content-center">
                        <div class="index-map-wrapper position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map-animation/map-hatch.png" alt="Map" class="map-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map-animation/egg.png" alt="Egg Pin" class="egg-pin">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Contact Section -->
        <div class="index-content-6 pb-5 mt-5">
            <div class="container">
                <div class="position-relative p-5 text-center text-muted">
                    <h2 class="text-body-emphasis">Need a Hand? We're Here to Help!</h2>
                    <p class="col-lg-6 mx-auto mb-4 fs-5">
                        Whether you're planning a party, curious about our flavours, or just have a question we're only a click away. Get in touch and we’ll crack it together!
                    </p>
                    <div class="button1 pt-3">
                        <a href="<?php echo site_url('/contact'); ?>" 
                            class="btn btn-lg rounded-pill px-5 py-3 fs-5 pulse" 
                            style="background: linear-gradient(135deg, #C7A678, #B88A54, #B18149); color: white; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3); box-shadow: 0 4px 10px rgba(177, 129, 73, 0.4); transition: transform 0.2s ease, box-shadow 0.2s ease;" 
                            type="button">
                            Contact Us
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>