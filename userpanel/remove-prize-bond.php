<?php include('layouts/header.php');
$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
$userdata=user_data($_SESSION['uid']);

$select_wallet=mysqli_query($con,"SELECT *FROM wallet WHERE uid= '".$_SESSION['uid']."'");

if(isset($_GET['del'])){
	mysqli_query($con,"DELETE FROM wallet WHERE id='".$_GET['del']."'");
	header("location: remove-prize-bond.php");
}
?>
<div class="main-panel">
    <div class="content-wrapper">
 		<div class="row">
 		    
 		    <div class="col-md-3" id="display-mv-right">
 				<div class="card">
 						<div class="card-body">
 							<!-- <div class="card-title"> -->
 								<!-- list start -->
 <div class="row">
	 <div class="col-12">
	    <div class="list-group">
	      <a  class="list-group-item list-group-item-action " href="wallet.php" style="height: 40px;">Prize Bond Wallet
	      </a>
	      <a style="height: 40px;" class="list-group-item list-group-item-action " href="add-new-bond.php" >Add New Bond
	      </a>
	      <a style="height: 40px;" class="list-group-item list-group-item-action " href="check-lucky-draw.php" >Check Lucky Draw
	      </a>
	      
	      <a style="height: 40px;" class="list-group-item list-group-item-action " href="remove-prize-bond.php" >Remove Prize Bond
	      </a>
	      <a style="height: 40px;" class="list-group-item list-group-item-action " href="prize-bond-list.php" >Prize Bond List
	      </a>
	      
	    </div>
	  </div>
 </div>
 								<!-- list end -->
 							<!-- </div> -->
 						</div>
 				</div>
 			</div>
 			
 		    
 		    
 		    
 			<div class="col-md-9 mb-4 ">
 				<div class="card">
 					<div class="card-body">
 						<div class="table-responsive">
 							<table class="table text-white">
 								<caption>Remove prize bond</caption>
 								<thead>
 									<tr>
 										<th>Price</th>
 										<th>Bond number</th>
 										<th>Action</th>
 									</tr>
 								</thead>
 								<tbody>
 									<?php while($row=mysqli_fetch_array($select_wallet)){ ?>
 									<tr>
 										<td><?=$row['price']?></td>
 										<td><?=$row['bond_number']?></td>
 										<td>
 									<a href="remove-prize-bond.php?del=<?=$row['id']?>"  onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sm">
 										Delete
 									</a>
 										</td>
 									</tr>
 								<?php } ?>
 								</tbody>
 							</table>
 						</div>
 					</div>
 				</div>
 			</div>
 			
 			<div class="col-md-3 mt-2 mb-4" id="hidden-right-col">
 				<div class="card">
 						<div class="card-body">
 						
 								<!-- list start -->
  <div class="row">
                    	 <div class="col-12">
                    	    <div class="list-group">
                    	      <a  class="list-group-item list-group-item-action " href="wallet.php" style="height: 56px;">Prize Bond Wallet
                    	      </a>
                    	      <a style="height: 56px;" class="list-group-item list-group-item-action " href="add-new-bond.php" >Add New Bond
                    	      </a>
                    	      <a style="height: 56px;" class="list-group-item list-group-item-action " href="check-lucky-draw.php" >Check Lucky Draw
                    	      </a>
                    	     
                    	      <a style="height: 56px;" class="list-group-item list-group-item-action " href="remove-prize-bond.php" >Remove Prize Bond
                    	      </a>
                    	       <a style="height: 56px; width:100px overflow:auto"  class="list-group-item list-group-item-action " href="prize-bond-list.php" >Prize Bond List
                    	      </a>
                    	    </div>
                    	  </div>
                     </div>
 								<!-- list end -->
 						
 						</div>
 				</div>
 			</div>
 		</div>
 	</div>
<?php include('layouts/footer.php');?>