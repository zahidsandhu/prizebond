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

<title>Prime photo state papers, Prize bond guess papers, Prize Bonds Papers</title>
<meta name="description" content="Prizebondlucky.net is Pakistani website provides all kind of Prime photo state, Photo state papers, prize bond, guess papers, VIP guess paper, lottery tips." />
<meta name="abstract" content="Prime photo state papers, Prize bond guess papers, Prize Bonds Papers"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta https-equiv="content-type" content="en" />
<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="https://www.prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="https://www.prizebondlucky.net"/>
<meta name="Copyright" content="2017"/>
<meta name="designer" content="https://www.prizebondlucky.net" />
<meta name="email" content="prizebondlucky.net" />
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
    <?php include('save-account.php'); ?>
	<!-- Blog List Section -->
	<section class="blog-list-section">
		<div class="auto-container">
		    <div class="row">
			
			<?php
			$space="&nbsp;&nbsp;";
			$tbl_name="posting";
			$limit=16;
			$targetpage="?pge";
			if (isset($_GET["user"])){
				$usr=user_data($_GET["user"]);
				$search="where page='photostate' and uid='".$usr["uid"]."' and level='0'   order by dat desc";
			}else{
				$search="where page='photostate' and level='0'  order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No photo state paper found' title='No photo state paper record found.'></div>";
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
							<img src=\"./user_upload_paper/$posting\" width=\"600px\" height=\"200px\" class=\"d-block mx-auto h-100 \" alt=\"Prize bond Guess paper\" title=\"Prize bond Photo state paper\">
							</div>
							<div class=\"overlay-box\">
							<!--	<a href=\"../user_upload_paper/$posting\"</a>
								<a data-fancybox=\"post\" data-filter=\"#hidden-content\" data-src=\"#hidden-content\" href=\"javascript:;\" class=\"plus\"><small style=\"font-size:23px; \">View</small>
                                	
                                </a>-->
                                <a href=\"./user_upload_paper/$posting\" data-fancybox=\"news\" data-caption=\"\" class=\"plus \">
                                <small style=\"font-size:23px; \">View</small>
                                </a>
							</div>
						</div>
						<div class=\"lower-content\">
							<ul class=\"post-meta\">
								<li><span class=\"fa fa-calendar\"></span><span class='month'>$month</span><span class='day'>$day</span></li><br>
								<li><span class=\"fa fa-clock-o\"></span>$time</li><br>
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
							<h6><img src='$photo' width=\"65\" title='".$user["username"]."' alt='".$user["username"]." icon'/><b>".$space,$user["username"]."</b></h6>
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
				<h2>Photostate <span>Papers</span></h2>
				<div class="text">Extra Text Dummy</div>
			</div>
			
			<div class="row clearfix">
			    <div class="col-md-12">
                <h2>Prize bond Photo State papers</h2>
                <br><p>It's time to be the first one to get the prize bond photo 

state papers in your hands first of all!  Well, we all 

know that the importance and value investment of prize 

bond has been hugely increasing inside Pakistan that is 

giving the middle-class people with the chance to earn 

enough amount of money.</p>
<br><br><h2>So finding the lucky prize bond</h2>
<br><p>is the ultimate step to perform out with! In such 

conditions, the prize bond photo state papers will be 

helping you out a lot. If you were checking out with our 

web page, you would be finding be finding so many 

fantastic and best options of the prize bonds to take 

into account with.</p>
<br><br><h3>Information about premium prize bond photo state papers:</h3>
<br><p>Over the worth of Rs 40,000 with the price of Rs 

80 million, Government of Pakistan has come up with the 

announcement of the premium prize bond registration. This 

prize bond will be attending you with the profit on the 

scale of monthly basis that would be given after six 

months. It is readily available in favor of the private 

as well as public and also the individual institutions as 

well. Banks would not be allowed to purchase with these 

bonds. These prize bonds have been playing an important 

role to bring improvement in the economic sector of 

Pakistan. It can easily be obtained from the branches of 

the State Bank in the major cities of Lahore, Karachi and 

Quetta and Peshawar.</p>
<br><br><h3>Insight details about student prize bond photo state papers:</h3>
<br><p>In the category of the prize bonds, there is 

also the type of student prize bond as well. As it is 

evident or clear from the name whom this category of the 

prize bond is just specially designed for the students 

only. To learn about the student's photo state papers, 

you can check out this webpage Here there is a complete 

list of original 
<a href="https://www.prizebondlucky.net/guesspapers.php">photo state papers</a> related to the 

student prize bond. The successful schedule announcement 

of this bond will be carried out after each single 

quarter month, and the winning prize will be around Rs. 

700,000 and so many other titles are also part of it. It 

would be playing an essential role in giving much of the 

relief to the students over their educational growth. 
<br><br>
By visiting with this web page, you would be able to get 

much of the more information as related to the prize 

bond. You can often learn much of the information in view 

with the Awami <b>photo state papers</b>. We will also be 

letting the readers know about the complete set of 

schedule about the announcement of the prize bond winners 

as it will be announced by the side of the management. 

Apart from the Tariq photo state papers, you can even get 

much of the information in the guess papers as well. In 

this way, you can get to know that which prize bond 

sequence numbers are best to take into account right now. 

 
<br><br>To sum up, we would say that prize bonds are taken as the 

best medium where they act as the investment tool for the 

people of Pakistan. In the previous years, so many people 

have changed their standards of living by winning a 

handsome amount of money through the prize bonds. This is 

probably the best step by the side of Government of 

Pakistan where so many more prize bond categories are 

soon to be announced. 


<br><br>Tune into this web page right now and get complete 

information related with <i>photo state papers</i>!</p>

    	        </div>
			</div>
		</div>
	</section>
	
	
	<?php include('footer.php'); ?>

