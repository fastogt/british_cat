<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BRITISH CAT | CONTACTS</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="shortcut icon" href="../../favicon.ico">
</head>
<body>
<div class="header">
    <div class="top-nav bg-blue">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">
                    <div class="bg-yellow">
                        <img src="../images/logo.png" alt="">
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link text-white" href="../../index.html">ГЛАВНАЯ</a>
                        <a class="nav-item nav-link text-white" href="about.html">О СТУДИИ</a>
                        <a class="nav-item nav-link text-white" href="course.html">КУРС АНГЛИЙСКОГО</a>
                        <a class="nav-item nav-link text-white" href="price.html">СТОИМОСТЬ</a>
                        <a class="nav-item nav-link text-white" href="schedule.html">РАСПИСАНИЕ</a>
                        <a class="nav-item nav-link text-white active" href="#">КОНТАКТЫ</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="map">
    <iframe width="100%" height="100%" frameborder="0"
            src="https://static.parastorage.com/services/santa/1.6599.8/static/external/googleMap.html?language=ru&amp;lat=53.9157401&amp;long=27.569156099999987&amp;address=praspiekt Mašerava 11, Minsk, Belarus&amp;addressInfo=МЫ ЗДЕСЬ&amp;showZoom=true&amp;showStreetView=true&amp;showMapType=true"></iframe>
</div>

<div class="main-content text-sm-normal">
    <div class="container text-blue">
        <h3 class="text-center font-weight-bold p-4">Свяжитесь с нами</h3>
        <div class="row text-small">
            <div class="col-12 col-md-6 px-md-5 text-center text-sm-left">
                <p>Напишите нам!</p>
                <?php

                function MyString($text)
                {
                    $str = trim($text);
                    $str = stripslashes($str);
                    $str = htmlspecialchars($str, ENT_QUOTES);
                    $str = nl2br($str);

                    return $str;
                }

                if (isset($_POST['Submit'])) {
                    $Name = $_POST['Name'];
                    $Email = $_POST['Email'];
                    $Subject = $_POST['Subject'];
                    $Text = $_POST['Message'];

                    $Name = MyString($Name);
                    $Text = MyString($Text);

                    $Email = trim($Email);
                    $Email = stripslashes($Email);

                    if (mb_strlen($Email) > 0 && mb_strlen($Name) > 0 && mb_strlen($Text) > 0) {
                        if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {

                            $template = file_get_contents('mail_message.tpl');
                            $marker = array('{NAME}', '{MAIL}', '{SUBJECT}', '{TEXT}');
                            $Subject = nl2br($Subject);
                            $Text = nl2br($Text);
                            $marker_info = array($Name, $Email, $Subject, $Text);
                            $message = str_replace($marker, $marker_info, $template);

                            $to = "studyenglishh@yandex.ru";
                            $subject_message = "Сообщение с сайта Britishcat.by";

                            $headers = "Content-type: text/html; charset=utf-8 \r\n";
                            if (mail($to, $subject_message, $message, $headers)) {
                                ?>
                                <script type="text/javascript">
                                    alert("Ваше сообщение отправлено!");
                                </script>
                                <?php
                            }
                        }
                    }
                }

                ?>

                <form action="" method="post" class="form text-center text-sm-right" role="form"
                      enctype="multipart/form-data">
                    <input class="form-control" id="name" name="Name" placeholder="Name *" required=""
                           type="text" value="">
                    <input class="form-control" id="email" name="Email" placeholder="Email *" required=""
                           type="email" value="">
                    <input class="form-control" id="subject" name="Subject" placeholder="Subject" type="text" value="">
                    <textarea class="form-control" name="Message" placeholder="Message"></textarea>
                    <input class="btn-submit mt-3 mb-4" id="submit" name="Submit" type="submit" value="Отправить">
                </form>
            </div>
            <div class="col-12 col-md-6 contacts">
                <p>Вы можете задать нам любой вопрос по телефону:</p>
                <p>+375(33)648-46-96</p>
                <p>+375(33)652-92-91</p>
                <img class="viber-img" src="../images/viber.png" alt="">
                <div class="decor"></div>
                <p>проспект Машерова, 11, Минск,Беларусь.</p>
                <p>Email: studyenglishh@yandex.ru</p>
                <div class="text-center text-sm-left pl-sm-5 my-4">
                    <img src="../images/british_cat.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer bg-blue p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center footer-col">
                <a class="m-1" href="https://www.instagram.com/english_teach_minsk/" target="_blank"><img src="../images/icon-instagram.jpg" alt=""></a>
                <a class="m-1" href="https://vk.com/club69713442" target="_blank"><img src="../images/icon-vk.jpg" alt=""></a>
                <a class="m-1" href="https://ok.ru/group/59874667987000" target="_blank"><img src="../images/icon-ok.jpg" alt=""></a>
                <p class="m-3">Подписывайся и будь в курсе акций!</p>
            </div>
            <div class="col-md-4 text-center footer-col">
                <p class="text-white">На связи</p>
                <p class="mb-1">Телефон: <a class="phone" href="tel:+375336484696">+375 (33) 648-46-96</a></p>
                <p class="mb-1">Email: <a class="footer-email" href="mailto:studyenglishh@yandex.ru">studyenglishh@yandex.ru</a></p>
            </div>
            <div class="col-md-4 text-center footer-col">
                <p class="text-white">Адрес</p>
                <p class="mb-1">проспект Машерова, 11</p>
                <p class="mb-1">Минск, Беларусь</p>
            </div>
        </div>
    </div>
</div>

<script src="../bootstrap/jquery-3.3.1.slim.min.js"></script>
<script src="../bootstrap/popper.min.js"></script>
<script src="../bootstrap/bootstrap.min.js"></script>
<script src="../scripts/jivosite.js"></script>
</body>
</html>