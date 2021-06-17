<?php
include_once "apps/config.php";

$email=$_POST['email'];

$show=mysql_query("SELECT * FROM `users` WHERE `email`='$email'");
if($row=mysql_fetch_array($show))
{
$code=rand(111111,999999);

$q=mysql_query("UPDATE `users` SET `rcode`='$code' WHERE `email`='$email'");

$to=$email;
$subject="Password Recovery Reuest";
$msg="Recently a password recovery is requested by your account. Your recovery code is ".$code;


$headers = 'From: support@prizebond.asia' . "\r\n" .
    		'Reply-To: noreply@prizebond.asia' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();

mail($to,$subject,$msg,$headers); //receiver, subject, message, sender

header('Location:forgot3.php?verified');

}
else
{
header('Location:forgot.php?invalid');
}
?>