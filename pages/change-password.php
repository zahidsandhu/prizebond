<h4 style="margin-top:10px;color:#fff;">Change Password</h4>
		<form action="" method="post" enctype="multipart/form-data">
		<?php
		if (isset($_POST["Submit"])){
			$old=$_POST["old"];
			$new=$_POST["new"];
			$conf=$_POST["conf"];
			$error="";
			if ($userData["password"]!=$old){
				$error.="<p>Old Password is invlaid.</p>";
			}if (strlen($new)<6){
				$error.="<p>New Passwrod characters lenght must be not less then 6.</p>";
			}if ($new!=$conf){
				$error.="<p>New and confirm password do not match.</p>";
			}
			if ($error!=""){
				echo "<div class='error_message'>$error</div>";
			}else{
				mysql_query("update users set password='$new' where uid='".$userData["uid"]."'");
				header("location:?post=password&s=true");
			}
		}elseif(isset($_GET["s"])){
			echo "<div class='success_message'>Password has been changed successfully.</div>";
		}
		
		?>
		<table cellspacing="0" class="form-mid">
			<tr>
			  <td width="117" style="padding:5px;font-size:13px;">Old Password </td>
			  <td width="425"><input name="old" type="password" id="old"/></td>
			  </tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">New Password </td>
			  <td><input name="new" type="password" id="new"/></td>
			  </tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">Confirm Password </td>
			  <td><input name="conf" type="password" id="conf"/></td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td><input type="submit" name="Submit" value="Update" class="submit"/></td>
			  </tr>
		</table>
		</form>