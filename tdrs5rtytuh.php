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
$itemsPerPage = 20; 
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
<title>The Archive</title>
	<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	<link href="zfgyugewiugf.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<table width="100%">
<tr>
<td>
<span id="firsttext">
Music
</span>
</tr>
</table>
<table width="100%">
<?php
$counter = 1;
while($row = mysql_fetch_array($sql2))
{
    	extract($row);
		echo "<tr "; if ($counter%2 == 0) {echo "bgcolor='#262626'";} echo"><td id='cubeSongs'><div><table><tr><td>
        <button style='background:url(songsimg/$songArt) center no-repeat; border:none; background-size:contain; height:200px; width:200px; cursor: default; background-color:#262626'></button>
		</td>
		<td width='100%'>
		<table><tr><td>
		<span id='name'>
		$songTitle
		</span>
		</td>
		</tr>
		<tr>
		<td>
		<span id='details'>";
		 echo $songArtist;
		 if ($songArtistFt != '') {echo " Ft ";} 
		 echo "$songArtistFt</span>
		</td>
		</tr>
		</table>
		</td>
		<td width='5%'>
		<form action='preview.php' method='GET'>
		<input type='submit' value='...' style='background-color:#222; border:none; height:100%; font-size:10em; color:#FFF; -webkit-appearance: none;' title='Preview'/>
		<input type='hidden' name='songURL' value='$songURL' />
		</form>
		</td>
		</tr>
		</table>
		</td>
		</td>
		</tr>
		</table>
		</div>
		</td>
		</tr>";
		

echo"</table>";
		if ($counter == '5') {echo "<table style='background:url(images/"; if (!file_exists("images/mobmusicsponsor5.jpg")){echo 'bg.jpg';} else{echo 'mobmusicsponsor5.jpg';} echo ") center;' height='200px' width='100%'><tr><td></td></tr></table>";}
		if ($counter == '10') {echo "<table style='background:url(images/"; if (!file_exists("images/mobmusicsponsor10.jpg")){echo 'bg.jpg';} else{echo 'mobmusicsponsor15.jpg';} echo ") center ' height='200px' width='100%'><tr><td></td></tr></table>";}
		if ($counter == '15') {echo "<table style='background:url(images/"; if (!file_exists("images/mobmusicsponsor15.jpg")){echo 'bg.jpg';} else{echo 'mobmusicsponsor15.jpg';} echo ") center ' height='200px' width='100%'><tr><td></td></tr></table>";}
	$counter ++;} ?>
</table>
<table width="100%" align="center"><tr><?php echo $paginationDisplay;?></tr></table>

<script>
function copyToClipboard(text, id) {
	top.document.getElementById("play").src = "stats.php?copy=music&musicID="+id;
    window.prompt("Copy to clipboard: its selected, oya you copy", text);
  }
window.onload = function() {
  	top.document.getElementById('title1').innerHTML='Greenbox Library';
	top.document.getElementById('description').content='Feel the Nigerian music industry and what she has to offer';
	top.document.getElementById('keywords').content='Nigerian Music,  Artist, label, song, news';
};
</script>
<table><tr height="200px"><td></td></tr></table>
</body>
</html>