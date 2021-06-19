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
<title>Prize bond formula, Unique Ideas, bonds routine, Pakistan lucky draw.</title>
<meta name="description" content="prizebondlucky.net is Pakistani website provides all kind of prize bond formula, lucky routine, formula, bonds, Prize bond Pakistan lottery and much more." />
<meta name="abstract" content="All about Prize bond draw in pakistan and much more"/>
<meta https-equiv="content-type" content="en" />
<meta name="revisit-after" content="1 days"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Generator" content="https://www.prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="https://www.prizebondlucky.net"/>
<meta name="Copyright" content="2017"/>
<meta name="designer" content="https://www.prizebond.net" />
<meta name="email" content="prizebondlucky@gmail.com" />
<meta name="rating" content="General" />
<meta name="distribution" content="Global" />
<!-- metaTags https://www.prizebondlucky.net/ -->
<!-- Prize bond formula, lucky routine, bonds number, prize bond numbers, lottery, finance, routine formula, lucky hints, golden tips, VIP tips. -->

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
				$search="where page='formula' and uid='".$usr["uid"]."' and level='0'  order by dat desc";
			}else{
				$search="where page='formula' and level='0'   order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No formula found' title='No formula record found.'></div>";
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
					<div class='morepost'><a href='?user=".$user["username"]."' title='".$user["username"]." More Formula'>".$user["username"]." More Suggestion</a></div>
					$posting"; ?>
					<br /><br />
					

					<br /><br />					</td>
				</tr>
			 </table>
			 <p>
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
                <h2>Prize Bond Formula</h2>
                <br>It's time to try your luck with the fantastic investment than the prize bonds! There are so many reasons and perceptions that would be putting your mind over the thought that you should put yourself into the investment prize bond opportunity owing to our different mechanism of thinking and processing information.  As we talk about the investment, then for so many of the people, prize bonds are taken away to be one of the most important mediums for sure. This is all possible as because of the attractive features as generally it offers that cater to the appetite of both the risk takers and so as the involvement of the risk-averse individuals.
               <br>
               
<br><br><h3>Importance of Prize Bond Investment for you:</h3>
                <br>The main reason for adding the medium of investment into the prize bond formula is that it is all carried out with the simple set down the procedure. It would be much easy to get for the mean of investment when you have the prize bond. You need to submit with the application form filling along with all the required details and then later you will be getting the ownership of the relationship. It is much easily accessible to get it from the different platforms of the primary and the secondary market. There is no setting of the additional charges as being apart from the money that will be used away in the prize bond. They are accessible in the range of around Rs. 100 and as according to per your cash flows as you can very conveniently device your suitable investment scheme too. The amount that you will be investing in the prize bond will set as remain safe and secure even if you are not winning with any prize. As you will be withdrawing with the investment at any range of the point, then you will be getting away with the access of the same amount as initially invested.
                 
                <br><br><h4>How to get the prize bond formula?</h4>
                <br><br>If you are investing in prize bond for the first time, then it would be recommended to take the finest help out from the prize bond formula. Now as regards the method has been concerned, it would make you attain with the exciting information related with the lucky numbers that will help you to get the prize bond that is best to be used away. 

<br><br>By signing into our web page, you will be able to get the complete set of information related with the prize bonds and also the guess papers and formula method too. You can follow up with the formula method to learn about the lucky numbers and which numbers have remained successful in the past few years. Over here you can also learn about the schedule of the prize bond routine. As soon as the management is coming across with the announcement of the plan of prize bond, we will instantly be updating it right over this web page. We have the 100% guarantee over the prize bond formula, and we are sure that this will come about with some successful results at the end of the day. 

<br><br>So this was the complete set of information about the prize bond and prize bond formula for you. Undoubtedly, prize bond grants with the best of the benefits in the medium of investment. Following the rules of the prize bond formula, you would be finding it much easy to choose the lucky numbers that are worth winning for you. Without wasting any time visits this web page right now. 

                </td>
        
		</tr>
	</table>

	</td>
</tr>
<!--// Page body -->
		    
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

