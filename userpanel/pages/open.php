<?php
if (isset($_GET["edit"])){
	$result=mysqli_query("select * from posting where dat='".$_GET["edit"]."'");
	$row=mysqli_fetch_array($result);
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
				mysqli_query($con,"insert into posting (uid,f,s,level, dat, page) values ('".$_SESSION["uid"]."','$f','$s','1','$dat','".$_GET["post"]."')");
				}else{
					mysqli_query("update posting set f='$f',s='$s', level='0' where dat='".$_GET["edit"]."'");
				}
				header("location:?s=1");
	  }
?>
<div class="row">
                        <div class="col-md-6 mx-auto">
                          <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Select First Figure</label>
                            <div class="col-sm-6">
                              <select name="one" id="one" class="form-control">
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
		</select>
                            </div>							
                          </div>
                        
                          <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Select Second Figure</label>
                            <div class="col-sm-6">
                              <select name="second" id="second" class="form-control">
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
		</select>
                            </div>							
                          </div>
						  <input type="submit" name="Submit" value="<?php echo $button; ?>" class="submit btn btn-primary w-100" <?php  echo $ds; ?>>
                        </div>                        
                      </div>
</center>
</form>
