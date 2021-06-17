<?php
include "apps/config.php";

$email=mysql_real_escape_string($_POST['email']);
$codeb=mysql_real_escape_string($_POST['code']);

$code=trim($codeb);

$q=mysql_query("SELECT * FROM `users` WHERE `email`='$email' AND `rcode`='$code'");
if($row=mysql_fetch_array($q))
{	
header('Location:forgot5.php?em='.$email.'&matched');
}
else
{
header('Location:forgot3.php?error');
}
?>