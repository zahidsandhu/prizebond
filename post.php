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
				<h1>Blog <span>details</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Blog details</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-single">
						<div class="inner-box">
							<div class="image">
								<img src="images/resource/news-18.jpg" alt="" />
							</div>
							<div class="lower-content">
								<ul class="post-meta">
									<li><span class="fa fa-calendar"></span>July 25, 2019</li>
									<li><span class="fa fa-user"></span>By Admin</li>
									<li><span class="fa fa-list"></span>Uncategorized</li>
									<li><span class="fa fa-comment"></span>(3) Comment</li>
								</ul>
								<h4>Aliquam augue eros, for pulvinar et rutrum non.</h4>
								<div class="text">
									<p>The man, who is in a stable condition in hospital, has "potentially life-changing injuries" after the overnight attack in Garvagh, County Londonderry. He was shot in the arms and legs."What sort of men would think it is accepttable to subject a young girl to this level of brutality and violence?</p>
									<p>"Every child has the right to feel safe and protected in their own home - how is this poor child going to sleep tonight or in coming nights? What are the long term effects on her going to be?"</p>
									<p>"It's quite obvious the hypocrites who carried out this dreadful attack don't care at all about the children in their community. I wonder how they would feel if their own child witnessed such a level of violence?</p>
									<p>"There is absolutely no justification for an attack like this in our communities and we must all work together to bring those responsible to justice and to stop this from happening to another child."</p>
									<p>Earlier this month, <a href="#">the PSNI launched a hard-hitting advertisement campaign</a> aimed at changing public attitudes to paramilitary attacks.</p>
									<div class="news-gallery">
										<div class="row clearfix">
											<div class="column col-lg-6 col-md-6 col-sm-12">
												<div class="image">
													<img src="images/resource/news-16.jpg" alt="" />
												</div>
											</div>
											<div class="column col-lg-6 col-md-6 col-sm-12">
												<div class="image">
													<img src="images/resource/news-17.jpg" alt="" />
												</div>
											</div>
										</div>
									</div>
									<h5>A Kentucky woman who was accused last year.</h5>
									<p>The intruders chased the girl in the house and threatened her when she hid from them, according to the PSNI Limavady Facebook page.</p>
									<p>"She came out petrified with her Piggy Bank, HER PIGGY BANK! hoping that the men would take it and leave her dad alone," one outraged officer wrote.</p>
									<blockquote>
										<div class="quote-icon flaticon-left-quote"></div>
										<div class="quote-text">What sort of men would think it is acceptable to subject a young girl to this level of brutality and violence? an attack like this in ourcommunities and we must all work together.</div>
									</blockquote>
									<p>The intruders chased the girl in the house and threatened her when she hid from them, according to the PSNI Limavady Facebook page.</p>
									<p>"She came out petrified with her Piggy Bank, HER PIGGY BANK! hoping that the men would take it and leave her dad alone," one outraged officer wrote.</p>
								</div>
								
							</div>
						</div>
						
						<!--post-share-options-->
						<div class="post-share-options">
							<div class="post-share-inner clearfix">
								<div class="pull-left post-tags"><span>Tags: </span><a href="#">Business</a> <a href="#">Life</a> <a href="#">Applin</a> <a href="#">Techniq</a></div>
								<ul class="pull-right social-links clearfix">
									<li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
									<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
									<li class="google-plus"><a href="#" class="fa fa-google-plus"></a></li>
									<li class="dribble"><a href="#" class="fa fa-dribbble"></a></li>
								</ul>
							</div>
						</div>
						
						<!-- New Posts -->
						<div class="new-posts">
							<div class="clearfix">
								<a class="prev-post pull-left" href="#"><span class="fa fa-angle-double-left"></span> Previous Post</a>
								<a class="next-post pull-right" href="#">Next Post <span class="fa fa-angle-double-right"></span></a>
							</div>
						</div>
						
						<!--Comments Area-->
						<div class="comments-area">
							<div class="group-title">
								<h6>Comments</h6>
							</div>
							<!--Comment Box-->
							<div class="comment-box">
								<div class="comment">
									<div class="author-thumb"><img src="images/resource/author-8.jpg" alt=""></div>
									<div class="comment-inner clearfix">
										<div class="comment-info clearfix"><strong>Riva Collins</strong><div class="comment-time"> November 19, 2019 at 11:00 am </div></div>
										<div class="text">It’s no secret that the digital industry is booming. From exciting startups to need ghor global and brands, companies are reaching out.</div>
										<a class="comment-reply" href="#">Reply <span class="fa fa-angle-right"></span></a>
									</div>
								</div>
							</div>

							<!--Comment Box-->
							<div class="comment-box">
								<div class="comment">
									<div class="author-thumb"><img src="images/resource/author-5.jpg" alt=""></div>
									<div class="comment-inner clearfix">
										<div class="comment-info clearfix"><strong>Obila Doe</strong><div class="comment-time"> November 22, 2019 at 10:00 pm </div></div>
										<div class="text">It’s no secret that the digital industry is booming. From exciting startups to need ghor hmiu global and brands, companies are reaching out.</div>
										<a class="comment-reply" href="#">Reply <span class="fa fa-angle-right"></span></a>
									</div>
								</div>
							</div>

						</div>
						<!--End Comments Area-->
						
						<!-- Comment Form -->
						<div class="comment-form">
							<div class="group-title">
								<h6>Post A Comment</h6>
								<div class="group-text">Your email address will not be published *</div>
							</div>
							<!--Comment Form-->
							<form method="post" action="blog.html">
								<div class="row clearfix">
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea name="message" placeholder="your comment"></textarea>
									</div>
								
									<div class="col-lg-4 col-md-4 col-sm-4 form-group">
										<input type="text" name="username" placeholder="name*" required>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-4 form-group">
										<input type="email" name="email" placeholder="email*" required>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-4 form-group">
										<input type="text" name="text" placeholder="website*" required>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-12 form-group">
										<button class="theme-btn submit-btn" type="submit" name="submit-form">Post Comment</button>
									</div>
									
								</div>
							</form>
								
						</div>
						<!--End Comment Form -->
						
					</div>
				</div>
				
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar default-sidebar">
						
						<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter Your Keyword..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
						
						<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title-two">
                                <h4>Categories</h4>
                            </div>
                            <ul class="blog-cat-two">
                                <li><a href="#">Consulting <span>(3)</span></a></li>
                                <li><a href="#">Technology <span>(4)</span></a></li>
                                <li><a href="#">Life style <span>(8)</span></a></li>
                            </ul>
                        </div>
						
						<!-- Popular Post Widget-->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title-two">
                                <h4>Recent News</h4>
                            </div>
							
							<article class="post">
								<figure class="post-thumb"><img src="images/resource/post-thumb-1.jpg" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
								<div class="text"><a href="blog-single.html">Business structured nontp frank team</a></div>
								<div class="post-info">July 25, 2019</div>
							</article>
							
							<article class="post">
								<figure class="post-thumb"><img src="images/resource/post-thumb-2.jpg" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
								<div class="text"><a href="blog-single.html">Meetups and parties at night for every...</a></div>
								<div class="post-info">July 26, 2019</div>
							</article>
							
							<article class="post">
								<figure class="post-thumb"><img src="images/resource/post-thumb-3.jpg" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
								<div class="text"><a href="blog-single.html">Always found him speakingas many...</a></div>
								<div class="post-info">July 25, 2019</div>
							</article>
							
						</div>
						
						<!--Archive Widget-->
                        <div class="sidebar-widget sidebar-blog-category archive-widget">
                            <div class="sidebar-title-two">
                                <h4>Archives</h4>
                            </div>
                            <ul class="blog-cat-two">
                                <li><a href="#">January 2019 <span>(3)</span></a></li>
                                <li><a href="#">February 2019 <span>(2)</span></a></li>
                                <li><a href="#">May 2019 <span>(6)</span></a></li>
                            </ul>
                        </div>
						
						<!--Gallery Widget-->
                        <div class="sidebar-widget instagram-widget">
                            <div class="sidebar-title-two">
                                <h4>Gallery</h4>
                            </div>
							<div class="images-outer clearfix">
                                <!--Image Box-->
                                <figure class="image-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img src="images/gallery/instagram-1.jpg" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img src="images/gallery/instagram-2.jpg" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img src="images/gallery/instagram-3.jpg" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img src="images/gallery/instagram-4.jpg" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img src="images/gallery/instagram-5.jpg" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img src="images/gallery/instagram-6.jpg" alt=""></figure>
                            </div>
						</div>
						
						<!-- Tags Widget-->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title-two">
                                <h4>Tags</h4>
                            </div>
							<a href="#">Apps</a>
							<a href="#">Cloud</a>
							<a href="#">Life style</a>
							<a href="#">Hosting</a>
							<a href="#">Business</a>
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
				
			</div>
		</div>
	</div>
	<!--End Sidebar Page Container-->
	
	<!-- Call To Action Two -->
	<section class="call-to-action-two">
		<div class="auto-container">
			<div class="clearfix">
				
				<div class="pull-left">
					<h2>Request for <span>quote</span></h2>
				</div>
				<div class="pull-right">
					<a href="contact.html" class="theme-btn btn-style-five">Request now <span class="icon fa fa-arrow-right"></span></a>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Call To Action Two -->
	<!-- End Blog Grid Section -->
	<?php include('footer.php'); ?>