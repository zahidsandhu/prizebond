<?php include('layouts/header.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
              <?php
              $result=mysqli_query($con,"select * from users");
	         $row=mysqli_fetch_array($result);
           // $user_id = $row['uid'];
	         
	         if (isset($_GET["ban"])){
	mysqli_query($con,"update users set status='".$_GET["ban"]."' where uid=".$_GET["user"]."");
//	header("location:?pg=users");
header('Location: '.$_SERVER['PHP_SELF']);  

}
if (isset($_GET["vip"])){

$vip_query = mysqli_query($con,"update users set vip='".$_GET["vip"]."' where uid=".$_GET["user"]."");
  header('Location: '.$_SERVER['PHP_SELF']); 
}
 
if (isset($_GET["del"])){
	$result=mysqli_query($con,"select * from users where uid=".$_GET["del"]."");
	$row=mysqli_fetch_array($result);
	unlink ("../user_photo/".$row["photo"]);
	mysqli_query($con,"delete from users where uid=".$_GET["del"]."");
	mysqli_query($con,"delete from posting where uid=".$_GET["del"]."");
	header('Location: '.$_SERVER['PHP_SELF']); 
	//header("location:?pg=users");
}
	 ?>
           
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex align-items-center mb-4">
                <h4 class="card-title mb-sm-0">User List</h4>
                <!--<a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>-->
              </div>
              <div class="table-responsive border rounded p-1">
                <table class="table table-striped" id="users">
                  <thead>
                    <tr>
                      <th class="text-white">User Name</th>
                      <th class="text-white">Password</th>
                      <th class="text-white">Location</th>
                      <th class="text-white">Email</th>
                      <th class="text-white">Date</th>
                      <th class="text-white">Mobile</th>
                      <th class="text-white">Level</th>
                      <th class="text-white">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                //   $row=mysqli_fetch_array($result);
                //   echo "<pre>";
                //   print_r($row);
                  while ($row=mysqli_fetch_array($result)){
                                
                  if ($row["level"]=="1"){
        						$level="Prizebond";
        					}elseif($row["level"]=="2"){
        						$level="Lottery";
        					}else{
        						$level="Both";
        					}
        						if ($row["status"]=="0"){
						$status="<a class='alert alert-primary' href='?pg=users&user=".$row["uid"]."&ban=1'>Ban</a>";
					}else{
						$status="<a class='alert alert-danger'  href='?pg=users&user=".$row["uid"]."&ban=0'>Unban</a>";
					}
					if ($row["vip"]=="0"){
						$date = strtotime(date("d F Y"));
						$vip="<a class='alert alert-success'  href='?pg=users&user=".$row["uid"]."&vip=$date'>VIP [No]</a>";
					}else{
						$vip="<a class='alert alert-success' href='?pg=users&user=".$row["uid"]."&vip=0'>VIP [Yes]</a>";
					}
              ?>
        <tr>
          <td> <?php echo $row["username"];?> </td>
          <td> <?php echo $row["password"];?></td>
          <td><?php echo $location="".$row["country"]." [ ".$row["city"]." ]";?></td>
          <td><?php echo $row["email"];?></td>
          <?php if($row["vip"] > "0"){?>
          <td>
              <?php echo "<span title='Start Date'>".$row['start_date']."</spn>"."<span class='text-info'><b> To</b> </span> "."<span title='End Date'>".$row["end_date"]."</spn>"; ?></td>
          <?php }else{ ?>
          <td><?php echo "<span class='text-info'><b>Date not set</b> </span>";?></td>
         <?php } ?>
          <td> <?php echo $row["mobile"];?></td>
          <td>
            <div class="badge badge-success p-2"><?php echo $level;?></div>
          </td>
           <td>
             <?php echo $status;?>
            <?php echo $vip."<a class='btn btn-success btn-sm' type='submit' href='set-date.php?id=".$row['uid']."'>Set Date<a/>";?>
               <a class="alert alert-danger" href='?del=<?php echo $row["uid"];?>'>Delete </a>
          </td>
        </tr>
       <?php } ?>
      </tbody>
    </table>
  </div>
 
</div>
</div>
</div>
</div>
</div>
<!-- content-wrapper ends -->
<?php include('layouts/footer.php');?>

         