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
<title>Prizebond</title>
<meta name="description" content="Soon">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    <?php include('header.php'); ?>
		<!-- Services Section Three-->
	<section class="services-section-three">
		<div class="auto-container">
			<div class="row clearfix">
			    <div class="col-lg-12 col-md-12 col-sm-12" style='width:100% !important; overflow:auto !important;'>
        <h3>Draw Search Result</h3>
        <div>
            <?php
            $prize="";
			$amount="";
			if (isset($_POST["search"])){
			    
			    if($_POST['startno'] !="" && $_POST['endno'] !=""){
			    if($_POST['startno'] < $_POST['endno']){
			     $start_no=$_POST['startno'];
				    $end_no=$_POST['endno'];
				    while($start_no <= $end_no){
				    	$seriese_ary[]=$start_no;
				    	$start_no++;
				    }
			    }else{
					$seriese_ary[]=0;
					echo "<h3 class='alert alert-info'>Enter corect  seriese</h3>";
				}
				}else{$seriese_ary[]=0;}

				$bond=$_POST["bond"];
			    $number=$_POST["no"];
			    $num_string=$_POST["no"];
			    $submit_ary=explode("," , $num_string);
			   	$merge_ary= array_merge($submit_ary,$seriese_ary);
			   	$submit_ary=array_filter($merge_ary);
			   	
			   	if(empty($submit_ary["0"])){
			    	$submit_ary[0]=$_POST['startno'];
			    	$number=$_POST['startno'];
			    }
			   	
				// echo "<pre>";
				// print_r($submit_ary);
			 //   exit();

			    foreach ($submit_ary as $value2) {
			    	if(strlen($value2) < 6){
			    		echo "<h4 class='text-strong'>Please enter six digit number like 999999.</h4>";
			    		die();
			    	}else{
			    		foreach ($submit_ary as $value) {
			    			if(isset($value)){

			    				$check_search= mysqli_fetch_array(mysqli_query($con,"select * from list where (numbers like '%$value%' or list like '%$value%') and draw='$bond'"));
			    				if(!$check_search){
			    					$error_array[]=$value;
			    				}else{
			    					$match_value[]= $value;
			    				}

			    			} // end if
							
						}// end foreach loop

			    	}
			    }
			    if(isset($error_array)){
			    	$final_error_array=array_unique($error_array);

			    }
			    if(isset($match_value)){
			    	$final_array=array_unique($match_value);
			     }
			  
			    
			   if(isset($final_array)){

				  foreach ($final_array as $final_array_value) {
					$get_search[]=mysqli_fetch_array(mysqli_query($con,"select * from list where (numbers like '%$final_array_value%' or list like '%$final_array_value%') and draw='$bond'"));
				}
			}
			
			 
				if ($number=="" or $number=="- Any -"){
			
				}elseif(strlen($number)<6){
					echo "<h4 class='text-strong'>Please enter six digit number like 999999.</h4>";
				}
				elseif(!isset($get_search)){
					echo "<h4 class='text-strong'>
					<img src=extra/sorry.png width='200px'/><br>
					You have not won any prize this time better Luck next time.</h4>";

				}
				else{
					
					 //$ary_index = count($get_search);
					
					foreach ($final_array as $key => $value) {	
					if($key == $key){
					$numbers=explode("break",$get_search[$key]["numbers"]);
					 $first=$numbers[0];
					 $second="second".$numbers[2]; 
					 $second_amount=$numbers[3];
					 
					 strpos($second,$value);
					$draw=$get_search[$key]["drawno"];
					$date=$get_search[$key]["dat"];
					$city=$get_search[$key]["city"];
					$list=$get_search[$key]["list"];
					if ($value==$first){
						$prize="First";
						$amount=$numbers[1];
					}elseif(strpos($second,$value)>0){
						$prize="Second";
						$amount=$numbers[3];
					}elseif(strpos($list,$value)){
						$prize="Third";
						$amount=$get_search[$key]["third"];
					}
					echo "
					<img src=extra/cong.png width='400px' class=\"img-responsive\"/>
					<h4>You have won $amount against $value bond.</4>
					<table class='search  table  table-bordered' >
						<tr>
							<th>Bond</th>
							<th>Prize</th>
							<th>Prize Amount</th>
							<th>Draw</th>
							<th>Draw Date</th>
							<th>Held at</th>
						</tr>
						<tr>
							<td>$bond</td>
							<td>$prize</td>
							<td>$amount</td>
							<td>$draw</td>
							<td>$date</td>
							<td>$city</td>
						</tr>
					</table>
					";
					
				  } //end if
				}// end foreach loop
				
				}
				
			}else{
				echo "<h3 class='text-strong'>You have not select any number for search.</h3>";
			}
			if(isset($final_error_array)){
				foreach ($final_error_array as $value) {
				 	echo "<p class='text-primary'>You have not won against $value  bond	"."<br></p>";
				 } 
			
			}
			//echo ""
			?>
			</div>
			<br><br><br><br>
    </div>

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

			<table class="table">
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
				
				<!-- Services Block 
				<div class="services-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow bounceIn" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-board"></span>
						</div>
						
					</div>
				</div>-->
				
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
	

	<?php include('footer.php'); ?>