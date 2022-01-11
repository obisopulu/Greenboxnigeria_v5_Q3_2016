<?php include('top.php');
$d=date('D');
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
	<link href="favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	<link href="zfgyugewiugf.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<table width="100%" style="background:url(images/<?php if (!file_exists("images/mobhomesponsor.jpg")){echo 'bg.jpg';} else{echo 'mobhomesponsor.jpg';}?>) center" height="500px">
<tr class='home'>
<td colspan="2" style="padding:30px 10px">
<span id="secondtext">Welcome to Greenbox Music</span>
<div class="thirdtextWyt">Your one-stop location for nigerian music</div>
</td>

</tr><tr height="300px"><td></td></tr>
</table>
<div class="thirdtextWyt"><?php echo $x ?></div>
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
		

echo"<div id='options$songID' style='visibility:hidden; height:0px'><tr><td align='center'><table width='100%'><tr height='100px'><td align='center'>
		<input type='submit' class='home' value='play' style='font-size:50px; font-weight:100; background:#292929; width:100%; border:none;' onClick='play("; ?>"<?php echo $songTitle; ?>","<?php echo "songs/".$songURL; ?>","<?php echo "songsimg/".$songArt; ?>","<?php echo $songArtist; ?>","<?php echo $songArtistFt; ?>","<?php echo $songProducer; ?>","<?php echo $songAlbum; ?>"<?php echo ")' "; ?><?php echo "/></td><td align='center'>
		<form action='stats.php' method='post' target='_blank'><input type='submit' class='home' style='font-size:50px; font-weight:100; background:#292929; width:100%; border:none;' value='download'/>
		<input type='hidden' name='songID' value='$songID' /></form></td>
		<td align='center'>
		<button value='copy' id='demo$songID'"?> onclick="copyToClipboard('http://www.gbngr.com/songs/<?php echo $songURL ?>', '<?php echo $songID ?>')"<?php echo " class='home' style='font-size:50px; font-weight:100; background:#292929; width:100%; border:none;' title='copy file url'>copy</button>
		</td></tr></table></td></tr></div>";
		if ($counter == '5') {echo "<table style='background:url(images/"; if (!file_exists("images/mobhomesponsor5.jpg")){echo 'bg.jpg';} else{echo 'mobhomesponsor5.jpg';} echo ") center' height='200px' width='100%'><tr><td></td></tr></table>";}
		if ($counter == '10') {echo "<table style='background:url(images/"; if (!file_exists("images/mobhomesponsor10.jpg")){echo 'bg.jpg';} else{echo 'mobhomesponsor10.jpg';} echo ") right' height='200px' width='100%'><tr><td></td></tr></table>";}
		if ($counter == '15') {echo "<table style='background:url(images/"; if (!file_exists("images/mobhomesponsor15.jpg")){echo 'bg.jpg';} else{echo 'mobhomesponsor15.jpg';} echo ") right' height='200px' width='100%'><tr><td></td></tr></table>";}
	$counter ++;} ?>
</table>
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