<?php include('layouts/header.php');
$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
?>
<?php 

	// select data and show 

$slelct_query="SELECT * FROM ticket WHERE uid='".$_SESSION['uid']."' ORDER BY tkt_id DESC ";
$run_query=mysqli_query($con,$slelct_query);


?>
<?php 
if(isset($_GET['reply']) || isset($_GET['detail'])){
	$hide= "style='display: none;'";
}
?>

<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper" <?php if(isset($hide)){echo $hide;} ?>>

		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">

				<div class="card">

					<div class="card-body " style="overflow: auto;">
						<?php if(isset($success_msg)):?>
							<?= "<br>".$success_msg ."<br>";?>
						<?php endif;  ?>
						<span class="mb-2" style="float:right;"><a href="create-ticket.php" type="button" class="btn btn-primary btn-sm ">Submit New Ticket</a></span>
						<table class='allpost table table-dark'>
							<tr class='tbhead'>
								<td>Ticket Id</td>
								<td>Title</td>
								<td>Description</td>
								<td>Status</td>
								<td>Action</td>	
							</tr>
							<?php if($run_query->num_rows == 0){
								echo "No data found";
							} 
							?>
							<?php while ($ary = mysqli_fetch_array($run_query)): ?>
								<tr>
									<td><?= $ary['tkt_id']?></td>
									<td><?= $ary['title']?></td>
									<td><p style="width:100px; overflow: hidden;"><?= $ary['description']?></p></td>
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
										<?php 

										if($ary['status'] == 1){
											?>
											<a href='?detail=<?=$ary['tkt_id']?>' class="btn btn-sm btn-outline-success" id="detail" style="text-decoration: none;">Details</a>

											<?php
										}else{
											?>
											<a href='?reply=<?=$ary['tkt_id']?>' id="reply" class="btn btn-sm btn-outline-success" style="text-decoration: none;">Reply</a>
											
											<?php
											$get_sta = mysqli_query($con,"SELECT * from chat WHERE tkt_id='".$ary['tkt_id']."' && read_status='0' LIMIT 1 ");
//echo "<pre>";
 //$get_status = mysqli_fetch_array($get_sta);
// exit();
											while($get_status = mysqli_fetch_array($get_sta)){
												if($get_status['read_status'] == 0){
													echo "<span class='text-danger'>Un Read</span>";
													
												}else{
													echo "<span class='text-success'>Read</span>";
												}
							} //while end
						}

						?>
						
						<?php 
						if($ary['status'] == 1){
							?>
							
							<?php
						}else{
							?>
							

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
<!-- content-wrapper ends -->

<?php 
if(isset($_POST['mesg_user'])){
	$uid = $_SESSION['uid'];
	$tkt_id = $_GET['reply'];
	$message= $_POST['mesg'];
	$raply= "user";

	$insert_query="INSERT INTO chat (tkt_id,u_id,description, reply_by)values('".$tkt_id."','".$uid."','".$message."','".$raply."')";
	$run_query=mysqli_query($con,$insert_query);

	if($insert_query){
		$userData=user_data($_SESSION["uid"]);
		 $sender_name=$userData['username'];
		 $related_link="ticket.php?reply=".$tkt_id;
		 $description = "You have receive a new message";
		 
		$insert_notify="INSERT INTO notifications(description,related_link,sender_name,tkt_id) VALUES('".$description."','".$related_link."','".$sender_name."','".$tkt_id."')";

             $run_notify=mysqli_query($con,$insert_notify);
	}
		$loc='ticket.php?reply='.$tkt_id;
		 header('Location:'.$loc);
		//header("Location:".$_SERVER['PHP_SELF']);

}


?>

<!-- chat system start  -->
<?php if(isset($_GET['reply']) || isset($_GET['detail'])){?>
	<?php 
	if(isset($_GET['reply'])){
		$get_message = mysqli_query($con,"SELECT * from chat WHERE tkt_id='".$_GET['reply']."'");
		
		// echo "<pre>";
		// print_r(mysqli_fetch_array($get_status));
		// print_r(mysqli_fetch_array($get_status));exit();
	}else{

		$get_message = mysqli_query($con,"SELECT * from chat WHERE tkt_id='".$_GET['detail']."' ");
	}
	
	?>
	<div class="content-wrapper">
		<div class="card custom-card">
			<div class="card-header msg_head">
				<div class="d-flex bd-highlight style-admin-chat">
					<div class="img_cont">
						<?php 
	// get user image 
						if(isset($_GET['reply'])){
							$get_u_id = mysqli_query($con,"SELECT u_id from chat WHERE tkt_id='".$_GET['reply']."' ");
							$get_id = mysqli_fetch_array($get_u_id);
							
							$get_u_img = mysqli_query($con,"SELECT photo from users WHERE uid='".$get_id['u_id']."' ");
							$get_img = mysqli_fetch_array($get_u_img);
		// echo $get_img['photo'];
		// echo $get_id["u_id"];exit();
						}else{
							$get_u_id = mysqli_query($con,"SELECT u_id from chat WHERE tkt_id='".$_GET['detail']."' ");
							$get_id = mysqli_fetch_array($get_u_id);
							
							$get_u_img = mysqli_query($con,"SELECT photo from users WHERE uid='".$get_id['u_id']."' ");
							$get_img = mysqli_fetch_array($get_u_img);

						}
						?>
						<img class="img-xs rounded-circle ml-2" src="../user_photo/default.png" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">
						<!-- <span class="online_icon"></span> -->
					</div>
					<div class="user_info ">
						<?php 
						if(isset($_SESSION["a_id"])){
							$adminname= mysqli_query($con, "SELECT admin_name FROM admin WHERE id= '".$_SESSION["a_id"]."' "); 
							$name=mysqli_fetch_array($adminname);
						}

						?>
						<span >Chat with <? if(isset($name['admin_name'])){echo $name['admin_name']; }else{echo "admin";}?></span>
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
								<?php if($chat_ary['reply_by'] == "admin"){ ?>
									<div class="d-flex justify-content-start mb-4">
										<div class="img_cont_msg">
											<img class="img-xs rounded-circle ml-2" src="../user_photo/default.png" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">
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
								<?php if($chat_ary['reply_by'] == "user"){?>
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
											<img class="img-xs rounded-circle ml-2" src="../user_photo/<?= $get_img['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image">
										</div>
									</div>
								<?php }?>
								
							<?php endwhile; ?>
						</div>
						
						<div class="card-footer ">
							<?php if(!isset($_GET['detail'])): ?>
								<form action="" method="post" autocomplete="off" >

									<div class="form-group " >
										<!-- <input type="text" name="mesg" class="form-control "> -->
										<textarea name="mesg" class="bg-white text-black form-control " placeholder="Type your message..."></textarea>
										<button type="submit"  name="mesg_user" class="mt-2 btn btn-sm btn-outline-secondary" value="SEND">
											<i class="icon-action-undo text-primary"></i>&nbsp; SEND
										</button>
										
									</div>
									
								<?php endif; ?>
							</form>
							
						</div>
						
					</div>
				</div> <!-- end container -->
			<?php } ?>

			<!-- chat system end  -->

			<?php include('layouts/footer.php');?>

			