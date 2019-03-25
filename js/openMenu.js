$(document).ready (function () {
    $('#burger').on('change', function () {
        if ($("#burger").prop("checked")) {
            $('.menu__nav').removeClass('hide');
            $('.menu__nav').addClass('show');
            $('.menu__nav').css({'width':'33vw'});
            $('body').css({'overflow':'hidden'});
        } else {
            $('.menu__nav').removeClass('show');
            $('.menu__nav').addClass('hide');
            $('.menu__nav').css({'width':'0vw'});
            $('body').css({'overflow':'visible'});
        }
    });
});
// close popap
$(document).ready (function () {
    $('#close').on('change', function () {
        if ($("#close").prop("checked")) {
            $('.popap__main').removeClass('show');
            $('.popap__main').addClass('hide');
            $('body').css({'overflow':'visible'});
            $('.blackback').removeClass('show');
            $('.blackback').addClass('hide');
        }
    });
});

// open popap
$(document).ready (function () {
    $('.open-popap').click(function () {
        $('.popap__main').removeClass('hide');
        $('.popap__main').addClass('show');
        $('body').css({'overflow':'hidden'});
        $('.blackback').removeClass('hide');
        $('.blackback').addClass('show');
    });
});