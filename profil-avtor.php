<? require_once 'PHP/connect.php'
?>
<?php
session_start();
if (!$_SESSION['User']) {
    header('Location: /');
}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>BeautyStudioAbout</title>
</head>
<body>
    
    <header>

        <div class="cap">
            <div class="container">
                <div class="cap_box">
                <ul class="cap_wrapper">
                        <li class="cap_adres">г. Санкт-Петербург, ул. Рубинштейна, д. 11, к. А</li>
                </ul>
                <ul class="cap_wrapper">
                    <li class="cap_icon"><a href="#" class="cap_icon"><img src="IMG/inst.png" alt="inst" class="cap_icon"></a></li>
                    <li class="cap_icon"><a href="#" class="cap_icon"><img src="IMG/telega.png" alt="telega" class="cap_icon"></a></li>
                </ul>
            </div>
            </div>
        </div>

        <div class="container">
            <nav class="menu">
                <div class="cap_box">
                <ul class="menu_wrapper">
                        <li class="menu_nav_logo"><a href="index.html" class="menu_nav_logo"><img class="menu_nav_logo" src="IMG/logo.png" alt="logo"></a></li>
                </ul>
                <ul class="menu_wrapper">
                        <li class="menu_nav_page"><a href="index.html" class="menu_nav_page">Главная</a></li>
                        <li class="menu_nav_page"><a href="about.html" class="menu_nav_page">О компании </a></li>
                        <li class="menu_nav_page"><a href="specialist.html" class="menu_nav_page">Специалисты</a></li>
                        <li class="menu_nav_page"><a href="uslugi.html" class="menu_nav_page">Услуги</a></li>
                        <li class="menu_nav_page"><a href="kontakt.html" class="menu_nav_page">Контакты</a></li>
                        <li class="menu_nav_page"><a href="profil.php" class="menu_nav_page">Профиль</a></li>
                </ul>
                <ul class="menu_wrapper">
                        <li class="menu_nav_nomer">+7 896 564 43 21</li>
                </ul>
                </div>
            </nav>
        </div>

        <section class="main">
            <div class="container">
                    <div class="main_box_one">
                        <h1 class="title-center">Профиль</h1>
                        <p class="text center">Регистрируйся и записывайся<br> на прием прямо на сайте</p>
                    </div>
            </div>
        </section>
    </header>

        <section>
            <div class="container">
                <div class="padding box" >

                    <div class="box_osob">
                        <div>
                            <img src="IMG/taisia.png" alt="taisia" >
                        </div>
                        <div class="box_text_osob">
                            <div class="title">
                                <img class="title_img" src="IMG/flag.png" alt="flag">
                                <h2>пациент</h2>
                            </div>
                            <p class="text"><?= $_SESSION['User']['FIO'] ?></p>
                            <p class="text">Дата рождения: <?= $_SESSION['User']['data_birthday'] ?><br></p>
                            <p class="text"> <?= $_SESSION['User']['telephone'] ?>  </p><br>                   
                        </div>
                    </div>

                    <div>
                            <div class="title">
                                <img class="title_img" src="IMG/flag.png" alt="flag">
                                <h2>записаться на прием</h2>
                            </div>
                        <form method="POST" action="PHP/message.php">
                                <div><input type="number" name="nomber" class="form_inp" placeholder="Номер" pattern="^\+7[1-9]{10}$" title="Пример правильного формата +79000000000" required></div>
                                <div><input type="text" name="service" class="form_inp" placeholder="Желаемая услуга" required></div>
                                <div><input type="date" name="date" class="form_inp" placeholder="Желаемый день" required></div>
                                 <div class="g-recaptcha" data-sitekey="6Lf82xkoAAAAAKh5tmzIap6912xRshPUelE9JtYj"></div>
                                <div class="form_btn">
                                <input type="submit" name="potato" class="btn" value="Отправить заявку">
                            </div>
                        <form>
                    </div>

                </div>
            </div>
        </section>

       
        <div class="procidurs_boxs">
            <div class="procidurs_box">
            <img src="IMG/bleforoplastica.png" class="img" alt="bleforoplastica" >
                </div>
                <div class="procidurs_box">
                <div class="procidurs_title">
                <p class="procidurs_text">ЗАПИСЬ</p><br>
                <p class="procidurs_text">ПРОЦЕДУРА</p><br>
                <p class="procidurs_text">ДАТА</p><br>
                <p class="procidurs_text">ВРАЧ</p><br>
                <p class="procidurs_text">СТОИМОСТЬ</p><br>
                </div>

                <?php
                    $Uslg = mysqli_query($connect, query: "SELECT Services.ID_Services as 'Запись', Service.Name_service as 'Тип услуга', Services.date as 'Дата услуги', Doctor.fio as 'Доктор', Service.Сost as 'Цена', user.FIO AS 'Пациент'
                    from Services
                    JOIN Service on Services.ID_Service=Service.ID_Service
                    JOIN Doctor on Services.ID_Doctor=Doctor.ID_Doctor
                    JOIN User on Services.ID_User=User.ID_User
                    WHERE User.ID_User = '" . $_SESSION['User']['ID_User'] ."'");
                    $Uslg = mysqli_fetch_all($Uslg);
                    foreach ($Uslg as $Uslg) {
                ?>
                <div class="procidurs_opis">
                <span class="text"><?= $Uslg[0] ?></span><br>
                <br>
                <span class="text"><?= $Uslg[1] ?></span><br>
                <br>
                <span class="text"><?= $Uslg[2] ?></span><br>
                <br>
                <span class="text"><?= $Uslg[3] ?></span><br>
                <br>
                <span class="text"><?= $Uslg[4] ?></span><br>
                </div>
                <?php
                }
                ?>
            </div>
            </div>

        <footer class="padding">
            <div class="grey">
                <div class="container">
                    <div class="foter">
                        <div class="foter_box">
                            <span class="foter_title">Контактные данные</span>
                            <p class="text text-plan">г. Санкт-Петербург, ул. Рубинштейна, д. 11, к. А</p>
                            <p class="text text-plan pink">+7 896 564 43 21</p>
                            <p class="text text-plan">Ежедневно с 10.00 - 21.00</p>
                        </div>
                        <div class="foter_box">
                            <span class="foter_title">О компании </span>
                            <p class="text text-plan">Beauty Studio - ваш источник непревзойденной красоты и уверенности.</p>
                        </div>
                        <div class="foter_box">
                            <span class="foter_title">Специалисты</span>
                            <p class="text text-plan">В Beauty Studio наша команда опытных и преданных специалистов с 
                                радостью поможет вам достичь ваших красотных целей и обеспечит вам незабываемый опыт ухода.</p>
                        </div>
                        <div class="foter_box">
                            <span class="foter_title">Услуги</span>
                            <p class="text text-plan">В Beauty Studio вы найдете широкий спектр высококачественных услуг, предназначенных 
                                для подчеркивания вашей естественной красоты.</p>
                        </div>
                    </div>
                    <div class="foter">
                        <div class="foter_box_two">
                            <p class="text text-plan pink">©2023 - Клиника "Beauty Studio".</p>
                        </div>
                        <div class="foter_box_two">
                            <p class="text text-plan pink">Информация на сайте предназначена для
                                посетителей 18+<br> и не является предложением публичной оферты.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    

</body>
</html>