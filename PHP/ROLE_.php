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
    <h1 class="adminka_title">Таблица: Роль</h1>
</div>



        <div class="adminka_table">
                <table>
                <th class ="adminka_table_title">ID Роль</th>
                        <th class ="adminka_table_title">Роль</th>
                    </tr>

                    <?php
                        $Role = mysqli_query($connect, query: "SELECT * FROM `Role`");
                        $Role = mysqli_fetch_all($Role);
                        foreach ($Role as $Role) {
                    ?>

                    <tr>
                        <td class ="adminka_table_soderg"><?= $Role[0] ?></td>
                        <td class ="adminka_table_soderg"><?= $Role[1] ?></td>
                        <td><a href="RoleUpdait.php?id=<?= $Role[0] ?>"><img class="notepad" src="../IMG/notepad.png" alt="notepad"></a></td>
                        <td><a href="RoleDelete.php?id=<?= $Role[0] ?>"><img class="Delete" src="../IMG/Delete.png" alt="Delete"></a></td>
                    </tr>
                    <?php

                        }
                    ?>

                </table>

                <h3 class="adminka_h3">Добавить роль</h3>

                    <form action="Role.php" method="post">

                        <p class="adminka_p">Роль</p>
                        <input class="adminka_imp" name="Role"></input>

                        <button class="adminka_button" type="submit">Добавить</button>
                    </form>
         </div>

</div>

</body>
</html>