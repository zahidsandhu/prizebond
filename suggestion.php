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

<title>Prize Bond Suggestion, Discussion Unique Ideas, Finance And Much More</title>
<meta name="description" content="Prizebondlucky.net is Pakistani website provides all kind of prize bond suggestion, unique ideas, discussion, finance, business, bonds." />
<meta name="abstract" content="All about Prize bond draw in pakistan,live chat and much more"/>
<meta https-equiv="content-type" content="en" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="https://www.prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
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
				<h1>Prizebond <span>Suggestion</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Prizebond Suggestion</li>
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
				$search="where page='suggestion' and uid='".$usr["uid"]."' and level='0'   order by dat desc";
			}else{
				$search="where page='suggestion' and level='0'  order by dat desc";
			}
			include "pages/pagination.php";
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No suggestion found' title='No suggestion record found.'></div>";
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
							<div class=\"w-100 p-3\" style=\"height:370px;\" >$posting</div>
							<div class=\"overlay-box\">
							    <div style=\"display: none;\" id=\"hidden-content\">
                                	$posting
                                </div>
                               <a data-target=\"#ab$inc_id\" data-toggle=\"modal\" data-fancybox=\"post\" data-filter=\"#hidden-content\" data-src=\"#hidden-content\" href=\"javascript:;\"  class=\"plus\"><small style=\"font-size:23px; \">View</small><br>
                                	
                                </a>
							 	<!-- <a  href=\"suggestion-details.php?id=$row[dat]\" class=\"plus\"><small style=\"font-size:23px; \">View</small>
                                	
                                </a>-->
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
							<h6><img  src='$photo' width=\"65\" title='".$user["username"]."' alt='".$user["username"]." icon'/><b>&nbsp;&nbsp;".$user["username"]."</b></h6>
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
        	<h4><img  src="<?= $photo?>" width="65" title="<?= $user['username']?>"" alt="<?= $user["username"]; ?>icon"/>&nbsp;&nbsp;&nbsp;<?= $user['username']?></h4>
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
				<h2>Prize Bond  <span>Suggestion</span></h2>
				<div class="text">Extra Text Dummy</div>
			</div>
			
			<div class="row clearfix">
			    <div class="col-md-12">
                <h2>Prize Bond Suggestion</h2>
                <br><p><h3>Savings prize bonds</h3>
                <br>By getting through this web page, you would be able to have a complete set of information related with the saving's prize bonds and how you can best earn money by choosing this lucky method. Well, we all know the importance of prize bonds. This process is the ultimate way by which you would be able to make with some handsome amount of money in just the least period. However, this prize bond all depends on your luck. You need to be a lot careful about the selection of your prize bond's numbers and serial sequences so that at the end of the day you would be much lucky to be the winner of the prize bond.
              
            <br><br>
            For the information of readers, we would like to mention that prize bond has put into the divisions of so many of the denominations that accurately set within the pricing amounts. You can get the prize bonds in the category amount of 1500 as well as 2000, 2500, 3500, 4000 or even 7500. You can take the help from this web page to learn about the previous set of the records related to the prize bond savings. Once you get closer with this web page, you would be able to have complete insight information as in view with the savings of prize bond and also about the schedule of the prize bond. Prize bond winner announcement is made on a quarterly basis of the terms of the denominations. You can also choose with the student prize bond category and general private category to that is mainly meant for the organization and business areas. If you want to claim your winning prize bond amount, then you should, first of all, fill the application form, and after the long inquiry process, you can hand over your money. 
            <br><br><h4>All about saving's prize bonds:</h4>
        <br><br>Now many of you would be thinking around about what savings prize bond is all about. Saving's prize bond is known out to be the form of the method as from where you would be able to get complete insight information about your prize bonds. You can often get to know about the schedule of the prize bond as well. As soon as the management of the prize bond will be coming over with the discussion of the denomination announcement we will instantly be updated on this web page. <br><br>All through the use of this saving's prize bond, you would also be able to learn about the serial number prize bond sequence that is much high in demand inside the marketplaces. By this prediction, you would be helping you away to get the complete set of information about which number you should be choosing first of all. We have the guess papers for prize bond too. On the basis behalf of the guess papers, you can get much-related information about the sequence serial numbers that have been much in demand, or we would say in the winning line inside the prize bond market for you. 


<br><br>So this was the end of the discussion about the saving's prize bonds! No doubt that with the passage of time, the demand and popularity of the prize bond are getting maximum high, and so many people are making an effort where they can try their luck and be the lucky one to attain the handsome amount of money. If you believe that in luck, draw works, then without wasting any time gets connected with saving's prize bond right now! 


You can be the lucky one!<h3>Savings prize bonds</h3>
                <br>By getting through this web page, you would be able to have a complete set of information related with the saving's prize bonds and how you can best earn money by choosing this lucky method. Well, we all know the importance of prize bonds. This process is the ultimate way by which you would be able to make with some handsome amount of money in just the least period. However, this prize bond all depends on your luck. You need to be a lot careful about the selection of your prize bond's numbers and serial sequences so that at the end of the day you would be much lucky to be the winner of the prize bond.
              
            <br><br>
            For the information of readers, we would like to mention that prize bond has put into the divisions of so many of the denominations that accurately set within the pricing amounts. You can get the prize bonds in the category amount of 1500 as well as 2000, 2500, 3500, 4000 or even 7500. You can take the help from this web page to learn about the previous set of the records related to the prize bond savings. Once you get closer with this web page, you would be able to have complete insight information as in view with the savings of prize bond and also about the schedule of the prize bond. Prize bond winner announcement is made on a quarterly basis of the terms of the denominations. You can also choose with the student prize bond category and general private category to that is mainly meant for the organization and business areas. If you want to claim your winning prize bond amount, then you should, first of all, fill the application form, and after the long inquiry process, you can hand over your money. 
            <br><br><h4>All about saving's prize bonds:</h4>
        <br><br>Now many of you would be thinking around about what savings prize bond is all about. Saving's prize bond is known out to be the form of the method as from where you would be able to get complete insight information about your prize bonds. You can often get to know about the schedule of the prize bond as well. As soon as the management of the prize bond will be coming over with the discussion of the denomination announcement we will instantly be updated on this web page. <br><br>All through the use of this saving's prize bond, you would also be able to learn about the serial number prize bond sequence that is much high in demand inside the marketplaces. By this prediction, you would be helping you away to get the complete set of information about which number you should be choosing first of all. We have the guess papers for prize bond too. On the basis behalf of the guess papers, you can get much-related information about the sequence serial numbers that have been much in demand, or we would say in the winning line inside the prize bond market for you. 


<br><br>So this was the end of the discussion about the saving's prize bonds! No doubt that with the passage of time, the demand and popularity of the prize bond are getting maximum high, and so many people are making an effort where they can try their luck and be the lucky one to attain the handsome amount of money. If you believe that in luck, draw works, then without wasting any time gets connected with saving's prize bond right now! 


You can be the lucky one!</p>

    	        </div>
			</div>
		</div>
	</section>
	
	
	<?php include('footer.php'); ?>
