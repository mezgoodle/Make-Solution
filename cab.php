<?php
    require "db.php";

    $data = $_POST;

    //variables
    $id = $_SESSION['logged_user']->id;
    $login = $_SESSION['logged_user']->login;
    $email = $_SESSION['logged_user']->email;
    $place = $_SESSION['logged_user']->place;
    $languages = $_SESSION['logged_user']->languages;
    $accepted_tasks = $_SESSION['logged_user']->accepted_tasks;

	  if (isset($data['submit'])) {

        $login_ch = strip_tags(trim($data['login_ch']));
        $email_ch = strip_tags(trim($data['email_ch']));
        $place_ch = strip_tags(trim($data['place_ch']));
        $languages_ch = strip_tags(trim($data['languages_ch']));

		$sql = "UPDATE users SET login='$login_ch', email='$email_ch', place='$place_ch', languages='$languages_ch' WHERE id=$id";
		$err = 'Ваші дані успішно змінено! Зміни вступлять у дію при наступному вході';

		$mysqli = new mysqli("localhost", "makesolution", "", "root");
		if ($mysqli->connect_errno) {
			$err = 'Не вдалось підключитись до MySQL';
			}

		if (!$mysqli->query($sql)) {
			$err = 'Не вдалось змінити дані';
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

    <!-- Core Stylesheet -->
    <link href="style-for-reg.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Section Heading Area -->
            <div class="section-heading text-center">
              <h2>Інформація</h2>
              <div class="line-shape"></div>
            </div>
          </div>
        </div>

        <form class="form-horizontal" action="cab.php" method="POST">
          <div class="form-group">
            <label for="mail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="mail" name="email_ch" value="<?php echo @$email;?>">
            </div>
          </div>
          <div class="form-group">
            <label for="login" class="col-sm-2 control-label">Логін</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="login" name="login_ch" value="<?php echo @$login;?>">
            </div>
          </div>
          <div class="form-group">
            <label for="place" class="col-sm-2 control-label">Місто</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="place" name="place_ch" value="<?php echo @$place;?>">
            </div>
          </div>
          <div class="form-group">
            <label for="languages" class="col-sm-2 control-label">Мови програмування, якими ви володієте</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="languages" name="languages_ch" value="<?php echo @$languages;?>">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <?php echo '<div style="color: green;">'.@$err.'</div>' ?>
              <button type="submit" class="btn btn-success" name="submit" value="submit">Змінити дані</button>
            </div>
          </div>
        </form>
      </div>
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
