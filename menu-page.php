<?php
/**
 * Template Name: Menu Page
 */
get_header();
?>

<!-- Menu Hero Section -->
<section class="py-5 text-light text-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/golden-eggs.jpg'); background-size: cover; background-position: center;">
  <div class="container py-5">
    <h1 class="display-4 fw-bold">🥚 Explore Our Egg-licious Menu 🥚</h1>
  </div>
</section>

<!-- 🥭 Paradise Plate -->
<section class="py-5" style="background-color: #fff6ee;">
  <div class="container">
    <h2 class="fw-bold mb-5 text-center">🥭 Paradise Plate</h2>

    <!-- Item: Strawberry and Cream -->
    <div class="row align-items-center mb-5">
      <div class="col-md-8">
        <h5 class="fw-bold mb-1">Strawberry and Cream <span class="text-muted fw-normal float-end">$16.00</span></h5>
        <p class="text-muted">Signature Eggchi with a dip, creamy cheese with sour berries coulis and fresh strawberries.</p>
        <button class="btn btn-outline-warning btn-sm mt-2 rounded-pill" data-bs-toggle="modal" data-bs-target="#modalStrawberry">
          🍓 See More
        </button>
      </div>
      <div class="col-md-4 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strawberry-plate.webp" class="img-fluid rounded shadow-sm" alt="Strawberry and Cream" style="max-width: 200px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalStrawberry">
      </div>
    </div>

    <!-- Item: Chocolate Ganache -->
    <div class="row align-items-center mb-5">
      <div class="col-md-8">
        <h5 class="fw-bold mb-1">Chocolate Ganache <span class="text-muted fw-normal float-end">$16.00</span></h5>
        <p class="text-muted">Signature Eggchi with a dip, buttery Belgian chocolate ganache and chocolate sauce.</p>
        <button class="btn btn-outline-warning btn-sm mt-2 rounded-pill" data-bs-toggle="modal" data-bs-target="#modalChocolate">
          🍫 See More
        </button>
      </div>
      <div class="col-md-4 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/chocolate-plate.webp" class="img-fluid rounded shadow-sm" alt="Chocolate Ganache" style="max-width: 200px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalChocolate">
      </div>
    </div>
  </div>
</section>

<!-- Strawberry Modal -->
<div class="modal fade" id="modalStrawberry" tabindex="-1" aria-labelledby="modalStrawberryLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4">
      <div class="modal-body text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strawberry-plate.webp" class="img-fluid rounded mb-3" alt="Strawberry and Cream">
        <h5 class="fw-bold">Strawberry and Cream</h5>
        <p class="text-muted">Signature eggchi with a dip, creamy cheese with sour berries coulis and fresh strawberries.</p>
        <a href="https://hatch-square-order-link.com" target="_blank" class="btn btn-warning rounded-pill fw-bold">Order via Square</a> <!-- MUST CHANGE THIS HATCH LINK -->
      </div>
    </div>
  </div>
</div>

<!-- Chocolate Modal -->
<div class="modal fade" id="modalChocolate" tabindex="-1" aria-labelledby="modalChocolateLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4">
      <div class="modal-body text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/chocolate-plate.webp" class="img-fluid rounded mb-3" alt="Chocolate Ganache">
        <h5 class="fw-bold">Chocolate Ganache</h5>
        <p class="text-muted">Signature eggchi with a dip, buttery Belgium chocolate ganache and chocolate sauce.</p>
        <a href="https://hatch-square-order-link.com" target="_blank" class="btn btn-warning rounded-pill fw-bold">Order via Square</a> <!-- MUST CHANGE THIS HATCH LINK -->
      </div>
    </div>
  </div>
</div>

<!-- 🍳 Egg-chi Creations Section -->
<section class="py-5" style="background-color: #fff1e6;">
  <div class="container">
    <h2 class="fw-bold mb-4 text-center">🧇 Egg-chi Creations</h2>

    <?php
    $eggchi_items = [
      ['Original Eggchi', 'The classic golden, buttery, and freshly hatched plain Egg-Chi — crisp outside, fluffy inside.', 'original.webp', '$3'],
      ['Yuzu Custard Eggchi', 'Silky smooth custard with a zesty yuzu twist — light, citrusy, and refreshingly sweet.', 'yuzu.webp', '$4'],
      ['Matcha Eggchi', 'Earthy matcha ganache meets red bean paste in a crispy golden shell.', 'matcha.webp', '$4'],
      ['Chocolate Eggchi', 'Decadent chocolate ganache sealed in a toasty egg-chi — melty, rich, and always a good idea.', 'chocolate.webp', '$4'],
      ['Miso Caramel Eggchi', 'Sweet-salty umami bomb — buttery caramel with a hint of miso wrapped in warm waffle bliss.', 'miso-caramel.webp', '$4'],
      ['Pork Floss Eggchi', 'Sweet meets savoury — fluffy pork floss and creamy condensed milk.', 'pork-floss.webp', '$4'],
      ['Cheese Corn Eggchi', 'Creamy corn, melted cheese, and buttery magic — pure comfort.', 'cheese-corn.webp', '$4']
    ];

    foreach ($eggchi_items as $index => $item) :
      $modalId = 'eggchiModal' . $index;
    ?>
      <!-- 🧇 Eggchi Row -->
      <div class="row align-items-center g-4 mb-4">
        <!-- Left: Text box -->
        <div class="col-md-8">
          <div class="bg-white p-4 rounded shadow-sm h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#<?php echo $modalId; ?>">
            <h5 class="fw-bold mb-1"><?php echo $item[0]; ?> <span class="text-muted fw-normal float-end"><?php echo $item[3]; ?></span></h5>
            <p class="text-muted mb-0"><?php echo $item[1]; ?></p>
            <small class="text-muted fst-italic d-block mt-1">Tap to customise</small>
          </div>
        </div>

        <!-- Right: Image -->
        <div class="col-md-4 text-center">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $item[2]; ?>" 
               class="img-fluid rounded shadow-sm" 
               style="height: 140px; width: 140px; object-fit: cover;" 
               alt="<?php echo $item[0]; ?>">
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" aria-labelledby="<?php echo $modalId; ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content border-0 shadow" style="background: #fff9f3; border-radius: 1rem; box-shadow: 0 0 40px rgba(255, 205, 122, 0.3);">
            
            <!-- Modal Header -->
            <div class="modal-header border-0 pb-0">
              <h4 class="modal-title fw-bold text-center w-100" id="<?php echo $modalId; ?>Label" style="font-family: 'Poppins', sans-serif; color: #6b3e26;">
                🍳 Customize Your Eggchi!
              </h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body row px-4 py-3" style="min-height: 400px;">
              
              <!-- Left: Image -->
              <div class="col-md-6 text-center d-flex align-items-center justify-content-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $item[2]; ?>"
                     class="rounded-circle shadow-sm border border-warning"
                     style="height: 240px; width: 240px; object-fit: cover; object-position: center;"
                     alt="<?php echo $item[0]; ?>">
              </div>

              <!-- Right: Content -->
              <div class="col-md-6 d-flex flex-column justify-content-center">
                <p class="text-muted small fst-italic"><?php echo $item[1]; ?></p>
                <p class="fw-bold text-dark mb-2">Price: <?php echo $item[3]; ?> each</p>

                <label for="quantitySelect<?php echo $index; ?>" class="form-label fw-semibold" style="color: #5e4027;">
                  Choose your hatch size 🍽️
                </label>
                <select id="quantitySelect<?php echo $index; ?>" class="form-select mb-3 w-75 rounded-pill">
                  <option value="1">Just 1 Eggchi</option>
                  <option value="6">Half Dozen (6)</option>
                  <option value="12">Full Dozen (12)</option>
                </select>

                <!-- CHANGE THIS SQUARE LINK LATER -->
                <a href="https://squaresite.com" target="_blank"
                   class="btn btn-warning rounded-pill px-4 fw-bold"
                   style="background-color: #ffc107; border: none; box-shadow: 0 4px 12px rgba(255, 193, 7, 0.4); transition: transform 0.2s ease;"
                   onmouseover="this.style.transform='scale(1.05)'"
                   onmouseout="this.style.transform='scale(1)'">
                  🍽️ Order This Eggchi
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- 🥥 Mont Blanc Coconut Dreams -->
<section class="py-5" style="background-color: #fff0f5;">
  <div class="container text-center">

    <!-- Coconut Header -->
    <div class="coconut-header mx-auto mb-4">
      <h2 class="fw-bold mb-0">🥥 Mont Blanc Coconut Dreams</h2>
    </div>
    <p class="text-muted mb-5">Delicate whipped coconut cream meets earthy flavours — cloud-soft, cool and dreamy.</p>
    
    <!-- Mont Blanc Items -->
    <div class="row g-4">
      <?php
      $montblanc_items = [
        ['Coffee Mont Blanc', 'Smooth coffee layered with whipped coconut cream and cocoa.', 'coffee-montblanc.webp'],
        ['Matcha Mont Blanc', 'Earthy matcha meets coconut cloud — mellow and rich.', 'matcha-montblanc.webp'],
        ['Hojicha Mont Blanc', 'Toasty roasted green tea + cool coconut fluff.', 'hojicha-montblanc.webp'],
        ['Black Sesame Mont Blanc', 'Nutty, deep sesame cream over icy coconut base.', 'black-sesame-montblanc.webp']
      ];

      foreach ($montblanc_items as $index => $item) :
        $modalId = 'montblancModal' . $index;
      ?>
        <div class="col-md-6 col-lg-4">
          <div class="text-center p-4 rounded-4 shadow-sm border"
               style="background: linear-gradient(135deg, #fff8fb 0%, #ffeef5 100%);
                  border: 1px solid #ffdce7;
                  box-shadow: 0 8px 24px rgba(255, 190, 220, 0.25);
                  transition: transform 0.2s ease, box-shadow 0.2s ease;
                  cursor: pointer;"
               data-bs-toggle="modal" data-bs-target="#<?php echo $modalId; ?>"
               onmouseover="this.style.transform='scale(1.02)'; this.style.boxShadow='0 12px 28px rgba(255, 180, 210, 0.3)'"
               onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 8px 24px rgba(255, 190, 220, 0.25)'">
            <div class="mb-3">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $item[2]; ?>" 
                   alt="<?php echo $item[0]; ?>" 
                   class="rounded-circle border shadow-sm" 
                   style="width: 150px; height: 150px; object-fit: cover; border-color: #fcead8;">
            </div>
            <h5 class="fw-bold"><?php echo $item[0]; ?></h5>
            <p class="text-muted small"><?php echo $item[1]; ?></p>
            <span class="text-warning fw-semibold d-block">A$8.80</span>
            <small class="text-muted fst-italic">✨ Tap to explore</small>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" aria-labelledby="<?php echo $modalId; ?>Label" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0" style="
              background: linear-gradient(135deg, #fffafc 0%, #ffeef5 100%);
              border-radius: 1.5rem;
              box-shadow: 0 10px 40px rgba(255, 174, 209, 0.25);
              padding: 1rem;
            ">
              <div class="modal-header border-0 pb-0">
                <h4 class="modal-title fw-bold text-center w-100" style="font-family: 'Poppins', sans-serif; color: #5e3b2b;">
                  🍧 Customize Your Coconut Treat
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body text-center p-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $item[2]; ?>" 
                     class="img-fluid rounded-circle mb-3 shadow-sm" 
                     style="width: 200px; height: 200px; object-fit: cover;" 
                     alt="<?php echo $item[0]; ?>">
                <h5 class="fw-bold"><?php echo $item[0]; ?></h5>
                <p class="text-muted"><?php echo $item[1]; ?></p>
                <p class="fw-bold mb-3">Price: A$8.80</p>
                <a href="https://hatch-square-order-link.com" target="_blank" class="btn btn-outline-warning rounded-pill px-4 fw-semibold">🛒 Order on Square</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ☕️ Eggspresso Bar -->
<section class="py-5" style="background-color: #fdf7f3;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold" style="color: #5b3924;">☕️ Eggspresso Bar</h2>
      <p class="text-muted fst-italic">Warming hearts & chilling vibes — one dreamy sip at a time.</p>
    </div>

    <!-- 🔥 Hot Drinks -->
    <div class="mb-5">
      <h4 class="fw-bold mb-4" style="color: #8b5c3b;">🔥 Hot Drinks</h4>
      <div class="row g-4">
        <?php
        $hot_drinks = [ /* CHANGE ALL SQUARE LINKS LATER - ALSO SOME IMAGES DO NOT HAVE PICTURES YET */
          ['Babycinno', 'A$2.00', 'babycinno.webp', 'https://square.link'],
          ['Espresso', 'A$4.80', 'espresso.webp', 'https://square.link'],
          ['Short Macchiato', 'A$4.50', 'short-macchiato.webp', 'https://square.link'],
          ['Long Macchiato', 'A$5.00', 'long-macchiato.webp', 'https://square.link'],
          ['Long Black', 'A$5.30', 'long-black.jpg', 'https://square.link'],
          ['Flat White', 'A$6.30', 'flat-white.webp', 'https://square.link'],
          ['Cappuccino', 'A$6.30', 'cappuccino.webp', 'https://square.link'],
          ['Hot Chocolate', 'A$6.00', 'hot-chocolate.webp', 'https://square.link'],
          ['Mocha', 'A$6.00', 'mocha.webp', 'https://square.link'],
          ['Coffee Latte', 'A$6.30', 'coffee-latte.webp', 'https://square.link'],
          ['Chai Latte', 'A$6.00', 'chai-latte.webp', 'https://square.link'],
          ['Black Sesame Latte', 'A$6.80', 'black-sesame-latte.webp', 'https://square.link'],
          ['Hojicha Latte', 'A$6.80', 'hojicha-latte.webp', 'https://square.link'],
          ['Matcha Latte', 'A$6.80', 'matcha-latte.webp', 'https://square.link']
        ];

        foreach ($hot_drinks as $drink) :
        ?>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex p-3 rounded-4 shadow-sm h-100 align-items-center justify-content-between" style="background: #fffaf5; border: 1px solid #f2e0d5;">
              <!-- Image -->
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $drink[2]; ?>" 
                   alt="<?php echo $drink[0]; ?>" 
                   class="rounded-circle shadow-sm me-3"
                   style="width: 80px; height: 80px; object-fit: cover; border: 2px solid #fcead8;">
              
              <!-- Info + Button -->
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-start">
                  <div>
                    <h6 class="fw-bold mb-0"><?php echo $drink[0]; ?></h6>
                    <p class="text-muted mb-1 small"><?php echo $drink[1]; ?></p>
                  </div>
                  <span class="badge bg-danger-subtle text-danger fw-semibold ms-2">Hot</span>
                </div>

                <a href="<?php echo $drink[3]; ?>" target="_blank"
                   class="btn btn-warning btn-sm rounded-pill fw-semibold mt-2"
                   style="background-color: #ffc107; border: none; transition: all 0.2s ease;"
                   onmouseover="this.style.transform='scale(1.05)'"
                   onmouseout="this.style.transform='scale(1)'">
                   ☕ Order via Square
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Animated Divider -->
    <div class="text-center my-5">
      <div class="d-flex align-items-center justify-content-center">
        <span class="fs-4 me-3">🔥</span>
        <div class="flex-grow-1 mx-2" style="height: 4px; border-radius: 2px; background: linear-gradient(to right, #ff6a00, #ffc107, #e0f7ff, #00bcd4);"></div>
        <span class="fs-4 ms-3">❄️</span>
      </div>
    </div>

    <!-- 🧊 Cold Drinks -->
    <div>
      <h4 class="fw-bold mb-4" style="color: #3a6e91;">🧊 Cold Drinks</h4>
      <div class="row g-4">
        <?php
        $cold_drinks = [ /* CHANGE ALL SQUARE LINKS LATER */
          ['Ice Coffee Latte', 'A$7.80', 'ice-coffee-latte.webp', 'https://square.link'],
          ['Ice Matcha Latte', 'A$7.80', 'ice-matcha.webp', 'https://square.link'],
          ['Ice Black Sesame Latte', 'A$7.80', 'ice-black-sesame.webp', 'https://square.link'],
          ['Ice Hojicha Latte', 'A$7.80', 'ice-hojicha.webp', 'https://square.link'],
          ['Ice Chocolate', 'A$7.00', 'ice-chocolate.webp', 'https://square.link'],
          ['Ice Mocha', 'A$7.00', 'ice-mocha.webp', 'https://square.link'],
          ['Ice Chai Latte', 'A$7.00', 'ice-chai.webp', 'https://square.link']
        ];

        foreach ($cold_drinks as $drink) :
        ?>
          <div class="col-md-6 col-lg-4">
            <div class="d-flex p-3 rounded-4 shadow-sm h-100 align-items-center justify-content-between" style="background: #f0f9ff; border: 1px solid #cce8f4;">
              <!-- Image -->
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $drink[2]; ?>" 
                   alt="<?php echo $drink[0]; ?>" 
                   class="rounded-circle shadow-sm me-3"
                   style="width: 80px; height: 80px; object-fit: cover; border: 2px solid #d3f2ff;">
              
              <!-- Info + Button -->
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-start">
                  <div>
                    <h6 class="fw-bold mb-0"><?php echo $drink[0]; ?></h6>
                    <p class="text-muted mb-1 small"><?php echo $drink[1]; ?></p>
                  </div>
                  <span class="badge bg-primary-subtle text-primary fw-semibold ms-2">Cold</span>
                </div>

                <a href="<?php echo $drink[3]; ?>" target="_blank"
                   class="btn btn-primary btn-sm rounded-pill fw-semibold mt-2"
                   style="background-color: #5ac8fa; border: none; transition: all 0.2s ease;"
                   onmouseover="this.style.transform='scale(1.05)'"
                   onmouseout="this.style.transform='scale(1)'">
                   ❄️ Order via Square
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- 🫧 Soda Drinks Section -->
<section class="py-5" style="background-color: #f0f9ff;">
  <div class="container">
    <h2 class="fw-bold text-center mb-4" style="color: #2d3a45;">🫧 Soda Drinks</h2>
    <p class="text-muted text-center mb-5">Pop, fizz, and chill — sip your favourite sparkle ✨</p>

    <div class="row g-4 justify-content-center">
      <?php
      $soda_items = [
        ['Sanpellegrino Sparkling Mineral Water', 'A$6.00', 'sanpellegrino.webp'],
        ['Fiji Natural Artisan Water', 'A$6.00', 'fiji-water.webp'],
        ['Tonic Water', 'A$6.00', 'tonic.webp'],
        ['Yuzu Sparkling Water', 'A$6.00', 'yuzu-sparkling.webp'],
        ['Coke', 'A$4.00', 'coke.webp'],
        ['Coke No Sugar', 'A$4.00', 'coke-zero.webp'],
        ['Fanta', 'A$4.00', 'fanta.webp'],
        ['Sprite', 'A$4.00', 'sprite.webp']
      ];

      foreach ($soda_items as $item) :
      ?>
        <div class="col-6 col-sm-4 col-md-3">
          <div class="rounded-4 p-3 soda-card text-center shadow-sm"
               style="background: rgba(255, 255, 255, 0.25); backdrop-filter: blur(6px); border: 1px solid #ffffff55;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $item[2]; ?>" 
                 alt="<?php echo $item[0]; ?>" 
                 class="img-fluid mb-2 soda-img"
                 style="width: 100px; height: 100px; object-fit: contain;">
            <h6 class="fw-semibold mb-0"><?php echo $item[0]; ?></h6>
            <small class="text-muted"><?php echo $item[1]; ?></small>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Order Button -->
    <div class="text-center mt-5">
      <a href="https://hatch-square-order-link.com" target="_blank" 
         class="btn btn-info px-4 py-2 rounded-pill fw-bold shadow-sm"
         style="background-color: #bae6fd; border: none; color: #00324f; font-size: 1rem;">
        🛒 Order via Square
      </a>
    </div>
  </div>
</section>


<!-- BELOW IS JUST TESTING - DIFFERENT MENU CONTENT -->


<!-- Menu Content -->
<section class="py-5" style="background-color: #fffaf5;">
  <div class="container">

    <!-- 🧇 Eggcellent Waffles -->
    <h2 class="fw-bold mb-4">🧇 Eggcellent Waffles</h2>
    <div class="mb-4">
      <div class="mb-3">
        <h5 class="fw-bold mb-1">Classic Waffle <span class="text-muted fw-normal">$8</span></h5>
        <p class="text-muted">Light, airy, and golden bubble perfection.</p>
      </div>
      <div class="mb-3">
        <h5 class="fw-bold mb-1">Matcha Dream <span class="text-muted fw-normal">$11</span></h5>
        <p class="text-muted">Earthy Japanese matcha + creamy drizzle combo.</p>
      </div>
      <div class="mb-3">
        <h5 class="fw-bold mb-1">Chocolate Crunch <span class="text-muted fw-normal">$10</span></h5>
        <p class="text-muted">Cocoa-infused bubbles with choc chips and syrup.</p>
      </div>
    </div>

    <div class="row g-3 mb-5">
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/chocolate-waffles.jpg" class="img-fluid rounded shadow-sm" alt="Waffle 1">
      </div>
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strawberry-waffles.jpg" class="img-fluid rounded shadow-sm" alt="Waffle 2">
      </div>
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/waffle-creation.jpg" class="img-fluid rounded shadow-sm" alt="Waffle 3">
      </div>
    </div>

    <!-- ☕️ Eggspresso Bar -->
    <h2 class="fw-bold mb-4">☕️ Eggspresso Bar</h2>
    <div class="mb-4">
      <div class="mb-3">
        <h5 class="fw-bold mb-1">Flat White <span class="text-muted fw-normal">$5</span></h5>
        <p class="text-muted">Smooth and silky Aussie favourite with rich crema.</p>
      </div>
      <div class="mb-3">
        <h5 class="fw-bold mb-1">Mocha Love <span class="text-muted fw-normal">$5.5</span></h5>
        <p class="text-muted">Espresso meets chocolate in a warm hug.</p>
      </div>
      <div class="mb-3">
        <h5 class="fw-bold mb-1">Eggspresso Shot <span class="text-muted fw-normal">$4</span></h5>
        <p class="text-muted">A bold solo espresso with eggy warmth.</p>
      </div>
    </div>

    <div class="row g-3 mb-5">
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/matcha-latte.jpg" class="img-fluid rounded shadow-sm" alt="Coffee 1">
      </div>
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hot-chocolate.jpg" class="img-fluid rounded shadow-sm" alt="Coffee 2">
      </div>
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iced-coffee.jpg" class="img-fluid rounded shadow-sm" alt="Coffee 3">
      </div>
    </div>

    <!-- 🎉 Bundles of Eggcitement -->
    <h2 class="fw-bold mb-4">🎉 Bundles of Eggcitement</h2>
    <div class="mb-4">
      <div class="mb-3">
        <h5 class="fw-bold mb-1">Mini Waffle Platter <span class="text-muted fw-normal">$30</span></h5>
        <p class="text-muted">6 assorted sweet & savoury mini waffles.</p>
      </div>
      <div class="mb-3">
        <h5 class="fw-bold mb-1">Eggcellent Combo <span class="text-muted fw-normal">$55</span></h5>
        <p class="text-muted">4 drinks + 4 waffles of your choice — besties love it.</p>
      </div>
      <div class="mb-3">
        <h5 class="fw-bold mb-1">Party Pack <span class="text-muted fw-normal">$90</span></h5>
        <p class="text-muted">10 waffles, 10 drinks, party napkins & sauce cups!</p>
      </div>
    </div>

    <div class="row g-3">
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sample-image1.jpg" class="img-fluid rounded shadow-sm" alt="Party 1">
      </div>
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sample-image2.jpg" class="img-fluid rounded shadow-sm" alt="Party 2">
      </div>
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sample-image3.jpg" class="img-fluid rounded shadow-sm" alt="Party 3">
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>