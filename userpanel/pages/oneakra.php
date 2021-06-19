<?php
if (isset($_GET["edit"])){
	$result=$mysqli->query("select * from posting where dat='".$_GET["edit"]."'");
	$row=mysqli_fetch_array($result);
	$posts=addslashes($row["posting"]);
	$button="Update";
	$url="?post=".$_GET["post"]."&edit=".$_GET["edit"];
}else{
	$posts="";
	$button="Submit";
	$url="?post=".$_GET["post"];
}
?>
<form name="form1" method="post" action="<?php echo $url; ?>">
<center><br><br>
<?php
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


	  if (isset($_POST["Submit"])){
	  		$posting=$_POST["akra"];
			if (strip_tags($posting)==""){
				echo "<div class='error_message'><p>You can not post empty.</p></div>";
			}else{
				$dat=time();
				if ($_POST["Submit"]=="Submit"){
				   
				$check_ins_query= mysqli_query($con,"insert into posting (uid,posting,level, dat, page) values ('".$_SESSION["uid"]."','$posting','1','$dat','".$_GET["post"]."')");
				
				}else{
					mysqli_query("update posting set posting='$posting', level='0' where dat='".$_GET["edit"]."'");
				}
				header("location:?s=1");
			}
	  }
?>
<table width="497" align="center" cellspacing="0" bgcolor="#FFFFFF">
	<tr>
		<td width="157" style="padding:20px;">Select One Akra </td>
		<td width="331"><select name="akra" style="width:150px;height:25px;font-size:18px;border:1px solid #ccc;">
		    <option>Select number</option>
		<?php
		for ($a=1;$a<=9; $a++){
			if ($posts==$a){
				$sl="selected='selected'";
			}else{
				$sl="";
			}
			echo "<option value='0$a' $sl>0$a</option>";
		}
		for ($a=10;$a<=100; $a++){
			if ($posts==$a){
				$sl="selected='selected'";
			}else{
				$sl="";
			}
			echo "<option value='$a' $sl>$a</option>";
		}
		?>
		</select></td>
	</tr>
	<tr>
	  <td colspan="2" align="center" style="padding:20px;"><input type="submit" name="Submit" value="<?php echo $button; ?>" class="submit" <?php  echo $ds; ?>></td>
    </tr>
</table>
</center>
</form>
