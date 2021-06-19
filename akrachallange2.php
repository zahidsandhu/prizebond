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
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- Common Header Start-->
<!-- ============================================================================ -->

<title>Akra Challange,List prize bond,pakistan prize bond</title>
<meta name="description" content="prizebond.asia is pakistan site provide all kind of akra challange,list prize bond,list of prize bond,one akra challange,pakistan akra challange" />
<meta name="abstract" content="All about Prize bond draw in pakistan,akra challange, much more"/>
<meta https-equiv="content-type" content="en" />
<meta name="revisit-after" content="1 days"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Generator" content="https://www.prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="https://www.prizebondlucky.net"/>
<meta name="Copyright" content="2013"/>
<meta name="designer" content="https://www.prizebondlucky.net" />
<meta name="email" content="hamidinthecity@hotmail.com" />
<meta name="rating" content="General" />
<meta name="distribution" content="Global" />
<!-- metaTags https://www.prizebondlucky.net/ -->
<!-- one akra challange,prize bond akra,vip akra,list prize bond,list of prize bond,pakistan akra challange,prize bond challange -->

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
				$search="select distinct posting from $tbl_name where page='oneakra' and uid='".$usr["uid"]."' and level='0'   order by dat desc";
			}else{
				$search="select distinct posting from $tbl_name where page='oneakra' and level='0'  order by dat desc";
			}
			$resul=mysql_query($search);
			$total_pages=mysql_num_rows($resul);
			$result=mysql_query($search);
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No One Akra found' title='No One Akra record found.'></div>";
			}
			
			if (isset($_GET["list"])){
				echo "<div class='listvote'>
				<h1>List of members who have Akra Challenge For ".$_GET["list"]."</h1>
				<center>
				<table cellspacing='0'>
					<tr>
						<td width='100px' align='center' style='padding:5px;background:#008FBF;color:#fff;'>Photo</td>
						<td width='300px' align='center' style='padding:5px;background:#008FBF;color:#fff;'>Username</td>
						<td width='50px'  align='center' style='padding:5px;background:#008FBF;color:#fff;'>Choice</td>
					</tr>";
				$res=mysql_query("select * from posting where posting='".$_GET["list"]."'");
				while ($rw=mysql_fetch_array($res)){
					$user=user_data($rw["uid"]);
					$photo=$user["photo"];
					$username=$user["username"];
					if ($photo==""){
					$photo="extra/default.png";
					}else{
						$photo="user_photo/$photo";
					}
					echo "<tr>
						<td align='center' style='padding:5px;background:#fff;'><img src='$photo' width='50px' alt='$username' title='$username'></td>
						<td align='center' style='padding:5px;background:#fff;'>$username</td>
						<td align='center' style='padding:5px;background:#fff;'>".$_GET["list"]."</td>
					</tr>";
				}
				echo "</table></center>
				</div>
				";
			}else{
			echo "<table=\"table table-hover table-bordered\">";
				while ($row=mysql_fetch_array($result)){
					$user=user_data($row["uid"]);
					$posting=$row["posting"];
					$count=mysql_num_rows(mysql_query("select * from posting where posting ='$posting'"));
					$photo=$user["photo"];
					echo "<li>
					<div class='no'>$posting</div>
					<div class='vote'>Number of votes ( $count )</div>
					<div class='desp'><a href='?list=$posting'>List of members who have voted for this number</a></div>
					</li>";
				}
			echo "</table>";
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

