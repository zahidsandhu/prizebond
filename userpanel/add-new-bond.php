<?php include('layouts/header.php');
$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
$userdata=user_data($_SESSION['uid']);
?>
          <?php 
    $store_bond=array();
    if(isset($_POST['add_new'])){
       
      if($_POST['single_num'] !=""){
      $search_value[]=$_POST['single_num'];
      $bond=$_POST['select_price'];
      
    //   && price='".$_POST['select_price']."'
      // check number is exist or not
       $select_check=mysqli_query($con,"SELECT *FROM wallet WHERE bond_number='".$_POST['single_num']."' && price='".$_POST['select_price']."' && uid='".$_SESSION['uid']."' ");
       if($select_check->num_rows > 0){
           $mesg="<span class='alert alert-info'>This Prize bond number exist</span>";
          ?>
          <script>
                    setTimeout(function(){
                     $(".alert-info").hide();
                    },3000);
                  </script>
          <?php
       }else{
           $check_single=mysqli_query($con,"INSERT INTO wallet(uid,price,bond_number) VALUES('".$_SESSION['uid']."','".$_POST['select_price']."','".$_POST['single_num']."')");
       }
          if($check_single){
              $mesg="<span class='alert alert-success'>Prize bond added successfully</span>";
              ?>
                  <script>
                    setTimeout(function(){
                     $(".alert-success").hide();
                    },2000);
                  </script>
              <?php
          }
       }elseif(($_POST['from'] !="" && $_POST['to']) ||$_POST['single_num'] =""){
           
           $bond=$_POST['select_price'];
           
          if($_POST['from'] <= $_POST['to']){

            while($_POST['from'] <= $_POST['to']){
                 $select_check=mysqli_query($con,"SELECT *FROM wallet WHERE bond_number='".$_POST['from']."' && price='".$_POST['select_price']."' ");
                  if ($select_check->num_rows > 0){
                  $exist_value=$_POST['from'];
              }else{
                  $check_multi=mysqli_query($con,"INSERT INTO wallet(uid,price,bond_number) VALUES('".$_SESSION['uid']."','".$_POST['select_price']."','".$_POST['from']."')");
                $search_value[]=$_POST['from'];
              }
                $_POST['from']++;  
              }
              }
            

                 if($check_multi){
                    $mesg="<span class='alert alert-success'>Prize bond series added successfully</span>";
                      ?>
                        <script>
                          setTimeout(function(){
                            $('.alert-success').hide();
                          },2000);
                        </script>
                    <?php
                  }
            


          }

       } 
    //   end if 
        
    
    	
    foreach ($search_value as $value) {
			   
			    			if(isset($value)){
			    			    
			    			    $num=$value;
			    			    $value2=sprintf("%06d", $num);
			    			     
			    			    $check_search="";
 			
			    				$check_search= mysqli_fetch_array(mysqli_query($con,"select * from list where (numbers like '%$value2%' or list like '%$value2%') && draw like '%$bond%' ORDER BY dat DESC"));
			    	// 			
			    				if(!empty($check_search)){
			    				    
			    				$final_array[]= $value2;
			    				$get_search[]=$check_search;
			    				}
			    	

			    			} // end if
							
						}// end foreach loop
					

   

 ?>

<div class="main-panel">
    <div class="content-wrapper">
 		<div class="row mb-4">
 		
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
 						<div class="card-title">
              <?
 						//print_r($ary);
             if(isset($mesg)){
            //   echo $mesg;
            }
              echo "<h3>Add New Bond</h3>";
            
             ?>
 					    </div>
    
 					    <div class="card-title">
 					    	
 					    		<div class="row">
 					    			<div class="col-md-3"></div>
 					    			<div class="col-md-6">
 					    		<form action="" method="post" >
                   <!--  profile div -->
 					    			<div class="form-group row">
 					    			<label class="col-md-5 mt-1">
 					    				<span style="font-size: 18px;">Profile:</span>
 					    			</label>
 					    			<div class="col-md-7 text-black">
 					    			<select style="height: 35px;
    width: 190px;" name="profile" class="form-control">
 					    				<option value=""><?=$userdata['username'];?></option>	
 					    			</select>
 					    		   </div>
 					    			</div>
                   <!--  prize bond div -->
                   <div class="form-group row">
                    <label class="col-md-5 mt-1">
                      <span style="font-size: 18px;">prize bond of:</span>
                    </label>
                    <div class="col-md-7 text-black">
                    <select style="height: 35px;
    width: 190px;" name="select_price" class="form-control">
                      <option value="100">100/-</option>
                      <option value="200">200/-</option>
                      <option value="750">750/-</option>
                      <option value="1500">1,500/-</option>
                      <option value="7500">7,500/-</option>
                      <option value="15000">15,000/-</option>
                      <option value="25000">25,000/-</option>
                      <option value="40000 Premium Bond">40000/-Premium Bond</option>
                    </select>
                     </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-3"></div>
                       <div class="col-md-3">
                         <label><input type="radio" name="ran_sing" value="" checked="checked" id="single">
                           &nbsp;&nbsp;Single
                         </label>
                       </div>
                        <div class="col-md-3">
                          <label><input type="radio" name="ran_sing"  value="" id="range">
                          &nbsp;&nbsp;Range </label>
                        </div>
                      
                    </div>
                    <div class=" row">
                      <div class="col-md-8 hidden-com-8">
                        <div class="row form-group">
                         <label>Enter Prize Bond No.</label>
                         <input type="text"  minlength="6" maxlength="6" name="single_num" value="" class="col-md-11">
                       </div>
                       </div>
                       <div class="col-md-4 hidden-com-4" style="display: none; ">
                         <div class="row form-group">
                           <label>From</label>
                         <input type="text"  minlength="6" maxlength="6" name="from" value="" class="col-md-11 ">
                         </div>
                       </div>
                       

                       <div class="col-md-4 hidden-com-4" style="display: none; ">
                        <div class="row form-group">
                         <label>to</label>
                         <input type="text"  minlength="6" maxlength="6" name="to" value="" class="col-md-11">
                       </div>
                       </div>
                       <div class="col-md-4">
                        <div class="row ">
                          <div class="form-group " style="margin-top: 21px;">
                            <input type="submit" name="add_new" value="Add" class="btn btn-sm btn-primary">
                          </div>
                         
                       </div>
                       </div>
                    </div>
                    
                    
 					    		</form>
 					    			</div>
 					    			<div class="col-md-3"></div>
 					    		</div>
 					    	
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
	    <a style="height: 56px;" class="list-group-item list-group-item-action " href="prize-bond-list.php" >Prize Bond List
	      </a>
	      
	    </div>
	  </div>
 </div>
 								<!-- list end -->
 							
 						</div>
 				</div>
 			</div>
 			<!--<php echo "<pre>"; print_r($get_search); exit();?>-->
 			<?php if(isset($final_array)){?>
 			<div class="row mt-2 " style="width:100% !important;" >
 			    <div class="col-sm-12" >
 			        <div class="card" >
 			            <div class="card-body " >
 			                <?php
 			                foreach ($final_array as $key => $value) {
 			             mysqli_query($con,"UPDATE wallet SET bond_status ='1', winning='1' WHERE bond_number='".$value."' ");
 			             
					if($key == $key){
					$numbers=explode("break",$get_search[$key]["numbers"]);
					 $first=$numbers[0];
					 $second="second".$numbers[2]; 
					 $second_amount=$numbers[3];
					 
					 strpos($second,$value);
					$draw=$get_search[$key]["drawno"];
					$date=$get_search[$key]["dat"];
					$city=$get_search[$key]["city"];
					$list=$get_search[$key]["list"];
					if ($value==$first){
						$prize="First";
						$amount=$numbers[1];
					}elseif(strpos($second,$value)>0){
						$prize="Second";
						$amount=$numbers[3];
					}elseif(strpos($list,$value)){
						$prize="Third";
						$amount=$get_search[$key]["third"];
						
						
					}
					echo "select * from list where (numbers like '%$value%' or list like '%$value%') && draw like '%$bond%' ORDER BY id DESC";
					$check_search_date= mysqli_query($con,"select * from list where (numbers like '%$value%' or list like '%$value%') && draw like '%$bond%'");
    				while($row = mysqli_fetch_assoc($check_search_date)) {
					$date = $row['dat'];
					$drawno = $row['drawno'];
					echo "
					<div class='table-responsive'>
					<img src=../extra/cong.png width='400px' class=\"img-responsive\"/>
					
					<h4>You have won $amount against $value bond.</h4>
						
					<table class='search   table  table-bordered self-style-table-res' >
						<tr>
							<th>Bond</th>
							<th>Prize</th>
							<th>Prize Amount</th>
							<th>Draw No.</th>
							<th>Draw Date</th>
							<th>Held at</th>
						</tr>
						<tr>
							<td>$bond</td>
							<td>$prize</td>
							<td>$amount</td>
							<td>$drawno</td>
							<td>$date</td>
    					    <td>$city</td>
						</tr>
						
					</table>
					</div>
					";
    				}
					
				  } //end if
				  
				}// end foreach loop
				?>
 			            </div>
 			        </div>
 			    </div>
 			</div>
 		<?php	} ?>
 		</div>
 	</div>
  
 <?php include('layouts/footer.php');?>
 <script>
    $(document).ready(function(){
      $("#single").click(function(){
        $(".hidden-com-4").hide();
        $(".hidden-com-8").show();
      })
      $("#range").click(function(){
        $(".hidden-com-4").show();
        $(".hidden-com-8").hide();
      })
    });
  </script>