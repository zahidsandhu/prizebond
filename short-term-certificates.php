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

<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Themexriver">
<title>Short Term Savings Certificates - National Savingss</title>
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
 	
    <!-- Preloader -->
 
 	<?php include('header.php'); ?>
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/8.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Service <span>details</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Services details</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar default-sidebar">
						<!-- product highlight Widget-->
                        <div class="sidebar-widget contact-widget">
                        	<div class="sidebar-title">
                                <h4>PRODUCT HIGHLIGHTS</h4>
                            </div>
							<table class="table table-hover table-bordered">
							    <tr>
							        <td>Categories:</td>
							        <td>Certificates</td>
							    </tr>
							    <tr>
							        <td>Starting Date</td>
							        <td>2012</td>
							    </tr>
							    <tr>
							        <td>Maturity</td>
							        <td>3 , 6 , 12 Months</td>
							    </tr>
							    <tr>
							        <td>Beneficiary</td>
							        <td>General Public</td>
							    </tr>
							    <tr>
							        <td>Denominations</td>
							        <td>10000/-, 50000/-, 100000/-, 500000/-, 1000000/-, 5000000/-, 10000000/-</td>
							    </tr>
							    
							    
							    <tr>
							        <td>Mode of Deposit</td>
							        <td>Cash & Cheque</td>
							    </tr>
							    <tr>
							        <td>Investment Limit</td>
							        <td>10000 Min - No Limit Max</td>
							    </tr>
							    
							</table>
						</div>
						<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <ul class="blog-cat">
                                <li><a href="defence-savings-certificates.php">Defence Savings Certificates</a></li>
                                <li><a href="behbood-savings-certificates.php">Behbood Savings Certificates
</a></li>
                                <li><a href="regular-income-certificates.php">Regular Income Certificates
</a></li>
                                <li><a href="special-savings-certificates.php">Special Savings Certificates
</a></li>
                                <li class="active"><a href="short-term-certificates.php">Short Term Savings Certificates
</a></li>
                            </ul>
                        </div>
						
						<!-- Contact Widget-->
                        <div class="sidebar-widget contact-widget">
                        	<div class="sidebar-title">
                                <h4>Contact</h4>
                            </div>
							<ul>
								<li><span class="icon flaticon-map-1"></span> 3111 West Allegheny Avenue <br> Pennsylvania 19132</li>
								<li><span class="icon flaticon-phone-receiver"></span> 1-982-782-5297 <br> 1-982-125-6378</li>
								<li><span class="icon flaticon-comment"></span> support@financ.com</li>
							</ul>
						</div>
						
						<!-- Brochures Widget-->
                        <div class="sidebar-widget brochures-widget">
                        	<div class="sidebar-title">
                                <h4>Brochures</h4>
                            </div>
							<div class="text">View our 2019 financial prospectus brochure for an easy to read guide on all of the services offer.</div>
							<ul class="files">
								<li><a href="#"><span class="fa fa-file-pdf-o"></span> Download Brochure</a></li>
								<li><a href="#"><span class="fa fa-file-word-o"></span> Characteristics</a></li>
							</ul>
						</div>
						
						<!-- Banner Widget-->
                        <div class="sidebar-widget banner-widget">
							<div class="widget-content" style="background-image:url(images/resource/service-15.jpg)">
								<div class="logo">
									<img src="images/icons/widget-logo.png" alt="" />
								</div>
								<div class="title">Securied Business with</div>
								<h2>Financ</h2>
								<a href="contact.html" class="theme-btn btn-style-seventen">Let’s start now <span class="icon flaticon-link"></span></a>
							</div>
						</div>
						
					</aside>
				</div>
				
				<!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="services-single">
						<h4>Short Term Savings Certificates

</h4>
                        <figure><img src="images/sht-1160x500 (1).jpg" class="" alt="some text"></figure>
						<div class="text">
						<p>The Government of Pakistan launched Short Term Savings Certificates (STSCs) scheme on July 1, 2012. The scheme has been specifically designed to meet the short term financial requirements of the depositors. STSCs is pledge-able and having 3-month, 6-month and 1-year maturity scheme.</p>
<p>Available denominations are:</p>
<ul>
<li>10,000/-, Rs. 50,000/-, Rs. 100,000/-, Rs. 500,000/-, Rs. 1,000,000/, Rs. 5,000,000/-, Rs. 10,000,000/-</li>
</ul>
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
          <p>All Pakistani Nationals as well as Foreign Nationals can purchase STSCs being a single adult, a minor or two adults jointly where the payments can be received either by the both jointly (Joint-A) or any one of the holders (Joint-B). An adult can also purchase STSCs on behalf of a single minor, two minors jointly or as a joint with a minor. Institutions may also invest their employees related funds such as pension, gratuity, superannuation, contributory provident fund and trusty fund etc.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        How to Purchase?<i class="fa fa-plus pull-right"></i>
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
         <p>STSC can be purchased from any National Savings Centre (NSC) by filling in the SC-1 (Application form), available free of cost from all NSCs.</p>
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
<p>To download application form in editable Adobe Acrobat format, please click here, <a href="documents/SC-1.pdf" target="_blank" rel="noopener noreferrer">please click here.</a></p>
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
          <p>STSC can be purchased by depositing cash at the Issuing Office or by presenting a cheque/ draft/ pay-order. The Certificate shall be issued immediately against the cash payment. However, in the case of deposit through cheque/ draft/ pay-order, the Certificate shall be issued with effect from the date of realization of the cheque/ draft/ pay-order after receiving the clearance advice.</p>
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
<li>Minimum: Rs. 10,000/-</li>
<li>No maximum investment limits</li>
</ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapsefive">
          Encashment<i class="fa fa-plus pull-right"></i>
        </a>
      </div>
      <div id="collapsefive" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <p>STSCs shall be encashed at the office of the issue but not earlier than one month from the date of issuance. However, profit shall be due on completion of the maturity period.</p>
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
          <p><a href="documents/SHORT-TERM-SAVINGS-CERTIFICATES-PROFIT-RATES-3-1-2.pdf" target="_blank" rel="noopener noreferrer">For the rates click here.</a></p>
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
          <p>The rate of tax to be deducted shall be as follows:</p>
<ul>
<li><strong>Filers</strong>: In case the payable profit is Rs 500,000/- or above ,the rate shall be 15% on such  profit.however in case profit is less than Rs 500,000/- the rate of WHT shall be 10% of the yield/profit.</li>
<li><strong>Non-Filers</strong>: In case the payable profit is Rs 500,000/- or above ,the rate shall be 30% on such  profit.however in case profit is less than Rs 500,000/- the rate of WHT shall be 20% of the yield/profit.</li>
<li></li>
</ul>
<p><strong>The investment made in STSCs shall be exempted from collection of Zakat.</strong></p>
        </div>
      </div>
    </div>
  </div>
						<!-- Services Gallery -->
						<div class="services-gallery">
							<div class="services-carousel owl-carousel owl-theme">
								<div class="slide">
									<div class="image">
										<img src="images/resource/service-16.jpg" alt="">
									</div>
								</div>
								<div class="slide">
									<div class="image">
										<img src="images/resource/service-17.jpg" alt="">
									</div>
								</div>
								<div class="slide">
									<div class="image">
										<img src="images/resource/service-16.jpg" alt="">
									</div>
								</div>
								<div class="slide">
									<div class="image">
										<img src="images/resource/service-17.jpg" alt="">
									</div>
								</div>
								<div class="slide">
									<div class="image">
										<img src="images/resource/service-16.jpg" alt="">
									</div>
								</div>
								<div class="slide">
									<div class="image">
										<img src="images/resource/service-17.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						
						<!--Services Info Tabs-->
                        <div class="Services-info-tabs">
                            <!--Service Tabs-->
                            <div class="service-tabs tabs-box">
                            
                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-audit" class="tab-btn active-btn">Audit</li>
                                    <li data-tab="#prod-strategy" class="tab-btn">Strategy</li>
                                    <li data-tab="#prod-sustainability" class="tab-btn">Sustainability</li>
                                </ul>
                                
                                <!--Tabs Container-->
                                <div class="tabs-content">
                                    
                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="prod-audit">
                                        <div class="content">
											<div class="text">
												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
												<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun tur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
											</div>
										</div>
									</div>
									
									<!--Tab-->
                                    <div class="tab" id="prod-strategy">
                                        <div class="content">
											<div class="text">
												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
												<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun tur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
											</div>
										</div>
									</div>	
									
									<!--Tab-->
                                    <div class="tab" id="prod-sustainability">
                                        <div class="content">
											<div class="text">
												<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
												<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun tur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
						<div class="row clearfix">
							
							<!-- Services Block Two -->
							<div class="services-block-two col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image">
										<img src="images/resource/service-1.jpg" alt="" />
										<div class="overlay-box">
											<div class="overlay-inner">
												<div class="icon-box">
													<span class="icon flaticon-analytics"></span>
												</div>
												<h5><a href="#">Financial Management <br> and Consulting</a></h5>
											</div>
										</div>
										<div class="overlay-box-two">
											<div class="overlay-inner-two">
												<div class="content">
													<div class="icon-box">
														<span class="icon flaticon-target"></span>
													</div>
													<div class="text">The argument in favor of using filler text goes something like this</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Services Block Two -->
							<div class="services-block-two col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image">
										<img src="images/resource/service-2.jpg" alt="" />
										<div class="overlay-box">
											<div class="overlay-inner">
												<div class="icon-box">
													<span class="icon flaticon-statistics"></span>
												</div>
												<h5><a href="#">Market Research <br> and Analysis</a></h5>
											</div>
										</div>
										<div class="overlay-box-two">
											<div class="overlay-inner-two">
												<div class="content">
													<div class="icon-box">
														<span class="icon flaticon-statistics"></span>
													</div>
													<div class="text">The argument in favor of using filler text goes something like this</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						
						<!-- More Services -->
						<div class="more-services">
							<div class="clearfix">
								<div class="pull-left">
									<a href="#"><span class="fa fa-angle-double-left"></span> Previous Service</a>
								</div>
								<div class="pull-right">
									<a href="#">Newer Service <span class="fa fa-angle-double-right"></span></a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!--End Sidebar Page Container-->
	<?php include('footer.php'); ?>