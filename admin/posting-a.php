<?php include('layouts/header.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card self-card-style">
                  <div class="card-body self-style-card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      
                    </div>

<?php
$count=mysqli_num_rows(mysqli_query($con,"select * from users"));

echo "<center>
<form method='post' action='' class='self-form-style'>
	<input type='checkbox' name='formula' value='1'>
	<input type='text' name='search' class='self-input-style' >
	<input type='submit' name='submit' value='Submit' >
</form><br>
</center>
";
if (isset($_GET["level"])){
	mysqli_query($con,"update posting set level='0' where dat=".$_GET["level"]."");
	header("location:?pg=posting-a");
}
if (isset($_GET["del"])){
    $get_img=mysqli_query($con,"SELECT *FROM posting where dat='".$_GET["del"]."' ");
	$ary_img=mysqli_fetch_array($get_img);
	 echo $ary_img['posting'];
	 $check=unlink('../user_upload_paper/'.$ary_img['posting']);
	  
	if($check){
		mysqli_query($con,"delete from posting where dat=".$_GET["del"]."");
		header("location:?pg=posting-a");
	}else{
		mysqli_query($con,"delete from posting where dat=".$_GET["del"]."");
	header("location:?pg=posting-a");
	}
// 	mysqli_query($con,"delete from posting where dat=".$_GET["del"]."");
// 	header("location:?pg=posting-a");
}
$tbl_name="posting";
			$limit=20;
			$targetpage="?pg=posting-a&pge";
			if (isset($_POST["submit"])){
				$usr=$_POST["search"];
				$usr=user_data($_POST["search"]);
				$usr=$usr["uid"];
				if (isset($_POST["formula"])){
					$search="where page like '%formula%' and level='0'  order by dat desc";
				}else{
					$search="where uid like '%$usr%' and level='0'  order by dat desc";
				}
			}else{
				$search=" where level='1' and page!='vip' and page!='thaivip' order by id desc";
			}
			//echo($search);
			$chk=array("guesspaper","photostate","winning","thailandpaper","vip");
			$pages=array("homepage"=>"Homepage","suggestion"=>"Suggestion","formula"=>"Formula","finalgame"=>"Final Game","tenakra"=>"Ten Akra Challange","oneakra"=>"One Akra Challange","open"=>"Open Challange","guesspaper"=>"Guess paper","photostate"=>"Photo State Paper","winning"=>"Winning Paper","thailandpaper"=>"Thailand Paper","thailandtips"=>"Thailand Lottery Tips", "joolottery"=>"Joo Lottery Tips");
			include "../pages/pagination.php";
			echo "<table  cellspacing='0' class='table admin_approve_image' style='color:white;'>
			<tr class='caption'>
				<td width='100px'>Username</td>
				<td width='100px'>Page</td>
				<td width='100px'>Posting</td>
				<td width=120>Action</td>
			</tr>
			"; 
// 			echo "<pre>";
// 			print_r(mysqli_fetch_array($result));exit();
				while ($row=mysqli_fetch_array($result)){
					$usr=user_data($row["uid"]);
					$uid = $usr["uid"];
					if (!in_array($row["page"],$chk)){
						$posting=$row["posting"];
						$first=$row["f"];
						$second=$row["s"];
						$posting = substr($posting,0,15)."....";
					}else{
						$posting="<img src='../user_upload_paper/".$row["posting"]."' width='550' height='500'>";
					}
					echo "<tr>
					<td>".$usr['username']."</td>
					<td>".$pages[$row['page']]."</td>"?>
					<td><?php 
					if($row["posting"] !="" ){
					    echo $posting;
					}
					else{
					    echo $first ." , ". $second;
					}
					?></td>
			<?php	echo "	<td>
					<a class='btn btn-success btn-sm' href='?pg=posting-a&level=".$row['dat']."'>Approve</a> <a class='btn btn-danger btn-sm' href='?pg=posting-a&del=".$row['dat']."'>Delete</a>  <a class='btn btn-info btn-sm' href='posting-details.php?id=".$row['id']."'>Read More</a>
					</td>
					</tr>";
				}
			echo "</table>
			<center>$pagination</center>
			";
			
?>

<?php 
if(isset($_GET['aqpprove'])){
	mysqli_query($con,"UPDATE video SET status='1' where id='".$_GET['aqpprove']."'");
	header("location:posting-a.php");
}
if(isset($_GET['delete'])){
	mysqli_query($con,"DELETE FROM video where id='".$_GET['delete']."'");
	header("location:posting-a.php");
}
		$select_video=mysqli_query($con,"SELECT *FROM video WHERE status='0'");
		

 ?>

 <?php 
 if($select_video->num_rows > 0){
 while($row=mysqli_fetch_array($select_video)){ ?>
<tr><span style="margin-left: 15px;"><?= $row['username']?></span></tr>
<tr><span style="margin-left: 70px;"><?= $row['video_type']?></span></tr>
<tr><span style="margin-left: 50px;"><a class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal<?= $row['id']?>"  href="" >Check</a></span></tr>
<tr><span style="margin-left: 130px;">
	<a class="btn btn-success btn-sm" href="posting-a.php?aqpprove=<?= $row['id']?>" >Approve</a> 
	<a class="btn btn-danger btn-sm" href="posting-a.php?delete=<?= $row['id']?>" >Delete</a> 
	
</span></tr>

<!-- The Modal -->
<div class="modal" id="myModal<?= $row['id']?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
       <div class="modal-header">
        <h4 class="modal-title text-black"><?= $row['title']?></h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <?= $row['embed_url']?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- model end -->

<?php echo "<br><br>"; }} ?>



                   </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <?php include('layouts/footer.php');?>

         