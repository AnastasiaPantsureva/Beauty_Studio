<?php
require_once 'connect.php';
?>

<?php

$id = $_POST['ID_User'];
$FIO = $_POST['FIO'];
$password = $_POST['password'];
$login = $_POST['login'];
$data_birthday = $_POST['data_birthday'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$ID_Role = $_POST['ID_Role'];

mysqli_query($connect, query: "UPDATE `User` SET `FIO` = '$FIO', `password` = '$password', `login` = '$login', `data_birthday` = '$data_birthday', `telephone` = '$telephone', `email` = '$email', `ID_Role` = '$ID_Role' WHERE `User`.`ID_User` = '$id';");


header('Location: POLZ.php');

?>