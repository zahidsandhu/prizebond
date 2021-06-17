<?php include('layouts/header.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
              <?php
              $result=mysqli_query($con,"SELECT * FROM list where title IS NOT NULL or title != ''");
	         $row=mysqli_fetch_array($result);
	         
	       	         ?>
           
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Result List</h4>
                       New Result</a>
                    </div>
<a href="?pg=result&new=1">New Result</a>
<?php
if (isset($_GET["new"]) or isset($_GET["edit"])){

?>
<form action="" method="post" enctype="multipart/form-data">
<?php
if (isset($_POST["Submit"]))
{

$title=$_POST["title"];
include "../bunty/pages/permlinks.php";
$link=links($_POST["title"]);
$city=$_POST["city"];
$draw=$_POST["draw"];
$third=$_POST["third"];
$date=$_POST["day"]."-".date("F-Y");
$drawno=$_POST["drawno"];
$list=$_POST["list"];
$numbers=$_POST["f"]."break".$_POST["f_a"]."break".$_POST["s"]."break".$_POST["s_a"];
$year=date("Y");
if ($_POST["Submit"]=="Save"){
 mysqli_query($con,"insert into list(title, link, city, draw, third,drawno, numbers, dat,list, year)values('$title','$link','$city','$draw','$third','$drawno','$numbers','$date','$list','$year')");
 
 
 // check user wallet
 
 $first=explode(",",$_POST["f"]);
 $second=explode(",",$_POST["s"]);
 
  $newlist=str_replace("\n",",",$list);
  $newlist2=str_replace("\t",",",$newlist);
   
   $arry=explode(",",$newlist2);
   
   $filter= array_filter($arry);
   $final_list=array_merge($filter,$first,$second);
   
   
   // select data from user wallet
   $query=mysqli_query($con,"SELECT *FROM wallet");
  while($row=mysqli_fetch_array($query)){
     $wallet_array[]=$row['bond_number'];
  }

   
// get match value from two array
$final_array=array_intersect($wallet_array,$final_list);

// update bond status
foreach($final_array as $value){
    mysqli_query($con,"UPDATE wallet SET bond_status ='1', winning='1' WHERE bond_number='".$value."' ");
    
}
  $admin_email="zahidsandhu77a@gmail.com";
 // get user according to brizebond
foreach ($final_array as $key => $value) {

    $wallet_query=mysqli_query($con,"SELECT *FROM wallet WHERE bond_number= '".$value."' ");
    $newrow=mysqli_fetch_array($wallet_query);
     //$newrow['uid'];
$uid=$newrow['uid'];
    $user_query=mysqli_query($con,"SELECT *FROM users WHERE uid= '".$uid."' ");
    $user_array[]=mysqli_fetch_array($user_query);
    
    // send email to user 
 
  foreach ($user_array as $value2) {
      
    $to = 'zahidsandhu77a@gmail.com';
    $subject = 'prizebond winning Result';
   
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

 //   html start
                $message = '<html><body>';
                
                $message .= "<h3><p>
                Congratulations ".$value2['username']." have win ".$value." prize bond .
                </p>  </h3> ";
                 
                $message .= "</body></html>";
    //html end
    
    mail($to, $subject, $message, $headers);
    unset($user_array);
    //  if($check){
        
    // }
   
  }
  // send email to user end
   
  }
  
 }else{
 	mysqli_query($con,"update list set title='$title', link='$link', city='$city', draw='$draw', third='$third', drawno='$drawno', numbers='$numbers',dat='$date',list='$list', year='$year' where id='".$_GET["edit"]."'");
 	
 	
 	// check user wallet
 
 $first=explode(",",$_POST["f"]);
 $second=explode(" ",$_POST["s"]);
 
  $newlist=str_replace("\n",",",$list);
  $newlist2=str_replace("\t",",",$newlist);
   
   $arry=explode(",",$newlist2);
   $filter= array_filter($arry);
   $final_list=array_merge($filter,$first,$second);

   // select data from user wallet
   $query=mysqli_query($con,"SELECT *FROM wallet");
  while($row=mysqli_fetch_array($query)){
     $wallet_array[]=$row['bond_number'];
  }

// get match value from two array
$final_array=array_intersect($wallet_array,$final_list);

// update bond status
foreach($final_array as $value){
    mysqli_query($con,"UPDATE wallet SET bond_status ='1', winning='1' WHERE bond_number='".$value."' ");
    
}
 $admin_email="zahidsandhu77a@gmail.com";
  foreach ($final_array as $key => $value) {

    $wallet_query=mysqli_query($con,"SELECT *FROM wallet WHERE bond_number= '".$value."' ");
    $newrow=mysqli_fetch_array($wallet_query);
     //$newrow['uid'];
$uid=$newrow['uid'];

    $user_query=mysqli_query($con,"SELECT *FROM users WHERE uid= '".$uid."' ");
    $user_array[]=mysqli_fetch_array($user_query);
    
     // send email to user 
 
  foreach ($user_array as $value2) {
  //echo $value2['username'];   exit(); 
    $to = 'zahidsandhu77a@gmail.com';
    $subject = 'prizebond winning Result';
   
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

 //   html start
                $message = '<html><body>';
                
                $message .= "<h3><p>
                Congratulations ".$value2['username']." have win ".$value." prize bond .
                </p>  </h3> ";
                 
                $message .= "</body></html>";
    //html end
    
    $check=mail($to, $subject, $message, $headers);
    if($check){
        unset($user_array);
    }
   
  }
  // send email to user end
    
  } 
 	
 }
 header("location:result.php");
 
}elseif(isset($_GET["s"])){
 echo "Data has been saved successfully.";
}
if (isset($_GET["edit"])){
	$result=mysqli_query($con,"select * from list where id='".$_GET["edit"]."'");
	$row=mysqli_fetch_array($result);
	$title=$row["title"];
	$city=$row["city"];
	$draw=$row["draw"];
	$third=$row["third"];
	$drawno=$row["drawno"];
	$row["numbers"];
	$number=explode("break",$row["numbers"]);
	$n1=$number[0];
	$n2=$number[1];
	$n3=$number[2];
	$n4=$number[3];
	$day=explode("-",$row["dat"]);
	$day=$day[0];
	$list=$row["list"];
}else{
	$title="";
	$city="";
	$draw="";
	$third="";
	$drawno="";
	$n1="";
	$n2="";
	$n3="";
	$n14="";
	$day="";
	$list="";
}
?>
  <table width="100%" border="1" cellpadding="10" cellspacing="0" style="overflow:auto">
    <tr>
      <td width="23%">Page Title </td>
      <td width="77%"><input name="title" type="text" id="title" value="<?php echo $title; ?>"></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input name="city" type="text" id="city" value="<?php echo $city; ?>"></td>
    </tr>
    <tr>
      <td>Draw</td>
      <td><input name="draw" type="text" id="draw" value="<?php echo $draw; ?>"></td>
    </tr>
    <tr>
      <td>Third Amont </td>
      <td><input name="third" type="text" id="third" value="<?php echo $third; ?>"></td>
    </tr>
    <tr>
      <td>Draw No </td>
      <td><input name="drawno" type="text" id="drawno" value="<?php echo $drawno; ?>"></td>
    </tr>
    <tr>
      <td>Numbers</td>
      <td>First  
              <input name="f" type="text" id="f" size="10" value="<?php echo $n1; ?>">
            Amount
            <input name="f_a" type="text" id="f_a" size="8" value="<?php echo $n2; ?>">
            Second  
            <input name="s" type="text" id="s" size="10" value="<?php echo $n3; ?>"> 
            Amount
            <input name="s_a" type="text" id="s_a" size="8" value="<?php
            if(isset($n4)){
             echo $n4; } ?>"></td>
            
    </tr>
    <tr>
      <td>Day</td>
      <td><input name="day" type="text" id="day" value="<?php echo $day; ?>"></td>
    </tr>
    <tr>
      <td valign="top">List</td>
      <td><textarea name="list" cols="70" rows="10" id="list"><?php echo $list; ?></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
	  <?php
	  if (isset($_GET["edit"])){
	  	$value="Update";
	  }else{
	  	$value="Save";
	  }
	  ?>
	  <input class="btn btn-success" type="submit" name="Submit" value="<?php echo $value; ?>"></td>
    </tr>
  </table>
</form>
<?php
}else{
if (isset($_GET["del"])){
	mysqli_query($con,"delete from list where id='".$_GET["del"]."'");
	//header("location:?pg=result&d=1");
  echo "<p class='alert alert-success'>Data has been deleted successfully.<br></p>";
  ?>
<script>
  setTimeout(function(){
    window.location.href="result.php";
  },2000);
  
</script>
  <?php
  //header("location:?pg=result&d=1");
}

	 $tbl_name="list";
 $limit=20;
 $targetpage="?pg=result&page";
 $search="order by id desc";
 echo "<table width='100%'>";
 include "../pages/pagination.php";
 while ($row=mysqli_fetch_array($result))
 {
 	$title=$row["title"];
	$id=$row["id"];
	echo "
	<tr class='edit_delete'>
		<td width='80%'>$title</td>
		<td>
		<a class='btn btn-success btn-sm' href='?pg=result&edit=$id'>Edit</a> 
		<a class='btn btn-danger btn-sm mt-1' href='?pg=result&del=$id'>Delete</a>
		</td>
	</tr>";
 }
 echo "</table>";
}
?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <?php include('layouts/footer.php');?>

         