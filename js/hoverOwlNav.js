$(function () {
   $('.svg-img_l').hover(function () {
      $(this).attr('src', 'img/strelka_r.svg');
   },
    function () {
        $(this).attr('src', 'img/strelka_b.svg');
    }
   );
});
$(function () {
    $('.svg-img_r').hover(function () {
            $(this).attr('src', 'img/strelka_r.svg');
        },
        function () {
            $(this).attr('src', 'img/strelka_b.svg');
        }
    );
});