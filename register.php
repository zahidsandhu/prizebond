<?php
ob_start();
session_start();
include "apps/config.php";
include "apps/functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<!-- Common Header Start-->
<!-- ============================================================================ -->
<title>User Free Registration Forum</title>

<meta property="fb:page_id" content="240734989375">
<link type="text/css" href="extra/styles.css" rel="stylesheet">
<link rel="icon" href="extra/favicon0.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="extra/favicon0.ico" type="image/x-icon">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery00.js"></script>
<script type="text/javascript" src="js/main0000.js"></script>
<link type="text/css" href="extra/jquery-u.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-u.js"></script>
<link type="text/css" href="extra/webs.css" rel="stylesheet">
<style>
  .leftcol h4 , .leftcol form
  {
      width:70%;
      margin:0 auto;
  }
  .leftcol
  {
      padding:8% 0 !important;
  }
</style>


    </head>

<body itemscope itemtype="http://schema.org/WebPage" id="unique_body_id_bestsellers">
<a name="top"></a>
<div style="display: none; position: absolute;" id="altDiv"></div>

	<!--[if lt IE 7]>
    <div style='clear: both; height: 30px; position: absolute; top:0; text-align:center; width:100%;'>
        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode" onclick="_gaq.push(['a._trackPageview', '/out/links/upgradeIE6']);"><img src = "http://t.tmimgcdn.com/themes/default/images/ie6-countdown-bg.png"  alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."    /></a>
    </div>
<![endif]-->

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
	<td class="leftcol">

			            
 			<?php
				//include "template/slider.php";
			?>
		<h4 style="margin-top:10px;color:#3366FF;">Registration Form</h4>
		<form action="" method="post" enctype="multipart/form-data">
		<?php
		if (isset($_POST["Submit"])){
			$username=$_POST["username"];
			$password=$_POST["password"];
			$country=$_POST["country"];
			$city=$_POST["city"];
			$email=$_POST["email"];
			$mobile=$_POST["mobile"];
			$gender=$_POST["gender"];
			$age=$_POST["age"];
			$level=$_POST["level"];
			$error="";
			if ($username==""){
				$error.="<p>Username is empty.</p>";
			}if (check_username($username)){
				$error.="<p>Username has been already taken.</p>";
			}if (strlen($password)<6){
				$error.="<p>Password must be 6 characters.</p>";
			}if ($country==""){
				$error.="<p>Country is empty.</p>";
			}if ($city==""){
				$error.="<p>City is  empty.</p>";
			}if (!filter_var($email, FILTER_VALIDATE_EMAIL) or $email==""){
				$error.="<p>Email is not valid.</p>";
			}if (check_email($email)){
				$error.="<p>Email has been already taken.</p>";
			}if ($mobile=="" or !is_numeric($mobile)){
				$error.="<p>Mobile is invalid.</p>";
			}if ($gender==""){
				$error.="<p>Please selct your gender</p>";
			}if ($age==""){
				$error.="<p>Please select your age.</p>";
			}if ($_FILES["file"]["size"]<10){
				$error.="<p>Please attach your photo.</p>";
			}
			if ($error!=""){
				echo "<div class='error_message'>$error</div>";
			}else{
				$date=date("d F Y");
				$dat=time();
				move_uploaded_file($_FILES["file"]["tmp_name"],"user_photo/$dat" . $_FILES["file"]["name"]);
				$upload="$dat" . $_FILES["file"]["name"];
				mysqli_query("insert into users (username, password, country, city, email, mobile, gender, age, joindate,level,photo)values('$username','$password','$country','$city','$email','$mobile','$gender','$age','$date','$level','$upload')");
				header("location:?s=true");
			}
		}elseif(isset($_GET["s"])){
			echo "<div class='success_message'>Data has been saved successfully.</div>";
		}
		?>
		<table cellspacing="0" class="form-mid">
			<tr>
			  <td style="padding:5px;font-size:13px;">Registration for</td>
			  <td><select name="level">
			    <option value="1">Prizebond</option>
			    <option value="2">Thaliland Lottery</option>
			    <option value="3">Both</option>
			    </select>			  </td>
			  </tr>
			<tr>
				<td width="117" style="padding:5px;font-size:13px;">Username</td>
				<td width="425"><input name="username" type="text" id="username" value="<?php echo $suername; ?>"/></td>
			</tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">Password</td>
			  <td><input name="password" type="password" id="password" /></td>
			  </tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">Country</td>
			  <td><input name="country" type="text" id="country" value="<?php echo $country; ?>"/></td>
			  </tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">City</td>
			  <td><input name="city" type="text" id="city" value="<?php echo $city; ?>"/></td>
			  </tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">Email</td>
			  <td><input name="email" type="text" id="email" value="<?php echo $email; ?>"/></td>
			  </tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">Mobile</td>
			  <td><input name="mobile" type="text" id="mobile" value="<?php echo $mobile; ?>"/></td>
			  </tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">Upload Photo</td>
			  <td>
			    <input type="file" name="file" class='file' accept="image/*" style="width:200px;padding:10px;margin-bottom:5px;"/>
			  </td>
			  </tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">Gender</td>
			  <td><select name="gender" id="gender">
			  		<option value="">Select Gender</option>
					<option value="Male" <?php  if ($gender=="Male"){echo "selected='selected'";} ?>>Male</option>
					<option value="Femail" <?php  if ($gender=="Female"){echo "selected='selected'";} ?>>Female</option>
			    </select>			  </td>
			  </tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">Age</td>
			  <td><select name="age" id="age">
			  		<option value="">Select Age</option>
					<?php
					for ($a=round(date("Y"))-17; $a >=1920; $a--){
						if ($a==$age){
							$sel="selected='selected'";
						}else{
							$sel="";
						}
						echo "<option value='$a' $sel>$a</option>";
					}
					?>
			    </select>			  </td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td><input type="submit" name="Submit" value="Register" class="submit"/></td>
			  </tr>
		</table>
		</form>
    </td>
	<?php
		//include "template/right.php";
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

<!-- This document saved from http://www.templatemonster.com/ -->
