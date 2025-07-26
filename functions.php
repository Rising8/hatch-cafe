<?php

function hatch_enqueue_styles() 
{
    // Main stylesheet of the theme
    wp_enqueue_style('hatch-style', get_stylesheet_uri());

    // jQuery (core WP registered)
    wp_enqueue_script('jquery');

    // Bootstrap CSS (you may need to change this function codes - comment this bit out when you have and recommit because we do this differently)
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Custom CSS (your style.css inside assets)
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css');

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Marcellus&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    // Font Awesome
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/d20f1d4040.js', array(), null, true);

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true);

    // Custom JS - ( this may need to be changed later !!! )
    wp_enqueue_script('hatch-scripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery', 'bootstrap-js'), null, true);

    // Enqueue Animate.css
    wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');

    // Enqueue Confetti.js (dependency for gift-cards.js)
    wp_enqueue_script('confetti', 'https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js', array(), null, true);

    // Gift Card custom JS
    wp_enqueue_script('gift-cards', get_template_directory_uri() . '/assets/js/gift-cards.js', array('confetti'), null, true);

    // Membership custom JS
    wp_enqueue_script('membership-js', get_template_directory_uri() . '/assets/js/membership.js', array(), '1.0', true);

    // About custom JS
    wp_enqueue_script('about-js', get_template_directory_uri() . '/assets/js/about.js', array(), '1.0', true);

    // Tranding JS
    wp_enqueue_script('tranding-js', get_template_directory_uri() . '/assets/js/tranding.js', array('jquery'), '1.0', true);

    // Index JS
    wp_enqueue_script('index-js', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), '1.0', true);

    // Preloader JS
    wp_enqueue_script('preloader-js', get_template_directory_uri() . '/assets/js/preloader.js', array('jquery'), '1.0', true);

    // Header JS
    wp_enqueue_script('header-js', get_template_directory_uri() . '/assets/js/header.js', array('jquery'), '1.0', true);

    // Menu JS
    wp_enqueue_script('menu-js', get_template_directory_uri() . '/assets/js/menu.js', array('jquery'), '1.0', true);

    // Mobile Burger Icon JS
    wp_enqueue_script('mobile-burger-icon-js', get_template_directory_uri() . '/assets/js/mobile-burger-icon.js', array('jquery'), '1.0', true);

    // Mobile Menu Dropdown JS
    wp_enqueue_script('mobile-menu-dropdown-js', get_template_directory_uri() . '/assets/js/mobile-menu-dropdown.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'hatch_enqueue_styles');

// Force title and description
function force_hatch_title() 
{ 
    update_option('blogname', 'Hatch Cafe'); 
    update_option('blogdescription', 'Cracking Waffle Experiences'); 
} 
add_action('after_switch_theme', 'force_hatch_title');

// Favicon function (we can change this later)
function add_favicon() 
{
    echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_template_directory_uri().'/favicon.jpg" />';
}
add_action('wp_head', 'add_favicon');

// Add post thumbnail support (this is for later)
add_theme_support('post-thumbnails');
?>
