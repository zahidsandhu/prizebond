<?php
$servername = "localhost";
$username = "prizebond_prizebond";
$password = "k6[1}Erpsg9q";
$dbname = "prizebond_blogadmin";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn)
{
    echo "";
}
else
{
    die ("Connection failed".mysqli_connect_error());
}
?>