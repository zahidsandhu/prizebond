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
<title>Pakistan Prize bond final game Play Your Own Risk</title>
<meta name="description" content="prizebond.asia is pakistan site provide all kind of prize bond final game,final game challange,prize bond online,formula prize bond" />
<meta http-equiv="content-type" content="en" />
<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="http://www.prizebondlucky.net"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="http://www.prizebondlucky.net"/>
<meta name="Copyright" content="2013"/>
<meta name="designer" content="http://www.prizebond.net" />
<meta name="email" content="hamidinthecity@hotmail.com" />
<meta name="rating" content="General" />
<meta name="distribution" content="Global" />
<!-- metaTags http://www.prizebondlucky.net/ -->
<!-- prize bond online,formula prize bond,prize bond game,final game,prize bond final game,hurf akhir -->

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
			include "pages/winning_list.php";
			$tbl_name="posting";
			$limit=3;
			$targetpage="?pge";
			if (isset($_GET["user"])){
				$usr=user_data($_GET["user"]);
				$search="where page='finalgame' and uid='".$usr["uid"]."' and level='0'   order by dat desc";
			}else{
				$search="where page='finalgame'  and level='0'   order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No final game found' title='No final game record found.'></div>";
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
	</tr>
<!--// Page body -->
<!-- Page body -->
  <td>
      <table class="content paddingtd">
	<tbody>
        <tr>
            <td>
                <h1>Complete information about Prize bond final game</h1><br><br><br>
                Get ready to learn about a <b>prize bond final game</b> for the users who are willing to buy it straight away! Prize bond is offering out with the free and yet with the useful feature that is known as the prize bond wallet. It is giving out the access for all the visitors as free of cost. By getting through the use of the prize bond final game wallet, you will be getting on with the access of the feature where you will be keeping up on the prize bond timeline of numbers right into the electronic wallet all with us. You will be all able to manage on with the numbers that somehow add to the names and also the deleting of the old names.
                <br><br>You will be checking on all the numbers in the prize bond final game as once you will be entering them into your wallet by clicking on the report button. On top of each single of the draw, we will be checking on with the number for you, and if you are the winner of any prize, you will the information by sending far the SMS on the mobile number which will be providing you the registration as on time as set with all the details of your winning numbers.  We will make sure of the fact that we are keeping away the information wholly private and also secure. Plus we will not be selling or sharing with anything that is to be personally belonging to you. You do not need to get into requirement as it comes to the creation of the wallet account of the prize bond final game. 
                <br><br>
                
By choosing with the <i>prize bond final game</i> wallet, you will be finding it as all acting upon being the free portal that you would be using away as for the storage of the prize bond numbers. This is all done through the creation of the account with us. You would be able to check with all the names all through just one click as instead of entering away with the numbers all over again.  You can, generally, manage on with the numbers just as adding or somehow also deleting different or all numbers. These final game wallets are entirely free for use as we do not at all take the benefits from the numbers. The earning is by some means all based on the advertisements we have on top of the website. This is the primary purpose that somehow attracts a visitor at large and so as nothing else towards the prize bond final game.
<br><br>Now many users want to know that whether there are any alerts if I won the prizes. Well the whole system of prize bond final system has been working on top of the criteria so that you would not be able to get together with the alert on both the mobile and also the email as in case you won any prize but somehow all currently, you have to press the single button to get away with all your numbers checked.
<br><br>This is the complete detailed information related to the <a href="https://www.prizebondlucky.net/prizebondlist.php">prize bond final game</a>  for the users! You can also become the part of this web page if you want to learn about the schedule of the prize bond, and prize bond guesses papers and even photo state papers too. We will keep on updating the readers about the complete program of the prize bond system right through visiting this web page. Get ready to put your investment in prize bond right now!

           
                </td>
        
		</tr>
	</table>

	</td>
</tr>


<!-- Page footer -->
	<tr>
	<?php include "template/footer.php"; ?>
	</tr>
<!--// Page footer -->

</tbody>
</table>


</body>
</html>

