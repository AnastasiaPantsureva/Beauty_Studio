<?php
require_once 'connect.php';
?>

<?php

$id = $_POST['ID_Service'];
$Name_service = $_POST['Name_service'];
$Description_service = $_POST['Description_service'];
$Сost = $_POST['Сost'];
$ID_Type_service = $_POST['ID_Type_service'];
$ID_Сategory_service = $_POST['ID_Сategory_service'];
$ID_Doctor = $_POST['ID_Doctor'];

mysqli_query($connect, query: "UPDATE `Service` SET `Name_service` = '$Name_service', `Description_service` = '$Description_service ', `Сost` = '$Сost', `ID_Type_service` = '$ID_Type_service', `ID_Сategory_service` = '$ID_Сategory_service', `ID_Doctor` = '$ID_Doctor' WHERE `Service`.`ID_Service` = '$id';");


header('Location: USLUGA_.php');

?>