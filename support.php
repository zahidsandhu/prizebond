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
<title>Help And Support</title>
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
    <td width="1000px" class="pagewidth-td" align="center"><table width="561" class="pagewidth-tbl" align="center" cellpadding="10" cellspacing="0">
      <tr>
        <td width="553" class="pagewidth-td" valign="top" ><h3 class="ui-state-default" style="text-align:center;padding:10px;">Contact Us </h3></td>
      </tr>
      <tr>
        <td valign="top"  style="padding:10px;background-color:#FFFFFF;">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"  style="padding:10px;background-color:#FFFFFF;">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"  style="padding:10px;background-color:#FFFFFF;">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"  class="templates_box"><h3 align="center" class="style1" style="padding:10px;background-color:#FFFFFF;">Email Us : prizebondlucky@gmail.com</h3>
          <h3 align="center" class="style1" style="padding:10px;background-color:#FFFFFF;">{ANY QUESTION} <br />
            <br />
            ?</h3></td>
      </tr>
      <tr>
        <td valign="top"  style="padding:10px;background-color:#FFFFFF;">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"  style="padding:10px;background-color:#FFFFFF;">&nbsp;</td>
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

