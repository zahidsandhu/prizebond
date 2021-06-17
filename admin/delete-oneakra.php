<?php include('layouts/header.php');?>

 <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card self-card-style">
                  <div class="card-body self-style-card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <!--<h4 class="card-title mb-sm-0">Result List</h4>-->
                      <!--<a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> New Result</a>-->
                    </div>

<?php

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

}


$select=mysqli_query($con,"SELECT p.*, u.username FROM posting p LEFT JOIN users u ON p.uid= u.uid  WHERE p.level='0' ");

			include "../pages/pagination.php";
			?>
			<div class="table-responsive border rounded p-1">
			<table class="table table-striped" id="users">
			    <thead>
			        
			<tr>
				 <th class="text-white">Username</td>
				 <th class="text-white">Page</td>
				 <th class="text-white">Posting</td>
				 <th class="text-white">Action</td>
			</tr>
			</thead>
			<?php 
		
				while ($row=mysqli_fetch_array($select)){
				
				 if($row["page"] == 'oneakra') { 
					?>
					<tr>
					    
					<td><?= $row['username']?></td>
					<td><?= $row['page']?></td>
					<td><p><?= $row['posting'] ?></p></td>
					<td>
					<a class='btn btn-danger btn-sm' href='?pg=posting-a&del=<?= $row['dat']?> '>Delete</a> 
					
					</td>
					</tr>
					<?php }
				}
			echo "</table>
			
			";
		
			
?>
</div>

                   </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->

<?php include('layouts/footer.php');?>
