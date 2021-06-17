<form action="" method="post" enctype="multipart/form-data">
<?php
 if (isset($_POST["Submit"])){
	mysql_query("update hint set no='".$_POST["no"]."',open='".$_POST["open"]."',close='".$_POST["close"]."',center='".$_POST["center"]."'");
	//header("location:?pg=hint&s=1");
	header('Location: '.$_SERVER['PHP_SELF']);  

 }elseif(isset($_GET["s"])){
 	echo "<h3>Data has been saved</h3>";
 }
?>
  <table width="100%" border="1" cellpadding="10" cellspacing="0">
    <tr>
      <td width="23%">Draw No </td>
      <td width="77%"><input name="no" type="text" id="no"></td>
    </tr>
    <tr>
      <td>Open</td>
      <td><input name="open" type="text" id="open"></td>
    </tr>
    <tr>
      <td>Close</td>
      <td><input name="close" type="text" id="close"></td>
    </tr>
    <tr>
      <td>Center</td>
      <td><input name="center" type="text" id="center"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>