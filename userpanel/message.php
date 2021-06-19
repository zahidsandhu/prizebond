<?php include('layouts/header.php');
$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");

?>

<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
             
              
             
              <?php 
              	// insert mesg in database
              	if(isset($_POST['message_send'])){
              		 $reciver_id=$_GET['uid'];
              		 $sanders_id=$_SESSION['uid'];
              		 $message=$_POST['mesg'];

              		 $insert="INSERT INTO user_chat(sanders_id,reciver_id,message) values('".$sanders_id."','".$reciver_id."','".$message."')";
              		 $check_mesg=mysqli_query($con,$insert);
              		 if($check_mesg){
              		 	$sender_id= $_SESSION["uid"];
              		 	$reciver_id=$_GET['uid'];
	                    $description = "You have receive a new message from";
	                    $related_link="message.php?uid=".$sender_id;
	                    

              		 	$insert_notify="INSERT INTO notifications(sender_id,receiver_id,description,related_link) VALUES('".$sender_id."','".$reciver_id."','".$description."','".$related_link."')";
              		 	$run_notify=mysqli_query($con,$insert_notify);
              		 	if($run_notify){
              		 		$loc='message.php?uid='.$reciver_id;
              				 header('location:'.$loc);
              		 	}else{
              		 		$error_msg="<span class='alert alert-success'>Message not send</span>";
              		 		?>
                                    <script> setTimeout(function(){ window.location.href ="message.php"}, 2000);
                                  </script>
                          <?php
              		 	}
              		 }

              		 
              		
              	}

              	// get chat from database

              	if(isset($_GET['uid'])){

              		$selsct_msg="SELECT * FROM user_chat WHERE( reciver_id='".$_GET['uid']."' && sanders_id ='".$_SESSION['uid']."') || ( sanders_id='".$_GET['uid']."' && reciver_id ='".$_SESSION['uid']."') ";
              		$run_query=mysqli_query($con,$selsct_msg);
              		
              		
              	}

               ?>
              <div class="col-md-7 grid-margin stretch-card-self">
                <div class="card custom-scrole">
                	<div class="card-body">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">

								<?php 
								if(isset($_GET['uid'])){
									$username= mysqli_query($con, "SELECT * FROM users WHERE uid= '".$_GET['uid']."' "); 
							$user_data=mysqli_fetch_array($username);

							$login_username= mysqli_query($con, "SELECT * FROM users WHERE uid= '".$_SESSION['uid']."' "); 
					$login_user_data=mysqli_fetch_array($login_username);

							
								}
								
							?>
								<div class="img_cont">
									<img class="img-xs rounded-circle ml-2" src="../user_photo/<?= $user_data['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">
								
								</div>
								<div class="user_info ">

									<span>Chat with<i class="text-primary"> <?php 
									if(isset($user_data['username'])){
										echo $user_data['username'];
									}
									 ?>
									 	
									 </i> </span>
									 <?php if(isset($run_query->num_rows)){ ?>
									<p><?= "Total Message : ". $run_query->num_rows; ?></p>
								<?php } ?>
								</div>
								<div class="video_cam">
									<span><i class="fas fa-video"></i></span>
									<span><i class="fas fa-phone"></i></span>
								</div>
							</div>
							<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div>
						</div>
						<div class="card-body msg_card_body">
							<?php if(isset($run_query)){ ?>
			<?php while ($row=mysqli_fetch_array($run_query)) {?>
				<?php 
					if($row['sanders_id'] == $_SESSION['uid']){
						?>
						

							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									<?= $row['message'];?>
									<br>

									<span class="msg_time_send">
										<?php 
												$get_time=date("d-M-Y (H:i)",strtotime($row['created_at']));
												echo $get_time;
												
												?>
									</span>
								</div>
								<div class="img_cont_msg">
									<!-- <= $login_user_data['photo']?> -->
									<img class="img-xs rounded-circle ml-2" src="user_photo/<?= $login_user_data['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">
								</div>
							</div>


						<?php

					}else{
						?>
						<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img class="img-xs rounded-circle ml-2" src="user_photo/<?= $user_data['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">
								</div>
								<div class="msg_cotainer">
									<?= $row['message'];?>
									<br>
									<span class="msg_time">
										<?php 
												$get_time=date("d-M-Y (H:i)",strtotime($row['created_at']));
												echo $get_time;
												
												?>
									</span>
								</div>
							</div>
						<?php


					}

				 ?>
							
						<?php } //end while ?>
					<?php } ?>

						</div>
						<div class="card-footer ">
							<form action="" method="post" autocomplete="off" >

								<div class="form-group " >
									<!-- <input type="text" name="mesg" class="form-control "> -->
									<textarea required="" name="mesg" class="bg-white text-black form-control " placeholder="Type your message..."></textarea>
									<button type="submit"  name="message_send" class="float-right mt-2 btn btn-sm btn-outline-secondary" value="SEND">
										<i class="icon-action-undo text-primary"></i>&nbsp; SEND
									</button>
									
								</div>
								
								
							</form>
							
						</div>
					</div>
					</div>
              </div>
              
           
           
            <div class="col-md-5 grid-margin stretch-card ">
                <div class="card custom-scrole">
                  <div class="card-body" >
                  	
					<div class="card-body contacts_body" >
					    <!--get sander from notification -->
					    <?php
					    $get_sander= mysqli_query($con,"SELECT *FROM notifications WHERE receiver_id='".$_SESSION['uid']."' && status='0' && tkt_id IS NULL ");
					   $sander_user=mysqli_fetch_array($get_sander);
					  
					    ?>
					    <!--user search start-->
					    <?php  $get_user_search=mysqli_query($con,"SELECT *FROM users");?>
					    <div class="form-group">
					        <label>Search for username</label><br>
					        <input type="text" class="form-control" style="display:unset;" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
					    </div>
					    
						<ul class="contacts" id="myUL">
						   <?php //$row=mysqli_fetch_array($get_user);
						        $get_chat_user=mysqli_query($con,"SELECT *FROM user_chat WHERE sanders_id = '".$_SESSION['uid']."' ");
						        while($rows=mysqli_fetch_array($get_chat_user)){
						             $chat_with[]=$rows['reciver_id'];
						        }
						        
						    ?>
							<?php while($row=mysqli_fetch_array($get_user)){ ?>
							<?php if(in_array($row['uid'],$chat_with)){ ?>
						<li class="list-self-style">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img class="img-xs rounded-circle ml-2 mt-4" src="../user_photo/<?= $row['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">
									
								</div>
								<div class="user_info">
									<a style="text-decoration: none;" href="message.php?uid=<?= $row['uid']?>" >
										<span><?= $row['username']?> <?php
										    if(in_array($row['uid'],$sander_user)){
										        echo "<span style='font-size:12px; color:black;' class='badge badge-primary'>New</span>";
										    }
										?></span>
									</a>
									
								</div>
							</div>
						</li>
						<?php }}?>
						<h3 class="text-primary">start your chat with new users below</h3>
						<?php 
						$get_user_data=mysqli_query($con,"SELECT *FROM users");
						while($row3=mysqli_fetch_array($get_user_data)){ ?>
						
						<li class="list-self-style">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img class="img-xs rounded-circle ml-2" src="../user_photo/<?= $row3['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">
									
								</div>
								<div class="user_info">
									<a style="text-decoration: none;" href="message.php?uid=<?= $row3['uid']?>" >
										<span><?= $row3['username']?></span>
									</a>
									
								</div>
							</div>
						</li>
						<?php } ?>
						   
						</ul>
					</div>
					<div class="card-footer"></div>
                  </div>
                </div>
              </div>
           
           
                
           
              
              
              
     <!--             <div class="col-md-5 grid-margin stretch-card self-stretch-card2">-->
     <!--           <div class="card custom-scrole">-->
     <!--             <div class="card-body" >-->
                  
					<!--<div class="card-body contacts_body" >-->
					<!--    	<div class="form-group">-->
					<!--        <input type="text" class="form-control" style="display:unset;" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">-->
					<!--    </div>-->
					<!--	<ui class="contacts" id="myUL">-->
						  
					<!--		<php while($row2=mysqli_fetch_array($get_user2)){ ?>-->
					<!--	<li>-->
					<!--		<div class="d-flex bd-highlight">-->
					<!--			<div class="img_cont">-->
					<!--				<img class="img-xs rounded-circle ml-2" src="../user_photo/<= $row2['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">-->
									<!-- <span class="online_icon offline"></span> -->
					<!--			</div>-->
					<!--			<div class="user_info">-->
					<!--				<a style="text-decoration: none;" href="message.php?uid=<= $row2['uid']?>" >-->
					<!--					<span><= $row2['username']?></span>-->
					<!--				</a>-->
					<!--				<p>Rashid left 50 mins ago</p>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--	</li>-->
					<!--	<php } ?>-->
					<!--	</ui>-->
					<!--</div>-->
					<!--<div class="card-footer"></div>-->
     <!--             </div>-->
     <!--           </div>-->
     <!--         </div>-->
              
              
              
              
              
              
            </div>
	</div>
		
			<?php

			 include('layouts/footer.php');?>


<!--user search script end -->
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
<!--user search script start -->
