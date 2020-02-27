var swiper = new Swiper('.swiper-container', 
{ 
  effect: 'cube',
  loop: true,
  grabCursor: true,

  cubeEffect: 
  {
    shadow: true,
    slideShadows: true,
    shadowOffset: 20,
    shadowScale: 0.94,
  },
  
  autoplay: 
  {
    delay: 3000,
    disableOnInteraction: false,
  },
});