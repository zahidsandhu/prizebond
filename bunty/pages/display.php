<form name="form1" method="post" action="">
  <?php
  if (isset($_POST["Submit"])){
  	$no=$_POST["textarea"];
	mysql_query("update setting  set display='$no'");
	header("location:?pg=display&s=1");
  }elseif($_GET["s"]){
  	echo "<h3>Data has been saved.</h3>";
  }
  ?>
  <table width="100%" border="1" cellpadding="10" cellspacing="0">
    <tr>
      <td width="18%">Detail</td>
      <td width="82%"><textarea name="textarea" cols="50" rows="3"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>
