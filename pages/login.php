<h4 style="margin-top:10px;color:#3366FF;">Login Form</h4>
		<form method="post" action="">
		<?php
		if (isset($_POST["Submit"])){
			$username=$_POST["username"];
			$password=$_POST["password"];
			$error="";
			if ($username==""){
				$error.="<p>Username is empty.</p>";
			}if (strlen($password)<6){
				$error.="<p>Password is empty.</p>";
			}if (check_login($username,$password)=="no"){
				$error.="<p>Username or password is invalid.</p>";
			}if (check_login($username,$password)=="ban"){
				$error.="<p>Your account has been banned by admin, for any information contact admin.</p>";
			}
			if ($error!=""){
				echo "<div class='error_message'>$error</div>";
			}else{
				$_SESSION["uid"]=check_login($username,$password);
				header("location:./userpanel.php");
			}
		}
		?>
		<table cellspacing="0" class="form-mid">
			<tr>
				<td width="117" style="padding:5px;font-size:13px;">Username / Emal</td>
				<td width="425"><input name="username" type="text" id="username"/></td>
			</tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">Password</td>
			  <td><input name="password" type="password" id="password" /></td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td><input type="submit" name="Submit" value="Login" class="submit"/>
			    <a href="?forget=true">Forget password</a> </td>
			  </tr>
		</table>
		</form>