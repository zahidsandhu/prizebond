
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!--<script type="3dee02c85a1c63ed065143d9-text/javascript" src="../js/main0000.js"></script>-->
        <script type="text/javascript">
            // alert("test");
       
            // jQuery(document).on('click','.hamburg-menues',function(){
               
            //     jQuery(".admin-menues").slideToggle("fast");
            // });
            // jQuery(document).ready(function(){
            //     $(".hamburg_").click(function(){
            //       alert("test"); 
            //         $(".admin-menues").slideToggle("fast");
            //     });
            // });
            $ = jQuery;
            $(document).ready(function () {
            
                $(".hamburg_").click(function(){
                    $(".admin-menues").slideToggle("fast");
                });
            });
           
            
        </script>
<style>
    .hamburg-menues li
    {
        list-style:none;
        
    }
    .hamburg_ li
    {
        border-top: 2px solid #fff;
        width: 23px;
        height: 4px;
       
    }
    .hamburg-menues
    {
        width:20%;
        float:left
    }
    .hamburg-text
    {
        width:20%;
        float:right;
        text-align:right;
    }
    
    tr
    {
        display:table-row;
    }
    .admin-panel_
    {
        width: 80%;
        float: left;
        overflow-x: scroll;
    }
   td
   {
       display:table-cell;
   }
    .hamburg-text p
    {
        margin:0 !important;
    }
    .hamburg_
    {
        cursor: pointer;
        background-color: #3e8fc5;
        color: #fff;
        display: none;
        width: 92%;
        overflow: hidden;
        padding: 2% 4%;
    }
    .admin-menues
    {
        width:20%;
        float:left;
    }
    @media screen and (max-width: 800px)
    {
        .hamburg_
        {
            display:block;
        }
        .admin-menues
        {
            display:none;
        }
        .admin-menues li
        {
           list-style: none;
            width: 100%;
            border-bottom: 1px dashed #8adbff;
            padding: 7px 0;
            display:block;
        }
        .admin-panel_,.admin-menues
        {
            width:100%;
        }
        .admin-menues
        {
            background-color:#5dcdff;
        }
        .admin-menues li a
        {
            width:100%;
            display:block;
            text-decoration:none;
            color:#fff;
        }
        .edit_delete td
        {
            display:block !important;
        }
        .edit_delete td:last-child
        {
            border-bottom:1px solid #000;
            padding-bottom: 2%;
        }
        .caption
        {
            display:none;
        }
        .users_ tr
        {
            
        }
        .users_ td:nth-child(2),.users_ td:first-child
        {
            padding-top:5%;
        }
        .users_ td
        {
            display: block !important;
            float: left;
            width: 46%;
            text-align:center;
            border:none !important;
        }
        .users_ tr td:last-child
        {
            border-bottom:1px solid #000 !important;
            padding-bottom:4%;
            width:100%;
        }
        .admin_approve_image td img
        {
            width:100%;
            height:auto;
        }
    }

  
</style>
</head>
<body>
<?php
ob_start();
session_start();
include "../apps/config.php";
include "../apps/functions.php";
if (!$_SESSION["login"]){
	header("location:./");
}
?>
    <div class="hamburg_">
        	     <div class="hamburg-menues">
            	      <li></li>
            	      <li></li>
            	      <li></li>
    	          </div>
    	      <div class="hamburg-text">
    	          <p>Menu</p>
    	       </div>
    </div>
    <div class="admin-menues">
        <ul>
    	    <li><a href="?pg=users">Users</a></li>
            <li><a href="?pg=posting-a">Approved</a></li>
            <li><a href="?pg=posting-d">Delete</a></li>
    	    <li><a href="?pg=vip">Vip Papers</a></li>
    	    <li><a href="?pg=display">Draw Display</a></li>
    	    <li><a href="?pg=hint">Draw Hint</a></li>
    	    <li><a href="?pg=result">Draw Result</a></li>
    	    <li><a href="?pg=thai">Thai Result</a></li>
    	    <li><a href="?pg=thaivip">Thai Vip </a></li>
    	    <li><a href="?pg=setting">Setting</a></li>
    	    <li><a href="../logout.php">Logout </a></li>
    	</ul>    
    	    </div>
    <div class="admin-panel_">
    <table width="100%" cellspacing="0" class="admin-table-menu">
    	<tr>
    	  
    	  
    	    
    		<td width="801" valign="top">
        		
            		<?php
            		if (isset($_GET["pg"])){
            			include "pages/".$_GET["pg"].".php";
            		}
            		?>		
        		
    		</td>
            
      </tr>
    </table>
   </div>
  
    </body>
    </html>