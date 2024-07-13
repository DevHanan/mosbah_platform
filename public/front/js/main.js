/*=============== SWIPER JS ===============*/
// let swiperCards = new Swiper(".card__content", {
//   loop: true,
//   spaceBetween: 20,
//   grabCursor: true,
// autoplay: {
//     delay: 3000, // Adjust the delay as needed (in milliseconds)
//     disableOnInteraction: false, // Set to false to keep autoplaying even when user interacts with Swiper
//   },

//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//     dynamicBullets: true,
//   },

//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },

//   breakpoints:{
//     600: {
//       slidesPerView: 2,
//     },
//     968: {
//       slidesPerView: 4,
//     },
//   },
// });


/*=============== SWIPER JS ===============*/
let testimonials = new Swiper(".testimonials .card__content", {
  loop: true,
  spaceBetween: 30,
  grabCursor: true,
  autoplay: {
    delay: 3000, // Adjust the delay as needed (in milliseconds)
    disableOnInteraction: false, // Set to false to keep autoplaying even when user interacts with Swiper
  },

  pagination: {
    el: ".testimonials .swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".testimonials .swiper-button-next",
    prevEl: ".testimonials .swiper-button-prev",
  },

  breakpoints:{
    600: {
      slidesPerView: 2,
    },
    968: {
      slidesPerView: 3,
    },
  },
});

/*=============== SWIPER JS ===============*/
let trainers = new Swiper(".trainers .card__content", {
  loop: true,
  spaceBetween: 30,
  grabCursor: true,
  autoplay: {
    delay: 3000, // Adjust the delay as needed (in milliseconds)
    disableOnInteraction: false, // Set to false to keep autoplaying even when user interacts with Swiper
  },

  pagination: {
    el: ".trainers .swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".trainers .swiper-button-next",
    prevEl: ".trainers .swiper-button-prev",
  },

  breakpoints:{
    600: {
      slidesPerView: 2,
    },
    968: {
      slidesPerView: 4,
    },
  },
});

/*=============== SWIPER JS ===============*/
let students_notes = new Swiper(".students_notes .card__content", {
  loop: true,
  spaceBetween: 30,
  grabCursor: true,
  autoplay: {
    delay: 3000, // Adjust the delay as needed (in milliseconds)
    disableOnInteraction: false, // Set to false to keep autoplaying even when user interacts with Swiper
  },

  pagination: {
    el: ".students_notes .swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".students_notes .swiper-button-next",
    prevEl: ".students_notes .swiper-button-prev",
  },

  breakpoints:{
    600: {
      slidesPerView: 2,
    },
    968: {
      slidesPerView: 3,
    },
  },
});

/*=============== SWIPER JS ===============*/
let partners = new Swiper(".partners .card__content", {
  loop: true,
  spaceBetween: 30,
  grabCursor: true,
  autoplay: {
    delay: 3000, // Adjust the delay as needed (in milliseconds)
    disableOnInteraction: false, // Set to false to keep autoplaying even when user interacts with Swiper
  },

  pagination: {
    el: ".partners .swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".partners .swiper-button-next",
    prevEl: ".partners .swiper-button-prev",
  },

  breakpoints:{
    600: {
      slidesPerView: 2,
    },
    968: {
      slidesPerView: 5,
    },
  },
});


/*=============== SWIPER JS ===============*/
let courses = new Swiper(".courses .card__content", {
  loop: true,
  spaceBetween: 30,
  grabCursor: true,
  autoplay: {
    delay: 3000, // Adjust the delay as needed (in milliseconds)
    disableOnInteraction: false, // Set to false to keep autoplaying even when user interacts with Swiper
  },

  pagination: {
    el: ".courses .swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".courses .swiper-button-next",
    prevEl: ".courses .swiper-button-prev",
  },

  breakpoints:{
    600: {
      slidesPerView: 2,
    },
    968: {
      slidesPerView: 3,
    },
  },
});


/*=============== SWIPER JS ===============*/
let popular_courses = new Swiper(".popular-courses .card__content", {
  loop: true,
  spaceBetween: 30,
  grabCursor: true,
  autoplay: {
    delay: 3000, // Adjust the delay as needed (in milliseconds)
    disableOnInteraction: false, // Set to false to keep autoplaying even when user interacts with Swiper
  },

  pagination: {
    el: ".popular-courses .swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".popular-courses .swiper-button-next",
    prevEl: ".popular-courses .swiper-button-prev",
  },

  breakpoints:{
    600: {
      slidesPerView: 2,
    },
    968: {
      slidesPerView: 4,
    },
  },
});


/*=============== SWIPER JS ===============*/
let nominated_courses = new Swiper(".nominated-courses .card__content", {
  loop: true,
  spaceBetween: 30,
  grabCursor: true,
  autoplay: {
    delay: 3000, // Adjust the delay as needed (in milliseconds)
    disableOnInteraction: false, // Set to false to keep autoplaying even when user interacts with Swiper
  },

  pagination: {
    el: ".nominated-courses .swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".nominated-courses .swiper-button-next",
    prevEl: ".nominated-courses .swiper-button-prev",
  },

  breakpoints:{
    600: {
      slidesPerView: 2,
    },
    968: {
      slidesPerView: 4,
    },
  },
});

/*=============== SWIPER JS ===============*/
let questions = new Swiper(".questions .card__content", {
  loop: false,
  spaceBetween: 30,
  grabCursor: true,

  pagination: {
    el: ".questions .swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: ".questions .swiper-button-next",
    prevEl: ".questions .swiper-button-prev",
  },

  breakpoints:{
    600: {
      slidesPerView: 1,
    },
    968: {
      slidesPerView: 1,
    },
  },
});
