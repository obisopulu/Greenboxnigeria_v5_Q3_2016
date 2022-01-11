<?php include('top.php');

//////////////  QUERY THE MEMBER DATA INITIALLY LIKE YOU NORMALLY WOULD
$sql = mysql_query("SELECT * FROM persons ORDER BY personStageName");
//////////////////////////////////// Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////
$nr = mysql_num_rows($sql); // Get total of Num rows from the database query
if (isset($_GET['pn'])) { // Get pn from URL vars if it is present
    $pn = preg_replace('#[^0-9]#i', '', $_GET['pn']); // filter everything but numbers for security(new)
    //$pn = ereg_replace("[^0-9]", "", $_GET['pn']); // filter everything but numbers for security(deprecated)
} else { // If the pn URL variable is not present force it to be value of page number 1
    $pn = 1;
} 
//This is where we set how many database items to show on each page 
$itemsPerPage = 10; 
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
$sql2 = mysql_query("SELECT * FROM persons ORDER BY personStageName $limit");
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
        $paginationDisplay .=  "<table width='100%'><tr><td align='left' width='50px'>".'<a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $previous . '"> Back</a> '.'</td>';

    } 
	else {
		$paginationDisplay .=  "<table width='100%'><tr><td align='left' width='50px'></td>";
		}
		

    // Lay in the clickable numbers display here between the Back and Next links
    $paginationDisplay .= "<td align='center' width='auto'>"."<span class='paginationNumbers'>" . $centerPages . '</span></td>';
    // If we are not on the very last page we can place the Next button

    if ($pn != $lastPage) {
		echo"";
        $nextPage = $pn + 1;
        $paginationDisplay .=  "<td align='right' width='50px'>".'<a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $nextPage . '"> Next</a> '.'</td></tr></table>';
		
    } 
	else {
        $paginationDisplay .= "<td align='right' width='50px'></td></tr></table>";
		}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	<link href="front.css" rel="stylesheet" type="text/css" />
<title>People</title>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<table width="100%" bgcolor="#232323" height="500px">
<tr height="20px">
<td>
<table width="100%">
<tr>
<td>
<span id="secondtext">
People
</span>
</td>
<td align="right">
<div style="background-color:#222; border-radius:5px; padding:0px 5px 0px 0px; width:215px">
<form action='lvrgtj4vu58un.php' method='get'>
<input class='search' type='text' pattern="[A-Z a-z:-_]{3,}" name='keyword' required  maxlength='50' placeholder="search"/>
<input type="submit" value="" style='background:url(images/srch.jpg) center no-repeat; border:none; background-size:contain; height:20px; width:20px; cursor:pointer; vertical-align:middle; background-color:#222' />
<input type="hidden" name="source" value="people"/>
</form>
</div>
</td>
</tr>
</table>
</td>
</tr>
<form action="kvrghwi58y9o.php" method="GET">
<tr>
<td style="padding-left:10px">
<?php
while($row = mysql_fetch_array($sql2))
	{ 
	extract($row);
echo "<table style='float:left; margin:7px 7px'><tr><td><input type='submit' name='person' value="; ?> "<?php echo $personStageName ?> " <?php echo" style='font-size:0px;background-image:url(personsimg/$personPic1); background-size:cover; background-position:center; background-repeat:no-repeat; border:none; height:140px; width:140px; cursor: pointer; background-color:#222; border-radius:100px'/>
</td></tr><tr><td align='center'>
<span class='thirdtextWyt'>$personStageName</span><br/>";
$query = "SELECT AVG(songRating) AS ratingAvg FROM songs WHERE songArtist='$personStageName' OR songProducer ='$personStageName' OR songArtistFt ='$personStageName'";

$mow = mysql_query($query, $cxn)
	or die('Not Rated'); 
$row=array_sum(mysql_fetch_assoc($mow));

if ($row < 3){				echo " <button style='background:url(images/)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> ";}

if ($row > 2){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> 
<button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'>
</button> <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> ";}
if ($row > 3){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> ";}
if ($row > 4){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> ";} 
 echo "</td></tr></table>";
	}?>
</form>
</td></tr>
<tr height="100%"><td colspan="19"><table width="100%" align="center"><tr><?php echo $paginationDisplay;?></tr></table></td></tr>
</table>
<script>
window.onload = function() {
  	top.document.getElementById('title1').innerHTML='People';
	top.document.getElementById('description').content='The People that make up the Nigerian Music Indusrty';
	top.document.getElementById('keywords').content='Nigerian producers, Nigerian musicains, Nigerian DJs, Nigerian music people';
};
</script>
</body>
</html>