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
    <h1 class="adminka_title">Таблица: Категории услуг</h1>
</div>


        <div class="adminka_table">
                <table>
                <tr>
                    <th class ="adminka_table_title">ID Категория</th>
                    <th class ="adminka_table_title">Категория</th>
                </tr>

                <?php
                $Kateg = mysqli_query($connect, query: "SELECT * FROM `Сategory_service`");
                $Kateg = mysqli_fetch_all($Kateg);
                foreach ($Kateg as $Kateg) {
                ?>

                <tr>
                    <td class ="adminka_table_soderg"><?= $Kateg[0] ?></td>
                    <td class ="adminka_table_soderg"><?= $Kateg[1] ?></td>
                    <td><a href="KategUpdait.php?id=<?= $Kateg[0] ?>"><img class="notepad" src="../IMG/notepad.png" alt="notepad"></a></td>
                    <td><a href="KategDelete.php?id=<?= $Kateg[0] ?>"><img class="Delete" src="../IMG/Delete.png" alt="Delete"></a></td>
                </tr>
                <?php

                }
                ?>

                </table>

                <h3 class="adminka_h3">Добавить Категорию</h3>

                    <form action="Kateg.php" method="post">

                        <p class="adminka_p">Категория</p>
                        <input class="adminka_imp" name="Сategory"></input>

                        <button class="adminka_button" type="submit">Добавить</button>
                    </form>
        </div>

</div>

</body>
</html>