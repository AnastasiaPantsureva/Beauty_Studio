<?php
require_once 'connect.php';
?>

<?php
$id =$_GET['id'];
mysqli_query($connect, query: "DELETE FROM Doctor WHERE `Doctor`.`ID_Doctor` = '$id'");
header('Location: DOCTOR_.PHP');
?>