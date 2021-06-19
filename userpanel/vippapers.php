<?php include('layouts/header.php');?>
<?php

	$uid = $_SESSION['uid'];
	$myquery=mysqli_query($con,"SELECT start_date,end_date FROM users WHERE uid=$uid");
		$fetch = mysqli_fetch_array($myquery);

		$Start_Date = $fetch['start_date'];
		$End_Date = $fetch['end_date'];
		$current_date = date('Y-m-d');
?>
        <!-- partial -->
        <div class="main-panel self-style-main-panel">
          <div class="content-wrapper">
             
               	<?php
               	 
		$pages=array("homepage"=>"Homepage","suggestion"=>"Suggestion","formula"=>"Formula","finalgame"=>"Final Game","tenakra"=>"Ten Akra Challange","oneakra"=>"One Akra Challange","open"=>"Open Challange","guesspaper"=>"Guess paper","photostate"=>"Photo State Paper","winning"=>"Winning Paper","thailandpaper"=>"Thailand Paper","thailandtips"=>"Thailand Lottery Tips", "joolottery"=>"Joo Lottery Tips");
		$form=array("homepage"=>"editor","suggestion"=>"editor","formula"=>"editor","finalgame"=>"editor","tenakra"=>"editor","oneakra"=>"oneakra","open"=>"open","guesspaper"=>"upload","photostate"=>"upload","winning"=>"upload","thailandpaper"=>"upload","thailandtips"=>"editor","joolottery"=>"editor","editprofile"=>"change-profile","changepicture"=>"change-picture","password"=>"change-password");
		if (isset($_GET["post"])){
			if ($_GET["post"]=="editprofile" or $_GET["post"]=="changepicture" or $_GET["post"]=="password"){
			echo "";
			}else{
			echo "<h4 style='margin-top:15px;text-align:center;color:#fff;'>Post your ".$pages[$_GET["post"]]."</h4>";
			}
		}
		if (isset($_GET["post"])){
                //echo $form[$_GET["post"]];
			include "pages/".$form[$_GET["post"]].".php";
			
		}
		?>
		
		
		<?php if(!isset($_GET['post'])){?>
  		
			<table width="100%" class="pagewidth-tbl vippapers table-responsive" cellspacing="0" >
		<tr> 
		<td> 

			<?php
			if (!isset($_SESSION["uid"])){
				echo "<div class='Swarn'>You are not online. If you want to see vip paper please online first</div>";
			}else{
				$usr=user_data($_SESSION["uid"]);
				$expire = strtotime("+3 months", $usr["vip"]);
				
				if ($usr["vip"]=="0"){
					echo "<div class='Swarn'>You can not see the vip papers because you are not allowed to see vip papers. Please contact admin.</div>";
				}elseif ($Start_Date >= date("Y-m-d") || $End_Date <= date("Y-m-d")){
					
					echo "<div class='Swarn alert alert-info alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>You can not see the vip papers because your time is expirred, for renew it please contact admin.</div>";
            				    
				}else{
					$tbl_name="posting";
					$limit=5;
					$targetpage="?pge";
					$search="where page='vip' order by dat desc";
					include "pages/pagination.php";
					if ($total_pages==0){
						echo "<div class='norecord'>
						<img src='../extra/no-record-found.jpg' alt='No vip found' title='No vip record found.'></div>";
					}else{
				// 		echo "<center>";
						while ($row=mysqli_fetch_array($result)){ 
							echo "<img style='margin-left: 220px' class='self-image-style' src='../user_upload_paper/".$row["posting"]."' width='600' alt='VIP Paper' title='VIP Paper'><br><br>";
						}
				// 		echo "</center>";


					}
				}
			}			 
			//echo "<center>$pagination</center>";
			?>
		</td>
		</tr>
	</table>
<?php }?>
          </div>
          <!--</div>-->
          <!-- content-wrapper ends -->
          <?php include('layouts/footer.php');?>
