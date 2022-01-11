<?php include('top.php');

//////////////  QUERY THE MEMBER DATA INITIALLY LIKE YOU NORMALLY WOULD
$sql = mysql_query("SELECT * FROM songs ORDER BY songTitle");
//////////////////////////////////// Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////
$nr = mysql_num_rows($sql); // Get total of Num rows from the database query
if (isset($_GET['pn'])) { // Get pn from URL vars if it is present
    $pn = preg_replace('#[^0-9]#i', '', $_GET['pn']); // filter everything but numbers for security(new)
    //$pn = ereg_replace("[^0-9]", "", $_GET['pn']); // filter everything but numbers for security(deprecated)
} else { // If the pn URL variable is not present force it to be value of page number 1
    $pn = 1;
} 
//This is where we set how many database items to show on each page 
$itemsPerPage = 17; 
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
    $centerPages .= '&nbsp; <a href="hgvrtw45tvw.php?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
} else if ($pn == $lastPage) {
    $centerPages .= '&nbsp; <a href="hgvrtw45tvw.php?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
} else if ($pn > 2 && $pn < ($lastPage - 1)) {
    $centerPages .= '&nbsp; <a href="hgvrtw45tvw.php?pn=' . $sub2 . '">' . $sub2 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <a href="hgvrtw45tvw.php?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="hgvrtw45tvw.php?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <a href="hgvrtw45tvw.php?pn=' . $add2 . '">' . $add2 . '</a> &nbsp;';
} else if ($pn > 1 && $pn < $lastPage) {
    $centerPages .= '&nbsp; <a href="hgvrtw45tvw.php?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="hgvrtw45tvw.php?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
}
// This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
$limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .$itemsPerPage; 
// Now we are going to run the same query as above but this time add $limit onto the end of the SQL syntax
// $sql2 is what we will use to fuel our while loop statement below
$sql2 = mysql_query("SELECT * FROM songs ORDER BY songTitle $limit");
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
        $paginationDisplay .=  "<td align='left' width='50px'>".'<a href="hgvrtw45tvw.php?pn=' . $previous . '"> Back</a> '.'</td>';

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
        $paginationDisplay .=  "<td align='right' width='50px'>".'<a href="hgvrtw45tvw.php?pn=' . $nextPage . '"> Next</a> '.'</td>';
		
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
<title>The Archive</title>
	<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	<link href="front.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<table width="100%" bgcolor="#262626" height="500px">
<tr >
<td>

<table width="100%">
<tr>
<td>
<span id="secondtext">
Music
</span>
</td>
<td>

<table width="150px" align="center">
<tr>
<td width="50px" align="center" class="thirdtextWyt">
<a href="ive5twvbtb5s.php"><input type='submit' value='Fresh' style='font-size:13px; border:none; height:100%; width:100%; cursor: pointer; color:#FFF; cursor:pointer; background-color:#222;' /></a>
</td>
<td width="50px" align="center" class="thirdtextWyt">
<input type='submit' value='All' style='font-size:13px; border:none; height:100%; width:100%; cursor:default; background-color:#262626; color:#FFF'/>
</td>
</tr>
</table>

</td>
<td align="right">
<div style="background-color:#222; border-radius:5px; padding:0px 5px 0px 0px; width:215px">
<form action='lvrgtj4vu58un.php' method='GET'>
		<input class='search' pattern="[A-Z a-z:-_]{3,}" type='text' name='keyword' required  maxlength='50' placeholder="search"/>
        <input type="submit" value="" style='background:url(images/srch.jpg) center no-repeat; border:none; background-size:contain; height:20px; width:20px; cursor:pointer; vertical-align:middle; background-color:#222' />
        <input type="hidden" name="source" value="music"/>
        </form></div>
</td>
</tr>
</table>

</td>
</tr>

<tr valign="top">
<td>

<table width="100%">
<tr>
<td>
Title
</td><td></td>
<td>
Artist
</td><td></td>
<td align="center">
Length
</td><td></td>
<td>
Album
</td><td></td>
<td width="100px">
Genre
</td>
<td>
</td>
<td width="30px" align="center">
Year
</td>
<td>
</td>
<td width="85px" align="center">
Rating
</td>
<td>
</td>
</tr>

<?php
$counter = 1;
while($row = mysql_fetch_array($sql2))
	{extract($row);
echo "
<tr>
<td "; if ($counter%2 != 0){echo "bgcolor='#222'";} echo " class='thirdtextWyt' title='$songTitle'>";
echo substr_replace($songTitle,'',45);
echo "</td><td></td>
<td class='thirdtextWyt' title='$songArtist' "; if ($counter%2 != 0){echo "bgcolor='#222'";} echo ">
$songArtist
</td><td></td>
<td "; if ($counter%2 != 0){echo "bgcolor='#222'";} echo " width='36px' align='center'>";
$x = round($songLenght/60); $y = $songLenght%60;
		if ($y >10)
			 {echo "<b>$x".":"."$y";}
        else
			 {echo "<b>$x".":"."0"."$y";}
echo "</td><td></td>
<td "; if ($counter%2 != 0){echo "bgcolor='#222'";} echo " title='$songAlbum'>";
echo substr_replace($songAlbum,'',45);
echo "
</td><td></td>
<td "; if ($counter%2 != 0){echo "bgcolor='#222'";} echo " width='100px' title='$songGenre'>";
echo substr_replace($songGenre,'',45);
echo "
</td>
<td>
</td>
<td "; if ($counter%2 != 0){echo "bgcolor='#222'";} echo " width='30px' align='center'>"; 
if ($songYear == 0) {echo '----';} else {echo $songYear;}
echo"</td>
<td>
</td>
<td "; if ($counter%2 != 0){echo "bgcolor='#222'";} echo " width='85px' align='center'>";

echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#222;'></button> ";
echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#222;'></button> ";
if ($songRating > 2){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#222;'></button> ";}
if ($songRating > 3){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#222;'></button> ";}
if ($songRating > 4){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#222;'></button> ";}
echo"</td>
<td>
</td>
<td "; if ($counter%2 != 0){echo "bgcolor='#222'";} echo " align='center'>
<form action='filepreview.php' method='GET'><input type='submit' value='...' style='border:none; cursor:pointer; "; if ($counter%2 != 0){echo "background-color:#222";}else{echo "background-color:#262626";}echo "; font-weight:900; color:#fff' title='Preview'/><input type='hidden' name='songURL' value='$songURL' /></form>
</td></tr>";

	$counter ++;
echo"</form>";	}
?>
<tr height="100%"><td colspan="19"><table width="100%" align="center"><tr><?php echo $paginationDisplay;?></tr></table></td></tr>
</table>



</table>

</td>

</td>
</tr>
</table>
<script>
window.onload = function() {
  	top.document.getElementById('title1').innerHTML='Music';
	top.document.getElementById('description').content='All Nigerian songs';
	top.document.getElementById('keywords').content='Nigerian music, Nigerian songs, Nigerian tracks';
};
</script>
</body>
</html>