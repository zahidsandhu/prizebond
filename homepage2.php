<?php
ob_start();
session_start();
include "apps/config.php";
include "apps/functions.php";
if (isset($_SESSION["uid"])){
	$userData=user_data($_SESSION["uid"]);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<!-- Common Header Start-->
<!-- ============================================================================ -->
<title>Prize bond Our Veluable Members Home Pages</title>

<meta property="fb:page_id" content="240734989375">
<meta name="description" content="Soon">
<link type="text/css" href="extra/styles.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="extra/favicon0.ico" type="image/x-icon">
<link rel="shortcut icon" href="extra/favicon0.ico" type="image/x-icon">
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery00.js"></script>
<script type="text/javascript" src="js/main0000.js"></script>
<link type="text/css" href="extra/jquery-u.css" rel="stylesheet"/>
<script type="text/javascript" src="js/jquery-u.js"></script>
<link rel="stylesheet" type="text/css" href="extra/webs.css" />
<script type="text/javascript" src="editor/jscripts/tiny_mce/tiny_mce.js"></script>

    </head>

<body id="unique_body_id_bestsellers">
<a name="top"></a>
<div style="display: none; position: absolute;" id="altDiv"></div>

	<!--[if lt IE 7]>
    <div style='clear: both; height: 30px; position: absolute; top:0; text-align:center; width:100%;'>
        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode" onclick="_gaq.push(['a._trackPageview', '/out/links/upgradeIE6']);"><img src = "http://t.tmimgcdn.com/themes/default/images/ie6-countdown-bg.png"  alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."    /></a>
    </div>
<![endif]-->

<table id="page">
    <tbody>
        <tr>
         <?php
		 include "template/header.php";
		 ?>   
	
<!-- Page body -->
  <tr>
    <td width="1000px" class="pagewidth-td" align="center">
	<table width="800px" class="pagewidth-tbl" cellspacing="0" align="center">
		<tr> 
		<td> 
			<?php
			
			$tbl_name="posting";
			$limit=3;
			$targetpage="?user=".$_GET["user"]."&pge";
			if (isset($_GET["user"])){
				$usr=user_data($_GET["user"]);
				$search="where page='homepage' and uid='".$usr["uid"]."' and level='0'  order by dat desc";
			}else{
				$search="where page='homepage' and level='0'   order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No homepage found' title='No homepage record found.'></div>";
			}
			echo "<div><h1 style='background-color:#fff;padding:5px;text-align:center;display:block;width:99%;margin-left:0px;'>".$usr["username"]."'s homepage</h1></div>";
			while ($row=mysql_fetch_array($result)){
				$user=user_data($row["uid"]);
				$posting=$row["posting"];
				$photo=$user["photo"];
				if ($photo==""){
					$photo="extra/default.png";
				}else{
					$photo="user_photo/$photo";
				}
				$day=date("d",$row["dat"]);
				$month=date("F",$row["dat"]);
				$time=date("h:i:s A",$row["dat"]-3600);
			 ?>
			 <table width="800" class="pagewidth-tbl" align="center">
			 	<tr>
					<td width="150" valign="top" class="users"><?php echo "
					<div class='name'><img src='extra/user.png' align='absmiddle' title='".$user["username"]."' alt='".$user["username"]." icon'/>".$user["username"]."</div>
					<div class='photo'><img src='$photo' alt='".$user["username"]." photo' title='".$user["username"]."'></div>
					<div class='date'><span class='month'>$month</span><span class='day'>$day</span></div>
					<div class='time'><img src='extra/time.png' align='absmiddle' alt='$time' title='$time'/>$time</div>"; ?></td>
					<td width="637" valign="top" class="posting"><?php echo "
					$posting"; ?>
					<br /><br />
				<center>

					<br /><br />
					</td>
				</tr>
			 </table>
			 <?php	
			}
			echo "<center>$pagination</center>";
			?>
		</td>
		</tr>
	</table>

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

