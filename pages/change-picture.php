<h4 style="margin-top:10px;color:#fff;">Change Picture</h4>
		<form action="" method="post" enctype="multipart/form-data">
		<?php
		if (isset($_POST["Submit"])){
			if ($_FILES["file"]["size"]<10){
				$error.="<p>Please attach your photo.</p>";
			}
			if ($error!=""){
				echo "<div class='error_message'>$error</div>";
			}else{
				$dat=time();
				move_uploaded_file($_FILES["file"]["tmp_name"],"user_photo/$dat" . $_FILES["file"]["name"]);
				$upload="$dat" . $_FILES["file"]["name"];
				mysql_query("update users set photo='$upload' where uid='".$userData["uid"]."'");
				header("location:?post=changepicture&s=true");
			}
		}elseif(isset($_GET["s"])){
			echo "<div class='success_message'>Data has been updated successfully.</div>";
		}
		if (isset($_GET["del"])){
			mysql_query("update users set photo='' where uid='".$userData["uid"]."'");
			unlink("user_photo/".$userData["photo"]);
			header("location:?post=changepicture");
		}
		?>
		<table width="352" cellspacing="0" class="form-mid">
			<tr>
			  <td width="83" valign="top" style="padding:5px;font-size:13px;">Picture</td>
			  <td width="218">
			  <?php
			  if ($userData["photo"]!=""){
			  	echo "<img src='user_photo/".$userData["photo"]."' width='200px' align='absmiddle'>
				&nbsp;&nbsp;&nbsp;
				<a href='?post=changepicture&del=true' style='color:#fff;'>Delete</a>
				";
			  }else{
			  	echo "<input type='file' name='file'><bR><br><br>
				<input type='submit' name='Submit' value='Update' class='submit'/>
				";
			  }
			  ?>
			  </td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td></td>
			  <td>&nbsp;</td>
			  </tr>
		</table>
		</form>