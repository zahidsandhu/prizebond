<?php
ob_start();
session_start();
include "apps/config.php";
include "apps/functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<!-- Common Header Start-->
<!-- ============================================================================ -->
<title>User Login Here</title>

<meta property="fb:page_id" content="240734989375">
<link type="text/css" href="extra/styles.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="extra/favicon0.ico" type="image/x-icon">
	<link rel="shortcut icon" href="extra/favicon0.ico" type="image/x-icon">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery00.js"></script>
<script type="text/javascript" src="js/main0000.js"></script>
<link type="text/css" href="extra/jquery-u.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-u.js"></script>
<link type="text/css" href="extra/webs.css" rel="stylesheet">
<style>
.form-mid{margin-top:15px;}
 .form-mid tr td input[type="text"],.form-mid tr td select, .form-mid tr td input[type="password"]  {border: 5px solid white; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 5px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 5px 0;
	border-radius:5px;
	width:200px;
	box-sizing: border-box;
	}
	.submit{background: url('extra/horizont.png') repeat-x 0 -931px;
	margin: 0 8px;
	padding: 0;
	font:bold 16px/35px Arial;
	color:#fff;
	text-decoration: none;
	padding:0 7px;
	height:36px;
	background: url('extra/horizont.png') repeat-x 0 -54px;
	white-space:nowrap;
	border:1px solid #3366FF;
	border-radius:5px;
	margin-top:10px;
	width:120px;
	cursor:pointer;
	}
	.leftcol
	{
	   padding: 8% 0 !important;
	}
	/*.leftcol h4*/
	/*{*/
	/*    text-align:center;*/
	/*}*/
	.leftcol form,.leftcol h4
	{
	    width:70%;
	    margin:0 auto;
	}
	.error_message{background-color:#FEE4E0;color:#990000;line-height:22px;padding:10px;margin:5px;border:2px solid #990000}
	.error_message p{color:#CC0000;}
	.success_message{background-color:#EFFCC7;color:darkgreen;line-height:22px;padding:10px;margin:5px;border:2px solid darkgreen;}
	.success_message p{color:#009900;}
</style>


    </head>

<body itemscope itemtype="http://schema.org/WebPage" id="unique_body_id_bestsellers">
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

<table class="content">
	<tr>
	<td class="leftcol">

			            
 			<?php
				//include "template/slider.php";
				if (isset($_GET["forget"])){
					include "pages/forget.php";
				}else{
					include "pages/login.php";
				}
				
			?>
		
    </td>
	<?php
		//include "template/right.php";
		?>
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

<!-- This document saved from http://www.templatemonster.com/ -->
