<?php
ob_start();
session_start();
include "apps/config.php";
include "apps/functions.php";
if (isset($_SESSION["uid"])){
	$userData=user_data($_SESSION["uid"]);
}else{
	$userData=array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta https-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Prize Bond List 2019,National Savings,Bond Guess Papers</title>
<meta name="description" content="Prizebondlucky.net is Pakistani Website site Provides all kind of Prize Bond, nbp, state bank of pakistan,national savings, Guess Paper, Prize Bond List & Prize Bond Results, schedule, formula, photo state paper." />
<meta name="abstract" content="All About Pakistan, Prize bond, Guess papers, , Results."/>
<meta https-equiv="content-type" content="en" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="https://prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="https://prizebondlucky.net"/>
<meta name="Copyright" content="2017"/>
<meta name="designer" content="https://prizebondlucky.net" />
<meta name="email" content="prizebondlucky@gmail.com" />
<meta name="rating" content="General" />
<meta name="distribution" content="Global" />
	<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

 
</head>
<body>
	<div class="page-wrapper">
    <?php include('header.php'); ?>
    <?php include('save-account.php'); ?>
    
    <section class="call-to-action-two" style="background-color:#f2f3fa;">
		<div class="auto-container">
			<div class="clearfix">
				
				<div class="pull-left">
					<h3 class="text-dark">If you  are agree with our terms and conditions then <span><a href="userpanel/index.php">Login</a>/<a href="userpanel/register.php">SignUp </a></span>and add your prizebond number in your wellat</h3>
				</div>
				
			</div>
		</div>
	</section>
    
    </div>
    	<?php include('footer.php'); ?>