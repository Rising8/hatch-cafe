<?php get_header(); ?>

<main>
    <div class="wrapper">

        <!-- Content 1 -->
        <div class="content-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="container">
                            <h1 class="vertical-text text-start animated-header">
                                <span class="word-1">Crispy Outside</span><br>
                                <span class="word-2">Fluffy Inside</span>
                            </h1>
                            <p class="sentence-2 typing-paragraph text-start mx-auto py-3" id="sentenceTyping">
                                Our Signature Egg Waffles Made Fresh Daily.
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
                    <div class="col-md-6">
                        <!-- Column 2 content -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Content 2 -->
        <div class="content-2">
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
        <div class="content-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/style/crack8.png" class="img-fluid" alt="Image description">
            <div class="part1 text-center">
                <h2 class="menus-h2">Yummy Picks for You</h2>
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/style/crack3.png" class="img-fluid" alt="Image description">
        </div>

        <!-- Content 4 -->
        <div class="content-4 pt-5">
            <div class="container p-2">
                <div class="row g-0">
                    <div class="membership col rounded-3 p-2 me-5">
                        <!-- Column 1 content -->
                        Column 1
                    </div>
                    <div class="giftcard col rounded-3 p-2">
                        <!-- Column 2 content -->
                        Column 2
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
                                <span class="word1a">Hatch </span>
                                <span class="word1">Happiness</span><br>
                                <span class="word2">With Us!</span>
                            </h1>
                            <p class="sentence-2 typing-paragraph text-start mx-auto py-3" id="sentenceTyping">
                                More Than a Waffle. It’s a Cracking Experience.
                            </p>
                            <div class="button1 pt-3">
                                <a href="#">
                                    <button class="btn btn-outline-secondary btn-lg rounded-pill px-5 fs-6 fs-md-5" type="button">
                                        Go Somewhere
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="egg-wrapper text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top.png" alt="Top Egg" class="egg-part egg-top" style="width: 400px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bottom.png" alt="Bottom Egg" class="egg-part egg-bottom" style="width: 400px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content 6 -->
        <div class="content-6 pb-5">
            <div class="container">
                <div class="position-relative p-5 text-center text-muted border border-dashed rounded-5" style="background-color: #E5E5E5;">
                    <h2 class="text-body-emphasis">Need a Hand? We're Here to Help!</h2>
                    <p class="col-lg-6 mx-auto mb-4">
                        Whether you're planning a party, curious about our flavours, or just have a question we're only a click away. Get in touch and we’ll crack it together!
                    </p>
                    <button class="btn btn-primary px-5 mb-5" type="button">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>
