<?php
  require "db.php";
  $login = $_SESSION['logged_user']->login;
  $id = 1;
  $f_olimp = R::load('olimps', $id);
  $s_olimp = R::load('olimps', $id+1);
  $t_olimp = R::load('olimps', $id+2);
  if ( $_SESSION['logged_user']->login == "")  {
    header('Location: /badlog.html');
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
  <link rel="icon" href="/img/core-img/favicon.ico">

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Local Styles-->
  <link rel="stylesheet" type="text/css" href="/css/olimp.css">
</head>

<body>

  <!-- Menu Area -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">МЕНЮ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/index.php">Головна <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tasks.php">Задачі</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="/books.php">Книги</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="/reg.php">Реєстрація</a>
        </li>
      </ul>
    </div>
  </nav>

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Вітаємо на головній сторінці олімпіад!</h1>
      <p class="lead text-muted">Тут ви можете себе спробувати у спортивному програмуванні. Щоб взяти участь в олімпіаді, виберіть зі списку ту, на яку хочете подати заявку, та натисність кнопку "Реєстрація". У визначений термін олімпіада буде відкритою, і ви зможете взяти у ній участь, натиснувши кнопку "Кодимо!"</p>
    </div>
  </section>


 <select id="number">
    <option>Олімпіада 2018 №1</option>
    <option>Олімпіада 2018 №2</option>
    <option>Олімпіада 2018 №3</option>
  </select>


  <div class="container-1">
    <div class="box-1">
      <h3>Вступ</h3>
      <p><?php echo $f_olimp->title ?></p>
    </div>
    <div class="box-2">
      <h3>Особливості:</h3>
      <p>
        <ul class="list-group">
          <li class="list-group-item">Дата проведення: <?php echo $f_olimp->date ?></li>
          <li class="list-group-item">К-сть завдань: <?php echo $f_olimp->numberoftask ?></li>
          <li class="list-group-item">Складність: <?php echo $f_olimp->complexity ?></li>
          <li class="list-group-item">Час: <?php echo $f_olimp->time_todo ?></li>
          <li class="list-group-item">Дата реєстрації: <?php echo $f_olimp->date_reg ?></li>
        </ul>
      </p>
    </div>
    <div class="box-2">
      <h3>Перейти до виконання/Зареєструватись</h3>
      <p><a href="1.php" class="btn btn-secondary btn-lg" tabindex="-1" role="button" aria-disabled="true">Кодимо!</a>
        <a href="reg-olimp.php?id=1" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Реєстрація</a></p>
    </div>
  </div>

  <div class="container-2">
    <div class="box-1">
      <h3>Вступ</h3>
      <p><?php echo $s_olimp->title ?></p>
    </div>
    <div class="box-2">
      <h3>Особливості:</h3>
      <p>
        <ul class="list-group">
          <li class="list-group-item">Дата проведення: <?php echo $s_olimp->date ?></li>
          <li class="list-group-item">К-сть завдань: <?php echo $s_olimp->numberoftask ?></li>
          <li class="list-group-item">Складність: <?php echo $s_olimp->complexity ?></li>
          <li class="list-group-item">Час: <?php echo $s_olimp->time_todo ?></li>
          <li class="list-group-item">Дата реєстрації: <?php echo $s_olimp->date_reg ?></li>
        </ul>
      </p>
    </div>
    <div class="box-2">
      <h3>Перейти до виконання/Зареєструватись</h3>
      <p><a href="2.php" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Кодимо!</a>
        <a href="reg-olimp.php?id=2" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Реєстрація</a></p>
    </div>
  </div>

  <div class="container-3">
    <div class="box-1">
      <h3>Вступ</h3>
      <p><?php echo $t_olimp->title ?></p>
    </div>
    <div class="box-2">
      <h3>Особливості:</h3>
      <p>
        <ul class="list-group">
          <li class="list-group-item">Дата проведення: <?php echo $t_olimp->date ?></li>
          <li class="list-group-item">К-сть завдань: <?php echo $t_olimp->numberoftask ?></li>
          <li class="list-group-item">Складність: <?php echo $t_olimp->complexity ?></li>
          <li class="list-group-item">Час: <?php echo $t_olimp->time_todo ?></li>
          <li class="list-group-item">Дата реєстрації: <?php echo $t_olimp->date_reg ?></li>
        </ul>
      </p>
    </div>
    <div class="box-2">
      <h3>Перейти до виконання/Зареєструватись</h3>
      <p><a href="3.php" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Кодимо!</a>
        <a href="reg-olimp.php?id=3" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Реєстрація</a></p>
    </div>
  </div>

  <!-- ***** Footer Area Start ***** -->
  <footer class="footer-social-icon text-center section_padding_70 clearfix" style="margin-top: 30px;">
    <!-- footer logo -->
    <div class="footer-text">
      <h2>Ms</h2>
    </div>
    <!-- Foooter Text-->
    <div class="copyright-text">
      <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
      <p>Copyright ©<?php echo date("Y"); ?> Ms.</p>
    </div>
  </footer>
  <!-- ***** Footer Area Start ***** -->

  <!-- Jquery JS CDN -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <!-- Local Script -->
  <script type="text/javascript" src="/js/olimp.js"></script>
  <!-- Bootstrap JS CDN -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- NProgress Script -->
  <script type="text/javascript" src="libs/NProgress/nprogress.js"></script>
  <!-- Local Script -->
  <script>
      $(document).ready (function () {
          NProgress.start();
          NProgress.set(0.3);
      });

      $(window).load (function () {
          NProgress.done();
      });
  </script>
</body>

</html>
