<?php include('layouts/header.php');?>

<?php 
            // select notification

                $selsct_notify = "SELECT *FROM notifications WHERE(receiver_id='".$_SESSION['uid']."' && status='0') || (status='0' && receiver_id='".$_SESSION['uid']."') ";
                $run_notify = mysqli_query($con,$selsct_notify);
                
                
               
               
                
                
                
             ?>
             
                  
               
<div class="main-panel">
	<div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12 margin-top-selfocls">
        <a href="viewall-notification.php?clear=tru" class="btn btn-sm btn-danger float-right mb-3" >Clear All</a>
      </div>

    </div>
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">

					<div class="card-body">
					    	<?php 
					    	
			 $wallet_notify = "SELECT *FROM wallet WHERE(uid='".$_SESSION['uid']."' && bond_status='1') ";
                $run_wallet_notify = mysqli_query($con, $wallet_notify);
                
                while($wallet=mysqli_fetch_array($run_wallet_notify)){
                   echo "Congratulations Prizebondlucky have win ".$wallet['bond_number']." prize bond <br>";
                }
                
                
                if(isset($_GET['clear'])){
                    $update_wallet="UPDATE wallet SET bond_status ='0' WHERE(uid='".$_SESSION['uid']."' && bond_status='1') ";
                      mysqli_query($con,$update_wallet);
                }
                
               
                
					    	?>

						<?php while($row=mysqli_fetch_array($run_notify)){ ?>
              <? if(isset($_GET['clear'])){
                  
                  mysqli_query($con,"DELETE FROM notifications WHERE(receiver_id='".$_SESSION['uid']."' && status='0') || (status='0' && receiver_id='".$_SESSION['uid']."') ");
                  
                  
                  
              $loc='viewall-notification.php?clear=tru';
               header('Location:'.$loc);
                  }
                ?>

						<div class="d-sm-flex align-items-center mb-4 ">
							
							<?php 

// update notification

                     // if (isset($_GET["uid"])) {
                      // $id = $_GET["uid"];
                      // $update="UPDATE notifications SET status ='1' where sender_id='".$id."' && receiver_id='".$row['receiver_id']."' ";
                      // mysqli_query($con,$update);
                      //$loc='message.php?uid='.$row['receiver_id'];
                       
                     
                    // }
                  ?>

                  <?php $get_users=mysqli_query($con,"SELECT * FROM users  where uid= '".$row['sender_id']."' "); 
                      $get_user_data=mysqli_fetch_array($get_users);
                    ?>
                <a style="text-decoration: none;" class=" " href="<?=$row['related_link']?>">
                  <div class="preview-thumbnail">
                    
                    <img class="img-sm profile-pic" src="user_photo/<?= $get_user_data['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image"> 
                  </div>
                  <div class="preview-item-content flex-grow py-2 text-primary">
                    <p class="preview-subject ellipsis font-weight-medium "><?=$get_user_data['username']?></p>
                    <p class="font-weight-light small-text"><?=$row['description']?> </p>
                  </div>
                </a>
						</div>
					<?php }  //end while   ?>
				
					</div> 
				</div>   
			</div>
		</div>
	</div>
</div>
</div>
<!-- content-wrapper ends -->
<?php include('layouts/footer.php');?>