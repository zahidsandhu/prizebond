
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118587116-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118587116-1');
</script>

<td id="page_header">

                <div class="leftbox">
                  <span id="logo"><img src="extra/Logo0000.jpg" alt="Logo" title="Logo"/></span><br /><br /><img src="logo-des.png" alt="prizebondlucky.net" title="Prizebondlucky.net"width="276" height="84" /></div>

                <div class="rightbox">
                   
		<span class="button"><a id="help" href="support.php">Help &amp; Support</a></span>
	<span class="button"><a id="site_map" href="schedule.php">Prizebond Schedule</a></span>
	<span class="button"><a  href="prizebondlist.php">Pervious Results </a></span> 
	<span class="button"><a href="thailandresult.php">Thai Result </a></span>  
	<span class="button"><a  href="thailandvippapers.php">Thailand ViP Papers </a></span>  
	<span class="button"><a  href="joolottery.php">Indian Joo Lottery Tips </a></span> 
	 <span class="button"><a  href="https://prizebondlucky.net/prizebond/">Prize bond list blog</a></span>  
	<div class="banner">
                        <!-- Banner -->
                        <div class="lbg"></div>
                        <div class="banner_content">
                            						<span id="account_icon"></span>
			<div><p class="account_title"><?php if (count($userData)>0){echo $userData["username"];}else{echo "Have an Account?"; }?></p></div>					
				<?php  
				if (count($userData)>0) {
				?>
						<a href="userpanel.php" rel="nofollow">
									<span class="join_lbg"></span>
									<span class="join_rbg"></span>
									User Panel
						</a>
						<a href="logout.php" rel="nofollow" id="sign_in">
							<span class="join_lbg"></span>
							<span class="join_rbg"></span>
							Logout
						</a>
			<?php  }else{ ?>	
						<a href="register.php">
									<span class="join_lbg"></span>
									<span class="join_rbg"></span>
									Registr Now
						</a>
						<a href="login.php"  id="sign_in">
							<span class="join_lbg"></span>
							<span class="join_rbg"></span>
							Login
						</a>
			<?php } ?>
                        </div>
                        <div class="rbg"></div>
                        <!--// Banner -->
                  </div>
                    <div class="clear"></div>
  </div>
                <div class="clear"></div>
            </td>
        </tr>
	    <tr>
      <td>
        <div id="page_header_menu">
            <div class="hamburg">
          <div class="hamburg-menu">
                  <div class="bars"></div>
                  <div class="bars"></div>
                  <div class="bars"></div>    
                </div>      
          <div class="text-hamburg">
                <p>Menu</p>
              </div>
              
            </div>
            <div class="drop-down-menu">
                    <ul class="top">
                        <li id="hot-trends-nav" class="active">
                          <a href="./" title="Go to Home Page"><span>Home</span></a>              </li>
                        <li id="web-design_nav">
                          <a href="suggestion.php" title="Suggestion Page"><span>Suggestion</span></a>              </li>
                        <li id="ecommerce_nav">
                          <a href="formula.php" title="Formula Page"><span>Formula</span></a>              </li>
                        <li>
                          <a href="guesspapers.php" title="Guess Papers Page"><span>Guess Papers </span></a>              </li>
                        <li id="corporate_nav">
                          <a href="photostatepapers.php" title="Photo State Papers Pape"><span>Photo State Papers </span></a>              </li>
                        <li>
                          <a href="winningpapers.php" title="Winning Papers Page"><span>Winning Papers  </span></a>              </li>            
                    </ul>
        
                  <div class="bot">
                    <ul class="subnav-hot-trends">
                      <li>
                                            <a href="tenakrachallange.php" title="Ten Akra Challange" style="font-weight:bold;">Ten Akra Challange  </a>              </li>
                      <li>
                                            <a href="akrachallange.php" title="One Akra Challange" style="font-weight:bold;">1 Akra Challange </a>              </li>
                      <li>
                                            <a href="openchallange.php" title="Open Challange" style="font-weight:bold;">Open Challange </a>              </li>
                      <li>
                                            <a href="vippapers.php" title="Vip Papers" style="font-weight:bold;">Vip Papers  </a>              </li>
                      <li>
                                            <a href="thailandlotterytips.php" title="Thailand Lottery Tips" style="font-weight:bold;">Thailand Lottery Tips </a>              </li>
                      <li>
                                            <a href="thailandlotterypapers.php" title="Thailand Lottery Papers"  style="font-weight:bold;">Thailand Lottery Papers </a>              </li>
                      <li>
                                            <?php
        									 $res=mysql_query("select * from list order by id desc");
        									 $rw=mysql_fetch_array($res);
        										$title=$rw["title"];
        										$link=$rw["link"]."-".$rw["id"];
        									?>
        									<a href="prizebondlist.php?list=<?php echo $link; ?>" title="Prize bond List" style="font-weight:bold;">Prize bond List </a>              </li>
                      <li><a href="finalgame.php" title="Final Game" style="font-weight:bold;">Final Game  </a></li>
                    </ul>
                  </div>
                </div>  
                    <div id="titlebar">
            <span style="width:100%;">
			<marquee style=" margin-top: 10px;">
			<?php
			$ds=mysql_fetch_array(mysql_query("select * from setting"));
			echo $ds["display"];
			?>
			</marquee>
			</span><!--// Breadcrumb -->
                            
                </div>
        </div>

      </td>
    </tr>