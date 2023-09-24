<?php
require_once 'connect.php';
?>

<?php

$id = $_POST['ID_Doctors_profile'];
$Profile = $_POST['Profile'];

mysqli_query($connect, query: "UPDATE `Doctors_profile` SET `Profile` = '$Profile' WHERE `Doctors_profile`.`ID_Doctors_profile` = '$id';");


header('Location: PROFDOC.php');

?>