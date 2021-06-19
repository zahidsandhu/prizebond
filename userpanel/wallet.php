<?php include('layouts/header.php');
$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
$userdat=user_data($_SESSION['uid']);
?>
<div class="main-panel">
    <div class="content-wrapper">
 		<div class="row mb-4">
 			<!-- <div class="col-md-3"></div> -->
 			
 			
 			 			<div class="col-md-3" id="display-mv-right">
 				<div class="card">
 						<div class="card-body">
 							<!-- <div class="card-title"> -->
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
	      <a style="height: 56px;" class="list-group-item list-group-item-action " href="prize-bond-list.php" >Prize Bond List
	      </a>
	      
	      
	    </div>
	  </div>
 </div>
 								<!-- list end -->
 							<!-- </div> -->
 						</div>
 				</div>
 			</div>
 			
 			
 			
 			
 			
 			
 			
 			
 			
 			<div class="col-md-9 ">
 				<div class="card">
 					<div class="card-body ">
 						<div class="card-title text-center">
 						<h3>Your prize bond wallet worth</h3>
 					    </div>
 					    <div class="card-title">
 					    	
 					    		<div class="row">
 					    			<div class="col-md-3"></div>
 					    			<div class="col-md-6">
 					    		<form action="" method="post" >
 					    			<div class="form-group row">
 					    			<label class="col-md-3 mt-1">
 					    				<span style="font-size: 21px;">Profile:</span>
 					    			</label>
 					    			<div class="col-md-9 text-black">
 					    			<select style="height: 35px;
    width: 190px;" name="profile" class="form-control">
 					    				<option value="">All Profile</option>
 					    				<option value=""><?= $userdat['username']?></option>
 					    				
 					    				
 					    			</select>
 					    		   </div>
 					    			</div>
 					    		</form>
 					    			</div>
 					    			<div class="col-md-3"></div>
 					    		</div>
 					    	
 					    </div>
 					    <!-- table section start -->
 				<div class="row">
 					<div class="col-sm-12">
 						<?php
 						// select wallet data 
 						$select_wallet=mysqli_query($con,"SELECT *FROM wallet WHERE uid= '".$_SESSION['uid']."'");
 						//print_r($select_wallet);
 						 ?>
 						<!-- table start -->
 						<div class="table-responsive">
                      <table class=" table" style="border:none;">
                        <thead class="text-primary ">
                          <tr>
                            <th>Prize Bond</th>
                            <th>No. of Prize Bonds</th>
                            <th>Worth</th>
                          </tr>
                        </thead>
                        <tbody class="text-white ">
                        	<!-- print table data -->
                        	<?php 
                        	$num1=0;$num2=0;$num3=0;$num4=0;$num5=0;$num6=0;$num7=0;$num8=0;
                        	$price1=0;$price2=0;$price3=0;$price4=0;$price5=0;$price6=0;$price7=0;$price8=0;

                        	?>
                     <?php 
                    //  $row=mysqli_fetch_array($select_wallet);
                    //  print_r($row);exit();
                     while($row=mysqli_fetch_array($select_wallet)){
                         
                            	if($row['price'] ==100){
                            		$num1=$num1+1;
                            		$price1=$price1+$row['price']; 
                            		if($row['winning'] == 1){
                            		    $status1="<span class='text-primary'>winning</span>";
                            		}
                            	}elseif($row['price'] ==200){
                            		$num2=$num2+1;
                            		$price2=$price2+$row['price'];
                            		if($row['winning'] == 1){
                            		    $status2="<span class='text-primary'>winning</span>";
                            		}
                            	}elseif($row['price'] ==750){
                            		$num3=$num3+1;
                            		$price3=$price3+$row['price'];
                            		if($row['winning'] == 1){
                            		    $status3="<span class='text-primary'>winning</span>";
                            		}
                            	}elseif($row['price'] ==1500){
                            		$num4=$num4+1;
                            		$price4=$price4+$row['price'];
                            		if($row['winning'] == 1){
                            		    $status4="<span class='text-primary'>winning</span>";
                            		}
                            	}elseif($row['price'] ==7500){
                            		$num5=$num5+1;
                            		$price5=$price5+$row['price'];
                            		if($row['winning'] == 1){
                            		    $status5="<span class='text-primary'>winning</span>";
                            		}
                            	}elseif($row['price'] ==15000){
                            		$num6=$num6+1;
                            		$price6=$price6+$row['price'];
                            		if($row['winning'] == 1){
                            		    $status6="<span class='text-primary'>winning</span>";
                            		}
                            	}elseif($row['price'] ==25000){
                            		$num7=$num7+1;
                            		$price7=$price7+$row['price'];
                            		if($row['winning'] == 1){
                            		    $status7="<span class='text-primary'>winning</span>";
                            		}
                            	}elseif($row['price'] =="40000 Premium Bond"){
                            		$num8=$num8+1;
                            		$price8=$price8+$row['price'];
                            		if($row['winning'] == 1){
                            		    $status8="<span class='text-primary'>winning</span>";
                            		}
                            	}
                     		 }

                     	?>
                          <tr>
                            <td> <a class="text-white " style="text-decoration: underline;" href="prize-bond-list.php?bond=100">Rs.100/-</a>
                                <?php	if(isset($status1)){
                            			    echo "&nbsp;&nbsp;&nbsp;".$status1;
                            			}?>
                            </td>
                            <td>
                            	<?php 
                            		if($num1 > 0){
                            			echo $num1;
                            		
                            		}else{
                            			echo "No Prize Bonds";
                            		}
                            	 ?>
                            </td>
                            <td>
	                            <?php
	                            	if(isset($price1)){
	                            		echo $price1; 
	                            	
	                            	}else{
	                            		echo "0";
	                            	}
	                            	
	                            	 ?> 
                             </td>  
                          </tr>
                          <tr>
                            <td>
                            <a class="text-white " style="text-decoration: underline;" href="prize-bond-list.php?bond=200">
                             Rs.200/-</a>
                             <?php	if(isset($status2)){
                            			    echo "&nbsp;&nbsp;&nbsp;".$status2;
                            			}?>
                         </td>
                            <td>
                            	<?php 
                            		if($num2 > 0){
                            			echo $num2;
                            		
                            		}else{
                            			echo "No Prize Bonds";
                            		}
                            	 ?>
                            </td>
                            <td>
                            <?php
	                            	if(isset($price2)){
	                            		echo $price2; 
	                            		
	                            	}else{
	                            		echo "0";
	                            	}
	                            	
	                            	 ?> 
                             </td>  
                          </tr>
                          <tr>
                            <td><a class="text-white " style="text-decoration: underline;" href="prize-bond-list.php?bond=750"> Rs.750/-</a>
                            <?php	if(isset($status3)){
                            			    echo "&nbsp;&nbsp;&nbsp;".$status3;
                            			}?></td>
                            <td>
                            	<?php 
                            		if($num3 > 0){
                            			echo $num3;
                            		
                            		}else{
                            			echo "No Prize Bonds";
                            		}
                            	 ?>
                            </td>
                            <td>
                            	<?php
	                            	if(isset($price3)){
	                            		echo $price3; 
	                            	}else{
	                            		echo "0";
	                            	}
	                            	
	                            	 ?>
                             </td>  
                          </tr>
                          <tr>
                            <td><a class="text-white " style="text-decoration: underline;" href="prize-bond-list.php?bond=1500"> Rs.1,500/-</a>
                            <?php	if(isset($status4)){
                            			    echo "&nbsp;&nbsp;&nbsp;".$status4;
                            			}?>
                            </td>
                            <td>
                            	<?php 
                            		if($num4 > 0){
                            			echo $num4;
                            			
                            		}else{
                            			echo "No Prize Bonds";
                            		}
                            	 ?>
                            </td>
                            <td>
                            <?php
	                            	if(isset($price4)){
	                            		echo $price4; 
	                            		
	                            	}else{
	                            		echo "0";
	                            	}
	                            	
	                            	 ?> 
                            </td>  
                          </tr>
                          <tr>
                            <td><a class="text-white " style="text-decoration: underline;" href="prize-bond-list.php?bond=7500"> Rs.7,500/-</a>
                            <?php	if(isset($status5)){
                            			    echo "&nbsp;&nbsp;&nbsp;".$status5;
                            			}?>
                            </td>
                            <td>
                            	<?php 
                            		if($num5 > 0){
                            			echo $num5;
                            			
                            		}else{
                            			echo "No Prize Bonds";
                            		}
                            	 ?>
                            </td>
                            <td> 
                            	<?php
	                            	if(isset($price5)){
	                            		echo $price5; 
	                            	}else{
	                            		echo "0";
	                            	}
	                            	
	                            	 ?>
                            </td>  
                          </tr>
                          <tr>
                            <td><a class="text-white " style="text-decoration: underline;" href="prize-bond-list.php?bond=15000"> Rs.15,000/-</a>
                            <?php	if(isset($status6)){
                            			    echo "&nbsp;&nbsp;&nbsp;".$status6;
                            			}?>
                            </td>
                            <td>
                            	<?php 
                            		if($num6 > 0){
                            			echo $num6;
                            			
                            		}else{
                            			echo "No Prize Bonds";
                            		}
                            	 ?>
                            </td>
                            <td> 
                            	<?php
	                            	if(isset($price6)){
	                            		echo $price6; 
	                            	}else{
	                            		echo "0";
	                            	}
	                            	
	                            	 ?>
                             </td>  
                          </tr>
                          <tr>
                            <td><a class="text-white " style="text-decoration: underline;" href="prize-bond-list.php?bond=25000"> Rs.25,000/-</a>
                            <?php	if(isset($status7)){
                            			    echo "&nbsp;&nbsp;&nbsp;".$status7;
                            			}?>
                            </td>
                            <td>
                            	<?php 
                            		if($num7 > 0){
                            			echo $num7;
                            			
                            		}else{
                            			echo "No Prize Bonds";
                            		}
                            	 ?>
                            </td>
                            <td> 
                            	<?php
	                            	if(isset($price7)){
	                            		echo $price7; 
	                            	}else{
	                            		echo "0";
	                            	}
	                            	
	                            	 ?>
                             </td>  
                          </tr>
                          <tr>
                            <td><a class="text-white " style="text-decoration: underline;" href="prize-bond-list.php?bond=40000 Premium Bond"> Rs.40000/-Premium Bond</a>
                            <?php	if(isset($status8)){
                            			    echo "&nbsp;&nbsp;&nbsp;".$status8;
                            			}?>
                            </td>
                            <td>
                            	<?php 
                            		if($num8 > 0){
                            			echo $num8;
                            			
                            		}else{
                            			echo "No Prize Bonds";
                            		}
                            	 ?>
                            </td>
                            <td>
	                            <?php
	                            	if(isset($price8)){
	                            		echo $price8; 
	                            	}else{
	                            		echo "0";
	                            	}
	                            	
	                            	 ?> 
                             </td>   
                          </tr>
                      
                        </tbody>
                      </table>
                    </div>
 						<!-- table end-->
 					</div>
 					<!--<div class="col-md-6">right</div>-->
 					<div class="col-md-12 bg-info pt-2 text-center" style="height:48px;">Total Worth : Rs. <?= $price1+$price2+$price3+$price4+$price5+$price6+$price7+$price8?></div>
 				</div>
 				<!-- table section end -->
 					</div>
 				</div>

 			</div>
 			<div class="col-md-3" id="hidden-right-col">
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