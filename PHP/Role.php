<?php
require_once 'connect.php';
?>

<?php

$Role = $_POST['Role'];

mysqli_query($connect, query: "INSERT INTO `Role` (`ID_Role`, `Role`) VALUES (NULL, '$Role');");

header('Location: ROLE_.php');

?>
