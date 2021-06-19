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
.Estilo6 {color: #0069D2}
-->
</style>
<head>
<!-- Common Header Start-->
<!-- ============================================================================ -->
<title>Prize Bond Suggestion, Discussion Unique Ideas, Finance And Much More</title>
<meta name="description" content="Prizebondlucky.net is Pakistani website provides all kind of prize bond suggestion, unique ideas, discussion, finance, business, bonds." />
<meta name="abstract" content="All about Prize bond draw in pakistan,live chat and much more"/>
<meta https-equiv="content-type" content="en" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="revisit-after" content="1 days"/>
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
<!-- prize bond suggestion,formula suggestion,result prize bond,prize bond result,list of prize bond,live chat -->

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
			include "pages/winning_list.php";
			$tbl_name="posting";
			$limit=3;
			$targetpage="?pge";
			if (isset($_GET["user"])){
				$usr=user_data($_GET["user"]);
				$search="where page='suggestion' and uid='".$usr["uid"]."' and level='0'   order by dat desc";
			}else{
				$search="where page='suggestion' and level='0'  order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No suggestion found' title='No suggestion record found.'></div>";
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
					<div class='morepost'><a href='suggestion.php?user=".$user["username"]."' title='".$user["username"]." More Suggestion'>".$user["username"]." More Suggestion</a></div>
					$posting"; ?>
					<br /><br />
				
					
				

				
					<br /><br />					</td>
				</tr>
			 </table>
			 <h1>
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
                <h2>Prize Bond Suggestion</h2>
                <br><br><h3>Savings prize bonds</h3>
                <br>By getting through this web page, you would be able to have a complete set of information related with the saving's prize bonds and how you can best earn money by choosing this lucky method. Well, we all know the importance of prize bonds. This process is the ultimate way by which you would be able to make with some handsome amount of money in just the least period. However, this prize bond all depends on your luck. You need to be a lot careful about the selection of your prize bond's numbers and serial sequences so that at the end of the day you would be much lucky to be the winner of the prize bond.
              
            <br><br>
            For the information of readers, we would like to mention that prize bond has put into the divisions of so many of the denominations that accurately set within the pricing amounts. You can get the prize bonds in the category amount of 1500 as well as 2000, 2500, 3500, 4000 or even 7500. You can take the help from this web page to learn about the previous set of the records related to the prize bond savings. Once you get closer with this web page, you would be able to have complete insight information as in view with the savings of prize bond and also about the schedule of the prize bond. Prize bond winner announcement is made on a quarterly basis of the terms of the denominations. You can also choose with the student prize bond category and general private category to that is mainly meant for the organization and business areas. If you want to claim your winning prize bond amount, then you should, first of all, fill the application form, and after the long inquiry process, you can hand over your money. 
            <br><br><h4>All about saving's prize bonds:</h4>
        <br><br>Now many of you would be thinking around about what savings prize bond is all about. Saving's prize bond is known out to be the form of the method as from where you would be able to get complete insight information about your prize bonds. You can often get to know about the schedule of the prize bond as well. As soon as the management of the prize bond will be coming over with the discussion of the denomination announcement we will instantly be updated on this web page. <br><br>All through the use of this saving's prize bond, you would also be able to learn about the serial number prize bond sequence that is much high in demand inside the marketplaces. By this prediction, you would be helping you away to get the complete set of information about which number you should be choosing first of all. We have the guess papers for prize bond too. On the basis behalf of the guess papers, you can get much-related information about the sequence serial numbers that have been much in demand, or we would say in the winning line inside the prize bond market for you. 


<br><br>So this was the end of the discussion about the saving's prize bonds! No doubt that with the passage of time, the demand and popularity of the prize bond are getting maximum high, and so many people are making an effort where they can try their luck and be the lucky one to attain the handsome amount of money. If you believe that in luck, draw works, then without wasting any time gets connected with saving's prize bond right now! 


You can be the lucky one!
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

