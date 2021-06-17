<?php include('layouts/header.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                    <?php
                    $category = $_GET['category'];
                    $query = "DELETE FROM category WHERE category='$category'";
                    $data = mysqli_query($conn, $query);
                    if($data)
                    {
                        echo "<p class=\"text text-success mt-2\">Category Deleted Successfully</p><a href=\"allcategory.php\" class=\"btn btn-info\">CHECK UPDATE IN ALL POST</a>";
                    }
                    else
                    {
                        echo "<p class=\"text text-info mt-2\">Category Deleted Failed</p>";
                    }
                    ?>
                    </div>
                     </div>
              </div>
            </div>
            
          </div>
          <!-- content-wrapper ends -->
<?php include('layouts/footer.php');?>

         