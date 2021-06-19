<?php
ob_start();
session_start();
include "apps/config.php";
include "apps/functions.php";
if (isset($_SESSION["uid"])){
	$userData=user_data($_SESSION["uid"]);
}else{
	$userData=array();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">

<head>
<meta https-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Prize Bond List 2019,National Savings,Bond Guess Papers</title>
<meta name="description" content="Prizebondlucky.net is Pakistani Website site Provides all kind of Prize Bond, nbp, state bank of pakistan,national savings, Guess Paper, Prize Bond List & Prize Bond Results, schedule, formula, photo state paper." />
<meta name="abstract" content="All About Pakistan, Prize bond, Guess papers, , Results."/>
<meta https-equiv="content-type" content="en" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="revisit-after" content="1 days"/>
<meta name="Generator" content="https://prizebondlucky.net"/>
<meta name="robots" content="index,FOLLOW"/>
<meta name="googlebot" content="All, follow" />
<meta name="Author" content="https://prizebondlucky.net"/>
<meta name="Copyright" content="2017"/>
<meta name="designer" content="https://prizebondlucky.net" />
<meta name="email" content="prizebondlucky@gmail.com" />
<meta name="rating" content="General" />
<meta name="distribution" content="Global" />
<!-- metaTags https://prizebondlucky.net/ -->
<!-- Prize bond, guess paper, prize bond list, results, draw schedule, formula, photo state paper, nbp, state bank of pakistan, national savings,thailand lottery, lottery tips, finance, prize bond numbers, draw hints, lucky numbers, bonds, prime photo state paper. -->

<link type="text/css" href="extra/styles.css" rel="stylesheet"/>
<link rel="icon" href="extra/favicon0.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="extra/favicon0.ico" type="image/x-icon"/>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery00.js"></script>
<script type="text/javascript" src="js/main0000.js"></script>
<link type="text/css" href="extra/jquery-u.css" rel="stylesheet"/>
<script type="text/javascript" src="js/jquery-u.js"></script>
<link type="text/css" href="extra/webs.css" rel="stylesheet"/>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3788181027242613",
    enable_page_level_ads: true
  });
</script>

    </head>

<body id="unique_body_id_bestsellers">
<a name="top"></a>
<div style="display: none; position: absolute;" id="altDiv"></div>

<table id="page">
    <tbody>
        <tr>
         <?php
		 include "template/header.php";
		 ?>   
	
<!-- Page body -->
  <tr>
    <td>

<table class="content">
	<tr>
	<td class="leftcol">

		
		
    			
				<div id="description_wrap">
 			<?php
				include "template/slider.php";
			?>
  <div id="search-form">
    <br>
    <p style="text-align: center; font-size: 18px; font-weight: bold;" color="#125CA1">
	<?php
	$result=mysql_query("select * from list order by id desc");
	$row=mysql_fetch_array($result);
	$date=$row["dat"];
	$draw=$row["draw"];
	echo "Search Prize bond Updated with $date Draw $draw result";
	?>
	</p>
    <div id="sform_container">
        
	<font size="3" color="#47A3EB">Search Your prize bond number in results</font>
              <div class="sform_big sform">
          <form id="searchForm" name="searchForm" action="search.php" method="post">

    <dl class="selects">
        <dt>Bond</dt>
		<dt>
		<select  id='search_words_field' style="width:160px;margin-left:10px; text-align:center;" name="bond">
		<?php
		$result=mysql_query("select * from list order by id desc");
		$row=mysql_fetch_array($result);
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
       </dt>
    </dl>

    <div class="inputs">
        <label for="tid_field">6 Digit Bond:</label>
        <input type="text"  name="no" value="- Any -" class="inputstyle template_number">
   
</div>        
        <div style="clear:both;"></div>
		<input value="Search" id="searchFormSubmit" type="submit" name="search" class="secondary_action regular_button" style="border:none;border-radius:5px;width:60px;margin-top:-30px;"/>
        
            <span class="btn_lbg"></span>
            <span class="btn_rbg"></span>



</form>
<div class="clear"></div>        </div>

    

              
    </div>
    <br>
    <div id="description">
                            
							<p style="text-align:center; color: #000; font-size: 16px;">Prize Bond Theme Provides by Government of Pakistan<p><br> <p>It's the best opportunity to attempt your luck with the astounding venture of it. Many reasons and speculations would put your mind over the possibility that you should place yourself into the process of the nbp opportunity attributable to our diverse system of mechanism and preparing data. As we talk about the investment, at that point for such a large number of the general population prize bond are removed to be a standout amongst the essential vehicles without a doubt. </p>
							
							
                        </div>
 
</div>

 
      

	    </div>
	  
    </div>
<br>
 <div id="monster-blog">
        <p style="font-size: 18px; font-weight: bold; color: #000; text-align: center;">Our Valuable Members</p><br>
        <div>
            <?php
			$result=mysql_query("select * from users order by hm desc limit 30");
			echo "<ul class='homepage'>";
		    $counter = 1;
			while ($row=mysql_fetch_array($result)){
				$uid=$row["uid"];
				$last_post=mysql_fetch_array(mysql_query("select * from posting where page='homepage' and uid='$uid' order by dat desc"));
				$dat=timestamp($last_post["dat"]);
				$user=user_data($last_post["uid"]);
				if (strlen($user["username"])>12){
					$username=substr($user["username"],0,10)."...";
					$username2=$user["username"];
				}else{
					$username=$user["username"];
					$username2=$user["username"];
				}
				
				if($username<>"" && $counter<=22)
				{
				echo "
					<li style='width:270px;'>
						<span class='left' style='width:90px;' title='".$user["username"]."'>$username</span>
						<span class='right'>$dat <a href='homepage.php?user=$username2' class='secondary_action regular_button' style='width:18px;' title='Go to ".$user["username"]." Home page'>Go</a></span>
					</li>
				";
				$counter++;
				}
			}
			echo "</ul>";
			?>
        </div>
    </div>
  
	</td>
		<?php
		include "template/right.php";
		?>
		</tr>
		<tr>
		    <td colspan="2">
		        <table class="ads-three-sec">
                    <tbody>
                        <tr>
                            
                            
                        <td class="First-sec">
                                <p style="font-size: 16px; text-align: left; font-weight: bold;">Prize bond welfare student 100 Rupees</p>
                                <p style="font-size: 14px; text-align: justify;">Signing into this web page will be giving you the complete range of information that related with 100 rupees Bond welfare student bond. Well, the importance of this cannot be denied at all, and this is for the main reason that there are so many different types of the prize bond specifics that have introduced to the people. You can take it as the medium of investment tools through which you can earn with some handsome amount of money,Now let’s make you learn about the welfare student bond! You will be able to get this from the <b>national savings</b> center all along with the post offices or even the locations of the scheduled banks too.</p>
                                <a class="secondary_action regular_button" href="https://prizebondlucky.net/prize-bond-student-welfare.php">Read More</a>
                            </td>
                             <td class="second-sec">
                                 <p style="font-size: 16px; text-align: left; font-weight: bold;">PRIZE BOND PREMIUM 40,000 WORTH BOND</p>
                                 <p style="font-size: 14px; text-align: justify;">
1:In Pak, the term prize bond list is known out to be the form of the lottery bond. Alternatively, you can also make it known as the form of the non - interest-related security. It somehow offered by the Ministry of Finance and issued just as on behalf of the government of Pakistan. Plus the category of the funded boost up is being used a way to offset government borrowing and are also set apart into the timeline of the nature refundable to the bond owner on demand. Interest is even handed back to bond owners all the way through the medium of the prizes which are doled out to be carried away with the random selection of bonds.  -</p> <br>
<a class="secondary_action regular_button" href="https://prizebondlucky.net/prize-bond-premium-wroth.php">Read More</a>
                            </td>
                            <td class="third-sec">
                                
                            </td>
                            <html>
<head>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
<br><br>

<div class="row">
  <div class="column">
    <img src="prize-bond-40000.jpg" alt="prize bond 40000" title="prize bond 40000"style="width:100%">
  </div>
  <div class="column">
    <img src="download (2).jpg" alt="prize bond 25000" title="prize bond 25000"style="width:100%">
  </div>
  <div class="column">
    <img src="pic_1553969815.jpg" alt="prize bond 150000" title="prize bond 15000"style="width:100%">
  </div>
</div>

</body>
</html>
                        <tr>
    <h1>What are the basics of buying a state bank of Pakistan Prize bond?</h1><br><br><br>
        <p style="text-align: justify; margin: 20px;">Are you purchasing prize bond guess paper for the first time? Do you want to know what are the major basics behind the involvement of prize bond? If yes, then here we 

have some important basics for buying a <b>prize bond</b> for the beginners!  For the information of the readers, we would like to mention that prize bond is the 

form of a financial set of the medium who is being issued in the form of series and has to be the bearer type of the security that is to be available in so 

many denominations. Such denominations are divided into the categories of Rs. 200, Rs.50, Rs. 1,500, Rs. ,500, Rs. 15,000, Rs. 25000 and Rs. 40,000. There is 

no such form of the fixed payment, but it happens to take place based on the quarter basis course. 
.</p>
<br>
    <h2 style="margin-left: 20px;">What is nbp premium prize bond?</h2><br>
        <p style="text-align: justify; margin: 20px;"> Premium prize bond list & photo state paper is the one that is providing the category of exclusive rights to the holders. They are often taken by the upper-class category because of 

the higher category of the denomination.  They are starting from maximum forms. 40,000 but the Government of Pakistan is striving to get it introduced in the 

rage of Premium bond for Rs. 100,000 too.</p>
<br>
<h3 style="margin-left: 20px;">Difference between National savings Premium Bonds and regular ones:</h3><br>
<p style="text-align: justify; margin: 20px;">Here we would make you define the major difference between premium bonds and regular ones.  They carry out with the sequence of the 3% earning of the 

interest on the annual basis. They have prizes that are big. One prize has a whopping amount of Rs. Eighty million and three-second prizes for the amount of 

Rs. 30 million each and 660 prizes for the cost of Rs. 0.5 million each.</p>

<p style="text-align: justify; margin: 20px;">Premium bonds are much available in the major cities of Pakistan where we have names of Karachi, Lahore, Islamabad, Peshawar, and Quetta. You have to fill 

the application form meant for Premium bond. Simply demonstrate the record related to the evidence of your financial balance in a similar city from where you 

are buying the securities and add your International Bank Account Number (IBAN). You need to give a copy of CNIC. <br><br>
 <h4>Why do you need to spend on national bank of Pakistan Premium national savings Prize Bonds?</p></h4><br><br>
 If you grab victory, the sum is credited to your record. When you have to buy the bond, you will start to gain 3% of total that is sent to your record. With 

a simple processing system and with zero hazards in question, it is an unbelievable investment choice. 
Mostly, the people from the middle class category choose to buy the <a href="https://prizebondlucky.net/guesspapers.php">prize bond guess paper</a> to try with their lives's luck of either win it or not.  Each single year the 

lucky draw is held on the prize bond guess paper category 3-4 times in a year. You can either get the prize bond results by calling or by looking at the newspaper 

section. 
<i>Prize bond list</i> are also available on the official website<br>
Let’s try the luck and buy the prize bond now!<br>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
<br><br>
<h2>Strategic Alignment Level of Achivement</h2>
<p>How to Win National Savings Bonds?:</p>

<div class="row">
  <div class="column">
    <img src="about-1.png" alt="nbp" title="nbp"style="width:100%">
  </div>
  <div class="column">
    <img src="1.png" alt="national savings" title="national savings"style="width:100%">
  </div>
  <div class="column">
    <img src="industry-pic.jpg" alt="state bank of Pakistan" title="state bank of Pakistan" style="width:100%">
  </div>
</div>

</body>
</html>

                    </tbody>
                </table>

    

              

		      
		    </td>
		</tr>
</table>


	</td>
</tr>


<!--// Page body -->

<!-- Page footer -->
	<tr>
	<?php include "template/footer.php"; ?>
	</tr>
<!--// Page footer -->

</tbody>
</table>


</body>
</html>

