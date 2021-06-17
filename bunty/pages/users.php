<style>
	.table tr.caption {font-weight:bold;}
	.table{font-size:13px;font-family:arial;}
	.table tr td{border:1px solid #ccc;padding:5px;}
</style>
<?php
$count=mysql_num_rows(mysql_query("select * from users"));
echo "<center>
<form method='post' action=''>
	<input type='text' name='search'>
	<input type='submit' name='submit' value='Submit'>
</form><br><b>
Total Users : $count
</b>
<br><br>
</center>
";
if (isset($_GET["ban"])){
	mysql_query("update users set status='".$_GET["ban"]."' where uid=".$_GET["user"]."");
	header("location:?pg=users");
}
if (isset($_GET["vip"])){
	mysql_query("update users set vip='".$_GET["vip"]."' where uid=".$_GET["user"]."");
	header("location:?pg=users");
}
if (isset($_GET["del"])){
	$result=mysql_query("select * from users where uid=".$_GET["del"]."");
	$row=mysql_fetch_array($result);
	unlink ("../user_photo/".$row["photo"]);
	mysql_query("delete from users where uid=".$_GET["del"]."");
	mysql_query("delete from posting where uid=".$_GET["del"]."");
	header("location:?pg=users");
}
$tbl_name="users";
			$limit=50;
			$targetpage="?pg=users&pge";
			if (isset($_POST["submit"])){
				$usr=$_POST["search"];
				if ($usr=="vip"){
					$search="where vip>0 order by uid desc";
				}else{
					$search="where username like '%$usr%'  order by uid desc";
				}
				
			}else{
				$search="order by uid desc";
			}
			include "../pages/pagination.php";
			if ($usr=="vip"){
				echo "<table cellspacing='0' class='table users_'>
				<tr class='caption'>
					<td width='150px'>Username</td>
					<td width=60>Password</td>
					<td width=180>Allow</td>
					<td width=180>Email</td>
					<td width=160>Expire</td>
					<td width=195>Action</td>
				</tr>
				";
			}else{
				echo "<table cellspacing='0' class='table users_'>
				<tr class='caption'>
					<td width='150px'>Username</td>
					<td width=60>Password</td>
					<td width=180>Location</td>
					<td width=180>Email</td>
					<td width=70>Mobile</td>
					<td width=50>Level</td>
					<td width=195>Action</td>
				</tr>
				";
			}
				while ($row=mysql_fetch_array($result)){
					if ($row["level"]=="1"){
						$level="Prizebond";
					}elseif($row["level"]=="2"){
						$level="Lottery";
					}else{
						$level="Both";
					}
					if ($row["status"]=="0"){
						$status="<a href='?pg=users&user=".$row["uid"]."&ban=1'>Ban</a>";
					}else{
						$status="<a href='?pg=users&user=".$row["uid"]."&ban=0'>Unban</a>";
					}
					if ($row["vip"]=="0"){
						$date = strtotime(date("d F Y"));
						$vip="<a href='?pg=users&user=".$row["uid"]."&vip=$date'>VIP [No]</a>";
					}else{
						$vip="<a href='?pg=users&user=".$row["uid"]."&vip=0'>VIP [Yes]</a>";
					}
					if ($usr!="vip"){
						$location="".$row["country"]." [ ".$row["city"]." ]";
						$mobile=$row["mobile"];
					}else{
						$location=date("d F Y",$row["vip"]);
						$expire = strtotime("+3 months", $row["vip"]);
						if (strtotime(date("d F Y"))>$expire){
							$mobile="Expire";
						}else{
							$mobile=date("d F Y",strtotime("+3 months", $row["vip"]));
						}
						
					}
					if ($usr=="vip"){
						$level="";
					}else{
						$level="<td>".$level."</td>";
					}
					echo "<tr>
					<td>".$row["username"]."</td>
					<td>".$row["password"]."</td>
					<td>$location</td>
					<td>".$row["email"]."</td>
					<td>$mobile</td>
					$level
					<td>$status | <a href='?pg=users&del=".$row["uid"]."'>Delete</a> | 
					$vip
					</td>
					</tr>";
				}
			echo "
			</table>
			<center>
			$pagination
			</center>
			";
			
?>