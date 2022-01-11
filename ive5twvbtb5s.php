<?php include('top.php');
$n=date('D');
$h=date('G');
$w=date('w');

if ($h=='5'){$sql2 = mysql_query("SELECT * FROM songs where songTags Like '%Gospel%' OR songGenre Like '%Gospel%' ORDER BY rand() LIMIT 20"); $x = 'Morning';} #morning
if ($h=='4'){$sql2 = mysql_query("SELECT * FROM songs where songTags Like '%Gospel%' OR songGenre Like '%Gospel%' ORDER BY rand() LIMIT 20"); $x = 'Morning';} #morning
if ($h=='3'){$sql2 = mysql_query("SELECT * FROM songs where songTags Like '%Gospel%' OR songGenre Like '%Gospel%' ORDER BY rand() LIMIT 20"); $x = 'Morning';} #morning
if ($h=='1'){$sql2 = mysql_query("SELECT * FROM songs where songTags Like '%Gospel%' OR songGenre Like '%Gospel%' ORDER BY rand() LIMIT 20"); $x = 'Morning';} #morning

elseif ($h=='11' or $h == '9' or $h == '2' or $h == '17' or $h == '15'){$sql2 = mysql_query("SELECT * FROM songs ORDER BY rand() LIMIT 20"); $x = 'Spinlist';}

else {$sql2 = mysql_query("SELECT * FROM songs order by dateUpdated desc limit 20"); $x = 'Fresh';}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Archive</title>
	<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	<link href="front.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<table width="100%" bgcolor="#262626" height="500px">
<tr height="20px">
<td>

<table width="100%">
<tr>
<td>
<span id="secondtext">
Music
</span>
</td>
<td align="center">

<table width="150px" align="center">
<tr>
<td width="50px" align="center" class="thirdtextWyt">
<input type='submit' value='<?php echo $x ?>' style='font-size:13px; border:none; height:100%; width:100%; cursor: pointer; background-color:#262626; color:#FFF; cursor:default'/>
</td>
<td width="50px" bgcolor="#222" align="center" class="thirdtextWyt">
<form action="hgvrtw45tvw.php" method="get"><input type='submit' value='All' style='font-size:13px; border:none; height:100%; width:100%; cursor: pointer; background-color:#222; color:#FFF'/></form>
</td>
</tr>
</table>

</td>
<td align="right">
<div style="background-color:#222; border-radius:5px; padding:0px 5px 0px 0px; width:215px">
<form action='lvrgtj4vu58un.php' method='GET'>
		<input class='search' type='text' pattern="[A-Z a-z:-_]{3,}" name='keyword' required  maxlength='50' placeholder="search"/>
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

<tr height="10px">
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
</tr>

<?php
$counter = 1;
while($row = mysql_fetch_array($sql2))
	{extract($row);
echo "
<tr valign='middle'>
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
<form action='filepreview.php' method='GET'>
<input type='submit' value='...' style='border:none; cursor:pointer; "; if ($counter%2 != 0){echo "background-color:#222";}else{echo "background-color:#262626";}echo "; font-weight:900; color:#fff' title='Preview'/>
<input type='hidden' name='songURL' value='$songURL' />
</form>
</td></tr>";

	$counter ++;
echo"";	}
?>
</table>



</table>

</td>

</td>
</tr>
</table>
<script>
window.onload = function() {
  	top.document.getElementById('title1').innerHTML='Music -  Greenbox Nigeria';
	top.document.getElementById('description').content='Fresh Nigerian songs';
	top.document.getElementById('keywords').content='latest , fresh, new, Nigerian music, Nigerian songs, Nigerian tracks';
};
</script>
</body>
</html>