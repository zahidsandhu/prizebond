<?php include('layouts/header.php');?>
       <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
    
	         
            <div class="row self-vip-row-style">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                              <?php
 if (isset($_POST["Submit"])){
 	if ($_FILES["file"]["size"]<10){
		echo "Please Uplaod valid paper";
	}
	else if ( $_FILES['file']['type'] != "image/jpeg") {
	    	echo "Please Uplaod valid extension";
	}else{
		$dat=time();
				move_uploaded_file($_FILES["file"]["tmp_name"],"../user_upload_paper/$dat" . $_FILES["file"]["name"]);
				$upload="$dat" . $_FILES["file"]["name"];
				$check_paper=mysqli_query($con,"insert into posting (uid,posting, dat, page, level) values ('admin','$upload','$dat','vip','1')");
			//	header("location:?pg=vip&s=1");
        if($check_paper){
          echo "Paper Upload Successfully";
          ?>
          <script> setTimeout(function(){ window.location.href ="vip.php"}, 2000);
        </script>
      <?php

        }
			   
	}
 }
//  elseif(isset($_GET["s"])){
//  	echo "<h3>Paper has been uploaded</h3>";
//  }
 if(isset($_GET['edit'])){
  $input="<input class='btn btn-success mt-3' type='submit' name='Update' value='Update'>";
 }else{
    $input="<input class='btn btn-success mt-3' type='submit' name='Submit' value='Submit'>";
 }
?>
<!-- table work -->
<?php 
              $sel_vip= "SELECT * FROM posting WHERE page='vip' ORDER BY id DESC";
              $run_sel_vip = mysqli_query($con,$sel_vip);

              if(isset($_GET['delete'])){

                $delete=mysqli_query($con,"DELETE from posting WHERE id='".$_GET['delete']."' ");
                header('location: vip.php');
              }

              if(isset($_GET['edit'])){
                      $sel_vip_img= "SELECT * FROM posting WHERE id='".$_GET['edit']."' ";
                    $run_sel_vip_img = mysqli_query($con,$sel_vip);
                    $ary=mysqli_fetch_array($run_sel_vip_img);
                     }

               if(isset($_POST['Update'])){
                  if ($_FILES["file"]["size"]<10){
                      $update_msg= "Please Uplaod valid paper";
                    }
                    else if ( $_FILES['file']['type'] != "image/jpeg") {
                          $update_msg= "Please Uplaod valid extension";
                    }else{
                      
                      unlink("../user_upload_paper/".$ary['posting']);
                          $dat=time();
                              move_uploaded_file($_FILES["file"]["tmp_name"],"../user_upload_paper/$dat" . $_FILES["file"]["name"]);
                              $upload="$dat" . $_FILES["file"]["name"];
                              $check=mysqli_query($con,"UPDATE posting SET uid='admin',posting='$upload', dat='$dat', page='vip', level='1' WHERE id='".$_GET['edit']."' ");
                              if($check){
                                 $update_msg="VIP Paper Successfully Update";
                                 ?>
                                    <script> setTimeout(function(){ window.location.href ="vip.php"}, 2000);
                                  </script>
                              <?php
                              }
                            //  header("location:?pg=vip&s=1");
                            //header('Location: '.$_SERVER['PHP_SELF']);
                        }
                  
               } 

              
              
          ?>

<!-- end table work -->
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">
                        <?php if(isset($update_msg)){
                        echo $update_msg;
                      }else {
                        echo "UPLOAD VIP PAPER";
                      } 
                      ?>
                      </h4>
                    
                      <!--<a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>-->
                    </div>
                    <div>
                        <div class="input-group mb-3">
                            <form action="" method="post" enctype="multipart/form-data">

                         <input type="file" class="form-control" name="file">
                             <div class="input-group-append">
                               <?= $input?>
                               </form>
                             </div>
                        </div>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
         <!--  table start  -->
         
         <div class="content-wrapper" >

          <div class="row" style="height:500px;">
            <div class="col-md-12 grid-margin stretch-card">

              <div class="card">

                <div class="card-body " style="overflow: auto !important;">
                  <!-- <span class="mb-2" style="float:right;"><a href="create-ticket.php" type="button" class="btn btn-primary btn-sm ">Submit New Ticket</a></span> -->
                  <table class="allpost table table-dark">
                    <tbody><tr class="tbhead">
                      <!-- <td>User Id</td> -->
                      <td>Date</td>
                      <td>Posting</td>
                      <td>Page Name</td>
                      <td>Action</td> 
                    </tr>
          <?php while($fetch_data= mysqli_fetch_array($run_sel_vip)){ ?>
                    <tr>
                      <!-- <td><= $fetch_data['uid'];?></td> -->
                      <td><?= $fetch_data['dat'];?></td>
                      <td>
                        <!-- <p style="width:100px; overflow: hidden;"> -->
                          <img src="../user_upload_paper/<?= $fetch_data['posting'];?>" alt="VIP PAPER">
                           
                        <!-- </p> -->
                      </td>
                      <td>
                        <span class="text-success">
                       <?= $fetch_data['page'];?>
                      </span>                
                         </td>
                        <td>
                          <a href="?edit=<?= $fetch_data['id'];?>" id="raply" class="btn btn-sm btn-outline-success" style="text-decoration: none;">Edit</a>
                          <a href="?delete=<?= $fetch_data['id'];?>" id="raply" class="btn btn-sm btn-outline-success" style="text-decoration: none;">Delete</a>
                        </td> 
                      </tr>

                    <?php } ?>
                        </tbody>
                      </table>

                      </div>
                    </div>
                  </div>
                </div>

              </div>
         <!--  table end  -->
          <?php include('layouts/footer.php');?>


         