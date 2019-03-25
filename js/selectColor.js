$(document).ready (function () {
    $('.buy__colors').click(function (event) {
        // находит активный элемент в списке ul элементов, по которым кликнули
        let del = $(this).find(".select");
        // ужадяет класс и добавляет по тому, которому кликнули
        del.removeClass("select");
        // достает эл массива
        let classList = $(event.target).attr('class').split(/\s+/);
        let parent = $(this).parent().parent();
        let numeric, color;
        // перебирает их и в соотв подставляет нужные пикчи и фон
        $.each(classList, function (index, item) {
            if (item === 'bluecol') {
                color = 'blue';
                numeric = 1;
            }
            else if (item === 'purcol') {
                color = 'purple';
                numeric = 2;
            }
            else if (item === 'pinkcol') {
                color = 'pink';
                numeric = 3;
            }
            else if (item === 'graycol') {
                color = 'gray';
                numeric = 4;
            }
            else if(item === 'buy__colors'){
                color = 'blue';
                numeric = 1;
            }
        });
        // замена цвета у блока
        parent.attr('id','spec');
        $('#spec').removeClass();
        $('#spec').addClass('buy__item ' + color + '');
        $('#spec').removeAttr('id');
        $(event.target).addClass("select");

        // switch img
        let imgblock = parent.find(".buy__item-img");
        let img = imgblock.attr('src');
        let regular = /\d/;
        img = img.replace(regular, numeric);

        if(img !== 'undefined')
        {
            $(imgblock).attr('src', img)
        }
        else
            {
                return 0;
            }
    });
});