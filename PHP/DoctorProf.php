<?php
require_once 'connect.php';
?>

<?php

$Prof = $_POST['Profile'];

mysqli_query($connect, query: "INSERT INTO `Doctors_profile` (`ID_Doctors_profile`, `Profile`) VALUES (NULL, '$Prof');");

header('Location: PROFDOC.php');

?>
