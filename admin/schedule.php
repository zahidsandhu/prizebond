<?php include('layouts/header.php');?>
	 <!-- partial -->
	        <div class="main-panel">
	          <div class="content-wrapper">
	          	<?php 
	          	if(isset($_GET['Update'])){
	          		$input="<input type='submit' class='btn btn-primary mr-2' name='Update' value='update'>";	
	          	}else{
	          		$input="<input type='submit' class='btn btn-primary mr-2' name='submit' value='Submit'>";
	          	}
	          	// for update select data 
	          	if(isset($_GET['Update'])){
                      $select_query= "SELECT * FROM schedule WHERE id = '".$_GET['Update']."' ";
                      $select_result=mysqli_query($con,$select_query);
                      $select_ary=mysqli_fetch_array($select_result);
                      	
                    }
                 if(isset($_POST['Update'])){
                     if($_POST[draw_id] == "Select your list" ){
                         $update_query ="UPDATE schedule SET draw_id='0' WHERE id = '".$_GET['Update']."' ";
                         $update_run=mysqli_query($con,$update_query);
                             if($update_run){
    	          				$Update_msg="Data Successfully Update";
    
                              ?>
                                        <script> setTimeout(function(){ window.location.href ="schedule.php"}, 2000);
                                      </script>
                              <?php
                            
    	          			}
                     }else{
// print_r($_POST);
// exit();
					$year=date_create($_POST['date']);
					$get_year = date_format($year,"Y");
					$draw_id = $_POST['draw_id'];
                 	$update_query ="UPDATE schedule SET bond='".$_POST['bond']."', draw_no ='".$_POST['draw_no']."', city ='".$_POST['city']."',date = '".$_POST['date']."',year = $get_year,draw_id = $draw_id WHERE id = '".$_GET['Update']."' ";

                        $update_run=mysqli_query($con,$update_query);

                        if($update_run){
	          				$Update_msg="Data Successfully Update";

                          ?>
                                    <script> setTimeout(function(){ window.location.href ="schedule.php"}, 2000);
                                  </script>
                          <?php
                        
	          			}
                     }
                 }
	          	// select data and show 

	          		$slelct_query="SELECT * FROM schedule ORDER BY draw_id DESC";
	          		$run_slelct_query=mysqli_query($con,$slelct_query);
	          	// insert data 
	          		if(isset($_POST['submit'])){
	          			// print_r($_POST);
	          			// exit();
	          			$year=date_create($_POST['date']);
						$get_year = date_format($year,"Y");
						$draw_id = $_POST['draw_id'];
						
						// $draw_no = strlen($_POST['draw_no']);
						// if($draw_no >6 || $draw_no <6){
						// 	$error_message = "You can add only 6 number draw digits. ";
						// }
						if($draw_id !='Select your list'){
							$insert_query="INSERT INTO schedule(bond,draw_no,city,date,year,draw_id) values('".$_POST['bond']."','".$_POST['draw_no']."','".$_POST['city']."','".$_POST['date']."',$get_year,$draw_id)";
						}else{
							$insert_query="INSERT INTO schedule(bond,draw_no,city,date,year) values('".$_POST['bond']."','".$_POST['draw_no']."','".$_POST['city']."','".$_POST['date']."',$get_year)";
						}

	          			

	          			$run_insert_query=mysqli_query($con,$insert_query);

	          			if($run_insert_query){
	          				$success_msg="Data Successfully Save";

                          ?>
                                    <script> setTimeout(function(){ window.location.href ="schedule.php"}, 2000);
                                  </script>
                          <?php
                     
						}else{
	          				$error_msg="Some Error In Database";
	          			}
	
	          		}

	          		
	          		
	          		// DELETE data 

					if(isset($_GET['Delete'])){
						$del_query="DELETE FROM schedule WHERE id='".$_GET['Delete']."' ";
					$run_del_query=mysqli_query($con,$del_query);
					 //header("Location: schedule.php");
					if($run_del_query){
						$delete_msg="Data Successfully Delete";
                          ?>
                                    <script> setTimeout(function(){ window.location.href ="schedule.php"}, 2000);
                                  </script>
                          <?php
					}


					}
	          		
	          	 ?>
	           <!-- form start  -->
	   <div class="row">
	   	
	           <div class="col-md-3"></div>
	<div class="col-md-6 grid-margin stretch-card">
		
		      <div class="card">
	                  <div class="card-body">
	                    <h4 class="card-title">Prizebond Draw Schedule Form</h4>
	                    <!-- <p class="card-description"> -->
	                    <?php if(isset($success_msg)): ?> 
	                    	<span class="alert alert-success"><?= $success_msg;?></span>
	                    <?php endif; ?>

	                    <?php if(isset($error_message)): ?> 
	                    	<span id="invalid_digit" class="alert alert-danger"><?= $error_message;?></span>
	                    <?php endif; ?>
	                    <script>
	                    	setTimeout(function(){
	                    		$('#invalid_digit').hide();
	                    	},3000);
	                    </script>
	                    <?php if(isset($error_msg)): ?> 
	                    	<span class="alert alert-danger"><?= $error_msg;?></span>
	                    <?php endif; ?>
	                    <?php if(isset($Update_msg)): ?> 
	                    	<span class="alert alert-success"><?= $Update_msg;?></span>
	                    <?php endif; ?>
	                    <?php if(isset($delete_msg)):?>
							<span class="alert alert-success"><?= $delete_msg?></span>
	                      <?php endif; ?>
	                     <!-- </p> -->
	                    <form autocomplete="off" class="forms-sample" method="post" action="">
	                      <div class="form-group">
	                        <label for="exampleInputUsername1">Prize Bond</label>
	                        <input  type="number" name="bond" required class="form-control form-control-sm self-style-input" id="exampleInputUsername1" placeholder="Bond Prize"
	                        value="<?php 
                              if(isset($select_ary['bond'])){
                                echo $select_ary['bond'];
                              }
                            ?>">
	                      </div>
	                      <div class="form-group">
	                        <label for="exampleInputEmail1">Draw No</label>
	                        <input type="number" name="draw_no" class="form-control form-control-sm self-style-input" required id="exampleInputEmail1" placeholder="Draw No" value="<?php 
                              if(isset($select_ary['draw_no'])){
                                echo $select_ary['draw_no'];
                              }
                            ?>">
	                      </div>
	                      <div class="form-group">
	                        <label for="exampleInputPassword1">City</label>
	                        <input type="text" name="city" required class="form-control form-control-sm self-style-input" id="exampleInputPassword1" placeholder="Enter City Name" value="<?php 
                              if(isset($select_ary['city'])){
                                echo $select_ary['city'];
                              }
                            ?>">
	                      </div>
	                      <div class="form-group " >
	                        <label for="exampleInputConfirmPassword1">Date</label>
	            			<div id="datepicker-popup" class="input-group date datepicker">
	                          <input type="text" required name="date" class="form-control" value="<?php 
                              if(isset($select_ary['date'])){
                                echo $select_ary['date'];
                              }
                            ?>">
	                          <span class="input-group-addon input-group-append border-left">
	                            <span class="icon-calendar input-group-text"></span>
	                          </span>
	                        </div>
	                      </div>
	                      <?php 
	                      	$list_query = "SELECT * FROM list WHERE title IS NOT NULL or title != '' ORDER BY id DESC";
	                      	$run = mysqli_query($con,$list_query);
	                      	
	                      ?>
	                    <div class="form-group">
	                    <label for="exampleInputPassword1">
	                        Draw Result
	                    </label>
						<?php 
						 if(isset($select_ary['draw_id'])){?>
						 	<select name="draw_id" class="form-control form-control-sm">

							<option value="Select your list">
								Select your list
							</option>

		                    <?php while($fetch_query = mysqli_fetch_array($run)){?>

		                        <option value="<?php echo $fetch_query['id'];?>" <?php echo ($fetch_query['id']==$select_ary['draw_id'])?'selected':''; ?>>
		                        	<?php 
		                        		echo $fetch_query['title'];
		                        	?>
		                        </option>

		                    <?php }?>
		                    </select>
		                    
						 <?php }else{?>
						 	<select name="draw_id" class="form-control form-control-sm">
							<option value="Select your list">Select your list</option>
		                    <?php while($fetch_query = mysqli_fetch_array($run)){?>

		                        <option value="<?php echo $fetch_query['id'];?>">
		                        	<?php echo $fetch_query['title'];?>
		                        </option>

		                    <?php }?>

		                    </select>
		                    <?php }?>
	                      </div>
	                      	<?= $input;?>
	                    </form>
	                  </div>
	                </div>
	              </div>
		
	    <div class="col-md-3"></div>
	    </div>           
		<!-- <script>
			$(function() {
	  $( ".datepicker" ).datepicker({
	    format : 'yyyy-mm-dd',
	    autoclose : true
	  });
	});
		</script>	 -->		
					
					<!-- form end  -->


	            <div class="row">
	              <div class="col-md-12 grid-margin stretch-card">
	                <div class="card">
	                  <div class="card-body">
	                    <div class="d-sm-flex align-items-center mb-4">
	                      <h4 class="card-title mb-sm-0">Prize Bond Draw Schedule</h4>
	                      
	                    </div>
<div class="table-responsive border rounded p-1">
  <table class="table table-striped" id="users">
    <thead>
      <tr class="text-white">
        <th>Bond</th>
        <th>Draw No</th>
        <th>Date</th>
        <th>Day</th>
        <th>City</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        
       <?php while($fetch_array=mysqli_fetch_array($run_slelct_query)): ?>  
      <tr>
        <!-- <td> </td> -->
        <td><?=$fetch_array['bond'];?></td>
        <td><?=$fetch_array['draw_no'];?></td>
        <td><?=$fetch_array['date'];?></td>
        <td><?php 
        $date=date_create($fetch_array['date']);
		echo  date_format($date,"D");
        ?></td>
        <td><?=$fetch_array['city'];?></td>
         <td>
             <a class="btn btn-primary btn-sm" href='?Update=<?= $fetch_array['id'];?>'>Update </a>&nbsp;
             <a class="btn btn-danger btn-sm" href='?Delete=<?= $fetch_array['id'];?>'>Delete </a>
			<?php 
				if($fetch_array['draw_id']!=''){
					$draw_id = $fetch_array['draw_id'];
					
					$query = "SELECT link FROM list WHERE id = $draw_id";
					$run = mysqli_query($con,$query);
					$result = mysqli_fetch_array($run);
					
					?>
					<a href="<?php echo "../prizebondlist.php?list=".$result['link'].'-'.$draw_id ?>" class="btn btn-success btn-sm ml-2">List</a>
				<?php }else{ ?>
					<div class="btn btn-danger btn-sm ml-2">Upcoming</div>
				<?php }?>
			<?php ?>

        </td>
      </tr>
     <?php endwhile; ?>
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