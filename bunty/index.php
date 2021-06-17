<?php
ob_start();
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
<form method="post" action="">
<table align="center" cellpadding="10" cellspacing="0">
<tr>
  <td colspan="2">
  <?php
  if (isset($_POST["Submit"])){
  		$username="bunty";
		$password="Buntyshah12345";
		if ($_POST["user"]!=$username or $_POST["pass"]!=$password){
			echo "Userrname or password is invlaid.";
		}else{
			$_SESSION["login"]="1";
			header("location:main.php");
		}	
  }
  ?>
  </td>
  </tr>
<tr>
<td width="103">Username</td>
<td width="186"><input name="user" type="text" id="user" /></td>
</tr>
<tr>
  <td>Password</td>
  <td><input name="pass" type="password" id="pass" /></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td><input type="submit" name="Submit" value="Submit" /></td>
</tr>
</table>
</form>
</body>
</html>