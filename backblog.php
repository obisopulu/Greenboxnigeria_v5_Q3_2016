<?php include("backtop.php");

//////////////  QUERY THE MEMBER DATA INITIALLY LIKE YOU NORMALLY WOULD
$sql = mysql_query("SELECT * FROM activities ORDER BY activityID ASC");
//////////////////////////////////// Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////
$nr = mysql_num_rows($sql); // Get total of Num rows from the database query
if (isset($_GET['pn'])) { // Get pn from URL vars if it is present
    $pn = preg_replace('#[^0-9]#i', '', $_GET['pn']); // filter everything but numbers for security(new)
    //$pn = ereg_replace("[^0-9]", "", $_GET['pn']); // filter everything but numbers for security(deprecated)
} else { // If the pn URL variable is not present force it to be value of page number 1
    $pn = 1;
} 
//This is where we set how many database items to show on each page 
$itemsPerPage = 50; 
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
$sql2 = mysql_query("SELECT * FROM activities ORDER BY activityID DESC $limit");
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
        $paginationDisplay .=  "<td align='left' width='20%'>".'<a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $previous . '"> Back</a> '.'</td>';

    } 
	else {
		$paginationDisplay .=  "<td align='left' width='20%'></td>";
		}
		

    // Lay in the clickable numbers display here between the Back and Next links
    $paginationDisplay .= "<td align='center' width='60%'>"."<span class='paginationNumbers'>" . $centerPages . '</span></td>';
    // If we are not on the very last page we can place the Next button

    if ($pn != $lastPage) {
		echo"";
        $nextPage = $pn + 1;
        $paginationDisplay .=  "<td align='right' width='20%'>".'<a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $nextPage . '"> Next</a> '.'</td>';
		
    } 
	else {
        $paginationDisplay .= "<td align='right' width='20%'></td>";
		}
}

?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Activities</title>
<link href="back.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.pagNumActive {
	display: inline-table;
	font-weight:bold;
	color:#CCC;
	width:20px;
	padding:4px;
	text-decoration:none;
	background-color:#999;
}
body
	{
		font-size:11px;
	}
.paginationNumbers a:active {
    background-color:#999;
	color:#FFF;
}
</style>
</head>
<body>
<table width="100%" style="position:fixed">
<tr height="50px"bgcolor="#111"><td><span id="secondtext">The Cockpit</span></td></tr>
</table>

<table align="center"><tr>
<tr height="50px"><td></td></tr>
</tr></table>

<table align='center' width='100%'>
	<tr  bgcolor='#555' height='11px'>
															
    	<td style='padding:5px;'>Activity ID</td>
        <td style='padding:5px;'>Activity Name</td>
        <td style='padding:5px;'>Activity Pic</td>
        <td style='padding:5px;'>Activity Info</td>
        <td style='padding:5px;'>Activity Day</td>
        <td style='padding:5px;'>Activity Month</td>
        <td style='padding:5px;'>Activity Year</td>
        <td style='padding:5px;'>Activity Source</td>
        <td style='padding:5px;'>Activity Date</td>
		<td style='padding:5px;'>Date Updated</td>
        </tr>
<?php
$r = 1;
while($row = mysql_fetch_array($sql2))
	{extract($row);
																	
        $c= $r%2;?>
 		<tr bgcolor='<?php if ($c==0) echo "#262626"; else echo "#222" ?>'>
    	<td style="padding:5px;"><?php echo trim($activityID)?></td>
        <td style="padding:5px;"><?php echo trim($activityName)?></td>
        <td style="padding:5px;"><?php if (trim($activityPic) != '') echo 'Yes';else echo 'No'?></td>
        <td style="padding:5px;"><?php echo substr_replace(trim($activityInfo),'',30)?></td>
        <td style="padding:5px;"><?php echo trim($activityDay)?></td>
        <td style="padding:5px;"><?php echo trim($activityMonth)?></td>
        <td style="padding:5px;"><?php echo trim($activityYear)?></td>
        <td style="padding:5px;"><?php echo trim($activitySource)?></td>
        <td style="padding:5px;"><?php echo trim($activityDate)?></td>
        <td style="padding:5px;"><?php echo trim($dateUpdated)?></td>
        </tr>
        <?php $r++; } ?>
        </table>
<table width="100%" align="center"><tr><?php echo $paginationDisplay;?></tr></table>
</body>
</html>