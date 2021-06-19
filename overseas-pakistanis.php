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
<title>Overseas Pakistanis - National Savings</title>
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
				<h1>Overseas <span>Pakistanis</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Overseas Pakistanis</li>
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
				<h2>Overseas <span>Pakistanis</span></h2>
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
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseOne">INVESTMENT FROM ABROAD<i class="fa fa-plus pull-right"></i>
                        </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                        <p>A non resident Pakistani can make investment in National Savings Schemes from abroad by sending Cheque / Draft in any currency in favour of Officer Incharge of National Savings Centre alongwith the application form duly filled in and copies of Passport and National Identity Card. The Bank Draft got prepared in Pak rupee from abroad are cleared much earlier than those in foreign currency. It would be more appropriate if these are also payable at the same city to the National Savings Centre where the investment is intended to be made. The investment in all the National Savings Schemes is maintained and expressed in Pak rupee only. Amount received in foreign currency is converted into Pak rupee on the prevailing exchange rate through normal banking channels for investment in National Savings Schemes. Moreover, the principal and profit accrued on a certificate issued against foreign exchange received through remittance shall be payable abroad to the purchaser in foreign exchange if so desired by the investor. For the purpose the payable amount shall be converted into the desired currency at the exchange rate prevailing at the time of conversion / payment. The certificates will be dispatched through registered post on given address.</p>
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapsetwo">
                        How to encah Savings Certificates from abroad?<i class="fa fa-plus pull-right"></i>
                        </a>
                        </div>
                        <div id="collapsetwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <ul>
                                <li>The investor(s) or nominee(s), as the case may be, living abroad shall issue a Power of Attorney, authorizing any person in Pakistan giving his / her full particulars, to collect their cheques. The Power of Attorney so issued shall contain full particulars of the investment i.e. the amount, Registration No. and date of issue of the certificates, name of original holder or Account number and the concerned NSC (office of issue) and the specimen signatures of person(s) issuing it and shall be verified by the 1st or 2nd Secretary of Pakistan Embassy / Consulate General.</li>
                                <li> The Savings Certificates of any nature shall be signed on reverse by the investor(s) or nominee(s).</li>
                                <li>The investor(s) or Nominee(s) shall address an application to the Officer Incharge of the concerned Centre in Pakistan, stating therein, the complete particulars of the investment i.e. the amount, registration number & date of issue of certificates, name of original holder(s) and complete particulars of the Attorney, appointed to receive the payment.</li>
                                <li>The investor(s)/nominee(s) must send photo copies of his/her/their computerized National Identity Card(s) / Pakistan Origin Card(s) / National Identity Card for Overseas Pakistanis (NICOP), Passport and Health Insurance certificate, indicating his/her/their presence abroad duly attested by the 1st or 2nd Secretary of Pakistan Embassy / Consulate General.</li>
                                <li>The Attorney shall execute an indemnity Bond (on stamp paper of proper value) alongwith surety of an officer of BPS-17 attested by the Notary Public and countersigned by Class-1 Magistrate to the effect that he (Attorney) will deliver the cheques(s) to the issuers of the Power of Attorney (investor or the nominee(s) and that if due to misrepresentation or concealment of facts by the executants of Power of Attorney, any claim is raised by the original investor(s) or nominee(s) the attorney and the surety shall be responsible to indemnity the Government of Pakistan.</li>
                            </ul>
                        

 

 
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapse3">
                        How to get profit on Savings Certificates from abroad?<i class="fa fa-plus pull-right"></i>
                        </a>
                        </div>
                        <div id="collapse3" class="collapse" data-parent="#accordion"
                        <div class="card-body">
                            <ul>
                                <li>An investor can get profit of his certificates / accounts on the basis of Power of Attorney by authorizing any person in Pakistan giving his /her full particulars, to collect the profit in his name subject to the entire satisfaction of the Officer Incharge concerned.</li>
                                <li>The Power of Attorney so issued shall contain full particulars of the investment i.e. the amount, Registration No. and date of issue of the certificates, name of original holder and the concerned National Savings Centre and shall be verified by the 1st and 2nd Secretary of Pakistan Embassy / Consulate General in the country of his / her residence.</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="btn-group mt-3">
                      <a href="individual-investors.php" class="btn btn-primary text-light">Individual Investors</a>
                      <a href="overseas-pakistanis.php" class="btn btn-success text-light">Overseas Pakistanis</a>
                    </div>
                </div>
				</div>
				
				
				<!-- Skills Column -->
				<div class="skills-column col-lg-12 col-md-12 col-sm-12">
					<div class="inner-column">

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