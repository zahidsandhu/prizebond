<a href="?pg=result&new=1">New Result</a>
<?php
if (isset($_GET["new"]) or isset($_GET["edit"])){

?>
<form action="" method="post" enctype="multipart/form-data">
<?php
if (isset($_POST["Submit"]))
{
$title=$_POST["title"];
include "pages/permlinks.php";
$link=links($_POST["title"]);
$city=$_POST["city"];
$draw=$_POST["draw"];
$third=$_POST["third"];
$date=$_POST["day"]."-".date("F-Y");
$drawno=$_POST["drawno"];
$list=$_POST["list"];
$numbers=$_POST["f"]."break".$_POST["f_a"]."break".$_POST["s"]."break".$_POST["s_a"];
$year=date("Y");
if ($_POST["Submit"]=="Save"){
 mysql_query("insert into list(title, link, city, draw, third,drawno, numbers, dat,list, year)values('$title','$link','$city','$draw','$third','$drawno','$numbers','$date','$list','$year')");
 }else{
 	mysql_query("update list set title='$title', link='$link', city='$city', draw='$draw', third='$third', drawno='$drawno', numbers='$numbers',dat='$date',list='$list', year='$year' where id='".$_GET["edit"]."'");
 }
 header("location:?pg=result&s=1");
 
}elseif(isset($_GET["s"])){
 echo "Data has been saved successfully.";
}
if (isset($_GET["edit"])){
	$result=mysql_query("select * from list where id='".$_GET["edit"]."'");
	$row=mysql_fetch_array($result);
	$title=$row["title"];
	$city=$row["city"];
	$draw=$row["draw"];
	$third=$row["third"];
	$drawno=$row["drawno"];
	$row["numbers"];
	$number=explode("break",$row["numbers"]);
	$n1=$number[0];
	$n2=$number[1];
	$n3=$number[2];
	$n4=$number[3];
	$day=explode("-",$row["dat"]);
	$day=$day[0];
	$list=$row["list"];
}else{
	$title="";
	$city="";
	$draw="";
	$third="";
	$drawno="";
	$n1="";
	$n2="";
	$n3="";
	$n14="";
	$day="";
	$list="";
}
?>
  <table width="100%" border="1" cellpadding="10" cellspacing="0">
    <tr>
      <td width="23%">Page Title </td>
      <td width="77%"><input name="title" type="text" id="title" value="<?php echo $title; ?>"></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" type="text" id="city" value="<?php echo $city; ?>"></td>
    </tr>
    <tr>
      <td>Draw</td>
      <td><input name="draw" type="text" id="draw" value="<?php echo $draw; ?>"></td>
    </tr>
    <tr>
      <td>Third Amont </td>
      <td><input name="third" type="text" id="third" value="<?php echo $third; ?>"></td>
    </tr>
    <tr>
      <td>Draw No </td>
      <td><input name="drawno" type="text" id="drawno" value="<?php echo $drawno; ?>"></td>
    </tr>
    <tr>
      <td>Numbers</td>
      <td>First  
              <input name="f" type="text" id="f" size="10" value="<?php echo $n1; ?>">
            Amount
            <input name="f_a" type="text" id="f_a" size="8" value="<?php echo $n2; ?>">
            Second  
            <input name="s" type="text" id="s" size="10" value="<?php echo $n3; ?>"> 
            Amount
            <input name="s_a" type="text" id="s_a" size="8" value="<?php echo $n4; ?>"></td>
    </tr>
    <tr>
      <td>Day</td>
      <td><input name="day" type="text" id="day" value="<?php echo $day; ?>"></td>
    </tr>
    <tr>
      <td valign="top">List</td>
      <td><textarea name="list" cols="70" rows="10" id="list"><?php echo $list; ?></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
	  <?php
	  if (isset($_GET["edit"])){
	  	$value="Update";
	  }else{
	  	$value="Save";
	  }
	  ?>
	  <input type="submit" name="Submit" value="<?php echo $value; ?>"></td>
    </tr>
  </table>
</form>
<?php
}else{
if (isset($_GET["del"])){
	mysql_query("delete from list where id='".$_GET["del"]."'");
	header("location:?pg=result&d=1");
}
if ($_GET["d"]){
	echo "<br>Data has been deleted successfully.<bR><br>";
}
	 $tbl_name="list";
 $limit=20;
 $targetpage="?pg=result&page";
 $search="order by id desc";
 echo "<table width='100%'>";
 include "../pages/pagination.php";
 while ($row=mysql_fetch_array($result))
 {
 	$title=$row["title"];
	$id=$row["id"];
	echo "
	<tr class='edit_delete'>
		<td width='90%'>$title</td>
		<td>
		<a href='?pg=result&edit=$id'>Edit</a> | 
		<a href='?pg=result&del=$id'>Delete</a>
		</td>
	</tr>";
 }
 echo "</table>";
}
?>