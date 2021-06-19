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

<title>Akra Challange,List prize bond,pakistan prize bond</title>
<meta name="description" content="prizebond.asia is pakistan site provide all kind of akra challange,list prize bond,list of prize bond,one akra challange,pakistan akra challange" />
<meta name="abstract" content="All about Prize bond draw in pakistan,akra challange, much more"/>
<meta https-equiv="content-type" content="en" />
<meta name="revisit-after" content="1 days"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Generator" content="https://www.prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="https://www.prizebondlucky.net"/>
<meta name="Copyright" content="2013"/>
<meta name="designer" content="https://www.prizebondlucky.net" />
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
    
	<!-- Blog List Section -->
	<section class="blog-list-section">
		<div class="auto-container">
		    <div class="row">
		        <div class="col-sm-12">
		       
			<?php
			$tbl_name="posting";
			$limit=16;
			$targetpage="?pge";
			
			if (isset($_GET["user"])){
				$usr=user_data($_GET["user"]);
				$search="select distinct posting from $tbl_name where page='oneakra' and uid='".$usr["uid"]."' and level='0'   order by dat desc";
			}else{
				$search="select distinct posting from $tbl_name where page='oneakra' and level='0'  order by dat desc";
			}
			$resul=mysqli_query($con,$search);
		
			$total_pages=mysqli_num_rows($resul);
			$result=mysqli_query($con,$search);
			
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No One Akra found' title='No One Akra record found.'></div>";
			}
			
			if (isset($_GET["list"])){
				echo "<div class='listvote'>
				<h1>List of members who have Akra Challenge For ".$_GET["list"]."</h1>
				<table class=\"table table-bordered\">
					<tr>
						<th>Photo</th>
						<th>Username</th>
						<th>Choice</th>
					</tr>";
				$res=mysqli_query($con,"select * from posting where posting='".$_GET["list"]."'");
				while ($rw=mysqli_fetch_array($res)){
					$user=user_data($rw["uid"]);
					$photo=$user["photo"];
					$username=$user["username"];
					if ($photo=="" || !file_exists("userpanel/user_photo/".$photo)){
				 	if($user['login_type'] != ""){
					        $photo=$user["photo"];
					    }else{
						$photo="extra/default.png";
					    }
				
				}else{
				 	$photo="../userpanel/user_photo/$photo";
				
				}
					echo "<tr>
						<td><img src='$photo' width='50px' alt='$username' title='$username'></td>
						<td>$username</td>
						<td>".$_GET["list"]."</td>
					</tr>";
				}
				echo "</table>
				</div>
				";
			}else{
			echo "<div class=\"row\">";
				while ($row=mysqli_fetch_array($result)){
					$user=user_data($row["uid"]);
					$posting=$row["posting"];
					$count=mysqli_num_rows(mysqli_query($con,"select * from posting where posting ='$posting'"));
					$photo=$user["photo"];
					echo "<div class=\"col-md-6 col-sm-12\">
					<div class=\"border rounded p-3 mb-4\">
					<h2 class=\"text-strong\">$posting</h2>
					<div class='vote'>Number of votes ( $count )</div>
					<div class='desp'><a href='?list=$posting'  class=\"btn btn-sm btn-success\">List of members who have voted for this number</a></div>
					</div></div>";
				}
			echo "</div>";
			}
			
			?>
		</div>
                </div>
		    </div>
		</div>
	</section>

	
	
	<?php include('footer.php'); ?>

