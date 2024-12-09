let a=1;

$('.menuswiper').each(function(){
  
  var menuswiper = new Swiper(this, {
    slidesPerView: 4,
    spaceBetween: 24,
    loop:true,
    navigation: {
        nextEl: '.arrow-right'+a,
        prevEl: ".arrow-left" +a,
      },
      breakpoints: {
        0: {
          slidesPerView: 'auto',
          spaceBetween: 12,
          centeredSlides: true,
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 24,
          centeredSlides: false,
        },
        
      },
  });

  a++;
})




  var reviews = new Swiper(".reviews", {
    slidesPerView: 4,
    spaceBetween: 24,
    loop:true,
    breakpoints: {
        0: {
          slidesPerView: 'auto',
          spaceBetween: 12,
          centeredSlides: true,
          
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 24,
          centeredSlides: false,
        },
        
      },
   
  });

  var whywe = new Swiper(".whywe", {
    slidesPerView: 4,
    spaceBetween: 24,
    loop:true,
    
    breakpoints: {
        0: {
          slidesPerView: 'auto',
          spaceBetween: 32,
          centeredSlides: true,
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 24,
          centeredSlides: false,
        },
        
      },
   
  });
  

  $('.week-menu-tabs_tab').click(function(){
    if (!$(this).hasClass('active')){
      $('.week-menu-tabs_tab').removeClass('active');
      $(this).addClass('active');

      $('.week-menu-tabscontent_tab').removeClass('active');
      $('.week-menu-tabscontent_tab').eq($(this).index()).addClass('active');
    }
  })


$('.cart-text').click(function(){
  $('.cart').addClass('_active');
})

$('.ham').click(function(){
  $('.navigation').addClass('_active')
  $('header__drawer').addClass('_active')
})

Fancybox.bind("[data-fancybox]", {
  
});
