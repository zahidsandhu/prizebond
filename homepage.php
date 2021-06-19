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
<head>
<meta charset="utf-8">
<title>Prize bond Our Veluable Members Home Pages</title>
<meta property="fb:page_id" content="240734989375">
<meta name="description" content="Soon">
<meta name="keywords" content="coming soon">
<meta name="author" content="soon">
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
    <div class="preloader"></div>
 	<?php include('header.php'); ?>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/8.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Blog <span>List</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Blog List</li>
				</ul>
			</div>
        </div>
    </section>
	<!-- Blog List Section -->
	<section class="blog-list-section">
		<div class="auto-container">
			
			<?php
			$space="&nbsp;&nbsp;&nbsp;&nbsp;";
			$tbl_name="posting";
			$limit=9;
			$targetpage="?user=".$_GET["user"]."&pge";
			if (isset($_GET["user"])){
				$usr=user_data($_GET["user"]);
				$search="where page='homepage' and uid='".$usr["uid"]."' and level='0'  order by dat desc";
			}else{
				$search="where page='homepage' and level='0'   order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<img src='extra/no-record-found.jpg' alt='No homepage found' title='No homepage record found.'>";
			}
			echo "<!-- Sec Title -->
			<div class=\"sec-title centered\">
				<div class=\"title\">Blog list</div>
				<h2>".$usr["username"]."<span>'s homepage</span></h2>
			</div><div class=\"row clearfix\">";
			$inc_id=1;
			while ($row=mysqli_fetch_array($result)){
				$user=user_data($row["uid"]);
				$posting=$row["posting"];
				$photo=$user["photo"];
				if ($photo !="" || file_exists("userpanel/user_photo/".$photo)){
					if($user['login_type'] != ""){
					        $photo=$user["photo"];
					    }else{
						$photo="../userpanel/user_photo/$photo";
					    }
				}else{
				    $photo="extra/default.png";
				    
					
				}
				$day=date("d",$row["dat"]);
				$month=date("F",$row["dat"]);
				$time=date("h:i:s A",$row["dat"]-3600);
			 ?>
			
			 <?php echo "
			 
			 <!-- News Block Four -->
				<div class=\"news-block-four col-lg-4 col-md-6 col-sm-12\">
					<div class=\"inner-box\">
						<div class=\"image\">
							<!--<img src='extra/user.png' title='".$user["username"]."' alt='".$user["username"]." icon'/>-->
							<div class=\"w-100 p-3\" style=\"height:200px;\"><p>$posting</p></div>
							<div class=\"overlay-box\">
								<!--<a href=\"images/resource/news-4.jpg\" data-fancybox=\"news\" data-caption=\"\" class=\"plus flaticon-plus-symbol\"></a>-->
								
								<a data-target=\"#ab$inc_id\" data-toggle=\"modal\" data-fancybox=\"post\" data-filter=\"#hidden-content\" data-src=\"#hidden-content\" href=\"javascript:;\"  class=\"plus\"><small style=\"font-size:23px; \">View</small><br>
                                	
                                </a>
								
							</div>
						</div>
						<div class=\"lower-content\">
							<ul class=\"post-meta\">
								<li><span class=\"fa fa-calendar\"></span><span class='month'>$month</span><span class='day'>$day</span></li>
								<li><span class=\"fa fa-clock-o\"></span>$time</li>
								<li><span class=\"fa fa-user\"></span>".$user["username"]."</li>
							</ul>
							<h5><img src='$photo' width=\"100\" title='".$user["username"]."' alt='".$user["username"]." icon'/>".$space,$user["username"]."</h5>
						</div>
					</div>
				</div>
			"; ?>
		
				 <!-- Modal -->
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
          <div class="lower-content">
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
			$inc_id++;
			}
			echo "</div>$pagination";
			?>
            <!--End Styled Pagination-->
			
		</div>
	</section>
	<!-- End Blog List Section -->
	<?php include('footer.php'); ?>