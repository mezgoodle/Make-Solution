<?php
  require "db.php";

  if ( $_SESSION['logged_user']->login == "")  {
    header('Location: badlog.html');
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
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
        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <!-- Local Styles -->
        <link rel="stylesheet" type="text/css" href="css/tasks.css">
        <!-- Jquery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="mdb/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="mdb/css/mdb.min.css" rel="stylesheet">
        <!-- MDBootstrap Datatables  -->
        <link href="mdb/css/addons/datatables.min.css" rel="stylesheet">
        <style media="screen">
        #menu-navbar {
        background-color: rgba(181, 188, 231, 1);
        }
        #menu-navbar a {
        font-size: 1.8em;
        }
        #dtBasicExample a {
            color: #007bff;
            text-decoration: blink;
        }
        </style>
    </head>
    <body>
        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="loader"></div>
        </div>
        <!-- Menu Area -->
        <div class="navbar" id="menu-navbar">
            <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Головна</a>
            <a href="books.php"><i class="fas fa-book"></i> Книги</a>
            <a href="olimps/olimp.php"><i class="fas fa-trophy"></i> Олімпіади</a>
            <a href="reg.php"><i class="fas fa-pen"></i> Реєстрація</a>
        </div>
        <!-- Switcher -->
        <div id="switcher">
            <button type="button" class="btn btn-primary btn-rounded disabled" id="frt_btn" onclick="Clas1()">Тренувальні задачі</button>
            <button type="button" class="btn btn-primary btn-rounded active" id="sec_btn" onclick="Clas2()">Контрольні роботи</button>
            &larr; Оберіть ваш тип навчання
            <a class="btn btn-success" href="sendtask.php" role="button">Запропонувати власне завдання</a>
        </div>
        
        <!-- ***** Table Area Start **** -->
        <div class="container-fluid">
            <!-- Basic dropdown -->
            <button class="btn btn-primary btn-rounded dropdown-toggle mr-4" type="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Наявні теми</button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Задачі для початківців</a>
                <a class="dropdown-item" href="#">Цілочисельна арифметика</a>
                <a class="dropdown-item" href="#">Сортування і послідовність</a>
                <a class="dropdown-item" href="#">Теорія графів</a>
                <a class="dropdown-item" href="#">Розбір рядків</a>
                <a class="dropdown-item" href="#">Проста математика</a>
                <a class="dropdown-item" href="#">Математичне моделювання</a>
                <a class="dropdown-item" href="#">Довга арифметика</a>
                <a class="dropdown-item" href="#">Геометрія</a>
                <a class="dropdown-item" href="#">Системи зчислення</a>
            </div>
            <!-- Basic dropdown -->
            <div class="table-responsive text-nowrap">
                <table id="dtBasicExample" class="table table-bordered table-hover table-condensed" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="th-sm">ID
                            </th>
                            <th class="th-sm">Задача
                            </th>
                            <th class="th-sm">Тема
                            </th>
                            <th class="th-sm">Складність
                            </th>
                            <th class="th-sm">Вирішуваність
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0001</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=ItuR4Khekf" target="_blank">A+B</a></td>
                            <td>Задачі для початківців</td>
                            <td>2%</td>
                            <td>91%</td>
                        </tr>
                        <tr>
                            <td>0002</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=rAHvMMYPZk" target="_blank">Сума</a></td>
                            <td>Цілочисельна арифметика</td>
                            <td>19%</td>
                            <td>70%</td>
                        </tr>
                        <tr>
                            <td>0003</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=YW2bRp1sET" target="_blank">Гра</a></td>
                            <td>Задачі для початківців</td>
                            <td>4%</td>
                            <td>97%</td>
                        </tr>
                        <tr>
                            <td>0004</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=FlqhxXpDAN" target="_blank">П'ятю п'ять - двадцять п'ять!</a></td>
                            <td>Цілочисельна арифметика</td>
                            <td>8%</td>
                            <td>84%</td>
                        </tr>
                        <tr>
                            <td>0005</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=UzcdAKMpCT" target="_blank">Статистика</a></td>
                            <td>Сортування і послідовність</td>
                            <td>15%</td>
                            <td>90%</td>
                        </tr>
                        <tr>
                            <td>0006</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=wUaoNp5YGR" target="_blank">Вагони</a></td>
                            <td>Сортування і послідовність</td>
                            <td>23%</td>
                            <td>92%</td>
                        </tr>
                        <tr>
                            <td>0007</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=s64HbBWQWf" target="_blank">Дороги</a></td>
                            <td>Теорія графів</td>
                            <td>18%</td>
                            <td>96%</td>
                        </tr>
                        <tr>
                            <td>0008</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=ldkWAHMq3E" target="_blank">Орфографія</a></td>
                            <td>Задачі для початківців</td>
                            <td>13%</td>
                            <td>93%</td>
                        </tr>
                        <tr>
                            <td>0009</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=co7yOyOVNd" target="_blank">Бики і корови</a></td>
                            <td>Розбір рядків</td>
                            <td>26%</td>
                            <td>94%</td>
                        </tr>
                        <tr>
                            <td>0010</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=PKlzlPbVqT" target="_blank">Шахове поле</a></td>
                            <td>Задачі для початківців</td>
                            <td>16%</td>
                            <td>94%</td>
                        </tr>
                        <tr>
                            <td>0011</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=IXkeo6609A" target="_blank">Два бандити</a></td>
                            <td>Задачі для початківців</td>
                            <td>4%</td>
                            <td>92%</td>
                        </tr>
                        <tr>
                            <td>0012</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=u1PqJ0I55r" target="_blank">Футбол</a></td>
                            <td>Задачі для початківців</td>
                            <td>22%</td>
                            <td>92%</td>
                        </tr>
                        <tr>
                            <td>0013</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=xtdacTvST4" target="_blank">Арифметична прогресія</a></td>
                            <td>Проста математика</td>
                            <td>15%</td>
                            <td>93%</td>
                        </tr>
                        <tr>
                            <td>0014</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=UWGn119RwF" target="_blank">Кондиціонер</a></td>
                            <td>Задачі для початківців</td>
                            <td>12%</td>
                            <td>93%</td>
                        </tr>
                        <tr>
                            <td>0015</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=JfayBAYH0W" target="_blank">Трикутник</a></td>
                            <td>Задачі для початківців</td>
                            <td>12%</td>
                            <td>65%</td>
                        </tr>
                        <tr>
                            <td>0016</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=bgghADZrBs" target="_blank">Сходи</a></td>
                            <td>Математичне моделювання</td>
                            <td>21%</td>
                            <td>95%</td>
                        </tr>
                        <tr>
                            <td>0017</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=FbD89jipOj" target="_blank">Золотий пісок</a></td>
                            <td>Задачі для початківців</td>
                            <td>10%</td>
                            <td>90%</td>
                        </tr>
                        <tr>
                            <td>0018</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=fJdiyX8wAa" target="_blank">В одному кроці від щастя</a></td>
                            <td>Цілочисельна арифметика</td>
                            <td>16%</td>
                            <td>86%</td>
                        </tr>
                        <tr>
                            <td>0019</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=SeR7mCJsuP" target="_blank">Рівняння для 5 класу!</a></td>
                            <td>Розбір рядків</td>
                            <td>25%</td>
                            <td>90%</td>
                        </tr>
                        <tr>
                            <td>0020</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=L02Q3UWCmM" target="_blank">Три товстуни</a></td>
                            <td>Задачі для початківців</td>
                            <td>7%</td>
                            <td>87%</td>
                        </tr>
                        <tr>
                            <td>0021</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=LUth7hmzrL" target="_blank">Торт</a></td>
                            <td>Задачі для початківців</td>
                            <td>6%</td>
                            <td>91%</td>
                        </tr>
                        <tr>
                            <td>0022</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=P93BFEyNOA" target="_blank">Симетрія</a></td>
                            <td>Геометрія</td>
                            <td>19%</td>
                            <td>92%</td>
                        </tr>
                        <tr>
                            <td>0023</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=tkADvzve04" target="_blank">Ферзь, тура і кінь</a></td>
                            <td>Проста математика</td>
                            <td>29%</td>
                            <td>88%</td>
                        </tr>
                        <tr>
                            <td>0024</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=M1i0tyr8Mj" target="_blank">Ворожіння</a></td>
                            <td>Цілочисельна арифметика</td>
                            <td>13%</td>
                            <td>97%</td>
                        </tr>
                        <tr>
                            <td>0025</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=Gpuwoz5HfG" target="_blank">Пора року</a></td>
                            <td>Задачі для початківців</td>
                            <td>10%</td>
                            <td>94%</td>
                        </tr>
                        <tr>
                            <td>0026</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=KHbC9LyqQE" target="_blank">Одиниці</a></td>
                            <td>Цілочисельна арифметика</td>
                            <td>16%</td>
                            <td>95%</td>
                        </tr>
                        <tr>
                            <td>0027</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=lDcHF3Ryks" target="_blank">Число Е</a></td>
                            <td>Задачі для початківців</td>
                            <td>20%</td>
                            <td>76%</td>
                        </tr>
                        <tr>
                            <td>0028</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=hRXck1OuRQ" target="_blank">2^N</a></td>
                            <td>Довга арифметика</td>
                            <td>30%</td>
                            <td>81%</td>
                        </tr>
                        <tr>
                            <td>0029</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=mpSNOHKON8" target="_blank">Знову А+В</a></td>
                            <td>Довга арифметика</td>
                            <td>35%</td>
                            <td>84%</td>
                        </tr>
                        <tr>
                            <td>0030</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=QBpwVcZV4A" target="_blank">Довгий добуток</a></td>
                            <td>Довга арифметика</td>
                            <td>46%</td>
                            <td>85%</td>
                        </tr>
                        <tr>
                            <td>0031</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=Nyo5GUs8k3" target="_blank">A div B</a></td>
                            <td>Довга арифметика</td>
                            <td>40%</td>
                            <td>81%</td>
                        </tr>
                        <tr>
                            <td>0032</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=KbgkysOh2c" target="_blank">Ліфт</a></td>
                            <td>Задачі для початківців</td>
                            <td>20%</td>
                            <td>92%</td>
                        </tr>
                        <tr>
                            <td>0033</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=rTVL4q4zoP" target="_blank">Метро</a></td>
                            <td>Задачі для початківців</td>
                            <td>16%</td>
                            <td>90%</td>
                        </tr>
                        <tr>
                            <td>0034</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=31jGSAzx75" target="_blank">Сортування підрахунком</a></td>
                            <td>Сортування і послідовність</td>
                            <td>29%</td>
                            <td>60%</td>
                        </tr>
                        <tr>
                            <td>0035</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=RnioOOtIoQ" target="_blank">Факторіал</a></td>
                            <td>Довга арифметика</td>
                            <td>42%</td>
                            <td>65%</td>
                        </tr>
                        <tr>
                            <td>0036</td>
                            <td><a href="https://103181d7.widgets.sphere-engine.com/lp?hash=OGZupvOsQg" target="_blank">Нескладне обчислення</a></td>
                            <td>Системи зчислення</td>
                            <td>25%</td>
                            <td>92%</td>
                        </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID
                        </th>
                        <th>Задача
                        </th>
                        <th>Тема
                        </th>
                        <th>Складність
                        </th>
                        <th>Вирішуваність
                        </th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="anchors" style="margin-left: 10px;">
            <a href="controlworks/1.html">Умовні оператори</a><br>
            <a href="#">Цикли for, while, do while</a><span style="color: red;"> (у розробці)</span><br>
            <a href="#">Функції</a><span style="color: red;"> (у розробці)</span><br>
            <a href="#">Масиви</a><span style="color: red;"> (у розробці)</span>
        </div>
        <!-- ***** Table Area End **** -->
        <!-- ***** Footer Area Start ***** -->
        <footer class="footer-social-icon text-center section_padding_70 clearfix">
            <!-- footer logo -->
            <div class="footer-text">
                <h2>Ms</h2>
            </div>
            <!-- Foooter Text-->
            <div class="copyright-text">
                <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
                <p>Copyright ©2019 Ms.</p>
            </div>
        </footer>
        <!-- ***** Footer Area Start ***** -->
        <!-- Jquery JS CDN -->
        <script type="text/javascript">
        $('div.anchors').hide();
        document.body.onload = function () {
        setTimeout(function() {
        var preloader = document.getElementById('preloader');
        if ( !preloader.classList.contains('done')) {
        preloader.classList.add('done');
        }
        }, 1000);
        }
        function Clas1() {
        if ( $("#frt_btn").hasClass("disabled") ) {
        $('div.container-fluid').show();
        $('div.anchors').hide();
        $("#sec_btn").addClass("active");
        } else {
        $('div.container-fluid').show();
        $('div.anchors').hide();
        $("#frt_btn").removeClass("active");
        $("#frt_btn").addClass("disabled");
        $("#sec_btn").removeClass("disabled");
        $("#sec_btn").addClass("active");
        }
        }
        function Clas2() {
        if ( $("#frt_btn").hasClass("disabled") ) {
        $('div.container-fluid').hide();
        $('div.anchors').show();
        $("#frt_btn").removeClass("disabled");
        $("#frt_btn").addClass("active");
        $("#sec_btn").removeClass("active");
        $("#sec_btn").addClass("disabled");
        } else {
        $('div.container-fluid').hide();
        $('div.anchors').show();
        $("#sec_btn").addClass("disabled");
        }
        }
        </script>
        
        <!-- Local Script -->
        <script type="text/javascript" src="js/tasks.js"></script>
        <!-- JQuery -->
        <script type="text/javascript" src="mdb/js/jquery-3.4.0.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="mdb/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="mdb/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="mdb/js/mdb.min.js"></script>
        <!-- MDBootstrap Datatables  -->
        <script type="text/javascript" src="mdb/js/addons/datatables.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
        });
        </script>
    </body>
</html>