<?php
if (isset($_GET["edit"])){
	$result=mysql_query("select * from posting where dat='".$_GET["edit"]."'");
	$row=mysql_fetch_array($result);
	$one=$row["f"];
	$second=$row["s"];
	$button="Update";
	$url="?post=".$_GET["post"]."&edit=".$_GET["edit"];
}else{
	$one="";
	$second="";
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
	  		$f=$_POST["one"];
			$s=$_POST["second"];
				$dat=time();
				if ($_POST["Submit"]=="Submit"){
				mysql_query("insert into posting (uid,f,s,level, dat, page) values ('".$_SESSION["uid"]."','$f','$s','1','$dat','".$_GET["post"]."')");
				}else{
					mysql_query("update posting set f='$f',s='$s', level='0' where dat='".$_GET["edit"]."'");
				}
				header("location:?s=1");
	  }
?>
<table width="497" align="center" cellspacing="0" bgcolor="#FFFFFF">
	<tr>
		<td width="232" style="padding:20px;">Select First Figure </td>
		<td width="259"><select name="one" id="one" style="width:150px;height:25px;font-size:18px;border:1px solid #ccc;">
		<?php
		for ($a=1;$a<=9; $a++){
			if ($one==$a){
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
		<td width="232" style="padding:20px;">Select Second Figure </td>
		<td width="259"><select name="second" id="second" style="width:150px;height:25px;font-size:18px;border:1px solid #ccc;">
		<?php
		for ($a=1;$a<=9; $a++){
			if ($second==$a){
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
