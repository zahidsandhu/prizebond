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
.self-style-a-tag{
    position: relative;margin-left: 216px;margin-top: 138px;
    /*content:"abc";*/
   
}
td.span-hide span {
    display: none;
}
td.span-hide img {
    margin-left:10px;
}
td.img-heid img{
    display: none;
}

</style>
 
</head>
<body>
	<div class="page-wrapper">
    <?php include('header.php'); ?>
		<!-- Services Section Three-->
	<!--<section class="services-section-three">-->
	<!--	<div class="auto-container">-->
	<!--		<div class="row clearfix">-->
			    
				<!-- Services Block -->
				<!--<div class="services-block-three col-lg-4 col-md-6 col-sm-12">-->
				    
				<!--	<div class="inner-box wow bounceIn" data-wow-delay="0ms" data-wow-duration="1500ms">-->
    <!--                    <div class="icon-box">-->
				<!--			<span class="icon flaticon-bar-chart"></span>-->
				<!--		</div>-->
                        <?php 
                        // $no=drawno();
                        // $result=mysqli_query($con,"select * from list order by id desc limit $no");
                        // while ($row=mysqli_fetch_array($result)){
                        //  $draw=$row["draw"];
                        //  $explode=explode("break",$row["numbers"]);
                        //  $first=$explode[0];
                        //  $second=$explode[2];
                        //  $id=$row["id"];
                        //  $link=$row["link"]."-$id";
                        ?>
						


  <!--                  <h6>Prize bond Draw Result <?php echo $draw; ?></h6>-->

		<!--	<table class="table">-->
		<!--		<tr>-->
		<!--			<td>First</td>-->
		<!--			<td><?php echo $first; ?></td>-->
		<!--		</tr>-->
		<!--		<tr>-->
		<!--			<td>Second</td>-->
		<!--			<td><php echo $second; ?></td>-->
		<!--		</tr>-->
		<!--		<tr>-->
		<!--			<td colspan="2">-->
		<!--			<a href="prizebondlist.php?list=<php echo $link; ?>" class="btn btn-link">Full Draw Result</a> | <a href="prizebondlist.php" class="btn btn-link">Previous Result</a>-->
		<!--			</td>-->
		<!--		</tr>-->
  <!--</table>-->
						
						
				<!--	</div>-->
				<!--</div>-->
				
				
				<!-- Services Block -->
<!--				<div class="services-block-three col-lg-4 col-md-12 col-sm-12">-->
<!--					<div class="inner-box wow bounceIn" data-wow-delay="600ms" data-wow-duration="1500ms">-->
<!--						<div class="icon-box">-->
<!--							<span class="icon flaticon-student"></span>-->
<!--						</div>-->
<!--						<php-->
<!--}-->
<!--$result=mysqli_query($con,"select * from hint");-->
<!--$row=mysqli_fetch_array($result);-->
<!--?>	-->
<!--						<h6>Prize bond Latest Draw Hints <php echo $row["no"]; ?></h6>-->
<!--                        <table class="table">-->
<!--                            <tr>-->
<!--                            <td>Open</td>-->
<!--                            <td><php echo $row["open"]; ?></td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                            <td>Close</td>-->
<!--                            <td><php echo $row["close"]; ?></td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                            <td>Center</td>-->
<!--                            <td><php echo $row["center"]; ?></td>-->
<!--                            </tr>-->
<!--                        </table>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
	<!--</section>-->
	
	<section class="searchprize-sec">
	    <div class="auto-container">
	        <div class="row">
	            <div class="col-md-9 col-sm-12 mx-auto">
	                <h3 class="text-center"><?php
	$result=mysqli_query($con,"select * from list order by id desc");
	$row=mysqli_fetch_array($result);
	$date=$row["dat"];
	$draw=$row["draw"];
	echo "Search Prize bond Updated with $date Draw $draw result";
	?></h3>
    <form id="searchForm" name="searchForm" action="search.php" method="post">
    <div class="form-group">
        <label for="search_words_field">Bond</label>
        <select class="form-control" id='search_words_field' name="bond">
            <?php
            $result=mysqli_query($con,"select * from list order by id desc");
            $row=mysqli_fetch_array($result);
            $draw=$row["draw"];
            ?>
            <option value="200" <?php  if ($draw=="200"){echo "selected='selected'";}  ?>>200</option>
            <option value="40000" <?php  if ($draw=="40000"){echo "selected='selected'";}  ?>>40000</option>
            <option value="7500" <?php  if ($draw=="7500"){echo "selected='selected'";}  ?>>7500</option>
            <option value="750" <?php  if ($draw=="750"){echo "selected='selected'";}  ?>>750</option>
            <option value="15000" <?php  if ($draw=="15000"){echo "selected='selected'";}  ?>>15000</option>
            <option value="1500" <?php  if ($draw=="1500"){echo "selected='selected'";}  ?>>1500</option>
            <option value="25000" <?php  if ($draw=="25000"){echo "selected='selected'";}  ?>>25000</option>
            <option value="100" <?php  if ($draw=="100"){echo "selected='selected'";}  ?>>100</option>
        </select>
    </div>
    <div class="form-group">
        <label for="tid_field">6 Digit Bond:</label>
        <input type="text"  name="no" placeholder="Example : 123456,654321,876589" class="form-control">
    </div>
    <div class="form-group row">
    	<div class="col-sm-6">
    	<label for="tid_field">Start 6 Digit Bond Seriese:</label>
    	<input type="text"  name="startno" placeholder="Example : 123451" class="form-control">
    	</div>
    	<div class="col-sm-6">
    	<label for="tid_field">End 6 Digit Bond Seriese:</label>
    	<input type="text"  name="endno" placeholder="Example : 123459" class="form-control">
    	</div>
    </div>
    <div class="form-group">
        <input value="Search" id="searchFormSubmit" type="submit" name="search" class="form-control btn btn-outline-primary"/>
    </div>
    </form>
	                <h4>Prize Bond Theme Provides by Government of Pakistan</h4>
	                <div class="text-justify">
	                    <p>It's the best opportunity to attempt your luck with the astounding venture of it. Many reasons and speculations would put your mind over the possibility that you should place yourself into the process of the nbp opportunity attributable to our diverse system of mechanism and preparing data. As we talk about the investment, at that point for such a large number of the general population prize bond are removed to be a standout amongst the essential vehicles without a doubt.</p>
	                </div>
	            
	            </div>
	        </div>
	    </div>
	</section>
	<?php include('footer.php'); ?>
	
	<!--slider script-->
<script>
    $(document).ready(function(){
     $(".view-tag-show").hide();
        
        $("small").mouseenter(function(){
            $(".view-tag-show").show();
        });
        $("small").mouseleave(function(){
            $(".view-tag-show").hide();
        });
    });
</script>