<?php
ob_start();
session_start();
include "apps/config.php";
include "apps/functions.php";
if (isset($_SESSION["uid"])){
	$userData=user_data($_SESSION["uid"]);
}else{
	header("location:./");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<!-- Common Header Start-->
<!-- ============================================================================ -->
<link rel="canonical" href="http://www.prizebond.in/">
<title>Prizebond</title>

<meta property="fb:page_id" content="240734989375">
<meta name="description" content="Soon">
<link type="text/css" href="extra/styles.css" rel="stylesheet">
<link rel="icon" href="extra/favicon0.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="extra/favicon0.ico" type="image/x-icon">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery00.js"></script>
<script type="text/javascript" src="js/main0000.js"></script>
<link type="text/css" href="extra/jquery-u.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-u.js"></script>
<script type="text/javascript" src="editor/jscripts/tiny_mce/tiny_mce.js"></script>
<link type="text/css" href="extra/webs.css" rel="stylesheet">
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
    <td>
	<table width="100%" cellspacing="0">
		<tr> 
		<td width="25%" class="full_menu" valign="top"> 
			<ul class='panel_menu'>
				<?php  if ($userData["level"]=="1" or $userData["level"]=="3"){ ?>
				<li class='caption' style="cursor:pointer;" onclick="window.location='userpanel.php'">Home</li>
				<li class='caption Prizebond-toggle'>Prizebond Post</li>
				<div class="Prizebond-Post-hide">
    				<li><a href="?post=homepage">Homepage</a></li>
    			    <li><a href="?post=suggestion">Suggestion</a></li>
    			    <li><a href="?post=formula">Formula</a></li>
    		        <li><a href="?post=finalgame">Final Game</a> </li>
    			    <li><a href="?post=tenakra">Ten Akra Challange</a></li>
    			    <li><a href="?post=oneakra">One Akra Challange</a></li>
    			    <li><a href="?post=open">Open Challange</a></li>
    			</div>    
			    <li class='caption Prizebond-toggle'>Prizebond Papers</li>
			    <div class="Prizebond-Papers-hide">
				    <?php  if ($userData["vip"]!=0){ ?>
				
    				<li><a href="vippapers.php">VIP Papers</a></li>
    				<?php  } ?>
    			    <li><a href="?post=guesspaper">Guess Papers</a></li>
    			    <li><a href="?post=photostate">Photo State Papers</a></li>
    			    <li><a href="?post=winning">Winning Papers</a></li>
				</div>
				<?php  }if ($userData["level"]=="2" or $userData["level"]=="3"){ ?>
			    <li class='caption Prizebond-toggle'>Thailand Post </li>
			    <div class="Thailand-Post-hide">
    			    <li><a href="?post=thailandpaper">Thailand Papers</a></li>
    			    <li><a href="?post=thailandtips">Thailand Lottery Tips   </a></li>
    				<li><a href='?post=joolottery'>Joo Lottery Tips</a></li>
				</div>
				<?php  } ?>
				<li class='caption Prizebond-toggle'>Setting </li>
				<div class="Setting-hide">
    			    <li><a href="?post=editprofile">Edit Profile</a></li>
    			    <li><a href="?post=changepicture">Change Picture</a></li>
    				<li><a href='?post=password'>Change Password</a></li>
    			</div>	
			</ul>
		</td>
		<td valign="top" class="block-none">
		<?php
		$pages=array("homepage"=>"Homepage","suggestion"=>"Suggestion","formula"=>"Formula","finalgame"=>"Final Game","tenakra"=>"Ten Akra Challange","oneakra"=>"One Akra Challange","open"=>"Open Challange","guesspaper"=>"Guess paper","photostate"=>"Photo State Paper","winning"=>"Winning Paper","thailandpaper"=>"Thailand Paper","thailandtips"=>"Thailand Lottery Tips", "joolottery"=>"Joo Lottery Tips");
		$form=array("homepage"=>"editor","suggestion"=>"editor","formula"=>"editor","finalgame"=>"editor","tenakra"=>"editor","oneakra"=>"oneakra","open"=>"open","guesspaper"=>"upload","photostate"=>"upload","winning"=>"upload","thailandpaper"=>"upload","thailandtips"=>"editor","joolottery"=>"editor","editprofile"=>"change-profile","changepicture"=>"change-picture","password"=>"change-password");
		if (isset($_GET["post"])){
			if ($_GET["post"]=="editprofile" or $_GET["post"]=="changepicture" or $_GET["post"]=="password"){
			echo "";
			}else{
			echo "<h4 style='margin-top:15px;text-align:center;color:#fff;'>Post your ".$pages[$_GET["post"]]."</h4>";
			}
		}
		if (isset($_GET["post"])){
			include "pages/".$form[$_GET["post"]].".php";
		}else{
			if (isset($_GET["del"])){
				$res=mysqli_query($con,"select * from posting where dat='".$_GET["del"]."'");
				$rw=mysqli_fetch_array($res);
				if (file_exists("user_upload_paper/".$rw["posting"])){
					unlink("user_upload_paper/".$rw["posting"]);
				}
				mysqli_query($con,"delete from posting where dat='".$_GET["del"]."'");
				
				header("location:?sd=1");
			}
			if (isset($_GET["sd"])){
				echo "<div class='success_message'><p>Posting has been deleted successfully.</p></div>";
			}
			if(isset($_GET["s"])){
	  		echo "<div class='success_message' $vis><p>Data has been saved successfully and will be posted by admin approval</p></div>";
	  }
			echo "
			<ul class='cmenu'>
				<li><a href='#' class='main'>Select Page</a>
				<ul>";
			    if ($userData["level"]=="1" or $userData["level"]=="3"){
				echo "<li><a href='userpanel.php'>All</a></li>
                <li><a href='?see=homepage'>Homepage</a></li>
                <li><a href='?see=suggestion'>Suggestion</a></li>
                <li><a href='?see=formula'>Formula</a></li>
                <li><a href='?see=finalgame'>Final Game</a></li>
                <li><a href='?see=tenakra'>Ten Akra Challange</a></li>
                <li><a href='?see=oneakra'>One Akra Challange</a></li>
                <li><a href='?see=open'>Open Challange</a></li>
                <li><a href='?see=guesspaper'>Guess Papers</a></li>
                <li><a href='?see=photostate'>Photo State Papers</a></li>
                <li><a href='?see=winning'>Winning Papers</a></li>";
				}
				if ($userData["level"]=="2" or $userData["level"]=="3"){
                echo "<li><a href='?see=thailandpaper'>Thailand Papers</a></li>
                <li><a href='?see=thailandtips'>Thailand Lottery Tips</a></li>
				<li><a href='?see=joolottery'>Joo Lottery Tips</a></li>
				";
				}
				echo "</ul>
				</li>
			</ul>
			";
			if (isset($_GET["see"])){
				$spg="?see=".$_GET["see"]."&pge";
			}else{
				$spg="?pge";
			}
			$tbl_name="posting";
			$limit=20;
			$targetpage="$spg";
			if (isset($_GET["see"])){
				$search="where page='".$_GET["see"]."' and uid='".$_SESSION["uid"]."' order by dat desc";
			}else{
				$search="where uid='".$_SESSION["uid"]."' order by dat desc";
			}
			echo "<table class='allpost' cellspacing='0'>
				 <tr class='tbhead'>
					<td width='150px;' align='center'>Post ID</td>
					<td width='200px;'>Posted In</td>
					<td width='150px' align='center'>Posted Date</td>
					<td>Action</td>	
				</tr>
			";
			include "pages/pagination.php";
			while ($row=mysqli_fetch_array($result)){
				$id=$row["dat"];
				$date=date("d F Y",$row["dat"]);
				$pagein=$pages[$row["page"]];
				$pg=$row["page"];
				if ($row["page"]=="guesspaper" or $row["page"]=="photostate" or $row["page"]=="winning" or $row["page"]=="thailandpaper"){
					$edit="";
				}else{
					$edit="<a href='?post=$pg&edit=$id'>Edit</a>";
				}
				echo "
				<tr>
					<td align='center'>$id</td>
					<td>$pagein</td>
					<td align='center'>$date</td>
					<td class='action'><a href='?del=$id'>Delete</a>
					$edit</td>	
				</tr>";
			}
			echo "
			<tr>
				<td colspan='4' bgcolor='#fff'>$pagination</td>
			</tr>
			</table>";
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

