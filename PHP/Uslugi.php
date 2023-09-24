<?php
require_once 'connect.php';
?>

<?php

$ID_Service = $_POST['ID_Service'];
$ID_User = $_POST['ID_User'];
$ID_Doctor = $_POST['ID_Doctor'];
$date = $_POST['date'];

mysqli_query($connect, query: "INSERT INTO `Services` (`ID_Services`, `ID_Service`, `ID_User`, `ID_Doctor`, `date`) VALUES (NULL, '$ID_Service', '$ID_User', '$ID_Doctor', '$date');");

header('Location: USLUGAS_.php');

?>
