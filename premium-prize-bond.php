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
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Premium Prize Bond - National Savings</title>
<meta name="description" content="Consulting Finance Corporate Business - Consulting HTML Template">
<meta name="keywords" content="consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">
<meta name="author" content="Themexriver">

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
				<h1>Premium Prize Bond <span>Account</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Premium Prize Bond</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	<!-- About Section Four -->
	<section class="about-section-four portfolio-section-three masonry-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">about us</div>
				<h2>Premium Prize Bond -  <span>National Savings</span></h2>
			</div>
			<!--Isotope Galery-->
            <div class="sortable-masonry">
                
                <!--Filter-->
                <div class="filters clearfix">
                	
                	<ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All</li>
                        <li class="filter" data-role="button" data-filter=".business">Business</li>
                        <li class="filter" data-role="button" data-filter=".consulting">Consulting</li>
                        <li class="filter" data-role="button" data-filter=".insurance">Insurance</li>
                        <li class="filter" data-role="button" data-filter=".finance">Finance</li>
						<li class="filter" data-role="button" data-filter=".others">Others</li>
                    </ul>
                    
                </div>
                
                <div class="items-container row clearfix">
					
					<!-- Project Block Two -->
					<div class="project-block-two masonry-item all finance col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="images/gallery/25.jpg" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title">Sustainability</div>
										<h5><a href="portfolio-single.html">Business Management</a></h5>
										<a href="images/gallery/25.jpg" data-fancybox="gallery-4" data-caption="" class="plus flaticon-plus-symbol"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Project Block -->
					<div class="project-block-two masonry-item all consulting others business col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="images/gallery/26.jpg" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title">Sustainability</div>
										<h5><a href="portfolio-single.html">Business Management</a></h5>
										<a href="images/gallery/26.jpg" data-fancybox="gallery-4" data-caption="" class="plus flaticon-plus-symbol"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Project Block -->
					<div class="project-block-two masonry-item all business insurance col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="images/gallery/27.jpg" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title">Sustainability</div>
										<h5><a href="portfolio-single.html">Business Management</a></h5>
										<a href="images/gallery/27.jpg" data-fancybox="gallery-4" data-caption="" class="plus flaticon-plus-symbol"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Project Block -->
					<div class="project-block-two masonry-item all finance consulting col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="images/gallery/28.jpg" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title">Sustainability</div>
										<h5><a href="portfolio-single.html">Business Management</a></h5>
										<a href="images/gallery/28.jpg" data-fancybox="gallery-4" data-caption="" class="plus flaticon-plus-symbol"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Project Block -->
					<div class="project-block-two masonry-item all finance consulting col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="images/gallery/29.jpg" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title">Sustainability</div>
										<h5><a href="portfolio-single.html">Business Management</a></h5>
										<a href="images/gallery/29.jpg" data-fancybox="gallery-4" data-caption="" class="plus flaticon-plus-symbol"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="col-sm-12">
				    <figure>
				        <img src="images/Title_PPBFinal2.jpg" alt="some text" title="some text" class="d-block mx-auto">
				    </figure>
				</div>
				
				
				<!-- Skills Column -->
				<div class="skills-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">
					    <h4>SALIENT FEATURES</h4>
					    <ul style="">
					        <li>Profit Rate is 1.965% bi-annual.</li>
					        <li>Available in Rs 40,000/- Denomination.</li>
					        <li>Registered in the name of investor.</li>
					        <li>Quarterly Prize Money Draws as well as Bi-annual Profit Payment.</li>
					        <li>For Individuals, Public and Private Sector Institutions except Banks, Insurance Companies and Mutual funds.</li>
					        <li>Direct Credit of Prize Money and Profit in Investors Bank Account.</li>
					        <li>No Application Forms required for claiming prize money  & profit.</li>
					        <li>Highest prize of Rs 80,000,000/-.</li>
					        <li>Unlimited Investment and Tenure.</li>
					        <li>WHT applicable & Exempt from Zakat.</li>
					        <li>Transferable & Pledge-able.</li>
					        <li>Can be purchased through Cash, Cheque, Pay-Order and Bank Draft</li>
					        <li>Can be purchased from offices of State Bank of Pakistan Banking Services Corporations.</li>
					        
					   </ul>
					   <h4>DRAW SCHEDULE</h4>
					   <table class="table table-bordered">
					       <thead class="table-dark">
					       <tr>
    					       <th>Date of Draw</th>
    					       <th>Place of Draw</th>
					       </tr>
					       <thead>
					       <tbody class="table-hover">
					       <tr>
    					       <td>11-03-2019</td>
    					       <td>SBP BSC, Rawalpindi</td>
					       </tr>
					       <tr>
    					       <td>10-06-2019</td>
    					       <td>SBP BSC,Peshawar</td>
					       </tr>
					       <tr>
    					       <td>10-09-2019</td>
    					       <td>SBP BSC, Muzaffarabad</td>
					       </tr>
					       <tr>
    					       <td>10-12-2019</td>
    					       <td>SBP BSC, Quetta</td>
					       </tr>
					       </tbody>
					   </table>
					       <p>*In case of public holiday the draw will be conducted on next working day.</p>
					       
					   <h4>Following documents are required for Premium Prize Bond Sale Application.</h4>
					    <ul style="">
					        <li>Copy of CNIC.</li>
					        <li>Account Maintenance Certificate ( A/C title , IBAN number , status of a/c , Bank & Branch Name).</li>
					        <li>Tax Certificate in case of Filer.</li>
					        <li>Nominee CNIC detail.
</li>
					        
					        
					   </ul>
					   <p>Senior Citizens and Ladies are requested to contact the Counter Official without waiting for their turn.</p>

<p><strong>Download Application Form for Purchase of Premium Prize for Individual Only.</strong> <a href="">Click here</a></p>

<p><strong>Download Application Form for Purchase of Premium Prize Bond for Corporate Only.</strong> <a href="">Click here</a></p>
<img class="d-block mx-auto" src="images/list-of-commercial-banks0001.jpg">
<img class="d-block mx-auto" src="images/list-of-commercial-banks0002.jpg">
<img class="d-block mx-auto" src="images/list-of-commercial-banks0003.jpg">
<img class="d-block mx-auto" src="images/list-of-commercial-banks0004.jpg">
						<!--Skills-->
						<div class="skills style-two">
							
							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Finance</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>
								</div>
							</div>
							
							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Business</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="90">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="90"></div></div>
								</div>
							</div>
							
							<!--Skill Item-->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Investment</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="93">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="93"></div></div>
								</div>
							</div>
							
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End About Section Four -->
	
	
	<?php include('footer.php'); ?>