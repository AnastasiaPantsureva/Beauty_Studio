<?php
    require_once 'connect.php';
    $Uslg_id = $_GET['id'];
    $Uslg = mysqli_query( $connect, query: "SELECT * FROM `Service` WHERE `ID_Service` = ' $Uslg_id' ");
    $Uslg = mysqli_fetch_assoc($Uslg);
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

        <form action="UpdaitUslg.php" method="post">
            <input type="hidden" name="ID_Service" value="<?= $Uslg['ID_Service'] ?>"></input>

            <p class="adminka_p">Название услуги</p>
                <input class="adminka_imp" name="Name_service" value="<?= $Uslg['Name_service'] ?>"></input>
            <p class="adminka_p">Описание услуги</p>
                <input class="adminka_imp" name="Description_service" value="<?= $Uslg['Description_service'] ?>"></input>
            <p class="adminka_p">Стоимость</p>
                <input class="adminka_imp" name="Сost" value="<?= $Uslg['Сost'] ?>"></input>
            <p class="adminka_p">Тип услуги</p>
                <input class="adminka_imp" name="ID_Type_service" value="<?= $Uslg['ID_Type_service'] ?>"></input>
            <p class="adminka_p">Категория услуги</p>
                <input class="adminka_imp" name="ID_Сategory_service" value="<?= $Uslg['ID_Сategory_service'] ?>"></input>
            <p class="adminka_p">Каьинет</p>
                <input class="adminka_imp" name="ID_Doctor" value="<?= $Uslg['ID_Doctor'] ?>"></input>

            <button class="adminka_button" type="submit">Изменить</button>
        </form>

</div>
    
</body>
</html>