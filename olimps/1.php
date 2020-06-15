<?php 
    require "db.php";
    //Player`s data
    $email = $_SESSION['logged_user']->email;
    $flag = R::findOne('players1', 'email = ?', array($_SESSION['logged_user']->email));
    if ($flag == false) {
        header('Location: badlog.html');
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="Олімпіади по інформатиці. Новини, завдання, рішення. Автоматична система перевірки">
  <title>MakeSolution - Вітаємо на олімпіаді!</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets3/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets3/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets3/mobirise/css/style.css">
  <link rel="stylesheet" href="assets3/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="icon" href="/img/core-img/favicon.ico">
</head>
<body>
  <section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-1" data-rv-view="25">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="#" class="mbrib-code mbr-iconfont mbr-iconfont-menu"></a></span>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="/index.php">MAKESOLUTION</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="/reg.php">РЕЄСТРАЦІЯ</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="/tasks.php">ЗАДАЧІ</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="olimp.php">ОЛІМПІАДИ</a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="/books.php">КНИГИ</a></li></ul>                            
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-parallax-background mbr-after-navbar" id="testimonials1-c" data-rv-view="0" style="background-image: url(assets3/images/mbr-1920x1228.jpg);">
    <div>
        <div class="mbr-overlay" style="background-color: rgb(34, 34, 34); opacity: 0.5;"></div>
        <div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 62px; padding-bottom: 93px;">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="mbr-section__header">ЗРОБИ УСІ ЗАВДАННЯ І НАДІШЛИ СВІЙ РОЗВ'ЯЗОК</h2>
                    <ul class="mbr-reviews mbr-reviews--wysiwyg row">
                        <li class="mbr-reviews__item col-xs-12 col-sm-6 col-md-4">
                            <a href="https://103181d7.widgets.sphere-engine.com/lp?hash=HfLqo1IkhU" target="_blank" style="text-decoration: none;"><div class="mbr-reviews__text"><p class="mbr-reviews__p">“Дано два числа a та b. Виведіть гіпотенузу трикутника із заданими катетами з точністю 6 знаків.”</p></div></a>
                            <div class="mbr-reviews__author mbr-reviews__author--short">
                                <div class="mbr-reviews__author-name" style="font-size: 1.3em;">Балів: 10</div>
                                <div class="mbr-reviews__author-bio"><strong><a href="index.html#form1-0" class="text-danger" style="font-size: 1.3em;">ЗДАТИ</a></strong></div>
                            </div>
                        </li><li class="mbr-reviews__item col-xs-12 col-sm-6 col-md-4">
                            <a href="https://103181d7.widgets.sphere-engine.com/lp?hash=mdhPqaDI7u" target="_blank" style="text-decoration: none;"><div class="mbr-reviews__text"><p class="mbr-reviews__p">“У деякій країні інфляція досягла таких розмірів, що доходи громадян стали виражатися числами, кількість знаків десяткового запису яких доходить до 200. Це сильно ускладнило завдання збору податків. Один із податків на доходи складає 1%. Напишіть програму, яка за введеним числом D (величині доходу громадянина) обчислить цей податок. При цьому застосовуються такі правила округ...”</p></div></a>
                            <div class="mbr-reviews__author mbr-reviews__author--short">
                                <div class="mbr-reviews__author-name" style="font-size: 1.3em;">Балів: 10</div>
                                <div class="mbr-reviews__author-bio"><strong><a href="index.html#form1-0" class="text-danger" style="font-size: 1.3em;">ЗДАТИ</a></strong></div>
                            </div>
                        </li><li class="mbr-reviews__item col-xs-12 col-sm-6 col-md-4">
                            <a href="https://103181d7.widgets.sphere-engine.com/lp?hash=AFaqynJc4y" target="_blank" style="text-decoration: none;"><div class="mbr-reviews__text"><p class="mbr-reviews__p">“Петрик навчається в початковій школі. Він ще не дуже добре знає англійську абетку і тому дуже засмутився, коли Ольга Павлівна (учителька англійської мови) попросила його переставити літери слова S за абеткою (від «А» до «Z»). Допоможіть Петрику впоратися з завданням.”</p></div></a>
                            <div class="mbr-reviews__author mbr-reviews__author--short">
                                <div class="mbr-reviews__author-name" style="font-size: 1.3em;">Балів: 15</div>
                                <div class="mbr-reviews__author-bio"><strong><a href="index.html#form1-0" class="text-danger" style="font-size: 1.3em;">ЗДАТИ</a></strong></div>
                            </div>
                        </li><li class="mbr-reviews__item col-xs-12 col-sm-6 col-md-4">
                            <a href="https://103181d7.widgets.sphere-engine.com/lp?hash=TDcuTPvGRs" target="_blank" style="text-decoration: none;"><div class="mbr-reviews__text"><p class="mbr-reviews__p">“Задана матриця Neighbors, розмірності n, елементи якої Neighbors (i,j) рівні 1, якщо країни i і j мають спільний кордон, і 0 - в протилежному випадку. Скласти процедуру пошуку країни, що має найбільшу кількість сусідів серед перелічених країн.”</p></div></a>
                            <div class="mbr-reviews__author mbr-reviews__author--short">
                                <div class="mbr-reviews__author-name" style="font-size: 1.3em;">Балів: 10</div>
                                <div class="mbr-reviews__author-bio"><strong><a href="index.html#form1-0" class="text-danger" style="font-size: 1.3em;">ЗДАТИ</a></strong></div>
                            </div>
                        </li><li class="mbr-reviews__item col-xs-12 col-sm-6 col-md-4">
                            <a href="https://103181d7.widgets.sphere-engine.com/lp?hash=s0erk8o1Hb	" target="_blank" style="text-decoration: none;"><div class="mbr-reviews__text"><p class="mbr-reviews__p">“Білочка зібрала в лісі N шишок c горішками. Білочка дуже вибагливе вибирала шишки, і брала тільки ті, в яких рівно M горішків. Також відомо, що для прожитку взимку необхідно не менш як K горішків. Визначте, чи вистачить на зиму горішків білочку.”</p></div></a>
                            <div class="mbr-reviews__author mbr-reviews__author--short">
                                <div class="mbr-reviews__author-name" style="font-size: 1.3em;">Балів: 5</div>
                                <div class="mbr-reviews__author-bio"><strong><a href="index.html#form1-0" class="text-danger" style="font-size: 1.3em;">ЗДАТИ</a></strong></div>
                            </div>
                        </li><li class="mbr-reviews__item col-xs-12 col-sm-6 col-md-4">
                            <a href="https://103181d7.widgets.sphere-engine.com/lp?hash=ErfjKlgOYb" target="_blank" style="text-decoration: none;"><div class="mbr-reviews__text"><p class="mbr-reviews__p">“Організатори олімпіади з програмування, вирішили нагородити її переможців, але в цікавий спосіб. Призерам вручили по N талонів , на кожному із яких вказана сума sk ( в гривнях), на яку він може обміняти даний талон, здавши його в орг...”</p></div></a>
                            <div class="mbr-reviews__author mbr-reviews__author--short">
                                <div class="mbr-reviews__author-name" style="font-size: 1.3em;">Балів: 25</div>
                                <div class="mbr-reviews__author-bio"><strong><a href="index.html#form1-0" class="text-danger" style="font-size: 1.3em;">ЗДАТИ</a></strong></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="msg-box3-0" data-rv-view="22" style="background-color: rgb(255, 255, 255);">
    
    <div class="mbr-section__container container mbr-section__container--first" style="padding-top: 93px;">
        <div class="mbr-header mbr-header--wysiwyg row">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="mbr-header__text">ЯК ПРАВИЛЬНО НАДІСЛАТИ РОЗВ'ЯЗОК?</h3>
                
            </div>
        </div>
    </div>
    <div class="mbr-section__container container mbr-section__container--middle">
        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2"><p>Якщо ви зробили завдання і вирішили його надіслати до жюрі, у формі нижче напишіть своє ім'я, клас, назву завдання і сам код вашої програми.</p><p>УВАГА: якщо ім'я, клас або назва завдання будуть вказані невірно, ваш розв'язок не буде розглядатися і не зарахується!</p><p>Розв'язок до кожного завдання можна надсилати будь-яку кількість разів. Зараховується останній!</p></div>
        </div>
    </div>
    <div class="mbr-section__container container mbr-section__container--last" style="padding-bottom: 93px;">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="mbr-buttons mbr-buttons--center"><a class="mbr-buttons__btn btn btn-lg btn-default" href="index.html#form1-0">Перейти до форми</a> <a class="mbr-buttons__btn btn btn-lg btn-default" href="index.html#contacts3-9">З'явилася проблема?</a></div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="form1-0" data-rv-view="27" style="background-color: rgb(239, 239, 239);">
    
    <div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 93px; padding-bottom: 93px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">НАДІШЛИ РОЗВ'ЯЗОК</h2>
                        </div>
                        <div data-form-alert="true">
                            <div class="hide" data-form-alert-success="true">Ваш розв'язок успішно надісланий!</div>
                        </div>
                        <form action="https://mobirise.com/" method="post" data-form-title="НАДІШЛИ РОЗВ'ЯЗОК">
                            <input type="hidden" value="uBnlIw89laXJtrfzEenP3DPIzTNagRDemVBNlWZCiWHPrht/zfOmlbGEm37wx0OI7w9xx9eLrjY8wuACeU6InQKBVC8ob1NDViEoG4kJdyqC+b8BhFAejuC8cK5zOBOT" data-form-email="true">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required="" placeholder="Ім'я" data-form-field="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" required="" placeholder="Клас" data-form-field="Email">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" required="" placeholder="Назва завдання" data-form-field="Phone">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="7" required="" placeholder="Код вашого розв'язку" data-form-field="Message"></textarea>
                            </div>
                            <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-danger">НАДІСЛАТИ</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>	

<section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-parallax-background" id="contacts3-9" data-rv-view="36" style="background-image: url(assets3/images/mbr-1920x1228.jpg);">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(60, 60, 60);"></div>
    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row" style="padding-top: 45px; padding-bottom: 45px;">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="mbr-contacts__text"><em><strong>Бажаємо успіхів у виконанні завдань! Результати з'являться протягом п'яти днів після закінчення олімпіади на головній сторінці усіх олімпіад</strong></em></p>
                        <p style="padding-top: 10px;" class="mbr-contacts__text"><em><strong>Часу до кінця олімпіади:</strong></em><script src="//megatimer.ru/get/08cae6e35578dbdafb5c56ed4ebc2a26.js"></script></p>
                    </div>
                    <div class="col-sm-6"><ul class="mbr-contacts__list"></ul></div>
                </div>
            </div>
            <div class="mbr-contacts__column col-sm-4" data-form-type="formoid">
                <div data-form-alert="true">
                    <div class="hide" data-form-alert-success="true">Ваш проблема буде розглянута! Незабаром з вами зв`яжеться технічний керівник</div>
                </div>
                <form action="https://mobirise.com/" method="post" data-form-title="ТЕХНІЧНА ПРОБЛЕМА">
                    <input type="hidden" value="EdILAXAEvG/j+1LTYdNAdf7xBOcmez+JZZmo5XGme3Hr/DlvQnM5MDEUfKNj9p2HDvGHKf/rINnDf75LjDerTrVQhPoK923YuBCmpWrTUUNhTZWh+u5Z2uqPcayOnErP" data-form-email="true">
                    
                    <div class="form-group">
                        <input type="text" class="form-control input-sm input-inverse" name="email" required="" placeholder="Ваше ім'я" data-form-field="Email">
                    </div>
                    
                    <div class="form-group">
                        <textarea class="form-control input-sm input-inverse" name="message" rows="4" required="" placeholder="Опис проблеми" data-form-field="Message"></textarea>
                    </div>
                    <div class="mbr-buttons mbr-buttons--right btn-inverse"><button type="submit" class="mbr-buttons__btn btn btn-danger">НАДІСЛАТИ ЛИСТ</button></div>
                </form>
            </div>
        </div>
    </div>
</section>

  <script src="assets3/web/assets/jquery/jquery.min.js"></script>
  <script src="assets3/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets3/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets3/jarallax/jarallax.js"></script>
  <script src="assets3/mobirise/js/script.js"></script>
  <script src="assets3/formoid/formoid.min.js"></script>
</body>
</html>