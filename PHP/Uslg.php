<?php
require_once 'connect.php';
?>

<?php

$Name_service = $_POST['Name_service'];
$Description_service = $_POST['Description_service'];
$Сost = $_POST['Сost'];
$ID_Type_service = $_POST['ID_Type_service'];
$ID_Сategory_service = $_POST['ID_Сategory_service'];
$ID_Doctor = $_POST['ID_Doctor'];


mysqli_query($connect, query: "INSERT INTO `Service` (`ID_Service`, `Name_service`, `Description_service`, `Сost`, `ID_Type_service`, `ID_Сategory_service`, `ID_Doctor`) VALUES (NULL, '$Name_service', '$Description_service', '$Сost', '$ID_Type_service', '$ID_Сategory_service', '$ID_Doctor');");

header('Location: USLUGA_.php');

?>
