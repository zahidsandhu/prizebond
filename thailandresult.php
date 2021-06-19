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

<title>Thailand lottery result,Thai result,Result thailand</title>
<meta name="description" content="Thailand Lottery is Saudi Arabia provide all kind of Thailand lottery result,Thai result,Result thailand,thai lotto result,thai lottery result " />
<meta name="keywords" content="Thailand lottery,Thai lottery,Lottery thai,Thai tips,thailand lottery tips,thai loto,thai result,thailand lottery paper,thailand lottery result,thai lottery tips,thai lottery paper,thailand lottery result,thai papers,Thailand lottery result,Result thailand,thai lotto result,thai lottery result" />
<meta name="abstract" content="All about Thailand lottery saudia arabia Thailand lottery result,Thai result,Result thailand,thai lotto result,thai lottery result"/>

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
    
    
    <section class="services-section-three">
		<div class="auto-container">
			<div class="row clearfix">
			    
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
				    
					<div class="inner-box wow bounceIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
							<span class="icon flaticon-bar-chart"></span>
						</div>
                        <?php 
                        $no=drawno();
                        $result=mysqli_query($con,"select * from list order by id desc limit $no");
                        while ($row=mysqli_fetch_array($result)){
                         $draw=$row["draw"];
                         $explode=explode("break",$row["numbers"]);
                         $first=$explode[0];
                         $second=$explode[2];
                         $id=$row["id"];
                         $link=$row["link"]."-$id";
                        ?>
						


                    <h6>Prize bond Draw Result <?php echo $draw; ?></h6>

			<table class="table table-bordered">
				<tr>
					<td>First</td>
					<td><?php echo $first; ?></td>
				</tr>
				<tr>
					<td>Second</td>
					<td><?php echo $second; ?></td>
				</tr>
				<tr>
					<td colspan="2">
					<a href="prizebondlist.php?list=<?php echo $link; ?>" class="btn btn-link">Full Draw Result</a> | <a href="prizebondlist.php" class="btn btn-link">Previous Result</a>
					</td>
				</tr>
  </table>
						
						
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block-three col-lg-4 col-md-12 col-sm-12">
					<div class="inner-box wow bounceIn" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-student"></span>
						</div>
						<?php
}
$result=mysqli_query($con,"select * from hint");
$row=mysqli_fetch_array($result);
?>	
						<h6>Prize bond Latest Draw Hints <?php echo $row["no"]; ?></h6>
                        <table class="table">
                            <tr>
                            <td>Open</td>
                            <td><?php echo $row["open"]; ?></td>
                            </tr>
                            <tr>
                            <td>Close</td>
                            <td><?php echo $row["close"]; ?></td>
                            </tr>
                            <tr>
                            <td>Center</td>
                            <td><?php echo $row["center"]; ?></td>
                            </tr>
                        </table>
					</div>
				</div>
			</div>
		</div>
	</section>
    
	<!-- Blog List Section -->
	<section class="blog-list-section">
		<div class="auto-container">
		    <div class="row">
		        <div class="col-sm-12">
		        <table class="table">
	<tr>
	<td><h3>Latest Thailand Lottery Result</h3>
            <?php
				if (isset($_GET["show"])){
					$tbl_name="thai";
					$limit=16;
					$targetpage="?pge";
					$search="order by id desc";
					include "pages/pagination.php";
					echo "<table class=\"table table-bordered table-hover\">
					<tr>
						<td><strong>Date</strong></td>
						<td><strong>First</strong></td>
						<td><strong>Three Numbers</strong></td>
						<td><strong>Down</strong></td>
					</tr>
					";
					while ($row=mysqli_fetch_array($result)){
						echo "
					<tr>
							<td>".$row["dat"]."</td>
							<td>".$row["first"]."</td>
							<td>".$row["three"]."</td>
							<td>".$row["down"]."</td>
					</tr>
						";
					}
					echo "
					<tr>
						<td colspan='4'>$pagination</td>
					</tr>
					</table>";
				}else{
				$result=mysqli_query($con,"select *  from thai order by id desc");
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
				  <td ><?php echo $row["down"]; ?></td>
				  </tr>
				<tr>
				  <td colspan="2" style="padding:10px;"><a href="?show=all">Previous Result</a></td>
				  </tr>
			</table>
			<?php
			}
			?>
        </div>
    </div>

  
	</td>
	
		</tr>
</table>
                </div>
		    </div>
		</div>
	</section>

	
	
	<?php include('footer.php'); ?>

