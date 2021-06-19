<?php
ob_start();
session_start();
include "apps/config.php";
include "apps/functions.php";
if (isset($_SESSION["uid"])){
	$userData=user_data($_SESSION["uid"]);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">

<meta https-equiv="Content-Type" content="text/html;charset=UTF-8">
<style type="text/css">
<!--
.Estilo1 {color: #0069D2}
-->
</style>
<head>
<!-- Common Header Start-->
<!-- ============================================================================ -->
<title>Prize bond Winning Papers, Prize bond guess Papers, Photo State Papers</title>
<meta name="description" content="Prizebondlucky.net is Pakistan website Provides all kind of Pakistan papers, Prize bond winning papers, Prize bond guess papers, winning bonds,lottery tips." />
<meta name="keywords" content="Prize bond winning papers, Prize bond guess papers, winning bonds, prize bond numbers, prize bond baba, prize bond lucky, lottery tips, finance." />
<meta name="abstract" content="Prize bond Winning Papers, Prize bond guess Papers, Photo State Papers"/>
<meta https-equiv="content-type" content="en" />
<meta name="revisit-after" content="1 days"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Generator" content="https://www.prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="https://www.prizebondlucky.net"/>
<meta name="Copyright" content="2017"/>
<meta name="designer" content="https://www.prizebondlucky.net" />
<meta name="email" content="prizebondlucky@gmail.com" />
<meta name="rating" content="General" />
<meta name="distribution" content="Global" />
<!-- metaTags https://www.prizebondlucky.net/ -->
<!-- Prize bond winning papers,Prize bond paper,winning bonds,prize bond numbers,prize bond baba,prize bond luckyPrize bond winning papers, Prize bond guess papers, winning bonds, prize bond numbers, prize bond baba, prize bond lucky, lottery tips, finance. -->

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
        <a href="https://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode" onclick="_gaq.push(['a._trackPageview', '/out/links/upgradeIE6']);"><img src = "https://t.tmimgcdn.com/themes/default/images/ie6-countdown-bg.png"  alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."    /></a>
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
				$search="where page='winning' and uid='".$usr["uid"]."' and level='0'  order by dat desc";
			}else{
				$search="where page='winning' and level='0'  order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No winning papers found' title='No winning paper record found.'></div>";
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
					<div class='morepost'><a href='?user=".$user["username"]."' title='".$user["username"]." More Winning Papers'>".$user["username"]." More Winning Papers</a></div>
					<img src='user_upload_paper/$posting' width='600px' height='600px' alt='Winning paper' title='Winning p paper'>"; ?>
					<br /><br />
					<center><center>
					

					<br /><br />					</td>
				</tr>
			 </table>
			
			   <?php	
			}
			echo "<center>$pagination</center>";
			?>
		     <h1 class="Estilo1">Prize bond winning papers</h1>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <span class="Estilo1">Popular Searches:</span> <a href="https://prizebondlucky.net/photostatepapers.php" target="_blank" class="Estilo1">prize bond winning papers </a><span class="Estilo1">,prize bond game,prize bond</span> 
	        <h3 class="Estilo1">Photo state papers</h3>
	        <span class="Estilo1">,prize bond finance,prize bond discussion,prize bond numbers,prize bond akra,prize bond guess paper,<strong><em>prize bond winning papers </em></strong>,            </span>
	        <h2 class="Estilo1">Prize bond guess papers</h2>
            <p>&nbsp; </p></td>
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

