<?php
require_once 'connect.php';
?>

<?php

$id = $_POST['ID_Сategory_service'];
$Сategory = $_POST['Сategory'];

mysqli_query($connect, query: "UPDATE `Сategory_service` SET `Сategory` = '$Сategory' WHERE `Сategory_service`.`ID_Сategory_service` = '$id';");


header('Location: KATEG_.php');

?>