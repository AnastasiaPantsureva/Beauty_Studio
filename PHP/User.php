<?php
require_once 'connect.php';
?>

<?php

$FIO = $_POST['FIO'];
$password = $_POST['password'];
$login = $_POST['login'];
$telephone = $_POST['telephone'];
$data_birthday = $_POST['data_birthday'];
$email = $_POST['email'];
$ID_Role = $_POST['ID_Role'];
$status = $_POST['status'];
$email_verification_link = $_POST['email_verification_link'];

mysqli_query($connect, query: "INSERT INTO `User` (`ID_User`, `FIO`, `password`, `login`, `telephone`, `data_birthday`, `email`, `ID_Role`, `status`, `email_verification_link`) VALUES ('NULL,', '$FIO', '$password', '$login', '$telephone', '$data_birthday', '$email', '$ID_Role', '$status', '$email_verification_link');");




header('Location: POLZ.php');

?>
