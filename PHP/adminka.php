<?php
require_once 'connect.php';
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>BeautyStudioAdmin</title>

</head>
<body>
<div class="container">
<h1 class="adminka_title">Административная панель</h1>

            <div class="adminka_table">
                <table>
                    <tr>
                        <th class ="adminka_table_title">ID сообщение</th>
                        <th class ="adminka_table_title">Номер телефона</th>
                        <th class ="adminka_table_title">Желаемая услуга</th>
                        <th class ="adminka_table_title">Дата</th>
                    </tr>

                    <?php
                        $message = mysqli_query($connect, query: "SELECT * FROM `message`");
                        $message = mysqli_fetch_all($message);
                        foreach ($message as $message) {
                    ?>

                    <tr>
                        <td class ="adminka_table_soderg"><?= $message[0] ?></td>
                        <td class ="adminka_table_soderg"><?= $message[1] ?></td>
                        <td class ="adminka_table_soderg"><?= $message[2] ?></td>
                        <td class ="adminka_table_soderg"><?= $message[3] ?></td>
                        <td><a href="messageDEL.php?id=<?= $message[0] ?>"><img class="Delete" src="../IMG/Delete.png" alt="Delete"></a></td>
                    </tr>
                    <?php

                        }
                    ?>

                </table>


    <section class = "adminka">
        <div class="adminka_boxs">
            <div class="adminka_box_one">
                <h2 class="adminka_h2 white">Таблицы</h2>
                <div class="lin">
                <a class="adminka_btn" href="POLZ.php">Пользователи</a>
                <a class="adminka_btn" href="ROLE_.php" >Роли</a>
                <a class="adminka_btn" href="DOCTOR_.php">Доктора</a>
                <a class="adminka_btn" href="PROFDOC.php">Профиль доктора</a>
                <a class="adminka_btn" href="USLUGA_.php">Услуга</a>
                <a class="adminka_btn" href="USLUGAS_.php">Услуги</a>
                <a class="adminka_btn" href="TIP_US.php">Тип услуг</a>
                <a class="adminka_btn" href="KATEG_.php">Категории услуг</a>
                </div>
            </div>
        </div>
    </section>

    <section class = "adminka">
        <h2 class="pink">Запросы</h2><br><br>

                <div>
                    <h3>Получить список и общее число услуг, определенного типа и категории:</h3><br>
                    <table>
                        <tr>
                        <th class ="adminka_table_title">Тип услуги</th>
                        <th class ="adminka_table_title">Категория</th>
                        <th class ="adminka_table_title">Общее число</th>
                        </tr>

                        <?php
                        $first = mysqli_query($connect, query:"SELECT Type_service.Type AS 'Тип услуги', `Сategory_service`.`Сategory` as 'Категория услуги', COUNT(Service.ID_Service) as 'общее_число' FROM Service
                        JOIN Type_service ON Service.ID_Type_service = Type_service.ID_Type_service
                        JOIN `Сategory_service` ON Service.`ID_Сategory_service` = `Сategory_service`.`ID_Сategory_service`
                        WHERE Type_service.ID_Type_service = '2'
                        AND `Сategory_service`.`ID_Сategory_service` = '2'
                        GROUP BY `Сategory_service`.`ID_Сategory_service`");
                        $first = mysqli_fetch_all($first);
                        foreach ($first as $first) {
                        ?>
                        <tr>
                        <td class ="adminka_table_soderg"><?= $first[0] ?></td>
                        <td class ="adminka_table_soderg"><?= $first[1] ?></td>
                        <td class ="adminka_table_soderg"><?= $first[2] ?></td>
                        </tr>

                            <?php
                            }
                            ?>
                    </table>
                </div>
    </section>


    
                    <section class = "adminka">
                        <div>
                            <h3>Получить список услуг, которые чаще всего предоставляются пациентам.</h3><br>

                            <table>
                                <tr>
                                <th class ="adminka_table_title">Название услуг</th>
                                <th class ="adminka_table_title">Кол-во услуг</th>
                                </tr>

                                <?php
                                $sec = mysqli_query($connect, query:"SELECT Service.Name_service as 'Услуга', COUNT(Services.ID_Service) as 'Кол-во услуг'
                                FROM Services
                                JOIN Service ON Services.ID_Service = Service.ID_Service GROUP BY Services.ID_Service ORDER BY COUNT(Services.ID_Service) DESC; ");
                                $sec = mysqli_fetch_all($sec);
                                foreach ($sec as $sec) {
                                ?>
                                <tr>
                                <td class ="adminka_table_soderg"><?= $sec[0] ?></td>
                                <td class ="adminka_table_soderg"><?= $sec[1] ?></td>
                                </tr>
                                

                                <?php
                                }
                                ?>
                                </div>
                            </table>
                        </div>
                    </section>

                    <section class = "adminka">
                        <div>
                            <h3>Получить список пациентов, наблюдающихся у врача указанного профиля.</h3><br>

                            <table>
                                <tr>
                                <th class ="adminka_table_title">Клиент</th>
                                <th class ="adminka_table_title">Логинг</th>
                                <th class ="adminka_table_title">Название услуг</th>
                                <th class ="adminka_table_title">Дата рождения</th>
                                <th class ="adminka_table_title">Почта</th>
                                <th class ="adminka_table_title">Доктор</th>
                                <th class ="adminka_table_title">Профиль доктора</th>
                                </tr>

                                <?php
                                $three = mysqli_query($connect, query:"SELECT User.FIO as 'Клиент', User.login AS 'Логин', User.telephone AS 'Телефон', User.data_birthday as 'Дата рождения', User.email AS 'Почта', Doctor.fio as 'Доктор', Doctors_profile.Profile as 'Профиль доктора'
                                FROM Services
                                JOIN User ON Services.ID_User = User.ID_User
                                JOIN Doctor ON Services.ID_Doctor = Doctor.ID_Doctor
                                JOIN Doctors_profile ON Doctor.ID_Doctors_profile = Doctors_profile.ID_Doctors_profile
                                WHERE Doctors_profile.ID_Doctors_profile = '2' ");
                                $three = mysqli_fetch_all($three);
                                foreach ($three as $three) {
                                ?>
                                <tr>
                                <td class ="adminka_table_soderg"><?= $three[0] ?></td>
                                <td class ="adminka_table_soderg"><?= $three[1] ?></td>
                                <td class ="adminka_table_soderg"><?= $three[2] ?></td>
                                <td class ="adminka_table_soderg"><?= $three[3] ?></td>
                                <td class ="adminka_table_soderg"><?= $three[4] ?></td>
                                <td class ="adminka_table_soderg"><?= $three[5] ?></td>
                                <td class ="adminka_table_soderg"><?= $three[6] ?></td>
                                </tr>
                                

                                <?php
                                }
                                ?>
                                </div>
                            </table>
                        </div>
                    </section>

                    <section class = "adminka">
                        <div>
                            <h3>Получить список пациентов, перенесших операции у конкретного врача за некоторый промежуток времени.</h3><br>

                            <table>
                                <tr>
                                <th class ="adminka_table_title">Пациент</th>
                                <th class ="adminka_table_title">Услуга</th>
                                <th class ="adminka_table_title">Дата услуги</th>
                                <th class ="adminka_table_title">Доктор</th>
                                </tr>

                                <?php
                                $four = mysqli_query($connect, query:"SELECT User.FIO as 'Пациент', Service.Name_service AS 'Услуга', Services.date AS 'Дата услуги', Doctor.fio as 'Доктор'
                                FROM Services
                                JOIN User ON Services.ID_User = User.ID_User
                                JOIN Service on Services.ID_Service = Service.ID_Service
                                JOIN Doctor ON Services.ID_Doctor = Doctor.ID_Doctor
                                WHERE Doctor.ID_Doctor = '1'
                                AND Services.date BETWEEN '2023-01-01' AND '2023-08-01'");
                                $four = mysqli_fetch_all($four);
                                foreach ($four as $four) {
                                ?>
                                <tr>
                                <td class ="adminka_table_soderg"><?= $four[0] ?></td>
                                <td class ="adminka_table_soderg"><?= $four[1] ?></td>
                                <td class ="adminka_table_soderg"><?= $four[2] ?></td>
                                <td class ="adminka_table_soderg"><?= $four[3] ?></td>
                                </tr>
                                

                                <?php
                                }
                                ?>
                                </div>
                            </table>
                        </div>
                    </section>

                    <section class = "adminka">
                        <div>
                            <h3>Получить список пациентов, которые только зарегистрировались в клинике в настоящее время.</h3><br>

                            <table>
                                <tr>
                                <th class ="adminka_table_title">Пациент</th>
                                <th class ="adminka_table_title">Логин</th>
                                <th class ="adminka_table_title">Телефон</th>
                                <th class ="adminka_table_title">Дата рождения</th>
                                <th class ="adminka_table_title">Почта</th>
                                <th class ="adminka_table_title">Дата регистрации</th>
                                </tr>

                                <?php
                                $five = mysqli_query($connect, query:"SELECT User.FIO as 'Пациент', User.login as 'Логин', User.telephone as 'Телефон', user.data_birthday as 'Дата рождения', User.email as 'Почта', User.date_reg as 'Дата регистрации'
                                FROM user
                                WHERE User.date_reg = CURRENT_DATE()");
                                $five = mysqli_fetch_all($five);
                                foreach ($five as $five) {
                                ?>
                                <tr>
                                <td class ="adminka_table_soderg"><?= $five[0] ?></td>
                                <td class ="adminka_table_soderg"><?= $five[1] ?></td>
                                <td class ="adminka_table_soderg"><?= $five[2] ?></td>
                                <td class ="adminka_table_soderg"><?= $five[3] ?></td>
                                <td class ="adminka_table_soderg"><?= $five[4] ?></td>
                                <td class ="adminka_table_soderg"><?= $five[5] ?></td>
                                </tr>
                                

                                <?php
                                }
                                ?>
                                </div>
                            </table>
                        </div>
                    </section>



                    <section class = "adminka">
                        <div>
                            <h3>Получить список и общее число врачей указанного профиля, стаж работы которых не менее заданного.</h3><br>

                            <table>
                                <tr>
                                <th class ="adminka_table_title">Пациент</th>
                                <th class ="adminka_table_title">Услуга</th>
                                </tr>

                                <?php
                                $six = mysqli_query($connect, query:"SELECT
                                Doctors_profile.Profile as 'Профиль',
                                COUNT(Doctor.ID_Doctor) as 'Общее число'
                                FROM Doctor
                                JOIN Doctors_profile ON Doctor.ID_Doctors_profile = Doctors_profile.ID_Doctors_profile
                                WHERE Doctors_profile.ID_Doctors_profile = '2'
                                AND Doctor.work_experience >= '5'
                                GROUP BY Doctors_profile.ID_Doctors_profile");
                                $six = mysqli_fetch_all($six);
                                foreach ($six as $six) {
                                ?>
                                <tr>
                                <td class ="adminka_table_soderg"><?= $six[0] ?></td>
                                <td class ="adminka_table_soderg"><?= $six[1] ?></td>
                                </tr>
                                

                                <?php
                                }
                                ?>
                                </div>
                            </table>
                        </div>
                    </section>

                    <section class = "adminka">
                        <div>
                            <h3>Получить список полученных услуг конкретного пациента, за определенное период.</h3><br>

                            <table>
                                <tr>
                                <th class ="adminka_table_title">Пациент</th>
                                <th class ="adminka_table_title">Услуга</th>
                                <th class ="adminka_table_title">Дата услуги</th>
                                </tr>

                                <?php
                                $nine = mysqli_query($connect, query:"SELECT User.FIO as 'Пациент', Service.Name_service AS 'Услуга', Services.date AS 'Дата услуги'
                                FROM Services
                                JOIN User ON Services.ID_User = User.ID_User
                                JOIN Service on Services.ID_Service = Service.ID_Service
                                WHERE Services.date BETWEEN '2023-01-01' AND '2023-08-01' AND User.ID_User = '1'");
                                $nine = mysqli_fetch_all($nine);
                                foreach ($nine as $nine) {
                                ?>
                                <tr>
                                <td class ="adminka_table_soderg"><?= $nine[0] ?></td>
                                <td class ="adminka_table_soderg"><?= $nine[1] ?></td>
                                <td class ="adminka_table_soderg"><?= $nine[2] ?></td>
                                </tr>
                                

                                <?php
                                }
                                ?>
                                </div>
                            </table>
                        </div>
                    </section>

                    <section class = "adminka">
                        <div>
                            <h3>Получить список полученных услуг конкретного пациента, за определенное период.</h3><br>

                            <table>
                                <tr>
                                <th class ="adminka_table_title">Пациент</th>
                                <th class ="adminka_table_title">Услуга</th>
                                </tr>

                                <?php
                                $ten = mysqli_query($connect, query:"SELECT Service.Name_service as 'Услуга', Type_service.Type as 'Тип услуги'
                                FROM Services
                                JOIN Service on Services.ID_Service = Service.ID_Service
                                JOIN Type_service ON Service.ID_Type_service = Type_service.ID_Type_service
                                WHERE Type_service.Type = 'Для лица'");
                                $ten = mysqli_fetch_all($ten);
                                foreach ($ten as $ten) {
                                ?>
                                <tr>
                                <td class ="adminka_table_soderg"><?= $ten[0] ?></td>
                                <td class ="adminka_table_soderg"><?= $ten[1] ?></td>
                                </tr>
                                

                                <?php
                                }
                                ?>
                                </div>
                            </table>
                        </div>
                    </section>

</body>
</html>