<?php
ob_start();  
session_start();
include "../apps/config.php";
include "../apps/functions.php";

if (isset($_SESSION["a_id"])){
  $admin_data= admin_data($_SESSION["a_id"]);
}else{
  header("location:./");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | Prize Bond Lucky</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="vendors/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./images/favicon.png" />
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
     <!-- Data Tables -->
      <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  -->
      <style>
        label{
          color: white;
        }
        .paginate_button{
          background-color: white !important;
        }
        #users_info{
          color: white;
        }
        iframe{
          width: 450px !important;
          height: 400px !important;
        }
      </style>
       </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="dashboard.php">
            <img src="images/Logo.png" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome to Prize Bond Lucky Dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            

             <!-- notification start -->
            <?php 
            // select notification

                $selsct_notify = "SELECT *FROM notifications WHERE tkt_id IS NOT NULL && status='0' && sender_name !='admin' ";
                $run_notify = mysqli_query($con,$selsct_notify);
                // echo "<pre>";
                // print_r($run_notify);
                // exit();
             ?>
            <li class="nav-item dropdown" >
              <a  class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech" style="font-size:33px"></i>
               <!--  show number of message -->
                <span style="width:16px; height:16px;margin-top: -3px;margin-left: 8px; font-size: 10px;" class="count"><?= $run_notify->num_rows;?></span>
              </a>
              <div style="overflow: auto; height: 400px;" class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a href="viewall-notification.php" class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have <?= $run_notify->num_rows;?> unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <!-- show notification  -->
                <?php while($row=mysqli_fetch_array($run_notify)){ ?>
                  <?php 
                   
// update notification

                     if (isset($_GET["uid"])) {
                      $id = $_GET["uid"];
                      $update="UPDATE notifications SET status ='1' where sender_id='".$id."' && receiver_id='".$row['receiver_id']."' ";
                      mysqli_query($con,$update);
                      $loc='message.php?uid='.$row['receiver_id'];
                    }

                    // if(isset($_GET['reply'])){
                    //   $update="UPDATE notifications SET status ='1' where tkt_id='".$_GET['reply']."' && sender_name !='admin' "; 
                    //   mysqli_query($con,$update);
                    // }
                  ?>

                  <?php $get_users=mysqli_query($con,"SELECT * FROM users  where uid= '".$row['sender_id']."' "); 
                      $get_user_data=mysqli_fetch_array($get_users);
                    ?>
                <a class="dropdown-item preview-item" href="<?=$row['related_link']?>">
                  <div class="preview-thumbnail">
                    
                    <img class="img-sm profile-pic" src="user_photo/<?= $get_user_data['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image"> 
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark"><?=$get_user_data['username']?></p>
                    <p class="font-weight-light small-text"><?=$row['description']?> </p>
                  </div>
                </a>
               <?php }   ?>
              </div>
            </li>
            <!-- notification end -->
            <li class="nav-item dropdown  d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="user_photo/<? echo $admin_data['photo']?>"" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image"> <span class="font-weight-normal"> <?= $admin_data['admin_name'];?></span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="user_photo/<? echo $admin_data['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">
                  <p class="mb-1 mt-3"><?= $admin_data['admin_name'];?></p>
                  <p class="font-weight-light text-muted mb-0"><?= $admin_data['email'];?></p>
                </div>
                <a class="dropdown-item" href="admin-profile.php"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a  href="?admin_logout=true" class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar self-sidebar-style sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="user_photo/<? echo $admin_data['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?= $admin_data['admin_name'];?></p>
                  <p class="designation">Administrator</p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>

            
            <li class="nav-item nav-category"><span class="nav-link">Pages</span></li>
            <li class="nav-item">
              <a class="nav-link" href="users.php">
                <span class="menu-title">Users</span>
                <i class="icon-people menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="posting-a.php">
                <span class="menu-title">Approved</span>
                <i class=" icon-like menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="delete-oneakra.php">
                <span class="menu-title">Oneakra</span>
                <i class=" icon-like menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="posting-d.php">
                <span class="menu-title">Delete</span>
                <i class="icon-close menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vip.php">
                <span class="menu-title">Vip Paper</span>
                <i class="icon-user-following menu-icon"></i>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="display.php">
                <span class="menu-title">Draw Display</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="hint.php">
                <span class="menu-title">Draw Hint</span>
                <i class=" icon-puzzle menu-icon"></i>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="result.php">
                <span class="menu-title">Draw Result</span>
                <i class="icon-trophy menu-icon"></i>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="thai.php">
                <span class="menu-title">Thai Result</span>
                <i class="icon-trophy  menu-icon"></i>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="thaivip.php">
                <span class="menu-title">Thai Vip</span>
                <i class="icon-user-following menu-icon"></i>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="setting.php">
                <span class="menu-title">Setting</span>
                <i class="icon-settings menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ticket.php">
                <span class="menu-title">Check Ticket</span>
                <i class="icon-settings menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="schedule.php">
                <span class="menu-title">Schedule</span>
                <i class="icon-settings menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="advertisement.php">
                <span class="menu-title">Advertisement</span>
                <i class="icon-settings menu-icon"></i>
              </a>
            </li>
            <li class="nav-item text-success">
               Certificates
               </li>
          <li class="nav-item">
             <a class="nav-link" href="dsc.php">
             <span class="menu-title" title="Defense Saving Certificate">DSC</span>
             <i class="icon-settings menu-icon"></i>
             
             </a>
          </li>
                  <li class="nav-item"> 
                    <a class="nav-link" href="bsc.php">
                    <span class="menu-title" title="Behbood Savings Certificate">BSC</span>
                    <i class="icon-settings menu-icon"></i>
                    
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="ric.php">
                         <span class="menu-title" title="Regular Income Certificate">RIC</span>
                        <i class="icon-settings menu-icon"></i>
                      </a>
                  </li>
                  <li class="nav-item"> 
                        <a class="nav-link" href="ssc.php">
                             <span class="menu-title" title="Special Savings Certificate">SSC</span>
                        <i class="icon-settings menu-icon"></i>
                        </a>
                    </li>
                  <li class="nav-item"> 
                      <a class="nav-link" href="stsc.php">
                         <span class="menu-title" title="Short Term Savings Certificate">STSC</span>
                        <i class="icon-settings menu-icon"></i>
                     
                      </a>
                  </li>
               <li class="nav-item text-success">
               Accounts
               </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="sa.php">
                    <span class="menu-title" title="Savings Account">SA</span>
                        <i class="icon-settings menu-icon"></i>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="pba.php">
                    <span class="menu-title" title="Pensioners Benifit Account">PBA</span>
                    <i class="icon-settings menu-icon"></i>
                    </a>
                </li>
                  <li class="nav-item"> 
                        <a class="nav-link" href="ssa.php">
                        <span class="menu-title" title="Special Savings Account">SSA</span>
                    <i class="icon-settings menu-icon"></i>
                        
                        </a>
                    </li>
                  <li class="nav-item"> 
                      <a class="nav-link" href="sfwa.php">
                            <span class="menu-title" title="Shuhadas Family Welfare">SFWA</span>
                            <i class="icon-settings menu-icon"></i>
                      </a>
                  </li>
                  

        
            
             
              

             <li class="nav-item">
              <a class="nav-link" href="../logout.php">
                <span class="menu-title">Logout</span>
                <i class=" icon-logout menu-icon"></i>
              </a>
            </li>
            
            
          </ul>
        </nav>