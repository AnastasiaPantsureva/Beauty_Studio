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
    <h1 class="adminka_title">Таблица: Пользователи</h1>
</div>


                <div class="adminka_table">
                <table>
                <tr>
                        <th class ="adminka_table_title">ID Пользователи</th>
                        <th class ="adminka_table_title">ФИО</th>
                        <th class ="adminka_table_title">Пароль</th>
                        <th class ="adminka_table_title">Логин</th>
                        <th class ="adminka_table_title">Телефон</th>
                        <th class ="adminka_table_title">Дата</th>
                        <th class ="adminka_table_title">Почта</th>
                        <th class ="adminka_table_title">Роль</th>
                        <th class ="adminka_table_title">Статус</th>
                        <th class ="adminka_table_title">email_verification</th>
                        <th class ="adminka_table_title">date_reg</th>
                    </tr>

                    <?php
                        $User = mysqli_query($connect, query: "SELECT User.*, `Role`.`Role` AS 'Роль' FROM User JOIN Role ON User.`ID_Role` = Role.`ID_Role`");
                        $User = mysqli_fetch_all($User);
                        foreach ($User as $User) {
                    ?>



                    <tr>
                        <td class ="adminka_table_soderg"><?= $User[0] ?></td>
                        <td class ="adminka_table_soderg"><?= $User[1] ?></td>
                        <td class ="adminka_table_soderg"><?= $User[2] ?></td>                        
                        <td class ="adminka_table_soderg"><?= $User[3] ?></td>
                        <td class ="adminka_table_soderg"><?= $User[4] ?></td>
                        <td class ="adminka_table_soderg"><?= $User[5] ?></td>
                        <td class ="adminka_table_soderg"><?= $User[6] ?></td>
                        <td class ="adminka_table_soderg"><?= $User[7] ?></td>
                        <td class ="adminka_table_soderg"><?= $User[8] ?></td>
                        <td class ="adminka_table_soderg"><?= $User[9] ?></td>
                        <td class ="adminka_table_soderg"><?= $User[10] ?></td>
                        <td><a href="UserUpdait.php?id=<?= $User[0] ?>"><img class="notepad" src="../IMG/notepad.png" alt="notepad"></a></td>
                        <td><a href="UserDelete.php?id=<?= $User[0] ?>"><img class="Delete" src="../IMG/Delete.png" alt="Delete"></a></td>
                    </tr>
                    <?php

                        }
                    ?>

                </table>

                <h3 class="adminka_h3">Добавить Пользователя</h3>

                    <form action="User.php" method="post">

                        <p class="adminka_p">Фио</p>
                        <input class="adminka_imp" name="FIO"></input>
                        <p class="adminka_p">Пароль</p>
                        <input class="adminka_imp" name="password"></input>
                        <p class="adminka_p">Логин</p>
                        <input class="adminka_imp" name="login"></input>
                        <p class="adminka_p">Телефон</p>
                        <input class="adminka_imp" name="telephone"></input>
                        <p class="adminka_p">День рождения</p>
                        <input class="adminka_imp" name="data_birthday"></input>
                        <p class="adminka_p">email</p>
                        <input class="adminka_imp" name="email"></input>
                        <p class="adminka_p">Роль</p>
                        <input class="adminka_imp" name="ID_Role"></input>
                        <p class="adminka_p">status</p>
                        <input class="adminka_imp" name="status"></input>
                        <p class="adminka_p">email_verification_link</p>
                        <input class="adminka_imp" name="email_verification_link"></input>
                        <br><br>

                        <button class="adminka_button mnogo" type="submit">Добавить</button>
                    </form>
                </div>

</div>

</body>
</html>