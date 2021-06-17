<h4 style="margin-top:10px;color:#3366FF;">Forget password</h4>
		<form method="post" action="">
		<?php
		if (isset($_POST["Submit"])){
			$email=$_POST["username"];
			$user=mysql_fetch_array(mysql_query("select * from users where email='$email'"));
			$error="";
			if (!$user){
				$error.="<p>Please enter valid email.</p>";
			}
			if ($error!=""){
				echo "<div class='error_message'>$error</div>";
			}else{
				
				echo "<div class='success_message'>Your password is = <b>" .$user["password"]. "</b></div>";
			}
		}
		?>
		<table cellspacing="0" class="form-mid">
			<tr>
				<td width="117" style="padding:5px;font-size:13px;"> Emal</td>
				<td width="425"><input name="username" type="text" id="username"/></td>
			</tr>
			<tr>
			  <td>&nbsp;</td>
			  <td><input type="submit" name="Submit" value="Register" class="submit"/>
			    <a href=""></a> </td>
			  </tr>
		</table>
		</form>