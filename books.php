<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
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

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Local Styles -->
    <link rel="stylesheet" type="text/css" href="/css/books.css">

    <!-- Jquery CDN -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
  <!-- Preloader Start -->
   <div id="preloader" class="preloader">
       <div class="loader"></div>
   </div>

    <!-- Menu Area -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <span class="navbar-brand">МЕНЮ</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Головна <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tasks.php">Задачі</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="reg.php">Реєстрація</a>
        </li>
        <li>
          <a class="nav-link" href="olimps/olimp.php">Олімпіади</a>
        </li>
      </ul>
    </div>
  </nav>

    <!-- Table Area -->

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed">
            <thead>
                <tr class="table-active">
                    <th>Назва</th>
                    <th>Розмір</th>
                    <th>
                    	Мова програмування
                    	<select id="language">
                            <option>Усі</option>
	        				<option>C++</option>
					        <option>C</option>
					        <option>C#</option>
					        <option>Python</option>
					        <option>Java</option>
                            <option>Go</option>
					        <option>Інше</option>
    					</select>
    				</th>
                    <th>Рік видання</th>
                    <th>Посилання</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $names = ["C++", "Python", "Java", "Go", "C#", "Python",
                            "C++", "Інше", "Інше", "Інше", "Python", "C++",
                            "Інше", "C#", "Інше", "Python", "Інше", "Інше",
                            "Python", "Інше", "Інше", "Інше", "Інше"]
                    $books = ['С++. Керівництво для початківців (рос)', 'Джейсон Бріггс "Python для дітей" (рос)', 
                    'А. В. Гаврилов "Програмування на мові Java" (рос)', '"Мова програмування - Go" Донован А Керніган (рос)',
                    '"Програмування на C# для початківців" Олексій Васильєв (рос)', '"Data Science Essentials in Python" Dmitry Zinoviev (англ)',
                    '"Опановуй самостійно C++" Сіддхартха Рао (рос)', '"Стек MEAN" Саймон Холмс.pdf (рос)',
                    '"Ruby on Rails для початківців"  (рос)', '"Основи паралельного програмування" Богачев К. (рос)',
                    '"Python і аналіз даних" Уес Маккінні (рос)', '"JavaScript на прикладах" А. Нікольський (рос)',
                    '"Програмування на C ++ в прикладах і задачах" Олексій Васильєв (рос)', '"Unity в дії" Джозеф Хокінг (рос)',
                    '"Основи інформатики" Роганок (рос)', '"Легкий спосіб вивчити Python" Зед А. Шоу (рос)',
                    '"Mozilla. Введення в веб програмування" (рос)', '"React.js Швидкий старт" Стоян Стефанов (рос)',
                    '"Програмуємо з Minecraft" Крейг Річардсон (рос)', '"PHP7 для початківців" Майк Макграт (рос)',
                    '"Основи розробки веб-додатків" Семмі Пьюрівал (рос)', '"Динамічні веб-сайти" Робін Ніксон (рос)',
                    '"PHP для початківців" Олександр Жадаєв (рос)']
                    $memories = ['77.7 MB', '10.4 MB', '1.0 MB', '18.7 MB', '73.8 MB', '10.3 MB',
                    '44.4 MB', '37.9 MB', '40.1 MB', '9.38 MB', '41.6 MB', '11.5 MB', '61.6 MB',
                    '13.0 MB', '33.2 MB', '2.2 MB', '1.7 MB', '6.5 MB', '28.5 MB', '44.3 MB',
                    '6.66 MB', '16.0 MB', '3.0 MB']
                    $years = ['2005', '2017', '2015', '2016', '2018', '2016']
                    $links = ["https://mega.nz/#!iXxgVSRR!V3qyH3o0YUBg5jA-fH_TvY_A-HT5R2bniY74oYMk_jc",
                    "https://mega.nz/#!OHxkyQrR!cU2Ur1j8mKteBn5uxOcsc5qugykWotAxYJpvrzVwjuU",
                    "https://mega.nz/#!qHx2HCrI!yS9qNHV7UEhmPktuuYAlZCBfsEQHDYfPE0iAyd5R00E",
                    "https://mega.nz/#!HapSTQqb!ELDoWoT__027kYY97BCRmI88Mii1LdHG-W6CT9eN0VE", 
                    "https://mega.nz/#!fT4klIRB!6enBnmYPw7WsxCNZJbYX72pcGxUrZTRrAVH8IPvDZMg", 
                    "https://mega.nz/#!nX5EkIjS!WIqR6lv5PI1H2_MvPRcfq6ZkXWovUVoLC3EI4RU0J-k",
                    "https://mega.nz/#!Ga4GkawC!HZXJ7o2K1uhj4g2K13btZ_QB7B0cE2t_rE6CpGOu0Og", 
                    "https://mega.nz/#!rbwCBSZQ!mr7mTiJXV3L8xSQtf0yCXJiLgBCGYzKUr6OIqvwWZ-w",
                    "https://mega.nz/#!SShkCKDa!UbUZW11tB3E8v6z_uiLN0cgh7T1Uq8VNLvhAo-BasVs",
                    "https://mega.nz/#!nTomkABI!dcS2OpTflqTN1h_F9r2ctJbEce--ulZMPG0PiOArkvw",
                    "https://mega.nz/#!COhkWCoY!yiD3yZncP1sMrkXOh4hO1M2yZNTJHGayF-r2RaS1h8E", 
                    "https://mega.nz/#!6fwilCyA!JNxIhs3klPveKzxEbap491dhIzblzh2brZobmYcNE-c",
                    "https://mega.nz/#!qTgiQSyR!4T9UTsn-vW5Oo5ymBGAfS3de_4BVFasFpTzrMGbta-c",
                    "https://mega.nz/#!GOYGHQ5b!IRiXVpLyIbQCeJ1AyS4soItMS2pzaH76DbP8LhINgbQ",
                    "https://mega.nz/#!TWB2SQAb!_8uyjVhrL0IpO0oGCAG1pgar3cQsd1Jk8TuWq4D0EHg", 
                    "https://mega.nz/#!DOI1GQBZ!2TxWDED73G_qob2oZFZllor5nXmdMm3OScO4GgitVGs",
                    "https://mega.nz/#!LfIx1ASb!XuenqANem10ueLTRNuQDPtlpah0cO5Rj1m64WrPmUa4",
                    "https://mega.nz/#!WPJnEYBZ!U8cm_v1AezxBotAdpCnjMLdOCnmPWZCJiB4t5cOuJGo",
                    "https://mega.nz/#!6GpyEKJb!weejjAweg0ZgrbXBN_D4eoKNLvywxpHeQtdoCAfluv8",
                    "https://mega.nz/#!yDBxmIgT!zTQJ4UqVqSzU89_Fi4sjHDMu1YnlRlVPtFjoj4AQwMg",
                    "https://mega.nz/#!3GY3wQiY!bDUpVv6VeJaDMV9InkW_rGzz0aTyCbTD2r7zb9Ah-dY",
                    "https://mega.nz/#!fCZBBABK!lJxTRkCqpPWZ74Uh-z3w8n_7_-H3VrLu5vBvWTnPmiY",
                    "https://mega.nz/#!nXZiXaRC!8v01N0DVY5pZMaojwQQ7vgKpT20T7idBkIBsh9a-A90"]
                    for ($i=0; $i < count($names); $i++) { ?>
                        <tr>
                            <td class="table-warning" name="<?php echo $names[$i]; ?>"><?php echo $books[$i]; ?></td>
                            <td class="table-info" name="<?php echo $names[$i]; ?>"><?php echo $memories[$i]; ?></td>
                            <td class="table-info" name="<?php echo $names[$i]; ?>"><?php echo $names[$i]; ?></td>
                            <td class="table-info" name="<?php echo $names[$i]; ?>"><?php echo $years[$i]; ?></td>
                            <td class="table-success" name="<?php echo $names[$i]; ?>"><a href="<?php echo $links[$i]; ?>" target="_blank">Завантажити</a></td>
                        </tr>
                   <?php } ?>
            </tbody>
        </table>
    </div>

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

    <!-- Local JS -->
    <script type="text/javascript" src="js/books.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
