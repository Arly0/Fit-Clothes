$(document).ready (function () {
   $(window).scroll(function () {
       let top = $(this).scrollTop(),
           el  = $('.menu__bar-item');
       // el.html(top);
       if(top >= 650)
       {
           el.removeClass('white');
          el.addClass('black');
       }
       else
       {
           el.removeClass('black');
           el.addClass('white');
       }
       // сделать для мобайл
   });
});