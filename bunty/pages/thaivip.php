<form action="" method="post" enctype="multipart/form-data">
<?php
 if (isset($_POST["Submit"])){
 	if ($_FILES["file"]["size"]<10){
		echo "Please Uplaod valid paper";
	}else{
		$dat=time();
				move_uploaded_file($_FILES["file"]["tmp_name"],"../user_upload_paper/$dat" . $_FILES["file"]["name"]);
				$upload="$dat" . $_FILES["file"]["name"];
				mysql_query("insert into posting (uid,posting, dat, page, level) values ('admin','$upload','$dat','thaivip','1')");
				header("location:?pg=vip&s=1");
	}
 }elseif(isset($_GET["s"])){
 	echo "<h3>Paper has been uploaded</h3>";
 }
?>
  <table width="100%" border="1" cellpadding="10" cellspacing="0">
    <tr>
      <td width="23%">Upload Paper </td>
      <td width="77%"><input type="file" name="file"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>