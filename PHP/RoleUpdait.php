<?php
    require_once 'connect.php';
    $Role_id = $_GET['id'];
    $Role = mysqli_query( $connect, query: "SELECT * FROM `Role` WHERE `ID_Role` = ' $Role_id' ");
    $Role = mysqli_fetch_assoc($Role);
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

        <form action="UpdaitRole.php" method="post">
            <input type="hidden" name="ID_Role" value="<?= $Role['ID_Role'] ?>">

            <input class="adminka_imp" name="Role" value="<?=  $Role['Role'] ?>"></input>

            <button class="adminka_button" type="submit">Изменить</button>
        </form>

</div>
    
</body>
</html>