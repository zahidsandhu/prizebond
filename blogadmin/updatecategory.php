<?php include('layouts/header.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                        <form action="" method="get" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">CATEGORY : </label>
                        <input type="text" class="form-control" id="exampleInputName1" name="category" value="<?php echo $_GET['category']; ?>">
                      </div>
                      
                      <input type="submit" class="btn btn-success" name="submit" value="UPDATE">
                    </form>
                            
                    <?php
                    if($_GET['submit'])
                    {
                    $categorysn = $_GET['categorysn'];
                    $category = $_GET['category'];
                    $query = "UPDATE category SET category='$category' WHERE categorysn='$categorysn'";
                    $data = mysqli_query($conn, $query);
                       if($data)
                       {
                           echo "<p class=\"text text-success mt-2\">Record Updated Successfully</p><a href=\"allcategory.php\" class=\"btn btn-info\">CHECK UPDATE IN ALL POST</a>";
                       }
                       
                    }
                    else
                    {
                       echo "<p class=\"text text-info mt-2\">Click on UPDATE button to save the changes</p>";
                    }
                    ?>
                    </div>
                     </div>
              </div>
            </div>
            
          </div>
          <!-- content-wrapper ends -->
          <?php include('layouts/footer.php');?>

         