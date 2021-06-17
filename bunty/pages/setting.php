<form name="form1" method="post" action="">
  <?php
  if (isset($_POST["Submit"])){
  	$no=$_POST["no"];
	if (!is_numeric($no)){
		$no=1;
	}
	mysql_query("update setting  set no='$no'");
	header("location:?pg=setting&s=1");
  }elseif($_GET["s"]){
  	echo "<h3>Data has been saved.</h3>";
  }
  ?>
  <table width="100%" border="1" cellpadding="10" cellspacing="0">
    <tr>
      <td width="18%">Draw No </td>
      <td width="82%"><input type="text" name="no"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>
