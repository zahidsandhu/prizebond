<?php include('layouts/header.php');?>
<?php if (isset($_GET['id'])) {

 $post_id= $_GET['id'];


$pages=array("homepage"=>"Homepage","suggestion"=>"Suggestion","formula"=>"Formula","finalgame"=>"Final Game","tenakra"=>"Ten Akra Challange","oneakra"=>"One Akra Challange","open"=>"Open Challange","guesspaper"=>"Guess paper","photostate"=>"Photo State Paper","winning"=>"Winning Paper","thailandpaper"=>"Thailand Paper","thailandtips"=>"Thailand Lottery Tips", "joolottery"=>"Joo Lottery Tips");


$pagename= array_search($page, $pages);

$img_pages=array("guesspaper"=>"Guess paper","photostate"=>"Photo State Paper","winning"=>"Winning Paper","thailandpaper"=>"Thailand Paper");

$sql = "SELECT * FROM posting WHERE id = '".$post_id."' ";
$result = mysqli_query($con,$sql);
// echo "<pre>";
// print_r(mysqli_fetch_array($result));
} ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <?php 
            // get image  paper page 
            $img_pagename= array_search($page, $img_pages);
        //     echo "<pre>";
        //   print_r(mysqli_fetch_array($result));exit();
            
            while ($row=mysqli_fetch_array($result)){
                $img_name1=$row['posting'];
                // $img_name2=$row['f'];
                // $img_name3=$row['s'];
                $filename = "../user_upload_paper/$img_name1";
               if($row['f'] == 0 && $row['s'] == 0){
              if(file_exists($filename) ){?>
                <img class='posting-image-self-style' src="../user_upload_paper/<?= $row['posting']?>" width='550' height='500'>
             <?php }else{
                     echo $row['posting'];
             }}else{
                 echo "First number : ".$row['f'];
                 echo "<br> Second number : ".$row['s'];
             }
             ?>
             
             <div class="row">
             <div class="col-sm-12 mt-3">
             <a class='btn btn-success btn-sm' href='posting-a.php?pg=posting-a&level="<?= $row['dat'] ?>"'>Approve</a>
            </div>
         </div>
             <?
           } 
           ?>
           
         </div>
         
       </div>
     </div>
   </div>
 </div>
 <?php include('layouts/footer.php');?>