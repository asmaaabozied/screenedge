

$(document).ready(function(){
    // navbar
    $('.myDrbDwn').click(function(){
        $('.showenDrb').fadeToggle();
    })
    $('nav .menuLi a').click(function(){
        $('.showenDrb').fadeOut();
    })
   
    // img section 
    var xx = $(window).height();
    $('.bigImg img').css('height',xx-200);
    // slider or not
    $('.companies').slick({
        infinite: true,
        autoplay:true,
        slidesToShow: 5,
        slidesToScroll: 1,
        dots:false,
        rtl:true,
        ltr:true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
      });
    //company page
    var x = $('.servImg img').height();
    $('.servBg').css('height',x);
    $('.servBg p').css('height',x-140);
    $('.servCont ul').css('height',x-140);
   //about sliders servImg
    $('.abtSml .servImg').slick({
      infinite: true,
      autoplay:true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots:false,
      // rtl:true,
      // ltr:true
    });
    
})