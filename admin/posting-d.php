<?php include('layouts/header.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
             
           
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">User List</h4>
                      <!--<a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>-->
                    </div>
                    <div class="table-responsive border rounded p-1">
                   <?php
if(isset($_GET["page"])&&$_GET["page"]<>""){
$chk=array("guesspaper","photostate","winning","thailandpaper","thailandtips","vip");
if (in_array($_GET["page"],$chk)){
	$result=mysqli_query($con,"select * from posting where page='".$_GET["page"]."'");
	while ($row=mysqli_fetch_array($result)){
		unlink ("../user_upload_paper/".$row["posting"]);
	}
}
mysqli_query($con,"delete from posting where page='".$_GET["page"]."'");
header("location:?pg=posting-d");
}
?>
<table width="100%" border="1" cellpadding="10" cellspacing="0">
  <tr>
    <td width="23%"><strong>Page</strong></td>
    <td width="77%"><strong>Action</strong></td>
  </tr>
  <tr>
    <td>Suggestion</td>
    <td><a href="?pg=posting-d&page=suggestion" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> &nbsp;&nbsp;&nbsp;( <?php echo mysqli_num_rows(mysqli_query($con,"select * from posting where page='suggestion'")); ?> )</td>
  </tr>
  <tr>
    <td>Guess Paper </td>
    <td><a href="?pg=posting-d&page=guesspaper" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysqli_num_rows(mysqli_query($con,"select * from posting where page='guesspaper'")); ?> )</td>
  </tr>
  <tr>
    <td>Photo State Paper </td>
    <td><a href="?pg=posting-d&page=photostate" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysqli_num_rows(mysqli_query($con,"select * from posting where page='photostate'")); ?> )</td>
  </tr>
  <tr>
    <td>Winning Paper </td>
    <td><a href="?pg=posting-d&page=winning" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysqli_num_rows(mysqli_query($con,"select * from posting where page='winning'")); ?> )</td>
  </tr>
  <tr>
    <td>Ten Akra Challange </td>
    <td><a href="?pg=posting-d&page=tenakra" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysqli_num_rows(mysqli_query($con,"select * from posting where page='tenakra'")); ?> )</td>
  </tr>
  <tr>
    <td>One Akra Challange </td>
    <td><a href="?pg=posting-d&page=oneakra" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysqli_num_rows(mysqli_query($con,"select * from posting where page='oneakra'")); ?> )</td>
  </tr>
  <tr>
    <td>Open Challange </td>
    <td><a href="?pg=posting-d&page=open" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysqli_num_rows(mysqli_query($con,"select * from posting where page='open'")); ?> )</td>
  </tr>
  <tr>
    <td>Vip Papers </td>
    <td><a href="?pg=posting-d&page=vip" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysqli_num_rows(mysqli_query($con,"select * from posting where page='vip'")); ?> )</td>
  </tr>
  <tr>
    <td>Thailand Lottery Tips </td>
    <td><a href="?pg=posting-d&page=thailandtips" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysqli_num_rows(mysqli_query($con,"select * from posting where page='thailandtips'")); ?> )</td>
  </tr>
  <tr>
    <td>Thailand Lottery Paper </td>
    <td><a href="?pg=posting-d&page=thailandpaper" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysqli_num_rows(mysqli_query($con,"select * from posting where page='thailandpaper'")); ?> )</td>
  </tr>
  <tr>
    <td>Joo Lottery Tips </td>
    <td><a href="?pg=posting-d&amp;page=joolottery" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysqli_num_rows(mysqli_query($con,"select * from posting where page='joolottery'")); ?> )</td>
  </tr>
  <tr>
    <td>Thailand VIP Paper </td>
    <td><a href="?pg=posting-d&amp;page=thaivip" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysqli_num_rows(mysqli_query($con,"select * from posting where page='thaivip'")); ?> )</td>
  </tr>
  <tr>
    <td>Final Game </td>
    <td><a href="?pg=posting-d&page=finalgame" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>&nbsp;&nbsp;&nbsp;( <?php echo mysqli_num_rows(mysqli_query($con,"select * from posting where page='finalgame'")); ?> )</td>
  </tr>
</table>

                   
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <?php include('layouts/footer.php');?>

         