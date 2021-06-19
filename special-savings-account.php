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

<meta name="description" content="Consulting Finance Corporate Business - Consulting HTML Template">
<meta name="keywords" content="consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">
<meta name="author" content="Themexriver">
<title>Special Savings Account - National Savings</title>
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
				<h1>Special Savings <span>Account</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Special Savings Account</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Services Section Three-->
	<section class="services-section-three">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Services Block -->
				<div class="services-block-three style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-bar-chart"></span>
						</div>
						<h6><a href="#">Business Growth</a></h6>
						<div class="text">The argument in favor of using filler text goes some labore et dolore magna aliqua consectetur.</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-board"></span>
						</div>
						<h6><a href="#">Strategy Process</a></h6>
						<div class="text">The argument in favor of using filler text goes some labore et dolore magna aliqua consectetur.</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three style-two col-lg-4 col-md-12 col-sm-12">
					<div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-student"></span>
						</div>
						<h6><a href="#">Finance Manage</a></h6>
						<div class="text">The argument in favor of using filler text goes some labore et dolore magna aliqua consectetur.</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	
	<!-- About Section Four -->
	<section class="about-section-four">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">about us</div>
				<h2>Special Savings Account -  <span>National Savings</span></h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
				    <!-- product highlight Widget-->
                        <div class="sidebar-widget contact-widget">
                        	<div class="sidebar-title">
                                <h4>PRODUCT HIGHLIGHTS</h4>
                            </div>
							<table class="table table-hover table-bordered">
							    <tr>
							        <td>Categories:</td>
							        <td>Account</td>
							    </tr>
							    <tr>
							        <td>Product Nature</td>
							        <td>Account</td>
							    </tr>
							    
							    <tr>
							        <td>Beneficiaries</td>
							        <td>General Public</td>
							    </tr>
							    <tr>
							        <td>Maturity</td>
							        <td>3 Years</td>
							    </tr>
							   
							    <tr>
							        <td>Profit Paid</td>
							        <td>Bi Annually</td>
							    </tr>
							    <tr>
							        <td>Mode of Investment</td>
							        <td>Cheque & Cash</td>
							    </tr>
							    <tr>
							        <td>Investment Limit</td>
							        <td>Min 500 - Max No limit</td>
							    </tr>
							    
							</table>
						</div>
					<div class="inner-column">
						<div class="image-1"><img src="images/SSA_english.jpg" alt=""></div>
						<div class="image-2"><img src="images/SSA_english.jpg" alt=""></div>
					</div>
				</div>
				
				<!-- Skills Column -->
				<div class="skills-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div>
							<p>This investment scheme was launched in February 1990 with a maturity period of three years where the profit is paid on the completion of each period of six months or on completion of three years, as the case may be.</p>
						</div>
						<div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Who Can Invest?<i class="fa fa-plus pull-right"></i>
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
          <p>Special Savings Account can be opened by a Pakistani National as well as a Foreign National being an individual in his/ her name or in the name of minor(s) dependent on him/ her or by two individuals jointly in their names. Institutions may also invest employees’ related funds such as pension, gratuity, superannuation, contributory provident funds and trusty funds etc.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        How to Invest ?<i class="fa fa-plus pull-right"></i>
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
         <p>Special Savings Account (SSA) can be opened at any National Savings Centre (NSC) or Pakistan Post Office (PPO) by filling in the DA-1 Form, available free of cost from all the above issuing offices.</p>
<p><em>Documents Required with the Application Form</em></p>
<p>Adult Pakistanis</p>
<ul>
<li>A copy of the Computerized National Identity Card (CNIC)</li>
</ul>
<p>Overseas Pakistanis</p>
<ul>
<li>A copy of National Identity Card for Overseas Pakistanis (NICOP) or Pakistan Origin Card (POC)</li>
</ul>
<p>Minor</p>
<ul>
<li>A copy of Form B or Child Registration Certificate (CRC) as issued by NADRA</li>
</ul>
<p>Institutional Investors</p>
<ul>
<li>An attested copy of NTN Certificate or Institutional Registration Certificate (IRC).</li>
</ul>
<p>Foreign Nationals</p>
<ul>
<li>A copy of the Passport</li>
</ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
          Mode of Deposit<i class="fa fa-plus pull-right"></i>
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <p>The SSA can be opened by depositing cash/cheque/ draft at the issuing office. The Passbook and Withdrawal Slip shall be issued immediately against the cash payment. However, in the case of deposit through cheque the Account shall be opened from the date of realization of the cheque/draft after the receiving of clearance advice.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapsefour">
          Investment Limit<i class="fa fa-plus pull-right"></i>
        </a>
      </div>
      <div id="collapsefour" class="collapse" data-parent="#accordion">
        <div class="card-body">
            <ul>
<li>Minimum: Rs.500/-</li>
<li>No maximum investment limits</li>
<li>Deposits are required to be made in multiples of Rs.500/-</li>
</ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapsefive">
          Withdrawal of Deposit<i class="fa fa-plus pull-right"></i>
        </a>
      </div>
      <div id="collapsefive" class="collapse" data-parent="#accordion">
        <div class="card-body">
       <p>The amount can be withdrawn at any time after the date of deposit. However, no profit is payable in case the withdrawals are made before completion of 6 months of such deposit. Moreover, the amount of withdrawal shall be multiples of Rs 500/- and shall not reduce the balance to less than Rs 500/-.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapsesix">
         Rate of Return/Profit rates<i class="fa fa-plus pull-right"></i>
        </a>
      </div>
      <div id="collapsesix" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <p><a href="documents/SPECIAL-SAVINGS-CERTIFICATES-PROFIT-RATES-2-3.pdf" target="_blank" rel="noopener noreferrer">For rates click here.</a></p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseseven">
          Tax &amp; Zakat<i class="fa fa-plus pull-right"></i>
        </a>
      </div>
      <div id="collapseseven" class="collapse" data-parent="#accordion">
        <div class="card-body">
         <p>The rate of tax is deducted as follows:</p>
<ul>
<li><strong>Filers</strong>: In case the payable profit is Rs 500,000/- or above ,the rate shall be 15% on such  profit.however in case profit is less than Rs 500,000/- the rate of WHT shall be 10% of the yield/profit.</li>
<li><strong>Non-Filers</strong>: In case the payable profit is Rs 500,000/- or above ,the rate shall be 30% on such  profit.however in case profit is less than Rs 500,000/- the rate of WHT shall be 20% of the yield/profit</li>
</ul>
<p>Zakat is collected at source as per rules at the time of withdrawal of principle amount. However, it is not collected in case of reinvestment.</p>
        </div>
      </div>
    </div>
  </div>
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
	
	<!-- Video Section -->
	<section class="video-section" style="background-image:url(images/background/9.jpg)">
		<div class="auto-container">
			<div class="title">Video</div>
			<h2>See how we work with <br> touch of <span>experience</span></h2>
			<a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now" data-fancybox="gallery" data-caption=""><i class="icon flaticon-play-button" aria-hidden="true"></i><span class="ripple"></span></a>
		</div>
	</section>
	<!-- End Video Section -->
	
	<!-- Feature Section -->
	<section class="feature-section">
		<div class="auto-container">
		
			<!-- Sec Title Three -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">Why choose us</div>
						<h2>There are many companies <br> but why <span>choose us</span></h2>
					</div>
					<div class="pull-right">
						<div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</div>
					</div>
				</div>
			</div>
			
			<!--Feature Tabs-->
            <div class="feature-tabs tabs-box style-two">
                <div class="row clearfix">
                	<!--Column-->
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#feature-expert" class="tab-btn">Expert team <span>The argument in favorite of using filler to text goes some thing like this top</span></li>
                            <li data-tab="#feature-brand" class="tab-btn active-btn">Best Finance Brand <span>The argument in favorite of using filler to text goes some thing like this top</span></li>
                            <li data-tab="#feature-ideas" class="tab-btn">Best Leadership Ideas<span>The argument in favorite of using filler to text goes some thing like this top</span></li>
                        </ul>
                    </div>
                    <!--Column-->
                    <div class="col-lg-7 col-md-12 col-sm-12">
                    	<!--Tabs Container-->
                        <div class="tabs-content">
                        
                            <!-- Tab -->
                            <div class="tab" id="feature-expert">
                            	<div class="content">
									<div class="image">
										<img src="images/resource/feature.jpg" alt="">
									</div>
								</div>
							</div>
							
							<!-- Tab -->
                            <div class="tab active-tab" id="feature-brand">
                            	<div class="content">
									<div class="image">
										<img src="images/resource/feature-1.jpg" alt="">
									</div>
								</div>
							</div>
							
							<!-- Tab -->
                            <div class="tab" id="feature-ideas">
                            	<div class="content">
									<div class="image">
										<img src="images/resource/feature-2.jpg" alt="">
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Feature Section -->
	<?php include('footer.php'); ?>