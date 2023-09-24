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
    <h1 class="adminka_title">Таблица: Услуга</h1>
</div>



        <div class="adminka_table">
                <table>
                <tr>
                            <th class ="adminka_table_title">ID Услуга</th>
                            <th class ="adminka_table_title">Название услуги</th>
                            <th class ="adminka_table_title">Описание услуги</th>
                            <th class ="adminka_table_title">Стоимость</th>
                            <th class ="adminka_table_title">Тип услуги</th>
                            <th class ="adminka_table_title">Категоря услуги</th>
                            <th class ="adminka_table_title">Кабинет</th>
                        </tr>

                        <?php
                            $Uslg = mysqli_query($connect, query: "SELECT Service.*, `Type_service`.Type AS 'Тип', `Сategory_service`.Сategory AS 'Категория', `Doctor`.Cabinet_number AS 'Кабинет' FROM Service JOIN `Type_service` ON Service .`ID_Type_service` = Type_service.`ID_Type_service` JOIN `Сategory_service` ON Service.`ID_Сategory_service` = `Сategory_service`.`ID_Сategory_service` JOIN `Doctor` ON Service.`ID_Doctor` = `Doctor`.`ID_Doctor`;");
                            $Uslg = mysqli_fetch_all($Uslg);
                            foreach ($Uslg as $Uslg) {
                        ?>

                        <tr>
                            <td class ="adminka_table_soderg"><?= $Uslg[0] ?></td>
                            <td class ="adminka_table_soderg"><?= $Uslg[1] ?></td>
                            <td class ="adminka_table_soderg"><?= $Uslg[2] ?></td>
                            <td class ="adminka_table_soderg"><?= $Uslg[3] ?></td>
                            <td class ="adminka_table_soderg"><?= $Uslg[7] ?></td>
                            <td class ="adminka_table_soderg"><?= $Uslg[8] ?></td>
                            <td class ="adminka_table_soderg"><?= $Uslg[9] ?></td>
                            <td><a href="UslgUpdait.php?id=<?= $Uslg[0] ?>"><img class="notepad" src="../IMG/notepad.png" alt="notepad"></a></td>
                            <td><a href="UslgDelete.php?id=<?= $Uslg[0] ?>"><img class="Delete" src="../IMG/Delete.png" alt="Delete"></a></td>
                        </tr>
                        <?php

                            }
                        ?>

                    </table>

                    <h3 class="adminka_h3">Добавить услугу</h3>

                        <form action="Uslg.php" method="post">

                            <p class="adminka_p">Название услуги</p>
                            <input class="adminka_imp" name="Name_service"></input>
                            <p class="adminka_p">Описание услуги</p>
                            <input class="adminka_imp" name="Description_service"></input>
                            <p class="adminka_p">Стоимость</p>
                            <input class="adminka_imp" name="Сost"></input>
                            <p class="adminka_p">Тип услуги</p>
                            <input class="adminka_imp" name="ID_Type_service"></input>
                            <p class="adminka_p">Категория услуги</p>
                            <input class="adminka_imp" name="ID_Сategory_service"></input>
                            <p class="adminka_p">Каьинет</p>
                            <input class="adminka_imp" name="ID_Doctor"></input>
                            <br><br>
                            <button class="adminka_button mnogo" type="submit">Добавить</button>
                        </form>
        </div>

</div>

</body>
</html>