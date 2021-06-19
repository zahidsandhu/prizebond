<?php
ob_start();
session_start();
include "apps/config.php";
include "apps/functions.php";
if (isset($_SESSION["uid"])){
	$userData=user_data($_SESSION["uid"]);
}else{
	$userData=array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta https-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Prize Bond List 2019,National Savings,Bond Guess Papers</title>
<meta name="description" content="Prizebondlucky.net is Pakistani Website site Provides all kind of Prize Bond, nbp, state bank of pakistan,national savings, Guess Paper, Prize Bond List & Prize Bond Results, schedule, formula, photo state paper." />
<meta name="abstract" content="All About Pakistan, Prize bond, Guess papers, , Results."/>
<meta https-equiv="content-type" content="en" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="https://prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="https://prizebondlucky.net"/>
<meta name="Copyright" content="2017"/>
<meta name="designer" content="https://prizebondlucky.net" />
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
.self-style-a-tag{
    position: relative;margin-left: 216px;margin-top: 138px;
    /*content:"abc";*/
   
}
td.span-hide span {
    display: none;
}
td.span-hide img {
    margin-left:10px;
}
td.img-heid img{
    display: none;
}

</style>
 
</head>
<body>
	<div class="page-wrapper">
    <?php include('header.php'); ?>
		<!-- Services Section Three-->
	<section class="services-section-three">
		<div class="auto-container">
			<div class="row clearfix">
			    
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
				    
					<div class="inner-box wow bounceIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
							<span class="icon flaticon-bar-chart"></span>
						</div>
                        <?php 
                        $no=drawno();
                        $result=mysqli_query($con,"select * from list order by id desc limit $no");
                        while ($row=mysqli_fetch_array($result)){
                         $draw=$row["draw"];
                         $explode=explode("break",$row["numbers"]);
                         $first=$explode[0];
                         $second=$explode[2];
                         $id=$row["id"];
                         $link=$row["link"]."-$id";
                        ?>
						


                    <h6>Prize bond Draw Result <?php echo $draw; ?></h6>

			<table class="table">
				<tr>
					<td>First</td>
					<td><?php echo $first; ?></td>
				</tr>
				<tr>
					<td>Second</td>
					<td><?php echo $second; ?></td>
				</tr>
				<tr>
					<td colspan="2">
					<a href="prizebondlist.php?list=<?php echo $link; ?>" class="btn btn-link">Full Draw Result</a> | <a href="prizebondlist.php" class="btn btn-link">Previous Result</a>
					</td>
				</tr>
  </table>
						
						
					</div>
				</div>
				
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-12 col-sm-12">
					<div class="inner-box wow bounceIn" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-student"></span>
						</div>
						<?php
}
$result=mysqli_query($con,"select * from hint");
$row=mysqli_fetch_array($result);
?>	
						<h6>Prize bond Latest Draw Hints <?php echo $row["no"]; ?></h6>
                        <table class="table">
                            <tr>
                            <td>Open</td>
                            <td><?php echo $row["open"]; ?></td>
                            </tr>
                            <tr>
                            <td>Close</td>
                            <td><?php echo $row["close"]; ?></td>
                            </tr>
                            <tr>
                            <td>Center</td>
                            <td><?php echo $row["center"]; ?></td>
                            </tr>
                        </table>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="searchprize-sec">
	    <div class="auto-container">
	        <div class="row">
	            <div class="col-md-9 col-sm-12 mx-auto">
	                <h3 class="text-center"><?php
	$result=mysqli_query($con,"select * from list order by id desc");
	$row=mysqli_fetch_array($result);
	$date=$row["dat"];
	$draw=$row["draw"];
	echo "Search Prize bond Updated with $date Draw $draw result";
	?></h3>
    <form id="searchForm" name="searchForm" action="search.php" method="post">
    <div class="form-group">
        <label for="search_words_field">Bond</label>
        <select class="form-control" id='search_words_field' name="bond">
            <?php
            $result=mysqli_query($con,"select * from list order by id desc");
            $row=mysqli_fetch_array($result);
            $draw=$row["draw"];
            ?>
            <option value="200" <?php  if ($draw=="200"){echo "selected='selected'";}  ?>>200</option>
            <option value="40000" <?php  if ($draw=="40000"){echo "selected='selected'";}  ?>>40000</option>
            <option value="7500" <?php  if ($draw=="7500"){echo "selected='selected'";}  ?>>7500</option>
            <option value="750" <?php  if ($draw=="750"){echo "selected='selected'";}  ?>>750</option>
            <option value="15000" <?php  if ($draw=="15000"){echo "selected='selected'";}  ?>>15000</option>
            <option value="1500" <?php  if ($draw=="1500"){echo "selected='selected'";}  ?>>1500</option>
            <option value="25000" <?php  if ($draw=="25000"){echo "selected='selected'";}  ?>>25000</option>
            <option value="100" <?php  if ($draw=="100"){echo "selected='selected'";}  ?>>100</option>
        </select>
    </div>
    <div class="form-group">
        <label for="tid_field">6 Digit Bond:</label>
        <input type="text"  name="no" placeholder="Example : 123456,654321,876589" class="form-control">
    </div>
    <div class="form-group row">
    	<div class="col-sm-6">
    	<label for="tid_field">Start 6 Digit Bond Seriese:</label>
    	<input type="text"  name="startno" placeholder="Example : 123451" class="form-control">
    	</div>
    	<div class="col-sm-6">
    	<label for="tid_field">End 6 Digit Bond Seriese:</label>
    	<input type="text"  name="endno" placeholder="Example : 123459" class="form-control">
    	</div>
    </div>
    <div class="form-group">
        <input value="Search" id="searchFormSubmit" type="submit" name="search" class="form-control btn btn-outline-primary"/>
    </div>
    </form>
	                <h4>Prize Bond Theme Provides by Government of Pakistan</h4>
	                <div class="text-justify">
	                    <p>It's the best opportunity to attempt your luck with the astounding venture of it. Many reasons and speculations would put your mind over the possibility that you should place yourself into the process of the nbp opportunity attributable to our diverse system of mechanism and preparing data. As we talk about the investment, at that point for such a large number of the general population prize bond are removed to be a standout amongst the essential vehicles without a doubt.</p>
	                </div>
	            
	            </div>
	        </div>
	    </div>
	</section>
<!-- About Section Two -->
	<section class="about-section-two">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Video Column -->
				<div class="video-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<!--Video Box-->
                        <div class="video-box">
                            <figure class="image">
                                <img src="images/resource/video-img.jpg" alt="">
                            </figure>
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-button"></span></a>
                        </div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<h3>The standard Lorem Ipsum passage,<br> used <span>since the 1500s</span></h3>
						<div class="text">
							<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
						</div>
						<a href="#" class="theme-btn btn-style-three">About us</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<!-- Services Section Four-->
	<section class="services-section-four">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="clearfix">
					<div class="pull-left">
						<h2>Section 1.10.32 of "de Finibus Bonorum et Malorum",<br> written by <span>Cicero in 45 BC</span></h2>
					</div>
					<div class="pull-right">
						<div class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </div>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				
				<!-- Services Block Four -->
				<div class="services-block-four col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/service-3.jpg" alt="">
							<div class="overlay-box">
								<div class="content">
									<div class="icon-box">
										<span class="icon flaticon-statistics-1"></span>
									</div>
									<h6>Business Strategy and <br> Planning</h6>
								</div>
							</div>
							
							<div class="overlay-box-two">
								<div class="overlay-inner-two">
									<div class="content">
										<div class="icon-box">
											<span class="icon flaticon-statistics-1"></span>
										</div>
										<h6><a href="services-single.html">Business Strategy and <br> Planning</a></h6>
										<div class="text">The argument in favor of the using filler text goes some of thing like this</div>
										<a class="read-more" href="services-single.html">Let’s start <span class="fa fa-angle-double-right"></span></a>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>	
				
				<!-- Services Block Four -->
				<div class="services-block-four col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/service-4.jpg" alt="">
							<div class="overlay-box">
								<div class="content">
									<div class="icon-box">
										<span class="icon flaticon-target-1"></span>
									</div>
									<h6>Market Research and <br> Business Planning</h6>
								</div>
							</div>
							
							<div class="overlay-box-two">
								<div class="overlay-inner-two">
									<div class="content">
										<div class="icon-box">
											<span class="icon flaticon-target-1"></span>
										</div>
										<h6><a href="services-single.html">Market Research and Business Planning</a></h6>
										<div class="text">The argument in favor of the using filler text goes some of thing like this</div>
										<a class="read-more" href="services-single.html">Let’s start <span class="fa fa-angle-double-right"></span></a>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>	
				
				<!-- Services Block Four -->
				<div class="services-block-four col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/service-3.jpg" alt="">
							<div class="overlay-box">
								<div class="content">
									<div class="icon-box">
										<span class="icon flaticon-bank-building"></span>
									</div>
									<h6>Market Research and <br> Business Planning</h6>
								</div>
							</div>
							
							<div class="overlay-box-two">
								<div class="overlay-inner-two">
									<div class="content">
										<div class="icon-box">
											<span class="icon flaticon-bank-building"></span>
										</div>
										<h6><a href="services-single.html">Bank Investment and <br> Savings</a></h6>
										<div class="text">The argument in favor of the using filler text goes some of thing like this</div>
										<a class="read-more" href="services-single.html">Let’s start <span class="fa fa-angle-double-right"></span></a>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>	
				
			</div>
			
			
		</div>
		<?php 
		$query="SELECT * FROM advertisement  ORDER BY id DESC LIMIT 3 ";
			$result=mysqli_query($con,$query);
			
		 ?>
		 <div  class=" container">
		<div class="row">
			<div class="col-sm-12">
				<div class="btn-box text-center">
					<h1>Advertisement</h1>
				</div>
				
			</div>
		</div>
	</div>
		<!--self slider start-->

            <section class="newad-slider-sec" >    
		    
	    <div class="auto-container">
	        <div class="row clearfix">
                <?php  while ($ary = mysqli_fetch_array($result)) { ?>
	                <div class="news-block-two col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box  ">
							<div class="image">
							<!--<a href="<php echo $ary['url_link']?>">-->
								<span style="position:absolute; top:50%;z-index:2; width: 100%; text-align:center; color: black;" ><p><h4><php echo $ary['title'];?></h4></p></span>
								<img style="width:400%; height: 300px;" src="admin/advertisement-image/<?= $ary['banner_image']?>" alt="" class="d-block mx-auto img-fluid ">
								<div class="overlay-box">
								 
								    <small class="self d-flex" style="font-size:23px;">
									<a style="left:40%" href="admin/advertisement-image/<?= $ary['banner_image']?>" data-fancybox="news" data-caption="" class="plus">
										View
										    	
										
										</a>
									
									<a style="left:65%"  href="<?=$ary['url_link']?>" data-fancybox="news" data-caption="" class="plus">
										Visit
										    	
										
										</a>
									
										
										</small>
										
								</div>
							</div>
						</div>
					</div>
				
				<? }  ?>
            </div>
	    </div>
	    
	</section>
		    
  
<!--self slider end		    -->
		    
		    

	<!-- End Services Section Four-->

	<!-- Business Section -->
	<section class="business-section">
		<div class="outer-container">
			<div class="clearfix sticky-container">
				
				<!-- Title Column -->
				<div class="title-column">
					<div class="inner-column sticky-box">
						<!-- Logo -->
						<div class="logo">
							<a href="index.php"><img src="images/logo.png" alt="" title=""></a>
						</div>
						<h2>Our Valuable Members <br> Prize <span>Bond Lucky</span></h2>
						<div class="table-responsive our-member-table">
                            <?php
			$result=mysqli_query($con,"select * from users order by hm desc limit 11");
			echo "<table class='table table-hover'>
                    <thead class=\"table-dark\">
                    <tr>
                      <th scope=\"col\">MEMBERS</th>
                      <th scope=\"col\">DATE OF POST</th>
                      <th scope=\"col\">POST LINK</th>
                    </tr>
                    </thead>
			<tbody>";
		    $counter = 1;
			while ($row=mysqli_fetch_array($result)){
				$uid=$row["uid"];
				$last_post=mysqli_fetch_array(mysqli_query($con,"select * from posting where page='homepage' and uid='$uid' order by dat desc"));
				$dat=timestamp($last_post["dat"]);
				$user=user_data($last_post["uid"]);
				if (strlen($user["username"])>12){
					$username=substr($user["username"],0,10)."...";
					$username2=$user["username"];
				}else{
					$username=$user["username"];
					$username2=$user["username"];
				}
				
				if($username<>"" && $counter<=22)
				{
				echo "
					<tr>
						<th scope=\"row\" title='".$user["username"]."'>$username</th>
						<td class='img-heid'>$dat</td>
						<td class='span-hide'><a href='homepage.php?user=$username2' class='btn btn-outline-primary btn-sm'  title='Go to ".$user["username"]." Home page'>Go</a>
						$dat
						</td>
					</tr>
				";
				$counter++;
				}
			}
			echo "</tbody></table>";
			?>
						</div>
						
					</div>
				</div>
				
				<!-- Contents Column -->
				<div class="contents-column">
					<div class="inner-column">
						<!-- Title Box -->
						<div class="title-box">
							<h2>Learn some info from possive of <br> our <span>latest update</span></h2>
						</div>
						
						<!-- Services Outer -->
						<div class="services-blocks">
							
							<!-- Services Block Five -->
							<div class="services-block-five">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-creativity"></span>
									</div>
									<h6><a href="#">Creative Ideas</a></h6>
									<div class="text">The argument in favor of using filler text goes some labore et dolore magna aliqua consectetur.</div>
								</div>
							</div>
							
							<!-- Services Block Five -->
							<div class="services-block-five">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-comment-1"></span>
									</div>
									<h6><a href="#">Risk Management</a></h6>
									<div class="text">The argument in favor of using filler text goes some labore et dolore magna aliqua consectetur.</div>
								</div>
							</div>
							
							<!-- Services Block Five -->
							<div class="services-block-five">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon flaticon-layers"></span>
									</div>
									<h6><a href="#">Easy to manage fund</a></h6>
									<div class="text">The argument in favor of using filler text goes some labore et dolore magna aliqua consectetur.</div>
								</div>
							</div>
							
						</div>
						
						<!-- Testimonial Boxed -->
						<div class="testimonial-boxed" style="background-image:url(images/resource/image-2.jpg)">
							<div class="inner-boxed">
								<div class="inner-content">
									<h2>Clients say <span>about us</span></h2>
									<div class="single-item-carousel owl-carousel owl-theme">
										
										<!-- Testimonial Block Two -->
										<div class="testimonial-block-two">
											<div class="inner-box">
												<div class="content-box">
													<div class="text">The argument in favor of using filler text goes something like this: If you use real to content inext the design process, anytime you reach a review.</div>
												</div>
												<div class="lower-box">
													<div class="lower-inner">
														<div class="image"><img src="images/resource/author-4.jpg" alt="" title=""></div>
														<h3>Natalia Brick</h3>
														<div class="designation">Founder & CEO</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- Testimonial Block Two -->
										<div class="testimonial-block-two">
											<div class="inner-box">
												<div class="content-box">
													<div class="text">The argument in favor of using filler text goes something like this: If you use real to content inext the design process, anytime you reach a review.</div>
												</div>
												<div class="lower-box">
													<div class="lower-inner">
														<div class="image"><img src="images/resource/author-4.jpg" alt="" title=""></div>
														<h3>Natalia Brick</h3>
														<div class="designation">Founder & CEO</div>
													</div>
												</div>
											</div>
										</div>
										
										<!-- Testimonial Block Two -->
										<div class="testimonial-block-two">
											<div class="inner-box">
												<div class="content-box">
													<div class="text">The argument in favor of using filler text goes something like this: If you use real to content inext the design process, anytime you reach a review.</div>
												</div>
												<div class="lower-box">
													<div class="lower-inner">
														<div class="image"><img src="images/resource/author-4.jpg" alt="" title=""></div>
														<h3>Natalia Brick</h3>
														<div class="designation">Founder & CEO</div>
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						
						<!-- Awards Section -->
						<div class="awards-blocks">
							<div class="awards-inner">
								<h2>Our winning <span>many awards</span> in business sectors</h2>
								<div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review point you’ll end up reviewing and negotiating.</div>
								<ul class="clearfix">
									<li><img src="images/clients/7.jpg" alt="" title=""></li>
									<li><img src="images/clients/8.jpg" alt="" title=""></li>
									<li><img src="images/clients/9.jpg" alt="" title=""></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Business Section -->
	
	<!-- Faq Section -->
	<section class="faq-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Faq Column -->
				<div class="faq-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<h2>Frequently asked <span>question</span></h2>
						</div>
						
						<!--Accordion Box-->
						<ul class="accordion-box">

							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-arrow-right"></span> <span class="icon icon-minus fa fa-arrow-down"></span></div> <span class="icon-inner flaticon-pie-chart-3"></span>How do I find my Windows product key? <span class="arrow fa fa-angle-right"></span></div>
								<div class="acc-content current">
									<div class="content">
										<p>The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime reach a review point you’ll end up reviewing and negotiating.</p>
									</div>
								</div>
							</li>

							<!--Block-->
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-arrow-right"></span> <span class="icon icon-minus fa fa-arrow-down"></span></div> <span class="icon-inner flaticon-up-arrow-1"></span>I've downloaded an ISO file, now what? <span class="arrow fa fa-angle-right"></span></div>
								<div class="acc-content">
									<div class="content">
										<p>The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime reach a review point you’ll end up reviewing and negotiating.</p>
									</div>
								</div>
							</li>

							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-arrow-right"></span> <span class="icon icon-minus fa fa-arrow-down"></span></div> <span class="icon-inner flaticon-pyramid-scheme"></span>Is the media bootable? <span class="arrow fa fa-angle-right"></span></div>
								<div class="acc-content">
									<div class="content">
										<p>The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime reach a review point you’ll end up reviewing and negotiating.</p>
									</div>
								</div>
							</li>
							
						</ul>
						
					</div>
				</div>
				
				<!-- Counter Column -->
				<div class="counter-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="row clearfix">
							
							<!--Image Column -->
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<div class="image">
									<img src="images/resource/counter-img.jpg" alt="" title="">
								</div>
							</div>
							
							<!--Content Column -->
							<div class="column col-lg-6 col-md-6 col-sm-12">
								
								<div class="fact-counter style-two">
									
									<!--Column-->
									<div class="column counter-column">
										<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2500" data-stop="1200">0</span>+
												<h4 class="counter-title">Finishing Projects</h4>
											</div>
										</div>
									</div>
							
									<!--Column-->
									<div class="column counter-column">
										<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="3000" data-stop="50">0</span>
												<h4 class="counter-title">Winning Awards</h4>
											</div>
										</div>
									</div>
							
									<!--Column-->
									<div class="column counter-column">
										<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="3500" data-stop="800">0</span>+
												<h4 class="counter-title">Happy Clients</h4>
											</div>
										</div>
									</div>
							
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
			<div class="side-image" style="background-image:url(images/resource/image-3.jpg)"></div>
		</div>
	</section>
	<!-- End Faq Section -->
	
	<!-- News Section Two -->
	<section class="news-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Learn some new info from <br> our latest <span>news</span></h2>
				<div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you <br> reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- News Block Two -->
				<div class="news-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<!-- <php foreach($articles as $article) { ?>
					{
					 -->	<div class="image">
							<img src="images/resource/news-4.jpg" alt="" />
							<div class="overlay-box">
								<a href="images/resource/news-4.jpg" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
							</div>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span>Posted on<?php echo date('l jS', $article_timestamp) ?></li>
								<li><span class="fa fa-user"></span>Admin</li>
							</ul>
							<h5><a href="single-post.php?id=<?php echo $article['article_id'];?>">What we are capable of usually gets discovered.</a></h5>
							<a href="single-post.php?id=<?php echo $article['article_id'];?>" class="theme-btn btn-style-four">View more</a>
						</div>
						
					<!-- }
					<php } ?> -->
						
					
					</div>
				</div>
				
				
			
				
				
				<!-- News Block Two -->
				<div class="news-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/news-5.jpg" alt="" />
							<div class="overlay-box">
								<a href="images/resource/news-5.jpg" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
							</div>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span>September 12, 2019</li>
								<li><span class="fa fa-user"></span>Admin</li>
							</ul>
							<h5><a href="blog-single.html">What we are capable of usually gets discovered.</a></h5>
							<a href="#" class="theme-btn btn-style-four">View more</a>
						</div>
					</div>
				</div>
				
				<!-- News Block Two -->
				<div class="news-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/news-6.jpg" alt="" />
							<div class="overlay-box">
								<a href="images/resource/news-6.jpg" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
							</div>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="fa fa-calendar"></span>September 12, 2019</li>
								<li><span class="fa fa-user"></span>Admin</li>
							</ul>
							<h5><a href="blog-single.html">Food industry leaders often change their promoters.</a></h5>
							<a href="#" class="theme-btn btn-style-four">View more</a>
						</div>
					</div>
				</div>
				
				
			</div>
			
		</div>
	</section>
	<?php include('footer.php'); ?>
	
	<!--slider script-->
<script>
    $(document).ready(function(){
     $(".view-tag-show").hide();
        
        $("small").mouseenter(function(){
            $(".view-tag-show").show();
        });
        $("small").mouseleave(function(){
            $(".view-tag-show").hide();
        });
    });
</script>