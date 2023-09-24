<?php
require_once 'connect.php';
?>

<?php

$id = $_POST['ID_Type_service'];
$Type = $_POST['Type'];

mysqli_query($connect, query: "UPDATE `Type_service` SET `Type` = '$Type' WHERE `Type_service`.`ID_Type_service` = '$id'");


header('Location: TIP_US.php');

?>