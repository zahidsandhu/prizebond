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

<title>Prize bond formula, Unique Ideas, bonds routine, Pakistan lucky draw.</title>
<meta name="description" content="prizebondlucky.net is Pakistani website provides all kind of prize bond formula, lucky routine, formula, bonds, Prize bond Pakistan lottery and much more." />
<meta name="abstract" content="All about Prize bond draw in pakistan and much more"/>
<meta https-equiv="content-type" content="en" />
<meta name="revisit-after" content="1 days"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Generator" content="https://www.prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="https://www.prizebondlucky.net"/>
<meta name="Copyright" content="2017"/>
<meta name="designer" content="https://www.prizebond.net" />
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
}
.lower-content {
    /*margin-top: -175px;*/
}
.blog-list-section .news-block-four {
    margin-bottom: 175px !important;
    height: 460px !important;
}
.lower-content.self-lower-content {
    margin-top: 0px;
}
.news-block-four .inner-box .image .overlay-box .plus{
    left:25% !important;
}
.news-block-four .inner-box .image .overlay-box{
    height:100% !important;
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
				<h1>Prizebond <span>Formula</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Prizebond Formula</li>
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
				$search="where page='formula' and uid='".$usr["uid"]."' and level='0'  order by dat desc";
			}else{
				$search="where page='formula' and level='0'   order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No formula found' title='No formula record found.'></div>";
			}
			$aa=0;
			$inc_id=1;
			while ($row=mysqli_fetch_array($result)){
				$user=user_data($row["uid"]);
				$posting=$row["posting"];
				// $posting=substr($posting1,0,10);
				$photo=$user["photo"];
				if ($photo=="" || !file_exists("userpanel/user_photo/".$photo)){
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
							<div class=\"w-100 p-3\" style=\"height:370px;\">$posting</div>
							<div class=\"overlay-box\">
							    <div style=\"display: none;\" id=\"hidden-content\">
                                $posting
                                </div>
                                <a data-target=\"#ab$inc_id\" data-toggle=\"modal\" data-fancybox=\"post\" data-filter=\"#hidden-content\" data-src=\"#hidden-content\" href=\"javascript:;\"  class=\"plus\"><small style=\"font-size:23px; \">View</small><br>
                                	
                                </a>
							<!--	<a href=\"images/resource/news-4.jpg\" data-fancybox=\"news\" data-caption=\"\" class=\"plus flaticon-plus-symbol\"></a> -->
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
							<h6><img src='$photo' width=\"65\" title='".$user["username"]."' alt='".$user["username"]." icon'/><b>&nbsp;&nbsp;".$user["username"]."</b></h6>
						</div>
					</div>
				</div>
			"; ?>
			
			<div class="modal fade" id="ab<?=$inc_id;?>" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        	<h4><img  src="<?= $photo?>" width="50" title="<?= $user['username']?>"" alt="<?= $user["username"]; ?>icon"/>&nbsp;&nbsp;&nbsp;<?= $user['username']?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p><?= $posting?></p>
          <div class="lower-content self-lower-content">
							<ul class="post-meta">
								<li class="text-primary">
									<span class="fa fa-calendar"></span><span class='month'>
										&nbsp;&nbsp;&nbsp;<?=$month?>	
									</span>
									<span class='day'>
									&nbsp;<?=$day?>
											
										</span>
									</li>
								<li class="text-primary">
									<span class="fa fa-clock-o">&nbsp;&nbsp;&nbsp;</span><?= $time?>
								</li>
								<li class="text-primary">
									<span class="fa fa-user">&nbsp;&nbsp;&nbsp;</span><?= $user["username"]?></li>
							</ul>
						</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
		
			<?php
				}else{
		    echo "<div class=\"news-block-four col-lg-3 col-md-6 col-sm-12\">
		    google add
		    </div>";
		}
			$inc_id++;	
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
				<h2>Prize Bond  <span>Formula</span></h2>
				<div class="text">Extra Text Dummy</div>
			</div>
			
			<div class="row clearfix">
			    <div class="col-md-12">
                <h2>Prize Bond Formula</h2>
                <br><p>It's time to try your luck with the fantastic investment than the prize bonds! There are so many reasons and perceptions that would be putting your mind over the thought that you should put yourself into the investment prize bond opportunity owing to our different mechanism of thinking and processing information.  As we talk about the investment, then for so many of the people, prize bonds are taken away to be one of the most important mediums for sure. This is all possible as because of the attractive features as generally it offers that cater to the appetite of both the risk takers and so as the involvement of the risk-averse individuals.
               <br>
               
<br><br><h3>Importance of Prize Bond Investment for you:</h3>
                <br>The main reason for adding the medium of investment into the prize bond formula is that it is all carried out with the simple set down the procedure. It would be much easy to get for the mean of investment when you have the prize bond. You need to submit with the application form filling along with all the required details and then later you will be getting the ownership of the relationship. It is much easily accessible to get it from the different platforms of the primary and the secondary market. There is no setting of the additional charges as being apart from the money that will be used away in the prize bond. They are accessible in the range of around Rs. 100 and as according to per your cash flows as you can very conveniently device your suitable investment scheme too. The amount that you will be investing in the prize bond will set as remain safe and secure even if you are not winning with any prize. As you will be withdrawing with the investment at any range of the point, then you will be getting away with the access of the same amount as initially invested.
                 
                <br><br><h4>How to get the prize bond formula?</h4>
                <br><br>If you are investing in prize bond for the first time, then it would be recommended to take the finest help out from the prize bond formula. Now as regards the method has been concerned, it would make you attain with the exciting information related with the lucky numbers that will help you to get the prize bond that is best to be used away. 

<br><br>By signing into our web page, you will be able to get the complete set of information related with the prize bonds and also the guess papers and formula method too. You can follow up with the formula method to learn about the lucky numbers and which numbers have remained successful in the past few years. Over here you can also learn about the schedule of the prize bond routine. As soon as the management is coming across with the announcement of the plan of prize bond, we will instantly be updating it right over this web page. We have the 100% guarantee over the prize bond formula, and we are sure that this will come about with some successful results at the end of the day. 

<br><br>So this was the complete set of information about the prize bond and prize bond formula for you. Undoubtedly, prize bond grants with the best of the benefits in the medium of investment. Following the rules of the prize bond formula, you would be finding it much easy to choose the lucky numbers that are worth winning for you. Without wasting any time visits this web page right now. </p>

    	        </div>
			</div>
		</div>
	</section>
	
	
	<?php include('footer.php'); ?>
