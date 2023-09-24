<?php
require_once 'connect.php';
?>

<?php
$id =$_GET['id'];
mysqli_query($connect, query: "DELETE FROM Type_service WHERE `Type_service`.`ID_Type_service` = '$id'");
header('Location: TIP_US.php');
?>