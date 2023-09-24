<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['potato']) && $_POST['email'])
{
include 'connect.php';

$result = mysqli_query($connect,"SELECT * FROM User WHERE `email`='" . $_POST['email'] . "'");

$row = mysqli_num_rows($result);

if($row <= 0)
{
$email = $_POST['email'];
$token = md5($_POST['email']).rand(10,9999);

mysqli_query($connect, "INSERT INTO `User` (`ID_User`, `FIO`, `password`, `login`, `telephone`, `data_birthday`, `email`, `ID_Role`, `email_verification_link`) VALUES (NULL, '" . $_POST['text'] . "', '" . $_POST['password'] . "', '" . $_POST['login'] . "', '" . $_POST['number'] . "', '" . $_POST['date'] . "', '" . $_POST['email'] . "', '3', '" . $token . "')");
$link = "<a href='http://localhost/BeautyStudio/php/verify-email.php?key=".$_POST['email']."&token=".$token."'>ссылке</a>";

require_once('../vendor/autoload.php');



$mail = new PHPMailer(true);


try {
//Server settings
$mail->CharSet = "UTF-8";
$mail->setLanguage("ru", '../vendor/phpmailer/phpmailer/language');
$mail->SMTPDebug = 0; //Enable verbose debug output
$mail->isSMTP(); //Send using SMTP
$mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
$mail->SMTPAuth = true; //Enable SMTP authentication
$mail->Username = 'isip_a.k.pancireva@mpt.ru'; //SMTP username
$mail->Password = 'yxdoiqurcrvedoam'; //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //Enable implicit TLS encryption
$mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom('isip_a.k.pancireva@mpt.ru', 'BeautyStudio');
$mail->addAddress($email, 'Dear customer'); //Add a recipient

//Content
$mail->isHTML(true); //Set email format to HTML
$mail->Subject = 'Подтвердите электронную почту ';
$mail->Body = 'Для подтверждения перейдите по '.$link.'';


$mail->send();
echo  ' Проверьте почту,  там ссылка';


} catch (Exception $e) {
echo "Ошибка - >".$mail->ErrorInfo;
}
}
else
{
echo "Вы зарегистрированы";
}
}
?>
