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

<title>Prize bond open,Open close,Prize bond game,Prize bond baba</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="prizebond.asia is pakistan site provide all kind of Prize bond open,Open close,Prize bond game,Prize bond baba,vip open,vip prize bond and much more" />
<meta name="abstract" content="All about Prize bond draw in pakistan Prize bond open,Open close,Prize bond game,much more"/>

<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="http://www.prizebondlucky.net"/>
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
				$search="select distinct posting from $tbl_name where page='open' and uid='".$usr["uid"]."' && level='0'   order by dat desc";
			}else{
				$search="select distinct posting from $tbl_name where page='open' && level='0'  order by dat desc";
			}
			$resul=mysqli_query($con,$search);
			$total_pages=mysqli_num_rows($resul);
			$result=mysqli_query($con,$search);
			if ($total_pages==0){
				echo "<div class='norecord'><img src='extra/no-record-found.jpg' alt='No One Akra found' title='No One Akra record found.'></div>";
			}
			
			if (isset($_GET["list"])){
				echo "<div>
				<h1>List of members who have Challenge For figure ".$_GET["list"]."</h1>
				<center>
				<h2>List of members who selected this number as First choice </h2>
				<table class=\"table table-bordered table-hover\">
					<tr>
						<th>Photo</th>
						<th>Username</th>
						<th>Choice</th>
					</tr>";
				$res=mysqli_query($con,"select * from posting where f='".$_GET["list"]."'");
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
				
				<h2 style='padding:15px;'>List of members who selected this number as Second choice </h2>
				<table class=\"table table-bordered\">
					<tr>
						<th>Photo</th>
						<th>Username</th>
						<th>Choice</th>
					</tr>";
				$res=mysqli_query($con,"select * from posting where s='".$_GET["list"]."'");
				while ($rw=mysqli_fetch_array($res)){
					$user=user_data($rw["uid"]);
					
					$photo=$user["photo"];
					$username=$user["username"];
					if ($photo==""){
					$photo="extra/default.png";
					}else{
						if($user['login_type'] != ""){
					        $photo=$user["photo"];
					    }else{
						$photo="userpanel/user_photo/$photo";
					    }
					}
					echo "<tr>
						<td><img src='$photo' width='50px' alt='$username' title='$username'></td>
						<td>$username</td>
						<td>".$_GET["list"]."</td>
					</tr>";
				}
				echo "</table></center>";
				
				echo" </div>
				";
			}else{
			echo "<div class=\"row\">";
				for ($a=1; $a<=10; $a++){
					$user=user_data($row["uid"]);
					$posting=explode("-",$row["posting"]);
					$first=$posting[0];
					$second=$posting[1];
					$first=mysqli_num_rows(mysqli_query($con,"select * from posting where page='open' and f like '%$a%' && level='0'"));
					$second=mysqli_num_rows(mysqli_query($con,"select * from posting where page='open' and s like '%$a%' && level='0'"));
					$photo=$user["photo"];
					if (strlen($a)==1){
						$a="0$a";
					}else{
						$a=$a;
					}
					echo "<div class=\"col-md-6 col-sm-12\">
					<div class=\"border rounded p-3 mb-4\">
					<h2 class=\"text-strong\">$a</h2>
					<div class='vote'>Number of vote First Choice ( $first )</div>
					<div class='vote'>Number of vote Second Choice ( $second )</div>
					<div class='desp'><a href='?list=$a' class=\"btn btn-sm btn-success\">List of members who have voted for this number</a></div>
					</div></div>";
				}
			echo "</div>";
			}
			
			?>
		
                </div>
		    </div>
		</div>
	</section>

	
	
	<?php include('footer.php'); ?>

