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
<title>Contact Us</title>
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
</head>
<body>
	<div class="page-wrapper">
    <?php include('header.php'); ?>
    
    <?php 
    
    if(isset($_POST['send_email'])){
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $description=$_POST['description'];
        
         // send email to user 
          $admin_email="zahidsandhu77a@gmail.com";
          
            $to = 'zahidsandhu77a@gmail.com';
            $subject = 'Contact to admin';
            $message = '<html><body>';
            $message .= "<h1>Name : $name</h1>";
            $message .= "<h1>Address : $address</h1>";
            $message .= "<h1>Email Address : $email</h1>";
            $message .= "<h1>Mobile Number : $mobile</h1>";
            $message .= "<p>$description</p>";
            $message .= '</body></html>';
           
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            // mail($to, $subject, $message, $headers);
        
        
        $check_email=mail($to, $subject, $message, $headers);
        if( $check_email){
            $emai_success="Your email has been sent";
        }else{
            $emai_error="Somthing went wrong";
        }
  
  // send email to user end
        
    }
    
    ?>
    
    	<!-- contact Section start-->
    <!--<section class="contain">-->
		<div class="container pt-2" style="background-color:#f5f5f0;">
		    <h1 class="text-center text-primary"> Contact Us</h1>
		    <?php if(isset($emai_success)){?>
		        <div class="alert alert-success">
		             <button type="button" class="close" data-dismiss="alert">&times;</button>
                   <?= $emai_success;?>
                   <script>
                       setTimeout(function(){ window.location="contact-us.php" }, 3000);
                   </script>
                </div>
		    <?php } elseif(isset($emai_error)){
		        ?>
		        <div class="alert alert-danger">
		             <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <?= $emai_error;?>
                </div>
		        
		        <?php
		    } ?>
		     <form action="" method="post">
			<div class="row clearfix">
                         <div class="col-sm-6">
                              <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" required name="name" placeholder="Enter Name" class="form-control" >
                              </div>
                         </div>
                         <div class="col-sm-6">
                              <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" required name="address" placeholder="Enter Address" class="form-control" >
                              </div>
                         </div>
                         <div class="col-sm-6">
                              <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" required name="email" placeholder="Enter Email" class="form-control" >
                              </div>
                         </div>
                         <div class="col-sm-6">
                              <div class="form-group">
                                <label for="mobile">Mobile Number:</label>
                                <input type="number" minlength="11" maxlength="11" required name="mobile" placeholder="Enter Mobile Number" class="form-control" >
                              </div>
                         </div>
                         <div class="col-sm-12">
                            <div class="form-group">
                              <label for="comment">Description:</label>
                              <textarea class="form-control" required name="description" placeholder="Enter Description" rows="5" ></textarea>
                            </div>
                        </div
                        <div class="col-sm-12">
                            <div class="form-group">
                              <input type="submit" name="send_email" class="btn btn-success self-style-email-btn" value="Send Email">
                            </div>
                        </div>
                        <!--<br>-->
			</div>
			</form>
	    </div>
	<!--</section>-->
	<!-- contact Section end-->
	
	
	
	<?php include('footer.php'); ?>
