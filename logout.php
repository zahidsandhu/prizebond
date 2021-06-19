<?php
ob_start();
session_start();
if (isset($_SESSION["uid"])){
	session_destroy();
	header("location:./");
}else{
	header("location:./");
}
?>