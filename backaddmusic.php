<?php include("backtop.php");?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="back.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" style="position:fixed">
<tr height="50px"bgcolor="#111"><td><span id="secondtext">The Cockpit</span></td></tr>
</table>

<table align="center"><tr>
<tr height="50px"><td></td></tr>
</tr></table>

<table>
<tr>
<td>
<table height="500px" align="center"><tr><td>
<!-- //////////////////////////////////////Music drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<div style="float:left;">	<form><select name="songTitle" style="border:1px solid #FFF; background-color:#262626; color:#FFF; padding:5px">
							<option>song Title</option>
<?php 

	$sqlsongsT = 'SELECT DISTINCT songTitle FROM songs ORDER BY songTitle';
	$songsTResult = mysql_query($sqlsongsT, $cxn)
		or die("result no work");
while($rowsongsT=mysql_fetch_assoc($songsTResult))
	{extract($rowsongsT);
			echo "<option value='Title'>$songTitle</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////Music drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////Artist drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="songArtist" style="border:1px solid #FFF; background-color:#262626; color:#FFF; padding:5px">
							<option>Song Artist</option>
<?php 
	$sqlsongsA = 'SELECT DISTINCT songArtist FROM songs ORDER BY songArtist';
	$songsAResult = mysql_query($sqlsongsA, $cxn)
		or die("result no work");
while($rowsongsA=mysql_fetch_assoc($songsAResult))
	{extract($rowsongsA);
			echo "<option value='Title'>$songArtist</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////Artist drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////ArtistFT drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="$songArtistFt" style="border:1px solid #FFF; background-color:#262626; color:#FFF; padding:5px">
    							<option>song Artist Featured</option>
<?php 
	$sqlsongsAF = 'SELECT DISTINCT songArtistFt FROM songs ORDER BY songArtistFt';
	$songsAFResult = mysql_query($sqlsongsAF, $cxn)
		or die("result no work");
while($rowsongsAF=mysql_fetch_assoc($songsAFResult))
	{extract($rowsongsAF);
			if ($songArtistFt != '')echo "<option value='ArtistFT'>$songArtistFt</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////ArtistFT drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////Album drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="$songAlbum" style="border:1px solid #FFF; background-color:#262626; color:#FFF; padding:5px">
    							<option>song Album</option>
<?php 
	$sqlsongsAl = 'SELECT DISTINCT songAlbum FROM songs ORDER BY songAlbum';
	$songsAlResult = mysql_query($sqlsongsAl, $cxn)
		or die("result no work");
while($rowsongsAl=mysql_fetch_assoc($songsAlResult))
	{extract($rowsongsAl);
			if ($songAlbum != '')echo "<option value='Album'>$songAlbum</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////Album drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////Producer drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="$songProducer" style="border:1px solid #FFF; background-color:#262626; color:#FFF; padding:5px">
    							<option>song Producer</option>
<?php 
	$sqlsongsP = 'SELECT DISTINCT songProducer FROM songs ORDER BY songProducer';
	$songsPResult = mysql_query($sqlsongsP, $cxn)
		or die("result no work");
while($rowsongsP=mysql_fetch_assoc($songsPResult))
	{extract($rowsongsP);
			if ($songProducer != '')echo "<option value='Album'>$songProducer</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////Producer drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////Beatmaker drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="$songBeatmaker" style="border:1px solid #FFF; background-color:#262626; color:#FFF; padding:5px">
    							<option>song Beatmaker</option>
<?php 
	$sqlsongsB = 'SELECT DISTINCT songBeatmaker FROM songs ORDER BY songBeatmaker';
	$songsBResult = mysql_query($sqlsongsB, $cxn)
		or die("result no work");
while($rowsongsB=mysql_fetch_assoc($songsBResult))
	{extract($rowsongsB);
			if ($songBeatmaker != '')echo "<option value='Album'>$songBeatmaker</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////Beatmaker drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////Type drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="$songType" style="border:1px solid #FFF; background-color:#262626; color:#FFF; padding:5px">
    							<option>song Format</option>
<?php 
	$sqlsongsT = 'SELECT DISTINCT songType FROM songs ORDER BY songType';
	$songsTResult = mysql_query($sqlsongsT, $cxn)
		or die("result no work");
while($rowsongsT=mysql_fetch_assoc($songsTResult))
	{extract($rowsongsT);
			if ($songType != '')echo "<option value='Album'>$songType</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////Type drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////Genre drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="$songGenre" style="border:1px solid #FFF; background-color:#262626; color:#FFF; padding:5px">
    							<option>song Genre</option>
<?php 
	$sqlsongsG = 'SELECT DISTINCT songGenre FROM songs ORDER BY songGenre';
	$songsGResult = mysql_query($sqlsongsG, $cxn)
		or die("result no work");
while($rowsongsG=mysql_fetch_assoc($songsGResult))
	{extract($rowsongsG);
			if ($songGenre != '')echo "<option value='Album'>$songGenre</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////Genre drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////Language drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="$songLanguage" style="border:1px solid #FFF; background-color:#262626; color:#FFF; padding:5px">
    							<option>song Language</option>
<?php 
	$sqlsongsLg = 'SELECT DISTINCT songLanguage FROM songs ORDER BY songLanguage';
	$songsLgResult = mysql_query($sqlsongsLg, $cxn)
		or die("result no work");
while($rowsongsLg=mysql_fetch_assoc($songsLgResult))
	{extract($rowsongsLg);
			if ($songLanguage != '')echo "<option value='Album'>$songLanguage</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////Language drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td>
</tr>
</table>

</td>
<td>

<?php
if ($_POST['songTitle'] != '')
{
		$f_today = date("Ymd");
		$month = date("m");
		$day = date("d");
		$year = date("Y");
		$gbn = date("msi");
		$songType = $_FILES['musicFile']['type'];
		$songSize = $_FILES['musicFile']['size'];
		$_FILES['musicFile']['name'] = "gbn".$gbn."_".$_FILES['musicFile']['name'];
		move_uploaded_file($_FILES['musicFile']['tmp_name'], "songs/{$_FILES['musicFile']['name']}");
		move_uploaded_file($_FILES['artFile']['tmp_name'], "songsimg/{$_FILES['artFile']['name']}");
		$artFile = $_FILES['artFile']['name'];
		$musicFile = $_FILES['musicFile']['name'];
		$query = "INSERT INTO  songs ( songID ,songTitle ,songArtist ,songArtistFt ,songAlbum ,songArt ,songProducer ,songBeatmaker ,songLenght ,songType ,songSize ,songURL ,songGenre ,songTags ,songYear ,songLanguage ,songRating ,songdownload ,dateMonth ,dateDay ,dateYear ,dateUpdated )
VALUES ('' , '{$_POST['songTitle']}' , '{$_POST['songArtist']}' , '{$_POST['songArtistFt']}' ,
 '{$_POST['songAlbum']}' , '$artFile' ,  '{$_POST['songProducer']}' , '{$_POST['songBeatmaker']}' ,  '{$_POST['songLenght']}' , '$songType' , '$songSize' , '$musicFile' ,  '{$_POST['songGenre']}' ,  '{$_POST['songTags']}' , '{$_POST['songYear']}' ,  '{$_POST['songLanguage']}' , '{$_POST['songRating']}', '' ,'$month','$day','$year','$f_today')";
$result = mysql_query($query, $cxn)
	or die("result no work 10");
	echo "Song '{$_POST['songTitle']}' by {$_POST['songArtist']} has been uploaded";
include("sitemapGen.php");
}
else
{
echo"
<form action='backaddmusic.php' enctype='multipart/form-data' method='post'>
<table align='center'><tr>
<td style='padding:5px; font-size:12px; font-weight:bold'>
SongTitle(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='songTitle' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongArtist(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='songArtist' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongArtistFt(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='songArtistFt' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongAlbum(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='songAlbum' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongProducer(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='songProducer' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongBeatmaker(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='songBeatmaker' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongLenght(4)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='songLenght' maxlength='6' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongTags(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='songTags' maxlength='100' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongGenre(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='songGenre' maxlength='25' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongYear(4)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='songYear' maxlength='4' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongLanguage(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='songLanguage' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongRating(2)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='songRating' maxlength='2' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongfileUpload
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' name='musicFile' value='' type='file' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
ArtfileUpload
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input type='hidden' name='MAX_FILE_SIZE' value='10485760'><input required='required' name='artFile' type='file' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input name='upload' type='submit' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td>
</tr></table>
</form>";
}
?>
</td>
</tr>
</table>
</body>
</html>