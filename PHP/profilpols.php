<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = ($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `User` WHERE `login` = '$login' AND `password` = '$password' AND `status` = '1'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['User'] = [
            "ID_User" => $user['ID_User'],
            "FIO" => $user['FIO'],
            "telephone" => $user ['telephone'],
            "data_birthday" => $user['data_birthday']
        ];

        header('Location: ../profil-avtor.php');

    } else {
        header('Location: ../profil.php');
        
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
