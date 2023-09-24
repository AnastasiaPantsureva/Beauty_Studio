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

<div class="bb">
    <div class="bt-back_box">
    <a class="bt-back" href="adminka.php"> <  НАЗАД</a>
    </div>
    <h1 class="adminka_title">Таблица: Услуги</h1>
</div>



        <div class="adminka_table">
                <table>
                <tr>
                                <th class ="adminka_table_title">ID Услуги</th>
                                <th class ="adminka_table_title">Услуга</th>
                                <th class ="adminka_table_title">Пользователь</th>
                                <th class ="adminka_table_title">Кабинет</th>
                                <th class ="adminka_table_title">Дата</th>
                            </tr>

                            <?php
                                $Uslugi = mysqli_query($connect, query: "SELECT Services.*, `Service`.Name_service AS 'Название услуги', `User`.FIO AS 'Фио', `Doctor`.Cabinet_number AS 'Кабинет' FROM Services JOIN `Service` ON Services .`ID_Service` = Service.`ID_Service` JOIN `User` ON Services.`ID_User` = `User`.`ID_User` JOIN `Doctor` ON Services.`ID_Doctor` = `Doctor`.`ID_Doctor`;");
                                $Uslugi = mysqli_fetch_all($Uslugi);
                                foreach ($Uslugi as $Uslugi) {
                            ?>

                            <tr>
                                <td class ="adminka_table_soderg"><?= $Uslugi[0] ?></td>
                                <td class ="adminka_table_soderg"><?= $Uslugi[1] ?></td>
                                <td class ="adminka_table_soderg"><?= $Uslugi[2] ?></td>
                                <td class ="adminka_table_soderg"><?= $Uslugi[3] ?></td>
                                <td class ="adminka_table_soderg"><?= $Uslugi[4] ?></td>
                                <td><a href="UslugiUpdait.php?id=<?= $Uslugi[0] ?>"><img class="notepad" src="../IMG/notepad.png" alt="notepad"></a></td>
                                <td><a href="UslugiDelete.php?id=<?= $Uslugi[0] ?>"><img class="Delete" src="../IMG/Delete.png" alt="Delete"></a></td>
                            </tr>
                            <?php

                                }
                            ?>

                        </table>

                        <h3 class="adminka_h3">Добавить Категорию</h3>

                            <form action="Uslugi.php" method="post">

                                <p class="adminka_p">Услуга</p>
                                <input class="adminka_imp" name="ID_Service"></input>
                                <p class="adminka_p">Пользователь</p>
                                <input class="adminka_imp" name="ID_User"></input>
                                <p class="adminka_p">Кабинет</p>
                                <input class="adminka_imp" name="ID_Doctor"></input>
                                <p class="adminka_p">Дата</p>
                                <input type="date" class="adminka_imp" name="date"></input>
                                <br><br>
                                <button class="adminka_button mnogo" type="submit">Добавить</button>
                            </form>

</div>

</div>

</body>
</html>