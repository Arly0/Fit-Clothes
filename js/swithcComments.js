(function () {
   $('callback__author-img').change(function () {
       let name = $('callback__name'),
       comment = $('callback__comment'),
       arrComments = [
           [
               "Марина Соколова",
               "Комплект просто, как вторая кожа. Он настолько легкий и приятный к телу, что его действительно не чувствуется. Благодаря такой красоте и комфорту, я наконец, начала заниматься спортом. Доставка быстрая, а оплатила уже все на почте. Так что спасибо вам!!!"
           ],
           [
               "Яна Симонова",
               "Очень удобный комплект! Покупала его для спортзала, но по итогу использую для простых прогулок. Поэтому заказа и второй, только другого цвета. Другой уже точно буду одевать в спортзал. Спасибо вам, буду рекомендовать этот магазин!"
           ]
       ];
        let i = $(this).attr('src');
        alert(i);
        console.log('hi');
   });
});