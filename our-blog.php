<?php
ob_start();
session_start();
include "apps/config.php";
include "apps/functions.php";
include "blogadmin/layouts/connection.php";
error_reporting(0);
if (isset($_SESSION["uid"])){
	$userData=user_data($_SESSION["uid"]);
}else{
	$userData=array();
}
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="description" content="Consulting Finance Corporate Business - Consulting HTML Template">
<meta name="keywords" content="consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">
<meta name="author" content="Themexriver">
<title>Our Blog</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	<?php include('header.php'); ?>
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/8.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Blog <span>grid</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Blog grid</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Blog Grid Section -->
	<section class="blog-grid-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">News grid</div>
				<h2>We are here to manage your <br> finance with <span>experience</span></h2>
			</div>
			<div class="row clearfix">
			<?php
			    $sql = "SELECT * FROM blog";
			    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<!-- News Block Three -->
				<div class=\"news-block-three col-lg-4 col-md-6 col-sm-12\">
					<div class=\"inner-box wow fadeInLeft\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">
						<div class=\"image\">
							<img src=\"blogadmin/".$row["picsource"]."\" style=\"height:350px;\" />
							<a href=\"https://www.youtube.com/watch?v=kxPCFljwJws\" class=\"lightbox-image overlay-box\"><span class=\"flaticon-play-button\"></span></a>
						</div>
						<div class=\"lower-content\">
							<ul class=\"post-meta\">
								<li><span class=\"fa fa-calendar\"></span>July 25, 2019</li>
								<li><span class=\"fa fa-user\"></span>By Admin</li>
							</ul>
							<h4><a href=\"blog-single.html\">" . $row["title"]. "</a></h4>
						</div>
					</div>
				</div>";
    }
} else {
    echo "0 results";
}
			?>
				
			</div>
			
			<!--Styled Pagination-->
            <ul class="styled-pagination-two">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
            </ul>                
            <!--End Styled Pagination-->
			
		</div>
	</section>
	<!-- End Blog Grid Section -->
	<?php include('footer.php'); ?>