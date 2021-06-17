<?php include('layouts/header.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row self-row-style">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">UPLOAD ADVERTISEMENT DATA</h4>
                      <!--<a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>-->
                    </div>

            <!-- delete data -->
              <?php 

                  if(isset($_GET['delete'])){
                    $sel_query="SELECT * FROM advertisement WHERE id = '".$_GET['delete']."' ";
                    $sel_result=mysqli_query($con,$sel_query);
                    $sel_ary=mysqli_fetch_array($sel_result);

                    $delete_img ="advertisement-image/".$sel_ary['banner_image'];
                      unlink($delete_img);
                    $query= "DELETE FROM advertisement WHERE id = '".$_GET['delete']."'";
                    $result=mysqli_query($con,$query);
                    if($result){
                         echo "<span class='alert alert-success'>DATA SUCCESSFULLY DELETE</span><br><br>";
                        ?>
                                  <script> setTimeout(function(){ window.location.href ="advertisement.php"}, 2000);
                                </script>
                        <?php
                    }
                  }
                  
               ?>

            <!--  update data start -->

                <?php 

                    if(isset($_GET['update'])){
                      $select_query= "SELECT * FROM advertisement WHERE id = '".$_GET['update']."' ";
                      $select_result=mysqli_query($con,$select_query);
                      $select_ary=mysqli_fetch_array($select_result);
                    }

                     if(isset($_POST["update"])){
                         $title=$_POST['title'];
                          $url=$_POST['url_link'];
                          $old_img = $select_ary['banner_image'];

                          if($_FILES['myfile']['error'] === 0){
                            $delete_img ="advertisement-image/".$old_img;
                            unlink($delete_img);
                            $dat=time();
                            $upload_photo ="$dat". $_FILES['myfile']['name'];
                            $store = move_uploaded_file($_FILES['myfile']['tmp_name'],"advertisement-image/"."$dat".$_FILES['myfile']['name']);
                            
                          }else{
                             $upload_photo = $select_ary['banner_image'];

                          }
  
                        $update_query="UPDATE advertisement SET title='".$title."', url_link='".$url."', banner_image='".$upload_photo."' ";

                        $update_run=mysqli_query($con,$update_query);

                        if($update_run){
                            echo "<span class='alert alert-success'>DATA SUCCESSFULLY UPDATE</span><br><br>";
                          ?>
                                    <script> setTimeout(function(){ window.location.href ="advertisement.php"}, 2000);
                                  </script>
                          <?php
                        }
                      }

                 ?>
            <!--  update data end -->
   <?php
 if (isset($_POST["Submit"])){

  $title=$_POST['title'];
  $url=$_POST['url_link'];
  // print_r($_FILES);
  // exit();
 	if ($_FILES["myfile"]["size"] < 50){
		echo "Please Uplaod valid image";
    exit();
	}
	else if ($_FILES['myfile']['type'] != "image/jpg/png/jpeg") {

      $dat=time();
    $filename ="$dat". $_FILES['myfile']['name'];
   $store = move_uploaded_file($_FILES['myfile']['tmp_name'],"advertisement-image/"."$dat".$_FILES['myfile']['name']);

        $result = mysqli_query($con,"INSERT INTO advertisement(title,url_link,banner_image) values ('".$title."','".$url."','".$filename."')");
        if($result){
          echo "<span class='alert alert-success'>DATA SUCCESSFULLY SAVE</span><br><br>";
?>
          <script> setTimeout(function(){ window.location.href = "<?php 
            $_SERVER['PHP_SELF'];?>"}, 3000);
        </script>
<?php
        }

        //header('Location: '.$_SERVER['PHP_SELF']);
	    	
	}else{
		  
      echo "chose valid image";
			//	header("location:?pg=vip&s=1");
			
	}
 }
//  elseif(isset($_GET["s"])){
//  	echo "<h3>Paper has been uploaded</h3>";
//  }
 if(isset($_GET['update'])){
  $input="<input class='btn btn-success' type='submit' name='update' value='Update'>";
}else{
    $input="<input class='btn btn-success' type='submit' name='Submit' value='Submit'>";
}
?>
                    
                    <div>
                        <div class="input-group mb-3">
                            <form action="" method="post" enctype="multipart/form-data">
                              
                            <input type="text" name="title" required placeholder="Enter Title" value="<?php 
                              if(isset($select_ary['title'])){
                                echo $select_ary['title'];
                              }
                            ?>">
                            <br> <br>
                            <input type="text" name="url_link" required placeholder="Enter URL" value="<?php 
                                if(isset($select_ary['url_link'])){
                                  echo $select_ary['url_link'];
                                }
                            ?>"><br><br>
                         <input type="file" class="form-control" name="myfile" ><br>
                             <div class="input-group-append">
                               <?= $input?>
                               </form>
                             </div>
                        </div>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->

        <!-- Table start -->

        

<div class="content-wrapper " style="margin-top: -30px;">
<div class="row self-row-style">
              <div class="col-md-12 grid-margin stretch-card self-grid-margin-card ">
                <div class="card">
                  <div class="card-body self-style-card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      
                    </div>

<?php

//$count=mysqli_num_rows($result1);
// print_r($row);
// exit();
// $sql = mysqli_query($con, "SELECT posting FROM posting LIMIT 4");




if (isset($_GET["level"])){
  mysqli_query($con,"update posting set level='0' where dat=".$_GET["level"]."");
  header("location:?pg=posting-a");
}
if (isset($_GET["del"])){
  mysqli_query($con,"delete from posting where dat=".$_GET["del"]."");
  header("location:?pg=posting-a");
}
$tbl_name="posting";
      $limit=20;
      $targetpage="?pg=posting-a&pge";
      if (isset($_POST["ubmit"])){
        $usr=$_POST["search"];
        $usr=user_data($_POST["search"]);
        $usr=$usr["uid"];
        if (isset($_POST["formula"])){
          $search="where page like '%formula%' and level='0'  order by dat desc";
        }else{
          $search="where uid like '%$usr%' and level='0'  order by dat desc";
        }
      }else{
        $search=" where level='1' and page!='vip' and page!='thaivip' order by uid desc";
      }
      //echo($search);
      $chk=array("guesspaper","photostate","winning","thailandpaper","vip");
      $pages=array("homepage"=>"Homepage","suggestion"=>"Suggestion","formula"=>"Formula","finalgame"=>"Final Game","tenakra"=>"Ten Akra Challange","oneakra"=>"One Akra Challange","open"=>"Open Challange","guesspaper"=>"Guess paper","photostate"=>"Photo State Paper","winning"=>"Winning Paper","thailandpaper"=>"Thailand Paper","thailandtips"=>"Thailand Lottery Tips", "joolottery"=>"Joo Lottery Tips");
      include "../pages/pagination.php";
      echo "<table  cellspacing='0' class='table  admin_approve_image' style='color:white;'>
      <tr class='caption'>
        <td width='100px'>ID</td>
        <td width='100px'>Title</td>
        <td width='100px'>URL</td>
        <td width='100px'>Image</td>
        <td width=120>Action</td>
      </tr>
      "; 
      $result1=mysqli_query($con,"SELECT * FROM advertisement ORDER BY id DESC");
      //$row1=mysqli_fetch_array($result1);
      // echo "<pre>";
      // echo $row1['id'];
      // print_r($row1);
      // exit();
        while ($row1=mysqli_fetch_array($result1)){
          // $usr=user_data($row["uid"]);
          // $uid = $usr["uid"];
          // if (!in_array($row["page"],$chk)){
          //   $posting=$row1["posting"];
          //   $posting = substr($posting,0,20)."...";
          // }else{
          //   $posting="<img src='../user_upload_paper/".$row["posting"]."' width='550' height='500'>";
          // }
          $url = substr($row1['url_link'],0,15)."...";
          $title = substr($row1['title'],0,10)."...";
          $title2 = substr($row1['title'],0,50)."...";
          $image = substr($row1['banner_image'],0,10)."...";
          echo "<tr>
          <td >".$row1['id']."</td>
           <td title=".$row1['title'].">$title</td>
          <td title=".$row1['url_link'].">".$url."</td>
          <td title=".$row1['banner_image'].">".$image."</td>
          <td class='action-td'>
          <a class='btn btn-success btn-sm ' href='?update=".$row1['id']."'>Update</a>  <a class='btn btn-danger btn-sm' href='?delete=".$row1['id']."'>Delete</a> 
          </td>
          </tr>";
        }
      echo "</table>
      <center>$pagination</center>
      ";
      
?>
                  </div>
                </div>
              </div>
            </div>
</div>




          <?php include('layouts/footer.php');?>

         