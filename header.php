    <!-- <div class="preloader"></div> -->
    <!-- Main Header-->
    <header class="main-header header-style-two"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	
        <!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="upper-inner clearfix">
                	
                <div class="pull-left logo-box">
                    	<div class="logo"><a href="index.php">
                    		<img  src="images/logo-3.png" alt="" class="img-logo">
                    	</a>
                    	</div>
                    </div>
                    
					<div class="upper-right clearfix">
						<div class="social-box">
							<ul class="social-icon-one">
							    
							    	    
						<?php 

							if(isset($_SESSION['uid'])){
							    $userData = user_data($_SESSION["uid"]);
								?>
								<li>
									<a href="userpanel/dashboard.php">
										<span>
										  <?php if(isset($_SESSION['login_with'])){?>
										    <img style="width:30px;height:30px;" class="img-xs rounded-circle ml-2" src="<?= $userData['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">
										    <?php }else{?>
										     <img style="width:30px;height:30px;" class="img-xs rounded-circle ml-2" src="../userpanel/user_photo/<?= $userData['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">
										    <?php }?>
										    </span>
											<?= $userData['username']?>
									</a>
								</li>
									<li class="hiden">
									<a href="userpanel/?logout=true">	
											Logout
									</a>
								</li>
								
								<?php

							}else{
								?>

								<li>
									<a href="userpanel/index.php">
										<span class="fa fa-lock">
											Login
										</span>
									</a>
								</li>
								<li><a href="userpanel/register.php"><span class="fa fa-user"></span> Register Now</a></li>
								<?php

							}
						 ?>
								
								<li><a href="#"><span class= "fa fa-facebook-square"></span></a></li>
								<li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
								<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
								<li><a href="#"><span class="fa fa-google-plus-square"></span></a></li>
								<li><a href="#"><span class="fa fa-rss-square"></span></a></li>
							</ul>
						</div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--End Header Upper-->

		<!-- Header Lower  -->
    	<div class="header-lower">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <div class="nav-outer clearfix">
                    
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
								    <li class="home-desplay"><a href="index.php">Home</a></li>
                                <li class="dropdown"><a href="#">Prize bond</a>
									<ul>
									    <li><a href="searchprizebond.php">Search Prize Bond</a></li>
										<li><a href="vippapers.php">Vip Paper(For Permium Members)</a></li>
										<li><a href="guesspapers.php">Guess Papers</a></li>
										<li><a href="photostatepapers.php">Photostate Papers</a></li>
										<li><a href="winningpapers.php">Members Winning Papers</a></li>
										<li><a href="suggestion.php">Suggestion</a></li>
										<li><a href="formula.php">Formula</a></li>
										<li><a href="finalgame.php">Final Game</a></li>
										<li><a href="tenakrachallange.php">Ten Akra Challange</a></li>
										<li><a href="akrachallange.php">One Akra Challange</a></li>
										<li><a href="openchallange.php">Open Challange</a></li>
										<li>
                                            <?php
        									 $res=mysqli_query($con,"select * from list order by id desc");
        									 $rw=mysqli_fetch_array($res);
        										$title=$rw["title"];
        										$link=$rw["link"]."-".$rw["id"];
        									?>
        									<a href="prizebondlist.php?list=<?php echo $link; ?>">Prize bond List </a></li>
										<li><a href="schedule.php">Prize bond Schedule</a></li>
										<li><a href="prizebondwallet.php">Prize Bond Wallet</a></li>
										<li><a href="prizebondlist.php">Pervious Results</a></li>
										<li><a href="joolottery.php">indian joo lottery</a></li>
										<li><a href="#">Premium Prize Bond</a></li>
										<li><a href="prizebondvideos.php">Prize Bond Videos</a></li>
									
									</ul>
								</li>
								<li class="dropdown"><a href="#">National Savings Certificates</a>
									<ul>
									    <li><a href="defence-savings-certificates.php">Defence Savings Certificates</a></li>
                                <li><a href="behbood-savings-certificates.php">Behbood Savings Certificates
</a></li>
                                <li><a href="regular-income-certificates.php">Regular Income Certificates
</a></li>
                                <li><a href="special-savings-certificates.php">Special Savings Certificates
</a></li>
                                <li><a href="short-term-certificates.php">Short Term Savings Certificates
</a></li>
										<li><a href="quick-preview-certificates.php">Quick Preview Certificates</a></li>
										<li><a href="product-rates.php">Profit Rates</a></li>
										<li><a href="premium-prize-bond.php">Premium Prize Bond</a></li>
										<li><a href="national-savings-products-summary.php">National Savings Products Summary</a></li>
										<li><a href="individual-investors.php">Individual Investors</a></li>
										<li><a href="overseas-pakistanis.php">Overseas Pakistanis</a></li>
										
									</ul>
								</li>
								<li class="dropdown"><a href="#">National Savings Accounts</a>
									<ul>
										<li><a href="savings-account.php">Savings Account</a></li>
										<li><a href="pensioners-benefit-account.php">Pensioners Benefit Account</a></li>
										<li><a href="special-savings-account.php">Special Savings Account</a></li>
										<li><a href="shuhadas-account.php">SHUHADAS FAMILY WELFARE ACCOUNT</a></li>
										<li><a href="quick-preview-accounts.php">Quick Preview Accounts</a></li>
										<li><a href="denominations-prizes.php">Denominations & Prizes</a></li>
										<li><a href="security-features-pb.php">Security Features</a></li>
										
									</ul>
								</li>
								<li class="dropdown"><a href="#">Thailand Lottery</a>
									<ul>
										<li><a href="thailandvippapers.php">Thai Vip Papers (For Permium Members)</a></li>
										<li><a href="thailandlotterytips.php">Thai Lottery Tips</a></li>
										<li><a href="thailandlotterypapers.php">Thai Lottery Papers</a></li>
										<li><a href="thailandresult.php">Thailand Lottery Result</a></li>
										<li><a href="#">Thai Pervious Results</a></li>
										<li><a href="thailotteryvideos.php">Thai Lottery Videos</a></li>
										
									</ul>
								</li>
								
								
								
							
								</ul>
							</div>
							
						</nav>
                    </div>
					
					<!--Outer Box-->
					<div class="outer-box">
					
						<div class="search-box-outer">
							<div class="dropdown">
								<button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
								<ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
									<li class="panel-outer">
										<div class="form-container">
											<form method="post" action="blog.html">
												<div class="form-group">
													<input type="search" name="field-name" value="" placeholder="Search Here" required>
													<button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
												</div>
											</form>
										</div>
									</li>
								</ul>
							</div>
						</div>
						
						
						
						
					</div>
					<ul class="navbar-nav">
						
					</ul>
					
                </div>
            </div>
        </div>
		
		<!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.php" class="img-responsive"><img style="height: 50px;" src="images/loogo-3.png" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                
                                <li class="dropdown"><a href="#">Prize bond</a>
									<ul>
									    <li><a href="searchprizebond.php">Search Prize Bond</a></li>
										<li><a href="vippapers.php">Vip Paper(For Permium Members)</a></li>
										<li><a href="guesspapers.php">Guess Papers</a></li>
										<li><a href="photostatepapers.php">Photostate Papers</a></li>
										<li><a href="winningpapers.php">Members Winning Papers</a></li>
										<li><a href="suggestion.php">Suggestion</a></li>
										<li><a href="formula.php">Formula</a></li>
										<li><a href="finalgame.php">Final Game</a></li>
										<li><a href="tenakrachallange.php">Ten Akra Challange</a></li>
										<li><a href="akrachallange.php">One Akra Challange</a></li>
										<li><a href="openchallange.php">Open Challange</a></li>
										<li>
                                            <?php
        									 $res=mysqli_query($con,"select * from list order by id desc");
        									 $rw=mysqli_fetch_array($res);
        										$title=$rw["title"];
        										$link=$rw["link"]."-".$rw["id"];
        									?>
        									<a href="prizebondlist.php?list=<?php echo $link; ?>">Prize bond List </a></li>
										<li><a href="schedule.php">Prize bond Schedule</a></li>
										<li><a href="prizebondwallet.php">Prize Bond Wallet</a></li>
										<li><a href="prizebondlist.php">Pervious Results</a></li>
										<li><a href="joolottery.php">indian joo lottery</a></li>
										<li><a href="#">Premium Prize Bond</a></li>
										<li><a href="prizebondvideos.php">Prize Bond Videos</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#">National Savings Certificates</a>
									<ul>
										<li><a href="defence-savings-certificates.php">Defence Savings Certificates</a></li>
                                <li><a href="behbood-savings-certificates.php">Behbood Savings Certificates
</a></li>
                                <li><a href="regular-income-certificates.php">Regular Income Certificates
</a></li>
                                <li><a href="special-savings-certificates.php">Special Savings Certificates
</a></li>
                                <li><a href="short-term-certificates.php">Short Term Savings Certificates
</a></li>
										<li><a href="quick-preview-certificates.php">Quick Preview Certificates</a></li>
										<li><a href="product-rates.php">Profit Rates</a></li>
										<li><a href="premium-prize-bond.php">Premium Prize Bond</a></li>
										<li><a href="national-savings-products-summary.php">National Savings Products Summary</a></li>
										<li><a href="individual-investors.php">Individual Investors</a></li>
										<li><a href="overseas-pakistanis.php">Overseas Pakistanis</a></li>
										
									</ul>
								</li>
								<li class="dropdown"><a href="#">National Savings Accounts</a>
									<ul>
									<li><a href="savings-account.php">Savings Account</a></li>
										<li><a href="pensioners-benefit-account.php">Pensioners Benefit Account</a></li>
										<li><a href="special-savings-account.php">Special Savings Account</a></li>
										<li><a href="shuhadas-account.php">SHUHADAS FAMILY WELFARE ACCOUNT</a></li>
										<li><a href="quick-preview-accounts.php">Quick Preview Accounts</a></li>
										<li><a href="denominations-prizes.php">Denominations & Prizes</a></li>
										<li><a href="security-features-pb.php">Security Features</a></li>
										
									</ul>
								</li>
								<li class="dropdown"><a href="#">Thailand Lottery</a>
									<ul>
										<li><a href="thailandvippapers.php">Thai Vip Papers (For Permium Members)</a></li>
										<li><a href="thailandlotterytips.php">Thai Lottery Tips</a></li>
										<li><a href="thailandlotterypapers.php">Thai Lottery Papers</a></li>
										<li><a href="thailandresult.php">Thailand Lottery Result</a></li>
										<li><a href="#">Thai Pervious Results</a></li>
										<li><a href="thailotteryvideos.php">Thai Lottery Videos</a></li>
									</ul>
								</li>
									<!--<li class="nav-item"><a href="userpanel/index.php" class="nav-link">Login</a></li>-->
									<?php 

							if(isset($_SESSION['uid'])){
								?>
								<li>
									<a href="userpanel/dashboard.php">
										<?= $userData['username']?>
									</a>
								</li>
								<?php

							}else{
								?>

								<li>
									<a href="userpanel/index.php">	
											Login
									</a>
								</li>
								<li class="nav-item"><a href="userpanel/register.php" class="nav-link">Register Now</a></li>
								<?php

							}
						 ?>
									
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
		
    </header>
    <!--End Main Header -->
	<!--Main Slider-->
    <section class="main-slider style-two">
        <div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide" style="background-image:url(images/main-slider/3.jpg)">
                <div class="auto-container">
					<div class="content alternate">
					    <?php
					     
					    //echo $_SERVER['HTTPS'];
					    if(isset($_GET['list']) && $_SERVER['PHP_SELF'] != "/openchallange.php" && $_SERVER['PHP_SELF'] != "/akrachallange.php" ){
	     $string= str_replace('-', ' ', $_GET['list']); ?>
	     	
	      <h1 class="text-white"><?= ucwords($string); ?></h1>
	 <?php }else{?>
	
	<h1 class="alternate">We are happy to build <br> your best <span>Prize Bond</span></h1>
						<div class="text alternate">Prizebondlucky is Pakistan’s official Website to provide information about the draws and winners & provide all the list issued by the State bank of Pakistan.
						</div>
						<?php if(!isset($_SESSION['uid'])){?>
						<div class="btn-box">
							<a href="http://prizebond.cubescode.com/userpanel/" class="theme-btn btn-style-two">Let’s start now</a>
						</div>
						<?php } ?>
	
	 <?php } ?>
					
					
					</div>
                </div>
            </div>
            
            <div class="slide" style="background-image:url(images/main-slider/7.jpg)">
                <div class="auto-container">
					<div class="content alternate">
					     <?php
					    if(isset($_GET['list']) && $_SERVER['PHP_SELF'] != "/openchallange.php" && $_SERVER['PHP_SELF'] != "/akrachallange.php" ){
	     $string= str_replace('-', ' ', $_GET['list']); ?>
	     	
	      <h1 class="text-white"><?= ucwords($string); ?></h1>
	 <?php }else{?>
	
	<h1 class="alternate">We are happy to build <br> your best <span>Prize Bond</span></h1>
						<div class="text alternate">Prizebondlucky is Pakistan’s official Website to provide information about the draws and winners & provide all the list issued by the State bank of Pakistan.</div>
						<?php if(!isset($_SESSION['uid'])){?>
						<div class="btn-box">
							<a href="http://prizebond.cubescode.com/userpanel/" class="theme-btn btn-style-two">Let’s start now</a>
						</div>
						<?php } ?>
	
	 <?php } ?>
					
                </div>
            </div>
			
        </div>
	</section>
	
	
	<section class="luckydraw-sec">
		<div class="auto-container">
		    
			<div class="row">
				<div class="col-sm-12 text-center">
					<div class="luckydraw-seccontainer">
						<h3 class="link_animated"><?php
			$ds=mysqli_fetch_array(mysqli_query($con,"select * from setting"));
			echo $ds["display"];
			?></h3>
					</div>
				</div>
			</div>
		</div>
	</section>
