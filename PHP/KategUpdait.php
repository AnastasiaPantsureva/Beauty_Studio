<?php
    require_once 'connect.php';
    $Kateg_id = $_GET['id'];
    $Kateg = mysqli_query( $connect, query: "SELECT * FROM `Сategory_service` WHERE `ID_Сategory_service` = ' $Kateg_id' ");
    $Kateg = mysqli_fetch_assoc($Kateg);
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

    <h3 class="adminka_h3">Изменить доктора</h3>

        <form action="UpdaitKateg.php" method="post">

            <input type="hidden" name="ID_Сategory_service" value="<?= $Kateg['ID_Сategory_service'] ?>"></input>

            <p class="adminka_p">Категория</p>
                <input class="adminka_imp" name="Сategory" value="<?= $Kateg['Сategory'] ?>"></input>

            <button class="adminka_button" type="submit">Изменить</button>

        </form>

</div>
    
</body>
</html>