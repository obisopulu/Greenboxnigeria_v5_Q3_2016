<?php 
include('top.php');
extract($_GET); 
extract($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="zfgyugewiugf.css" rel="stylesheet" type="text/css" />
<title>File Preview</title>
</head>

<body>
<?php include_once("analyticstracking.php"); 

$sql2 = mysql_query("select * from songs where songURL = '$songURL'") or die('xxx');
while($row2 = mysql_fetch_array($sql2))
extract($row2);

$sql = mysql_query("select * from plays where playSongID = '$songID'") or die('xxx');
$plays = mysql_num_rows($sql);

$sqls = mysql_query("select * from copy where copySongID = '$songID'") or die('xxx');
$copies = mysql_num_rows($sqls);

echo "<table width='100%' bgcolor='#121212' align='center'>
<tr><td align='center' class='thirdtext'><button style='background-image:url(songsimg/$songArt); background-size:cover; background-position:center; background-repeat:no-repeat; border:none; height:500px; width:500px; cursor: pointer; background-color:#222; border-radius:0px'></button>
</td></tr>
<tr><td align='center'>";

echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:60px; width:60px; cursor: default; background-color:#121212;'></button> ";
echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:60px; width:60px; cursor: default; background-color:#121212;'></button> ";
if ($songRating > 2){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:60px; width:60px; cursor: default; background-color:#121212;'></button> ";}
if ($songRating > 3){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:60px; width:60px; cursor: default; background-color:#121212;'></button> ";}
if ($songRating > 4){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:60px; width:60px; cursor: default; background-color:#121212;'></button> ";}
?>
</td></tr>
<tr><td>
<table align='center' width='100%'><tr height='250px' class='thirdtext'>

<td width='250px' style='background-color:#222;' align='center'>Plays<span style='font-size:1.7em; color:#FFF'><br/><?php echo $plays ?></span><br/>
<button title='Play' style='font-size:0px; background:url(images/mobplay.png) center no-repeat; border:none; background-size:cover; width:100px; height:100px; cursor:pointer; background-color:#222; font-size:0px' 
		onClick="play('<?php echo $songTitle; ?>','<?php echo "songs/".$songURL; ?>','<?php echo "songsimg/".$songArt; ?>','<?php echo $songArtist; ?>','<?php echo $songArtistFt; ?>','<?php echo $songProducer; ?>','<?php echo $songAlbum; ?>','<?php echo $songID; ?>')"></button>
 </td>
 
<td width='250px' style='background-color:#222;' align='center'>Copies<span style='font-size:1.7em; color:#FFF'><br/><?php echo $copies ?></span><br/><button id='demo<?php echo $songID?>' onclick="copyToClipboard(document.getElementById('demo<?php echo $songID ?>').innerHTML, '<?php echo $songID ?>')"style='font-size:0px; background:url(images/mobcopy.png) center no-repeat; border:none; background-size:cover; width:100px; height:100px; cursor:pointer; background-color:#222; font-size:0px' title='copy file url'>http://www.gbngr.com/archive/track-<?php echo $songURL ?></button>
</td>
        
<td width='250px' style='background-color:#222;' align='center'>Downloads<span style='font-size:1.7em; color:#FFF'><br/><?php echo $songDownload ?></span><br/><form action='stats.php?file=<?php echo $songURL?>' method='post' target="_blank">
<input type='submit' value='' onclick style='background:url(images/mobdownload.png) center no-repeat; border:none; background-size:cover; width:100px; height:100px; cursor:pointer; background-color:#222' title='Download'/><input type='hidden' name='songID' value='<?php echo $songID ?>'  onClick="window.location.reload()"/></form>
</td></tr></table>
</td></tr>

<?php echo "
<tr><td style='font-size:2.7em;'>
Title						<span style='font-size:1.7em; color:#FFF'><br/>$songTitle</span>
<br/>Artist			<span style='font-size:1.7em; color:#FFF'><br/>$songArtist</span>";
if (trim($songArtistFt) != '') echo"<br/>Featured		<span style='font-size:1.7em; color:#FFF'><br/>$songArtistFt</span>";
if (trim($songAlbum) != '') echo"<br/>Album			<span style='font-size:1.7em; color:#FFF'><br/>$songAlbum</span>";
if (trim($songProducer) != '') echo"<br/>Producer		<span style='font-size:1.7em; color:#FFF'><br/>$songProducer</span>";
if(trim($songProducer) != trim($songBeatmaker))
{
if (trim($songBeatmaker) != '') echo"<br/>Beatmaker	<span style='font-size:1.7em; color:#FFF'><br/>$songBeatmaker</span>";
}
#if (trim($songLenght) != '') {$x = round($songLenght/60); $y = $songLenght%60;
#if ($y >10)
#			 {echo "<br/>Lenght				<span style='font-size:1.7em; color:#FFF'><br/>$x:$y</span>";}
#       else
#			 {echo "<br/>Lenght				<span style='font-size:1.7em; color:#FFF'><br/>$x:0$y</span>";}
#}
#if (trim($songSize) != '') {echo"<br/>Size				<span style='font-size:1.5em; color:#FFF'><br/> "; echo number_format($songSize/1024) ."kb</span>";}
if (trim($songGenre) != '') echo"<br/>Genre			<span style='font-size:1.7em; color:#FFF'><br/>$songGenre</span>";
if (trim($songYear) != '') echo"<br/>Year				<span style='font-size:1.7em; color:#FFF'><br/>$songYear</span>";
if (trim($songLanguage) != '') echo"<br/>Language		<span style='font-size:1.7em; color:#FFF'><br/>$songLanguage</span>";
?>
</td></tr>
<tr><td height="150px"></td></tr></table>
<script>
function play(title, url, art,  artist, artistft, producer, album, id)
	{
  	top.document.getElementById('title1').innerHTML='<?php echo $songArtist.' - '.$songTitle ?>-  streaming live via Greenbox Nigeria';
	top.document.getElementById('description').content='Preview <?php echo $songTitle." By ".$songArtist ?>';
	top.document.getElementById('keywords').content='latest , fresh, new, Nigerian music, Nigerian songs, Nigerian tracks';
		top.document.getElementById('player2').src= url;
		top.document.getElementById('player2').autoplay = true;
		top.document.getElementById('art').style.background = 'url('+art+') center no-repeat';
		top.document.getElementById('art').style.backgroundSize = 'cover'
		top.document.getElementById('title').innerHTML = title;
		if (artistft != ''){
		top.document.getElementById('artist').innerHTML = "<marquee behavior='scroll' direction='left' scrollamount='15'>"+artist+" Ft "+artistft+"</marquee>";
								}
		else{
			top.document.getElementById('artist').innerHTML = artist;
		}
		top.document.getElementById('producer').innerHTML = producer;
		top.document.getElementById('album').innerHTML = album;
		top.document.getElementById("play").src = "stats.php?play="+id+"+";
	}
function copyToClipboard(text, id) {
	top.document.getElementById("play").src = "stats.php?copy=music&musicID="+id;
    window.prompt("Copy to clipboard: Ctrl+C, Enter", text);
	window.location.reload()
  }
window.onload = function() {
  	top.document.getElementById('title1').innerHTML='<?php echo $songArtist.' - '.$songTitle ?>-  streaming live via Greenbox Nigeria';
	top.document.getElementById('description').content='Preview <?php echo $songTitle." By ".$songArtist ?>';
	top.document.getElementById('keywords').content='latest , fresh, new, Nigerian music, Nigerian songs, Nigerian tracks';
};
</script>
</body>
</html>