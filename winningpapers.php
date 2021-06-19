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

<title>Prize bond Winning Papers, Prize bond guess Papers, Photo State Papers</title>
<meta name="description" content="Prizebondlucky.net is Pakistan website Provides all kind of Pakistan papers, Prize bond winning papers, Prize bond guess papers, winning bonds,lottery tips." />
<meta name="keywords" content="Prize bond winning papers, Prize bond guess papers, winning bonds, prize bond numbers, prize bond baba, prize bond lucky, lottery tips, finance." />
<meta name="abstract" content="Prize bond Winning Papers, Prize bond guess Papers, Photo State Papers"/>
<meta https-equiv="content-type" content="en" />
<meta name="revisit-after" content="1 days"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Generator" content="https://www.prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="https://www.prizebondlucky.net"/>
<meta name="Copyright" content="2017"/>
<meta name="designer" content="https://www.prizebondlucky.net" />
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
<style>
    img.d-block.mx-auto.h-100 {
    height: 170px !important;
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
    
	<!-- News Section Two -->
	<section class="page-title" style="background-image:url(images/background/8.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Winning <span>Papers</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Winning Papers</li>
				</ul>
			</div>
        </div>
    </section>
    <?php include('save-account.php'); ?>
	<!-- Blog List Section -->
	<section class="blog-list-section">
		<div class="auto-container">
		    <div class="row">
			<?php
			$space="&nbsp;&nbsp;";
			$tbl_name="posting";
			$limit=16;
			$targetpage="?pge";
			if (isset($_GET["user"])){
				$usr=user_data($_GET["user"]);
				$search="where page='winning' and uid='".$usr["uid"]."' and level='0'  order by dat desc";
			}else{
				$search="where page='winning' and level='0'  order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No photo state paper found' title='No photo state paper record found.'></div>";
			}
			$aa=0;
			while ($row=mysqli_fetch_array($result)){
				$user=user_data($row["uid"]);
				$posting=$row["posting"];
				$photo=$user["photo"];
				if ($photo=="" || !file_exists("userpanel/user_photo/".$photo)){
				 	if($user['login_type'] != ""){
					        $photo=$user["photo"];
					    }else{
						$photo="extra/default.png";
					    }
				
				}else{
				 	$photo="../userpanel/user_photo/$photo";
				
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
							<!--<img src='extra/user.png' title='".$user["username"]."' alt='".$user["username"]." icon'/>-->
							<div class=\"w-100 p-3\" style=\"height:370px;\"><img src=\"./user_upload_paper/$posting\" width=\"600px\" height=\"200px\" class=\"d-block mx-auto h-100 \" alt=\"Prize bond Winning paper\" title=\"Prize bond Winning paper\"></div>
							<div class=\"overlay-box\">
							<!--
								<a href=\"./user_upload_paper/$posting\"></a>
								<a data-fancybox=\"post\" data-filter=\"#hidden-content\" data-src=\"#hidden-content\" href=\"javascript:;\" class=\"plus\"><small style=\"font-size:23px; \">View</small>
                                	
                                </a> -->
                                <a href=\"./user_upload_paper/$posting\" data-fancybox=\"news\" data-caption=\"\" class=\"plus \">
                                <small style=\"font-size:23px; \">View</small>
                                </a>
							</div>
						</div>
						<div class=\"lower-content\">
							<ul class=\"post-meta\">
								<li><span class=\"fa fa-calendar\"></span><span class='month'>$month</span><span class='day'>$day</span></li><br>
								<li><span class=\"fa fa-clock-o\"></span>$time</li><br>
								<li><span class=\"fa fa-user\"></span>".$user["username"]."</li><br>
								";?>
								<?php if($user["username"] != $userData['username']){ 
							echo "<a href=\"userpanel/message.php?uid=$user[uid]\">
									<li><span class=\"fa fa-envelope\"></span>Send private message</li>
								</a>
								";?>
							<?php } ?>
							<?php echo "
								
							
							</ul>
							<h6><img src='$photo' width=\"65\" title='".$user["username"]."' alt='".$user["username"]." icon'/><b>".$space,$user["username"]."</b></h6>
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
			echo "</div>$pagination";
			?>
            <!--End Styled Pagination-->
			</div>
		</div>
	</section>
	<section class="news-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Prize bond winning <span>Papers</span></h2>
				<div class="text">Extra Text Dummy</div>
			</div>
			
			<div class="row clearfix">
			    <div class="col-md-12">
                <h2>Prize bond winning papers</h2>
                <br><p><span>Popular Searches : </span><a href="https://prizebondlucky.net/photostatepapers.php" target="_blank" >prize bond winning papers </a><span>,prize bond game,prize bond</span> 
	        <h3>Photo state papers</h3>
	        <span>,prize bond finance,prize bond discussion,prize bond numbers,prize bond akra,prize bond guess paper,<strong><em>prize bond winning papers </em></strong>,            </span>
	        <h2>Prize bond guess papers</h2></p>

    	        </div>
			</div>
		</div>
	</section>
	
	
	<?php include('footer.php'); ?>
