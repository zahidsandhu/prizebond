<?php
$con = mysqli_connect("localhost","deveruxr_prizebond","deveruxr_prizebond","deveruxr_prizebond");
	
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT * FROM $tbl_name $search ";
	$total_pages = mysqli_num_rows(mysqli_query($con,$query));;
	
	/* Setup vars for query. */
		//your file name  (the name of this file)
	if (isset($_GET["pge"])){
		$pge = $_GET['pge'];
	}else{								//how many items to show per page
		$pge=0;
	}
	if($pge) 
		$start = ($pge - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM $tbl_name $search LIMIT $start, $limit";
//	echo($sql);
	$result = mysqli_query($con,$sql);
	
	/* Setup page vars for display. */
	if ($pge == 0) $pge = 1;					//if no page var is given, default to 1.
	$prev = $pge - 1;							//previous page is page - 1
	$next = $pge + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<ul class=\"pagination pagination-dark\">";
		//previous button
		if ($pge > 1) 
			$pagination.= "<li class='page-item'><a href=\"$targetpage=$prev\" class='page-link'>Previous</a></li>";
		else
			$pagination.= "<li class='page-item'><a href=\"$targetpage=$prev\" class=\"disabled page-link\">Previous</a></li>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $pge)
					$pagination.= "<li class=\"page-item active\"><span class=\"current page-link\">$counter</span></li>";
				else
					$pagination.= "<li class=\"page-item\"><a href=\"$targetpage=$counter\" class=\"page-link\">$counter</a></li>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($pge < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $pge)
						$pagination.= "<li class=\"page-item\"><span class=\"current\">$counter</span></li>";
					else
						$pagination.= "<li class=\"page-item\"><a href=\"$targetpage=$counter\" class=\"page-link\">$counter</a></li>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $pge && $pge > ($adjacents * 2))
			{
				$pagination.= "<li class=\"page-item\"><a href=\"$targetpage=1\" class=\"page-link\">1</a></li>";
				$pagination.= "<li class=\"page-item\"><a href=\"$targetpage=2\" class=\"page-link\">2</a></li>";
				$pagination.= "...";
				for ($counter = $pge - $adjacents; $counter <= $pge + $adjacents; $counter++)
				{
					if ($counter == $pge)
						$pagination.= "<li class=\"page-item active\"><span class=\"current page-link\">$counter</span>";
					else
						$pagination.= "<li class=\"page-item\"><a href=\"$targetpage=$counter\" class=\"page-link\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<li class=\"page-item\"><a href=\"$targetpage=$lpm1\" class=\"page-link\">$lpm1</a></li>";
				$pagination.= "<li class=\"page-item\"><a href=\"$targetpage=$lastpage\" class=\"page-link\">$lastpage</a></li>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<li class=\"page-item\"><a href=\"$targetpage=1\ class=\"page-link\">1</a></li>";
				$pagination.= "<li class=\"page-itme\"><a href=\"$targetpage=2\" class=\"page-link\">2</a></li>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $pge)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($pge < $counter - 1) 
			$pagination.= "<li class=\"page-item\"><a href=\"$targetpage=$next\" class=\"page-link\">Next</a></li>";
		else
			$pagination.= "<li class=\"page-item\"><a href=\"$targetpage=$next\" class=\"disabled page-link\">Next</a></li>";
		$pagination.= "</ul>\n";		
	}
?>
	