<?php include('layouts/header.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
           
            <div class="row">
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
	}
	else{
		$dat=time();
				move_uploaded_file($_FILES["file"]["tmp_name"],"../user_upload_paper/$dat" . $_FILES["file"]["name"]);
				$upload="$dat" . $_FILES["file"]["name"];
				$check_paper = mysqli_query($con,"insert into posting (uid,posting, dat, page, level) values ('admin','$upload','$dat','thaivip','1')");
		

      if($check_paper){
                  echo "Paper Upload Successfully";
                  ?>
                  <script> setTimeout(function(){ window.location.href ="thaivip.php"}, 2000);
                </script>
                <?php

              }
	}
	
                     
                 }

    if(isset($_GET['edit'])){
            $input="<input class='btn btn-success mt-3' type='submit' name='Update' value='Update'>";
          }else{
            $input="<input class='btn btn-success mt-3' type='submit' name='Submit' value='Submit'>";
          }

 ?>
  <!-- table work -->
          <?php 
          $sel_vip= "SELECT * FROM posting WHERE page='thaivip' ORDER BY id DESC";
          $run_sel_vip = mysqli_query($con,$sel_vip);

          if(isset($_GET['delete'])){

            $delete=mysqli_query($con,"DELETE from posting WHERE id='".$_GET['delete']."' ");
            header('location: thaivip.php');
          }

          if(isset($_GET['edit'])){
            $sel_vip_img= "SELECT * FROM posting WHERE id='".$_GET['edit']."' ";
            $run_sel_vip_img = mysqli_query($con,$sel_vip);
            $ary=mysqli_fetch_array($run_sel_vip_img);
            // echo $ary['posting'];
            // exit();
          }
if(isset($_POST['Update'])){
            if ($_FILES["file"]["size"]<10){
              $update_msg= "Please Uplaod valid paper";
            }
            else if ( $_FILES['file']['type'] != "image/jpeg") {
              $update_msg= "Please Uplaod valid extension";
            }else{
              
              
              $dat=time();
              move_uploaded_file($_FILES["file"]["tmp_name"],"../user_upload_paper/$dat" . $_FILES["file"]["name"]);
              $upload="$dat" . $_FILES["file"]["name"];
              $check=mysqli_query($con,"UPDATE posting SET uid='admin',posting='$upload', dat='$dat', page='thaivip', level='1' WHERE id='".$_GET['edit']."' ");
              if($check){
               $update_msg="VIP Paper Successfully Update";
               // exit();
              //unlink("../user_upload_paper/".$ary['posting']);
               ?>
               <script> setTimeout(function(){ window.location.href ="thaivip.php"}, 2000);
             </script>
             <?php
           }
                           
         }
         
       } 
       
       
       ?>

       <!-- end table work -->
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">UPLOAD VIP PAPER</h4>
                      
                    </div>
                    <div>
                        <div class="input-group mb-3">
                            <form action="" method="post" enctype="multipart/form-data">

                         <input type="file" class="form-control" name="file">
                             <div class="input-group-append mt-3">
                              <?=$input;?>
                               
                             </form>
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

      <div class="card self-card-body">

        <div class="card-body  ">
          
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
                  
                    <img src="../user_upload_paper/<?= $fetch_data['posting'];?>" alt="VIP PAPER">
                    
                   
                  </td>
                  <td>
                    <span class="text-success">
                     <?= $fetch_data['page'];?>
                   </span>                
                 </td>
                 <td>
                  <a href="?edit=<?= $fetch_data['id'];?>" id="raply" class="btn btn-sm btn-outline-success" style="text-decoration: none;">Edit</a>
                  <a onclick="return confirm('Are you sure you want to delete this item?');" href="?delete=<?= $fetch_data['id'];?>" id="raply" class="btn btn-sm btn-outline-danger" style="text-decoration: none;">Delete</a>
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

         