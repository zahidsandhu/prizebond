<form action="" method="post" enctype="multipart/form-data">
<?php
 if (isset($_POST["Submit"])){
	mysql_query("insert itno thai (dat, first, three, down)values('".$_POST["no"]."','".$_POST["open"]."','".$_POST["close"]."','".$_POST["center"]."')");
	header("location:?pg=thai&s=1");
 }elseif(isset($_GET["s"])){
 	echo "<h3>Data has been saved</h3>";
 }
?>
  <table width="100%" border="1" cellpadding="10" cellspacing="0">
    <tr>
      <td width="23%">Date</td>
      <td width="77%"><input name="no" type="text" id="no"></td>
    </tr>
    <tr>
      <td>First</td>
      <td><input name="open" type="text" id="open"></td>
    </tr>
    <tr>
      <td>Three Numbers </td>
      <td><input name="close" type="text" id="close"></td>
    </tr>
    <tr>
      <td>Down</td>
      <td><input name="center" type="text" id="center"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>