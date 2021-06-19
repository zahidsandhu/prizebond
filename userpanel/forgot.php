<?php
ob_start();
session_start();
include "apps/config.php";
include "apps/functions.php";
if(isset($_REQUEST['invalid'])){
	echo $invalid ;
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
    <link rel="stylesheet" href="css/style.css" <!-- End layout styles -->
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body class="login-form">
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            
          <div class="row flex-grow">
            <div class="col-lg-12">
                <h1 class="text-center">Prize Bond Lucky Forget Password Form</h1>
              <div class="auth-form-light text-left p-5 mx-auto">
                <div class="brand-logo">
                  <img src="images/Logo.png" class="d-block mx-auto">
                </div>
                <h4>Hello! let's start recovering your password</h4>
                <h6 class="font-weight-light"></h6>
                <form class="pt-3" method="post" action="forgot2.php">
                  <div class="form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="icon icon-user"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Kindly enter your email.">
                  </div>
                  <div class="mt-3">
                    <input type="submit" name="Submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="VERIFY ACCOUNT">
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