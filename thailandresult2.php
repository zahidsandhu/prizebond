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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<link rel="canonical" href="http://www.prizebond.asia/">
<title>Thailand lottery result,Thai result,Result thailand</title>
<meta name="description" content="Thailand Lottery is Saudi Arabia provide all kind of Thailand lottery result,Thai result,Result thailand,thai lotto result,thai lottery result " />
<meta name="keywords" content="Thailand lottery,Thai lottery,Lottery thai,Thai tips,thailand lottery tips,thai loto,thai result,thailand lottery paper,thailand lottery result,thai lottery tips,thai lottery paper,thailand lottery result,thai papers,Thailand lottery result,Result thailand,thai lotto result,thai lottery result" />
<meta name="abstract" content="All about Thailand lottery saudia arabia Thailand lottery result,Thai result,Result thailand,thai lotto result,thai lottery result,/>
<meta http-equiv="content-type" content="en" />
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
<!-- metaTags http://www.prizebond.asia/ -->
<!-- Thailand lottery,Thai lottery,Lottery thai,Thai tips,thailand lottery tips,thai loto,thai result,thailand lottery paper,thailand lottery result,thai lottery tips,thai lottery paper,thailand lottery result,thai papers,Thailand lottery result,Result thailand,thai lotto result,thai lottery result -->

<meta property="fb:page_id" content="240734989375">
<link type="text/css" href="extra/styles.css" rel="stylesheet">
<link rel="icon" href="extra/favicon0.ico" type="image/x-icon">
<link rel="shortcut icon" href="extra/favicon0.ico" type="image/x-icon">
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery00.js"></script>
<script type="text/javascript" src="js/main0000.js"></script>
<link type="text/css" href="extra/jquery-u.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-u.js"></script>
<link type="text/css" href="extra/webs.css" rel="stylesheet">


    </head>

<body itemscope itemtype="http://schema.org/WebPage" id="unique_body_id_bestsellers">
<a name="top"></a>
<div style="display: none; position: absolute;" id="altDiv"></div>

<table id="page">
    <tbody>
        <tr>
         <?php
		 include "template/header.php";
		 ?>   
	
<!-- Page body -->
  <tr>
    <td>

<table class="content">
	<tr>
	<td class="leftcol"><div id="monster-blog">
        <h3>Latest Thailand Lottery Result</h3>
        <div>
            <?php
				if (isset($_GET["show"])){
					$tbl_name="thai";
					$limit=50;
					$targetpage="?pge";
					$search="order by id desc";
					include "pages/pagination.php";
					echo "<table width='100%' cellspacing='0'>
					<tr>
						<td style='padding:5px;background-color:#ccc;'><strong>Date</strong></td>
						<td style='padding:5px;background-color:#ccc;'><strong>First</strong></td>
						<td style='padding:5px;background-color:#ccc;'><strong>Three Numbers</strong></td>
						<td style='padding:5px;background-color:#ccc;'><strong>Down</strong></td>
					</tr>
					";
					while ($row=mysql_fetch_array($result)){
						echo "
					<tr>
							<td style='padding:5px;'>".$row["dat"]."</td>
							<td style='padding:5px;'>".$row["first"]."</td>
							<td style='padding:5px;'>".$row["three"]."</td>
							<td style='padding:5px;'>".$row["down"]."</td>
					</tr>
						";
					}
					echo "
					<tr>
						<td colspan='4'>$pagination</td>
					</tr>
					</table>";
				}else{
				$result=mysql_query("select *  from thai order by id desc");
				$row=mysql_fetch_array($result);
			?>
			<table cellspacing="0">
				<tr>
					<td width="129" style="padding:10px;">Date</td>
					<td width="248" style="padding:10px;"><?php echo $row["dat"]; ?></td>
				</tr>
				<tr>
				  <td style="padding:10px;">First</td>
				  <td style="padding:10px;"><?php echo $row["first"]; ?></td>
				  </tr>
				<tr>
				  <td style="padding:10px;">Three Numbers </td>
				  <td style="padding:10px;"><?php echo $row["three"]; ?></td>
				  </tr>
				<tr>
				  <td style="padding:10px;">Down</td>
				  <td style="padding:10px;"><?php echo $row["down"]; ?></td>
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
		<?php
		include "template/right.php";
		?>
		</tr>
</table>


	</td>
</tr>
<!--// Page body -->

<!-- Page footer -->
	<tr>
	<?php include "template/footer.php"; ?>
	</tr>
<!--// Page footer -->

</tbody>
</table>


</body>
</html>

