<?php
include "apps/config.php";

$email=$_POST['email'];
$pass=$_POST['pass'];
$pass2=$_POST['pass2'];

?>

<html>
<body>
<?php
if($pass==$pass2){
$q=mysql_query("UPDATE `users` SET `password`='$pass' WHERE `email`='$email'");
if($q)
{
$to=$email;
$subject="Password Reset Successfully";
$msg="Congratulations."
.'Password reset successfully.Click on the link to login,Thanks.click the link to loginhttps://prizebond.asia/userpanel/index.php?success';


$headers = 'From: support@prizebond.asia' . "\r\n" .
    		'Reply-To: noreply@prizebond.asia' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();

mail($to,$subject,$msg,$headers); //receiver, subject, message, sender
header('Location:index.php?success');
}
}
else
{
header('Location:forgot5.php?unsuccessful');
}

?>

</body>
</html>
