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
<title>Prime photo state papers, Prize bond guess papers, Prize Bonds Papers</title>
<meta name="description" content="Prizebondlucky.net is Pakistani website provides all kind of Prime photo state, Photo state papers, prize bond, guess papers, VIP guess paper, lottery tips." />
<meta name="abstract" content="Prime photo state papers, Prize bond guess papers, Prize Bonds Papers"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta https-equiv="content-type" content="en" />
<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="https://www.prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="https://www.prizebondlucky.net"/>
<meta name="Copyright" content="2017"/>
<meta name="designer" content="https://www.prizebondlucky.net" />
<meta name="email" content="prizebondlucky.net" />
<meta name="rating" content="General" />
<meta name="distribution" content="Global" />
<!-- metaTags https://www.prizebondlucky.net/ -->
<!-- Prime photo state papers, Photo state paper, Prize bond, prize bond guess papers, VIP guess paper, Tariq photo state paper, golden papers, lottery papers -->

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
				$search="where page='photostate' and uid='".$usr["uid"]."' and level='0'   order by dat desc";
			}else{
				$search="where page='photostate' and level='0'  order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No photo state paper found' title='No photo state paper record found.'></div>";
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
					<div class='morepost'><a href='?user=".$user["username"]."' title='".$user["username"]." More Photo State Papers'>".$user["username"]." More Photo State Papers</a></div>
					<img src='user_upload_paper/$posting' width='600px' height='600px' alt='Photo State paper' title='Photo State p paper'>"; ?>
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
                <h2>Prize bond Photo State papers</h2>
                <br>It's time to be the first one to get the prize bond photo 

state papers in your hands first of all!  Well, we all 

know that the importance and value investment of prize 

bond has been hugely increasing inside Pakistan that is 

giving the middle-class people with the chance to earn 

enough amount of money.
<br><br><h2>So finding the lucky prize bond</h2>
<br>is the ultimate step to perform out with! In such 

conditions, the prize bond photo state papers will be 

helping you out a lot. If you were checking out with our 

web page, you would be finding be finding so many 

fantastic and best options of the prize bonds to take 

into account with.
<br><br><h3>Information about premium prize bond photo state papers:</h3>
<br>Over the worth of Rs 40,000 with the price of Rs 

80 million, Government of Pakistan has come up with the 

announcement of the premium prize bond registration. This 

prize bond will be attending you with the profit on the 

scale of monthly basis that would be given after six 

months. It is readily available in favor of the private 

as well as public and also the individual institutions as 

well. Banks would not be allowed to purchase with these 

bonds. These prize bonds have been playing an important 

role to bring improvement in the economic sector of 

Pakistan. It can easily be obtained from the branches of 

the State Bank in the major cities of Lahore, Karachi and 

Quetta and Peshawar. 
<br><br><h3>Insight details about student prize bond photo state papers:</h3>
<br>In the category of the prize bonds, there is 

also the type of student prize bond as well. As it is 

evident or clear from the name whom this category of the 

prize bond is just specially designed for the students 

only. To learn about the student's photo state papers, 

you can check out this webpage Here there is a complete 

list of original 
<a href="https://www.prizebondlucky.net/guesspapers.php">photo state papers</a> related to the 

student prize bond. The successful schedule announcement 

of this bond will be carried out after each single 

quarter month, and the winning prize will be around Rs. 

700,000 and so many other titles are also part of it. It 

would be playing an essential role in giving much of the 

relief to the students over their educational growth. 
<br><br>
By visiting with this web page, you would be able to get 

much of the more information as related to the prize 

bond. You can often learn much of the information in view 

with the Awami <b>photo state papers</b>. We will also be 

letting the readers know about the complete set of 

schedule about the announcement of the prize bond winners 

as it will be announced by the side of the management. 

Apart from the Tariq photo state papers, you can even get 

much of the information in the guess papers as well. In 

this way, you can get to know that which prize bond 

sequence numbers are best to take into account right now. 

 
<br><br>To sum up, we would say that prize bonds are taken as the 

best medium where they act as the investment tool for the 

people of Pakistan. In the previous years, so many people 

have changed their standards of living by winning a 

handsome amount of money through the prize bonds. This is 

probably the best step by the side of Government of 

Pakistan where so many more prize bond categories are 

soon to be announced. 


<br><br>Tune into this web page right now and get complete 

information related with <i>photo state papers</i>! 


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

