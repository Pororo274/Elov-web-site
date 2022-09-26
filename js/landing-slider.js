const currentSlideElem = document.querySelector('.swiper-pagination');


let swiper = new Swiper(".mySwiper", {
  // pagination: {
  //   el: ".swiper-pagination",
  //   type: "fraction",
  // },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

swiper.on('slideChange', function() {
  currentSlideElem.textContent = '0' + (swiper.activeIndex + 1);
})