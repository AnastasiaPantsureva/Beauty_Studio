<?php
require_once 'connect.php';
?>

<?php
$id =$_GET['id'];
mysqli_query($connect, query: "DELETE FROM Doctors_profile WHERE `Doctors_profile`.`ID_Doctors_profile` = '$id'");
header('Location: PROFDOC.php');
?>