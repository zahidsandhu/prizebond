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
                           <form action="" method="post" enctype="multipart/form-data">
<?php
 if (isset($_POST["Submit"])){
	mysqli_query($con,"update hint set no='".$_POST["no"]."',open='".$_POST["open"]."',close='".$_POST["close"]."',center='".$_POST["center"]."'");
	header("location:?pg=hint&s=1");
 }elseif(isset($_GET["s"])){
 	echo "<h3>Data has been saved</h3>";
 }
?>
  <table width="100%" border="1" cellpadding="10" cellspacing="0">
    <tr>
      <td width="23%">Draw No </td>
      <td width="77%"><input name="no" type="text" id="no"></td>
    </tr>
    <tr>
      <td>Open</td>
      <td><input name="open" type="text" id="open"></td>
    </tr>
    <tr>
      <td>Close</td>
      <td><input name="close" type="text" id="close"></td>
    </tr>
    <tr>
      <td>Center</td>
      <td><input name="center" type="text" id="center"></td>
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

         