<?php include('layouts/header.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <!--<h4 class="card-title mb-sm-0">Result List</h4>-->
                      <!--<a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> New Result</a>-->
                    </div>

<?php
$count=mysqli_num_rows(mysqli_query($con"select * from users"));
echo "<center>
<form method='post' action=''>
	<input type='checkbox' name='formula' value='1'>
	<input type='text' name='search'>
	<input type='submit' name='submit' value='Submit'>
</form><br>
</center>
";
if (isset($_GET["level"])){
	mysqli_query($con"update posting set level='0' where dat=".$_GET["level"]."");
	header("location:?pg=posting-a");
}
if (isset($_GET["del"])){
	mysqli_query($con"delete from posting where dat=".$_GET["del"]."");
	header("location:?pg=posting-a");
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
				$search=" where level='1' and page!='vip' and page!='thaivip' order by uid desc";
			}
			//echo($search);
			$chk=array("guesspaper","photostate","winning","thailandpaper","vip");
			$pages=array("homepage"=>"Homepage","suggestion"=>"Suggestion","formula"=>"Formula","finalgame"=>"Final Game","tenakra"=>"Ten Akra Challange","oneakra"=>"One Akra Challange","open"=>"Open Challange","guesspaper"=>"Guess paper","photostate"=>"Photo State Paper","winning"=>"Winning Paper","thailandpaper"=>"Thailand Paper","thailandtips"=>"Thailand Lottery Tips", "joolottery"=>"Joo Lottery Tips");
			include "../pages/pagination.php";
			echo "<table cellspacing='0' class='table admin_approve_image'>
			<tr class='caption'>
				<td width='100px'>Username</td>
				<td width='100px'>Page</td>
				<td width=600>Posting</td>
				<td width=120>Action</td>
			</tr>
			";
				while ($row=mysqli_fetch_array($result)){
					$usr=user_data($row["uid"]);
					if (!in_array($row["page"],$chk)){
						$posting=$row["posting"];
					}else{
						$posting="<img src='../user_upload_paper/".$row["posting"]."' width='550' height='500'>";
					}
					echo "<tr>
					<td>".$usr["username"]."</td>
					<td>".$pages[$row["page"]]."</td>
					<td>$posting</td>
					<td><a href='?pg=posting-a&level=".$row["dat"]."'>Approve</a> | <a href='?pg=posting-a&del=".$row["dat"]."'>Delete</a></td>
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
          <!-- content-wrapper ends -->
          <?php include('layouts/footer.php');?>

         