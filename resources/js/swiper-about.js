var swiper = new Swiper('.swiper-container', 
{
    //scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
        hide: true,
      },
    
    //шоб не фиксировался  
    slidesPerView: 3,
    spaceBetween: 30,
    // freeMode: true,

    //чтоб с первого на пятый в обратку можно было
    loop: true,

    //шоб сам дрыгался
    // autoplay:
    // {
    //   delay: 2500,
    //   disableOnInteraction: false,
    // },

    loopFillGroupWithBlank: true
});