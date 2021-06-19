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
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Prize bond schedule list,Prizebond schedule,Bond schedule</title>
<meta name="description" content="prizebond.asia is pakistan site provide all kind of Prize bond schedule list,Prizebond schedule,Bond schedule,Prize schedule,bond list and much more" />
<meta name="abstract" content="All about Prize bond draw in pakistan prize bond schedule list,Prizebond schedule,Bond schedule,Prize schedule,prize bond schedule,prize bonds schedule,prize bond schedule pakistan,pakistan prize bond schedule,bond schedule list,bonds list and much more"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="http://www.prizebond.net"/>
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<!-- data table link  -->



<link rel="stylesheet" type="text/css" href="data_tables_css/datatable/datatables.min.css">

  <link rel="stylesheet" type="text/css" href="data_tables_css/extensions/buttons.dataTables.min.css">

  <link rel="stylesheet" type="text/css" href="data_tables_css/datatable/buttons.bootstrap4.min.css">

<style>
	label{
		margin-right: 20px;
	}
	.btn-group{
		padding-bottom: 10px;
	}
	a.btn.btn-secondary.buttons-copy.buttons-html5.btn-primary.mr-1 {
    background-color: darkgreen;
}
a.btn.btn-secondary.buttons-excel.buttons-html5.btn-primary.mr-1 {
    background-color: teal;
}
a.btn.btn-secondary.buttons-pdf.buttons-html5.btn-primary.mr-1 {
    background-color: #3d433f;
}
	
</style>
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
                        $result=mysqli_query($con,"select * from list limit $no");
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
		
		    <div class="row">
		        <div class="col-sm-12">
		        <table class="table table-bordered table-responsiv">
	<tr>
	<td class="leftcol">
        <div class='search_page schedule_'>
		<div id="sidebar-title">
                    <h2>Draw Schedule </h2>
  </div>
		<form method="post" action="" name="form1">
			<table class="table">
			<tr>
				<td>Previous Year Schedule</td>
				<td>
				<select name="list" class="form-control form-control-sm">
					<?php
					if(isset($_POST['submit'])){
						$selected = $_POST['list'];
					 
					}else{
						$selected = '';
					}
					?>
				 <option value="">Select All</option>
				<?php
				$query = "SELECT * FROM schedule GROUP BY year ORDER BY year DESC";
				$run_query = mysqli_query($con,$query);
				?>
				<?php

				while($row = mysqli_fetch_array($run_query)){?>

				<option value="<?php echo $row['year'];?>" <?php echo ($row['year']==$selected)?'selected':''; ?>>
					<?php echo $row['year'];?>
				</option>

				<?php }?>
				  </select>
				</td>
				<td><input name="submit" type="submit" class="btn btn-primary btn-sm" value='Submit'/></td>
			</tr>
		</table>
			</form>
			<!-- <table class="table table-bordered"> -->
        	<div class='search_page schedule_'>
				<div id="sidebar-title">
            <h2 class="text-capitalize text-center mb-2 theading">
            	Prize bond draw Schedules <?php if(isset($_POST['list']) && $_POST['list']!=''){echo $_POST['list'];} ?>
        	</h2>
  		</div>
  		</div>
<table id="myTable" class="table-responsiv" data-order='[[ 2, "asc" ]]'>
	<thead>
		<tr class="thead">
			<th>Prize Bonds</th>
			<th>Draw #</th>
			<th>Date</th>
			<th>Day</th>
			<th>City</th>
			<th>Complete List</th>
		</tr>
	</thead>
<?php 
if(isset($_POST['submit']) && $_POST['list'] !=''){
  		$run = mysqli_query($con,"SELECT * FROM schedule  WHERE year = '".$_POST['list']."' ");
  	
  		
  	}else{
  	
  		$select_query = "select * from schedule where YEAR(date) = YEAR(CURDATE())";
 	$run = mysqli_query($con,$select_query);
//  select list 

$list_query = "SELECT * FROM list WHERE title IS NOT NULL or title != '' ORDER BY id DESC";
	 $run_list_query = mysqli_query($con,$list_query);
	 

  	}
 	
 ?>
	<tbody>
	<?php  
	
	
	while($fetch = mysqli_fetch_array($run)){ ?>
		<tr class="tbody">
		  
			<td><?php echo $fetch['bond']; ?></td>
			<td><?php echo $fetch['draw_no']; ?></td>
			<td><?php echo $fetch['date'] ?></td>
			<td>
				<?php 
			        $date=date_create($fetch['date']);
					echo  date_format($date,"l");
        		?>
			</td>
			<td><?php echo $fetch['city']; ?></td>
			<td>
			    
				<?php if($fetch['draw_id'] == 0){?>
					<div class="btn btn-info btn-sm ml-2">Upcoming Draw</div>
				
					<?php }else{?>
				<?php
				    $draw_id = $fetch['draw_id'];

					$query = "SELECT link FROM list WHERE id = $draw_id";
					$run1 = mysqli_query($con,$query);
					$result = mysqli_fetch_array($run1);?>
					<a href="<?php echo "prizebondlist.php?list=".$result['link'].'-'.$draw_id ?>" class="btn btn-success btn-sm ml-2">List</a>
						
					
					<?php } ?>
				
				
			</td>
			
		</tr>
	<?php }?>
	</tbody>
</table>


                </div>
		    </div>
		</div>
	</section>

</div>
</div>
</div>
</tr>
</table>


	<section class="news-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Prize Bond <span>Schedule</span></h2>
				<div class="text">Extra Text Dummy</div>
			</div>
			
			<div class="row clearfix">
			    <div class="col-md-12">
                <h1>What to know about Prize bond schedule?</h1><br><br><br><br>
                <p>Have you been thinking about earning money as overnight? If yes, then we are sure that checking out this blog post will help you much about the prize bond schedule. This prize bond schedule scheme system is mentioned to be the legal method regarding making money and hence changing on with the fate. As much similar to the concepts of the currency notes, prize bond is all stated to be the bearer instrument whose medium of the ownership belongs to the holder. <b>Prize Bond Schedule</b>scheme is all somehow regarded as being the setting of the gold investment. Prize Bond Schedule is all taken away to be the right method to earn money and hence, generally, become rich overnight. It can be regarded as to be a golden chance to fulfill owns one’s dreams.
<br><br> It is in simple mentioned as the bearer type of security that is to be all available in denominations of 100 PKR, 200 PKR, as well as 750 PKR, 1500 PKR, plus the 7500 PKR, 15000 PKR, or the 25000 PKR, and also the 40000 PKR respectively. All the categories of the prize bond are to be issued as in the medium of the proper sequence and that too on top of each single of the series that is adding almost one less than 1,000,000 bonds. The <i>prize bond schedule</i> is all arranged on top of the duration over the quarter basis that is to be held as under the common draw method. It is all composed with the similar number of the prizes for the sake of the series. For instance, as in view with the 50 sat, the Rs. 100 Prize Bond is in the timeline of the circulation and on each draw as of where there will be the access of the 50 winners of 1st prize and also with the 150 for next one.
<br><br><h4>Now right here below we will be highlighting <a href="https://www.prizebondlucky.net/prizebondlist.php">prize bond schedule</a> 2019 for you to look for your turn coming in your way:</h4>
             <br><br>15000 will be done on 02-01-2018 in the city of Muzaffarabad.
750 will be done on 15-01-2018 in the city of Lahore.
25000 will be done on 01-02-2018 in the city of Quetta.
7500 01-02-2018 will be done on in the city of Peshawar.
1500  will be done on 15-02-2018 in the city of Karachi.
100 will be done on 15-02-2018 in the city of Multan.
40000 will be done on 01-03-2018 in the city of Lahore.
200 will be done on 15-03-2018 in the city of Faisalabad.

(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br><br>15000 will be done on 02-04-2018 in the city of Multan.
750 will be done on 16-04-2018 in the city of Rawalpindi.
25000 will be done on 02-05-2018 in the city of Faisalabad.
7500  will be done on 02-05-2018 in the city of Hyderabad.
1500  will be done on 15-05-2018 in the city of Quetta.
100 will be done on 15-05-2018 in the city of Karachi.
<br><br>40000 will be done on 01-06-2018 in the city of Peshawar.
200 will be done on 15-06-2018 in the city of Muzaffarabad.
15000 will be done on 03-07-2018 in the city of Lahore.
750 will be done on 16-07-2018 in the city of Faisalabad.
25000 will be done on 01-08-2018 in the city of Rawalpindi.
7500 01-08-2018 will be done on in the city of Quetta.
1500 15-08-2018 will be done on in the city of Karachi.
<br><br>So this is the complete information about the <i>Prize bond schedule 2019</i>! If you want to learn more about the prize bond schedule, then without wasting any time tune into this web page right now!</p>

    	        </div>
			</div>
		</div>
	</section>
	
	
	<?php include('footer.php'); ?>

<script>
	$('#myTable').DataTable( {
		
		dom: 'lBfrtip',
    buttons: [
        'copy', 'excel', 'pdf','print'
    ]
    //"lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
    
} );

</script>