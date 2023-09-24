<?php
    require_once 'connect.php';
    $Uslgi_id = $_GET['id'];
    $Uslgi = mysqli_query( $connect, query: "SELECT * FROM `Services` WHERE `ID_Services` = ' $Uslgi_id' ");
    $Uslgi = mysqli_fetch_assoc($Uslgi);
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

        <form action="UpdaitUslgi.php" method="post">
            <input type="hidden" name="ID_Services" value="<?= $Uslgi['ID_Services'] ?>"></input>

            <p class="adminka_p">Услуга</p>
                <input class="adminka_imp" name="ID_Service" value="<?= $Uslgi['ID_Service'] ?>"></input>
            <p class="adminka_p">Пользователь</p>
                <input class="adminka_imp" name="ID_User" value="<?= $Uslgi['ID_User'] ?>"></input>
            <p class="adminka_p">Кабинет</p>
                <input class="adminka_imp" name="ID_Doctor" value="<?= $Uslgi['ID_Doctor'] ?>"></input>
            <p class="adminka_p">Дата</p>
                <input type="date" class="adminka_imp" name="date" value="<?= $Uslgi['date'] ?>"></input>

            <button class="adminka_button mnogo" type="submit">Изменить</button>

        </form>

</div>
    
</body>
</html>