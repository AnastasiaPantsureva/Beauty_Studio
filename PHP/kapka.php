

<?php
session_start();
include "connect.php";

if (isset($_POST['submit'])){
if(isset($_POST['login'])){
$login = $_POST['login'];
if($login === ''){
unset($login);
}
}
if(isset($_POST['password'])){
$password = $_POST['password'];
if($password === ''){
unset($password);
}
}
if(isset($_POST['g-recaptcha-response'])){
$recapcha = $_POST['g-recaptcha-response'];

if(!$recapcha){
$_SESSION['message']='Подтвердите, что Вы не робот';
header('Location' . $_SERVER['HTTP_REFERER']);
}
else {
$secretkey = "6Lf82xkoAAAAAFX-LhIzx5tuv5CwtiYZ4qd7P3TG";
$response = $_POST['g-recaptcha-response'];
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$remoteip";
$file= file_get_contents($url);
$data = json_decode($file);

if(isset($_POST['g-recaptcha-response'])){

if($data->success==true) {

$login = $_POST['login'];
$password = ($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM `User` WHERE `login` = '$login' AND `password` = '$password'");

if (mysqli_num_rows($check_user) > 0) {

$user = mysqli_fetch_assoc($check_user);

$_SESSION['User'] = [
"login" => $user['login'],
];

header('Location: /profil-avtor.php');

} else {
header('Location: kapka.php');
}
} else {
echo "Вы не прошли проверку";
}
}

}
}
}
?>