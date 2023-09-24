<?php
    require_once 'connect.php';
    $doctorprof_id = $_GET['id'];
    $doctorprof = mysqli_query( $connect, query: "SELECT * FROM `Doctors_profile` WHERE `ID_Doctors_profile` = ' $doctorprof_id' ");
    $doctorprof = mysqli_fetch_assoc($doctorprof);
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

    <h3 class="adminka_h3">Изменить профиль доктора</h3>

        <form action="UpdaitDoctorProf.php" method="post">
            <input type="hidden" name="ID_Doctors_profile" value="<?=  $doctorprof['ID_Doctors_profile'] ?>">

            <p class="adminka_p">Профиль</p>
                <input class="adminka_imp" name="Profile" value="<?=   $doctorprof['Profile'] ?>"></input>

            <button class="adminka_button" type="submit">Изменить</button>
        </form>

</div>
    
</body>
</html>