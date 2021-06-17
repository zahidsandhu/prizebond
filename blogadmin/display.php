<?php include('layouts/header.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                        <?php
                        $query = "select * from blog";
                        $data = mysqli_query($conn, $query);
                        $total = mysqli_num_rows($data);
                        if($total != 0)
                        {   
                            ?>
                            <table class="table table-dark table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <!--<th>Description</th>-->
                                    <th>Post Image</th>
                                    <th colspan="2">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                            <?php
                            while($result = mysqli_fetch_assoc($data))
                            {
                                echo
                                "<tr>
                                    <td>".$result['title']."</td>
                                    <!--<td>".$result['desp']."</td>-->
                                    <td><img src=".$result['picsource']." width=\"250\"/></td>
                                    <td><a href=\"update.php?sn=$result[sn]&title=$result[title]&desp=$result[desp]&picsource=$result[picsource]\" class=\"btn btn-warning\">Edit</a></td>
                                    <td><a href=\"delete.php?title=$result[title]\" class=\"btn btn-danger\">Delete</a></td>
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

         