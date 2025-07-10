<?php
/**
 * Template Name: Menu Page
 */
get_header();
?>

<div class="menu-wrapper">
  <div class="menu-content-1">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/menu-img.jpeg" class="img-fluid" alt="Image description">
  </div>

  <div class="menu-content-2">
  <section id="tranding">
    <div class="container-tranding-slider">
      <h2 class="text-center">Most Egg-cellent</h2>
    </div>

    <div class="container-tranding-slider">
      <div class="swiper tranding-slider">
        <div class="swiper-wrapper">

          <!-- Slide 1 -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/egg-swiper.png" class="img-fluid" alt="Classic Egg Waffle">
            </div>
            <h3 class="title-us">Original Eggchi</h3>
            <div class="d-flex justify-content-around gap-2 py-3">
              <a href="#" class="btn btn-view w-50" style="background-color: #e5e5e5;">View</a>
              <a href="#" class="btn btn-order w-100">Order Now</a>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/egg-swiper.png" class="img-fluid" alt="Matcha Eggchi">
            </div>
            <h3 class="title-us">Matcha Eggchi</h3>
            <div class="d-flex justify-content-around gap-2 py-3">
              <a href="#" class="btn btn-view w-50" style="background-color: #e5e5e5;">View</a>
              <a href="#" class="btn btn-order w-100">Order Now</a>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/egg-swiper.png" class="img-fluid" alt="Chocolate Eggchi">
            </div>
            <h3 class="title-us">Chocolate Eggchi</h3>
            <div class="d-flex justify-content-around gap-2 py-3">
              <a href="#" class="btn btn-view w-50" style="background-color: #e5e5e5;">View</a>
              <a href="#" class="btn btn-order w-100">Order Now</a>
            </div>
          </div>

          <!-- Slide 4 -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/egg-swiper.png" class="img-fluid" alt="Yuzu Eggchi">
            </div>
            <h3 class="title-us">Yuzu Eggchi</h3>
            <div class="d-flex justify-content-around gap-2 py-3">
              <a href="#" class="btn btn-view w-50" style="background-color: #e5e5e5;">View</a>
              <a href="#" class="btn btn-order w-100">Order Now</a>
            </div>
          </div>

          <!-- Slide 5 -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/egg-swiper.png" class="img-fluid" alt="Strawberry Eggchi">
            </div>
            <h3 class="title-us">Strawberry Eggchi</h3>
            <div class="d-flex justify-content-around gap-2 py-3">
              <a href="#" class="btn btn-view w-50" style="background-color: #e5e5e5;">View</a>
              <a href="#" class="btn btn-order w-100">Order Now</a>
            </div>
          </div>

          <!-- Slide 6 -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/egg-swiper.png" class="img-fluid" alt="Miso Eggchi">
            </div>
            <h3 class="title-us">Miso Eggchi</h3>
            <div class="d-flex justify-content-around gap-2 py-3">
              <a href="#" class="btn btn-view w-50" style="background-color: #e5e5e5;">View</a>
              <a href="#" class="btn btn-order w-100">Order Now</a>
            </div>
          </div>

          <!-- Slide 7 -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-page/egg-swiper.png" class="img-fluid" alt="Pork Eggchi">
            </div>
            <h3 class="title-us">Pork Eggchi</h3>
            <div class="d-flex justify-content-around gap-2 py-3">
              <a href="#" class="btn btn-view w-50" style="background-color: #e5e5e5;">View</a>
              <a href="#" class="btn btn-order w-100">Order Now</a>
            </div>
          </div>

        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
    <style> 
    #tranding {
          padding: 4rem 0;
        }

        .container-tranding-slider {
          /* max-width: 1200px; */
          margin: 0 auto;
          padding: 0 1rem;
        }

        h2.text-center {
          text-align: center;
          font-size: 2.5rem;
          margin-bottom: 2rem;
          color: #333;
        }

        .swiper.tranding-slider {
          height: 45rem;
          /* padding: 2rem 0; */
        }

        @media (max-width: 500px) {
          .swiper.tranding-slider {
            height: 42rem;
          }
        }

        .tranding-slide {
          width: 32rem;
          height: 42rem;
          position: relative;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          background: var(--white);
          border-radius: 2rem;
          box-shadow: 0 10px 25px rgba(0,0,0,0.1);
          background-color: #f9f9f9;
        }

        @media (max-width: 500px) {
          .tranding-slide {
            width: 28rem !important;
            height: 36rem !important;
          }

          .tranding-slide .tranding-slide-img img {
            width: 28rem !important;
            height: 36rem !important;
          }
        }
        
        .tranding-slide-img {
          width: 400px;
        }

        .slideimg {
          width: 32rem;
          height: 30rem;
          border-radius: 2rem;
          object-fit: cover;
          /* margin-top: 1rem; */
          opacity: 0.9;
        }

        .title-us {
          font-size: 2rem;
          font-weight: bold;
          margin-top: 1.5rem;
          color: #333;
          text-align: center;
        }

        .swiper-slide-shadow-left,
        .swiper-slide-shadow-right {
          display: none;
        }

        .swiper-pagination {
          margin-top: 2rem;
          text-align: center;
        }

        .swiper-pagination-bullet {
          background: #ccc;
          opacity: 1;
        }

        .swiper-pagination-bullet-active {
          background: var(--primary);
        } 
    </style>
  </div>

  <div class="menu-content-3">
      <div class="container">
        <h2 class="text-center mb-4 pt-5">Paradise Plate</h2>
        <div class="row g-4">
          
          <!-- Column 1 -->
          <div class="col-12 col-md-6">
            <div class="card h-100 text-center border-0 shadow-sm">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi1.jpeg" class="menu-img" alt="Classic Egg Waffle">
              <div class="card-body">
                <h5 class="card-title">Original Eggchi</h5>
                <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                <div class="d-flex justify-content-center gap-5">
                  <a href="#" class="btn btn-view w-20">View</a>
                  <a href="#" class="btn btn-order w-50">Order Now</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Column 2 -->
          <div class="col-12 col-md-6">
            <div class="card h-100 text-center border-0 shadow-sm">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi2.webp" class="menu-img" alt="Matcha Eggchi">
              <div class="card-body">
                <h5 class="card-title">Matcha Eggchi</h5>
                <p class="card-text">Earthy matcha meets a gooey lava center.</p>
                <div class="d-flex justify-content-center gap-5">
                  <a href="#" class="btn btn-view w-20">View</a>
                  <a href="#" class="btn btn-order w-50">Order Now</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
  </div>

  <div class="menu-content-4">
      <div class="container">
        <h2 class="text-center mb-4 pt-5">One Eggchi</h2>
        
        <div class="swiper menuSwiper">
          <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi1.jpeg" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Original Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi2.webp" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Matcha Eggchi</h5>
                  <p class="card-text">Earthy matcha meets a gooey lava center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi3.jpeg" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Miso Caramel Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi4.webp" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Cheese Corn Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi5.webp" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Yuzu Custard Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi6.jpeg" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Chocolate Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi7.webp" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Pork Floss Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Swiper Navigation -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>

  </div>

  <div class="menu-content-5">
      <div class="container">
        <h2 class="text-center mb-4 pt-5">6 Eggchi</h2>
        
        <div class="swiper menuSwiper">
          <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi1.jpeg" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Original Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi2.webp" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Matcha Eggchi</h5>
                  <p class="card-text">Earthy matcha meets a gooey lava center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi3.jpeg" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Miso Caramel Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi4.webp" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Cheese Corn Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi5.webp" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Yuzu Custard Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi6.jpeg" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Chocolate Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi7.webp" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Pork Floss Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Swiper Navigation -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
  </div>

  <div class="menu-content-6">
      <div class="container">
        <h2 class="text-center mb-4 pt-5">12 Eggchi</h2>
        
        <div class="swiper menuSwiper">
          <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi1.jpeg" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Original Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi2.webp" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Matcha Eggchi</h5>
                  <p class="card-text">Earthy matcha meets a gooey lava center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi3.jpeg" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Miso Caramel Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi4.webp" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Cheese Corn Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi5.webp" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Yuzu Custard Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi6.jpeg" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Chocolate Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 1 -->
            <div class="swiper-slide p-3">
              <div class="card h-100 text-center border-0 shadow-sm">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/one-eggchi/one-eggchi7.webp" class="menu-img" alt="Classic Egg Waffle">
                <div class="card-body">
                  <h5 class="card-title">Pork Floss Eggchi</h5>
                  <p class="card-text">A golden, crispy shell with a soft, chewy center.</p>
                  <div class="d-flex justify-content-between gap-2">
                    <a href="#" class="btn btn-view w-20">View</a>
                    <a href="#" class="btn btn-order w-50">Order Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Swiper Navigation -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
  </div>

  <div class="menu-content-7">

  </div>

  <div class="menu-content-8">

  </div>

  <div class="menu-content-9">

  </div>

</div>


<?php get_footer(); ?>

