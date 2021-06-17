<?php include('layouts/header.php');?>

<?php 
            // select notification

                $selsct_notify = "SELECT *FROM notifications WHERE tkt_id IS NOT NULL && status='0' && sender_name !='admin' ";
                $run_notify = mysqli_query($con,$selsct_notify);
                
             ?>
             
                  
               
<div class="main-panel">
	<div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12 ">
        <a href="viewall-notification.php?clear=tru" class="btn btn-sm btn-danger float-right mb-3" >Clear All</a>
      </div>

    </div>
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">

					<div class="card-body">

						<?php while($row=mysqli_fetch_array($run_notify)){ ?>
              <? if(isset($_GET['clear'])){mysqli_query($con,"DELETE FROM notifications WHERE tkt_id IS NOT NULL && status='0' && sender_name !='admin' "); 
              $loc='viewall-notification.php?clear=tru';
               header('Location:'.$loc);
                  }
                ?>

						<div class="d-sm-flex align-items-center mb-4 ">
							<!-- <h4 class="card-title mb-sm-0">asdjaskj</h4> -->
							
                  <?php $get_users=mysqli_query($con,"SELECT * FROM users  where username= '".$row['sender_name']."' "); 
                      $get_user_data=mysqli_fetch_array($get_users);
                    ?>
                <a style="text-decoration: none;" class=" " href="<?=$row['related_link']?>">
                  <div class="preview-thumbnail">
                    
                    <img class="img-sm profile-pic" src="../user_photo/<?= $get_user_data['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="Profile image"> 
                  </div>
                  <div class="preview-item-content flex-grow py-2 text-primary">
                    <p class="preview-subject ellipsis font-weight-medium "><?=$get_user_data['username']?></p>
                    <p class="font-weight-light small-text"><?=$row['description']?> </p>
                  </div>
                </a>
						</div>
					<?php }  //end while ?>
					</div> 
				</div>   
			</div>
		</div>
	</div>
</div>
</div>
<!-- content-wrapper ends -->
<?php include('layouts/footer.php');?>