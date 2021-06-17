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
                    <div class="self-table-style">
                        <div class="input-group mb-3">
       <form action="" method="post" enctype="multipart/form-data">
<?php


 $select=mysqli_query($con,"SELECT * FROM thai");
 $ary=mysqli_fetch_array($select);
if(isset($_POST["delete"])){
    $check=mysqli_query($con,"DELETE FROM thai");
    header("Location: thai.php"); 
    // echo "<h3>data has been deleted successfully</h3>";
}
 if (isset($_POST["Submit"])){
     //print_r($_POST);exit();
$check=	mysqli_query($con,"INSERT INTO thai (dat,first,three,down)VALUES('".$_POST["no"]."','".$_POST["open"]."','".$_POST["close"]."','".$_POST["center"]."')");


	header('Location: '.$_SERVER['PHP_SELF']);  

//	header("location:?pg=thai&s=1");
 }elseif(isset($_GET["s"])){
 	echo "<h3>Data has been saved</h3>";
 }
?>
  <table width="100%" border="1" cellpadding="10" cellspacing="0">
    <tr>
      <td width="23%">Date</td>
      <td width="77%"><input name="no" type="text" id="no" value="<?php if(isset($ary['dat'])){ echo $ary['dat']; } ?>"></td>
    </tr>
    <tr>
      <td>First</td>
      <td><input name="open" type="text" id="open" value="<?php if(isset($ary['first'])){ echo $ary['first']; } ?>"></td>
    </tr>
    <tr>
      <td>Three Numbers </td>
      <td><input name="close" type="text" id="close" value="<?php if(isset($ary['three'])){ echo $ary['three']; } ?>"></td>
    </tr>
    <tr>
      <td>Down</td>
      <td><input name="center" type="text" id="center" value="<?php if(isset($ary['down'])){ echo $ary['down']; } ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
          <?php if($select->num_rows > 0){ ?>
          <input type="submit" name="delete" class="btn btn-danger btn-sm" value="Delete"> 
          <?php }else{ ?>
          <input type="submit" name="Submit" class="btn btn-primary btn-sm" value="Submit"> 
          <?php } ?>
      </td>
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

         