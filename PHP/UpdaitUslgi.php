<?php
require_once 'connect.php';
?>

<?php

$id = $_POST['ID_Service'];
$ID_Service = $_POST['ID_Service'];
$ID_User = $_POST['ID_User'];
$ID_Doctor = $_POST['ID_Doctor'];
$date = $_POST['date'];

mysqli_query($connect, query: "UPDATE `Services` SET `ID_Service` = '$ID_Service', `ID_User` = '$ID_User', `ID_Doctor` = '$ID_Doctor', `date` = '$date' WHERE `Services`.`ID_Services` = '$id';");


header('Location: USLUGAS_.php');

?>