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

<title><?php if(isset($_GET['list'])){
	     $string= str_replace('-', ' ', $_GET['list']);
	      echo ucwords($string);
	  }?> Prizebond Lucky</title>
<meta name="description" content="Prizebondlucky.net is Pakistani website provides all kind of Prime photo state, Photo state papers, prize bond, guess papers, VIP guess paper, lottery tips." />
<meta name="abstract" content="Prime photo state papers, Prize bond guess papers, Prize Bonds Papers"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta https-equiv="content-type" content="en" />
<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="https://www.prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="https://www.prizebondlucky.net"/>
<meta name="Copyright" content="2017"/>
<meta name="designer" content="https://www.prizebondlucky.net" />
<meta name="email" content="prizebondlucky.net" />
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
<!-- CSS for the things we want to print (print view) -->
<style type="text/css" media="print">
header,section.main-slider,section.main-slider,section.luckydraw-sec, section.services-section-three , section.news-section-two, section.sponsors-section, section.call-to-action-two, footer.main-footer{visibility:hidden;display:none;}

</style>
<style>
    /*.table-bordered td, .form-table{*/
    /*    width:12% !important;*/
    /*}*/
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
		        <div class="col-sm-12" style="overflow:auto;">
		        <table class="table table-bordered">
	<tr>
	<td class="leftcol">
	<?php
	if (isset($_GET["list"])){
	$result=mysqli_query($con,"select * from setting");
	  $row=mysqli_fetch_array($result);
	  $no=$row["no"];
	  
	  echo "<h3>Latest Draw List </h3>
	  
	  <div>
	  ";
	  if(isset($_GET['list'])){
	     $string= str_replace('-', ' ', $_GET['list']);
	      echo "<h3>".ucwords($string)."</h3>";
	  }
	  $res=mysqli_query($con,"select * from list order by id desc limit $no");
	  while ($rw=mysqli_fetch_array($res)){
		$title=$rw["title"];
		$link=$rw["link"]."-".$rw["id"];
		echo "
		<a href='?list=$link'>$title</a><br>
		";
	  }
	  echo "</div>";
	
		$list=explode("-",$_GET["list"]);
		$id=$list[count($list)-1];
		$result=mysqli_query($con,"select * from list where id='$id'");
		$row=mysqli_fetch_array($result);
		$no=explode("break",$row["numbers"]);
		$space ="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo "
		
					<h2>Draw No of ".$row["draw"]." Prize Bond Held at ".$row["city"]."</h2>
					<h3>Dated on ".$row["dat"]."</h3><br>
					<h4>1st Prize ".$no[1]."</h4><br>
					<h4 class=\"bg-success text-light font-weight-bold p-2\">".$no[0]."</h4><br>
					<h4>2nd Prize Rs. ".$no[3]."</h4><br>
					<h4 class=\"bg-primary text-light font-weight-bold p-2\">".$no[2]."</h4><br>
					<h4>3rd Prize Rs.".$row["third"]."</h4>
					<a class=\"btn btn-outline-success\" onclick=\"myFunctionprint()\"><i class=\"fa fa-print\"></i>Print / <i class=\"fa fa-download\"></i> Download</a>
				    <p class=\"text-justify prize-list\">".$row["list"]."</p>
				    
				    <script>
				    function myFunctionprint() {
    window.print();
}
				    </script>
			
		
		";
	}else{
	?>
        <div class='search_page'>
		<div id="sidebar-title">
                    <h2>Results (Search and see result with different option)</h2>
  </div>
  <?php
  $result=mysqli_query($con,"select * from setting");
  $row=mysqli_fetch_array($result);
  $no=$row["no"];
  echo "<h3>Latest Draw List</h3>
  <div>
  ";
  $res=mysqli_query($con,"select * from list order by id desc limit $no");
  while ($rw=mysqli_fetch_array($res)){
  	$title=$rw["title"];
	$link=$rw["link"]."-".$rw["id"];
	echo "
	<a href='?list=$link' class=\"btn btn-sm btn-success my-1\">$title</a><br>
	";
  }
  echo "</div>";
  ?>
		<form method="post" action="" name="form1" >
			<table class="table table-bordered " style="width:100%;">
			<tr>
				<td class="form-table">City Wise</td>
				<td><select name="list" class="form-control form-control-sm">
				 <option value="">Select Here</option>
				<?php
				$result=mysqli_query($con,"select distinct city from list order by id desc");
				while ($row=mysqli_fetch_array($result)){
					echo "<option value='".$row["city"]."'>".$row["city"]."</option>";
				}
				?>
				  </select>
				</td>
				<td><input name="submit1" type="submit" class="btn btn-primary btn-sm" value='Submit'/></td>
			</tr>
		</table>
		</form>
		<form method="post" action="" name="form2">
			<table class="table table-bordered ">
			<tr>
				<td class="form-table">Bond Wise</td>
				<td>
				<select name="list" class="form-control form-control-sm">
				<option value="">Select Here</option>
				<?php
				$result=mysqli_query($con,"select distinct draw from list order by id desc");
				while ($row=mysqli_fetch_array($result)){
					echo "<option value='".$row["draw"]."'>".$row["draw"]."</option>";
				}
				?>
				  </select>				</td>
				<td><input name="submit2" type="submit" class="btn btn-primary btn-sm" value='Submit'/></td>
			</tr>
		</table>
		</form>
		<form method="post" action="" name="form3">
			<table class="table table-bordered ">
			<tr>
				<td class="form-table">Year Wise</td>
				<td>
				<select name="list" class="form-control form-control-sm">
				<option value="">Select Here</option>
				<?php
				$result=mysqli_query($con,"select distinct year from list order by id desc");
				while ($row=mysqli_fetch_array($result)){
					echo "<option value='".$row["year"]."'>".$row["year"]."</option>";
				}
				?>
				  </select>				</td>
				<td><input name="submit3" type="submit" class="btn btn-primary btn-sm" value='Submit'/></td>
			</tr>
		</table>
		</form>
		<?php
		if (isset($_POST["submit1"]) or isset($_POST["submit2"]) or isset($_POST["submit3"])){
			$list=$_POST["list"];
			$result=mysqli_query($con,"select * from list where city='$list' or draw='$list' or year='$list' order by id desc");
			echo "
			<table class=\"table table-hover \">
			<tr>
				<th>Date</th>
				<th>City</th>
				<th>Bond</th>
				<th>First</th>
				<th>Second</th>
				<th>Third</th>
			</tr>
			";
			while ($row=mysqli_fetch_array($result)){
				$number=explode("break",$row["numbers"]);
				$link=$row["link"]."-".$row["id"];
				echo "
				<tr>
					<td valign='middle'>".$row["dat"]."</td>
					<td valign='middle'>".$row["city"]."</td>
					<td valign='middle'>".$row["draw"]."</td>
					<td valign='middle'>".$number[0]."</td>
					<td valign='middle'>".$number[2]."</td>
					<td valign='middle'><a href='?list=$link'><img src='extra/third.jpeg' width='25px' align='absmiddle'></a></td>
				</tr>
				";
			}
			echo "</table>";
		}
		?>
  		</div>
<?php
}
?>
	</td>
		</tr>
</table>
                </div>
		    </div>
		</div>
	</section>
	<section class="news-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Prize Bond <span>List</span></h2>
				<div class="text">Extra Text Dummy</div>
			</div>
			
			<div class="row clearfix">
			    <div class="col-md-12">
                <h2>Prize bond Photo State papers</h2>
                <br><p>Hence the millionaires are present all over the world, and finally so many of them have not become rich as being because of the ancestors. However, many of them have put the effort and try with their luck from the involvement of the lucky draws too. They have added upon with the change in their whole lifestyle all through using checking their success as by the side of putting into the investment savings into the timeline of the legal things. 
<br><br>
<h2>What to know about prize bond?</h2><br>

Hence the concept of the <b>Prize bond list in</b> Pakistan is mentioned out to be the legal and many accurate, authentic ways of Government upholding the scheme. It is arranging upon with the chance to the people regarding, generally, taking part over some of the certain forms of the terms, and hence it is also checking on with the category of luck to bring out with some change. This page will be giving you the complete set of details and much-needed information as related with 25000 rupees. We will be updating with all the essential information as in respect with the current list all along with the number of top three winners.  It is to be mentioned that the denomination of Rs. 25000, hence the National Savings of Pakistan (CDNS), the winning amount of 1st prize is almost Rs. 50,000,000 while the three titles of Rs. 15,000,000 as to be each has been reserved for the 2nd position. Further, there is also the placement of the 3rd prizes of Rs. 312,000 that will be awarded to each of 1,696 winning away with the numbers as well. You will be getting the complete sit down the list as related with the Rs. 25000 as soon as it is announced officially by the bench of State Bank of Pakistan.
<br><br>
<h3>Check out Prize bond list right here:</h3><br><br>


<br><br>
Right into this web page, we will be giving you with the information related to the list as to be all draws and results previously announced and going to be published this month. This list is set to be the second largest amount just as after the 40000 amount has been kept away with so many of the premium winning prizes as well. 

<br><br>This scheme has been put together with the high worth, and the awards are mentioned out to be greatly attractive also you should be much aware as about the fact that the category of the winning amount of this can change your life in days. The first prize of 25000 prize bond is mentioned to be Rs.50,000,000/- (Five crores). This is the single prize, and just one person can achieve it. Second prize will have the amount of Rs.15,000,000/- (15 Million Rupee).

<br><br> The third <b>prize bond list</b> amount is set in the range of Rs. 312, 000/ (Three Lac & Twelve thousand) that will that will be given away to around 1696 lucky winners. Just as according to the schedule the worth of  25000 rupees results hence come out with the access of the 7500 rupees draws that usually comes out in February, as well as May, August, and November. This finally means that in one single year, there are almost four draws that are to be declared for this. 

Right from here you can search and also download all previous, and recent coming's list of <a href="https://prizebondlucky.net"><b>Prize bond result</b></a> online. So what are you waiting for? Check out the details of a list of <a href="https://prizebondlucky.net">prize bond</a> and <a href="https://prizebondlucky.net/guesspapers.php">guess papers</a> right now!</p>

    	        </div>
			</div>
		</div>
	</section>
	
	
	<?php include('footer.php'); ?>

