<?php include('layouts/header.php');?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <?php
            // upload file
            if (isset($_POST["Submit"])){
            	// check file Exists or not
            	$query=mysqli_query($con,"SELECT *FROM product WHERE product_rates='pba' ");
            	
            	if($query->num_rows > 0){
            			$mesg="<span class='alert alert-info'>File Already Exists</span>";
            			?>
			              <script> setTimeout(function(){ window.location.href ="pba.php"}, 2000);
			            </script>
			            <?php
            	}else{
            	$product_name ="accounts";
            	$product_rates ="pba";

                $dat=time();
                move_uploaded_file($_FILES["file"]["tmp_name"],"../profit-rates-file/$dat" . $_FILES["file"]["name"]);
                $upload="$dat".$_FILES["file"]["name"];
                $check_upload=mysqli_query($con,"INSERT INTO product(product_name,product_rates,rates_file) values('".$product_name."','".$product_rates."','".$upload."')");
			
                if($check_upload){
                  $mesg= "<span class='alert alert-success'>File Uploaded Successfully</span>";
                  ?>
                  <script> setTimeout(function(){ window.location.href ="pba.php"}, 2000);
                </script>
                <?php

              }
          } //end else 
        }
          // upload file end
          ?>
          <!-- table work -->
          <?php 
          $sel_product= $query=mysqli_query($con,"SELECT *FROM product WHERE product_rates='pba' ");
          
// section delete data start
          if(isset($_GET['delete'])){
          	$query=mysqli_query($con,"SELECT *FROM product WHERE id='".$_GET['delete']."' ");
          	$row=mysqli_fetch_array($query);
          	$file_path="../profit-rates-file/".$row['rates_file'];
          	unlink($file_path);

            $delete=mysqli_query($con,"DELETE from product WHERE id='".$_GET['delete']."' ");
            header('location: pba.php');
          }
          // section delete data end

       ?>

       <!-- end table work -->
       <div class="d-sm-flex align-items-center mb-4">
        <h4 class="card-title mb-sm-0">
          <?php if(isset($mesg)){
            echo $mesg;
          }else {
            echo "UPLOAD PROFIT RATES ACCOUNTS (pba)";
          } 
          ?>
        </h4>
        
      </div>
      <div>
        <div class="input-group mb-3">
          <form action="" method="post" enctype="multipart/form-data">

           <input type="file" required class="form-control" name="file" accept="application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
           <div class="input-group-append">
             <input class='btn btn-success mt-3' type='submit' name='Submit' value='Submit'>
           </form>
         </div>
       </div>
      <!--  table start -->
		<div class="table-responsive">
                      <table class="table text-white">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Profit Rates</th>
                            <th>File Name</th>
                            <th>created_at</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php while($row=mysqli_fetch_array($sel_product)){ ?>
                          <tr>
                            <td><?=$row['id']?></td>
                            <td><?=$row['product_name']?></td>
                            <td><?=$row['product_rates']?></td>
                            <td><?=$row['created_at']?></td>
                            <td>
                            	<a class="btn btn-danger btn-sm" href="pba.php?delete=<?=$row['id']?>">
                            		Delete
                            	</a>
                            </td>
                          </tr>
                      <?php } ?>
                        </tbody>
                      </table>
                    </div>
      <!--  table end -->
     </div>
     
   </div>
 </div>
</div>
</div>
</div>
<!-- content-wrapper ends -->
<?php include('layouts/footer.php');?>