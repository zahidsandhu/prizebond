<?php include('layouts/header.php');
$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
?>
<?php 
if (isset($_GET["close"])) {
	$id = $_GET["close"];
	$update="UPDATE ticket SET  status ='1' where tkt_id='".$id."' ";
	mysqli_query($con,$update);
	header("location: ticket.php");
}
if (isset($_GET["open"])) {
	$id = $_GET["open"];
	$update="UPDATE ticket SET  status ='0' where tkt_id='".$id."' ";
	mysqli_query($con,$update);
	header("location: ticket.php");
}

	// select data and show 

$slelct_query="SELECT * FROM ticket ORDER BY tkt_id DESC";
$run_query=mysqli_query($con,$slelct_query);

?>

<!-- partial -->

<div class="main-panel">
	<?php if(!isset($_GET['reply'])){?>
		<div class="content-wrapper">

			<div class="row">
				<div class="col-md-12 grid-margin stretch-card">

					<div class="card">
						<div class="card-body">
							<?php if(isset($success_msg)):?>
								<?= "<br>".$success_msg ."<br>";?>
							<?php endif;  ?>
							
							<table class='allpost table table-dark' style="width:100%; overflow:auto;">
								<tr class='tbhead'>
									<td>Ticket Id</td>
									<td>User Name</td>
									<td>Title</td>
									<td>Description</td>
									<td>Status</td>	
									<td>Action</td>
								</tr>
								<?php while ($ary = mysqli_fetch_array($run_query)): ?>
									<?php 
									$get_sta = mysqli_query($con,"SELECT * from chat WHERE tkt_id='".$ary['tkt_id']."' && read_status='0' LIMIT 1 ");
									$value=mysqli_fetch_array($get_sta);
									
									?>
									<tr>
										<td><?= $ary['tkt_id']?></td>
										<td><?= $ary['username']?></td>
										<td>
											<?php if($value['read_status'] == 0){ ?>
												<?php if(isset($value['read_status'])){
													echo "<span class='text-primary'>NEW</span>";
												} ?>
												
											<?php } ?>
											<?= substr($ary['title'],10)?>
										</td>
										<td><p style="width:100px; overflow: hidden;"><?= $ary['description'];?></p>
										</td>
										<td>
											<?php 
											if($ary['status'] == 0){
												echo "<span class='text-success'>
												OPEN</span>";
											}else{
												echo "<span class='text-danger'>
												CLOSE</span>";
											}
											?>
										</td>
										<td>
											<a id="status" href='?reply=<?=$ary['tkt_id']?>' class="btn btn-sm btn-outline-success" style="text-decoration: none;">Reply</a>
											<?php 
											if($ary['status'] == 0){
												?>
												<a href='?close=<?= $ary['tkt_id']?>' class="btn btn-sm btn-outline-danger" style="text-decoration: none;"> Close</a>
												<?php
											}else{
												?>
												<a href='?open=<?= $ary['tkt_id']?>' class="btn btn-sm btn-outline-success" style="text-decoration: none;"> open</a>

												<?php
											}
											?>
										</td>	
									</tr>
								<?php endwhile; ?>

							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php }	?>
	<!-- chat system start  -->

	<!-- partial -->

	<?php 
	if(isset($_POST['mesg_admin'])){

		$uid_get = mysqli_query($con,"SELECT uid from ticket WHERE tkt_id='".$_GET['reply']."' ");
		$uid_ary=mysqli_fetch_array($uid_get);
		$uid = $uid_ary['uid'];
	 	// print_r($uid);exit();
		$tkt_id = $_GET['reply'];
		$message= $_POST['mesg'];
		$raply= "admin";

		$insert_query="INSERT INTO chat (tkt_id,u_id,description, reply_by) values('".$tkt_id."','".$uid."','".$message."','".$raply."')";
		$run_query=mysqli_query($con,$insert_query);

		// insert notifications
		if($run_query){
					$receiver_id = $uid_ary['uid'];
                    $description = "You have receive a new message from admin";
                    $related_link="ticket.php?reply=".$tkt_id;
                     $sender_name="admin";
                     $tkt_id=$tkt_id;
                  
                    $insert_notify="INSERT INTO notifications(receiver_id,description,related_link,sender_name,tkt_id) VALUES('".$receiver_id."','".$description."','".$related_link."','".$sender_name."','".$tkt_id."')";

                    $run_notify=mysqli_query($con,$insert_notify);
		}
		// end insert notifications

		$loc='ticket.php?reply='.$tkt_id;
		 header('Location:'.$loc);

	}


	?>
	
	<?php if(isset($_GET['reply'])){?>
		<?php 
		// update status
		$id = $_GET["reply"];
		$update="UPDATE chat SET  read_status ='1' where tkt_id='".$id."' ";
		mysqli_query($con,$update);

		// /if(isset($_GET['reply'])){
      $update="UPDATE notifications SET status ='1' where tkt_id='".$_GET['reply']."' && sender_name !='admin' "; 
      mysqli_query($con,$update);
                    // }
		$get_message = mysqli_query($con,"SELECT * from chat WHERE tkt_id='".$_GET['reply']."' ");
		
		
		?>
		<div class="content-wrapper" >
			<div class="card custom-card">
				<div class="card-header msg_head">
					<div class="d-flex bd-highlight">
						<div class="img_cont">
							<?php 
	// get user image 
							$get_u_id = mysqli_query($con,"SELECT u_id from chat WHERE tkt_id='".$_GET['reply']."' ");
							$get_id = mysqli_fetch_array($get_u_id);
							
							$get_u_img = mysqli_query($con,"SELECT photo from users WHERE uid='".$get_id['u_id']."' ");
							$get_img = mysqli_fetch_array($get_u_img);
		// echo $get_img['photo'];
		// echo $get_id["u_id"];exit();

							?>
							<img class="img-xs rounded-circle ml-2" src="../user_photo/<?= $get_img['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">
							<!-- <span class="online_icon"></span> -->
						</div>
						<div class="user_info">
							<?php $username= mysqli_query($con, "SELECT username FROM ticket WHERE tkt_id= '".$_GET['reply']."' "); 
							$name=mysqli_fetch_array($username);
							?>
							<span>Chat with <?= $name['username']?></span>
							<p><?= $get_message->num_rows;?> Messages</p>
						</div>
						<div class="video_cam">
							<span><i class="fas fa-video"></i></span>
							<span><i class="fas fa-phone"></i></span>
						</div>
					</div>
					<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
					<div class="action_menu">
								<!-- <ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul> -->
							</div>
						</div>
						<div class="card-body msg_card_body">
							<?php while($chat_ary = mysqli_fetch_array($get_message)):?>
								<?php if($chat_ary['reply_by'] == "user"){ ?>
									<div class="d-flex justify-content-start mb-4">
										<div class="img_cont_msg">
											<img class="img-xs rounded-circle ml-2" src="../user_photo/<?= $get_img['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">
										</div>
										<div class="msg_cotainer ">
											
											<?= $chat_ary['description'];?>
											<br>
												<span class="msg_time text-white" >

												<?php 
												$get_time=date("d-M-Y (H:i)",strtotime($chat_ary['created_at']));
												echo $get_time;
												
												?>
											</span>
										
											
										</div>
										
										
									</div>
								<?php } ?>
								<?php if($chat_ary['reply_by'] == "admin"){?>
									<div class="d-flex justify-content-end mb-4">
										<div class="msg_cotainer_send">
											<?= $chat_ary['description'];?>
											<br>
											<span class="msg_time_send">
												<?php 
												$get_time=date("d-M-Y (H:i)",strtotime($chat_ary['created_at']));
												echo $get_time;
												
												?>
											</span>
										</div>
										<div class="img_cont_msg">
											<img class="img-xs rounded-circle ml-2" src="../user_photo/default.png" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">
										</div>
									</div>
								<?php }?>
								
							<?php endwhile; ?>
						</div>
						<div class="card-footer ">
							<form action="" method="post" autocomplete="off" >

								<div class="form-group " >
									<!-- <input type="text" name="mesg" class="form-control "> -->
									<textarea name="mesg" class="bg-white text-black form-control " placeholder="Type your message..."></textarea>
									<button type="submit"  name="mesg_admin" class="mt-2 btn btn-sm btn-outline-secondary" value="SEND">
										<i class="icon-action-undo text-primary"></i>&nbsp; SEND
									</button>
									
								</div>
								
								
							</form>
							
						</div>
					</div>
				</div> <!-- end container -->
			<?php } ?>


			<!-- chat system end  -->

			<!-- content-wrapper ends -->
			<?php include('layouts/footer.php');?>
