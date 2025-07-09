<?php get_header(); ?>

<main>
    <div class="wrapper">

        <!-- Content 1 -->
        <div class="content-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="container">
                            <h1 class="vertical-text text-start animated-header">
                                <span class="word-1">Your Hidden</span><br>
                                <span class="word-2">Hatchaway</span>
                            </h1>
                            <p class="sentence-2 typing-paragraph text-start mx-auto py-3" id="sentenceTyping">
                                Follow the scent of warm waffles and you’ll find us — your secret hideout from the city buzz. Cozy, charming, and always freshly hatched.
                            </p>
                            <div class="button1 pt-3">
                                <a href="#">
                                    <button class="btn btn-lg rounded-pill px-5 py-3 fs-5 pulse" 
                                        style="background: linear-gradient(135deg, #C7A678, #B88A54, #B18149); color: white; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3); box-shadow: 0 4px 10px rgba(177, 129, 73, 0.4); transition: transform 0.2s ease, box-shadow 0.2s ease;" 
                                        type="button">
                                        Order Now
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 pt-5">
                       <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/hero.png" class="img-fluid" alt="Image description">
                    </div>
                </div>
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
                        <p class="menus-p">Freshly made egg waffles and drinks ready when you are.</p>
                        <a href="#" class="menus-btn btn rounded-pill mt-2">Order Now</a>
                    </div>

                    <div class="category-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="Party Pack" class="card-img-categories" width="50">
                        <h3 class="menus-h3 mt-3">Party Pack Joy</h3>
                        <p class="menus-p">Perfect for birthdays and gatherings. Waffle happiness in a box!</p>
                        <a href="#" class="menus-btn btn rounded-pill mt-2">View Options</a>
                    </div>

                    <div class="category-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle.png" alt="Cakes" class="card-img-categories" width="50">
                        <h3 class="menus-h3 mt-3">Handcrafted Cakes</h3>
                        <p class="menus-p">Golden waffle cakes and sweets — beautiful and delicious.</p>
                        <a href="#" class="menus-btn btn rounded-pill mt-2">Explore Cakes</a>
                    </div>
                </div>
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/style/crack2.png" class="img-fluid" alt="Image description"> -->
            </div>
        </div>

        <!-- Content 3 -->
        <div class="container content-3 p-5 rounded-5 mt-5">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/style/crack7.png" class="img-fluid" alt="Image description"> -->
            <div class="part1 text-center">
                <h2 class="menus-h2 mb-5">Yummy Picks for You</h2>
                <div class="d-flex justify-content-center flex-wrap gap-5">
                    <?php
                    $items = ['Waffle', 'Coffee', 'Soft Drink', 'Combo', 'Cakes'];
                    foreach ($items as $item) : ?>
                        <div class="card-oval text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.png" class="card-img-top img-fluid rounded-pill" alt="..." style="width: 150px;">
                            <p class="card-text"><?php echo $item; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/style/crack3.png" class="img-fluid" alt="Image description"> -->
        </div>

       <!-- Content 4 -->
        <div class="content-4 pt-5">
            <div class="container">
                <div class="row g-0">
                    <div class="membership col-md-8 text-white p-3 rounded-5">
                        <div class="px-3 py-4">
                            <div class="d-flex justify-content-between align-items-start flex-wrap gap-2 px-4">
                                <h3 class="m-0 px-3">
                                    <span class="membership-word1a">Eggclusive </span><br>
                                    <span class="membership-word2">Club</span>
                                </h3>
                                <div class="text-center">
                                    <p class="fw-semibold">Hatch to Sign Up!</p>
                                    
                                    <!-- small egg button -->
                                    <div class="egg-wrapper" id="crackEgg" style="cursor: pointer;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animation-egg/top.png" alt="Top Egg" class="egg-part egg-top">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/animation-egg/bottom.png" alt="Bottom Egg" class="egg-part egg-bottom">
                                    </div>
                                </div>
                            </div>
                            <p class="mt-4 mx-5 text-center px-3">
                            Join our Eggclusive Club today and unlock sweet surprises!  
                            Be the first to taste new flavors, score sweet discounts, and crack open exclusive goodies made just for Hatchers.
                            </p>
                            <div class="d-flex justify-content-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/membership-picture.jpeg" alt="Waffle Club" class="waffle-img img-fluid my-3 rounded-3">
                            </div>

                        </div>
                    </div>

                    <div class="giftcard col-md-4 text-white p-3 rounded-5 text-center">
                        <!-- Title -->
                        <h3 class="m-0 px-3">
                            <span class="giftcard-word1a">Crack a</span><br>
                            <span class="giftcard-word2">Smile</span>
                        </h3>
                        
                       <div class="d-flex justify-content-center pt-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/landing-page/giftcard-picture.jpeg" alt="Gift Cards" class="img-fluid rounded-3 mb-3" style="width: 280px;">
                      </div>
                        <!-- Paragraph -->
                        <p class="giftcard-p px-4">
                            Surprise your loved ones with our delicious waffle gift cards — perfect for any occasion!  
                            Easy to buy, fun to share, and full of sweet moments.
                        </p>

                    </div>

                </div>
            </div>
        </div>


        <!-- Content 5 -->
        <div class="content-5 pt-5">
            <div class="egg-animation container p-5 rounded-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="container">
                            <h1 class=" text-start animated-header">
                                <span class="word1a">Find </span>
                                <span class="word1">Your Way</span><br>
                                <span class="word2">To Hatch!</span>
                            </h1>
                            <p class="sentence-2 typing-paragraph text-start mx-auto py-3" id="sentenceTyping">
                                Find Hatch tucked away like a secret treasure down a cozy alley. Once you discover our spot, you’ll be rewarded with warm smiles, delicious egg waffles, and a unique vibe that’s worth the adventure. Come explore the hidden side of Hatch!
                            </p>
                            <!-- <div class="button1 pt-3">
                                <a href="#">
                                    <button class="btn btn-outline-secondary btn-lg rounded-pill px-5 fs-6 fs-md-5" type="button">
                                        Go Somewhere
                                    </button>
                                </a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- <div class="egg-wrapper text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top.png" alt="Top Egg" class="egg-part egg-top" style="width: 400px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom.png" alt="Bottom Egg" class="egg-part egg-bottom" style="width: 400px;">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Content 6 -->
        <div class="content-6 pb-5 mt-5">
            <div class="container">
                <div class="position-relative p-5 text-center text-muted border border-dashed rounded-5" style="background-color: #E5E5E5;">
                    <h2 class="text-body-emphasis">Need a Hand? We're Here to Help!</h2>
                    <p class="col-lg-6 mx-auto mb-4">
                        Whether you're planning a party, curious about our flavours, or just have a question we're only a click away. Get in touch and we’ll crack it together!
                    </p>
                    <div class="button1 pt-3">
                                <a href="#">
                                    <button class="btn btn-lg rounded-pill px-5 py-3 fs-5 pulse" 
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