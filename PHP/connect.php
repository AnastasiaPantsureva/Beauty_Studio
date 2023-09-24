<?php
$user="root";
$password="";
$db="BeautyStudio";
$dbh = 'mysql:host=localhost;dbname='.$db.';charset=utf8';
$pdo=new PDO($dbh, $user, $password);


$connect = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'BeautyStudio'); 
if (!$connect){ 
    die('error'); 
} 
?>