<?php
require_once 'connect.php';
?>

<?php

$id = $_POST['ID_Doctor'];
$Cabinet = $_POST['Cabinet_number'];
$fio = $_POST['fio'];
$profile = $_POST['ID_Doctors_profile'];
$work_experience = $_POST['work_experience'];


mysqli_query($connect, query: "UPDATE `Doctor` SET `Cabinet_number` = '$Cabinet', `fio` = '$fio', `ID_Doctors_profile` = '$profile', `work_experience` = '$work_experience' WHERE `Doctor`.`ID_Doctor` = '$id';");


header('Location: DOCTOR_.php');

?>