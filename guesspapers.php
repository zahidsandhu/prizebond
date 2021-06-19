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

<title>Prize bond guess paper, Prime photo state paper, Vip guess papers</title>
<meta name="description" content="Prizebondlucky.net is Pakistani website provides all kind of prize bond guess paper, Pakistan prize bond paper, guess paper, photo state paper, lottery tips" />
<meta name="abstract" content="Prize bond guess paper, Prime photo state paper, Vip guess papers"/>
<meta https-equiv="content-type" content="en" />
<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="https://www.prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    /* width: 90%; */
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
				<h1>Guess <span>Papers</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Guess Papers</li>
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
			
			$tbl_name="posting";
			$limit=16;
			$targetpage="?pge";
			if (isset($_GET["user"])){
				$usr=user_data($_GET["user"]);
				$search="where page='guesspaper' and uid='".$usr["uid"]."' and level='0'  order by dat desc";
			}else{
				$search="where page='guesspaper' and level='0'  order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No geuss paper found' title='No guess paper record found.'></div>";
			}
			$aa=0;
			
			while ($row=mysqli_fetch_array($result)){
				$user=user_data($row["uid"]);
				$posting=$row["posting"];
				$photo=$user["photo"];
				if ($photo =="" || !file_exists("userpanel/user_photo/".$photo)){
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
							<div class=\"w-100 p-3\" style=\"height:370px;\">
							<img src=\"./user_upload_paper/$posting\" width=\"600px\" height=\"200px\" class=\"d-block mx-auto h-100 \" alt=\"Prize bond Guess paper\" title=\"Prize bond Guess paper\">
							</div>
							<div class=\"overlay-box\">
								<a href=\"./user_upload_paper/$posting\" data-fancybox=\"news\" data-caption=\"\" class=\"plus \">
								<small style=\"font-size:23px; \">View</small>
								</a>
							</div>
						</div>

						<div class=\"lower-content\">
							<ul class=\"post-meta\">
								<li><span class=\"fa fa-calendar\"></span><span class='month'>$month</span><span class='day'>$day</span></li><br>
								<li><span class=\"fa fa-clock-o\"></span> $time </li><br>
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
							<h6><img src='$photo'  width=\"65\" title='". $user["username"]."' alt='". $user["username"]." icon'/> <b> &nbsp;&nbsp;".$user["username"]."</b></h6>
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
			    
		
			 //$lop_counter++;
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
				<h2>Guess <span>Papers</span></h2>
				<div class="text">Extra Text Dummy</div>
			</div>
			
			<div class="row clearfix">
			    <div class="col-md-12">
                    <h2> Prize bond guess paper</h2>
                    <p>If you want to improve your standard of living and to earn, then taking the opportunity to experience your luck through prize bond is an ultimate option. These stands away to be one of the most important mediums of earning money only if you are one of the lucky ones. Lets discuss some insight details about it!</p>
                    <h3>Introduction about Prize bond guess papers:</h3>
                    <p>In the year 1960, the concept of <b>guess papers</b> was introduced for the very first time. This method is known as the form of a medium of the gold investment and bearer security. As you will be participating in the scheme, you will be considering carrying out with the only right method to hence invest wisely and getting away with the chance to win prize money in the shorter period. This scheme will make you earn with a handsome amount of money. 
                    <br><br><a href="https://prizebondlucky.net/prizebondlist.php">Prize bond list</a> are also taken away to be issued in proper series as into which were each set consist of one less than 1,000,000 bonds. This process of investment is best for the popular category of the people by which they will be getting the first chance to earn a handsome amount of money. This money process of the drawing has changed the life of so many people, and you can be one of the lucky one too.</p>
                    <br><br><h3>Information about different Denominations of Prize Bonds:</h3>
                    <p>This has been categorized in so many denominations. Some of the major categories or denominations are highlighted to be Rs. 100, Rs. 200, Rs. 750, Rs.1500, Rs. 7500, Rs. 15000, Rs.25000, and Rs. 40,000.  You will be getting to know that the this is being issued every single year almost every single of the day on the quarter timeline basis.  They are defined away as the source of the investment bearer type of security that is to be generally available in the worth of RS 200, RS 750, RS 15,000, and RS 40,000 respectively.</p>
                    <br><br><h4>Learn about Prize Bond Guess papers:</h4>
                    <br><p>By visiting with this web page, you would be able to have complete information about the <strong>guess papers.</strong>These documents will help the people to know about which series of numbers have remained on the popular demand in the past few years. In this way, the buyers can also buy those which are at the top in the market. Plus right on this web page, we will be putting together insight information about these according to the date, time, day and series sequence too.
                    <br><br>Why you look around here and there when we are all here in giving you the complete set of information and details about it? We will be updating straight away on this web page for the readers. Plus we would also be letting the readers know about the schedule as well that would be as according to the date and days along with the month as well As we have already mentioned that the announcement draw is made on a quarterly basis. Sometimes it is held as twice times in one month about which we will be updating to the readers right on this web page. 
                    <br><br>So this was all about <b>guess paper</b> If you want to keep a check on more details of the <a href="https://prizebondlucky.net/">prize bond</a>,  then without wasting any time signed into this web page right now!</p>
    	        </div>
			</div>
		</div>
	</section>
	
	
	<?php include('footer.php'); ?>