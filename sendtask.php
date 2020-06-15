<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="icon" href="img/core-img/favicon.ico">
  <meta name="description" content="Олімпіади по інформатиці. Новини, завдання, рішення. Автоматична система перевірки">
  <title>Make Solution - Місце для справжніх програмістів!</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

</head>

<body>
  <section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-0" data-rv-view="0">
    <div class="mbr-navbar__section mbr-section">
      <div class="mbr-section__container container">
        <div class="mbr-navbar__container">
          <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
            <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
              <span class="mbr-brand__logo"><a href="index.php" class="mbrib-code mbr-iconfont mbr-iconfont-menu"></a></span>
              <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="index.php">MAKESOLUTION</a></span>
            </span>
          </div>
          <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
          <div class="mbr-navbar__column mbr-navbar__menu">
            <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
              <div class="mbr-navbar__column">
                <ul class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links">
                  <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="reg.php">РЕЄСТРАЦІЯ</a></li>
                  <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="tasks.php">ЗАДАЧІ</a></li>
                  <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="olimps/olimp.php">ОЛІМПІАДИ</a></li>
                  <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="books.php">КНИГИ<br></a></li>
                </ul>

              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-parallax-background mbr-after-navbar" id="form1-1" data-rv-view="2" style="background-image: url(assets/images/mbr-1920x1280.jpg);">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);"></div>
    <div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 93px; padding-bottom: 93px;">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
              <div class="mbr-header mbr-header--center mbr-header--std-padding">
                <h2 class="mbr-header__text">ЗАПРОПОНУЙТЕ СВОЄ ЗАВДАННЯ!</h2>
              </div>
              <div data-form-alert="true">
                <div class="hide" data-form-alert-success="true">Дякую за допомогу у розробці сайту! Адміністрація скоро розгляне вашу пропозицію</div>
              </div>
              <form action="sendtask.php" method="post" data-form-title="ЗАПРОПОНУЙТЕ СВОЄ ЗАВДАННЯ!">
                <input type="hidden" value="pupM0gsf7Gv6z6BkI/P6at5Uc3q50Zf3fG1bn3BcV0ARD3LGT4MLNFymS74qfE8AjTBKWeQ1y5dgrGRMYAqN8niGHnYyhsXuMzTGaxAiO3Dj2A4Lm3sCQPnA3tpM7Qj+" data-form-email="true">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" required="" placeholder="Ваше ім'я*" data-form-field="Name" required="">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email" required="">
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control" name="phone" placeholder="Назва завдання" data-form-field="Phone" required="">
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="7" placeholder="Опис завдання" data-form-field="Message" required=""></textarea>
                </div>
                <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-danger">НАДІСЛАТИ<br></button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-3" data-rv-view="11" style="background-color: rgb(255, 255, 255);">

    <div class="mbr-section__container container">
      <div class="mbr-footer mbr-footer--wysiwyg row" style="padding-top: 36.9px; padding-bottom: 36.9px;">
        <div class="col-sm-12">
          <p class="mbr-footer__copyright">Copyright ©<?php echo date("Y"); ?> MakeSolution.</p>
        </div>
      </div>
    </div>
  </footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <!--[if lte IE 9]>
    <script src="assets/jquery-placeholder/jquery.placeholder.min.js"></script>
  <![endif]-->
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>


</body>

</html>
