<?php
if(isset($_GET['admin_logout'])){
	session_destroy();
	//unset($_SESSION['a_id']);
	header("location:../index.php");	
}
$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
date_default_timezone_set("Asia/Karachi"); // Default Time Zone
function check_username($username) // "Check Username is registered or not "
{
	global $con;
	$result=mysqli_query($con,"select * from users where username='$username'");
	return $count=mysqli_num_rows($result);
}
function check_email($email){	// "Check Email is registered or not "
	global $con;
	$result=mysqli_query($con,"select * from users where email='$email'");
	return $count=mysqli_num_rows($result);
}
function check_login($username, $password){		// Check user Login
	$result=mysqli_query($con,"select * from users where (email='$username' or username='$username') and password='$password'");
	$count=mysqli_fetch_array($result);
	if (!$count){
		return "no";
	}elseif($count["status"]=="1"){
		return "ban";
	}else{
		return $count["uid"];
	}
}
function admin_data($a_id){ // Get admin Data after Login
	global $con;
	$result=mysqli_query($con,"SELECT * from admin where id='".$a_id."' ");
	$ad_data=mysqli_fetch_array($result);
	return $ad_data;
}
function user_data($uid){ // Get User Data after Login
	global $con;
	$result=mysqli_query($con,"select * from users where uid='$uid' or username='$uid'");
	$count=mysqli_fetch_array($result);
	return $count;
}
function get_posting($by,$what){	// Get Posting
	$result=mysqli_query($con,"select * from posting where $what='$by'");
	$array=array();
	while ($row=mysqli_fetch_assoc($result)){
		$array[]=$row;
	}
	return $array;
}
function get_us_posting($by,$what,$uid){	// Get Posting
	$result=mysqli_query($con,"select * from posting where $what='$by' and uid='$uid'");
	$array=array();
	while ($row=mysqli_fetch_assoc($result)){
		$array[]=$row;
	}
	return $array;
}
function check_access_post($uid,$page){
	$array=array("finalgame","tenakra","oneakra","open");
	if (in_array($page,$array)){
		$result=mysqli_query($con,"select * from posting where page='$page' and uid='$uid'");
		$row=mysqli_fetch_array($result);
		if ($row){
			return "1";
		}else{
			return "0";
		}
	}else{
		return "0";
	}
}
function timestamp($time){
	$no=explode("-",round(time())-round($time));
	if ($no[0]==""){
		$no=$no[1];
	}else{$no=$no[0];}
	$second =$no;
	$minute=floor($no/60);
	$hour=floor($no/3600);
    $day=floor($no/86400);
	
	if ($second==0)
	{
		$timestamp= "A moment ago"; 
		$new= "<img src='extra/new.gif' align='absmiddle'>";
	}elseif($second<60)
	{
		$timestamp= $second." Seconds ago"; 
		$new= "<img src='extra/new.gif' align='absmiddle'>";
	}elseif($minute==1)
	{
		$timestamp= "One Minute ago"; 
		$new= "<img src='extra/new.gif' align='absmiddle'>";
	}elseif($minute<60)
	{
		$timestamp= $minute." Minutes ago"; 
		$new= "<img src='extra/new.gif' align='absmiddle'>";
	}elseif($hour==1)
	{
		$timestamp= "A Hour ago"; 
		$new= "<img src='extra/new.gif' align='absmiddle'>";
	}elseif($hour<24)
	{
		$timestamp= $hour." Hours ago"; 
		$new= "<img src='extra/new.gif' align='absmiddle'>";
	}elseif($day==1)
	{
		$timestamp= "One Day ago"; 
		$new="";
	}elseif($day>1)
	{
		$timestamp= $day." Days ago"; 
		$new="";
	}
	return "<span class='time'>$timestamp</span> $new";
}
function drawno(){ // Getting Draw No
	global $con;
	$result=mysqli_query($con,"select * from setting");
	$row=mysqli_fetch_array($result);
	return $row["no"];
}

$invalid =   "<div class='alert alert-danger alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>ERORR!</strong> Invalid email. Please add correct email.
</div>";

$verified = "<div class='alert alert-success alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Success!</strong> Email verified successfully and an email is send to your gmail with recovery code,<b>Kindly check</b>.
</div>";

$error =   "<div class='alert alert-danger alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>ERORR!</strong> Invalid email or rcode.
</div>";

$matched = "<div class='alert alert-success alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Success!</strong> Email and rcode verified,<b>Kindly</b> setup new password.
</div>";

$success = "<div class='alert alert-success alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Success!</strong> Password reset succesfully,<b>Now login</b>.
</div>";

$unsuccessful =   "<div class='alert alert-danger alert-dismissible'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>ERORR!</strong> Password not matched Please enter same password.
</div>";
?>
