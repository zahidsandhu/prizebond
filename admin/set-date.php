<?php include('layouts/header.php');?>

<?php
$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
  
    
if(isset($_GET['id'])){
    
    $select_query = "SELECT * FROM users WHERE uid = ".$_GET["id"];
    $run_query = mysqli_query($con,$select_query);
    $fetch_query = mysqli_fetch_array($run_query);
    $set_date = $fetch_query['start_date'];
    $end_date = $fetch_query['end_date'];
    
   if(isset($_POST['Submit'])){

      $start_date = $_POST['start_date'];
      $end_date = $_POST['end_date'];
      $get_id=$_GET['id'];
       
      $update_query = "UPDATE users SET start_date='".$start_date."',end_date= '".$end_date."' WHERE uid='".$get_id."' ";

        $result = mysqli_query($con,$update_query);
        
        if($result){
          $message = "Your date has been set successfully.";
          ?>
          <script>
            setTimeout(function(){
            $('#date-message').hide();

             window.location.href="users.php";
            },2000);
          </script>
          <?php
        }
      }
}  
?>
        <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex align-items-center mb-4">
                <!-- <h4 class="card-title">Default form</h4> -->
                <form method="post" action="">
                  
                    <?php if(isset($message)):?>
                        <span class="alert alert-success mb-3" id="date-message">
                          <?= $message;

                          ?>
                        </span>
                      <?php endif; ?>
                   
                  <div class="form-group">
                    <label for="Start date" class="text-capitalize">start date</label>
                    <div class="input-group date datepicker">
                      <input type="text" value="<?php echo $set_date?>" name="start_date" class="form-control" autocomplete="off">
                      <span class="input-group-addon input-group-append border-left">
                        <span class="icon-calendar input-group-text"></span>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="End Date" class="text-capitalize">end date</label>
                    <div id="datepicker-popup2" class="input-group date datepicker">
                      <input type="text" value="<?php echo $end_date?>" name="end_date" class="form-control" autocomplete="off">
                      <span class="input-group-addon input-group-append border-left">
                        <span class="icon-calendar input-group-text"></span>
                      </span>
                    </div>
                  </div>
                  <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- content-wrapper ends -->
<?php include('layouts/footer.php');?>

         