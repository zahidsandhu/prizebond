<td class="rightcol" valign="top">
<?php 
$no=drawno();
$result=mysql_query("select * from list order by id desc limit $no");
while ($row=mysql_fetch_array($result)){
 $draw=$row["draw"];
 $explode=explode("break",$row["numbers"]);
 $first=$explode[0];
 $second=$explode[2];
 $id=$row["id"];
 $link=$row["link"]."-$id";
?>
<div id="sidebar-title" style="width:100%;">
                    <p style="font-size: 16px; color: #fff; font-weight: bold; margin-top: 4px; text-align: center;">Prize bond Draw Result <?php echo $draw; ?></p>
  </div>
			<table cellpadding="5" cellspacing="0" class="hints">
				<tr>
					<td width="77">First</td>
					<td width="277"><?php echo $first; ?></td>
				</tr>
				<tr>
					<td>Second</td>
					<td><?php echo $second; ?></td>
				</tr>
				<tr>
					<td colspan="2">
					<a href="prizebondlist.php?list=<?php echo $link; ?>">Full Draw Result</a> | <a href="prizebondlist.php">Previous Result</a>
					</td>
				</tr>
  </table>
 <?php
}
$result=mysql_query("select * from hint");
$row=mysql_fetch_array($result);
?>	
	<div id="sidebar-title" style="width:100%;">
                    <p style="font-size: 16px; color: #fff; font-weight: bold; margin-top: 4px; text-align: center;">Prize bond Latest Draw Hints <?php echo $row["no"]; ?></p>
  </div>	
		<table cellpadding="5" cellspacing="0" class="hints">
				<tr>
					<td width="79">Open</td>
					<td width="285"><?php echo $row["open"]; ?></td>
				</tr>
				<tr>
					<td>Close</td>
					<td><?php echo $row["close"]; ?></td>
				</tr>
				<tr>
					<td>Center</td>
					<td><?php echo $row["center"]; ?></td>
				</tr>
  </table>
	
		



<div class="right-ads">
<br><p style="font-size: 20px; color: #000; ">Govt National Savings Prize bond</p>
<p style="font-size: 12px; color: #000; ">All you need to know About Prize bond.</p>
<p style="font-size: 12px; color: #000; text-align: justify; ">When you hear a world prize bond, you may start relating it to your luck. A prize bond can make you an overnight millionaire. 
There are hundreds of people who just get the instant and huge cash from these national savings prize bonds. 
prize bond has been the central focus for the investors and some entrepreneurs to challenge their luck. In this 
article, we have dived deep in providing every concerning detail about the prize bond, their functioning, type, and 
the history. If you want to know, you are advised to stay adhered and get to know all the interesting detail about prize 
bonds in Pakistan.
</p></div><br>
<a class="secondary_action regular_button" href="https://prizebondlucky.net/prizebondpakistan.php">Read More</a><br>



<div class="right-ads">
<p style="font-size: 20px; color: #000;  ">Prize bond 25000 Rupees</p>
<p style="font-size: 12px; color: #000; text-align: justify; ">We all know that millionaires are present all over the world and many of them have not become rich as because of the ancestors. But many of them have try with their luck from the involvement of the lucky draws as well. They have bring a change in their whole lifestyle all through by checking their luck as putting into the investment savings over some of the legal things.
Hence the term Prize Bond in Pakistan is all stated out to be the legal and much the authentic way of Government upholding the scheme. It is giving out the chance to the people in terms of taking part into the certain form of the terms and hence also checking on with the luck to bring out with some change. 
</p><br>
<a class="secondary_action regular_button" href="https://prizebondlucky.net/prizebond25000.php">Read More</a><br>
  

</font></font></div></div>
</td>