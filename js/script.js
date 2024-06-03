var swiper = new Swiper(".slide_content", {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    // centerSlide: 'ture',
    // fade: 'true',
    // gragCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
      0: {
        slidesPerView: 1,
      },
      600: {
        slidesPerView: 2,
      },
      980: {
        slidesPerView: 4,
      },
    },
  });


  document.getElementsByClassName('.sponsor')