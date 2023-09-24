<?php
require_once 'connect.php';
?>

<?php

$Kateg = $_POST['Сategory'];

mysqli_query($connect, query: "INSERT INTO `Сategory_service` (`ID_Сategory_service`, `Сategory`) VALUES (NULL, '$Kateg');");

header('Location: KATEG_.php');

?>