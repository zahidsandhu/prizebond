<?php 
require_once "apps/config.php";
ob_start(); 
session_start();

include('layouts/header.php');
$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
              <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body table-responsive">
               	<?php
               	$vis ="";
		$pages=array("homepage"=>"Homepage","suggestion"=>"Suggestion","formula"=>"Formula","finalgame"=>"Final Game","tenakra"=>"Ten Akra Challange","oneakra"=>"One Akra Challange","open"=>"Open Challange","guesspaper"=>"Guess paper","photostate"=>"Photo State Paper","winning"=>"Winning Paper","thailandpaper"=>"Thailand Paper","thailandtips"=>"Thailand Lottery Tips", "joolottery"=>"Joo Lottery Tips");
		$form=array("homepage"=>"editor","suggestion"=>"editor","formula"=>"editor","finalgame"=>"editor","tenakra"=>"editor","oneakra"=>"oneakra","open"=>"open","guesspaper"=>"upload","photostate"=>"upload","winning"=>"upload","thailandpaper"=>"upload","thailandtips"=>"editor","joolottery"=>"editor","editprofile"=>"change-profile","changepicture"=>"change-picture","password"=>"change-password");
		if (isset($_GET["post"])){
			if ($_GET["post"]=="editprofile" or $_GET["post"]=="changepicture" or $_GET["post"]=="password"){
			echo "";
			}else{
			echo "<h4 style='margin-top:15px;text-align:center;color:#fff;'>Post your ".$pages[$_GET["post"]]."</h4>";
			
			}
		}
		if (isset($_GET["post"])){

			include "pages/".$form[$_GET["post"]].".php";
			
		}
		else
	     {
			if (isset($_GET["del"])){
				$res=mysqli_query($con,"select * from posting where dat='".$_GET["del"]."'");
				$rw=mysqli_fetch_array($res);
				if (file_exists("user_upload_paper/".$rw["posting"])){
					unlink("user_upload_paper/".$rw["posting"]);
				}
				mysqli_query($con,"delete from posting where dat='".$_GET["del"]."'");
				
				header("location:?sd=1");
			}
			if (isset($_GET["sd"])){
				echo "<div class='success_message'><p>Posting has been deleted successfully.</p></div>";
			}
			if(isset($_GET["s"])){
	  		echo "<div class='success_message alert alert-success alert-dismissible' $vis><p>Data has been saved successfully and will be posted by admin approval</p>
	  		 <button type='button' class='close' data-dismiss='alert'>&times;</button>
	  		</div>";
	  }
			
			if (isset($_GET["see"])){
				$spg="?see=".$_GET["see"]."&pge";
			}else{
				$spg="?pge";
			}
			$tbl_name="posting";
			$limit=20;
			$targetpage="$spg";
			if (isset($_GET["see"])){
				$search="where page='".$_GET["see"]."' and uid='".$_SESSION["uid"]."' order by dat desc";
			}else{
				$search="where uid='".$_SESSION["uid"]."' order by dat desc";
			}
			echo "<table class='allpost table table-dark'>
				 <tr class='tbhead'>
					<td>Post ID</td>
					<td>Posted In</td>
					<td>Posted Date</td>
					<td>Action</td>	
				</tr>
			";
			include "pages/pagination.php";
			
			while ($row=mysqli_fetch_array($result)){
				$id=$row["dat"];
				$date=date("d F Y",$row["dat"]);
				$pagein=$pages[$row["page"]];
				$pg=$row["page"];
				if ($row["page"]=="guesspaper" or $row["page"]=="photostate" or $row["page"]=="winning" or $row["page"]=="thailandpaper"){
					$edit="";
				}else{
				   //if(!$row["page"]=='oneakra'){
				     
					 $edit="<a href='?post=$pg&edit=$id' class=\"btn btn-sm btn-outline-warning\">Edit</a>";
				    //}
				}
				echo "
				<tr>
					<td>$id</td>
					<td>$pagein</td>
					<td>$date</td>
					";?>
					<?php if($row["page"] != 'oneakra') { ?>
					<td><a href='?del=<?= $id ?>' class="btn btn-sm btn-outline-danger">Delete</a>
					<?= $edit ?>
					</td>
					<?php } ?>
					<?php
					echo "
				</tr>";
			}
			echo "
			</table>
			<div class=\"mt-3\">
			$pagination
			</div>";
		}
		?>
		</div>
		</div>
		</div>
		</div>
		
          </div>
          <!-- content-wrapper ends -->
          <?php include('layouts/footer.php');?>

         