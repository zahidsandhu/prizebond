<?php
ob_start();
session_start();
include "apps/config.php";
include "apps/functions.php";
if (isset($_SESSION["uid"])){
	$userData=user_data($_SESSION["uid"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Lottery thailand,Thai lotto,Thailand paper,Thai paper</title>
<meta name="description" content="Thailand Lottery is Saudi Arabia provide all kind of Lottery thailand,Thai lotto,Thailand paper,Thai paper,paper thailand,thailand lottery paper " />
<meta name="keywords" content="Lottery thailand,Thai lotto,Thailand paper,Thai paper,paper thailand,thailand lottery paper,Thailand lottery,Thai lottery,Lottery thai,Thai tips,thailand lottery tips,thai loto,thai result,thailand lottery paper,thailand lottery result,thai lottery tips,thai lottery paper,thailand lottery result,thai papers" />
<meta name="abstract" content="All about Thailand lottery saudia arabia Lottery thailand,Thai lotto,Thailand paper,Thai paper"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="http://www.prizebond.asia"/>
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
<style>
    img.d-block.mx-auto.h-100 {
    height: 170px !important;
    /* width: 90%; */
}
.lower-content {
    margin-top: -175px;
}

</style>
</head>
<body>
	<div class="page-wrapper">
 	
	    <!-- Preloader -->
 	
    <?php include('header.php'); ?>
    <?php include('save-account.php'); ?>
    
	<!-- News Section Two -->
	<section class="page-title" style="background-image:url(images/background/8.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Thailand <span>Lottery Tips</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Thailand Lottery Tips</li>
				</ul>
			</div>
        </div>
    </section>
	<!-- Blog List Section -->
	<section class="blog-list-section">
		<div class="auto-container">
		    <div class="row">
		    <div class="col-md-12 col-sm-12">
		    	<h3>Latest Thailand Lottery Result</h3>
						
						<?php
						$result=mysqli_query($con,"select *  from thai");
						$row=mysqli_fetch_array($result);
						?>
						<table class="table table-bordered table-hover">
							<tr>
								<td>Date</td>
								<td><?php echo $row["dat"]; ?></td>
							</tr>
							<tr>
								<td>First</td>
								<td><?php echo $row["first"]; ?></td>
							</tr>
							<tr>
								<td>Three Numbers </td>
								<td><?php echo $row["three"]; ?></td>
							</tr>
							<tr>
								<td>Down</td>
								<td><?php echo $row["down"]; ?></td>
							</tr>
						</table>
						
		    </div>
		    
		    
			<?php
			
			$tbl_name="posting";
			$limit=12;
			$targetpage="?pge";
			if (isset($_GET["user"])){
				$usr=user_data($_GET["user"]);
				$search="where page='thailandpaper' and uid='".$usr["uid"]."' and level='0'   order by dat desc";
			}else{
				$search="where page='thailandpaper' and level='0'  order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No Thailand papers found' title='No thailand papers record found.'></div>";
			}
			$aa=0;
			while ($row=mysqli_fetch_array($result)){
				$user=user_data($row["uid"]);
				$posting=$row["posting"];
				$photo=$user["photo"];
				if ($photo==""){
					$photo="extra/default.png";
				}else{
				    if($user['login_type'] != ""){
					        $photo=$user["photo"];
					    }else{
					$photo="userpanel/user_photo/$photo";
					    }
					
				}
				$day=date("d",$row["dat"]);
				$month=date("F",$row["dat"]);
				$time=date("h:i:s A",$row["dat"]-3600);
				
				$aa = $aa + 1;
				
				if($aa % 4 != 0){
			 ?>
			
			 <?php echo "
			 
			 <!-- News Block Four -->
				<div class=\"news-block-four col-lg-3 col-md-6 col-sm-12\">
					<div class=\"inner-box\">
						<div class=\"image\">
							<div class=\"w-100 p-3\" style=\"height:370px;\"><img src=\"../user_upload_paper/$posting\" width=\"600px\" height=\"200px\" class=\"d-block mx-auto h-100 \" alt=\"Prize bond Winning paper\" title=\"Prize bond Winning paper\"></div>
							<div class=\"overlay-box\">
								<a href=\"../user_upload_paper/$posting\" data-fancybox=\"news\" data-caption=\"\" class=\"plus \">
								<small style=\"font-size:23px; \">View</small>
								</a>
							</div>
						</div>
						<div class=\"lower-content\">
							<ul class=\"post-meta\">
								<li><span class=\"fa fa-calendar\"></span><span class='month'>$month</span><span class='day'>$day</span></li><br>
								<li><span class=\"fa fa-clock-o\"></span>$time</li><br>
								<li><span class=\"fa fa-user\"></span>".$user["username"]."</li><br>
							</ul>
							<h6><img src='$photo' width=\"65\" title='".$user["username"]."' alt='".$user["username"]." icon'/><b>&nbsp;&nbsp;".$user["username"]."</b></h6>
						</div>
					</div>
				</div>
					
			"; ?>
			
		
			<?php	
				}else{
		    echo "<div class=\"news-block-four col-lg-3 col-md-6 col-sm-12\">
		    google add
		    </div>";
		}	
			    
			}
			echo "<div class=\"col-sm-12\">$pagination</div>";
			?>
            <!--End Styled Pagination-->
			
		</div>
	</section>

	
	
	<?php include('footer.php'); ?>
