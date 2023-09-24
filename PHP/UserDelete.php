<?php
require_once 'connect.php';
?>

<?php
$id =$_GET['id'];
mysqli_query($connect, query: "DELETE FROM User WHERE `User`.`ID_User` = '$id'");
header('Location: POLZ.php');
?>