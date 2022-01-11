<?php include('top.php');?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>
	<link href='images/favicon.ico' type='image/x-icon' rel='shortcut icon'/>
	<link href='front.css' rel='stylesheet' type='text/css' />
</head>
<style>
body{ background-color:#262626; height:500px}
</style>
<body>
<?php include_once("analyticstracking.php") ?>
<?php
if ($_GET['keyword']!='');{
$x =$_GET['keyword'];
$keyword = strip_tags(trim($x));

$term = $_GET['keyword'];
$clean= strlen(trim($keyword));
if ($clean == 0)
	{?>
		<script>
window.location='index.php';
	</script>
	<?php }
$keyword=explode(' ',$keyword);

if (strlen($keyword[0]) > 2){$word1 = $keyword[0];}else{$word1 = 'greenbox';}
if (strlen($keyword[1]) > 2){$word2 = $keyword[1];}else{$word2 = 'greenbox';}
if (strlen($keyword[2]) > 2){$word3 = $keyword[2];}else{$word3 = 'greenbox';}
if (strlen($keyword[3]) > 2){$word4 = $keyword[3];}else{$word4 = 'greenbox';}
if (strlen($keyword[4]) > 2){$word5 = $keyword[4];}else{$word5 = 'greenbox';}
if (strlen($keyword[5]) > 2){$word6 = $keyword[5];}else{$word6 = 'greenbox';}
if (strlen($keyword[6]) > 2){$word7 = $keyword[6];}else{$word7 = 'greenbox';}
if (strlen($keyword[7]) > 2){$word8 = $keyword[7];}else{$word8 = 'greenbox';}


if ($_GET['source']=='music'){
	$queryTweek = "SELECT * FROM songs WHERE 
		songTitle LIKE '%".$x."%' OR songArtist LIKE '%".$x."%'  OR songArtistFt LIKE '%".$x."%' OR songAlbum LIKE '%".$x."%' OR songProducer LIKE '%".$x."%' OR songLenght LIKE '%".$x."%' OR songSize LIKE '%".$x."%' OR songURL LIKE '%".$x."%' OR songGenre LIKE '%".$x."%' OR songYear LIKE '%".$x."%' OR songLanguage LIKE '%".$x."%'  LIMIT 10 ";
			$resultTweek = mysql_query($queryTweek, $cxn)
			or die("result no working");
			$match1 = mysql_num_rows($resultTweek);
			$counter=1;
if (mysql_num_rows($resultTweek)<1)
	{$searchcount += 1;}
	else{ echo"
	<table width=100% bgcolor=#262626 height=500px>
<tr height=20px valign=top>
<td>

<table width=100%>
<tr>
<td>
<span id=secondtext>
Music
</span>
</td>
<td>

</td>
<td align='right'>
<div style='background-color:#222; border-radius:5px; padding:0px 5px 0px 0px; width:215px'>
<form action='lvrgtj4vu58un.php' method='GET'>
		<input class='search' type='text' pattern='[A-Z a-z:-_]{3,}' name='keyword' required  maxlength='50' placeholder='search' value='$x'/>
        <input type='submit' value='' style='background:url(images/srch.jpg) center no-repeat; border:none; background-size:contain; height:20px; width:20px; cursor:pointer; vertical-align:middle; background-color:#222' />		<input type='hidden' name='source' value='music'/>
        </form></div>
</td>
</tr>
</table>

</td>
</tr>

<tr valign=top>
<td>

<table width=100%>
<tr>
<td>
Title
</td><td></td>
<td>
Artist
</td><td></td>
<td align=center>
Length
</td><td></td>
<td>
Album
</td><td></td>
<td width=100px>
Genre
</td>
<td>
</td>
<td width=30px align=center>
Year
</td>
<td>
</td>
<td width=85px align=center>
Rating
</td>
<td>
</td>
</tr>
	";
while($rowTweek=mysql_fetch_assoc($resultTweek))
{{
		extract($rowTweek);
		$rower = $rowTweek;
echo "<tr>
<td bgcolor='#222' class='thirdtextWyt' title='$songTitle'>";
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
if ($songRating > 2){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#222;'></button> ";}
if ($songRating > 4){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#222;'></button> ";}
if ($songRating > 6){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#222;'></button> ";}
if ($songRating > 8){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#222;'></button> ";}
echo"</td>
<td>
</td>
<td "; if ($counter%2 != 0){echo "bgcolor='#222'";} echo " align='center'>
<form action='filepreview.php' method='GET'><input type='submit' value='...' style='border:none; cursor:pointer; "; if ($counter%2 != 0){echo "background-color:#222";}else{echo "background-color:#262626";}echo "; font-weight:900; color:#fff' title='Preview'/><input type='hidden' name='songURL' value='$songURL' /></form>
</td></tr>";
		$counter ++;} } 
}
$match = 18 - $match1;
		$query = "SELECT * FROM songs WHERE 
		songTitle LIKE '%".$word1."%' OR songTitle LIKE '%".$word2."%' OR songTitle LIKE '%".$word3."%' OR songTitle LIKE '%".$word4."%' OR songTitle LIKE '%".$word5."%' OR songTitle LIKE '%".$word6."%' OR songTitle LIKE '%".$word7."%' OR songTitle LIKE '%".$word8."%'  
		
		
		OR songArtist LIKE '%".$word1."%' OR songArtist LIKE '%".$word2."%' OR songArtist LIKE '%".$word3."%' OR songArtist LIKE '%".$word4."%' OR songArtist LIKE '%".$word5."%' OR songArtist LIKE '%".$word6."%' OR songArtist LIKE '%".$word7."%' OR songArtist LIKE '%".$word8."%'
		
		
		OR songArtistFt LIKE '%".$word1."%' OR songArtistFt LIKE '%".$word2."%' OR songArtistFt LIKE '%".$word3."%' OR songArtistFt LIKE '%".$word4."%' OR songArtistFt LIKE '%".$word5."%' OR songArtistFt LIKE '%".$word6."%' OR songArtistFt LIKE '%".$word7."%' OR songArtistFt LIKE '%".$word8."%' 
		
		
		OR songAlbum LIKE '%".$word1."%' OR songAlbum LIKE '%".$word2."%' OR songAlbum LIKE '%".$word3."%' OR songAlbum LIKE '%".$word4."%' OR songAlbum LIKE '%".$word5."%' OR songAlbum LIKE '%".$word6."%' OR songAlbum LIKE '%".$word7."%' OR songAlbum LIKE '%".$word8."%' OR songAlbum LIKE '%".$word1."%' 
		
		
		OR songProducer LIKE '%".$word1."%' OR songProducer LIKE '%".$word2."%' OR songProducer LIKE '%".$word3."%' OR songProducer LIKE '%".$word4."%' OR songProducer LIKE '%".$word5."%' OR songProducer LIKE '%".$word6."%' OR songProducer LIKE '%".$word7."%' OR songProducer LIKE '%".$word8."%'
		
		
		OR songLenght LIKE '%".$word1."%' OR songLenght LIKE '%".$word2."%' OR songLenght LIKE '%".$word3."%' OR songLenght LIKE '%".$word4."%' OR songLenght LIKE '%".$word5."%' OR songLenght LIKE '%".$word6."%' OR songLenght LIKE '%".$word7."%' OR songLenght LIKE '%".$word8."%' 
		
		
		OR songType LIKE '%".$word1."%' OR songType LIKE '%".$word2."%' OR songType LIKE '%".$word3."%' OR songType LIKE '%".$word4."%' OR songType LIKE '%".$word5."%' OR songType LIKE '%".$word6."%' OR songType LIKE '%".$word7."%' OR songType LIKE '%".$word8."%' 
		
		
		OR songSize LIKE '%".$word1."%' OR songSize LIKE '%".$word2."%' OR songSize LIKE '%".$word3."%' OR songSize LIKE '%".$word4."%' OR songSize LIKE '%".$word5."%' OR songSize LIKE '%".$word6."%' OR songSize LIKE '%".$word7."%' OR songSize LIKE '%".$word8."%' 
		
		
		OR songURL LIKE '%".$word1."%' OR songURL LIKE '%".$word2."%' OR songURL LIKE '%".$word3."%' OR songURL LIKE '%".$word4."%' OR songURL LIKE '%".$word5."%' OR songURL LIKE '%".$word6."%' OR songURL LIKE '%".$word7."%' OR songURL LIKE '%".$word8."%' 
		
		
		OR songGenre LIKE '%".$word1."%' OR songGenre LIKE '%".$word2."%' OR songGenre LIKE '%".$word3."%' OR songGenre LIKE '%".$word4."%' OR songGenre LIKE '%".$word5."%' OR songGenre LIKE '%".$word6."%' OR songGenre LIKE '%".$word7."%' OR songGenre LIKE '%".$word8."%' 
		
		
		OR songYear LIKE '%".$word1."%' OR songYear LIKE '%".$word2."%' OR songYear LIKE '%".$word3."%' OR songYear LIKE '%".$word4."%' OR songYear LIKE '%".$word5."%' OR songYear LIKE '%".$word6."%' OR songYear LIKE '%".$word7."%' OR songYear LIKE '%".$word8."%' 
		
		OR songLanguage LIKE '%".$word1."%' OR songLanguage LIKE '%".$word2."%' OR songLanguage LIKE '%".$word3."%' OR songLanguage LIKE '%".$word4."%' OR songLanguage LIKE '%".$word5."%' OR songLanguage LIKE '%".$word6."%' OR songLanguage LIKE '%".$word7."%' OR songLanguage LIKE '%".$word8. "%' LIMIT $match ";
		
		$result = mysql_query($query, $cxn)
			or die("result no worker");
if (mysql_num_rows($result)<1)
	{$searchcount += 1;}
	else{ 
if ($match == 20) 
	{
		echo"
	<table width=100% bgcolor=#262626 height=500px>
<tr height=20px valign=top>
<td>

<table width=100%>
<tr>
<td>
<span id=secondtext>
Music
</span>
</td>
<td>

</td>
<td align='right'>
<div style='background-color:#222; border-radius:5px; padding:0px 5px 0px 0px; width:215px'>
<form action='lvrgtj4vu58un.php' method='GET'>
		<input class='search' type='text' pattern='[A-Z a-z:-_]{3,}' name='keyword' required  maxlength='50' placeholder='search' value='$x'/>
        <input type='submit' value='' style='background:url(images/srch.jpg) center no-repeat; border:none; background-size:contain; height:20px; width:20px; cursor:pointer; vertical-align:middle; background-color:#222' />		<input type='hidden' name='source' value='music'/>
        </form></div>
</td>
</tr>
</table>

</td>
</tr>

<tr valign=top>
<td>

<table width=100%>
<tr>
<td>
Title
</td><td></td>
<td>
Artist
</td><td></td>
<td align=center>
Length
</td><td></td>
<td>
Album
</td><td></td>
<td width=100px>
Genre
</td>
<td>
</td>
<td width=30px align=center>
Year
</td>
<td>
</td>
<td width=85px align=center>
Rating
</td>
<td>
</td>
</tr>
	";
	}
		$counter=1;
while($row=mysql_fetch_assoc($result))
{extract($row); 
	if (in_array($songURL, $rower, FALSE)){
		}
	else{
echo "<tr>
<td bgcolor='#222' class='thirdtextWyt' title='$songTitle'>";
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
if ($songRating > 2){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#222;'></button> ";}
if ($songRating > 4){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#222;'></button> ";}
if ($songRating > 6){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#222;'></button> ";}
if ($songRating > 8){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#222;'></button> ";}
echo"</td>
<td>
</td>
<td "; if ($counter%2 != 0){echo "bgcolor='#222'";} echo " align='center'>
<form action='filepreview.php' method='GET'><input type='submit' value='...' style='border:none; cursor:pointer; "; if ($counter%2 != 0){echo "background-color:#222";}else{echo "background-color:#262626";}echo "; font-weight:900; color:#fff' title='Preview'/><input type='hidden' name='songURL' value='$songURL' /></form>
</td></tr>";
	$counter ++;} }
}


if ($searchcount==2)
	{
	echo "
	<table width='100%'>
<tr>
<td>
<span id='secondtext'>
Music
</span>
</td>
<td>

</td>
<td align='right'>
<div style='background-color:#222; border-radius:5px; padding:0px 5px 0px 0px; width:215px'>
<form action='lvrgtj4vu58un.php' method='GET'>
		<input class='search' type='text' pattern='[A-Z a-z:-_]{3,}' name='keyword' required  maxlength='50' placeholder='search' value='$x'/>
        <input type='submit' value='' style='background:url(images/srch.jpg) center no-repeat; border:none; background-size:contain; height:20px; width:20px; cursor:pointer; vertical-align:middle; background-color:#222' />
		<input type='hidden' name='source' value='music'/>
        </form></div>
</td>
</tr>
</table>
<table width='100%'><tr><td align='center'><span id='secondtext'>Your search for the keyword '$x' yielded no result</span></td></tr></table>" ;
}
}


if ($_GET['source']=='people'){
		$querypeople = "SELECT * FROM persons WHERE 
		personStageName LIKE '%".$word1."%' OR personStageName LIKE '%".$word2."%' OR personStageName LIKE '%".$word3."%' OR personStageName LIKE '%".$word4."%' OR personStageName LIKE '%".$word5."%' OR personStageName LIKE '%".$word6."%' OR personStageName LIKE '%".$word7."%' OR personStageName LIKE '%".$word8."%'  
		
		
		OR personBirthName LIKE '%".$word1."%' OR personBirthName LIKE '%".$word2."%' OR personBirthName LIKE '%".$word3."%' OR personBirthName LIKE '%".$word4."%' OR personBirthName LIKE '%".$word5."%' OR personBirthName LIKE '%".$word6."%' OR personBirthName LIKE '%".$word7."%' OR personBirthName LIKE '%".$word8."%'
		
		
		OR personFanName LIKE '%".$word1."%' OR personFanName LIKE '%".$word2."%' OR personFanName LIKE '%".$word3."%' OR personFanName LIKE '%".$word4."%' OR personFanName LIKE '%".$word5."%' OR personFanName LIKE '%".$word6."%' OR personFanName LIKE '%".$word7."%' OR personFanName LIKE '%".$word8."%' 
		
		
		OR personBirthYear LIKE '%".$word1."%' OR personBirthYear LIKE '%".$word2."%' OR personBirthYear LIKE '%".$word3."%' OR personBirthYear LIKE '%".$word4."%' OR personBirthYear LIKE '%".$word5."%' OR personBirthYear LIKE '%".$word6."%' OR personBirthYear LIKE '%".$word7."%' OR personBirthYear LIKE '%".$word8."%' 
		
		
		OR personPlaceOfOrigin LIKE '%".$word1."%' OR personPlaceOfOrigin LIKE '%".$word2."%' OR personPlaceOfOrigin LIKE '%".$word3."%' OR personPlaceOfOrigin LIKE '%".$word4."%' OR personPlaceOfOrigin LIKE '%".$word5."%' OR personPlaceOfOrigin LIKE '%".$word6."%' OR personPlaceOfOrigin LIKE '%".$word7."%' OR personPlaceOfOrigin LIKE '%".$word8."%'
		
		
		OR personGenre LIKE '%".$word1."%' OR personGenre LIKE '%".$word2."%' OR personGenre LIKE '%".$word3."%' OR personGenre LIKE '%".$word4."%' OR personGenre LIKE '%".$word5."%' OR personGenre LIKE '%".$word6."%' OR personGenre LIKE '%".$word7."%' OR personGenre LIKE '%".$word8."%' 
		
		
		OR personProfession LIKE '%".$word1."%' OR personProfession LIKE '%".$word2."%' OR personProfession LIKE '%".$word3."%' OR personProfession LIKE '%".$word4."%' OR personProfession LIKE '%".$word5."%' OR personProfession LIKE '%".$word6."%' OR personProfession LIKE '%".$word7."%' OR personProfession LIKE '%".$word8."%' 
		
		
		OR personCareerStartYear LIKE '%".$word1."%' OR personCareerStartYear LIKE '%".$word2."%' OR personCareerStartYear LIKE '%".$word3."%' OR personCareerStartYear LIKE '%".$word4."%' OR personCareerStartYear LIKE '%".$word5."%' OR personCareerStartYear LIKE '%".$word6."%' OR personCareerStartYear LIKE '%".$word7."%' OR personCareerStartYear LIKE '%".$word8."%' 
		
		
		OR personLabel LIKE '%".$word1."%' OR personLabel LIKE '%".$word2."%' OR personLabel LIKE '%".$word3."%' OR personLabel LIKE '%".$word4."%' OR personLabel LIKE '%".$word5."%' OR personLabel LIKE '%".$word6."%' OR personLabel LIKE '%".$word7."%' OR personLabel LIKE '%".$word8."%' 
		
		
		OR personLifeStory LIKE '%".$word1."%' OR personLifeStory LIKE '%".$word2."%' OR personLifeStory LIKE '%".$word3."%' OR personLifeStory LIKE '%".$word4."%' OR personLifeStory LIKE '%".$word5."%' OR personLifeStory LIKE '%".$word6."%' OR personLifeStory LIKE '%".$word7."%' OR personLifeStory LIKE '%".$word8."%' LIMIT 8
		";
		

		$resultpeople = mysql_query($querypeople, $cxn)
			or die("result no work people");
if (mysql_num_rows($resultpeople)>0)
	{?>
<table width="100%" bgcolor="#262626" height="500px"><tr height="20px"><td>
<!--            Head            -->
<table width="100%"><tr><td>
<span id="secondtext">
People
</span>
</td><td align="right">
<div style="background-color:#222; border-radius:5px; padding:0px 5px 0px 0px; width:215px">
<form action='lvrgtj4vu58un.php' method='get'>
		<input class='search' type='text' pattern="[A-Z a-z:-_]{3,}" name='keyword' required  maxlength='50' placeholder="search" value="<?php echo $x ?>"/>
        <input type="submit" value="" style='background:url(images/srch.jpg) center no-repeat; border:none; background-size:contain; height:20px; width:20px; cursor:pointer; vertical-align:middle; background-color:#222' />
        <input type='hidden' name='source' value='people'/>
        </form></div>
</td></tr></table>
<!--            Head            -->
</td></tr><form action="kvrghwi58y9o.php" method="GET">
<tr valign="top"><td style="padding-left:10px">
<?php }
else
{echo "
	<table width='100%'>
<tr>
<td>
<span id='secondtext'>
People
</span>
</td>
<td>

</td>
<td align='right'>
<div style='background-color:#222; border-radius:5px; padding:0px 5px 0px 0px; width:215px'>
<form action='lvrgtj4vu58un.php' method='GET'>
		<input class='search' type='text' name='keyword' pattern='[A-Z a-z:-_]{3,}' required  maxlength='50' placeholder='search' value='$x'/>
        <input type='submit' value='' style='background:url(images/srch.jpg) center no-repeat; border:none; background-size:contain; height:20px; width:20px; cursor:pointer; vertical-align:middle; background-color:#222' />
		<input type='hidden' name='source' value='people'/>
        </form></div>
</td>
</tr>
</table>
<table width='100%'><tr><td align='center'><span id='secondtext'>Your search for the keyword '$x' yielded no result</span></td></tr></table>" ;
}
while($rowpeople=mysql_fetch_assoc($resultpeople))
		{extract($rowpeople);
echo "<table style='float:left; margin:7px 7px'><tr><td><input type='submit' name='person' value="; ?> "<?php echo $personStageName ?> " <?php echo" style='font-size:0px;background-image:url(personsimg/$personPic1); background-size:cover; background-position:center; background-repeat:no-repeat; border:none; height:140px; width:140px; cursor: pointer; background-color:#222; border-radius:100px'/>
</td></tr><tr><td align='center'>
<span class='thirdtextWyt'>$personStageName</span><br/>";
$query = "SELECT AVG(songRating) AS ratingAvg FROM songs WHERE songArtist='$personStageName'";

$mow = mysql_query($query, $cxn)
	or die('result no work'); 
$row=array_sum(mysql_fetch_assoc($mow));

												echo "<button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> ";
if ($row > 2){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> ";}
if ($row > 4){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> ";}
if ($row > 6){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> ";}
if ($row > 8){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> ";} 
 echo "</td></tr></table>";}
}


if ($_GET['source']=='labels'){
		$querylabel = "SELECT * FROM labels WHERE 
		labelName LIKE '%".$word1."%' OR labelName LIKE '%".$word2."%' OR labelName LIKE '%".$word3."%' OR labelName LIKE '%".$word4."%' OR labelName LIKE '%".$word5."%' OR labelName LIKE '%".$word6."%' OR labelName LIKE '%".$word7."%' OR labelName LIKE '%".$word8."%'  
		
		
		OR labelOwner LIKE '%".$word1."%' OR labelOwner LIKE '%".$word2."%' OR labelOwner LIKE '%".$word3."%' OR labelOwner LIKE '%".$word4."%' OR labelOwner LIKE '%".$word5."%' OR labelOwner LIKE '%".$word6."%' OR labelOwner LIKE '%".$word7."%' OR labelOwner LIKE '%".$word8."%'
		
		
		OR labelIntro LIKE '%".$word1."%' OR labelIntro LIKE '%".$word2."%' OR labelIntro LIKE '%".$word3."%' OR labelIntro LIKE '%".$word4."%' OR labelIntro LIKE '%".$word5."%' OR labelIntro LIKE '%".$word6."%' OR labelIntro LIKE '%".$word7."%' OR labelIntro LIKE '%".$word8."%' 
		
				
		OR labelArtists LIKE '%".$word1."%' OR labelArtists LIKE '%".$word2."%' OR labelArtists LIKE '%".$word3."%' OR labelArtists LIKE '%".$word4."%' OR labelArtists LIKE '%".$word5."%' OR labelArtists LIKE '%".$word6."%' OR labelArtists LIKE '%".$word7."%' OR labelArtists LIKE '%".$word8."%' 
		
		
		OR labelProducers LIKE '%".$word1."%' OR labelProducers LIKE '%".$word2."%' OR labelProducers LIKE '%".$word3."%' OR labelProducers LIKE '%".$word4."%' OR labelProducers LIKE '%".$word5."%' OR labelProducers LIKE '%".$word6."%' OR labelProducers LIKE '%".$word7."%' OR labelProducers LIKE '%".$word8."%' LIMIT 2
		";


		$resultlabel = mysql_query($querylabel, $cxn)
			or die("result no work label");
if (mysql_num_rows($resultlabel)>0)
	{?><table width="100%"><tr height="20px"><td>
<!--            Head            -->
<table width="100%"><tr><td>
<span id="secondtext">
Labels
</span>
</td><td align="right">
<div style="background-color:#222; border-radius:5px; padding:0px 5px 0px 0px; width:215px">
<form action='lvrgtj4vu58un.php' method='GET'>
		<input class='search' type='text' pattern="[A-Z a-z:-_]{3,}" name='keyword' required  maxlength='50' placeholder="search" value="<?php echo $x ?>"/>
        <input type="submit" value="" style='background:url(images/srch.jpg) center no-repeat; border:none; background-size:contain; height:20px; width:20px; cursor:pointer; vertical-align:middle; background-color:#222' />
        <input type='hidden' name='source' value='label'/>
        </form></div>
</td></tr></table>
<!--            Head            -->
</td></tr><tr><td style="padding-left:23px">
<form action="ekiy87t4wfszz.php" method="get"><?php }
else
{echo "
	<table width='100%'>
<tr>
<td>
<span id='secondtext'>
Labels
</span>
</td>
<td>

</td>
<td align='right'>
<div style='background-color:#222; border-radius:5px; padding:0px 5px 0px 0px; width:215px'>
<form action='lvrgtj4vu58un.php' method='GET'>
		<input class='search' type='text' name='keyword' pattern='[A-Z a-z:-_]{3,}' required  maxlength='50' placeholder='search' value='$x'/>
        <input type='submit' value='' style='background:url(images/srch.jpg) center no-repeat; border:none; background-size:contain; height:20px; width:20px; cursor:pointer; vertical-align:middle; background-color:#222' />
		<input type='hidden' name='source' value='label'/>
        </form></div>
</td>
</tr>
</table>
<table width='100%'><tr><td align='center'><span id='secondtext'>Your search for the keyword '$x' yielded no result</span></td></tr></table>" ;
}
while($rowlabel=mysql_fetch_assoc($resultlabel))
		{extract($rowlabel);
		echo "<table style='float:left; margin:7px 15px'><tr><td><form method='get' action='ekiy87t4wfszz.php'><input type='submit' name='label' value='$labelName' style='background-image:url(labelsimg/$labelPic); font-size:0px; background-size:cover; background-position:center; background-repeat:no-repeat; border:none; height:155px; width:155px; cursor: pointer; background-color:#222; border-radius:0px'></button></form>
		</td></tr><tr><td align='center'>
		<span class='thirdtextWyt'>"; 
		echo substr_replace($labelName,'',25);
		echo"</span></td></tr></table>";
	}
}




if ($_GET['source']=='blog'){
		$queryactivities = "SELECT * FROM activities WHERE 
		activityName LIKE '%".$word1."%' OR activityName LIKE '%".$word2."%' OR activityName LIKE '%".$word3."%' OR activityName LIKE '%".$word4."%' OR activityName LIKE '%".$word5."%' OR activityName LIKE '%".$word6."%' OR activityName LIKE '%".$word7."%' OR activityName LIKE '%".$word8."%'  
		
		
		OR activityInfo LIKE '%".$word1."%' OR activityInfo LIKE '%".$word2."%' OR activityInfo LIKE '%".$word3."%' OR activityInfo LIKE '%".$word4."%' OR activityInfo LIKE '%".$word5."%' OR activityInfo LIKE '%".$word6."%' OR activityInfo LIKE '%".$word7."%' OR activityInfo LIKE '%".$word8."%'
		
		
		OR activityDate LIKE '%".$word1."%' OR activityDate LIKE '%".$word2."%' OR activityDate LIKE '%".$word3."%' OR activityDate LIKE '%".$word4."%' OR activityDate LIKE '%".$word5."%' OR activityDate LIKE '%".$word6."%' OR activityDate LIKE '%".$word7."%' OR activityDate LIKE '%".$word8."%' ORDER BY activityDate DESC LIMIT 5
		";

		$resultactivities = mysql_query($queryactivities, $cxn)
			or die("result no work activities");
if (mysql_num_rows($resultactivities)>0)
	{?>
<table width="100%"><tr height="20px"><td>
<table width="100%"><tr><td>
<span id="secondtext">
&nbsp;blog
</span>
</td><td align="right">
<div style="background-color:#222; border-radius:5px; padding:0px 5px 0px 0px; width:215px">
<form action='lvrgtj4vu58un.php' method='GET'>
		<input class='search' type='text' pattern="[A-Z a-z:-_]{3,}" name='keyword' required  maxlength='50' placeholder="search" value="<?php echo $x ?>"/>
        <input type="submit" value="" style='background:url(images/srch.jpg) center no-repeat; border:none; background-size:contain; height:20px; width:20px; cursor:pointer; vertical-align:middle; background-color:#222' />
        <input type='hidden' name='source' value='blog'/>
        </form></div>
</td></tr></table>


</td></tr><tr><td style="padding:5px 0px 0px 23px;"><?php }
else
{echo "
	<table width='100%'>
<tr>
<td>
<span id='secondtext'>
Blog
</span>
</td>
<td>

</td>
<td align='right'>
<div style='background-color:#222; border-radius:5px; padding:0px 5px 0px 0px; width:215px'>
<form action='lvrgtj4vu58un.php' method='GET'>
		<input class='search' type='text' pattern='[A-Z a-z:-_]{3,}' name='keyword' required  maxlength='50' placeholder='search' value='$x'/>
        <input type='submit' value='' style='background:url(images/srch.jpg) center no-repeat; border:none; background-size:contain; height:20px; width:20px; cursor:pointer; vertical-align:middle; background-color:#222' />
		<input type='hidden' name='source' value='blog'/>
        </form></div>
</td>
</tr>
</table>
<table width='100%'><tr><td align='center'><span id='secondtext'>Your search for the keyword '$x' yielded no result</span></td></tr></table>" ;
}
while($rowactivities=mysql_fetch_assoc($resultactivities))
		{extract($rowactivities);
	echo"<table width='750px' style='margin:10px 0px; padding:5px 5px;'><tr class='blog' bgcolor='#222' height='62px'><td style='padding:0px 15px;' width='90%'>
<form action='c45uy568nnv.php' method='get'>
<input type='submit' name='activity' value='$activityName' style='background:url() center no-repeat; color:#FFF; border:none; background-size:contain; font-size:18px; width:100%; text-align:left; cursor:pointer; vertical-align:middle; background-color:#222' /></form>
</td><td align='right' valign='top' id='dateStamp1'style='padding:0px 15px;'>";
if ($activityDay<10) {echo "0$activityDay";}else {echo $activityDay;} echo "<span id='dateStamp2'>"; if ($activityMonth<10) {echo "0$dateMonth";}else {echo $activityMonth;}echo"</td>
</tr><tr><td bgcolor='#555' style='background:url(activitiesimg/$activityPic) center no-repeat; background-size:cover' colspan='2'></td></tr></table>";}
}}?>
<script>
window.onload = function() {
  	top.document.getElementById('title1').innerHTML='Search';
	top.document.getElementById('description').content='Search for Nigerian music, people, labels and news';
	top.document.getElementById('keywords').content='Nigerian Music,  Artist, label, song, news, search';
};
</script>
</body>
</html>