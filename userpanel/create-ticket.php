<?php include('layouts/header.php');
$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
?>
<?php 
			
	// insert  ticket data
	          		if(isset($_POST['submit'])){

	          			$name=mysqli_query($con,"SELECT username FROM users WHERE uid= '".$_SESSION['uid']."' ");
	          			$username=mysqli_fetch_array($name);
	          			
	          			$insert_ticket="INSERT INTO ticket(uid,username,title,description) values('".$_SESSION["uid"]."','".$username['username']."','".$_POST['title']."','".$_POST['descp']."')";

	          			$run_query=mysqli_query($con,$insert_ticket);
// email sending start 
                     $admin="zahidsandhu77a@gmail.com";
                    $to = 'zahidsandhu77a@gmail.com';
                    $subject = 'your Ticket Submission';
                 
        // from and reply-to = admin email
                   //$headers = "From: " . strip_tags($admin) . "\r\n";
                //   $headers .= "Reply-To: ". strip_tags($admin) . "\r\n";
                //   $headers .= "MIME-Version: 1.0\r\n";
                  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                  
     //   html start
                $message = '<html><body>';
                $message .= "<h1> Dear " . strip_tags($username['username']) . " </h1>";
                $message .= "<h3><p>
                Your support ticket ".strip_tags($_POST['title'])." has been submitted.
                </p>  </h3> ";
                 $message .= "<p>
                We reply to all tickets as soon as possible, within 24 to 48 hours. If we expect your ticket will take additional time, we will update you by sending you an email.
                <br><br>You will receive an email notification when our staff replies to your ticket.
                <br><br>Do not reply to this email, this email address is not monitored.<br><br><br><br>
                Sincerely,
                <br><br><br>
                Prizebondlucky Team
                </p>   ";
                $message .= "</body></html>";
    //html end
                
                 mail($to,$subject,$message,$headers);
                 
// email sending end
                  $last_id = mysqli_insert_id($con);
                  $name="user";
                  $insert_chat = "INSERT INTO chat(tkt_id,u_id,description,reply_by)values('".$last_id."','".$_SESSION['uid']."','".$_POST['descp']."','".$name."')";
                    $run_chat = mysqli_query($con,$insert_chat);

	          			if($run_chat){

                    $sender_id= $_SESSION["uid"];
                    $description = "You have receive a new ticket from";
                    $related_link="ticket.php?reply=".$last_id;
                    // $receiver_name="admin";
                    $tkt_id=$last_id;

                    $insert_notify="INSERT INTO notifications(sender_id,description,related_link,sender_name,tkt_id) VALUES('".$sender_id."','".$description."','".$related_link."','".$username['username']."','".$tkt_id."')";
// echo $insert_notify;
// exit();
                    $run_notify=mysqli_query($con,$insert_notify);
                    if($run_notify){
                      $success_msg="<span class='alert alert-success'>Ticket Successfully Submit</span>";
  
                          ?>
                                    <script> setTimeout(function(){ window.location.href ="ticket.php"}, 2000);
                                  </script>
                          <?php
                    }else{
                    $error_msg="<span class='alert alert-success'>Some Error In Database</span>";

                  } 
                    
  
	          			}
	          		}

 ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
 		<div class="row">
       <div class="col-md-3"></div>
		<div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-capitalize">ticket submit form</h4>
                    <?php if(isset($success_msg)):?>
						<?= "<br>".$success_msg ."<br>";?>
                    <?php endif;  ?>
                    <?php if(isset($error_msg)):?>
                      <?= $error_msg;?>
                    <?php endif;  ?>
                    <form class="forms-sample" method="post" action="">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputUsername1" placeholder="Title" value="<?php 
                              if(isset($select_ary['title'])){
                                echo $select_ary['title'];
                              }
                            ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea name="descp" class="form-control" id="exampleTextarea1" rows="6"><?php 
                              if(isset($select_ary['description'])){
                                echo $select_ary['description'];
                              }
                            ?></textarea>
                      </div>
                      <input type='submit' class='btn btn-primary mr-2' name='submit' value='Submit'>
                      
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-3"></div>
          </div>

         </div>
          <!-- content-wrapper ends -->
          <?php include('layouts/footer.php');?>

         