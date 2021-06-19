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
<title>Thai papers,Thailand papers,Vip thailand,Golden papers</title>
<meta name="description" content="Thailand lottery is Saudia Arabia Lottery provide all kind of Thai papers,Thailand papers,Vip thailand,Golden papers,thai vip papers and much more" />
<meta name="keywords" content="Thai papers,Thailand papers,Vip thailand,Golden papers,thai vip papers" />
<meta name="abstract" content="All about Thailand lottery saudia arabia Thai papers,Thailand papers,Vip thailand,Golden papers,thai vip papersand much more"/>
<meta http-equiv="content-type" content="en" />
<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="http://www.prizebond.asia"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="http://www.prizebondlucky.com"/>
<meta name="Copyright" content="2013"/>
<meta name="designer" content="http://www.prizebond.asia" />
<meta name="email" content="hamidinthecity@hotmail.com" />
<meta name="rating" content="General" />
<meta name="distribution" content="Global" />
<!-- metaTags http://www.prizebond.asia/ -->
<!-- Thai papers,Thailand papers,Vip thailand,Golden papers,thai vip papers -->

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
					echo "
					<center><a href='?show=all' style='color:#fff;display:block;background-color:#666;padding:10px;width:120px;font-size:14px;border-radius:7px;margin-top:10px;margin-bottom:10px;text-decoration:none;'>Previous Papres</a>
					</center>
					";
					if (isset($_GET["show"])){
						$result=mysql_query("select * from posting where page='thaivip' ");
						echo "<table width='100%' bgcolor='#fff'>
						<tr>
							<td width='70%' align='left' style='padding:10px;font-weight:bold;font-size:14px;'>Date</td>
							<td style='padding:10px;font-weight:bold;font-size:14px;'>Action</td>
						</tr>
						";
						while ($row=mysql_fetch_array($result)){
							echo "
							<tr>
								<td width='70%' align='left' style='padding:10px;font-size:14px;'>".date("d F Y",$row["dat"])."</td>
								<td style='padding:10px;font-size:14px;'><a href='?paper=".$row["dat"]."'>Show</a></td>
							</tr>
							";
						}
						echo "</table>";
					}elseif(isset($_GET["paper"])){
							echo "<table>";
							$result= mysql_query("select * from posting where page='thaivip'    order by dat desc");
							while ($row=mysql_fetch_array($result)){
								echo "
								<tr>
								<td>
								<img src='user_upload_paper/".$row["posting"]."' width='600' alt='Thailand Lottery VIP Papers' title='Thailand Lottery VIP Papers'>
								</td>
								</tr>
								";
							}
							echo "</table>";
					}else{
							$search= mysql_query("select * from posting where page='thaivip'    order by dat desc limit 2");
						$total_pages=mysql_num_rows($search);
						if ($total_pages==0){
							echo "<div class='norecord'>
							<img src='extra/no-record-found.jpg' alt='No vip found' title='No vip record found.'></div>";
						}else{
							echo "<table>";
							$result= mysql_query("select * from posting where page='thaivip'    order by dat desc");
							while ($row=mysql_fetch_array($result)){
								echo "
								<tr>
								<td>
								<img src='user_upload_paper/".$row["posting"]."' width='600'>
								</td>
								</tr>
								";
							}
							echo "</table>";
					}
				}	 
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

