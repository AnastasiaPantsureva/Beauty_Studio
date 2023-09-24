

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
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

        <section class="log">
            <div class="conteiner">
                <div class="padding">
                        <div class="form">
                            <div class="form_box">
                                <div class="title center">
                                    <img class="title_img" src="IMG/flag.png" alt="flag">
                                    <h2>Войти</h2>
                                </div>

                                <form method="POST" action="PHP/profilpols.php">
                                    <div><input type="text" name="login" class="form_inp" placeholder="Логин" required></div>
                                    <div ><input type="password" name="password" class="form_inp" placeholder="пароль" required></div>
                                    <div class="form_btn">
                                        <input type="submit" name="submit" class="btn" value="Войти">
                                        <button id="regBtn" class="btn_prozr">зарегестрироваться</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                </div>
            </div>
        </section>




        <section class="registration">
            <div class="conteiner">
                <div class="padding">
                        <div class="form_two">
                            <div class="form_box">
                                <div class="title center">
                                    <img class="title_img" src="IMG/flag.png" alt="flag">
                                    <h2>Зарегестрироваться</h2>
                                </div>
  
                                <form method="POST" action= "PHP/email.php">
                                    <div><input type="text" name="text" class="form_inp" placeholder="ФИО" pattern="^[А-Яа-яЁё\s]+$" title="Вводите только русские буквы" required></div>
                                    <div><input type="login" name="login" class="form_inp" placeholder="Логин" pattern="[А-Яа-яЁё]{6,}" title="Вводите 6 и более русские буквы" required ></div>
                                    <div ><input type="tel" name="number" class="form_inp" placeholder="номер телефона" pattern="^\+7[1-9]{10}$" title="Пример правильного формата +79000000000" required ></div> 
                                    <div><input type="date" name="date" class="form_inp" placeholder="Дата рождения" required></div>
                                    <div ><input type="password" name="password" class="form_inp" placeholder="пароль" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="8 или более символов, в том числе по меньшей мере, одну цифру,  одну прописную, одну строчные буквы" required></div> 
                                    <div ><input type="email" name="email" class="form_inp" placeholder="email"required ></div> 

                                    <div class="form_btn">
                                        <input type="submit" name="potato" class="btn_prozr" value="Зарегестрироваться">
                                    </div> <br><br>
                                <form>
                            </div>
                            <button class="btn" id="login">войти</button>
                        </div>
                </div>
            </div>
        </section>

    </header>

    

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


<script src="./JS/script-log.js"></script>
</body>
</html>