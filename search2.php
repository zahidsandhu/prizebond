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
<link rel="canonical" href="http://www.prizebond.in/">
<title>Prizebond</title>

<meta property="fb:page_id" content="240734989375">
<meta name="description" content="Soon">
<link type="text/css" href="extra/styles.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
        <h3>Draw Search Result</h3>
        <div>
            <?php
			if (isset($_POST["search"])){
				$bond=$_POST["bond"];
			    $number=$_POST["no"];
				$r=mysql_fetch_array(mysql_query("select * from list where (numbers like '%$number%' or list like '%$number%') and draw='$bond'"));
				if ($number=="" or $number=="- Any -"){
					echo "<div class='Swarn'>You have not select any number for search.</div>";
				}elseif(strlen($number)<6){
					echo "<div class='Swarn'>Please enter six digit number like 999999.</div>";
				}elseif(!$r){
					echo "<div class='Swarn'>
					<img src=extra/sorry.png width='200px'/><br>
					You have not won any prize this time better Luck next time.</div>";
				}else{
					$numbers=explode("break",$r["numbers"]);
					$first=$numbers[0];
					$second="second".$numbers[2];
					$second_amount=$numbers[3];
					strpos($second,$number);
					$draw=$r["drawno"];
					$date=$r["dat"];
					$city=$r["city"];
					$list=$r["list"];
					if ($number==$first){
						$prize="First";
						$amount=$numbers[1];
					}elseif(strpos($second,$number)>0){
						$prize="Second";
						$amount=$numbers[3];
					}elseif(strpos($list,$number)){
						$prize="Third";
						$amount=$r["third"];
					}
					echo "
					<div style='text-align:center;'><img src=extra/cong.png width='400px'/></div>
					<table class='search'>
						<tr class='caption'>
							<td width='60px'>Bond</td>
							<td width='60px'>Prize</td>
							<td width='90px'>Prize Amount</td>
							<td width='50px'>Draw</td>
							<td width='120px'>Draw Date</td>
							<td width='150px'>Held at</td>
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
				}
			}else{
				echo "<div class='Swarn'>You have not select any number for search.</div>";
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

