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
<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
<head>
<!-- Common Header Start-->
<!-- ============================================================================ -->
<title>Terms of Serivces</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    <td width="1000px" align="center"><table width="561" align="center" cellpadding="10" cellspacing="0">
      <tr>
        <td width="553" valign="top" ><h3 class="ui-state-default" style="text-align:center;padding:10px;">Terms of Serivces</h3></td>
      </tr>
      <tr>
        <td valign="top"  style="padding:10px;background-color:#FFFFFF;font-size:13px;line-height:25px;text-align:justify;"><p>1. The formula provided in this website are gathered though all over Pakistan which include personal contribution, print media (books, articles, newspaper etc) major contribution is from AINA-E-QISAMAT , Books from Bilal Ahmed (Lahore), books from Dr. Arshad Shah, (Khanewal), books from Z.A. Satti (Late), Articles form Rohani dunia, Rahnomay Amliat etc</p>
            <p> We will expect our member to use these information for just educational purpose and any martial from this website use for republish or reprinting is illegal and Prizebondlucky.net reserve the right to take necessary action against such activities.</p>
          <p> 2. Member should not use these information to play illegal games relating to Prizebond in Pakistan and if he/she does so will responsible personally for his/her action.</p>
          <p> 3. Any financial loss or moral damage cause by using the information of this website will not be responsibility of prizebondlucky.net, these information are educational purpose only so use them at your own risk.</p>
          <p> 4. Members are not allowed to post nude picture, rough and vulgar langue in any posting area , if some one find doing so can be banned from membership without any notification or warnings.</p>
          <p> 5.Prizebondlucky.net will not responsible for any cash payment made to any member for prizebond numbers etc we strongly discourage such activities on our website and any member requesting for such money will be banned.</p>
          <p> 6. Member found responsible for abuse or harassment will be banned without any notice </p>
          <p>By becoming member of this website you are automatically saying &quot;YES&quot; to all terms and condition specified above and we expect from you to abide these rules </p></td>
      </tr>
    </table></td>
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

