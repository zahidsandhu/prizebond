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

<meta https-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Thai papers,Thailand papers,Vip thailand,Golden papers</title>
<meta name="description" content="Thailand lottery is Saudia Arabia Lottery provide all kind of Thai papers,Thailand papers,Vip thailand,Golden papers,thai vip papers and much more" />
<meta name="keywords" content="Thai papers,Thailand papers,Vip thailand,Golden papers,thai vip papers" />
<meta name="abstract" content="All about Thailand lottery saudia arabia Thai papers,Thailand papers,Vip thailand,Golden papers,thai vip papersand much more"/>

<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="http://www.prizebond.asia"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="http://www.prizebondlucky.com"/>
<meta name="Copyright" content="2013"/>
<meta name="designer" content="http://www.prizebond.asia" />
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
</head>
<body>
	<div class="page-wrapper">
 	
	    <!-- Preloader -->
 	
    <?php include('header.php'); ?>
    <?php include('save-account.php'); ?>
	<!-- News Section Two -->
	<section class="news-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Thailand <span>Vip Papers</span></h2>
				<div class="text">Extra Text Dummy</div>
			</div>
			
			<div class="row clearfix">
			    <div class="col-md-12">
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
						
						
			        
    			    <table class="table table-bordered">
            		<tr> 
            				<td> 
			<?php
					echo "
					<a href='?show=all' class='btn btn-primary mb-1'>Previous Papers</a>
					";
					if (isset($_GET["show"])){
						$result=mysqli_query($con,"select * from posting where page='thaivip' ");
						echo "<table class=\"table table-bordered\">
						<tr>
							<th>Date</th>
							<th>Action</th>
						</tr>
						";
						while ($row=mysqli_fetch_array($result)){
							echo "
							<tr>
								<td>".date("d F Y",$row["dat"])."</td>
								<td><a href='?paper=".$row["dat"]."'>Show</a></td>
							</tr>
							";
						}
						echo "</table>";
					}elseif(isset($_GET["paper"])){
							echo "<table>";
							$result= mysqli_query($con,"select * from posting where page='thaivip'    order by dat desc");
							while ($row=mysqli_fetch_array($result)){
								echo "
								<tr>
								<td>
								<img src='user_upload_paper/".$row["posting"]."' width='600' alt='Thailand Lottery VIP Papers' title='Thailand Lottery VIP Papers'>
								</td>
								</tr>
								";
							}
							echo "</table>";
					}else{
							$search= mysqli_query($con,"select * from posting where page='thaivip'    order by dat desc limit 2");
						$total_pages=mysqli_num_rows($search);
						if ($total_pages==0){
							echo "<div class='norecord'>
							<img src='extra/no-record-found.jpg' alt='No vip found' title='No vip record found.'></div>";
						}else{
							echo "<table>";
							$result= mysqli_query($con,"select * from posting where page='thaivip'    order by dat desc");
							while ($row=mysqli_fetch_array($result)){
								echo "
								<tr>
								<td>
								<img src='user_upload_paper/".$row["posting"]."' width='600'>
								</td>
								</tr>
								";
							}
							echo "</table>";
					}
				}	 
			?>
		</td>
            		</tr>
        	        </table>
    	        </div>
			</div>
		</div>
	</section>
	
	
	<?php include('footer.php'); ?>



