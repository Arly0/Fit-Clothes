<?php
session_start();
if (!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'];

$l_price = 499;
$t_price = 340;
$sh_price = 320;

$sale = 50;

$l_id = 1708;
$t_id = 1709;
$sh_id = 2071;

$product_name = "цвет не определен";

$currency = 'грн';
$marga = 0;
$l_old = floor(($l_price/(100-$sale))*100);
$t_old = floor(($t_price/(100-$sale))*100);
$sh_old = floor(($sh_price/(100-$sale))*100);
$ga = ''; // счётчик гугла
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FIT CLOTHES</title>
    <link rel="icon" href="img/k_2.png">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
</head>
<body>
<!--menu bar item-->


<div class="popap__main hide">
    <label>
        <div class="popap__close">
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <input id="close" class="hide close" name="close" type="checkbox">
    </label>
    <div class="popap__normal">
    <p class="title-head__text popap__title-text">
        Спортивная одежда
    </p>
    <h1 class="title-head__title popap__title">
       Лосины и топы от Bezbrendu
    </h1>
        <div class="popap__grid">
        <p class="popap__form-text">
            Ваше имя
        </p>
        <p class="popap__form-text showDesk">
            Ваш номер телефона
        </p>
        </div>
        <form action="zakaz.php" method="post" name="form" class="popap__form" id="form">
            <div class="popap__grid">
                <input type="text" name="name" class="popap__input" required>
                <p class="popap__form-text showMob">
                    Ваш номер телефона
                </p>
                <input type="text" name="phone" class="popap__input" required>
            </div>

            <div class="popap__center">
            <button type="submit" name="subm" class="popap__subm title-head__btn">Заказать</button>
                <input type="hidden" name="uid" value="<?= $uid ?>">
            </div>
        </form>
    </div>
</div>
<div class="blackback hide"></div>


<header class="header" id="header">
    <menu class="menu" id="menu">

        <!--menu-->
        <div class="hide menu__nav">
            <nav class="nav">
                <ul class="menu__coll">
                    <li class="menu__m"><div class="sel"></div><a class="scrollto menu__link" href="#video">Видео</a></li>
                    <li class="menu__m"><div class="sel"></div><a class="scrollto menu__link" href="#gallery">Галерея</a></li>
                    <li class="menu__m"><div class="sel"></div><a class="scrollto menu__link" href="#descript">Описание</a></li>
                    <li class="menu__m"><div class="sel"></div><a class="scrollto menu__link" href="#buy">Каталог</a></li>
                    <li class="menu__m"><div class="sel"></div><a class="scrollto menu__link" href="#callback">Отзывы</a></li>
                    <li class="menu__m"><div class="sel"></div><a class="scrollto menu__link" href="#delivery">Доставка</a></li>
                </ul>
            </nav>
        </div>
        <label class="burger-container">
            <div class="menu__bar">
                <div class="menu__bar-item">

                </div>
                <div class="menu__bar-item">

                </div>
                <div class="menu__bar-item">

                </div>
            </div>
            <input style="display: none;" type="checkbox" name="burger" id="burger">
        </label>
    </menu>
<div class="container">
    <div class="row">
        <div class="col-lg-5 title-head">
            <p class="title-head__text">
                Спортивная одежда
            </p>
            <h1 class="title-head__title">
                Лосины и топы от Bezbrendu
            </h1>
            <div class="showDesk">
            <h3 class="title-head__action">
                До конца АКЦИИ осталось:
            </h3>
            <div class="title-head__timer">
                <script src="js/megatimer.js"></script>
            </div>

            <button style="margin:50px 0 0 0;" href=".buy__gal" class="title-head__btn scrollto">
                <a style="display: block;
     /*margin: 50px 0 0 0; */
    width: 200%;
    margin-left: -50%;
    height: auto;height: 0px;" class="link ">
                    Перейти  к  каталогу
                </a>
            </button>
            <!-- <a href="#" style="width: 100%; font-family: 'ManropeB';margin-left: 20px; margin-bottom: 50px;" class="open-popap">ЗАКАЗАТЬ</a> -->

            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-6 sale-head">
            <img src="img/k_2(2).png" alt="" class="sale-head__img">
            <h2 class="sale-head__sale">
                sale<br> -50%
            </h2>

            <div style="margin-top: 50px" class="showMob">
                <h3 class="title-head__action">
                    До конца АКЦИИ осталось:
                </h3>
                <div class="title-head__timer">
                    <script src="js/megatimer.js"></script>
                </div>
                <button style="margin: 50px 0 10px 0; " href=".buy__gal" class="title-head__btn scrollto">
                    <a class="link ">
                        Перейти  к  каталогу
                    </a>
                </button><br>
                <!-- <a href="#" style="width: 100%; font-family: 'ManropeB'; margin-bottom: 50px;" class="open-popap">ЗАКАЗАТЬ</a> -->


        </div>
    </div>
</div>
</header>

<section class="video" id="video">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 video__left">
                <h2 class="video__title">
                    Видео
                </h2>
                <p class="video__text">
                    Спортивный комплект не просвечивается. Имеет двухстороннее "дыхание" (нет эффекта "парника"). Отталкивает влагу от тела. Имеет ускоренную сушку и повышенную износостойкость.
                </p>

                <button href=".buy__gal" class="title-head__btn showDesk scrollto">
                    <a class="link ">
                        Перейти  к  каталогу
                    </a>
                </button>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <iframe class="video__watch" src="https://player.vimeo.com/video/285278424?loop=false&amp;autoplay=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media&amp;playsinline=true" allowfullscreen="" allowtransparency="" allow="autoplay" title="Player for Обзор лосин с высокой талией BEZBRENDU SPORT" data-ready="true" tabindex="-1"></iframe>

                <button href=".buy__gal" class="title-head__btn showMob scrollto">
                    <a class="link ">
                        Перейти  к  каталогу
                    </a>
                </button>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>

<section class="gallery" id="gallery">
    <div class="container gallery__container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="gallery__title">
                    Галерея
                </h2>
                <p class="gallery__text">
                    Ощутите на себе преимущества фитнес одежды из профессиональной ткани.<br>

                    То, что ещё вчера использовали только профессиональные спортсмены, сегодня доступно Вам!
                </p>
                <div class="owl1 showMob owl-carousel owl-theme">
                    <div><img style="border: none !important;" src="img/G_1.jpg" alt="" class="gallery__img"></div>
                    <div><img style="border: none !important;" src="img/G_2.jpg" alt="" class="gallery__img"></div>
                    <div><img style="border: none !important;" src="img/G_3.jpg" alt="" class="gallery__img"></div>
                    <div><img style="border: none !important;" src="img/G_4.jpg" alt="" class="gallery__img"></div>
                    <div><img style="border: none !important;" src="img/G_5.jpg" alt="" class="gallery__img"></div>
                    <div><img style="border: none !important;" src="img/G_6.jpg" alt="" class="gallery__img"></div>
                    <div><img style="border: none !important;" src="img/G_7.jpg" alt="" class="gallery__img"></div>
                </div>
                <div class="dots">
                    <img src="img/G_1.jpg" data="0" alt="" class="img-dots active">
                   <img src="img/G_2.jpg" data="1" alt="" class="img-dots">
                  <img src="img/G_3.jpg" data="2" alt="" class="img-dots">
                    <img src="img/G_4.jpg" data="3" alt="" class="img-dots">
                    <img src="img/G_5.jpg" data="4" alt="" class="img-dots">
                    <img src="img/G_6.jpg" data="5" alt="" class="img-dots">
                        <img src="img/G_7.jpg"data="6" alt="" class="img-dots"></div>

                <button href=".buy__gal" class="title-head__btn showDesk scrollto">
                    <a class="link ">
                        Перейти  к  каталогу
                    </a>
                </button>

                <button href=".buy__gal" class="title-head__btn showMob scrollto">
                    <a class="link ">
                        Перейти  к  каталогу
                    </a>
                </button>

            </div>
            <div class="col-lg-1"></div>
            <div style="height: 100%;" class="col-lg-4">
                <div class="owl1 showDesk owl-carousel owl-theme">
                    <div><img style="border: none !important;" src="img/G_1.jpg" alt="" class="gallery__img"></div>
                    <div><img style="border: none !important;" src="img/G_2.jpg" alt="" class="gallery__img"></div>
                    <div><img style="border: none !important;" src="img/G_3.jpg" alt="" class="gallery__img"></div>
                    <div><img style="border: none !important;" src="img/G_4.jpg" alt="" class="gallery__img"></div>
                    <div><img style="border: none !important;" src="img/G_5.jpg" alt="" class="gallery__img"></div>
                    <div><img style="border: none !important;" src="img/G_6.jpg" alt="" class="gallery__img"></div>
                    <div><img style="border: none !important;" src="img/G_7.jpg" alt="" class="gallery__img"></div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="descript" id="descript">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="descript__title">
                    Описание
                </h2>
                <p class="descript__text">
                    <span class="bold">Состав:</span>80% полиэстер, 20% Lycra Sport<br>
                    <span class="bold">Свойства ткани:</span>высокая эластичность,
                    не просвечивается,
                    быстро сохнет после стирки<br>
                    <span class="bold">Размер:</span>XS, S, M<br>
                    <span class="bold">Страна производитель:</span>Украина<br>
                </p>

                <button href=".buy__gal" class="title-head__btn showDesk scrollto" >
                    <a class="link">
                        Перейти  к  каталогу
                    </a>
                </button>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <table class="descrip__table">
                    <tr>
                        <th>Размер</th>
                        <th>Фактический размер</th>
                    </tr>
                    <tr>
                        <td>XS - 40</td>
                        <td>Обхват бедер 80-94 см</td>
                    </tr>
                    <tr>
                        <td>S - 44</td>
                        <td>Обхват бедер 95-99 см</td>
                    </tr>
                    <tr>
                        <td>M - 48</td>
                        <td>Обхват бедер 100-108 см</td>
                    </tr>
                </table>
                <table class="descrip__table_sec">
                    <tr>
                        <th>Размер</th>
                        <th>Фактический размер</th>
                    </tr>
                    <tr>
                        <td>XS</td>
                        <td>Обхват груди до 93 см</td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>Обхват груди 94-100 см</td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td>Обхват груди от 101 см</td>
                    </tr>
                </table>

                    <button href=".buy__gal" class="title-head__btn showMob scrollto">
                        <a class="link">
                            Перейти  к  каталогу
                        </a>
                    </button>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</section>

<section class="buy" id="buy">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="buy__title">
                    Каталог
                </h2>
                <p class="buy__text">
                    Специально для вас отличные спортивные комплекты и доступные цены.

                    При этом фасон, подходит даже для простых прогулок.
                </p>
            </div>
            <div class="col-lg-6"></div>

            <div class="col-lg-12 buy__gal">
                <div class="buy__item blue">
                    <div style=""><img src="img/KR_1.png" alt="" class="buy__item-img"></div>
                    <div style="text-align: center">
                        <p class="buy__char">Комплект: футболка<br>
                            Размеры: XS, S, M<br>
                            Цвет:
                        </p>
                        <ul style="border: none !important;" class="buy__colors">
                            <li class="buy__color-item"><i class="fas fa-circle first-col bluecol select"></i></li>
                            <li class="buy__color-item"><i class="fas fa-circle third-col pinkcol"></i></li>
                            <li class="buy__color-item"><i class="fas fa-circle fifth-col graycol"></i></li>
                        </ul>

                        <h3 class="buy__value">
                            <?=$sh_price?><i class="fas fa-hryvnia"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <span class="strike-value"><strike><?=$sh_old?> <i class="fas fa-hryvnia"></i></strike></span>
                        </h3>
                        <button value="<?=$sh_price?>" style="text-transform: uppercase; ;color: #fff; padding: 15px 50px" id="<?=$sh_id?>" style="margin: 25px 0" class="title-head__btn open-popap">
                            
                                заказать
                        </button>
                    </div>
                </div>
                <div class="buy__item gray">
                    <div style=""><img src="img/DR_4.png" alt="" class="buy__item-img"></div>
                    <div style="text-align: center">
                        <p class="buy__char">Комплект: топ<br>
                            Размеры: XS, S, M<br>
                            Цвет:
                        </p>
                        <ul style="border: none !important;" class="buy__colors">
                            <li class="buy__color-item"><i class="fas fa-circle first-col bluecol"></i></li>
                            <li class="buy__color-item"><i class="fas fa-circle second-col purcol"></i></li>
                            <li class="buy__color-item"><i class="fas fa-circle third-col pinkcol"></i></li>
                            <li class="buy__color-item"><i class="fas fa-circle fifth-col graycol select"></i></li>
                        </ul>

                        <h3 class="buy__value">
                            <?=$t_price?><i class="fas fa-hryvnia"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <span class="strike-value"><strike><?=$t_old?> <i class="fas fa-hryvnia"></i></strike></span>
                        </h3>
                        <button value="<?=$t_price?>" style="text-transform: uppercase; ;color: #fff; padding: 15px 50px" id="<?=$t_id?>" style="margin: 25px 0" class="title-head__btn open-popap">
                            
                                заказать
                        </button>
                    </div>
                </div>
                <div class="buy__item blue">
                    <div style=""><img src="img/L_1.png" alt="" class="buy__item-img"></div>
                    <div style="text-align: center">
                        <p class="buy__char">Комплект: лосины<br>
                            Размеры: XS, S, M<br>
                            Цвет:
                        </p>
                        <ul style="border: none !important;" class="buy__colors">
                            <li class="buy__color-item"><i class="fas fa-circle first-col bluecol select"></i></li>
                            <li class="buy__color-item"><i class="fas fa-circle third-col pinkcol"></i></li>
                            <li class="buy__color-item"><i class="fas fa-circle fifth-col graycol"></i></li>
                        </ul>

                        <h3 class="buy__value">
                            <?=$l_price?><i class="fas fa-hryvnia"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <span class="strike-value"><strike><?=$l_old?> <i class="fas fa-hryvnia"></i></strike></span>
                        </h3>
                        <button value="<?=$l_price?>" style="text-transform: uppercase; ;color: #fff; padding: 15px 50px" id="<?=$l_id?>" style="margin: 25px 0" class="title-head__btn open-popap">
                            
                                заказать
                        </button>
                    </div>
                </div>
                <div class="buy__item gray">
                    <div style=""><img src="img/FF_4.png" alt="" class="buy__item-img"></div>
                    <div id="<?=$sh_id?>" style="text-align: center">
                        <p class="buy__char">Комплект: футболка + лосины<br>
                            Размеры: XS, S, M<br>
                            Цвет:
                        </p>
                        <ul style="border: none !important;" class="buy__colors">
                            <li class="buy__color-item"><i class="fas fa-circle first-col bluecol"></i></li>
                            <li class="buy__color-item"><i class="fas fa-circle third-col pinkcol"></i></li>
                            <li class="buy__color-item"><i class="fas fa-circle fifth-col graycol select"></i></li>
                        </ul>

                        <h3 class="buy__value">
                            <?=($l_price + $sh_price)?><i class="fas fa-hryvnia"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <span class="strike-value"><strike><?=($l_old + $sh_old)?> <i class="fas fa-hryvnia"></i></strike></span>
                        </h3>
                        <button value="<?=($l_price + $sh_price)?>" style="text-transform: uppercase; ;color: #fff; padding: 15px 50px" id="<?=$l_id?>" style="margin: 25px 0" class="title-head__btn open-popap">
                            
                                заказать
                        </button>
                    </div>
                </div>
                <div class="buy__item purple">
                    <div style=""><img src="img/fs_2.png" alt="" class="buy__item-img"></div>
                    <div id="<?=$t_id?>" style="text-align: center">
                        <p class="buy__char">Комплект: топ + лосины<br>
                            Размеры: XS, S, M<br>
                            Цвет:
                        </p>
                        <ul style="border: none !important;" class="buy__colors">
                            <li class="buy__color-item"><i class="fas fa-circle first-col bluecol"></i></li>
                            <li class="buy__color-item"><i class="fas fa-circle second-col purcol select"></i></li>
                            <li class="buy__color-item"><i class="fas fa-circle third-col pinkcol"></i></li>
                            <li class="buy__color-item"><i class="fas fa-circle fifth-col graycol"></i></li>
                        </ul>

                        <h3 class="buy__value">
                            <?=($l_price + $t_price)?><i class="fas fa-hryvnia"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <span class="strike-value"><strike><?=($l_old + $t_old)?> <i class="fas fa-hryvnia"></i></strike></span>
                        </h3>
                        <button value="<?=($l_price + $t_price)?>" style="text-transform: uppercase; ;color: #fff; padding: 15px 50px" id="<?=$l_id?>" style="margin: 25px 0" class="title-head__btn open-popap">
                            
                                заказать
                        </button>
                    </div>
                </div>
                <div class="buy__item pink">
                    <div style=""><img src="img/fs_3.png" alt="" class="buy__item-img"></div>
                    <div id="<?=$t_id?>" style="text-align: center">
                        <p class="buy__char">Комплект: топ + лосины<br>
                            Размеры: XS, S, M<br>
                            Цвет:
                        </p>
                        <ul  style="border: none !important;" class="buy__colors">
                            <li class="buy__color-item"><i class="fas fa-circle first-col bluecol"></i></li>
                            <li class="buy__color-item"><i class="fas fa-circle second-col purcol"></i></li>
                            <li class="buy__color-item"><i class="fas fa-circle third-col pinkcol select"></i></li>
                            <li class="buy__color-item"><i class="fas fa-circle fifth-col graycol"></i></li>
                        </ul>

                        <h3 class="buy__value">
                             <?=($l_price + $t_price)?><i class="fas fa-hryvnia"></i> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <span class="strike-value"><strike><?=($l_old + $t_old)?> <i class="fas fa-hryvnia"></i></strike></span>
                        </h3>
                        <button value="<?=($l_price + $t_price)?>" style="color: #fff; padding: 15px 50px" id="<?=$l_id?>" style="margin: 25px 0" class="title-head__btn open-popap">
                            ЗАКАЗАТЬ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="komp" id="komp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 komp__cont">
                <div class="komp__item">
                    <img src="img/r_1.svg" alt="" class="komp__icon">
                    <p class="komp__text">не задерживает влагу</p>
                </div>
                <div class="komp__item">
                    <img src="img/r_2.svg" alt="" class="komp__icon">
                    <p class="komp__text">повышенная износостойкость</p>
                </div>
                <div class="komp__item">
                    <img src="img/r_3.svg" alt="" class="komp__icon">
                    <p class="komp__text">нет эффекта "парника"</p>
                </div>
                <div class="komp__item">
                    <img src="img/r_4.svg" alt="" class="komp__icon">
                    <p class="komp__text">ускоренная сушка</p>
                </div>
                </div>
        </div>
    </div>
</section>

<section class="callback" id="callback">
    <div class="container callback__container">
        <div class="row">
            <div class="col-lg-6 callback_comm">
                <h2 class="callback__title">
                    Отзывы
                </h2>
                <!--карусель комментариев !!!разные имена с друго каруселью-->
                    <div style="display: block;" class="owl3 owl-carousel owl-theme">
                       <div> <p class="callback__name">
                            Марина Соколова
                        </p>

                        <p class="callback__comment">
                            Комплект просто, как вторая кожа. Он настолько легкий и приятный к телу, что его действительно не чувствуется. Благодаря такой красоте и комфорту, я наконец, начала заниматься спортом. Доставка быстрая, а оплатила уже все на почте. Так что спасибо вам!
                        </p></div>
                        <div> <p class="callback__name">
                            Яна Симонова
                        </p>

                            <p class="callback__comment">
                                Очень удобный комплект! Покупала его для спортзала, но по итогу использую для простых прогулок. Поэтому заказала и второй, только другого цвета. Другой уже точно буду одевать в спортзал. Спасибо вам, буду рекомендовать этот магазин!
                            </p></div></div>

                <button href=".buy__gal" class="title-head__btn showDesk scrollto">
                    <a class="link ">
                        Перейти  к  каталогу
                    </a>
                </button>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <div style="display: block;" class="owl2 owl-carousel owl-theme">
                    <div><img src="img/2.jpg" alt="" class="callback__author-img"></div>
                    <div><img src="img/1.jpg" alt="" class="callback__author-img"></div>
                </div>
                <button href=".buy__gal" class="title-head__btn showMob scrollto">
                    <a class="link ">
                        Перейти  к  каталогу
                    </a>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="delivery" id="delivery">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="delivery__title">
                    Доставка
                </h2>
                <p class="delivery__graph">
                    График работы: Пн-Вс с 9:00 до 22:00
                </p>
            </div>
                <div class="d-flex col-lg-3">
                    <div class="d-flex center"><div style="width: 50px;"><i class="delivery__icon icon_1 fas fa-file-alt fa-2x"></i></div>
                        <div>Оставляете заявку на сайте</div></div>
                </div>
            <div class="col-lg-1"></div>
            <div class="d-flex col-lg-4">
                <div class="d-flex center">   <div style="width: 50px;"><i class="delivery__icon icon_2 fas fa-headphones fa-2x"></i></div>
                    <div>С Вами свяжется менеджер для уточнения деталей заказа</div></div>
            </div>
            <div class="col-lg-1"></div>
            <div class="d-flex col-lg-3">
                <div class="d-flex center">    <div style="width: 50px;"> <i class="delivery__icon icon_3 fas fa-map-marker-alt fa-2x"></i></div>
                    <div> Мы отправляем товар, а Вы оплачиваете его при получении</div></div>
            </div>
            </div>
        </div>
</section>

<section class="header" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 title-head">
                <p class="title-head__text">
                    Спортивная одежда
                </p>
                <h1 class="title-head__title">
                    Лосины и топы от Bezbrendu
                </h1>
                <div class="showDesk">
                    <h3 class="title-head__action">
                        До конца АКЦИИ осталось:
                    </h3>
                    <div class="title-head__timer">
                        <script src="js/megatimer.js"></script>
                    </div>

                    <button href=".buy__gal" class="title-head__btn scrollto">
                        <a class="link">
                            Перейти  к  каталогу
                        </a>
                    </button>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 sale-head">
                <img src="img/k_2(2).png" alt="" class="sale-head__img">
                <h2 class="sale-head__sale">
                    sale<br> -50%
                </h2>

                <div style="margin-top: 50px" class="showMob">
                    <h3 class="title-head__action">
                        До конца АКЦИИ осталось:
                    </h3>
                    <div class="title-head__timer">
                        <script src="js/megatimer.js"></script>
                    </div>

                    <button href=".buy__gal" class="title-head__btn scrollto">
                        <a class="link">
                            Перейти  к  каталогу
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<iframe src="https://adress.officiall.biz.ua/new/" id="adress" frameborder="0" scrolling="no" ></iframe>
        <style type="text/css">
#adress {
width: 100%;
height: 370px;
}
@media screen and (max-width: 500px) {
#adress {
height: 720px;
}
}
</style>

<!--css styles-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/main.css">

<!--js scripts-->
<?php

echo '<script> 
var utm_source__ = \''.$_SESSION['utms']['utm_source'].'\';
var utm_medium__ = \''.$_SESSION['utms']['utm_medium'].'\';
var utm_term__ = \''.$_SESSION['utms']['utm_term'].'\';
var utm_content__ = \''.$_SESSION['utms']['utm_content'].'\';
var utm_campaign__ = \''.$_SESSION['utms']['utm_campaign'].'\';
var server_name__ = \''.$_SERVER['SERVER_NAME'].'\';
var php_self__ = \''.$_SERVER['PHP_SELF'].'\';
</script>';

?>
<script>
    $(document).ready (function (){
        $('.open-popap').click(function(){
            // id
            let id_product = $(this).attr('id');
            // price
            let price_product = $(this).attr('value');
            let comment = '<?=$product_name?>';

            let select = $(this).parent().find(".select");

            // find color
            let classList = $(select).attr('class').split(/\s+/);
            $.each(classList, function (index, item) {
                if (item === 'bluecol') {
                    comment = 'синий цвет';
                }
                else if (item === 'purcol') {
                    comment = 'красный цвет';
                }
                else if (item === 'pinkcol') {
                    comment = 'розовый цвет';
                }
                else if (item === 'graycol') {
                    comment = 'серый цвет';
                }
            });

            let complect = $(this).parent().attr('id');
            if (complect)
                comment += '; комплект с id ' + complect;
            // inputs
            let ga__ = '<?php echo $ga;?>';
            // let frm = document.getElementById('popapch');
            let code =
                '<input type="hidden" name="s1" class="price_field_s1" value="'+price_product+'" />'+
                '<input type="hidden" name="s2" class="price_field_s2" value="'+id_product+'" />'+
                '<input type="hidden" name="s3" class="price_field_s3" value="'+comment+'" />'+
                '<input type="hidden" name="utm_source" value="'+utm_source__+'" />'+
                '<input type="hidden" name="utm_medium"  value="'+utm_medium__+'" />'+
                '<input type="hidden" name="utm_term"  value="'+utm_term__+'" />'+
                '<input type="hidden" name="utm_content"  value="'+utm_content__+'" />'+
                '<input type="hidden" name="utm_campaign" value="'+utm_campaign__+'" />'+
                '<input type="hidden" name="server_name" value="'+server_name__+'" />'+
                '<input type="hidden" name="php_self" value="'+php_self__+'" />'+
                '<input type="hidden" name="ga" value="'+ga__+'" />';
            $('form').append(code);
        });
    });
</script>


<script src="js/owl.js"></script>

<script type="text/javascript">
    $(function() {
        // Owl Carousel
        var owl = $(".owl1");
        owl.owlCarousel({
            items: 1,
            dots: true,
            margin: 100,
            loop: true,
            navText: [
                '<img src="img/strelka_b.svg" class="svg-img_l">',
                '<img src="img/strelka_b.svg" class="svg-img_r">'
            ],
            nav: true,
            responsive:{
                0:{
                    items:1
                }
            },
            autoplay:true,
            autoplayTimeout:8000,
            autoplayHoverPause:true,
            dotsContainer: '.dots',
        });
        $('.dots').on('click', 'img', function(e) {
            owl.trigger('to.owl.carousel', [$(this).index(), 300]);
        });

        var owl2 = $(".owl2");
        owl2.owlCarousel({
            items: 1,
            dots: false,
            margin: 100,
            loop: true,
            navText: [
                '<img src="img/strelka_b.svg" class="svg-img_l callback__arrow-prev">',
                '<img src="img/strelka_b.svg" class="svg-img_r callback__arrow-next">'
            ],
            nav: true,
            mouseDrag: false,
            responsive:{
                0:{
                    items:1
                }
            },
            autoplay:true,
            autoplayTimeout:8000,
            autoplayHoverPause:false
        });

        var owl3 = $(".owl3");
        $('.callback__arrow-next').click(function() {
            owl3.trigger('next.owl.carousel');
        });
        $('.callback__arrow-prev').click(function() {
            owl3.trigger('prev.owl.carousel');
        });
        owl3.owlCarousel({
            items: 1,
            dots: false,
            margin: 100,
            loop: true,
            mouseDrag: false,
            responsive:{
                0:{
                    items:1
                }
            },
            autoplay:true,
            autoplayTimeout:8000,
            autoplayHoverPause:false
        });
        // var owl = $('.owl3');
        // owl.owlCarousel();
        //

    });

</script>

<script src="js/hoverOwlNav.js"></script>
<script src="js/swithcComments.js"></script>
<script src="js/colorBar.js"></script>
<script src="js/selectColor.js"></script>
<script type="text/javascript" src="js/openMenu.js"></script>
<script type='text/javascript' src="js/mask_input.js" ></script>

<script type="text/javascript">
  
  $(document).ready(function() {
$('form').submit(function(event)
    {

     var phon = $(this).find("input[name='phone']").val();

        if (phon.indexOf('_') == -1 && phon != null && typeof phon !== "undefined" && phon!='')
        {

        } else {
        	alert('Введите Ваш номер телефона!');
        	return false;
    	}
   	});
    
 Inputmask.extendDefinitions({
        
          '~': {
            validator: "[1245679]"
          }
          
    });
$("input[name='name']").on("keypress", function (e) {
  return (/[A-Za-zА-Яа-яЁё\s]/.test(String.fromCharCode(e.charCode)));
})
    $("input[name='phone']").inputmask({
        mask: "+38 (0~9) 999-99-99",
        greedy: false,
       clearIncomplete: true,
        placeholder: "_",
        rightAlign: false,
        showMaskOnHover: false,
        showMaskOnFocus: true
    });
    $("input[name='phone']").on("keydown", function (e) {
           
        if(e.keyCode == 37 || e.keyCode == 38 || e.keyCode == 39 || e.keyCode == 40){
         e.preventDefault();
          return false;
        }
        
    });
    

   
  });

    $(document).ready(function(){
        $(".scrollto").on("click", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1000);
        });
    });

    $(document).ready(function () {
       $('.menu__m').click(function () {
           $('.menu__nav').removeClass('show');
           $('.menu__nav').addClass('hide');
           $('.menu__nav').css({'width':'0vw'});
           $('body').css({'overflow':'visible'});
       }) ;
    });
</script>
</body>
</html>