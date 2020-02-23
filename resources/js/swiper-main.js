var swiper = new Swiper('.swiper-container', 
{
  effect: 'flip',
  loop: true,
  grabCursor: true,

  cubeEffect: 
  {
    shadow: true,
    slideShadows: true,
    shadowOffset: 20,
    shadowScale: 0.94,
  },

  pagination: 
  {
    el: '.swiper-pagination',
  },
  
  autoplay: 
  {
    delay: 2000,
    disableOnInteraction: false,
  },
});