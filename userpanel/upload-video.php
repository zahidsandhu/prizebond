<?php include('layouts/header.php');
$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
$userdata=user_data($_SESSION['uid']);

// insert data in video table

if(isset($_POST["upload_video"])){
	

	if($_POST['video_type'] !="select" ){
		$type=$_POST['video_type'];
		$uid=$_SESSION['uid'];
		$uname=$userdata['username'];
		$link=$_POST['embed_link'];
		$title=$_POST['video_title'];

		$check_status=mysqli_query($con,"INSERT INTO video(uid,username,video_type,title,embed_url)VALUES('".$uid."','".$uname."','".$type."','".$title."','".$link."') ");
		

		if($check_status){
			$mesg="<span class='alert alert-success'>Your video request have been sent to admin for aproval</span>";
			?>
			<script>
				setTimeout(function(){
					window.location.href="upload-video.php";
				},2000);
			</script>

			<?php
		}
	}else{
		$mesg="<span class='alert alert-info'>Select correct video type</span>";
		?>
			<script>
				setTimeout(function(){
					window.location.href="upload-video.php";
				},2000);
			</script>

			<?php
	}
}
?>
<div class="main-panel">
    <div class="content-wrapper">
 		<div class="row mb-4">
 			<div class="col-md-3"></div>
 			<div class="col-md-6 ">
 				<div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Upload Video</h4>
                    <p class="card-description"> <?
                    if(isset($mesg)){
                    	echo $mesg;
                    
                    }
                    
                    ?> </p>
                    <form autocomplete="off" class="forms-sample" method="post" action="">
                    	<div class="form-group">
	                        <label for="exampleInputName1">Select video Type</label>
	                        <select name="video_type" class="form-control">
	                        	<option value="select">Select video Type </option>
	                        	
	                        	<option value="prizebondvideos">prize bond videos</option>
	                        	<option value="thailotteryvideos">thai lottery videos</option>
	                        	
	                        </select>
                      </div>
                      <div class="form-group">
	                        <label for="exampleInputName1">Video Title</label>
	                        <input type="text" name="video_title" class="form-control" required id="exampleInputName1" placeholder="Enter URL">
                      </div>
                      <div class="form-group">
	                        <label for="exampleInputName1">Video URL</label>
	                        <input type="text" name="embed_link" class="form-control" required id="exampleInputName1" placeholder="Enter URL">
                      </div>
                      
                      <button type="submit" name="upload_video" class="btn btn-primary mr-2">Submit</button>
                      <!-- <button class="btn btn-dark">Cancel</button> -->
                    </form>
                  </div>
                </div>
 			</div>
 			<div class="col-md-3"></div>
 		</div>
 	</div>
<?php include('layouts/footer.php');?>