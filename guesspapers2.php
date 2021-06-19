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
<title>Prize bond guess paper, Prime photo state paper, Vip guess papers</title>
<meta name="description" content="Prizebondlucky.net is Pakistani website provides all kind of prize bond guess paper, Pakistan prize bond paper, guess paper, photo state paper, lottery tips" />
<meta name="abstract" content="Prize bond guess paper, Prime photo state paper, Vip guess papers"/>
<meta https-equiv="content-type" content="en" />
<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="https://www.prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="https://www.prizebondlucky.net"/>
<meta name="Copyright" content="2017"/>
<meta name="designer" content="https://www.prizebondlucky.net" />
<meta name="email" content="prizebondlucky@gmail.com" />
<meta name="rating" content="General" />
<meta name="distribution" content="Global" />
<!-- metaTags https://www.prizebondlucky.net/ -->
<!-- Prize bond guess paper, photo state paper, prime photo state guess paper, lottery tips, finance, bonds, lucky numbers, prize bonds guess papers, Pakistan prize bond -->

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
				$search="where page='guesspaper' and uid='".$usr["uid"]."' and level='0'  order by dat desc";
			}else{
				$search="where page='guesspaper' and level='0'  order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No geuss paper found' title='No guess paper record found.'></div>";
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
					<div class='morepost'><a href='?user=".$user["username"]."' title='".$user["username"]." More Guess Papers'>".$user["username"]." More Guess Papers</a></div>
					<img src='user_upload_paper/$posting' width='600px' height='600px' alt='Prize bond Guess paper' title='Prize bond Guess paper'>"; ?>
					<br /><br />
					
				
				

					
					
					<br /><br />					</td>
				</tr>
			 </table>
			 <?php	
			}
			echo "<center>$pagination</center>";
			?>
			 </tr>
<!-- Page body -->
  <td>
      <table class="content paddingtd">
	<tbody>
        <tr>
            <td>
                <h2> Prize bond guess paper</h2>
                <br>If you want to improve your standard of living and to earn, then taking the opportunity to experience your luck through prize bond is an ultimate option. These stands away to be one of the most important mediums of earning money only if you are one of the lucky ones. Lets discuss some insight details about it!
<br><br><h3>Introduction about Prize bond guess papers:</h3>
<br>In the year 1960, the concept of <b>guess papers</b> was introduced for the very first time. This method is known as the form of a medium of the gold investment and bearer security. As you will be participating in the scheme, you will be considering carrying out with the only right method to hence invest wisely and getting away with the chance to win prize money in the shorter period. This scheme will make you earn with a handsome amount of money. 
    <br><br><a href="https://prizebondlucky.net/prizebondlist.php">Prize bond list</a> are also taken away to be issued in proper series as into which were each set consist of one less than 1,000,000 bonds. This process of investment is best for the popular category of the people by which they will be getting the first chance to earn a handsome amount of money. This money process of the drawing has changed the life of so many people, and you can be one of the lucky one too.   
       
       <br><br><h3>Information about different Denominations of Prize Bonds:</h3>
       <br>This has been categorized in so many denominations. Some of the major categories or denominations are highlighted to be Rs. 100, Rs. 200, Rs. 750, Rs.1500, Rs. 7500, Rs. 15000, Rs.25000, and Rs. 40,000.  You will be getting to know that the this is being issued every single year almost every single of the day on the quarter timeline basis.  They are defined away as the source of the investment bearer type of security that is to be generally available in the worth of RS 200, RS 750, RS 15,000, and RS 40,000 respectively. 
       <br><br><h4>Learn about Prize Bond Guess papers:</h4>
       <br>By visiting with this web page, you would be able to have complete information about the 
 <b>guess papers.</b>These documents will help the people to know about which series of numbers have remained on the popular demand in the past few years. In this way, the buyers can also buy those which are at the top in the market. Plus right on this web page, we will be putting together insight information about these according to the date, time, day and series sequence too. 
<br><br>Why you look around here and there when we are all here in giving you the complete set of information and details about it? We will be updating straight away on this web page for the readers. Plus we would also be letting the readers know about the schedule as well that would be as according to the date and days along with the month as well As we have already mentioned that the announcement draw is made on a quarterly basis. Sometimes it is held as twice times in one month about which we will be updating to the readers right on this web page. 
       <br><br>So this was all about <b>guess paper</b> If you want to keep a check on more details of the <a href="https://prizebondlucky.net/">prize bond</a>,  then without wasting any time signed into this web page right now!

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

