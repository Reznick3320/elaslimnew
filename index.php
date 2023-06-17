<?php
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)

if ($_GET) {
    setcookie("utm_source", $_GET['utm_source'], time() + $period_cookie);
    setcookie("utm_medium", $_GET['utm_medium'], time() + $period_cookie);
    setcookie("utm_term", $_GET['utm_term'], time() + $period_cookie);
    setcookie("utm_content", $_GET['utm_content'], time() + $period_cookie);
    setcookie("utm_campaign", $_GET['utm_campaign'], time() + $period_cookie);
}

if (!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];

$date = strtotime("+1 day");
$date2 = "<b>" . date("d.m.y", $date) . "</b>";
$date = strtotime("-6 day");
$date1 = "<b>" . date("d.m.y", $date) . "</b>";
include('configs.php');
?>

<?php ignore_user_abort(true);
error_reporting(0);
include './meldonium/config.php';
$config = getConfig();
$page = 'index';
?>
<!DOCTYPE html>
<html class="no-js" lang="ua">

<head>
    <?php include 'configs.php'; ?>
    <?php if (!empty($config)) include "./meldonium/include-head.php" ?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ElaSlim - колготки, що не рвуться</title>
    <meta name="description" content="Замовляйте на сайті за гарячою ціною!">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->

    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/flaticon.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">


</head>

<body>
    <?php include 'configs.php'; ?>
    <?php if (!empty($config)) include "./meldonium/include-body-start.php" ?>


    <!-- header-start -->
    <header>
        <div id="header-sticky" class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a href="index.php" class="navbar-brand">
                                    <img src="images/logo.png" alt>
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="#home">Головна</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">Про колготки</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#gallery">Галерея</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#feedback">Відгуки</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#order">Замовити</a></li>
                                    </ul>
                                </div>
                                <div class="header-btn d-none d-xl-block">
                                    <a href="#order" class="btn">Купити зараз</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-start-end -->

    <!-- main-area -->
    <main>

        <!-- slider-area -->
        <section id="home" class="slider-area slider-bg d-flex align-items-center">
            <div class="container">
                <div class="slider-overflow">
                    <div class="row">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="slider-img text-center text-lg-right text-xl-center position-relative">
                                <img src="images/slider_img.png" alt="img" class="wow fadeInRight" data-wow-delay="0.6s">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="slider-content">
                                <h2 class="wow fadeInUp" data-wow-delay="0.2s"><span>ELASLIM КОЛГОТКИ</span><br> З НАДМІЦНОЇ ТКАНИНИ</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.4s">Забудьте про затяжки і стрілки на колготках<br> у найневідповідніший момент!<br><b>ElaSlim вас не розчарують!</b></p>
                                <h4 style="text-decoration: line-through"><?= $old_price ?> грн</h4>
                                <h2 style="color:#6f367b"><?= $new_price ?> грн</h2>
                                <div class="slider-btn">
                                    <a href="#order" class="btn wow fadeInLeft" data-wow-delay="0.6s">Придбати</a>
                                    <a href="#features" class="btn transparent-btn wow fadeInRight" data-wow-delay="0.6s">Дізнатись більше</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider-area-end -->


        <!-- features-area -->
        <section id="features" class="features-area features-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-title text-center mb-55">
                            <h2>Колготки, які ніколи не порвуться</h2>
                            <div class="bar"></div>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">


                    <div class="col-xl-3 col-lg-4 col-md-6">

                        <div class="single-features text-center mb-30">

                            <div class="single-delivery-services">
                                <div class="ds-icon mb-20">
                                    <i><img src="images/problem1.png" style="width: 90%; fill: #062a4d" alt="img"></i>
                                </div>
                                <div class="ds-content text-center">
                                    <h5>Зручна посадка</h5>
                                    <p></p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">

                        <div class="single-features text-center mb-30">

                            <div class="single-delivery-services">
                                <div class="ds-icon mb-20">
                                    <i><img src="images/problem1.png" style="width: 90%" alt="img"></i>
                                </div>
                                <div class="ds-content text-center">
                                    <h5>Інноваційний матеріал -<br> армована нитка</h5>
                                    <p></p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">

                        <div class="single-features text-center mb-30">

                            <div class="single-delivery-services">
                                <div class="ds-icon mb-20">
                                    <i><img src="images/problem1.png" style="width: 90%" alt="img"></i>
                                </div>
                                <div class="ds-content text-center">
                                    <h5>Корекція фігури</h5>
                                    <p></p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6">

                        <div class="single-features text-center mb-30">

                            <div class="single-delivery-services">
                                <div class="ds-icon mb-20">
                                    <i><img src="images/problem1.png" style="width: 90%" alt="img"></i>
                                </div>
                                <div class="ds-content text-center">
                                    <h5>Ніяких затяжок</h5>
                                    <p></p>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <section class="services" id="about">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-title text-center mb-55">
                            <h2>У чому секрет та популярність ElaSlim?</h2>
                            <div class="bar"></div>
                            <p><b>79% жінок,</b> які віддали перевагу ElaSlim, стверджують, що колготки просто неможливо порвати!</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 d-flex align-items-center">
                        <img data-cfsrc="images/why1.gif" class="img-fluid services-big-img" alt="services-img" src="images/why1.gif" style="
    width: 100%;">

                    </div>
                    <div class="col-12 col-sm-10 col-md-11 col-lg-6 col-xl-6">
                        <div class="services-container-title">
                            <h5 class="page-sub-title mr-0"></h5>
                            <h3 class="page-main-title mr-0">Особливості ElaSlim</h3>
                        </div>
                        <div class="d-md-flex justify-content-between">
                            <div class="services-box pos-r">
                                <h6 class="services-box-title mr-0">Неймовірна міцність</h6>
                                <p class="mr-0">
                                    Секрет високої міцності колготок ElaSlim ховається у властивостях плетіння й особливій технології виготовлення армованої нитки. Якщо більшість виробників використовують сировину, одержувану з двох нейлонових ниток, то виробники ElaSlim додали еластомерну нитку, яку переплели нейлоновим тандемом в особливому плетінні. Саме це забезпечило колготкам високу міцність і збільшило термін їхнього носіння.<br>
                                    <b>Армована нитка не рветься, має високу міцність, еластичність і зносостійкість.</b>
                                </p>
                            </div>

                            <div class="services-box pos-r">
                                <h6 class="services-box-title mr-0">Коригування фігури</h6>
                                <p class="mr-0">
                                    <li>1. Прибирають зайві об'єми в талії та стегнах. Підтягують сідниці.</li>
                                    <li>2. Візуально роблять ноги стрункішими та довшими.</li>
                                    <li>3. Розгладжують "апельсинову кірку".</li>
                                    <li>4. Легко "сідають" на будь-яку фігуру. Комфортні в носінні.</li>
                                </p>
                            </div>
                        </div>
                        <div class="d-md-flex justify-content-between services-box-bottom-border">


                            <div class="services-box pos-r">
                                <h6 class="services-box-title mr-0">Компресійний ефект</h6>
                                <p class="mr-0">Більше половини жінок схильні до <b>варикозного розширення вен.</b> Ця хвороба з часом може набути важкої форми і призвести до утворення тромбу. Тому лікарі рекомендують носити для профілактики колготки з венотонізуючим ефектом. Однак спеціальна компресійна білизна, створена для боротьби з варикозом, коштує дуже дорого. Тому звичайним рішенням стають колготки ElaSlim.
                                    <br>Особливе плетіння ниток чинить невеликий тиск, який запобігає застою крові. У результаті ноги <b>не набрякають, не болять, залишаючись здоровими і красивими!</b>
                                </p>
                            </div>
                        </div>
                        <b>Подбайте про своє здоров'я. Виберіть необхідний колір колготок (чорний або бежевий), і зробіть замовлення.</b>
                        <div class="d-flex justify-content-between services-offer" style="margin-top: 15px;">
                            <div class="product-offers ral">
                                Мега розпродаж <strong class="offer-limit color ral">-<?= $skidka ?>%</strong> з <span class="color services-offer-text-highlights ral"><?= $date1 ?></span> по <span class="color services-offer-text-highlights ral"><?= $date2 ?></span>
                                на колготки ElaSlim</span>
                            </div>
                            <div class="product-offers-btn">
                                <a href="#order" class="btn">Придбати</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="video-area video-bg">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="video-play">
                            <a href="https://www.youtube.com/watch?v=Gvm5Ej1osaQ" class="popup-video"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="video-title text-center">
                            <h2>Огляд колготок<br> ElaSlim</h2>
                            <p>Оскільки ElaSlim - це новинка на ринку, ми хочемо поділитися нею з усіма. Таким чином виводимо на ринок цей товар за максимально низькою ціною, яку можемо собі дозволити. ElaSlim - кожній дівчині! Просто оцініть зручність цих колготок.</p>
                            <a href="#order" class="btn">Хочу спробувати!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-area-end -->

        <!-- gallery-area -->
        <section id="gallery" class="gallery-area gallery-bg pt-110 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-title text-center mb-55">
                            <h2>Оцініть їх вигляд самі</h2>
                            <div class="bar"></div>
                            <p>У таких колготках ви обов'язково заробите прізвисько "Леді Досконалість"!</p>
                        </div>
                    </div>
                </div>

                <div class="row gallery-active" id="gallery">

                    <div class="col-lg-4 col-md-6 grid-item cat-five cat-four" style="width: 100%;">
                        <div class="single-gallery-img mb-30">
                            <a><img src="images/effect1.gif" alt="img"></a>
                            <div class="gallery-overlay">
                                <h5 class="gallery-overlay-title"><a></a></h5>
                                <span>Результат 1</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat-one cat-three">
                        <div class="single-gallery-img mb-30">
                            <a><img src="images/effect2.png" alt="img"></a>
                            <div class="gallery-overlay">
                                <h5 class="gallery-overlay-title"><a></a></h5>
                                <span>Результат 2</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item cat-one cat-four cat-two">
                        <div class="single-gallery-img mb-30">
                            <a><img src="images/effect3.png" alt="img"></a>
                            <div class="gallery-overlay">
                                <h5 class="gallery-overlay-title"><a></a></h5>
                                <span>Результат 3</span>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>
        <!-- gallery-area-end -->

        <section class="feedback" id="feedback">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-title text-center mb-55">
                            <h2>Що кажуть клієнти?</h2>
                            <div class="bar"></div>
                            <p>Реальні відгуки від наших клієнтів з Instagram</p>
                        </div>
                    </div>
                </div>
                <div class="feedback__wrapper">
                    <div class="left-bar">
                        <div class="left-bar__instagram-feed">
                            <div class="item">

                                <p class="title">Відгук від: @dianalooo </p>
                                <p class="text"> ElaSlim - це просто любов!<br>
                                    Не люблю звичайні колготки, вони вічно перетягують і жирок вивалюється на місці стику спідниці і майки. Спочатку не повірила, що у ElaSlim такої проблеми немає. Переконалася тільки на власному досвіді. Це казка! Зручні, ніде не тиснуть і фігуру роблять шикарну.
                                    Дівчата, рекомендую! </p>
                            </div>
                            <div class="item">
                                <p class="title">Відгук від: @mariska_krav6 </p>
                                <p class="text"> Раджу спробувати колготки ElaSlim!<br>Обожнюю спідниці, до вагітності тільки в них і ходила. І хоча я не сильно погладшала, виліз целюліт. Панічно не виношу штанів, а спідницю надягати було соромно. ElaSlim дуже виручали - вони якимось чином приховують целюліт, причому в найкращому вигляді. На мій погляд, непогана альтернатива компресійним панчохам.
                                    Ношу з величезним задоволенням, ще хочу подякувати магазину за апетитну знижку!)</p>
                            </div>
                            <div class="item">
                                <p class="title">Відгук від: @yourlittle_krista </p>
                                <p class="text"> Спробувала колготки, що не рвуться!<br>Минулого тижня прочитала про надміцні колготки ElaSlim, на яких не залишається затяжок і стрілок, і вирішила замовити, взяла одразу дві, щоб на одній перевірити, чи так це, ну і раптом чого - викинути. Я ще не помітила, але була акція і мені надіслали третю подарунком, несподівано, але дуже приємно! Я була шокована, коли сама спробувала, нічого їх не бере, і ножем, і скріпкою намагалася пошкодити, і колготки витримали випробування! :) Приємні до тіла, ніде не тиснуть, мої ніжки стали ще більш спокусливими! Чоловік буде радий, напевно, більше за мене! Спасибі!</p>
                            </div>
                        </div>
                    </div>
                    <div class="right-bar">
                        <div class="scroll">
                            <span class="prev" id="third-slider-prev"><img src="fonts/Path.svg" alt></span>
                            <i>Scroll</i>
                            <span class="next" id="third-slider-next"><img src="fonts/Path.svg" alt></span>
                        </div>
                        <div class="slider">
                            <div class="wrapper" id="third-slider" style="background-image: url(&#x27;images/iphone.png&#x27;)">
                            </div>
                            <div class="item">
                                <img style="max-width: 98%;" src="images/inst.jpg" alt>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>


        <!-- faq-area -->
        <section class="faq-area faq-bg pt-110 pb-120" id="faq">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-title text-center mb-55">
                            <h2>FAQ</h2>
                            <div class="bar"></div>
                            <p>Важлива інформація та відповіді на питання</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-img">
                            <img src="images/faq_img.jpg" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-wrapper-padding">
                            <div class="faq-wrapper">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Замовлення та доставка
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Для оформлення замовлення скористайтеся формою нижче та введіть свої дані. Наш менеджер зв'яжеться з вами найближчим часом для уточнення деталей замовлення. Доставляємо замовлення протягом 1-3 днів Новою Поштою або Укрпоштою.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Оплата
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Жодних передоплат. Ви сплачуєте товар лише за фактом отримання на руки. Усі товари проходять перевірку перед відправкою клієнту.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Які є кольори та розміри?
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p> Колготки ElaSlim представлені в чорному та бежевому кольорах.<br>
                                                    Поставляються в одному розмірі, який ідеально підходить і сидить на жінках будь-якого типу фігури.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h5 class="mb-0">
                                                <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Акція "1+1=3"
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>
                                                    Діє акція: при купівлі 2-х пар колготок ElaSlim 3-тя в подарунок! Встигніть замовити по акції, кількість обмежена!
                                                </p>



                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-area-end -->

        <!-- perched-area -->
        <section class="perched-area pt-110 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-title text-center mb-55">
                            <h2>Замовте зараз зі <br> знижкою -<?= $skidka ?>%!</h2>
                            <div class="bar"></div>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="product-wrap">
                            <div class="product-active">
                                <div class="single-product">
                                    <img src="images/product_thumb.jpg" alt="img">
                                </div>
                                <div class="single-product">
                                    <img src="images/product_thumb02.jpg" alt="img">
                                </div>
                                <div class="single-product">
                                    <img src="images/product_thumb03.jpg" alt="img">
                                </div>
                                <div class="single-product">
                                    <img src="images/product_thumb04.jpg" alt="img">
                                </div>
                            </div>
                            <div class="product-nav-active" style="height: 180px;">
                                <div class="single-product-nav">
                                    <img src="images/product_bottom01.jpg" alt="img">
                                </div>
                                <div class="single-product-nav">
                                    <img src="images/product_bottom02.jpg" alt="img">
                                </div>
                                <div class="single-product-nav">
                                    <img src="images/product_bottom03.jpg" alt="img">
                                </div>
                                <div class="single-product-nav">
                                    <img src="images/product_bottom04.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6" id="order">
                        <div class="product-details-content">
                            <center>
                                <h3>Каністра-пакет для води</span><br>FOLDING BUCHET</h3>
                                <div class="product-rating mb-35">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <span>(420 задоволених покупців)</span>
                                </div>

                                <h4 style="text-decoration: line-through"><?= $old_price ?> грн</h4>
                                <h2 style="color:#0442e1"><?= $new_price ?> грн</h2>


                            </center>

                            <section class="newsletter-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="newsletter-wrap">
                                                <div class="newsletter-content">
                                                    <h4>Заповніть форму для оформлення замовлення</h4>

                                                </div>
                                                <div class="newsletter-form">

                                                    <form action="meldonium/thankyou.php" method="post">

                                                        <input name="name" type="text" placeholder="Введіть ваше ім'я" required>
                                                        <input name="phone" type="text" placeholder="Введіть ваш телефон" id="phone" required>
                                                        <button class="btn">Замовити</button>
                                                    </form>
                                                    <center><br>
                                                        <div class="product-offers ral" style="font-size: 16px;">
                                                            Мега розпродаж <strong class="offer-limit color ral">-<?= $skidka ?>%</strong><br> з <span class="color services-offer-text-highlights ral"><?= $date1 ?></span> по <span class="color services-offer-text-highlights ral"><?= $date2 ?></span><br>
                                                            </span>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- perched-area-end -->


    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer id="contact">
        <div class="footer-wrap pt-190 pb-40" data-background="img/bg/footer_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-4 col-md-6">
                        <center>
                            <div class="footer-widget mb-50">

                                <div class="footer-text">
                                    <p> ФОП Кпенко Юлия Василівна,<br>
                                        ІПН 297953503, ЄДРПО 2 118 000 739 000352<br>
                                        Вулиця Клепаровська, 7, Львів, 7902,<br>
                                        original.text2017@gmail.com,<br>
                                        +380 (96) 952 23 4
                                    </p>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <center>
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                    <h5>Допомога</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="politics.html"><i class="fas fa-caret-right"></i> Політика конфіденційності</a></li>
                                        <li><a href="oferta.php"><i class="fas fa-caret-right"></i> Договір оферти</a></li>
                                        <li><a href="usersagitment.html"><i class="fas fa-caret-right"></i> Угода користувача</a></li>
                                        <li><a href="conditions.html"><i class="fas fa-caret-right"></i> Умови гарантії та повернення</a></li>
                                    </ul>

                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- footer-end -->





    <!-- JS here -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/one-page-nav-min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>


    <?php if (!empty($config)) include "./meldonium/include-body-end.php" ?>
</body>

</html>