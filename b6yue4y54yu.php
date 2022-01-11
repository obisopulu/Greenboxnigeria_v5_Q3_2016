<?php include('top.php');

//////////////  QUERY THE MEMBER DATA INITIALLY LIKE YOU NORMALLY WOULD
$sql = mysql_query("SELECT * FROM activities ORDER BY activityID");
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
        $paginationDisplay .=  "<td align='left' width='50px'>".'<a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $previous . '"> Back</a> '.'</td>';

    } 
	else {
		$paginationDisplay .=  "<td align='left' width='50px'></td>";
		}
		

    // Lay in the clickable numbers display here between the Back and Next links
    $paginationDisplay .= "<td align='center' width='auto'>"."<span class='paginationNumbers'>" . $centerPages . '</span></td>';
    // If we are not on the very last page we can place the Next button

    if ($pn != $lastPage) {
		echo"";
        $nextPage = $pn + 1;
        $paginationDisplay .=  "<td align='right' width='50px'>".'<a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $nextPage . '"> Next</a> '.'</td>';
		
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
	<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	<link href="front.css" rel="stylesheet" type="text/css" />
<title>blog</title>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<table width="100%" bgcolor="#262626" height="500px"><tr height="20px"><td>
<!--            Head            -->
<table width="100%"><tr><td>
<span id="secondtext">
&nbsp;blog
</span>
</td><td align="right">
<div style="background-color:#222; border-radius:5px; padding:0px 5px 0px 0px; width:215px">
<form action='lvrgtj4vu58un.php' method='GET'>
		<input class='search' type='text' pattern="[A-Z a-z:-_]{3,}" name='keyword' required  maxlength='50' placeholder="search"/>
        <input type="submit" value="" style='background:url(images/srch.jpg) center no-repeat; border:none; background-size:contain; height:20px; width:20px; cursor:pointer; vertical-align:middle; background-color:#222' />
        <input type="hidden" name="source" value="blog"/>
        </form></div>
</td></tr></table>

</td></tr><tr><td style="padding:5px 0px 0px 23px;">
<?php 
while($row = mysql_fetch_array($sql2))
	{extract($row);
echo "<table width='750px' style='margin:10px 0px; padding:5px 5px;'><tr class='blog' bgcolor='#222' height='62px'><td style='padding:0px 15px;' width='90%'>
<form action='c45uy568nnv.php' method='get'>
<input type='submit' name='article' value='$activityName' style='background:url() center no-repeat; color:#FFF; border:none; background-size:contain; font-size:18px; width:100%; text-align:left; cursor:pointer; vertical-align:middle; background-color:#222' /></form>
</td><td align='right' valign='top' id='dateStamp1'style='padding:0px 15px;'>";
if ($dateDay<10) {echo "0$dateDay";}else {echo $dateDay;} echo "<span id='dateStamp2'>"; if ($dateMonth<10) {echo "0$dateMonth";}else {echo $dateMonth;}echo"</td>
</tr><tr><td bgcolor='#555' style='background:url(activitiesimg/$activityPic) center no-repeat; background-size:cover' colspan='2'></td></tr></table>";}
?>

<tr height="100%"><td colspan="19"><table width="100%" align="center"><tr><?php echo $paginationDisplay;?></tr></table></td></tr>
</td></tr></table>

<script>
window.onload = function() {
  	top.document.getElementById('title1').innerHTML='Blog';
	top.document.getElementById('description').content='keeping you  updated with whats going on in the nigerian music industry';
	top.document.getElementById('keywords').content='Nigerian music news, whats going on in Nigeria';
};
</script>
</body>
</html>