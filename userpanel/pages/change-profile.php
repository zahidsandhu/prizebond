<h4 style="margin-top:10px;color:#fff;">Edit Profile</h4>
		<form action="" method="post" enctype="multipart/form-data">
		<?php
		$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
		if (isset($_POST["Submit"])){
			$country=$_POST["country"];
			$city=$_POST["city"];
			$mobile=$_POST["mobile"];
			$gender=$_POST["gender"];
			$age=$_POST["age"];
			$level=$_POST["level"];
			$error="";
			if ($country==""){
				$error.="<p>Country is empty.</p>";
			}if ($city==""){
				$error.="<p>City is  empty.</p>";
			}if ($mobile=="" or !is_numeric($mobile)){
				$error.="<p>Mobile is invalid.</p>";
			}if ($gender==""){
				$error.="<p>Please selct your gender</p>";
			}if ($age==""){
				$error.="<p>Please select your age.</p>";
			}
			if ($error!=""){
				echo "<div class='error_message'>$error</div>";
			}else{
				$date=date("d F Y");
				$dat=time();
				mysqli_query($con,"update users set country='$country', city='$city', mobile='$mobile', gender='$gender', age='$age', level='$level' where uid='".$userData["uid"]."'");
				echo "<div class='alert alert-success'>User profile has been updated successfully.</div>";
			?>
				  <script> setTimeout(function(){ window.location.href ="userpanel.php?post=editprofile"}, 2000);
				</script>
			<?php
				
			}
		}
			
				
	
		
		?>
		<!--<table cellspacing="0" class="form-mid">
			<tr>
			  <td width="117" style="padding:5px;font-size:13px;">Registration for</td>
			  <td width="425"><select name="level">
			    <option value="1" <?php if ($userData["level"]=="1"){echo "selected='selected'";} ?>>Prizebond</option>
			    <option value="2" <?php if ($userData["level"]=="2"){echo "selected='selected'";} ?>>Thaliland Lottery</option>
			    <option value="3" <?php if ($userData["level"]=="3"){echo "selected='selected'";} ?>>Both</option>
			    </select>			  </td>
			  </tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">Country</td>
			  <td><input name="country" type="text" id="country" value="<?php echo $userData["country"]; ?>"/></td>
			  </tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">City</td>
			  <td><input name="city" type="text" id="city" value="<?php echo $userData["city"]; ?>"/></td>
			  </tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">Mobile</td>
			  <td><input name="mobile" type="text" id="mobile" value="<?php echo $userData["mobile"]; ?>"/></td>
			  </tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">Gender</td>
			  <td><select name="gender" id="gender">
			  		<option value="">Select Gender</option>
					<option value="Male" <?php  if ($userData["gender"]=="Male"){echo "selected='selected'";} ?>>Male</option>
					<option value="Female" <?php  if ($userData["gender"]=="Female"){echo "selected='selected'";} ?>>Female</option>
			    </select>			  </td>
			  </tr>
			<tr>
			  <td style="padding:5px;font-size:13px;">Age</td>
			  <td><select name="age" id="age">
			  		<option value="">Select Age</option>
					<?php
					for ($a=round(date("Y"))-10; $a >=1920; $a--){
						if ($a==$userData["age"]){
							$sel="selected='selected'";
						}else{
							$sel="";
						}
						echo "<option value='$a' $sel>$a</option>";
					}
					?>
			    </select>			  </td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td><input type="submit" name="Submit" value="Update" class="submit"/></td>
			  </tr>
		</table>-->
		<div class="row">
						<div class="col-md-6 mx-auto">
							<div class="form-group">
								<label class="col-form-label">REGISTRATION FOR</label>
								<select class="form-control" name="level">
								    <option value="1" <?php if ($userData["level"]=="1"){echo "selected='selected'";} ?>>Prizebond</option>
			                        <option value="2" <?php if ($userData["level"]=="2"){echo "selected='selected'";} ?>>Thaliland Lottery</option>
		                            <option value="3" <?php if ($userData["level"]=="3"){echo "selected='selected'";} ?>>Both</option>
								</select>
							</div>
							<div class="form-group">
								<label for="country">COUNTRY</label>
								<input class="form-control" id="country" placeholder="Enter Country Name" name="country" type="text" id="country" value="<?php echo $userData["country"]; ?>">
							</div>
							<div class="form-group">
								<label for="city">CITY</label>
								<input class="form-control" id="city" placeholder="Enter City Name" name="city" type="text" id="city" value="<?php echo $userData["city"]; ?>">
							</div>
							<div class="form-group">
								<label for="mobile">MOBILE</label>
								<input class="form-control" id="mobile" placeholder="Enter Mobile No." name="mobile" type="text" id="mobile" value="<?php echo $userData["mobile"]; ?>">
							</div>
							<div class="form-group">
								<label class="col-form-label">GENDER</label>
								<select class="form-control" name="gender" id="gender">
                			  		<option value="">Select Gender</option>
                					<option value="Male" <?php  if ($userData["gender"]=="Male"){echo "selected='selected'";} ?>>Male</option>
                					<option value="Female" <?php  if ($userData["gender"]=="Female"){echo "selected='selected'";} ?>>Female</option>
                			    </select>
							</div>
							<div class="form-group">
								<label class="col-form-label">AGE</label>
								<select class="form-control" name="age" id="age">
			  		<option value="">Select Age</option>
					<?php
					for ($a=round(date("Y"))-10; $a >=1920; $a--){
						if ($a==$userData["age"]){
							$sel="selected='selected'";
						}else{
							$sel="";
						}
						echo "<option value='$a' $sel>$a</option>";
					}
					?>
			    </select>
							</div>
							<input type="submit" name="Submit" value="Update" class="submit btn btn-primary w-100"/>
						</div>
						                     
                      </div>
		</form>