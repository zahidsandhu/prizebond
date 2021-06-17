<?php
ob_start();
session_start();
include "../apps/config.php";
//include "../apps/functions.php";

if (isset($_SESSION["a_id"])){
 
  header("location: dashboard.php");
}
 
?>
<?php
  if (isset($_POST["Submit"])){
      $username=$_POST['user_name'];
      $password=$_POST['user_pass'];

    $result=mysqli_query($con,"SELECT * from admin where admin_name = '".$username."' && password ='".$password."' ");
      $num_row=mysqli_num_rows($result);

      if($num_row > 0){
        $admin_data=mysqli_fetch_array($result);
        
        $_SESSION['a_id'] = $admin_data['id'];
         header("location: dashboard.php");
      }else{
        $ermsg = "Enter correct username OR password ";
      }
    

  }
?>
<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
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
    <link rel="stylesheet" href="css/style.css" <!-- End layout styles -->
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth login-bg-img">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="images/logo.svg">
                </div>
                <h4 class="text-black">Hello! let's get started</h4>
                <h6 class="font-weight-light text-black">Sign in to continue.</h6>
                
                <?php if(isset($ermsg)){
                  echo "<span class='text-danger'>$ermsg</span>";
                } ?>

                <form class="pt-3" method="post" action='index.php'>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="user_name" required id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="user_pass" required id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="mt-3">
                    <!--<a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN IN</a>-->
                    <input type="submit" name="Submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN">
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  <!--<div class="mb-2">-->
                  <!--  <button type="button" class="btn btn-block btn-facebook auth-form-btn">-->
                  <!--    <i class="icon-social-facebook mr-2"></i>Connect using facebook </button>-->
                  <!--</div>-->
                  <!--<div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.html" class="text-primary">Create</a>-->
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