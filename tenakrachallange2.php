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
<link rel="canonical" href="http://www.prizebond.asia/">
<title>Prize bond akra,forcast,akra,vip akra challange</title>
<meta name="description" content="prizebond.asia is pakistan site provide all kind of Prize bond akra,forcast,akra,vip akra challange,vip tendola,pakistani bonds" />
<meta name="abstract" content="All about Prize bond draw in pakistan,Prize bond akra,forcast,akra,vip akra challange,vip tendola"/>
<meta http-equiv="content-type" content="en" />
<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="http://www.prizebondlucky.net"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="http://www.prizebondlucky.net"/>
<meta name="Copyright" content="2013"/>
<meta name="designer" content="http://www.prizebondlucky.net" />
<meta name="email" content="hamidinthecity@hotmail.com" />
<meta name="rating" content="General" />
<meta name="distribution" content="Global" />
<!-- metaTags http://www.prizebondlucky.net/ -->
<!-- Prize bond akra,forcast,akra,vip akra challange,vip tendola,pakistani bonds,prize bonds akra,vip akra,vip tendola,pungora -->

<meta property="fb:page_id" content="240734989375">
<link type="text/css" href="extra/styles.css" rel="stylesheet">
<link rel="icon" href="extra/favicon0.ico" type="image/x-icon">
<link rel="shortcut icon" href="extra/favicon0.ico" type="image/x-icon">
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery00.js"></script>
<script type="text/javascript" src="js/main0000.js"></script>
<link type="text/css" href="extra/jquery-u.css" rel="stylesheet">
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
			$targetpage="?pge";
			if (isset($_GET["user"])){
				$usr=user_data($_GET["user"]);
				$search="where page='tenakra' and uid='".$usr["uid"]."' and level='0'   order by dat desc";
			}else{
				$search="where page='tenakra' and level='0'  order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No Ten Akra found' title='No Ten Akra record found.'></div>";
			}
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

