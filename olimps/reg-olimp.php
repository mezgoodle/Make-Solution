<?php
  require "db.php";
  //Player`s data
  $login = $_SESSION['logged_user']->login;
  $email = $_SESSION['logged_user']->email;

  if ($login == "" or $email == "") {
    echo "Будь ласка, увійдіть в систему";
  } else {
  //Create Database
    $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
    $user = R::dispense('players'.$escaped_url[-1]);

  if (!(R::findOne('players'.$escaped_url[-1], 'email = ?', array($_SESSION['logged_user']->email)))) {
    //Create plyaer
    $user->login = $login;
    $user->email = $email;
    R::store($user);
    echo "Ви успішно зареєстровані на олімпіаду";
  } else {
    echo "Ви вже зареєстровані на цю олімпіаду";
  }
}  
?>
<br>
<a href="olimp.php">Повернутися назад
