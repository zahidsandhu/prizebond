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

	<title>Thailand lottery,Thai lottery,Lottery thai,Thai tips</title>
	<meta name="description" content="Thailand Lottery is Saudi Arabia provide all kind of Thailand lottery,Thai lottery,Lottery thai,Thai tips,thailand lottery tips,thai loto,thai result " />
	<meta name="keywords" content="Thailand lottery,Thai lottery,Lottery thai,Thai tips,thailand lottery tips,thai loto,thai result,thailand lottery paper,thailand lottery result,thai lottery tips,thai lottery paper,thailand lottery result,thai papers" />
	<meta name="abstract" content="All about Thailand lottery saudia arabia Thailand lottery,Thai lottery,Lottery thai,Thai tips,thailand lottery tips"/>

	<meta name="revisit-after" content="1 days"/>
	<meta name="Generator" content="http://www.prizebondlucky.net"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index,FOLLOW"/>
	<meta name="googlebot" content="All, follow" />
	<meta name="Author" content="http://www.prizebondlucky.net"/>
	<meta name="Copyright" content="2013"/>
	<meta name="designer" content="http://www.prizebondlucky.net" />
	<meta name="email" content="hamidinthecity@hotmail.com" />
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
/*.lower-content {*/
/*    margin-top: -175px;*/
/*}*/
.lower-content.self-lower-content {
    margin-top: 0px;
}
.blog-list-section .news-block-four {
    margin-bottom: 175px !important;
    height: 460px !important;
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
		<?php include('save-account.php'); ?>
		<!-- News Section Two -->
		<section class="page-title" style="background-image:url(images/background/8.jpg)">
			<div class="auto-container">
				<div class="content">
					<h1>Thailand <span>Lottery Tips</span></h1>
					<ul class="page-breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li>Thailand Lottery Tips</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- Blog List Section -->
		<section class="blog-list-section">
			<div class="auto-container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h3>Latest Thailand Lottery Result</h3>
						
						<?php
						$result=mysqli_query($con,"select *  from thai");
						$row=mysqli_fetch_array($result);
						?>
						<table class="table table-bordered table-hover">
							<tr>
								<td>Date</td>
								<td><?php echo $row["dat"]; ?></td>
							</tr>
							<tr>
								<td>First</td>
								<td><?php echo $row["first"]; ?></td>
							</tr>
							<tr>
								<td>Three Numbers </td>
								<td><?php echo $row["three"]; ?></td>
							</tr>
							<tr>
								<td>Down</td>
								<td><?php echo $row["down"]; ?></td>
							</tr>
						</table>
						
						
						</div>	
							

		
			 
			 <!-- News Block Four -->
					<!--<table class=\"table table-bordered\"> <tr>-->
							<?php
						$result= mysqli_query($con,"select * from posting where page='thaivip'    order by dat desc");?>
						<div class="row">
					<?php	while ($row=mysqli_fetch_array($result)){ ?>
						
							<!--<td>-->
							    
							    <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<div class="w-100 p-3" style="height:370px;">
								<img src="user_upload_paper/<?= $row["posting"]?>" width="600px" height="600px" class="d-block mx-auto h-100 " alt="Prize bond Guess paper" title="Prize bond Guess paper">
							</div>
							<div class="overlay-box">
									<a href='user_upload_paper/<?= $row["posting"]?>' data-fancybox="news" data-caption="" class="plus ">
								<small style="font-size:23px; ">View</small>
								</a>
							</div>
						</div>
					</div>
				</div>
							    
							<!--</td>-->
							
							
					<?php	}?>
						<!--</tr></table>-->
						</div>
					
						<?php
						
						$result=mysqli_query($con,"select *  from thai");
						$row=mysqli_fetch_array($result);
						?>	
						<?php
						$tbl_name="posting";
						$limit=16;
						$targetpage="?pge";
						if (isset($_GET["user"])){
							$usr=user_data($_GET["user"]);
							$search="where page='thailandtips' and uid='".$usr["uid"]."' and level='0'  order by dat desc";
						}else{
							$search="where page='thailandtips' and level='0'  order by dat desc";
						}
						include "pages/pagination.php";
						if ($total_pages==0){
							echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No thailand tips found' title='No thailand tips record found.'></div>";
						}
						$aa=0;
						$inc_id=1;
						while ($row=mysqli_fetch_array($result)){
							$user=user_data($row["uid"]);
							$posting=$row["posting"];
							$photo=$user["photo"];
							if ($photo=="" || !file_exists("userpanel/user_photo/".$photo)){
							    
								if($user['login_type'] != ""){
					            $photo=$user["photo"];
        					    }else{
        						$photo="extra/default.png";
        					    }
							}else{
								$photo="userpanel/user_photo/$photo";
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
							</ul>
							<h6><img src='$photo' width=\"65\" title='".$user["username"]."' alt='".$user["username"]." icon'/><b>&nbsp;&nbsp".$user["username"]."</b></h6>
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
							echo "<div class=\"col-sm-12\">$pagination</div>";
							?>
							<!--End Styled Pagination-->
							
						</div>
					</section>

					
					
					<?php include('footer.php'); ?>
