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
  	$no=$_POST["textarea"];
	mysqli_query($con,"update setting  set display='$no'");
//	header("location:?pg=display&s=1");
	header('Location: '.$_SERVER['PHP_SELF']);
  } 
  // elseif($_GET["s"]){
  // 	echo "<h3>Data has been saved.</h3>";
  // }
  ?>
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Detail</h4>
                      <!--<a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>-->
                    </div>
                    <div>
                        <div class="input-group mb-3">
                            <form action="" method="post" enctype="multipart/form-data">

                         <textarea class="form-control" name="textarea"> </textarea>
                         <br>
                             <div class="input-group-append">
                               <input class="btn btn-success" type="submit" name="Submit" value="Submit">
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
          <?php include('layouts/footer.php');?>

         