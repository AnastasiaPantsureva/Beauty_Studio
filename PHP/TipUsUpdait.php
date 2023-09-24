<?php
    require_once 'connect.php';
    $TipUs_id = $_GET['id'];
    $TipUs = mysqli_query( $connect, query: "SELECT * FROM `Type_service` WHERE `ID_Type_service` = ' $TipUs_id' ");
    $TipUs = mysqli_fetch_assoc($TipUs);
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

        <form action="UpdaitTip.php" method="post">
            <input type="hidden" name="ID_Type_service" value="<?= $TipUs['ID_Type_service'] ?>">

            <input class="adminka_imp" name="Type" value="<?=  $TipUs['Type'] ?>"></input>
            <button class="adminka_button" type="submit">Изменить</button>
        </form>

</div>
    
</body>
</html>