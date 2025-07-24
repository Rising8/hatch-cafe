var TrandingSlider = new Swiper('.tranding-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2.5,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
       nextEl: '.swiper-button-next',
       prevEl: '.swiper-button-prev',
    }
});

new Swiper(".top-picks-swiper", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,
  centeredSlides: false,

  effect: 'fade',             
  fadeEffect: {
    crossFade: true,          
  },

  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".top-picks-next",
    prevEl: ".top-picks-prev",
  },
  grabCursor: true,
});