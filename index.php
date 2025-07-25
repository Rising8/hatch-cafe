<?php get_header(); ?>

<main>
    <div class="index-wrapper">

        <!-- Content 1 -->
        <div class="content-1">
            <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/slide1.jpeg" class="w-100 img-fluid" alt="Slide 1">
                        <!-- Content overlay -->
                        <div class="carousel-caption d-none d-md-block text-start">
                            <h1 class="vertical-text hero-h text-start">
                                <span class="word-1">Your Hidden</span><br>
                                <span class="word-2">Hatchaway</span>
                            </h1>
                            <p class="hero-p py-3 fs-5" id="sentenceTyping">
                            Follow the scent of warm waffles and you’ll find us your secret hideout from the city buzz. Cozy, charming, and always freshly hatched.
                            </p>
                            <div class="button1 pt-2">
                            <a href="https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="index-hero-order btn btn-lg rounded-pill px-5 py-3 fs-5 pulse">
                                Order Now
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/slide2.jpeg" class="d-block w-100" alt="Slide 2">
                        <!-- Content overlay -->
                        <div class="carousel-caption blur-box d-none d-md-block text-start">
                            <h1 class="vertical-text hero-h text-start">
                                <span class="word-1">Your Hidden</span><br>
                                <span class="word-2">Hatchaway</span>
                            </h1>
                            <p class="hero-p py-3 fs-5" id="sentenceTyping">
                                Follow the scent of warm waffles and you’ll find us your secret hideout from the city buzz. Cozy, charming, and always freshly hatched.
                            </p>
                            <div class="button1 pt-2">
                            <a href="https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="index-hero-order btn btn-lg rounded-pill px-5 py-3 fs-5 pulse">
                                Order Now
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/slide3.jpeg" class="d-block w-100" alt="Slide 3">
                        <!-- Content overlay -->
                        <div class="carousel-caption blur-box d-none d-md-block text-start">
                            <h1 class="vertical-text hero-h text-start">
                                <span class="word-1">Your Hidden</span><br>
                                <span class="word-2">Hatchaway</span>
                            </h1>
                            <p class="hero-p py-3 fs-5" id="sentenceTyping">
                                Follow the scent of warm waffles and you’ll find us your secret hideout from the city buzz. Cozy, charming, and always freshly hatched.
                            </p>
                            <div class="button1 pt-2">
                            <a href="https://www.hatchcafe.com.au/s/order/XWMYTQVSRX6DPNPZWDYIAHL5?location=11f0192a377f200dbfc53cecef6d5b2a"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="index-hero-order btn btn-lg rounded-pill px-5 py-3 fs-5 pulse">
                                Order Now
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Optional controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <!-- <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span> -->
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <!-- <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span> -->
               </button>
            </div>
        </div>

        <!-- Content 2 -->
        <div class="content-2 pt-5">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/style/crack1.png" class="img-fluid" alt="Image description"> -->
            <div class="text-center">
                <h2 class="menus-h2">How Do You Want It?</h2>
                <div class="category-section d-flex flex-wrap justify-content-center gap-5 my-2">
                    <div class="category-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="Takeaway" class="card-img-categories " width="50">
                        <h3 class="menus-h3 mt-3">Grab & Go Goodness</h3>
                        <p class="menus-p p-style">Freshly made egg waffles and drinks ready when you are.</p>
                        <a href="<?php echo site_url('/menu'); ?>#eggchi" class="menus-btn btn rounded-pill mt-2">Order Now</a>
                    </div>

                    <div class="category-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="Party Pack" class="card-img-categories" width="50">
                        <h3 class="menus-h3 mt-3">Party Pack Joy</h3>
                        <p class="menus-p p-style">Perfect for birthdays and gatherings. Waffle happiness in a box!</p>
                        <a href="<?php echo site_url('/menu'); ?>#special-bundle" class="menus-btn btn rounded-pill mt-2">View Options</a>
                    </div>

                    <div class="category-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="Cakes" class="card-img-categories" width="50">
                        <h3 class="menus-h3 mt-3">Handcrafted Cakes</h3>
                        <p class="menus-p p-style">Golden waffle cakes and sweets beautiful and delicious.</p>
                        <a href="https://www.hatchcafe.com.au/s/order/F252CY6EXPK6ZFBYLICOCEY7?location=11f0192a377f200dbfc53cecef6d5b2a" target="_blank" class="menus-btn btn rounded-pill mt-2">Explore Cakes</a>
                    </div>
                </div>
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/style/crack2.png" class="img-fluid" alt="Image description"> -->
            </div>
        </div>

        <!-- Content 3 -->
        <div class="container content-3 p-3 rounded-5 mt-5">
                <div class="row giftcard">
                    <div class="col-md-5">
                        <div class="gift-wrapper position-relative text-center">
                            <!-- map image -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/giftcard-picture.png" alt="Map" class="gift-image">
                        </div>
                    </div>
                    <div class="col-md-7 justify-content-center">
                        <div class="container">
                            <h1 class=" text-start animated-header">
                                <span class="word1a">Crack </span>
                                <span class="word1">A Smile</span>
                                <!-- <span class="word2">To Hatch!</span> -->
                            </h1>
                            <p class="text-start mx-auto py-1 p-style" id="sentenceTyping" style="color:#f9f9f9;">
                               Surprise your loved ones with our delicious waffle gift cards perfect for any occasion!  
                               Easy to buy, fun to share, and full of sweet moments.
                            </p>
                            <div class="button1 pt-1">
                            <a href="<?php echo site_url('/gift-cards'); ?>" 
                                class="btn btn-lg rounded-pill px-5 py-3 fs-5 pulse" 
                                style="background: linear-gradient(135deg, #C7A678, #B88A54, #B18149); color: white; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3); box-shadow: 0 4px 10px rgba(177, 129, 73, 0.4); transition: transform 0.2s ease, box-shadow 0.2s ease;" 
                                type="button">
                                Gift Card
                                </button>
                            </a>
                    </div>
                        </div>
                    </div>
                </div>

        </div>

       <!-- Content 4 -->
        <div class="content-4 pt-5">
            <div class="container">
                <!-- <div class="row g-0"> -->
                    <div class="membership text-white p-3 rounded-5">
                        <div class="px-3 py-4">
                            <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 px-4">
                                <h3 class=" h-signup">
                                    <span class="membership-word1a">Eggclusive </span><br>
                                    <span class="membership-word2">Club</span>
                                </h3>
                                <div class="text-center sign-up">
                                    <p class="fw-semibold fs-5">Hatch to Sign Up!</p>
                                    
                                    <!-- small egg button -->
                                    <div class="egg-wrapper" id="crackEgg">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animation-egg/top.png" alt="Top Egg" class="egg-part egg-top">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animation-egg/bottom.png" alt="Bottom Egg" class="egg-part egg-bottom">
                                    </div>
                                </div>
                            </div>
                            <p class="fs-5 text-center" style="width: 70%; margin:0 auto;">
                            Join our Eggclusive Club today and unlock sweet surprises!  
                            Be the first to taste new flavors, score sweet discounts, and crack open exclusive goodies made just for Hatchers.
                            </p>
                            <div class="d-flex justify-content-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/membership-picture.jpeg" alt="Waffle Club" class="waffle-img img-fluid my-3 rounded-3">
                            </div>

                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>

        <!-- Content 5 -->
        <div class="content-5 pt-5">
            <div class="map-animation container p-5 rounded-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="container">
                            <h1 class=" text-start animated-header">
                                <span class="word1a">Find </span>
                                <span class="word1">Your Way</span><br>
                                <span class="word2">To Hatch!</span>
                            </h1>
                            <p class="p-style text-start mx-auto py-3" id="sentenceTyping">
                                Find Hatch tucked away like a secret treasure down a cozy alley. Once you discover our spot, you’ll be rewarded with warm smiles, delicious egg waffles, and a unique vibe that’s worth the adventure. Come explore the hidden side of Hatch!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-center">
                        <div class="map-wrapper position-relative">
                            <!-- map image -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map-animation/map-hatch.png" alt="Map" class="map-image">
                            
                            <!-- egg pin -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map-animation/egg.png" alt="Egg Pin" class="egg-pin">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content 6 -->
        <div class="content-6 pb-5 mt-5">
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