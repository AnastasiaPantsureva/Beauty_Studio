<?php
require_once 'connect.php';
?>

<?php
$id =$_GET['id'];
mysqli_query($connect, query: "DELETE FROM Role WHERE `Role`.`ID_Role` = '$id'");
header('Location: ROLE_.php');
?>