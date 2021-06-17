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
                        <label for="exampleInputName1">Title : </label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="Please Enter Title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Description : </label>
                        <input type="text" class="form-control" id="exampleInputName1" name="desp" placeholder="Please Enter Description">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Category : </label>
                        <?php
                        $query = "select * from category";
                        $data = mysqli_query($conn, $query);
                        $total = mysqli_num_rows($data);
                        if($total != 0)
                        {   
                            ?>
                            <select class="form-control" id="exampleFormControlSelect2" name="category">
                            <?php
                            while($result = mysqli_fetch_assoc($data))
                            {
                                echo "<option>".$result['category']."</option>";
                            }
                        }
                        else
                        {
                        echo "RECORDS NOT FOUND";
                        }
                        ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Content : </label>
                        <textarea class="form-control" name="content" id="editor"></textarea>
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
                      <div class="form-group">
                        <label>Image upload</label>
                        <input type="file" name="uploadimg">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Keyword : </label>
                        <input type="text" class="form-control" id="exampleInputName1" name="keyword" placeholder="Please Enter Keywords">
                      </div>
                      <input type="submit" class="btn btn-success" name="submit">
                    </form>
                            
                    <?php
                    if($_POST['submit'])
                    {
                        $title = $_POST['title'];
                        $desp = $_POST['desp'];
                        $category = $_POST['category'];
                        $content = $_POST['content'];
                        $keyword = $_POST['keyword'];
                        $filename = $_FILES["uploadimg"]["name"];
                        $tempname = $_FILES["uploadimg"]["tmp_name"];
                        $picsource = "images/".$filename;
                        move_uploaded_file($tempname,$picsource);
                        if($title!="" && $desp!="" && $category!="" && $picsource!="" && $filename!="" && $content!="" && $keyword!="")
                        {
                            $query = "INSERT INTO blog VALUES ('$sn', '$title', '$desp', '$category', '$content', '$keyword', '$picsource')";
                            $data = mysqli_query($conn, $query);
                            if($data)
                            {
                                echo "Blog post successfully";
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

         