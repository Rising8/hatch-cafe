<?php
/**
 * Template Name: Contact Page
 */
get_header();?>

<div class="contact-wrapper">
  <div class="contact-content-1" >
    <div class="container text-center">
      <h1>Hatch-ing a Plan to Visit?</h1>
      <p>Hidden down the laneway, Hatch is your sweet little escape. Got questions, collab ideas, or just want to say hi? Reach out  we’re all ears</p>
    </div>

  </div>

  <div class="contact-content-2 pb-5">
    <div class="mx-5">
      <div class="d-flex flex-column flex-md-row gap-4">
        <div class="contact-informations col-md-6 rounded-5 px-3">
          <!-- Row 1: 3 Info Boxes -->
          <div class="row text-center mx-3 pt-5">
            <div class="col-12 col-md-4 mb-3">
              <div class="info-boxes p-4 rounded shadow h-100">
                <div class="mb-2">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <h5 class="mb-1">Phone</h5>
                <p class="mb-0">+61 493 346 288</p>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
              <div class="info-boxes p-4 rounded shadow h-100">
                <div class="mb-2">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <h5 class="mb-1">Email</h5>
                <p class="mb-0">hatchawaffleegg<br>@gmail.com</p>
              </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
              <div class="info-boxes p-4 rounded shadow h-100">
                <div class="mb-2">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <h5 class="mb-1">Our Shop</h5>
                <p class="mb-0">189 William Street,<br>Northbridge, WA 6003</p>
              </div>
            </div>
          </div>

          <!-- Row 2: Google Map -->
          <div class="text-center py-2"> 
            <h5 class="fw-bold">Find Us!</h5>
            <div class="ratio ratio-16x9 rounded overflow-hidden shadow">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3385.430100881494!2d115.85609577577598!3d-31.94922657402056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32bad15d0ece61%3A0x1af6955b617a572f!2sShop%209%2F189%20William%20St%2C%20Northbridge%20WA%206003!5e0!3m2!1sen!2sau!4v1752078319020!5m2!1sen!2sau" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <!-- Row 3: Hours (Two Columns) -->
          <div class="mb-4">
            <h5 class="fw-bold pt-3 text-center">Opening Hours</h5>
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-6">
                    <ul class="list-unstyled">
                      <li>Monday: 4:00 pm – 10:00 pm</li>
                      <li>Tuesday: 4:00 pm – 10:00 pm</li>
                      <li>Wednesday: 4:00 pm – 10:00 pm</li>
                      <li>Thursday: 4:00 pm – 10:00 pm</li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-unstyled">
                      <li>Friday: 4:00 pm – 10:00 pm</li>
                      <li>Saturday: 4:00 pm – 10:00 pm</li>
                      <li>Sunday: <strong>Closed</strong></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="contact-form col-md-6 rounded-5 px-3">
          <!-- Column 2 content -->
          <div class="container pt-4">
            <div class="text-center mb-4">
              <h2>Drop Us a Yolk!</h2>
              <p class="text-muted">(Lost? Curious? Just craving waffles? Send us a message and we’ll get crackin)</p>
            </div>

            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="your@email.com">
              </div>

              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Type your message here..."></textarea>
              </div>

              <div class="mb-4">
                <label for="inquiry-type" class="form-label">What's this about?</label>
                <select class="form-select" id="inquiry-type">
                  <option selected disabled>Select one</option>
                  <option>Question</option>
                  <option>Collab Idea</option>
                  <option>Feedback</option>
                  <option>Lost in the alley 😅</option>
                </select>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-dark px-4">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>