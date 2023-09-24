<?php
require_once 'connect.php';
?>

<?php
$id =$_GET['id'];
mysqli_query($connect, query: "DELETE FROM Сategory_service WHERE `Сategory_service`.`ID_Сategory_service` = '$id '");
header('Location: KATEG_.php');
?>