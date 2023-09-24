<?php
require_once 'connect.php';
?>

<?php

$nomber = $_POST['nomber'];
$service = $_POST['service'];
$date = $_POST['date'];


mysqli_query($connect, query: "INSERT INTO `message` (`id_message`, `nomber`, `service`, `date`) VALUES (NULL, '$nomber' , '$service', '$date');");




header('Location: ../profil-avtor.php');

?>
