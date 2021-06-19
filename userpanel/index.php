<?php
ob_start();
session_start();
include "apps/config.php";
include "apps/functions.php";
if(isset($_SESSION["uid"])){
    header("location:dashboard.php");
}
//Include Configuration File
include('googleconfig.php');
$login_button ='';
if(isset($_GET["code"])){

  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

  if(!isset($token['error'])){
    $google_client->setAccessToken($token['access_token']);
    $_SESSION['access_token']=$token['access_token'];

    $google_service = new Google_Service_Oauth2($google_client);
    $data = $google_service->userinfo->get();
    
     $email = $data->email;
 	 $full_name = $data->name;
     $image= $data->picture;
 
 $check_query=mysqli_query($con,"SELECT *FROM users WHERE email='".$email."'");
 
 if($check_query->num_rows){
  	$row=mysqli_fetch_array($check_query);
 
  	$_SESSION["uid"]=$row['uid'];
  	$_SESSION["login_with"]=$row['login_type'];
  	$_SESSION['photo']=$image;
  }else{
  	$insert=mysqli_query($con,"INSERT INTO users(username,email,photo,login_type)VALUES('".$full_name."','".$email."','".$image."','google')");
  	$check_query=mysqli_query($con,"SELECT *FROM users WHERE email='".$email."'");
  	$row=mysqli_fetch_array($check_query);
  	$_SESSION["uid"]=$row['uid'];
  	$_SESSION["login_with"]=$row['login_type'];
	$_SESSION['photo']= $image;
  }
if(isset($_SESSION["uid"])){
    header("location:dashboard.php");
}
  }
}
   

  $login_button = '<a class="btn btn-block btn-info btn-lg" href="'.$google_client->createAuthUrl().'">Login with Google</a>';

// Google API coding end

if(isset($_REQUEST['success'])){
    echo "aasdd";
  echo $success;
  }
if(isset($_REQUEST['unsucessfull'])){
  echo $unsucessfull;
  }
  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css"> <!-- End layout styles -->
    <link rel="shortcut icon" href="images/favicon.png" />
    
    <style type="text/css" media="screen">
         @media(max-width: 778px) and (max-width: 991px){
  .login-form h1{
    margin: 0;
    color: #ffffff;
    text-align: center;
    font-size: 20px;
    font-weight: 500;
    letter-spacing: 2px;
    padding: 0px 0px 30px;
  }
  label{
    margin-left: 27px;
  }
  p{
    margin-left: 27px;
  }
  .login-form .auth .auth-form-light h4, .login-form .auth .auth-form-light h6, .login-form .auth form .icon {
    text-align: center
  }
  .auth-form-light{
    width: 400px !important;
    overflow: auto !important;
  }
  .fg-login{
    height: 50px;
    width: 305px !important;
  }
  .auth .auth-form-light{
    padding: 0px !important;
    margin: -14px !important;
  }
  .login-form .auth .auth-form-light{
    max-width: 340px;
  }
  .login-form .auth form .form-group .form-control{
    width: 275px;

   
  }
  .login-form .auth form .form-group{
    margin-left: 15px;
  }
  .login-form .auth form .auth-form-btn, .login-form .auth form .auth-form-btn.active {
width: 313px;
    margin-left: 15px;
  }
     
  }
  .<style type="text/css" media="screen">
         @media(max-width: 778px) and (max-width: 991px){
  .login-form h1{
    margin: 0;
    color: #ffffff;
    text-align: center;
    font-size: 20px;
    font-weight: 500;
    letter-spacing: 2px;
    padding: 0px 0px 30px;
  }
  label{
    margin-left: 27px;
  }
  p{
    margin-left: 27px;
  }
  .login-form .auth .auth-form-light h4, .login-form .auth .auth-form-light h6, .login-form .auth form .icon {
    text-align: center
  }
  .auth-form-light{
    width: 400px !important;
    overflow: auto !important;
  }
  .fg-login{
    height: 50px;
    width: 305px !important;
  }
  .auth .auth-form-light{
    padding: 0px !important;
    margin: -14px !important;
  }
  .login-form .auth .auth-form-light{
    max-width: 340px;
  }
  .login-form .auth form .form-group .form-control{
    width: 275px;

   
  }
  .login-form .auth form .form-group{
    margin-left: 15px;
  }
  .login-form .auth form .auth-form-btn, .login-form .auth form .auth-form-btn.active {
width: 313px;
    margin-left: 15px;
  }
     
  }
  .form-check{
   margin-left:10px;
  }
  .auth form .auth-link{
      margin-right:10px;
  }
  

    </style>
  </head>
  <body class="login-form">
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            
          <div class="row flex-grow">
            <div class="col-lg-12">
                <h1 class="text-center">Prize Bond Lucky Login Form</h1>
              <div class="auth-form-light text-left p-5 mx-auto">
                <div class="brand-logo">
                  <img src="images/Logo.png" class="d-block mx-auto">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Sign in to continue.</h6>
    <?php


    if (isset($_POST["Submit"])){
      $username=$_POST["username"];
      $password=$_POST["password"];
      $error="";
      if ($username==""){
        $error.="<label style='color:white;'>Username is empty.</label><br>";
      }if (strlen($password)<6){
        $error.="<label style='color:white;'>Password is empty.</label>";
      }if (check_login($username,$password)=="no"){
        $error.="<p style='color:white'>Username or password is invalid.</p>";
      }if (check_login($username,$password)=="ban"){
        $error.="<p style='color:white'>Your account has been banned by admin, for any information contact admin.</p>";
      }
      if ($error!=""){
        echo "<div class='error_message'>$error</div>";
      }else{
        $_SESSION["uid"]=check_login($username,$password);
        header("location:dashboard.php");
      }
    }
    ?>
                <form class="pt-3" method="post" action=''>
                  <div class="form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon icon-user"></i></span>
                    </div>
                    <span></span>
                    <input type="text" class="form-control form-control-lg" name="username" id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                      <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon-lock-open icon"></i></span>
                    </div>
                    <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mt-3">
                    
                    <input type="submit" name="Submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN">

                    <div class="google-btn mt-2">
                    <?php 
                    
                      if($login_button == ''){
                        echo '<div class="text-success">welcome user</div>';
                        if (isset($_SESSION["user_image"])) {
                          echo '<img class="img-responsive img-circle img-thumbnail" src="'.$_SESSION["user_image"].'">';
                        }
                        if (isset($_SESSION['user_first_name'])) {
                          echo '<h3><b>Name:</b>'.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
                        }
                        if (isset($_SESSION['user_email_address'])) {
                          echo '<h3><b>Email:</b>'.$_SESSION['user_email_address'].' </h3>';
                        }
                      }else{
                         ?>
                       <!--  google login -->
                          <div align="center"><a href="<?=$google_client->createAuthUrl()?>"><img  class='fg-login' style=" height: 50px;" width="400px;" src="../userpanel\images/google_login1.png" alt="login with google image"></a></div>
                          <br>
                            <!-- facebook login -->
                          <div align="center"><a href=""><img class='fg-login' style=" height: 50px;" width="400px;" src="../userpanel\images/facebook1.png" alt="login with google image"></a></div>
                          <?php
                      }


                    ?> 
                      
                    </div>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="forgot.php" class="auth-link text-black">Forgot password?</a>
                  </div>
                  
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>