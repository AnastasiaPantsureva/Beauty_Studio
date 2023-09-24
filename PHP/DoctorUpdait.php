<?php
    require_once 'connect.php';
    $doctor_id = $_GET['id'];
    $doctor = mysqli_query( $connect, query: "SELECT * FROM `Doctor` WHERE `ID_Doctor` = '  $doctor_id'");
    $doctor = mysqli_fetch_assoc($doctor);

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

        <form action="UpdaitDoctor.php" method="post">
            <input type="hidden" name="ID_Doctor" value="<?= $doctor['ID_Doctor'] ?>"></input>

            <p class="adminka_p">Номер кабинета</p>
            <input class="adminka_imp" name="Cabinet_number" value="<?=  $doctor['Cabinet_number'] ?>"></input>

            <p class="adminka_p">Пользователь</p>
            <input class="adminka_imp" name="fio" value="<?=  $doctor['fio'] ?>"></input>

            <p class="adminka_p">Профиль доктора</p>
            <input class="adminka_imp" name="ID_Doctors_profile" value="<?=  $doctor['ID_Doctors_profile'] ?>"></input>

            <p class="adminka_p">Стаж</p>
            <input type="number" class="adminka_imp" name="work_experience" value="<?=  $doctor['work_experience'] ?>"></input><br><br>

            <button class="adminka_button mnogo" type="submit">Изменить</button>
        </form>

</div>
    
</body>
</html>