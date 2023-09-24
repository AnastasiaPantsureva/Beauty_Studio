<?php
require_once 'connect.php';
?>

<?php

$Type = $_POST['Type'];

mysqli_query($connect, query: "INSERT INTO `Type_service` (`ID_Type_service`, `Type`) VALUES (NULL, '$Type')");

header('Location: TIP_US.php');

?>
