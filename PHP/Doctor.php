<?php
require_once 'connect.php';
?>

<?php

$Cabinet = $_POST['Cabinet_number'];
$fio = $_POST['fio'];
$ID_Doctors_profile = $_POST['ID_Doctors_profile'];
$work_experience = $_POST['work_experience'];

mysqli_query($connect, query: "INSERT INTO `Doctor` (`ID_Doctor`, `Cabinet_number`, `fio`, `ID_Doctors_profile`, `work_experience`) VALUES (NULL, '$Cabinet ', '$fio ', '$ID_Doctors_profile', '$work_experience');");

header('Location: DOCTOR_.PHP');

?>
