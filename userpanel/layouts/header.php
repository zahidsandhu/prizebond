<?php
$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
ob_start(); 
session_start();
include "apps/config.php";
include "apps/functions.php";

if (isset($_SESSION["uid"])){
  $userData=user_data($_SESSION["uid"]);
}else{
  header("location:./");
}
?>

<?php 
  $get_user=mysqli_query($con,"SELECT * FROM users");

  $get_user2=mysqli_query($con,"SELECT * FROM users");
?>

            <?php 
  // PRIZEBOND POST select 

$prizebond_po_page=array("homepage"=>"Homepage","suggestion"=>"Suggestion","formula"=>"Formula","finalgame"=>"Final Game","tenakra"=>"Ten Akra Challange","oneakra"=>"One Akra Challange","open"=>"Open Challange");
$prizebond_post_page_key=array_keys($prizebond_po_page);
//print_r($prizebond_post_page_key);

$prizebond_pa_page=array("guesspaper"=>"Guess paper","photostate"=>"Photo State Paper","winning"=>"Winning Paper");
$prizebond_paper_page_key=array_keys($prizebond_pa_page);
// print_r($prizebond_paper_page_key);

$thailand_po_page=array("thailandpaper"=>"Thailand Paper","thailandtips"=>"Thailand Lottery Tips", "joolottery"=>"Joo Lottery Tips");
$thailand_post_page_key=array_keys($thailand_po_page);
// print_r($thailand_post_page_key);


// $_SESSION['uid']
  $query=mysqli_query($con,"SELECT *FROM posting WHERE uid='".$_SESSION['uid']."'");

  $select1=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'");

  $select2=mysqli_query($con,"SELECT * from posting where created_at >= DATE_SUB(CURDATE(), INTERVAL 6 DAY) && uid='".$_SESSION['uid']."'");


   while($row=mysqli_fetch_array($query)){
    $date=date("yy-m-d");
// prizebond post start
    if(in_array($row['page'],$prizebond_post_page_key)){
     $get_pbp_page[]=$row['page'];

     $get_date=date("yy-m-d",strtotime($row['created_at']));
     if($date === $get_date){
      $today_pbp_post[]=$get_date;
      $today_total_post1=count($today_pbp_post);
     }
     
    $totla_post1=count($get_pbp_page);
    }// prizebond post end
    // prizebond paper start
    elseif(in_array($row['page'],$prizebond_paper_page_key)){
          $get_pb_paper_page[]=$row['page'];

          $get_date=date("yy-m-d",strtotime($row['created_at']));
         if($date === $get_date){
          $today_pb_paper_post[]=$get_date;
         }
         $today_total_post2=count($today_pb_paper_post);
          $totla_post2=count($get_pb_paper_page);

    }// prizebond paper end
    //thailand post start
    elseif(in_array($row['page'],$thailand_post_page_key)){
          $get_thai_post_page[]=$row['page'];

          $get_date=date("yy-m-d",strtotime($row['created_at']));
         if($date === $get_date){
          $today_thai_paper_post[]=$get_date;
          $today_total_post3=count($today_thai_paper_post);
         }
          
          $totla_post3=count($get_thai_post_page);
    }//thailand post 
    
   }
 ?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User | Prize Bond Lucky</title>
    <!-- plugins:css -->
   
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/style.css">
    
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../images/favicon.png" />
   
    <!--images/Logo.png-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav style="background: #141623;" class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="userpanel.php" style="width:100%;">
            <img src="../images/loogo-3.png" alt="logo" class="logo-dark" / style="width:160px;margin-top: 10px;">
          </a>
          <a class="navbar-brand brand-logo-mini self-brand-logo-mini" href="userpanel.php"><img class="self-brand-logo-mini" src="../images/loogo-3.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome to Prize Bond Lucky Dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
           
            <?php 
            // select notification

                $selsct_notify = "SELECT *FROM notifications WHERE(receiver_id='".$_SESSION['uid']."' && status='0') || (status='0' && receiver_id='".$_SESSION['uid']."') ORDER BY id DESC ";
                $run_notify = mysqli_query($con,$selsct_notify);
                
                
    //  select wallet notification
    
                $get_wallet_status=mysqli_query($con,"SELECT *FROM wallet WHERE bond_status='1' && uid='".$_SESSION['uid']."' ORDER BY id DESC ");
                
                $count_status=$get_wallet_status->num_rows + $run_notify->num_rows;
                
                
             ?>
            <li class="nav-item dropdown" >
              <a  class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech"></i>
               <!--  show number of message -->
                <span class="count"><?= $count_status;?></span>
              </a>
              <div style="overflow: auto; height: 400px;" class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a href="viewall-notification.php" class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have <?= $count_status;?> unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <!-- show notification  -->
                
                <?php while($row=mysqli_fetch_array($run_notify)){ ?>
                  <?php 

// update user to user message notification 
                    if (isset($_GET["uid"])) {
                      
                      $id = $_GET["uid"];
                      $update="UPDATE notifications SET status ='1' where sender_id='".$id."' && receiver_id='".$row['receiver_id']."' ";
                      mysqli_query($con,$update);
                      
                    }
  // update admin to user message notification
                    if(isset($_GET['reply'])){
                      $update="UPDATE notifications SET status ='1' where tkt_id='".$_GET['reply']."' "; 
                      mysqli_query($con,$update);
                    }
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
               <?php } 
            //   array_unique()
                while($row2=mysqli_fetch_array($get_wallet_status)){?>
                   <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark text-center">Congratulations <?= $userData['username']?> have win <?=$row2['price']?> Rs against <?=$row2['bond_number']?> prize bond</p>
                    <p class="font-weight-light small-text"> </p>
                  </div>
             <?php }?>
              </div>
            </li>
            <!-- notification end -->
           <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
              <a  class="nav-link d-flex align-items-center dropdown-toggle" id="selectpage" href="#" data-toggle="dropdown" aria-expanded="false">
                <span  class="profile-text font-weight-normal">SELECT PAGE</span>
              </a>
              <div style="  overflow: auto; height:500px;" class=" self-style-pages dropdown-menu dropdown-menu-left navbar-dropdown  py-2" aria-labelledby="selectpage">
                  <?php
                   if ($userData["level"]=="1" or $userData["level"]=="3"){
                       ?>

                      
                <a class="dropdown-item"  href='userpanel.php'>All
                  <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                
                  ?></span>
                </a>
               
                <a class="dropdown-item" href='userpanel.php?see=homepage'>Homepage <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--<= $query->num_rows?>-->
                </span></a>
                
                <a class="dropdown-item" href='userpanel.php?see=suggestion'>Suggestion <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                </span></a>
                
                <a class="dropdown-item" href='userpanel.php?see=formula'>Formula <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--<= $query->num_rows?>-->
                </span></a>
                
                <a class="dropdown-item" href='userpanel.php?see=finalgame'>Final Game <span> &nbsp;&nbsp;&nbsp;&nbsp;
                <!--<= $query->num_rows?>-->
                </span></a>
                
                <a class="dropdown-item" href='userpanel.php?see=tenakra'>Ten Akra Challenge <span>
                    <!--<= $query->num_rows?>-->
                    </span></a>
               
                <a class="dropdown-item" href='userpanel.php?see=oneakra'>One Akra Challenge <span>
                    <!--<= $query->num_rows?>-->
                    </span></a>
                
                <a class="dropdown-item" href='userpanel.php?see=open'>Open Challenge <span>&nbsp;&nbsp;
                <!--<= $query->num_rows?>-->
                </span></a>
                
                <a class="dropdown-item" href='userpanel.php?see=guesspaper'>Guess Papers <span>&nbsp;&nbsp;
                <!--<= $query->num_rows?>-->
                </span></a>
                
                <a class="dropdown-item" href='userpanel.php?see=photostate'>Photo State Papers <span>
                    <!--<= $query->num_rows?>-->
                    </span></a>
               
                <a class="dropdown-item" href='userpanel.php?see=winning' >Winning Papers <span>&nbsp;&nbsp;&nbsp;
                <!--<= $query->num_rows?>-->
                </span></a>
                <?php
                  }
        if ($userData["level"]=="2" or $userData["level"]=="3"){
            ?>
                <a class="dropdown-item">Thailand Papers</a>
                <a class="dropdown-item">Thailand Lottery Tips</a>
                <a class="dropdown-item">Joo Lottery Tips</a> 
                <?php } ?>
              </div>
            </li>
            <li class="nav-item self-dropdown-cls dropdown  d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle self-style-dropdown" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <?php if(isset($_SESSION["login_with"])){?>
                <img class="img-xs rounded-circle ml-2" src="<? echo $userData['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image"> <span class="font-weight-normal">
                <?php }else{?>
                <img class="img-xs rounded-circle ml-2" src="user_photo/<? echo $userData['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image"> <span class="font-weight-normal">
                    <?php }?>
                    <?php echo $userData['username'];?> </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                    <?php if(isset($_SESSION["login_with"])){?>
                <img class="img-xs rounded-circle ml-2" src="<? echo $userData['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image"> <span class="font-weight-normal">
                <?php }else{?>
                  <img class="img-xs rounded-circle" src="user_photo/<? echo $userData['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">
                  <p class="mb-1 mt-3">
                      <?php }?>
                      <?php echo $userData['username'];?></p>
                  <p class="font-weight-light text-muted mb-0"><?php echo $userData['email'];?></p>
                </div>
                <a class="dropdown-item" href="user-profile.php"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile 
                <!--<span class="badge badge-pill badge-danger">1</span>-->
                </a>
                <a class="dropdown-item" href="userpanel.php?post=editprofile"><i class="dropdown-item-icon icon-user text-primary"></i> update Profile</a>
                <a class="dropdown-item" href="message.php"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a  href="?logout=true" class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"><span class="text-primary menu-span-style ml-2">Menu</span> </span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        
        <nav class="sidebar sidebar-offcanvas " id="sidebar">
            <!--sidebar-offcanvas-->
          <ul class="nav">
              <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <?php  if ($userData["level"]=="1" or $userData["level"]=="3"){ ?>
            <li class="nav-item">
              <a class="nav-link" href="userpanel.php">
                <span class="">HOME</span>
                <i class="icon-home menu-icon"></i>
              </a>
            </li>
            <!--<li class="nav-item nav-category">-->
            <!--  <a class="nav-link" href="userpanel.php">-->
            <!--    <span class="menu-title">HOME</span>-->
            <!--    <i class="icon-home menu-icon"></i>-->
            <!--  </a>-->
            <!--</li>-->
      <li class="nav-item nav-category">
              <!--<a class="nav-link" data-toggle="collapse" href="#" aria-expanded="true" aria-controls="prizebondhome">-->
              <!--  <span class="menu-title">Prizebond Post &nbsp;&nbsp;<sup style="color:white;">-->
                   
              <!--      </sup></span>-->
              <!--  <i class="icon-doc menu-icon"></i>-->
              <!--</a>-->
              
            <li id="prizebondhome_hide" class="nav-item nav-category"><span class="nav-link">Prizebond Post</span></li>
              <div class="collapse" id="prizebondhome_show">
                <!--<ul class="nav flex-column sub-menu">-->
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=homepage">Homepage</a></li>
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=suggestion">Suggestion</a></li>
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=formula">Formula</a></li>
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=finalgame">Final Game</a></li>
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=tenakra">Ten Akra Challenge</a></li>
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=oneakra">One Akra Challenge</a></li>
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=open">Open Challenge</a></li>
                <!--</ul>-->
              </div>
            </li>            
      <li class="nav-item nav-category">
              <!--<a class="nav-link" data-toggle="collapse" href="#prizebondpapers" aria-expanded="false" aria-controls="prizebondpapers">-->
              <!--  <span class="menu-title">Prizebond Papers&nbsp;&nbsp;<sup style="color:white;">-->
                   
              <!--      </sup></span>-->
              <!--  <i class="icon-docs menu-icon"></i>-->
              <!--</a>-->
              <li id="prizebondpapers-hide" class="nav-item nav-category"><span class="nav-link">Prizebond Papers</span></li>
              <div  id="prizebondpapers-show">
              <!--  <ul class="nav flex-column sub-menu">-->
                     <?php  if ($userData["vip"]!=0){ ?>
                  <li class="nav-item"> <a class="nav-link" href="vippapers.php">VIP Papers</a></li>
                    <?php  } ?>
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=guesspaper">Guess Papers</a></li>
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=photostate">Photo State Papers</a></li>
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=winning">Winning Papers</a></li>
              <!--  </ul>-->
              </div>
            </li>
            <?php  } ?>
            <?php if ($userData["level"]=="2" or $userData["level"]=="3"){ ?>
      <li class="nav-item nav-category">
              <!--<a class="nav-link" data-toggle="collapse" href="#thailandpost" aria-expanded="false" aria-controls="thailandpost">-->
              <!--  <span class="menu-title">Thailand Post&nbsp;&nbsp;<sup style="color:white;">-->
              <!--      </sup></span>-->
              <!--  <i class="icon-doc menu-icon"></i>-->
              <!--</a>-->
              <li id="thailandpost-hide" class="nav-item nav-category"><span class="nav-link">Thailand Post</span></li>
              <div id="thailandpost-show">
              <!--  <ul class="nav flex-column sub-menu">-->
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=thailandpaper">Thailand Papers</a></li>
                  
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=thailandtips">Thailand Lottery Tips</a></li>
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=joolottery">Joo Lottery Tips</a></li>
              <!--  </ul>-->
              </div>
            </li>
              <?php  } ?>
              <!--select mesg notification-->
              
              <?php
              $ticket_notifi=mysqli_query($con,"SELECT *FROM notifications WHERE receiver_id='".$_SESSION['uid']."' && sender_name='admin' && status='0' ");
            //   print_r();exit();
            $mesg=$run_notify->num_rows - $ticket_notifi->num_rows;
              ?>
              <li class="nav-item nav-category">
              <a class="nav-link" href="message.php">
                <span class="menu-title">Messages <sup><span class="text-primary"><?= "&nbsp;&nbsp;&nbsp;".$mesg;?></span></sup></span>
                <i class="icon-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category">
              <a class="nav-link" href="wallet.php">
                <span class="menu-title">Wallet</span>
                <i class="icon-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category">
              <a class="nav-link" href="upload-video.php">
                <span class="menu-title">UPLOAD VIDEO</span>
                <i class="icon-home menu-icon"></i>
              </a>
            </li>  
      <li class="nav-item nav-category">
              <!--<a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="setting">-->
              <!--  <span class="menu-title">Setting</span>-->
              <!--  <i class="icon-settings menu-icon"></i>-->
              <!--</a>-->
              <li id="settin" class="nav-item nav-category"><span class="nav-link">Setting</span></li>
              <div  id="setting_show">
              <!--  <ul class="nav flex-column sub-menu">-->
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=editprofile">Edit Profile</a></li>
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=changepicture">Change Picture</a></li>
                  <li class="nav-item"> <a class="nav-link" href="userpanel.php?post=password">Change Password</a></li>
              <!--  </ul>-->
              </div>
            </li>
            <li class="nav-item nav-category">
              <a class="nav-link" href="ticket.php">
                <span class="menu-title">Ticket <sup><span class="text-primary"><?= "&nbsp;&nbsp;&nbsp;".$ticket_notifi->num_rows;?></span></sup></span></span>
                <i class="icon-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category">
              <a class="nav-link" href="http://prizebond.cubescode.com/">
                <span class="menu-title">Go To Website</span>
                <i class="icon-home menu-icon"></i>
              </a>
            </li>
            
            
           
            
          </ul>
         
        </nav>
        <script>
$(document).ready(function(){
    
    // if($("#setting_show").click()){
    //     $("#setting_show").show();
    // }else{
    //      $("#setting_show").hide();
    // }
    
    // if($("#prizebondhome_show").click()){
    //     $("#prizebondhome_show").show();
    // }else{
    //      $("#prizebondhome_show").hide();
    // }
    
    $("#setting_show").hide();
    $("#prizebondhome_show").hide();
    $("#prizebondpapers-show").hide();
    $("#thailandpost-show").hide();
    
  $("#settin").click(function(){
    $("#setting_show").fadeToggle();
    
  });
  $("#prizebondhome_hide").click(function(){
    $("#prizebondhome_show").fadeToggle();
  });
  $("#prizebondpapers-hide").click(function(){
    $("#prizebondpapers-show").fadeToggle();
  });
  $("#thailandpost-hide").click(function(){
    $("#thailandpost-show").fadeToggle();
  });
});
</script>