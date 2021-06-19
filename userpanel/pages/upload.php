<?php
if (isset($_GET["edit"])){
	$result=mysqli_query($con,"select * from posting where dat='".$_GET["edit"]."'");
	$row=mysqli_fetch_array($result);
	$posts=$row["posting"];
	$button="Update";
	$url="?post=".$_GET["post"]."&edit=".$_GET["edit"];
}else{
	$posts="";
	$button="Submit";
	$url="?post=".$_GET["post"];
}
if (!isset($_GET["edit"])){
if (check_access_post($_SESSION["uid"],$_GET["post"])=="1"){
	echo "<div class='error_message' style='font-size:13px;'>You have posted one time, now you can not post again. If you want to have post please delete the previous post</div>
	";
	$ds="disabled='disabled'";
}else{
	$ds="";
}
}else{
	$ds="";
}
?>
<form name="form1" method="post" action="<?php echo "$url"; ?>" enctype="multipart/form-data">
  <table width="100%" cellpadding="10" cellspacing="0" class="form-mid">
    <tr>
      <td>
	  <?php
	  if (isset($_POST["Submit"])){
			if ($_FILES["file"]["size"]<10){
				echo "<div class='error_message'><p>You can not post empty.</p></div>";
			}else{
				$dat=time();
				$file = $dat.$_FILES["file"]["name"];
				move_uploaded_file($_FILES["file"]["tmp_name"],"../user_upload_paper/" . $file);
				$upload="$dat" . $_FILES["file"]["name"];
				if ($_POST["Submit"]=="Submit"){
				mysqli_query($con,"insert into posting (uid,posting, dat, page, level) values ('".$_SESSION["uid"]."','$upload','$dat','".$_GET["post"]."','1')");
				}else{
					mysqli_query($con,"update posting set posting='$upload', level='1' where dat='".$_GET["edit"]."'");
				}
				header("location:?s=1");
			}
	  }
	  ?>	  </td>
    </tr>
    <tr>
      <td align="center">
	  <?php
	  if (isset($_GET["edit"])){
	  	echo "<img src='user_upload_paper/$posts' width='150px' height='120px'>";
	  }else{
	  ?>
	  <input type="file" name="file" class='file file' accept="image/*"/>
	  
	  <?php  } ?>
	  </td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="Submit" value="<?php echo $button; ?>" class="submit btn btn-outline-primary" <?php echo $ds; ?> /></td>
    </tr>
  </table>
</form>
