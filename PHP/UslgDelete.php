<?php
require_once 'connect.php';
?>

<?php
$id =$_GET['id'];

mysqli_query($connect, query: "DELETE FROM `Service` WHERE `Service`.`ID_Service` = '$id'");
header('Location: USLUGA_.php');
?>