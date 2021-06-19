<?php
ob_start();
session_start();
include "apps/config.php";
include "apps/functions.php";
if (isset($_SESSION["uid"])){
	$userData=user_data($_SESSION["uid"]);
}else{
	$userData=array();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<link rel="canonical" href="http://www.prizebond.asia/">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
<?php
 if (isset($_GET["list"])){
 		$list=explode("-",$_GET["list"]);
		$id=$list[count($list)-1];
		$result=mysql_fetch_array(mysql_query("select * from list where id='$id'"));
		echo $result["title"];
 }else{
 		echo "Prize bond list,Bond list,List bond,Prize bond result";
 }
?>
</title>
<meta name="description" content="Prizebondlucky.net is Pakistani site offer all kind of Prize bond list,draw list,saving prize bond,Prize bond result,Guess papers,prize bonds,Photo state papers " />
<meta name="abstract" content="All about Prize bond draw in pakistan,Prizebond list,Bond list,List bond, and much more"/>
<meta http-equiv="content-type" content="en" />
<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="http://www.prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="http://www.prizebondlucky.net"/>
<meta name="Copyright" content="2013"/>
<meta name="designer" content="http://www.prizebondlucky.net" />
<meta name="email" content="hamidinthecity@hotmail.com" />
<meta name="rating" content="General" />
<meta name="distribution" content="Global" />
<!-- metaTags http://www.prizebondlucky.net/ -->
<!-- Prizebond list,Bond list,List bond,Prize bond result,bonds,prizebond,draw prize bond,list of bonds,prize bond pakistan,pakistan prize bond,prize bond list,prize bond draw list,national prize bond,saving prize bond,bond results -->

<meta property="fb:page_id" content="240734989375">
<link type="text/css" href="extra/styles.css" rel="stylesheet">
<link rel="icon" href="extra/favicon0.ico" type="image/x-icon">
<link rel="shortcut icon" href="extra/favicon0.ico" type="image/x-icon">
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery00.js"></script>
<script type="text/javascript" src="js/main0000.js"></script>
<link type="text/css" href="extra/jquery-u.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-u.js"></script>
<link type="text/css" href="extra/webs.css" rel="stylesheet">


    </head>

<body itemscope itemtype="http://schema.org/WebPage" id="unique_body_id_bestsellers">
<a name="top"></a>
<div style="display: none; position: absolute;" id="altDiv"></div>

<table id="page">
    <tbody>
        <tr>
         <?php
		 include "template/header.php";
		 ?>   
	
<!-- Page body -->
  <tr>
    <td>

<table class="content">
	<tr>
	<td class="leftcol">
	<?php
	if (isset($_GET["list"])){
	$result=mysql_query("select * from setting");
	  $row=mysql_fetch_array($result);
	  $no=$row["no"];
	  echo "<h3>Latest Draw List</h3>
	  <div style='line-height:20px;margin-top:10px;margin-bottom:10px;'>
	  ";
	  $res=mysql_query("select * from list order by id desc limit $no");
	  while ($rw=mysql_fetch_array($res)){
		$title=$rw["title"];
		$link=$rw["link"]."-".$rw["id"];
		echo "
		<a href='?list=$link' style='text-decoration:none;'>$title</a><br>
		";
	  }
	  echo "</div>";
	
		$list=explode("-",$_GET["list"]);
		$id=$list[count($list)-1];
		$result=mysql_query("select * from list where id='$id'");
		$row=mysql_fetch_array($result);
		$no=explode("break",$row["numbers"]);
		echo "
		<table cellspcaing='0' width='100%' class='showlist'>
			<tr>
				<td class='cap'>
					<h2>Draw No of ".$row["draw"]." Prize Bond Held at ".$row["city"]."</h2>
					Dated on ".$row["dat"]."<br>
					1st Prize ".$no[1]."<br>
					".$no[0]."<br>
					2nd Prize Rs. ".$no[3]."<br>
					".$no[2]."<br>
					3rd Prize Rs.".$row["third"]."
				</td>
			</tr>
			<tr>
				<td style='word-spacing:10px;'>".$row["list"]."</td>
			</tr>
		</table>
		";
	}else{
	?>
        <div class='search_page'>
		<div id="sidebar-title" style="width:100%;margin-top:10px;margin-bottom:10px;">
                    <h2>Results (Search and see result with different option</h2>
  </div>
  <?php
  $result=mysql_query("select * from setting");
  $row=mysql_fetch_array($result);
  $no=$row["no"];
  echo "<h3>Latest Draw List</h3>
  <div style='line-height:20px;margin-top:10px;margin-bottom:10px;'>
  ";
  $res=mysql_query("select * from list order by id desc limit $no");
  while ($rw=mysql_fetch_array($res)){
  	$title=$rw["title"];
	$link=$rw["link"]."-".$rw["id"];
	echo "
	<a href='?list=$link' style='text-decoration:none;'>$title</a><br>
	";
  }
  echo "</div>";
  ?>
		<form method="post" action="" name="form1">
			<table width="100%" cellspacing="0">
			<tr>
				<td width="151">City Wise</td>
				<td width="215"><select name="list">
				 <option value="">Select Here</option>
				<?php
				$result=mysql_query("select distinct city from list order by id desc");
				while ($row=mysql_fetch_array($result)){
					echo "<option value='".$row["city"]."'>".$row["city"]."</option>";
				}
				?>
				  </select>
				</td>
				<td width="193"><input name="submit1" type="submit" value='Submit'/></td>
			</tr>
		</table>
		</form>
		<form method="post" action="" name="form2">
			<table width="100%" cellspacing="0">
			<tr>
				<td width="151">Bond Wise</td>
				<td width="215">
				<select name="list">
				<option value="">Select Here</option>
				<?php
				$result=mysql_query("select distinct draw from list order by id desc");
				while ($row=mysql_fetch_array($result)){
					echo "<option value='".$row["draw"]."'>".$row["draw"]."</option>";
				}
				?>
				  </select>				</td>
				<td width="193"><input name="submit2" type="submit" value='Submit'/></td>
			</tr>
		</table>
		</form>
		<form method="post" action="" name="form3">
			<table width="100%" cellspacing="0">
			<tr>
				<td width="151">Year Wise</td>
				<td width="215">
				<select name="list">
				<option value="">Select Here</option>
				<?php
				$result=mysql_query("select distinct year from list order by id desc");
				while ($row=mysql_fetch_array($result)){
					echo "<option value='".$row["year"]."'>".$row["year"]."</option>";
				}
				?>
				  </select>				</td>
				<td width="193"><input name="submit3" type="submit" value='Submit'/></td>
			</tr>
		</table>
		</form>
		<?php
		if (isset($_POST["submit1"]) or isset($_POST["submit2"]) or isset($_POST["submit3"])){
			$list=$_POST["list"];
			$result=mysql_query("select * from list where city='$list' or draw='$list' or year='$list' order by id desc");
			echo "
			<table cellspacing='0' class='list'>
			<tr>
				<th>Date</th>
				<th>City</th>
				<th>Bond</th>
				<th>First</th>
				<th>Second</th>
				<th>Third</th>
			</tr>
			";
			while ($row=mysql_fetch_array($result)){
				$number=explode("break",$row["numbers"]);
				$link=$row["link"]."-".$row["id"];
				echo "
				<tr>
					<td valign='middle'>".$row["dat"]."</td>
					<td valign='middle'>".$row["city"]."</td>
					<td valign='middle'>".$row["draw"]."</td>
					<td valign='middle'>".$number[0]."</td>
					<td valign='middle'>".$number[2]."</td>
					<td valign='middle'><a href='?list=$link'><img src='extra/third.jpeg' width='25px' align='absmiddle'></a></td>
				</tr>
				";
			}
			echo "</table>";
		}
		?>
  		</div>
<?php
}
?>
	</td>
		<?php
		include "template/right.php";
		?>
		</tr>
</table>

<font size="2"><h1>Prize bond list</h1><br><br><br><br>

Hence the millionaires are present all over the world, and finally so many of them have not become rich as being because of the ancestors. However, many of them have put the effort and try with their luck from the involvement of the lucky draws too. They have added upon with the change in their whole lifestyle all through using checking their success as by the side of putting into the investment savings into the timeline of the legal things. 
<br><br>
<h2>What to know about prize bond?</h2><br>

Hence the concept of the <b>Prize bond list in</b> Pakistan is mentioned out to be the legal and many accurate, authentic ways of Government upholding the scheme. It is arranging upon with the chance to the people regarding, generally, taking part over some of the certain forms of the terms, and hence it is also checking on with the category of luck to bring out with some change. This page will be giving you the complete set of details and much-needed information as related with 25000 rupees. We will be updating with all the essential information as in respect with the current list all along with the number of top three winners.  It is to be mentioned that the denomination of Rs. 25000, hence the National Savings of Pakistan (CDNS), the winning amount of 1st prize is almost Rs. 50,000,000 while the three titles of Rs. 15,000,000 as to be each has been reserved for the 2nd position. Further, there is also the placement of the 3rd prizes of Rs. 312,000 that will be awarded to each of 1,696 winning away with the numbers as well. You will be getting the complete sit down the list as related with the Rs. 25000 as soon as it is announced officially by the bench of State Bank of Pakistan.
<br><br>
<h3>Check out Prize bond list right here:</h3><br><br>


<br><br>
Right into this web page, we will be giving you with the information related to the list as to be all draws and results previously announced and going to be published this month. This list is set to be the second largest amount just as after the 40000 amount has been kept away with so many of the premium winning prizes as well. 

<br><br>This scheme has been put together with the high worth, and the awards are mentioned out to be greatly attractive also you should be much aware as about the fact that the category of the winning amount of this can change your life in days. The first prize of 25000 prize bond is mentioned to be Rs.50,000,000/- (Five crores). This is the single prize, and just one person can achieve it. Second prize will have the amount of Rs.15,000,000/- (15 Million Rupee).

<br><br> The third <b>prize bond list</b> amount is set in the range of Rs. 312, 000/ (Three Lac & Twelve thousand) that will that will be given away to around 1696 lucky winners. Just as according to the schedule the worth of  25000 rupees results hence come out with the access of the 7500 rupees draws that usually comes out in February, as well as May, August, and November. This finally means that in one single year, there are almost four draws that are to be declared for this. 

Right from here you can search and also download all previous, and recent coming's list of <a href="https://prizebondlucky.net"><b>Prize bond result</b></a> online. So what are you waiting for? Check out the details of a list of <a href="https://prizebondlucky.net">prize bond</a> and <a href="https://prizebondlucky.net/guesspapers.php">guess papers</a> right now!
</font>

	</td>
</tr>
<!--// Page body -->

<!-- Page footer -->
	<tr>
	<?php include "template/footer.php"; ?>
	</tr>
<!--// Page footer -->

</tbody>
</table>


</body>
</html>

