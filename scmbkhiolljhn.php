<?php include('top.php');

//////////////  QUERY THE MEMBER DATA INITIALLY LIKE YOU NORMALLY WOULD
$sql = mysql_query("SELECT * FROM labels ORDER BY labelName");
//////////////////////////////////// Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////
$nr = mysql_num_rows($sql); // Get total of Num rows from the database query
if (isset($_GET['pn'])) { // Get pn from URL vars if it is present
    $pn = preg_replace('#[^0-9]#i', '', $_GET['pn']); // filter everything but numbers for security(new)
    //$pn = ereg_replace("[^0-9]", "", $_GET['pn']); // filter everything but numbers for security(deprecated)
} else { // If the pn URL variable is not present force it to be value of page number 1
    $pn = 1;
} 
//This is where we set how many database items to show on each page 
$itemsPerPage = 5; 
// Get the value of the last page in the pagination result set
$lastPage = ceil($nr / $itemsPerPage);
// Be sure URL variable $pn(page number) is no lower than page 1 and no higher than $lastpage
if ($pn < 1) { // If it is less than 1
    $pn = 1; // force if to be 1
} else if ($pn > $lastPage) { // if it is greater than $lastpage
    $pn = $lastPage; // force it to be $lastpage's value
} 
// This creates the numbers to click in between the next and back buttons
// This section is explained well in the video that accompanies this script
$centerPages = "";
$sub1 = $pn - 1;
$sub2 = $pn - 2;
$add1 = $pn + 1;
$add2 = $pn + 2;
if ($pn == 1) {
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
} else if ($pn == $lastPage) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
} else if ($pn > 2 && $pn < ($lastPage - 1)) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub2 . '">' . $sub2 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add2 . '">' . $add2 . '</a> &nbsp;';
} else if ($pn > 1 && $pn < $lastPage) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
}
// This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
$limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .$itemsPerPage; 
// Now we are going to run the same query as above but this time add $limit onto the end of the SQL syntax
// $sql2 is what we will use to fuel our while loop statement below
$sql2 = mysql_query("SELECT * FROM labels ORDER BY labelName $limit");
//////////////////////////////// END Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// Adam's Pagination Display Setup /////////////////////////////////////////////////////////////////////
$paginationDisplay = ""; // Initialize the pagination output variable
// This code runs only if the last page variable is ot equal to 1, if it is only 1 page we require no paginated links to display

if ($lastPage != "1"){
    // This shows the user what page they are on, and the total number of pages
//    $paginationDisplay .= 'Page <strong>' . $pn . '</strong> of ' . $lastPage. '&nbsp;  &nbsp;  &nbsp; ';
    // If we are not on page 1 we can place the Back button
			
 if ($pn != 1) {

        $previous = $pn - 1;
        $paginationDisplay .=  "<td align='left' width='50px' style='padding:10px; font-size:40px'>".'<a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $previous . '"'." style='padding:10px; font-size:40px'".'> Back</a> '.'</td>';

    } 
	else {
		$paginationDisplay .=  "<td align='left' width='50px'></td>";
		}
		

    // Lay in the clickable numbers display here between the Back and Next links
    $paginationDisplay .= "<td align='center' width='auto' >"."<span class='paginationNumbers'style='padding:10px; font-size:40px'>" . $centerPages . '</span></td>';
    // If we are not on the very last page we can place the Next button

    if ($pn != $lastPage) {
		echo"";
        $nextPage = $pn + 1;
        $paginationDisplay .=  "<td align='right' width='50px' style='padding:10px; font-size:40px'>".'<a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $nextPage . '"'." style='padding:10px; font-size:40px'".'> Next</a> '.'</td>';
		
    } 
	else {
        $paginationDisplay .= "<td align='right' width='50px'></td>";
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="zfgyugewiugf.css" rel="stylesheet" type="text/css" />
<title>Labels</title>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<table width="100%"><tr><td>
<span id="firsttext">
Labels
</span>
</td></tr></table>


<form action="rgcgtrdstyfu.php" method="get">
<?php 
$counter = 1;
while($row = mysql_fetch_array($sql2))
	{
		extract($row);
		if ($counter == '5') {echo "<table style='background:url(images/"; if (!file_exists("images/moblabelssponsor5.jpg")){echo 'bg.jpg';} else{echo 'moblabelssponsor5.jpg';} echo ") center;' height='200px' width='100%'><tr><td></td></tr></table>";}
		echo "
		<table align='center' style='margin:7px 15px' width='100%'><tr><td align='center'><input type='submit' name='label' value='$labelName' style='background-image:url(labelsimg/$labelPic); font-size:0px; background-size:cover; background-position:center; background-repeat:no-repeat; border:none; height:400px; width:400px; background-color:#222;'></button>
		</td></tr><tr><td align='center'><span id='name'>$labelName</span></td></tr>";
		if ($counter == '1') {echo "<table style='background:url(images/"; if (!file_exists("images/moblabelssponsor1.jpg")){echo 'bg.jpg';} else{echo 'moblabelssponsor1.jpg';} echo ") center;' height='200px' width='100%'><tr><td></td></tr></table>";}
$counter++;}
?>


<form action="label.php" method="get">
<tr height="100%"><td><table width="100%" align="center"><tr><?php echo $paginationDisplay;?></tr></table></td></tr>
</td></tr></table>
<table><tr height="200px"><td></td></tr></table>

</body>
</html>