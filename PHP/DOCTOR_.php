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
    <h1 class="adminka_title">Таблица: Доктор</h1>
</div>


        <div class="adminka_table">
                <table>
                    <tr>
                        <th class ="adminka_table_title">ID доктор</th>
                        <th class ="adminka_table_title">Номер кабинета</th>
                        <th class ="adminka_table_title">ФИО</th>
                        <th class ="adminka_table_title">ID профиль</th>
                        <th class ="adminka_table_title">Стаж</th>
                    </tr>

                    <?php
                        $doctor = mysqli_query($connect, query: "SELECT Doctor.*, `Doctors_profile`.Profile AS 'ПРОФИЛЬ' FROM Doctor JOIN `Doctors_profile` ON Doctor.`ID_Doctors_profile` = `Doctors_profile`.`ID_Doctors_profile`");
                        $doctor = mysqli_fetch_all($doctor);
                        foreach ($doctor as $doctor) {
                    ?>

                    <tr>
                        <td class ="adminka_table_soderg"><?= $doctor[0] ?></td>
                        <td class ="adminka_table_soderg"><?= $doctor[1] ?></td>
                        <td class ="adminka_table_soderg"><?= $doctor[2] ?></td>
                        <td class ="adminka_table_soderg"><?= $doctor[3] ?></td>
                        <td class ="adminka_table_soderg"><?= $doctor[4] ?></td>
                        <td><a href="DoctorUpdait.php?id=<?= $doctor[0] ?>"><img class="notepad" src="../IMG/notepad.png" alt="notepad"></a></td>
                        <td><a href="DoctorDelete.php?id=<?= $doctor[0] ?>"><img class="Delete" src="../IMG/Delete.png" alt="Delete"></a></td>
                    </tr>

                    <?php

                        }
                    ?>

                </table>

                <h3 class="adminka_h3">Добавить доктора</h3>

                    <form action="Doctor.php" method="post">

                        <p class="adminka_p">Номер кабинета</p>
                        <input type="number" class="adminka_imp" name="Cabinet_number"></input>

                        <p class="adminka_p">ФИО</p>
                        <input type="text" class="adminka_imp" name="fio"></input>

                        <p class="adminka_p">Профиль</p>
                        <input type="number" class="adminka_imp" name="ID_Doctors_profile"></input>

                        <p class="adminka_p">Стаж</p>
                        <input class="adminka_imp" name="work_experience"></input><br><br>

                        <button class="adminka_button mnogo" type="submit">Добавить</button>
                    </form>

        </div>

</div>

</body>
</html>