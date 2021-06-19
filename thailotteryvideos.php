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
		iframe{
		width: 268px !important;
            height: 157px !important;
			/*padding-bottom: 20px;*/
		}
		.card-body{
			width: 268px !important;
            height: 157px !important;
			padding: 0px;

		}
		.card-footer{
			background-color: white;
			color: black;
			
		}
		.name-color{
			color:blue;
		}
		ul#horizontal-list {
	min-width: 696px;
	list-style: none;
	padding-top: 20px;
	}
	ul#horizontal-list li {
		display: inline;
		margin-left: 10px;
	}
	@media(max-width: 1024px){
	    .col-md-3.col-sm-12.self-style-col-3 {
    max-width: 33.33% !important;
}
		iframe{
		width: 310px !important;
        height: 157px !important;
			/*padding-bottom: 20px;*/
		}
			ul#horizontal-list li {
		display: inline;
		margin-left: 2px;
		
	    }
	   
	}
		@media(max-width: 778px) and (max-width: 991px){
			iframe{
			width: 458px !important;
			height: 300px !important;
			/*padding-bottom: 20px;*/
		}

		}
	@media(max-width: 768px){
	    .col-md-3.col-sm-12.self-style-col-3 {
    max-width: 50% !important;
}
		iframe{
				width: 352px !important;
			height: 158px !important;
			/*padding-bottom: 20px;*/
		}
			ul#horizontal-list li {
		display: inline;
		margin-left: 2px;
		
	    }
	   
	}
		@media(max-width: 490px){
		    @media(max-width: 425px){
	    .col-md-3.col-sm-12.self-style-col-3 {
    max-width: 100% !important;
}
		iframe{
			width: 329px !important;
			height: 300px !important;
			/*padding-bottom: 20px;*/
		}
			ul#horizontal-list li {
		display: inline;
		margin-left: 2px;
		
	    }
	   
	}
	@media(max-width: 450px){
	    .col-md-3.col-sm-12.self-style-col-3 {
    max-width: 100% !important;
}
		iframe{
		width: 418px !important;
        height: 157px !important;
			/*padding-bottom: 20px;*/
		}
			ul#horizontal-list li {
		display: inline;
		margin-left: 2px;
		
	    }
	   
	}
		@media(max-width: 425px){
	    .col-md-3.col-sm-12.self-style-col-3 {
    max-width: 100% !important;
}
		iframe{
		width: 394px !important;
        height: 157px !important;
			/*padding-bottom: 20px;*/
		}
			ul#horizontal-list li {
		display: inline;
		margin-left: 2px;
		
	    }
	   
	}
		@media(max-width: 414px){
	    .col-md-3.col-sm-12.self-style-col-3 {
    max-width: 100% !important;
}
		iframe{
		width: 383px !important;
        height: 157px !important;
			/*padding-bottom: 20px;*/
		}
			ul#horizontal-list li {
		display: inline;
		margin-left: 2px;
		
	    }
	   
	}
	@media(max-width: 411px){
	    .col-md-3.col-sm-12.self-style-col-3 {
    max-width: 100% !important;
}
		iframe{
		width: 379px !important;
        height: 157px !important;
			/*padding-bottom: 20px;*/
		}
			ul#horizontal-list li {
		display: inline;
		margin-left: 2px;
		
	    }
	   
	}
	@media(max-width: 375px){
	    .col-md-3.col-sm-12.self-style-col-3 {
    max-width: 100% !important;
}
		iframe{
		width: 343px !important;
        height: 157px !important;
			/*padding-bottom: 20px;*/
		}
			ul#horizontal-list li {
		display: inline;
		margin-left: 2px;
		
	    }
	   
	}
	@media(max-width: 360px){
	    .col-md-3.col-sm-12.self-style-col-3 {
    max-width: 100% !important;
}
		iframe{
		width: 328px !important;
        height: 157px !important;
			/*padding-bottom: 20px;*/
		}
			ul#horizontal-list li {
		display: inline;
		margin-left: 2px;
		
	    }
	   
	}
	@media(max-width: 320px){
	     .col-md-3.col-sm-12.self-style-col-3 {
    max-width: 100% !important;
}
		iframe{
		width: 288px !important;
        height: 157px !important;
			/*padding-bottom: 20px;*/
		}
			ul#horizontal-list li {
		display: inline;
		margin-left: 2px;
		
	    }
	   
	}
	@media(max-width: 280px){
	     .col-md-3.col-sm-12.self-style-col-3 {
        max-width: 93% !important;
    margin-left: 20px;
}
		iframe{
		width: 248px !important;
        height: 157px !important;
			/*padding-bottom: 20px;*/
		}
			ul#horizontal-list li {
		display: inline;
		margin-left: 2px;
		
	    }
	   
	}
	</style>
</head>
<body>
<div class="page-wrapper">
		<?php 
			$select_video=mysqli_query($con,"SELECT *FROM video WHERE status='1' && video_type='thailotteryvideos' ORDER BY id DESC;");
		 ?>
		<?php include('header.php'); ?>
		<?php include('save-account.php'); ?>
		<!-- Video Section -->
<section class="searchprize-sec">
	<div class="auto-container">
		<div class="row">
		     <?php
			
			$tbl_name="video";
			$limit=16;
			$targetpage="?pge";
			if (isset($_GET["user"])){
				$usr=user_data($_GET["user"]);
				$search="where status='1' and uid='".$usr["uid"]."' and && video_type='thailotteryvideos'  ORDER BY id DESC";
			}else{
				$search="where status='1' && video_type='thailotteryvideos'  ORDER BY id DESC";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No thailottery videos found' title='No thailottery videos found.'></div>";
			}
			?>
		    <div class="col-md-12 col-sm-12">
		    <h3>Latest Thailand Lottery Result</h3>
						
						<?php
						$result1=mysqli_query($con,"select *  from thai");
						$row=mysqli_fetch_array($result1);
						?>
						<table class="table table-bordered table-hover" style="width:100%;">
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
					<?php $aa=0;?>
			<?php while($row=mysqli_fetch_array($result)){ ?>
			<?php 
						 $aa = $aa + 1;
						if($aa % 4 != 0){
				?>
			<div class="col-md-3 col-sm-12  self-style-col-3">
				<div class="card mt-3">
					
					<div class="card-body">
						<?= $row['embed_url'];?>
					</div>
					<div class="card-footer">
					    
						<?= substr($row['title'],0,60). " ....";?>
					</div>
					
						<div>
							<ul id="horizontal-list">
								<?php
								 $day=date("d",strtotime($row['created_at']));
								 $month=date("F",strtotime($row['created_at']));
								 $time=date("h:i:s A",strtotime($row['created_at'])-3600);

								
								 ?>
								<li class="name-color"><span class="fa fa-calendar">	
									</span><span class='month'> &nbsp;<?= $month;?></span>&nbsp;<span class='day'><?= $day;?></span>
								</li>
								<li class="name-color">
									<span class="fa fa-clock-o"></span>&nbsp; &nbsp;<?= $time;?>
								</li>
							</ul>
							<ul id="horizontal-list">

									<?
									$query=mysqli_query($con,"SELECT * FROM users WHERE uid='".$row['uid']."'");
									$username=mysqli_fetch_array($query);
?>
								
								<li>
									
									<?php 
								if(isset($userData['username'])){
								if($username['username'] != $userData['username']){ ?>
							<a  href="userpanel/message.php?uid=<?= $row['uid'];?>">
									<li><span class="fa fa-envelope"></span>&nbsp; Send private message</li><br>
								</a>
								<?php }}else{
									?>
										<a href="userpanel/message.php?uid=<?= $row['uid'];?>">
									<li class='envelope'><span class="fa fa-envelope"></span>&nbsp; Send private message</li><br>
								</a>
									<?php
								} ?>
								</li>
								
							</ul>
								<?php
							$photo=$username['photo'];
							if ($photo=="" || !file_exists("userpanel/user_photo/".$photo)){
            				 	if($username['login_type'] != ""){
            					        $photo=$username["photo"];
            					    }else{
            						$photo="extra/default.png";
            					    }
            				
            				}else{
            				 	$photo="../userpanel/user_photo/$photo";
            				
            				}
							?>
							<h6><img style="width:65px; height:50px;" src="<?= $photo ?>" width="65" title='<?= $username['username']?>' alt=''>&nbsp;&nbsp;<b>
								 <?= $username['username']?></b>
							</h6>
						</div>
				</div>
				
			</div>
		<?php 
			}else{
		    echo "<div class=\"col-md-3 col-sm-12 self-style-col-3\">
		    google add
		    </div>";
		}
		} ?>
		</div>
		<?= $pagination?>
	</div>
</section>

	<?php include('footer.php'); ?>
