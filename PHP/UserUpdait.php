<?php
    require_once 'connect.php';
    $User_id = $_GET['id'];
    $User = mysqli_query( $connect, query: "SELECT * FROM `User` WHERE `ID_User` = ' $User_id' ");
    $User = mysqli_fetch_assoc($User);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Updait</title>
</head>
<body>
<div class="container">

    <h3 class="adminka_h3">Изменить тип услуги</h3>

        <form action="UpdaitUser.php" method="post">
            <input type="hidden" name="ID_User" value="<?= $User['ID_User'] ?>"></input>

            <p class="adminka_p">Фио</p>
            <input class="adminka_imp" name="FIO" value="<?= $User['FIO'] ?>"></input>
            <p class="adminka_p">Пароль</p>
            <input class="adminka_imp" name="password" value="<?= $User['password'] ?>"></input>
            <p class="adminka_p">Логин</p>
            <input class="adminka_imp" name="login" value="<?= $User['login'] ?>"></input>
            <p class="adminka_p">Телефон</p>
            <input class="adminka_imp" name="telephone" value="<?= $User['telephone'] ?>"></input>
            <p class="adminka_p">День рождения</p>
            <input class="adminka_imp" name="data_birthday" value="<?= $User['data_birthday'] ?>"></input>
            <p class="adminka_p">email</p>
            <input class="adminka_imp" name="email" value="<?= $User['email'] ?>"></input>
            <p class="adminka_p">Роль</p>
            <input class="adminka_imp" name="ID_Role" value="<?= $User['ID_Role'] ?>"></input><br><br>

            <button class="adminka_button mnogo" type="submit">Изменить</button>
        </form>

</div>
    
</body>
</html>