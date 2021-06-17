<?php include('layouts/header.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputName1">Add Category : </label>
                            <input type="text" class="form-control" id="exampleInputName1" name="category" placeholder="Please Enter Category">
                          </div>
                          <input type="submit" class="btn btn-success" name="submit">
                        </form>
                        <?php
                        if($_POST['submit'])
                        {
                            $category = $_POST['category'];
                            if($category!="")
                            {
                                $query = "INSERT INTO category VALUES ('$categorysn','$category')";
                                $data = mysqli_query($conn, $query);
                                if($data)
                                {
                                    echo "Category post successfully";
                                }
                            }
                            else
                            {
                                echo "All fields are required";
                            }
                        }
                        ?>
                    </div>
                    </div>
              </div>
            </div>
            
          </div>
          <!-- content-wrapper ends -->
          <?php include('layouts/footer.php');?>

         