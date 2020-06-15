<?php
    require "db.php";

    //CSRF protect Area start

    $csrf_token = '';
    if ( version_compare(PHP_VERSION, '7.0.0', '>=') ) {
        $csrf_token = bin2hex(random_bytes(32));
    } else {
        if ( function_exists('mcrypt_create_iv') ) {
            $csrf_token = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
        } else {
            $csrf_token = bin2hex(openssl_random_pseudo_bytes(32));
        }
    }

    //CSRF protect Area end
    $data = $_POST;

    if ( $_SESSION['logged_user']->login == "")  {
        $user_in = " ";
    } else
        $user_in = $_SESSION['logged_user']->login." &larr; Перейдіть у свій кабінет";

    if ( isset($data['do_login']) ) {

        $errors = array();
        global $errors;
        $user = R::findOne('users', 'email = ?', array($data['email']));

        if ( $user ) {
            //login is
            if ( md5($data['password']) == $user->password ) {
                //all is good, user come in
                $_SESSION['logged_user'] = $user;
                $user_in = $_SESSION['logged_user']->login." &larr; Перейдіть у свій кабінет";
            }
            else {
                $errors[] = 'Пароль неправильно введено!';
            }
        }
        else {
            $errors[] = 'Користувача з таким еmail не знайдено!';
        }

        if ( ! empty($errors) ) {
            $error_in = array_shift($errors);
        }
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Олімпіади по інформатиці. Новини, завдання, рішення. Автоматична система перевірки">
    <meta name="robots" content="all">
    <meta name="keywords" content="завдання з програмування, розбір завдань, розв'язання олімпіадних завдань, автоматична система перевірки, acm">

    <!-- Title -->
    <title>Make Solution - Місце для справжніх програмістів!</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Local Styles -->
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

    <style>
        .hover_effect {
            background-color: transparent;
        }

        .hover_effect img {
            position: absolute;
            width: 100%;
            transition: 0.5s;
        }

        .hover_effect img:hover {
            transform: scale(1.2);
        }
    </style>

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <a class="navbar-brand" href="index.php">Ms</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <?php 
                                        $labels = ['Головна', 'Задачі', 'Корисні ресурси', 'Мови', 'Олімпіади', 'Правила сайту', 'Зворотній зв`язок', 'Книги для навчання']
                                        $links = ["#home", "#about", "#features", "#screenshot", "#pricing", "#team", "#contact", "books.php"]
                                        for ($i=0; $i < count($labels); $i++) { 
                                    ?>
                                            <li class="nav-item active"><a class="nav-link" href="<?php echo $links[$i]; ?>"><?php echo $labels[$i]; ?></a></li>
                                       <?php } ?>
                                </ul>
                                <div class="sing-up-button d-lg-none">
                                    <a href="reg.php">Реєстрація</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Signup btn -->
                <div class="col-12 col-lg-2">
                    <div class="sing-up-button d-none d-lg-block">
                        <a href="reg.php">Реєстрація</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
      <!-- Welcome thumb -->
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                    <div class="wellcome-heading">
                        <h2>Make Solution</h2>
                        <h3>Ms</h3>
                        <p>Доведи всім,що твій код найкращий. Ставай професіоналом першим!</p>
                    </div>
                    <div class="get-start-area">
                        <!-- Form Start -->
                        <form action="index.php" method="post" class="form-inline">
                            <input type="email" class="form-control email" name="email" placeholder="Email" value="<?php echo @$data['email']; ?>">
                            <input type="password" class="form-control email" name="password" placeholder="Пароль" value="<?php echo @$data['password']; ?>">
                            <input type="hidden" name="csrf" value="<?php echo $csrf_token; ?>">
                            <input type="submit" class="submit" name="do_login" value="Вхід">
                        </form>
                        <!-- Form End -->
                        <p>
                            <a href="reg.php" class="text-white">Ще не зареєстровані?</a>
                            <a href="logout.php">Вихід</a>
                            <a href="cab.php" target="_self" class="text-white"><?php echo '<div style="color: white;">'.@$user_in.'</div>';
                            ?></a>
                            <?php
                                echo '<div style="color: red;">'.@$error_in.'</div>';
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-thumb wow fadeInDown">
          <img src="img/bg-img/welcome.png" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2>Зроби Тут Усе</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <i class="ti-mobile" aria-hidden="true"></i>
                        </div>
                        <h4>Пиши код усюди</h4>
                        <p>На сайті можна працювати як з комп'ютера, так і з телефону чи інших пристроїв. Також свої рішення можна писати одразу на сайті</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <i class="ti-ruler-pencil" aria-hidden="true"></i>
                        </div>
                        <h4>Великий вибір</h4>
                        <p>Тут підтримуються більше 10 різних мов програмування: від C# і Go до Ruby і Python</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h4>Для усіх</h4>
                        <p>Ви можете знайти завдання різної складності: від новачків і до справжніх профі</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Special Description Area -->
        <div class="special_description_area mt-150"  id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_description_img hover_effect">
                            <img src="img/bg-img/special-gif.gif" heigh="284px" width="600px" alt="gif`s here">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto">
                        <div class="special_description_content">
                            <h2>Ніколи не обмежуй себе і Твори!</h2>
                            <p>Хочеш навчитися кодити на своїй улюбленій мові програмування? Чи на декількох одразу? Шукаєш, де навчитися алгоритмізації? Тоді вирішуй усі завдання на цьому сайті і покращуй свої навички. Також на цьому сайті зібрана література для програмістів з різних мов на різних мовах <a href="books.php">Перейти</a>.</p>
                            <p><a href="help.html">Інструкція</a> по роботі на сайті</p>
                            <div class="app-download-area">
                                <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Google Store Btn -->
                                    <a href="tasks.php">
                                        <i class="fas fa-space-shuttle"></i>
                                        <p class="mb-0"><span>список усіх</span> Завдань</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->

    <!-- ***** Awesome Features Start ***** -->
    <section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="features">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <h2>Корисні ресурси</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
            <?php 
                $labels = ['Python', 'Codeacademy', 'Dev C++', 'Sublime Text', 
                        'Go (Golang)', 'Java SE Development Kit', 'Atom', 'Visual Studio', 
                        'Notepad++']
                $descs = ['Завантажте одну з найпопулярніших мов програмування у світі з<a href="https://www.python.org/downloads/" target="_blank"> офіційного сайту</a>',
                        'Codecademy — це інтерактивна онлайн-платформа з навчання 7 мовам програмування: Python, PHP, jQuery, JavaScipt, Ruby а також мови опису зовнішнього виду сторінки HTML та CSS. <a href="https://www.codecademy.com/" target="_blank">Офіційний сайт</a>',
                        'Dev-C++ — вільне інтегроване середовище розробки для мов програмування С/С++. <a href="https://sourceforge.net/projects/dev-cpp/" target="_blank">Завантажити</a>',
                        'Sublime Text — швидкий кросплатформенний редактор початкових текстів програм. Завантажити з <a href="https://www.sublimetext.com/3" target="_blank"> офіційного сайту</a>',
                        'Go (Golang) - компільована багатопоточна мова програмування, розроблена всередині компанії Google. Останню версію компілятора завжди можна<a href="https://golang.org/dl/" target="_blank"> завантажити </a>з офіційного сайту',
                        'Java - об`єктно-орієнтована мова програмування. Програми Java зазвичай транслюються в спеціальний байт-код, тому вони можуть працювати на будь-який віртуальної Java-машині незалежно від комп`ютерної архітектури.<a href="https://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html" target="_blank">Завантажити</a>',
                        'Atom — розроблений компанією «GitHub» вільний текстовий редактор і редактор коду, який може використовуватися як самодостатнє рішення, так і у ролі технологічного стека для побудови різних спеціалізованих рішень. Його можна завантажити з <a href="https://atom.io/" target="_blank"> офіційного сайту</a>',
                        'Microsoft Visual Studio — серія продуктів фірми Майкрософт, які включають інтегроване середовище розробки програмного забезпечення та ряд інших інструментальних засобів. Завантажте з<a href="https://visualstudio.microsoft.com/ru/" target="_blank"> офіційного сайту</a>',
                    'Notepad++ — текстовий редактор, призначений для програмістів і тих, кого не влаштовує скромна функціональність «блокнота», що входить до Windows. Його можна завантажити з <a href="https://notepad-plus-plus.org/download/v7.5.9.html" target="_blank"> офіційного сайту</a>']
                $icons = ["fab fa-python", "fas fa-code", "fab fa-dev", "fab fa-stripe-s",
                          "fab fa-google", "fab fa-java", "fas fa-atom", "fab fa-codepen", "fas fa-atlas"]
            ?>
            <div class="row">
                <?php 
                    for ($i=0; $i < count($labels); $i++) { ?>
                        <!-- Single Feature Start -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                                <div class="single-feature">
                                    <i class=<?php echo $icons[$i]; ?>></i>
                                    <h5><?php echo $labels[$i]; ?></h5>
                                    <p><?php echo $descs[$i]; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
            </div>
        </div>
    </section>
    <!-- ***** Awesome Features End ***** -->

    <!-- ***** App Screenshots Area Start ***** -->
    <section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="screenshot">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Мови, на яких ви можете писати</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshots Slides  -->
                    <div class="app_screenshots_slides owl-carousel">
                        <?php for ($i=1; $i <= 14; $i++) { ?>
                            <div class="single-shot">
                                <img src="img/scr-img/lang<?php echo($i); ?>.jpg" style="border-radius: 35px;" alt="">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** App Screenshots Area End *****====== -->

    <!-- ***** Pricing Plane Area Start *****==== -->
    <section class="pricing-plane-area section_padding_100_70 clearfix" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text  -->
                    <div class="section-heading text-center">
                        <h2>Олімпіади</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
              <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">Hello World!</strong>
                <h3 class="mb-0">
                  <a class="text-dark" href="#">Хочеш позмагатися?!</a>
                </h3>
                <div class="mb-1 text-muted">Це реально!</div>
                <p class="card-text mb-auto">Тут ви зможете взяти участь у різноманітних олімпіадах, де будуть представлені завдання різної складності</p>
                <p class="card-text mb-auto">Результати:<a href="#"> з'являться незабаром. Очікуйте!</a></p>
                <a class="btn btn-info" href="olimps/olimp.php" role="button">Перейти на сайт олімпіад</a>
              </div>
              <svg class="bd-placeholder-img card-img-right flex-auto d-none d-lg-block" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                <title>Placeholder</title>
                <img src="img/scr-img/cup.png" alt="Winner`s cup" width="200px" height="250px">
              </svg>
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plane Area End ***** -->

    <!-- ***** Our Team Area Start ***** -->
    <section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Правила сайту</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 container">
                  <p>Ми настійно рекомендуємо прочитати справжні правила, це займе у вас кілька хвилин, але збереже нам і Вам час і допоможе зробити сайт більш цікавим і організованим. Недотримання правил може призвести до обмеження доступу до ресурсу, або видалення облікового запису!</p>
                  <p>Просимо дотримуватися таких правил:</p>
                  <p>
                  <ul id="rules">
                    <li>не використовувати вирази, що містять ненормативну лексику, принижують людську гідність, розпалюють міжнаціональну ворожнечу;</li>
                    <li>не допускати образ і погроз на інших відвідувачів сайту;</li>
                    <li>не можна поширювати спам, а також рекламу будь-яких товарів і послуг, інших ресурсів, ЗМІ або подій;</li>
                    <li>зворотній зв'язок призначений для відгуків та пропозицій, але ніяк не для питань адміністратору, обговорення завдань і т.д;</li>
                    <li>забороняється залишати значні шматки коду програм в обговореннях;</li>
                    <li>категорично забороняється розміщувати тексти правильних рішень;</li>
                    <li>забороняються багаторазові спроби закачування рішень за короткий проміжок часу і інші дії, що перешкоджають іншим користувачам вирішувати завдання;</li>
                    <li>не допускаються надмірно "яскраві" імена учасників або команд в паспорті.</li>
                  </ul>
                  </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area End ***** -->

    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Напиши нам лист!</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>Якщо ви маєте пропозицію чи скарги на роботу сайту або інші проблеми, можете написати нашій команді, і відповідь буде неодмінно!</p>
                    </div>
                    <div class="address-text">
                        <p><span>Адреса:</span> вулиця Монастирська, 4, Вінниця, Україна</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Творчий ІТ блог:</span> <a href="https://nyukers.blogspot.com/" target="_blank"> Eugeneer's Digital Cloud World</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <div class="media-container-column" data-form-type="formoid">
                        <div data-form-alert="" hidden="" class="align-center">Ваше повідомлення успішно відправлено!</div>
                        <form class="mbr-form" action="https://mobirise.com/" method="post" data-form-title="Відгук"><input type="hidden" name="email" data-form-email="true" value="2tt7jPTYEwfTRfJrTDqmmik6/fpKp+9uCZ1Th3QzzLenr2NQC1uz2Rm6Sw8cg+BJlXnfGb6zVjG0/pPxdLE7KBxweCWNdUGbvKHIoQlmbUKJqrfqWYag2W+vSQ7tQZPn">
                            <div data-for="name">
                                <div class="form-group">
                                    <input type="text" class="form-control px-3" name="name" data-form-field="Name" required="" placeholder="Ім'я" required="" id="name-header15-b">
                                </div>
                            </div>
                            <div data-for="email">
                                <div class="form-group">
                                    <input type="email" class="form-control px-3" name="email" data-form-field="Email" required="" placeholder="Email" required="" id="email-header15-b">
                                </div>
                            </div>
                            <div data-for="phone">
                                <div class="form-group">
                                    <input type="tel" class="form-control px-3" name="phone" data-form-field="Phone" required="" placeholder="Тема" id="phone-header15-b">
                                </div>
                            </div>
                            <div class="form-group" data-for="message">
                                <textarea type="text" class="form-control px-3" name="message" rows="7" placeholder="Повідомлення" required="" data-form-field="Message" id="message-header15-b"></textarea>
                            </div>
                            <span class="input-group-btn"><button href="" type="submit" class="btn btn-success btn-lg btn-form display-4">Відправити</button></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text">
            <h2>Ms</h2>
        </div>
        <!-- Foooter Text-->
        <div class="copyright-text">
            <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
            <p>Copyright ©<?php echo date("Y"); ?> Ms. </p>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>

    <!-- Local Scripts -->
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>
</body>

</html>
