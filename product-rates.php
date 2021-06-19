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
<title>Profit Rates - National Savings</title>
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
				<h1>Profit Rates <span>- National Savings </span></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Profit Rates - National Savings</li>
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
                                <li><a href="short-term-certificates.php">Short Term Savings Certificates
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
						<h4>Profit Rates - National Savings

</h4>
                        <h5><strong>Certificates</strong></h5>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home">DSC</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">BSC</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">RIC</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu3">SSC</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu4">STSC</a>
                          </li>
                        </ul>
                        
                        <!-- Tab panes -->
                        
                        <div class="tab-content p-5 text-center">
                            
                          <?php $query_dsc= mysqli_query($con,"SELECT *FROM product WHERE product_rates='dsc' "); 
                          $dsc_rows=mysqli_fetch_array($query_dsc);
                        ?>
                        <div class="tab-pane container active text-center" id="home"><p>Defense Saving Certificate Historical Profit Rates</p>
                          <?php if($query_dsc->num_rows > 0){?>
                         
                           
                                <a href="../profit-rates-file/<?= $dsc_rows['rates_file']?>" download>Click To Download</a>
                             
                                <?php }else{ echo "<span class='text-primary'>Admin did not uploaded any file</span>";}?>
                        </div>
                        <?php $query_bsc= mysqli_query($con,"SELECT *FROM product WHERE product_rates='bsc' "); 
                          $bsc_rows=mysqli_fetch_array($query_bsc);
                        ?>
                        <div class="tab-pane container fade" id="menu1">
                              <p>Behbood Savings Certificate Historical Profit Rates</p>
                         <?php if($query_bsc->num_rows > 0){?>
                          
                              <a href="../profit-rates-file/<?= $bsc_rows['rates_file']?>" download>Click To Download</a>
                          
                           <?php }else{ echo "<span class='text-primary'>Admin did not uploaded any file</span>";}?>
                     </div>
                     <?php $query_ric= mysqli_query($con,"SELECT *FROM product WHERE product_rates='ric' "); 
                          $ric_rows=mysqli_fetch_array($query_ric);
                        ?>
                         <div class="tab-pane container fade" id="menu2">
                              <p>Regular Income Certificate Historical Profit Rates</p>
                            <?php if($query_ric->num_rows > 0){?>
                         
                               <a href="../profit-rates-file/<?= $ric_rows['rates_file']?>" download>Click To Download</a>
                         
                            <?php }else{ echo "<span class='text-primary'>Admin did not uploaded any file</span>";}?>
                        </div>
                         <?php $query_ssc= mysqli_query($con,"SELECT *FROM product WHERE product_rates='ssc' "); 
                          $ssc_rows=mysqli_fetch_array($query_ssc);
                        ?>
                        <div class="tab-pane container fade" id="menu3">
                              <p>Special Savings Certificate Registered Historical Profit Rates</p>
                            <?php if($query_ssc->num_rows){?>
                          
                              <a href="../profit-rates-file/<?= $ssc_rows['rates_file']?>" download>Click To Download</a>
                        
                         <?php } else{ echo "<span class='text-primary'>Admin did not uploaded any file</span>";}?>
                        </div>
                          <?php $query_stsc= mysqli_query($con,"SELECT *FROM product WHERE product_rates='stsc' "); 
                          $stsc_rows=mysqli_fetch_array($query_stsc);
                        ?>
                         <div class="tab-pane container fade" id="menu4"><p>Short Term Savings Certificate Historical Profit Rates</p>
                          <?php if($query_stsc->num_rows > 0){?>
                         
                          <a href="../profit-rates-file/<?= $stsc_rows['rates_file']?>" download>Click To Download</a>
                          

                          <?php }else{ echo "<span class='text-primary'>Admin did not uploaded any file</span>";} ?>
                          </div>
                        </div>
                        
                        <h5><strong>Accounts</strong></h5>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home2">SA</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu12">PBA</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu22">SSA</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu32">SFWA</a>
                          </li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <?php $query_sa= mysqli_query($con,"SELECT *FROM product WHERE product_rates='sa' "); 
                          $sa_rows=mysqli_fetch_array($query_sa);
                        ?>
                        <div class="tab-content p-5 text-center">
                          <div class="tab-pane container active text-center" id="home2"><p>Savings Account Historical Profit Rates</p>
                          <?php if($query_sa->num_rows > 0){?>
                               <a href="../profit-rates-file/<?= $sa_rows['rates_file']?>" download>Click To Download</a>
                         <?php }else{ echo "<span class='text-primary'>Admin did not uploaded any file</span>";}  ?>
                          </div>
                          <?php $query_pba= mysqli_query($con,"SELECT *FROM product WHERE product_rates='pba' "); 
                          $pba_rows=mysqli_fetch_array($query_pba);
                        ?>
                          <div class="tab-pane container fade" id="menu12">
                              <p>Pensioners Benifit Account Historical Profit Rates</p>
                              <?php if($query_pba->num_rows > 0){?>
                               <a href="../profit-rates-file/<?= $pba_rows['rates_file']?>" download>Click To Download</a>
                         <?php }else{ echo "<span class='text-primary'>Admin did not uploaded any file</span>";}  ?>
                          </div>
                           <?php $query_ssa= mysqli_query($con,"SELECT *FROM product WHERE product_rates='ssa' "); 
                          $ssa_rows=mysqli_fetch_array($query_ssa);
                        ?>
                          <div class="tab-pane container fade" id="menu22">
                              <p>Special Savings Account Historical Profit Rates</p>
                              <?php if($query_ssa->num_rows > 0){?>
                               <a href="../profit-rates-file/<?= $ssa_rows['rates_file']?>" download>Click To Download</a>
                         <?php }else{ echo "<span class='text-primary'>Admin did not uploaded any file</span>";}  ?>
                          </div>
                           <?php $query_sfwa= mysqli_query($con,"SELECT *FROM product WHERE product_rates='sfwa' "); 
                          $sfwa_rows=mysqli_fetch_array($query_sfwa);
                        ?>
                          <div class="tab-pane container fade" id="menu32">
                              <p>Shuhadas Family Welfare Historical Profit Rates</p>
                              <?php if($query_sfwa->num_rows > 0){?>
                               <a href="../profit-rates-file/<?= $sfwa_rows['rates_file']?>" download>Click To Download</a>
                         <?php }else{ echo "<span class='text-primary'>Admin did not uploaded any file</span>";}  ?>
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
	
	<!--Main Footer-->
    <footer class="main-footer">
    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
						
                        	<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
										<a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
									</div>
									<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
									<ul class="list-style-two">
										<li><span class="icon fa fa-phone"></span> +123 (4567) 890</li>
										<li><span class="icon fa fa-envelope"></span> info@financ.com</li>
										<li><span class="icon fa fa-home"></span>380 St Kilda Road, Melbourne <br> VIC 3004, Australia</li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>Links</h4>
									<ul class="list-link">
										<li><a href="">Home</a></li>
										<li><a href="">Services</a></li>
										<li><a href="">About us</a></li>
										<li><a href="">Testimonials</a></li>
										<li><a href="">News</a></li>
										<li><a href="">Contact</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					
					<!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
						
                        	<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>Support</h4>
									<ul class="list-link">
										<li><a href="">Contact Us</a></li>
										<li><a href="">Submit a Ticket</a></li>
										<li><a href="">Visit Knowledge Base</a></li>
										<li><a href="">Support System</a></li>
										<li><a href="">Refund Policy</a></li>
										<li><a href="">Professional Services</a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget gallery-widget">
									<h4>Gallery</h4>
									<div class="widget-content">
										<div class="images-outer clearfix">
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-1.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-2.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-3.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-4.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-5.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/6.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-6.jpg" alt=""></a></figure>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="row clearfix">
					
					<!-- Copyright Column -->
					<div class="copyright-column col-lg-6 col-md-6 col-sm-12">
						<div class="copyright">2019 &copy; All rights reserved by <a href="#">Themexriver</a></div>
					</div>
					
					<!-- Social Column -->
					<div class="social-column col-lg-6 col-md-6 col-sm-12">
						<ul>
							<li class="follow">Follow us: </li>
							<li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
							<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
							<li><a href="#"><span class="fa fa-google-plus-square"></span></a></li>
							<li><a href="#"><span class="fa fa-rss-square"></span></a></li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/main.js"></script>

</body>
</html>