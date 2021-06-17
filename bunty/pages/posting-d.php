<?php
if(isset($_GET["page"])&&$_GET["page"]<>""){
$chk=array("guesspaper","photostate","winning","thailandpaper","thailandtips","vip");
if (in_array($_GET["page"],$chk)){
	$result=mysql_query("select * from posting where page='".$_GET["page"]."'");
	while ($row=mysql_fetch_array($result)){
		unlink ("../user_upload_paper/".$row["posting"]);
	}
}
mysql_query("delete from posting where page='".$_GET["page"]."'");
header("location:?pg=posting-d");
}
?>
<table width="100%" border="1" cellpadding="10" cellspacing="0">
  <tr>
    <td width="23%"><strong>Page</strong></td>
    <td width="77%"><strong>Action</strong></td>
  </tr>
  <tr>
    <td>Suggestion</td>
    <td><a href="?pg=posting-d&page=suggestion">Delete</a> &nbsp;&nbsp;&nbsp;( <?php echo mysql_num_rows(mysql_query("select * from posting where page='suggestion'")); ?> )</td>
  </tr>
  <tr>
    <td>Guess Paper </td>
    <td><a href="?pg=posting-d&page=guesspaper">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysql_num_rows(mysql_query("select * from posting where page='guesspaper'")); ?> )</td>
  </tr>
  <tr>
    <td>Photo State Paper </td>
    <td><a href="?pg=posting-d&page=photostate">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysql_num_rows(mysql_query("select * from posting where page='photostate'")); ?> )</td>
  </tr>
  <tr>
    <td>Winning Paper </td>
    <td><a href="?pg=posting-d&page=winning">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysql_num_rows(mysql_query("select * from posting where page='winning'")); ?> )</td>
  </tr>
  <tr>
    <td>Ten Akra Challange </td>
    <td><a href="?pg=posting-d&page=tenakra">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysql_num_rows(mysql_query("select * from posting where page='tenakra'")); ?> )</td>
  </tr>
  <tr>
    <td>One Akra Challange </td>
    <td><a href="?pg=posting-d&page=oneakra">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysql_num_rows(mysql_query("select * from posting where page='oneakra'")); ?> )</td>
  </tr>
  <tr>
    <td>Open Challange </td>
    <td><a href="?pg=posting-d&page=open">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysql_num_rows(mysql_query("select * from posting where page='open'")); ?> )</td>
  </tr>
  <tr>
    <td>Vip Papers </td>
    <td><a href="?pg=posting-d&page=vip">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysql_num_rows(mysql_query("select * from posting where page='vip'")); ?> )</td>
  </tr>
  <tr>
    <td>Thailand Lottery Tips </td>
    <td><a href="?pg=posting-d&page=thailandtips">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysql_num_rows(mysql_query("select * from posting where page='thailandtips'")); ?> )</td>
  </tr>
  <tr>
    <td>Thailand Lottery Paper </td>
    <td><a href="?pg=posting-d&page=thailandpaper">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysql_num_rows(mysql_query("select * from posting where page='thailandpaper'")); ?> )</td>
  </tr>
  <tr>
    <td>Joo Lottery Tips </td>
    <td><a href="?pg=posting-d&amp;page=joolottery">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysql_num_rows(mysql_query("select * from posting where page='joolottery'")); ?> )</td>
  </tr>
  <tr>
    <td>Thailand VIP Paper </td>
    <td><a href="?pg=posting-d&amp;page=thaivip">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysql_num_rows(mysql_query("select * from posting where page='thaivip'")); ?> )</td>
  </tr>
  <tr>
    <td>Final Game </td>
    <td><a href="?pg=posting-d&page=finalgame">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysql_num_rows(mysql_query("select * from posting where page='finalgame'")); ?> )</td>
  </tr>
</table>
