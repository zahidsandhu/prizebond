<?php
ob_start();
session_start();
include "apps/config.php";
include "apps/functions.php";
if (isset($_SESSION["uid"])){
	$userData=user_data($_SESSION["uid"]);
}
?>

<?php

	$uid = $_SESSION['uid'];
	$myquery=mysqli_query($con,"SELECT start_date,end_date FROM users WHERE uid=$uid");
		$fetch = mysqli_fetch_array($myquery);

		$Start_Date = $fetch['start_date'];
		$End_Date = $fetch['end_date'];
		$current_date = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta https-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Vip paper,Vip guess paper,Prize bond vip,Vip papers</title>
<meta name="description" content="prizebond.asia is pakistan site provide all kind of Vip paper,Vip guess paper,Prize bond vip,Vip papers,vip prize bond,prize bond vip paper" />
<meta name="keywords" content="Vip paper,Vip guess paper,Prize bond vip,Vip papers,vip prize bond,prize bond vip paper,prize bond vip papers,vip guess paper,vip guess papers" />
<meta name="abstract" content="All about Prize bond draw in pakistan Vip paper,Vip guess paper,Prize bond vip,Vip papers,much more"/>

<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="http://www.prizebond.asia"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="http://www.prizebondlucky.com"/>
<meta name="Copyright" content="2013"/>
<meta name="designer" content="http://www.prizebond.asia" />
<meta name="email" content="hamidinthecity@hotmail.com" />
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
 	
	    <!-- Preloader -->
 	
    <?php include('header.php'); ?>
    <?php include('save-account.php'); ?>
    
	<!-- News Section Two -->
	<section class="news-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Vip <span>Papers</span></h2>
				<div class="text">Extra Text Dummy</div>
			</div>
			
			<div class="row clearfix">
			    <div class="col-md-12">
    			    <table width="1000px" class="pagewidth-tbl vippapers" cellspacing="0" align="center">
            		<tr> 
            		<td> 
            			<?php
            			if (!isset($_SESSION["uid"])){
            				echo "<div class='Swarn'>You are not online. If you want to see vip paper please online first</div>";
            			}else{
            				$usr=user_data($_SESSION["uid"]);
            				$expire = strtotime("+3 months", $usr["vip"]);
            				if ($usr["vip"]=="0"){
            					echo "<div class='Swarn'>You can not see the vip papers because you are not allowed to see vip papers. Please contact admin.</div>";
            				}elseif ($Start_Date >= date("Y-m-d") || $End_Date <= date("Y-m-d")){
            				    echo "<div class='Swarn alert alert-info alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>You can not see the vip papers because your time is expirred, for renew it please contact admin.</div>";
            				    
            					
            				}else{
            					$tbl_name="posting";
            					$limit=5;
            					$targetpage="?pge";
            					$search="where page='vip'    order by dat desc";
            					include "pages/pagination.php";
            					if ($total_pages==0){
            						echo "<div class='norecord'>
            						<img src='extra/no-record-found.jpg' alt='No vip found' title='No vip record found.'></div>";
            					}else{
            						echo "<center>";
            						while ($row=mysqli_fetch_array($result)){
            							echo "<img class='self-vip-image-style' src='user_upload_paper/".$row["posting"]."' width='600' alt='VIP Paper' title='VIP Paper'><br><br>";
            						}
            						echo "</center>";
            					}
            				}
            			}
                        if(isset($pagination)){			 
            			echo "<center>$pagination</center>";
                        }
            			?>
            		</td>
            		</tr>
        	        </table>
    	        </div>
			</div>
		</div>
	</section>
	
	
	<?php include('footer.php'); ?>



