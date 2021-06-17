<?php include('layouts/header.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
    
	         
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
  
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Detail</h4>
                      <!--<a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>-->
                    </div>
                    <div>
                        <div class="input-group mb-3">
      <form name="form1" method="post" action="">
  <?php
  if (isset($_POST["Submit"])){
  	$no=$_POST["no"];
	if (!is_numeric($no)){
		$no=1;
	}
	mysqli_query($con,"update setting  set no='$no'");
//	header("location:?pg=setting&s=1");
header('Location: '.$_SERVER['PHP_SELF']);  
  }
  // elseif($_GET["s"]){
  // 	echo "<h3>Data has been saved.</h3>";
  // }
  ?>
  <table width="100%" border="1" cellpadding="10" cellspacing="0">
    <tr>
      <td width="18%">Draw No </td>
      <td width="82%"><input type="text" name="no" value="<?php echo $no=drawno(); ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>

                        </div>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <?php include('layouts/footer.php');?>

         