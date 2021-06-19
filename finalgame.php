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

<title>Pakistan Prize bond final game Play Your Own Risk</title>
<meta name="description" content="prizebond.asia is pakistan site provide all kind of prize bond final game,final game challange,prize bond online,formula prize bond" />

<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="http://www.prizebondlucky.net"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="http://www.prizebondlucky.net"/>
<meta name="Copyright" content="2013"/>
<meta name="designer" content="http://www.prizebond.net" />
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
	<!-- News Section Two -->
	<section class="page-title" style="background-image:url(images/background/8.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Prizebond <span>Final Game</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Prizebond Final Game</li>
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
			//include "pages/winning_list.php";
			$tbl_name="posting";
			$limit=16;
			$targetpage="?pge";
			if (isset($_GET["user"])){
				$usr=user_data($_GET["user"]);
				$search="where page='finalgame' and uid='".$usr["uid"]."' and level='0'   order by dat desc";
			}else{
				$search="where page='finalgame'  and level='0'   order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No final game found' title='No final game record found.'></div>";
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
							<h6><img onerror='this.onerror=null; this.src='user_photo/default.png src='$photo' width=\"65\" title='".$user["username"]."' alt='".$user["username"]." icon'/><b>&nbsp;&nbsp;".$user["username"]."</b></h6>
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
				<h2>Prize Bond  <span>Final Game</span></h2>
				<div class="text">Extra Text Dummy</div>
			</div>
			
			<div class="row clearfix">
			    <div class="col-md-12">
                <h1>Complete information about Prize bond final game</h1><br><br><br>
                <p>Get ready to learn about a <b>prize bond final game</b> for the users who are willing to buy it straight away! Prize bond is offering out with the free and yet with the useful feature that is known as the prize bond wallet. It is giving out the access for all the visitors as free of cost. By getting through the use of the prize bond final game wallet, you will be getting on with the access of the feature where you will be keeping up on the prize bond timeline of numbers right into the electronic wallet all with us. You will be all able to manage on with the numbers that somehow add to the names and also the deleting of the old names.
                <br><br>You will be checking on all the numbers in the prize bond final game as once you will be entering them into your wallet by clicking on the report button. On top of each single of the draw, we will be checking on with the number for you, and if you are the winner of any prize, you will the information by sending far the SMS on the mobile number which will be providing you the registration as on time as set with all the details of your winning numbers.  We will make sure of the fact that we are keeping away the information wholly private and also secure. Plus we will not be selling or sharing with anything that is to be personally belonging to you. You do not need to get into requirement as it comes to the creation of the wallet account of the prize bond final game. 
                <br><br>
                
By choosing with the <i>prize bond final game</i> wallet, you will be finding it as all acting upon being the free portal that you would be using away as for the storage of the prize bond numbers. This is all done through the creation of the account with us. You would be able to check with all the names all through just one click as instead of entering away with the numbers all over again.  You can, generally, manage on with the numbers just as adding or somehow also deleting different or all numbers. These final game wallets are entirely free for use as we do not at all take the benefits from the numbers. The earning is by some means all based on the advertisements we have on top of the website. This is the primary purpose that somehow attracts a visitor at large and so as nothing else towards the prize bond final game.
<br><br>Now many users want to know that whether there are any alerts if I won the prizes. Well the whole system of prize bond final system has been working on top of the criteria so that you would not be able to get together with the alert on both the mobile and also the email as in case you won any prize but somehow all currently, you have to press the single button to get away with all your numbers checked.
<br><br>This is the complete detailed information related to the <a href="https://www.prizebondlucky.net/prizebondlist.php">prize bond final game</a>  for the users! You can also become the part of this web page if you want to learn about the schedule of the prize bond, and prize bond guesses papers and even photo state papers too. We will keep on updating the readers about the complete program of the prize bond system right through visiting this web page. Get ready to put your investment in prize bond right now!</p>

    	        </div>
			</div>
		</div>
	</section>
	
	
	<?php include('footer.php'); ?>
