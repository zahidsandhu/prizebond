<?php include('layouts/header.php');
$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
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
 			
 			
 			
 			
 			
 			
 			
 			<div class="col-md-8 ">
 				<div class="card">
 					<div class="card-body ">
 						<div class="card-title">
 						<h3>Check Lucky Draw</h3>
 					    </div>
 					    <div class="card-title">
                <section class="searchprize-sec">
  <div class="auto-container">
    <div class="row">
      <div class="col-md-9 col-sm-12 mx-auto">
      
        <form id="searchForm" name="searchForm" action="../search.php" method="post">
          <div class="form-group">
            <label for="search_words_field">Bond</label>
            <select class="form-control" id='search_words_field' name="bond">
              <?php
              $result=mysqli_query($con,"select * from list order by id desc");
              $row=mysqli_fetch_array($result);
              $draw=$row["draw"];
              ?>
              <option value="200" <?php  if ($draw=="200"){echo "selected='selected'";}  ?>>200</option>
              <option value="40000" <?php  if ($draw=="40000"){echo "selected='selected'";}  ?>>40000</option>
              <option value="7500" <?php  if ($draw=="7500"){echo "selected='selected'";}  ?>>7500</option>
              <option value="750" <?php  if ($draw=="750"){echo "selected='selected'";}  ?>>750</option>
              <option value="15000" <?php  if ($draw=="15000"){echo "selected='selected'";}  ?>>15000</option>
              <option value="1500" <?php  if ($draw=="1500"){echo "selected='selected'";}  ?>>1500</option>
              <option value="25000" <?php  if ($draw=="25000"){echo "selected='selected'";}  ?>>25000</option>
              <option value="100" <?php  if ($draw=="100"){echo "selected='selected'";}  ?>>100</option>
            </select>
          </div>
          <div class="form-group">
            <label for="tid_field">6 Digit Bond:</label>
            <input type="text"  name="no" placeholder="Example : 123456,654321,876589" class="form-control">
          </div>
          <div class="form-group row">
            <div class="col-sm-6">
              <label for="tid_field">Start 6 Digit Bond Seriese:</label>
              <input type="text"  name="startno" placeholder="Example : 123451" class="form-control">
            </div>
            <div class="col-sm-6">
              <label for="tid_field">End 6 Digit Bond Seriese:</label>
              <input type="text"  name="endno" placeholder="Example : 123459" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <input value="Search" id="searchFormSubmit" type="submit" name="search" class="form-control btn btn-outline-primary"/>
          </div>
        </form>
        
        
      </div>
    </div>
  </div>
</section>
 					    	
 					    	</div>
 					  
 					</div>
 				</div>

 			</div>
 			<div class="col-md-4 mt-3" id="hidden-right-col">
 				<div class="card">
 						<div class="card-body">
 							
 								<!-- list start -->
 <div class="row row-self-style-check-lucky-draw">
	 <div class="col-12">
	    <div class="list-group">
	      <a  class="list-group-item list-group-item-action self-list-group-item-action " href="wallet.php" style="height: 40px;">Prize Bond Wallet
	      </a>
	      <a style="height: 40px;" class="list-group-item self-list-group-item-action list-group-item-action " href="add-new-bond.php" >Add New Bond
	      </a>
	      <a style="height: 40px;" class="list-group-item self-list-group-item-action list-group-item-action " href="check-lucky-draw.php" >Check Lucky Draw
	      </a>
	     
	      <a style="height: 40px;" class="list-group-item self-list-group-item-action list-group-item-action " href="remove-prize-bond.php" >Remove Prize Bond
	      </a>
	     <a style="height: 40px;" class="list-group-item list-group-item-action " href="prize-bond-list.php" >Prize Bond List
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