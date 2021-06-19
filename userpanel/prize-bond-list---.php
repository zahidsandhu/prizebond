<?php include('layouts/header.php');
$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
$userdata=user_data($_SESSION['uid']);

if(isset($_GET['bond'])){
    $select_wallet=mysqli_query($con,"SELECT *FROM wallet WHERE uid= '".$_SESSION['uid']."' && price='".$_GET['bond']."' ");
}else{
$select_wallet=mysqli_query($con,"SELECT *FROM wallet WHERE uid= '".$_SESSION['uid']."'");
}

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
	    <a style="height: 56px;" class="list-group-item list-group-item-action " href="prize-bond-list.php" >Prize Bond List
	      </a>
	      
	    </div>
	  </div>
 </div>
 		
 <!--<div class="row">-->
	<!-- <div class="col-12 self-style-col-12-left-margin">-->
	<!--    <div class="list-group self-style-list-group">-->
	<!--      <a  class="list-group-item list-group-item-action self-style-list-group-item-action " href="wallet.php" style="height: 40px;">Prize Bond Wallet-->
	<!--      </a>-->
	<!--      <a style="height: 40px;" class="list-group-item self-style-list-group-item-action list-group-item-action " href="add-new-bond.php" >Add New Bond-->
	<!--      </a>-->
	<!--      <a style="height: 40px;" class="list-group-item self-style-list-group-item-action list-group-item-action " href="check-lucky-draw.php" >Check Lucky Draw-->
	<!--      </a>-->
	      
	<!--      <a style="height: 40px;" class="list-group-item self-style-list-group-item-action list-group-item-action " href="remove-prize-bond.php" >Remove Prize Bond-->
	<!--      </a>-->
	<!--      <a style="height: 40px;" class="list-group-item self-style-list-group-item-action list-group-item-action " href="prize-bond-list.php" >Prize Bond List-->
	<!--      </a>-->
	      
	<!--    </div>-->
	<!--  </div>-->
 <!--</div>-->
 						</div>
 				</div>
 			</div>
 			
 		    
 		    
 		    
 			<div class="col-md-9 mb-4 ">
 				<div class="card">
 					<div class="card-body">
 					    
 						<div class="table-responsive">
 						    <?php 
 						    if(isset($_GET['bond'])){
                                $select_wallet2=mysqli_query($con,"SELECT *FROM wallet WHERE uid= '".$_SESSION['uid']."' && price='".$_GET['bond']."' ");
                            }
                           while($winning_status=mysqli_fetch_array($select_wallet2)){
                               if($winning_status['winning'] > 0){
                                   $status=$winning_status['winning'];
                               }
                           }
 						    if(isset($status)){
 						       ?>
 						       <span><img src=../extra/cong.png width='300px' class="img-responsive"></span>
 						       <?
 						    }
 						    ?>
 						    
 							<table class="table text-white">
 								<!--<caption>No Prize Bonds</caption>-->
 								<thead>
 									<tr>
 										<th>Price</th>
 										<th>Bond number</th>
 										<th>Date</th>
 										
 									</tr>
 								</thead>
 								<tbody>
 									<?php while($row=mysqli_fetch_array($select_wallet)){ ?>
 									<tr>
 										<td><?=$row['price']?></td>
 										<td>
 										<?php  $data="";
 										if($row['winning'] == 1){
                                 			$draw = $row['price'];
                                 			$value=$row['bond_number'];
                                 			//$bond=$row['price'];
                                 		
                                 				$check_search= mysqli_query($con,"select * from list where (numbers like '%$value%' or list like '%$value%') && draw like '%$draw%' ");
                                 			// 	  $data= $check_search['dat'];
 										 echo "<span class=' text-primary'> ".$row['bond_number']." winning number</span>";
 										}else{?>
 										    <?= $row['bond_number']?>
 									    <?php }?>
 										</td>
 										<?php while($value2=mysqli_fetch_array($check_search)){?>
 										<td><?=  $value2['dat']; ?></td>
 										<?php } ?>
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
                    	 <div class="col-12 self-style-col-12-left-margin-right">
                    	    <div class="list-group self-style-list-group-right">
                    	      <a  class="list-group-item list-group-item-action self-style-list-group-item-action-right " href="wallet.php" style="height: 56px;">Prize Bond Wallet
                    	      </a>
                    	      <a style="height: 56px;" class="self-style-list-group-item-action-right list-group-item list-group-item-action " href="add-new-bond.php" >Add New Bond
                    	      </a>
                    	      <a style="height: 56px;" class="self-style-list-group-item-action-right list-group-item list-group-item-action " href="check-lucky-draw.php" >Check Lucky Draw
                    	      </a>
                    	     
                    	      <a style="height: 56px;" class="self-style-list-group-item-action-right list-group-item list-group-item-action " href="remove-prize-bond.php" >Remove Prize Bond
                    	      </a>
                    	       <a style="height: 56px; width:100px overflow:auto"  class="self-style-list-group-item-action-right list-group-item list-group-item-action " href="prize-bond-list.php" >Prize Bond List
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