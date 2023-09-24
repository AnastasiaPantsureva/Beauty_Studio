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
    <h1 class="adminka_title">Таблица: тип услуг </h1>
</div>



        <div class="adminka_table">
            <table>
                <tr>
                    <th class ="adminka_table_title">ID тип услуги</th>
                    <th class ="adminka_table_title">Тип услуги</th>
                </tr>

                <?php
                    $TipUs = mysqli_query($connect, query: "SELECT * FROM `Type_service`");
                    $TipUs = mysqli_fetch_all($TipUs);
                    foreach ($TipUs as $TipUs) {
                ?>

                <tr>
                    <td class ="adminka_table_soderg"><?= $TipUs[0] ?></td>
                    <td class ="adminka_table_soderg"><?= $TipUs[1] ?></td>
                    <td><a href="TipUsUpdait.php?id=<?= $TipUs[0] ?>"><img class="notepad" src="../IMG/notepad.png" alt="notepad"></a></td>
                    <td><a href="TipUsDelete.php?id=<?= $TipUs[0] ?>"><img class="Delete" src="../IMG/Delete.png" alt="Delete"></a></td>
                </tr>
                <?php

                    }
                ?>

            </table>

            <h3 class="adminka_h3">Добавить тип услуги</h3>
                <form class="adminka_form" action="TipUs.php" method="post">
                <p class="adminka_p">Тип</p>
                    <input class="adminka_imp" name="Type"></input>
                    <button class="adminka_button" type="submit">Добавить</button>
                </form>
        </div>

</div>

</body>
</html>