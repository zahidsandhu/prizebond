<h4 style="margin-top:10px;color:#fff;">Change Picture</h4>
		<form action="" method="post" enctype="multipart/form-data">

		<?php
		// echo $_SESSION["uid"];
		// exit();
		$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
		if (isset($_POST["Submit"])){
			if ($_FILES["file"]["size"]<10){
				echo "<p class='alert alert-danger'><span class='text-danger font-weight-bold'>ERROR!</span> Please attach your photo.</p>";
			}else{
				$dat=time();
				move_uploaded_file($_FILES["file"]["tmp_name"],"user_photo/$dat".$_FILES["file"]["name"]);
				$upload="$dat".$_FILES["file"]["name"];
				mysqli_query($con,"UPDATE users set photo='$upload' where uid='".$_SESSION["uid"]."'");
				echo "<div class='success_message'><p class='alert alert-success '>Data has been updated successfully.</p></div>";
				?>

				  <script> setTimeout(function(){ window.location.href ="userpanel.php?post=changepicture&s=true"}, 2000);
				</script>
			<?php
				//header("location:?post=changepicture&s=true");
			}
		}
		// elseif(isset($_GET["s"])){
		// 	echo "<div class='success_message'>Data has been updated successfully.</div>";
		// }
		if (isset($_GET["del"])){
			mysqli_query($con,"update users set photo='' where uid='".$userData["uid"]."'");
			unlink("user_photo/".$userData["photo"]);
			header("location:?post=changepicture");
		}
		?>
		<table width="352" cellspacing="0" class="form-mid">
			<tr>
			  <td>Picture</td>
			  <td width="218">
			  <?php
			  if ($userData["photo"]!=""){
			  	echo "<img src='user_photo/".$userData["photo"]."' width='200px' align='absmiddle'>
				&nbsp;&nbsp;&nbsp;
				<a href='?post=changepicture&del=true' style='color:#fff;' class=\"btn btn-outline-danger btn-sm\">Delete</a>
				";
			  }else{
			  	echo "<input type='file' name='file'><br><br><br>
				<input type='submit' name='Submit' value='Update' class='btn btn-dark btn-fw submit '/>
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