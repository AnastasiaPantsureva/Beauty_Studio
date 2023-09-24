<?php
require_once 'connect.php';
?>

<?php

$id = $_POST['ID_Role'];
$Role = $_POST['Role'];

mysqli_query($connect, query: "UPDATE `Role` SET `Role` = '$Role' WHERE `Role`.`ID_Role` = '$id';");


header('Location: ROLE_.php');

?>