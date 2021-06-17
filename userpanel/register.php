<?php
include "apps/config.php";
include "apps/functions.php";
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
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css" />
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
              <div class="auth-form-light text-left p-5 mx-auto">
                <div class="brand-logo">
                  <img src="images/Logo.png" class="d-block mx-auto" width="73" height="70">
                </div>
                <h4 style="color:white">New here?</h4>
                <h6 class="font-weight-light" style="color:white">Signing up is easy. It only takes a few steps</h6>
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
        $error.="<p style='color:red'>Username is empty.</p>";
      }if (check_username($username)){
        $error.="<p style='color:red'>Username has been already taken.</p>";
      }if (strlen($password)<6){
        $error.="<p style='color:red'>Password must be 6 characters.</p>";
      }if ($country==""){
        $error.="<p style='color:red'>Country is empty.</p>";
      }if ($city==""){
        $error.="<p style='color:red'>City is  empty.</p>";
      }if (!filter_var($email, FILTER_VALIDATE_EMAIL) or $email==""){
        $error.="<p style='color:red'>Email is not valid.</p>";
      }if (check_email($email)){
        $error.="<p style='color:red'>Email has been already taken.</p>";
      }if ($mobile=="" or !is_numeric($mobile)){
        $error.="<p style='color:red'>Mobile is invalid.</p>";
      }if ($gender==""){
        $error.="<p style='color:red'>Please selct your gender</p>";
      }if ($age==""){
        $error.="<p style='color:red'>Please select your age.</p>";
      }
      if ($error!=""){
        echo "<div class='error_message' style='color:red'>$error</div>";
      }else{
        $date=date("d F Y");
       $dat=time();
      
       $filename = "$dat".$_FILES['myfile']['name'];
       $store = move_uploaded_file($_FILES['myfile']['tmp_name'],"user_photo/"."$dat".$_FILES['myfile']['name']);
        
        mysqli_query($con,"insert into users (username, password, country, city, email, mobile, gender, age, joindate,level,photo)values('$username','$password','$country','$city','$email','$mobile','$gender','$age','$date','$level','$filename')");
       
        echo "<div class='success_message'> RIGESTOR COMPLETED SUCCESSFULLY</div>";
        
        echo "<script>
            setTimeout(function(){
                window.location.href='index.php';
            }, 3000); 
        </script>";
        // echo "<div class='success_message'>Data has been saved successfully.</div>";
        //header("location:index.php");

      }
    }else if(isset($_GET["s"])){
      echo "<div class='success_message'>Data has been saved successfully.</div>";
    }
    ?>
               <form class="pt-3" method="post" action='' enctype="multipart/form-data">
                <div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="form-group">
                         <select name="level" class="form-control form-control-lg" id="exampleFormControlSelect2">
                    <option value="1">Prizebond</option>
                    <option value="2">Thaliland Lottery</option>
                    <option value="3">Both</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="username" id="exampleInputUsername1" placeholder="Username">
                  </div>
                   <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                  </div>
                   <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="country" id="exampleInputPassword1" placeholder="Country">
                  </div>
                   <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="city" id="exampleInputPassword1" placeholder="City">
                  </div>
                    </div>
                    <div class="carousel-item">
                      <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="mobile" id="exampleInputPassword1" placeholder="Mobile">
                  </div>
                   <div class="form-group">
                    <input type="file" class="form-control form-control-lg" name="myfile" id="exampleInputPassword1">
                  </div>
                   <div class="form-group">
                    <select name="gender" id="gender" class="form-control form-control-lg" id="exampleFormControlSelect2">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Femail">Female</option>
                    </select>
                  </div>
                    <div class="form-group">
                  <select name="age" id="age" class="form-control form-control-lg" id="exampleFormControlSelect2">
                    <option value="">Select Age</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                    <option value="1979">1979</option>
                    <option value="1978">1978</option>
                    <option value="1977">1977</option>
                    <option value="1976">1976</option>
                    <option value="1975">1975</option>
                    <option value="1974">1974</option>
                    <option value="1973">1973</option>
                    <option value="1972">1972</option>
                    <option value="1971">1971</option>
                    <option value="1970">1970</option>
                    <option value="1969">1969</option>
                    <option value="1968">1968</option>
                    <option value="1967">1967</option>
                    <option value="1966">1966</option>
                    <option value="1965">1965</option>
                    <option value="1964">1964</option>
                    <option value="1963">1963</option>
                    <option value="1962">1962</option>
                    <option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option>
                    <option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option> 
                </select>
                </div>
                  <!--<div class="mb-4">-->
                  <!--  <div class="form-check">-->
                  <!--    <label class="form-check-label text-muted">-->
                  <!--      <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>-->
                  <!--  </div>-->
                  <!--</div>-->
                  <div class="mt-3">
                    <input type="submit" name="Submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN UP">
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="index.php" class="text-primary">Login</a>
                  </div>
                    </div>
                  </div>
                    <!-- Left and right controls -->
                      <a class="carousel-control-prev" href="#demo" data-slide="prev">PREV</a>
                      <a class="carousel-control-next" href="#demo" data-slide="next">NEXT</a>
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