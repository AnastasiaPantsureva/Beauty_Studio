<?php
require_once 'connect.php';
?>

<?php
$id =$_GET['id'];
mysqli_query($connect, query: "DELETE FROM Services WHERE `Services`.`ID_Services` = '$id'");
header('Location: USLUGAS_.php');
?>