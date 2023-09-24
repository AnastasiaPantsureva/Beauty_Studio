<?php
require_once 'connect.php';
?>

<?php
$id =$_GET['id'];
mysqli_query($connect, query: "DELETE FROM `message` WHERE `message`.`id_message` = '$id'");
header('Location: adminka.php');
?>