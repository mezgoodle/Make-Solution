<?php
    require "db.php";

    $data = $_POST;
    if ( isset($data['do_signup']) ) {
        //here registration
        $errors = array();
        if ( trim($data['login']) == '' ) {
            $errors[] = 'Введіть ваш логін!';
        }

        if ( trim($data['email']) == '' ) {
            $errors[] = 'Введіть вашу електронну адресу"';
        }

        if ( $data['password'] == '' ) {
            $errors[] = 'Введіть ваш пароль!';
        }

        if ( $data['password_2'] != $data['password'] ) {
            $errors[] = 'Пароль введено неправильно!';
        }

        if ( R::count('users', "login = ?", array($data['login'])) > 0 ) {
            $errors[] = 'Користувач з таким логіном вже зареєстрований!';
        }

        if ( R::count('users', "email = ?", array($data['email'])) > 0 ) {
            $errors[] = 'Користувач з такою електронною адресою вже зареєстрований!';
        }

        if ( empty($errors) ) {
            //all is normal, can do registrate
            $user = R::dispense('users');
            $user->login = $data['login'];
            $user->email = $data['email'];
            $user->place = "";
            $user->languages = "";
            $user->password = md5($data['password']);
            R::store($user);
            $cool = 'Ви успішно зареєструвались!';
        }
        else {
            $cool = array_shift($errors);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Олімпіади по інформатиці. Новини, завдання, рішення. Автоматична система перевірки">
    <meta name="robots" content="all">
    <meta name="keywords" content="завдання з програмування, розбір завдань, розв'язання олімпіадних завдань, автоматична система перевірки, acm">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Make Solution - Місце для справжніх програмістів!</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-size: 1.2em;">
        <a class="navbar-brand" href="#">
            <img src="/docs/4.2/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Make Solution
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php">Головна <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="tasks.php">Задачі</a>
                <a class="nav-item nav-link active" href="books.php">Книги</a>
                <a class="nav-item nav-link active" href="olimps/olimp.php">Олімпіади</a>
            </div>
        </div>
    </nav>

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2>Реєстрація</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <form role="form" action="/reg.php" method="POST">
              <div class="form-group">
                <label for="email">Електронна адреса</label>
                <input type="email" class="form-control" name="email" value="<?php echo @$data['email']; ?>" placeholder="Введіть вашу електронну адресу">
              </div>
              <div class="form-group">
                <label for="login">Логін</label>
                <input type="text" class="form-control" name="login" value="<?php echo @$data['login']; ?>" placeholder="Введіть ваш логін">
              </div>
              <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" name="password" value="<?php echo @$data['password']; ?>" placeholder="Введіть ваш пароль">
              </div>
              <div class="form-group">
                <label for="password_2">Введіть ваш пароль ще раз</label>
                <input type="password" class="form-control" name="password_2" value="<?php echo @$data['password_2']; ?>" placeholder="Введіть ваш пароль">
              </div>
              <button type="submit" class="btn btn-success" name="do_signup">Реєстрація</button>
              <?php if (@$cool == 'Ви успішно зареєструвались!') {
              	echo '<div style="color: green;">'.@$cool.'</div>';
              }
              	else {
              		echo '<div style="color: red;">'.@$cool.'</div>';
              	}
               ?>
            </form>
        </div>
        <!-- Special Description Area -->
    </section>
    <!-- ***** Special Area End ***** -->


    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text">
            <h2>Ms</h2>
        </div>
        <!-- Foooter Text-->
        <div class="copyright-text">
            <p>Copyright ©<?php echo date("Y"); ?> Ms.</p>
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
</body>

</html>
