
<?php include('layouts/header.php');?>
   <!-- partial --> 
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title text-white"><?php echo $userData['username'];?> : Profile </h3>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="row">
                    	<div class="col-lg-4">
                        <div class="d-flex justify-content-between">
                          <div>
                          
                          </div>
                        </div> 
                      </div>
                      <div class="col-lg-4">
                        <div class="border-bottom text-center pb-4">
                          <img src="user_photo/<? echo $userData['photo']?>" onerror="this.onerror=null; this.src='../user_photo/default.png'" alt="profile" class="img-lg rounded-circle mb-3">
                          <p><? echo $userData['username']?></p>
                        </div>
                      </div>
                      
                    </div>
					
					<!-- <div class="py-4"> -->
	                  <div class="row pt-4 ">
	                  	
	                  	 <div class="col-sm-3  ">
	                  	 	<p class="clearfix ">
	                        	<span class="float-left">Status :</span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-9">
	                  	 	<p class="clearfix">
	                            <span class=" text-muted">
	                            	<?= $userData['status'];?>
	                            </span>
	                         </p>
	                  	 </div>

	                  	  <div class="col-sm-3  ">
	                  	 	<p class="clearfix ">
	                        	<span class="float-left">User Name :</span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-9">
	                  	 	<p class="clearfix">
	                            <span class=" text-muted">
	                            	<?= $userData['username'];?>
	                            </span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-3  ">
	                  	 	<p class="clearfix ">
	                        	<span class="float-left">Country :</span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-9">
	                  	 	<p class="clearfix">
	                            <span class=" text-muted">
	                            	<?= $userData['country'];?>
	                            </span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-3  ">
	                  	 	<p class="clearfix ">
	                        	<span class="float-left">City :</span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-9">
	                  	 	<p class="clearfix">
	                            <span class=" text-muted">
	                            	<?= $userData['city'];?>
	                            </span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-3  ">
	                  	 	<p class="clearfix ">
	                        	<span class="float-left">Email :</span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-9">
	                  	 	<p class="clearfix">
	                            <span class=" text-muted">
	                            	<?= $userData['email'];?>
	                             </span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-3  ">
	                  	 	<p class="clearfix ">
	                        	<span class="float-left">Mobile :</span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-9">
	                  	 	<p class="clearfix">
	                            <span class=" text-muted">
	                            	<?= $userData['mobile'];?>
	                            </span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-3  ">
	                  	 	<p class="clearfix ">
	                        	<span class="float-left">Gender :</span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-9">
	                  	 	<p class="clearfix">
	                            <span class=" text-muted">
	                            	<?= $userData['gender'];?>
	                            </span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-3  ">
	                  	 	<p class="clearfix ">
	                        	<span class="float-left">Age :</span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-9">
	                  	 	<p class="clearfix">
	                            <span class=" text-muted">
	                            	<?= $userData['age'];?>
	                            </span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-3  ">
	                  	 	<p class="clearfix ">
	                        	<span class="float-left">Level :</span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-9">
	                  	 	<p class="clearfix">
	                            <span class=" text-muted">
	                            	<?= $userData['level'];?>
	                            </span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-3  ">
	                  	 	<p class="clearfix ">
	                        	<span class="float-left">Vip :</span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-9">
	                  	 	<p class="clearfix">
	                            <span class=" text-muted">
	                            	<?= $userData['vip'];?>
	                            </span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-3  ">
	                  	 	<p class="clearfix ">
	                        	<span class="float-left">Join Date :</span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-9">
	                  	 	<p class="clearfix">
	                            <span class=" text-muted">
	                            	<?= $userData['joindate'];?>
	                            </span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-3  ">
	                  	 	<p class="clearfix ">
	                        	<span class="float-left">HM :</span>
	                         </p>
	                  	 </div>
	                  	 <div class="col-sm-9">
	                  	 	<p class="clearfix">
	                            <span class=" text-muted">
	                            	<?= $userData['hm'];?>
	                            </span>
	                         </p>
	                  	 </div>
	                  </div>

                    <!-- </div> -->


                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          
<?php include('layouts/footer.php');?>

         