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
                        <label for="sn">Sr no : </label>
                        <input type="text" class="form-control" id="sn" name="sn" value="<?php echo $_GET['sn']; ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Title : </label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title" value="<?php echo $_GET['title']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Description : </label>
                        <textarea class="form-control" name="desp" id="editor"><?php echo $_GET['desp']; ?></textarea>
                        <script>
                                ClassicEditor
                                        .create( document.querySelector( '#editor' ),
                                        {
                                            removePlugins: [ 'Image' , 'ImageToolbar' , 'Link' ]
                                        })
                                        .then( editor => {
                                                console.log( editor );
                                        } )
                                        .catch( error => {
                                                console.error( error );
                                        } );
                        </script>
                      </div>
                      <img src="<?php echo $_GET['picsource'] ?>" width="300">
                      <div class="form-group">
                        <label>Image upload</label>
                        <input type="file" name="<?php echo $_GET['picsource'] ?>">
                      </div>
                      <input type="submit" class="btn btn-success" name="submit" value="UPDATE">
                    </form>
                            
                    <?php
                    if($_GET['submit'])
                    {
                        $sn = $_GET['sn'];
                        $title = $_GET['title'];
                        $desp = $_GET['desp'];
                        $picsource = $_GET['picsource'];
                        $filename = $_FILES["uploadimg"]["name"];
                        $tempname = $_FILES["uploadimg"]["tmp_name"];
                        $picsource = "images/".$filename;
                        
                        move_uploaded_file($tempname,$picsource);
                       $query = "UPDATE blog SET title='$title' , desp='$desp' , picsource='$picsource' WHERE sn='$sn' ";
                       $data = mysqli_query($conn, $query);
                       if($data)
                       {
                           echo "<p class=\"text text-success mt-2\">Record Updated Successfully</p><a href=\"display.php\" class=\"btn btn-info\">CHECK UPDATE IN ALL POST</a>";
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

         