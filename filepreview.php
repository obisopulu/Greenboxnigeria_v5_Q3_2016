<?php 
include('top.php');
extract($_GET); 
extract($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="front.css" rel="stylesheet" type="text/css" />
<title>File Preview</title>
</head>

<body>
<?php include_once("analyticstracking.php"); 
$Y = date('Y');
$sql2 = mysql_query("select * from songs where songURL = '$songURL'") or die('xxx');
while($row2 = mysql_fetch_array($sql2))
extract($row2);

$sql = mysql_query("select * from plays where playSongID = '$songID'") or die('xxx');
$plays = mysql_num_rows($sql);

$sqls = mysql_query("select * from copy where copySongID = '$songID'") or die('xxx');
$copies = mysql_num_rows($sqls);
?>
<table align="center" width="100%" height="500px"><tr valign="middle">
<td width="30%" class='thirdtext' align="center">
<button style='background-image:url(songsimg/<?php echo $songArt ?>); background-size:cover; background-position:center; background-repeat:no-repeat; border:none; height:250px; width:250px; cursor: pointer; background-color:#222; border-radius:0px'></button><br/>
<?php 

echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:20px; width:20px; cursor: default; background-color:#222;'></button> ";
echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:20px; width:20px; cursor: default; background-color:#222;'></button> ";
if ($songRating > 2){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:20px; width:20px; cursor: default; background-color:#222;'></button> ";}
if ($songRating > 3){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:20px; width:20px; cursor: default; background-color:#222;'></button> ";}
if ($songRating > 4){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:20px; width:20px; cursor: default; background-color:#222;'></button> ";} 
?><br/>

<table align='center' width='100%'><tr class='thirdtext'>
<td width='250px' style='background-color:#222;' align='center'>Downloads<span style='font-size:2em; color:#FFF'><br/><?php echo $songDownload ?></span></td>
<td width='250px' style='background-color:#222;' align='center'>Plays<span style='font-size:2em; color:#FFF'><br/><?php echo $plays ?></span></td>
<td width='250px' style='background-color:#222;' align='center'>copies<span style='font-size:2em; color:#FFF'><br/><?php echo $copies ?></span></td>
</tr></table>

</td><td width="2%"></td>
<td width="auto">

<?php 
echo "Title				<span style='font-size:1.5em; color:#FFF'>: $songTitle</span>
<br/><br/>Artist			<span style='font-size:1.5em; color:#FFF'>: $songArtist</span>";
if (trim($songArtistFt) != '') echo"<br/><br/>Featured		<span style='font-size:1.5em; color:#FFF'>: $songArtistFt</span>";
if (trim($songAlbum) != '') echo"<br/><br/>Album			<span style='font-size:1.5em; color:#FFF'>: $songAlbum</span>";
if (trim($songProducer) != '') echo"<br/><br/>Producer		<span style='font-size:1.5em; color:#FFF'>: $songProducer</span>";
if (trim($songBeatmaker) != '') echo"<br/><br/>Beatmaker	<span style='font-size:1.5em; color:#FFF'>: $songBeatmaker</span>";
if (trim($songLenght) != '') {echo"<br/><br/>Lenght			<span style='font-size:1.5em; color:#FFF'>:"; $x = round($songLenght/60); $y = $songLenght%60; echo" $x"."mins $y"."secs</span>";}
if (trim($songSize) != '') {echo"<br/><br/>Size				<span style='font-size:1.5em; color:#FFF'>: "; echo number_format($songSize/1024) ."kb</span>";}
if (trim($songGenre) != '') echo"<br/><br/>Genre			<span style='font-size:1.5em; color:#FFF'>: $songGenre</span>";
if (trim($songYear) != '') echo"<br/><br/>Year				<span style='font-size:1.5em; color:#FFF'>: $songYear</span>";
if (trim($songLanguage) != '') echo"<br/><br/>Language		<span style='font-size:1.5em; color:#FFF'>: $songLanguage</span>
";?>

</td><td width="10%">
<button title='Play' style='font-size:0px; background:url(images/mobplay.png) center no-repeat; border:none; background-size:cover; width:40px; height:40px; cursor:pointer; background-color:#222; font-size:0px' 
		onClick="playTop('<?php echo substr_replace($songTitle,'',15); ?>','<?php echo "songs/".$songURL; ?>','<?php echo "songsimg/".$songArt; ?>','<?php echo substr_replace($songArtist,'',15); ?>','<?php echo substr_replace($songArtistFt,'',15); ?>','<?php echo substr_replace($songProducer,'',15); ?>','<?php echo $songAlbum; ?>','<?php echo $songID; ?>')"></button>
 <br/><br/>
        <button id='demo<?php echo $songID?>' onclick="copyToClipboard(document.getElementById('demo<?php echo $songID ?>').innerHTML, '<?php echo $songID ?>')"style='font-size:0px; background:url(images/mobcopy.png) center no-repeat; border:none; background-size:cover; width:40px; height:40px; cursor:pointer; background-color:#222; font-size:0px' title='copy file url'>http://www.gbngr.com/archive/track-<?php echo $songURL ?></button>
<br/><br/>
<form action='stats.php' method='post' target="_blank">
<input type='submit' value='' onclick style='background:url(images/mobdownload.png) center no-repeat; border:none; background-size:cover; width:40px; height:40px; cursor:pointer; background-color:#222' title='Download'/><input type='hidden' name='songID' value='<?php echo $songID ?>'  onClick="window.location.reload()"/></form>
</td></tr></table>
<script>
function playTop(title, url, art,  artist, artistft, producer, album, id)
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
		top.document.getElementById('artist').innerHTML = "<marquee behavior='scroll' direction='left' scrollamount='3'><span class='thirdtextWyt'>"+artist+" </span> Ft <span class='thirdtext'>"+artistft+"</span> </marquee>";
								}
		else{
			top.document.getElementById('artist').innerHTML = "<span class='thirdtextWyt'>"+artist+"</span>";
		}
		top.document.getElementById('producer').innerHTML = producer;
		top.document.getElementById('album').innerHTML = album;
		top.document.getElementById("play").src = "stats.php?play="+id+"+";
		window.location.reload()
	}
function copyToClipboard(text, id) {
	top.document.getElementById("play").src = "stats.php?copy=music&musicID="+id;
    window.prompt("Copy to clipboard: Ctrl+C, Enter", text);
	window.location.reload()
  }
window.onload = function() {
  	top.document.getElementById('title1').innerHTML='<?php echo $songArtist.' - '.$songTitle ?>- streaming live via Greenbox Nigeria';
	top.document.getElementById('description').content='Preview <?php echo $songTitle." By ".$songArtist ?>';
	top.document.getElementById('keywords').content='latest , fresh, new, Nigerian music, Nigerian songs, Nigerian tracks';
};
</script>
</body>
</html>