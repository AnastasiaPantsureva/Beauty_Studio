<?php require_once 'connect.php'; ?>

<?php session_start();?>

<?php
$login=$_POST["login"];
$password=$_POST["password"]; 


$sql = $pdo->prepare("SELECT id_user, login FROM User WHERE login=:login AND password=:password");
$sql->execute(array('login'=>$login,'password'=>$password));
$array=$sql->fetch(PDO::FETCH_ASSOC);
print_r($array); 


if($array["id_user"]>0){
    $_SESSION['login']=$array["login"];
    header('Location:adminka.php');
    }
    else{
    header('Location:login.php');
    }
?>
