<?php include('layouts/header.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                        <?php
                        $query = "select * from category";
                        $data = mysqli_query($conn, $query);
                        $total = mysqli_num_rows($data);
                        if($total != 0)
                        {   
                            ?>
                            <table class="table table-dark table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>CATEGORY</th>
                                    <th colspan="2">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                            <?php
                            while($result = mysqli_fetch_assoc($data))
                            {
                                echo
                                "<tr>
                                    <td>".$result['category']."</td>
                                    <td><a href=\"updatecategory.php?categorysn=$result[categorysn]&category=$result[category]\" class=\"btn btn-warning\">Edit</a></td>
                                    <td><a href=\"deletecategory.php?category=$result[category]\" class=\"btn btn-danger\">Delete</a></td>
                                </tr>
                                ";
                            }
                        }
                        else
                        {
                        echo "RECORDS NOT FOUND";
                        }
                        ?>
                        </tbody>
                        </table>
                        
                     </div>
              </div>
            </div>
            
          </div>
          <!-- content-wrapper ends -->
          <?php include('layouts/footer.php');?>

         