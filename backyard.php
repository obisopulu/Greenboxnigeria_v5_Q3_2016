<?php include("rab_dbcon.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

	<link href='images/favicon.ico' type='image/x-icon' rel='shortcut icon'/>
	<link href='back.css' rel='stylesheet' type='text/css' />
    
	<script src='jquery.js'></script>	
	<script src='mediaelement-and-player.min.js'></script>
	<link rel='stylesheet' href='mediaelementplayer.min.css' />
<title>The Cockpit</title>
</head>

<body>

<?php if ($_POST['login'] != 'Login'){ ?><span style="background-color:262626">
		<form method='POST' action='backyard.php'>
		<table align='center' bgcolor='#222' height="500px"><tr><td colspan="2">
        <input type='submit' value='' style='background:url(images/gid.jpg) center no-repeat; background-size:100% 100%; background-repeat:no-repeat; border:none; height:200px; width:200px; cursor: pointer; background-color:#232323; color:#FFF'/>
        </td></tr><tr>
		<td style='padding:5px; font-size:12px;'>
        Username
        </td><td>
		<input size='14' type='text' name='labelName' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td></tr><tr><td style='padding:5px; font-size:12px;'>
        Password
        </td><td>
		<input size='14' type='password' name='labelOwner' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td></tr><tr><td colspan="2" align="right">
		<input name='login' type='submit' value='Login' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px; width:100%'>
		</td>
		</tr></table>
		</form></span>
<?php }
	elseif($_POST['login'] == 'Login'){
		if($_POST['labelName'] == 'madu' and $_POST['labelOwner'] == 'perfect101')
		{?>
<table bgcolor="#222" id='addmusic'>
<tr>
<td>
<button onClick="iframe('backaddmusic.php')" style='border:none;background-color:#FFF; color:#222; cursor:pointer; height:50px'>+Music</button>
</td>
<td>
<button onClick="iframe('backaddperson.php')" style='border:none;background-color:#FFF; color:#222; cursor:pointer; height:50px'>+Person</button>
</td>
<td>
<button onClick="iframe('backaddlabel.php')" style='border:none;background-color:#FFF; color:#222; cursor:pointer; height:50px'>+Label</button>
</td>
<td>
<button onClick="iframe('backaddblog.php')" style='border:none;background-color:#FFF; color:#222; cursor:pointer; height:50px'>+Article</button>
</td>
<td>
<button onClick="close_option('addmusic')" style='background-image:url(images/backdelete.jpg); background-size:contain; 
background-position:bottom; background-repeat:no-repeat; border:none; height:20px; 
width:20px; cursor:pointer; background-color:#262626'></button>
</td>
</tr>
</table>
<table bgcolor="#222" id='editmusic'>
<tr>
<td>
<button onClick="iframe('backeditmusic.php')" style='border:none;background-color:#FFF; color:#222; cursor:pointer; height:50px'>^Music</button>
</td>
<td>
<button onClick="iframe('backeditperson.php')" style='border:none;background-color:#FFF; color:#222; cursor:pointer; height:50px'>^Person</button>
</td>
<td>
<button onClick="iframe('backeditlabel.php')" style='border:none;background-color:#FFF; color:#222; cursor:pointer; height:50px'>^Label</button>
</td>
<td>
<button onClick="iframe('backeditblog.php')" style='border:none;background-color:#FFF; color:#222; cursor:pointer; height:50px'>^Article</button>
</td>
<td>
<button onClick="close_option('editmusic')" style='background-image:url(images/backdelete.jpg); background-size:contain; 
background-position:bottom; background-repeat:no-repeat; border:none; height:20px; 
width:20px; cursor:pointer; background-color:#262626'></button>
</td>
</tr>
</table>

<table>
<tr>
<td>

<table width="50px" bgcolor="#222" height="650px">
<tr valign="top">
<td>
<a href="library.php" target="_blank"><input type='submit' value='' style='font-size:18px; text-align:left; vertical-align:text-bottom; background:url(images/gid.jpg) center no-repeat; background-size:100% 100%; background-repeat:no-repeat; border:none; height:50px; width:50px; cursor: pointer; background-color:#232323; color:#FFF'/></a>
</td>
</tr>
<tr>
<td>
<input type='submit' value='' style='font-size:18px; text-align:left; vertical-align:text-bottom; background:url(images/backhome.jpg) center no-repeat; background-size:20px 20px; background-repeat:no-repeat; border:none; height:50px; width:50px; cursor: pointer; background-color:#232323; color:#FFF' onClick="iframe('backhome.php')"/>
</td>
</tr>
<tr>
<td>
<input type='submit' value='' style='font-size:18px; text-align:left; background:url(images/backmusic.jpg) center no-repeat; background-size:20px 20px; background-repeat:no-repeat; border:none; height:50px; width:50px; cursor: pointer; background-color:#232323; color:#FFF' onClick="iframe('backmusic.php')"/>
</td>
</tr>
<tr valign="bottom">
<td>
<input type='submit' value='' style='font-size:18px; text-align:left; background:url(images/backpeople.jpg) center no-repeat; background-size:20px 20px; background-repeat:no-repeat; border:none; height:50px; width:50px; cursor: pointer; background-color:#232323; color:#FFF;' onClick="iframe('backpeople.php')"/>
</td><!--- nav --->
</tr>
<tr>
<td>
<input type='submit' value='' style='font-size:18px; text-align:left; background:url(images/backlabels.jpg) center no-repeat; background-size:20px 20px; background-repeat:no-repeat; border:none; height:50px; width:50px; cursor: pointer; background-color:#232323; color:#FFF' onClick="iframe('backlabels.php')"/>
</td>
</tr>
<tr>
<td>
<input type='submit' value='' style='font-size:18px; text-align:left; background:url(images/backblog.jpg) center no-repeat; background-size:20px 20px; background-repeat:no-repeat; border:none; height:50px; width:50px; cursor: pointer; background-color:#232323; color:#FFF' onClick="iframe('backblog.php')"/>
</td>
</tr>
<tr>
<td>
<input type='submit' value='' style='font-size:18px; text-align:left; background:url(images/backadd.jpg) center no-repeat; background-size:20px 20px; background-repeat:no-repeat; border:none; height:50px; width:50px; cursor: pointer; background-color:#232323; color:#FFF' onClick="open_option('addmusic')"/>
</td>
</tr>
<tr valign="bottom">
<td>
<input type='submit' value='' style='font-size:18px; text-align:left; background:url(images/backupdate.jpg) center no-repeat; background-size:20px 20px; background-repeat:no-repeat; border:none; height:50px; width:50px; cursor: pointer; background-color:#232323; color:#FFF;' onClick="open_option('editmusic')"/>
</td><!--- nav --->
</tr>
<tr valign="bottom">
<td>
<input type='submit' value='' style='font-size:18px; text-align:left; background:url(images/backdelete.jpg) center no-repeat; background-size:20px 20px; background-repeat:no-repeat; border:none; height:50px; width:50px; cursor: pointer; background-color:#232323; color:#FFF;' onClick=""/>
</td><!--- nav --->
</tr>
<tr valign="bottom" height="auto">
<td>
</td><!--- nav --->
</tr>
<tr valign="bottom">
<td>
<input type='submit' value='' style='font-size:18px; text-align:left; background:url(images/backquery.jpg) center no-repeat; background-size:50px 50px; background-repeat:no-repeat; border:none; height:50px; width:50px; cursor: pointer; background-color:#232323; color:#FFF;' onClick=""/>
</td><!--- nav --->
</tr>
</table>

</td>
<td width='100%' bgcolor="#222">
<iframe height='650px'  marginheight='0px' marginwidth='0px' scrolling='yes' src='backhome.php' width='100%' frameborder='0' id="iframe">
</iframe>
</td>
<td width="200px">

<table><tr><td>
<!--            Player             -->
<!--            Player             -->
<!--            Player             -->
<table width='100%'><tr align='center'><td height="30px">
<table><tr><td>
<?php $query = 'SELECT * FROM songs ORDER BY Rand() LIMIT 1'; $result = mysql_query($query, $cxn) or die("result no work"); extract($row=mysql_fetch_assoc($result));?>
<button id='art'style='background:url(songsimg/<?php echo $songArt; ?>) center no-repeat; background-size:contain; border:none; height:80px; width:80px; cursor:default;'></button>
</td>
<td width='100%'><table width="100%"><tr><td>
<span class='thirdtext' id='album'><?php echo substr_replace($songAlbum,'',15); ?></span>
</td></tr>
<tr><td>
<span class='thirdtext' id='producer'><?php echo substr_replace($songProducer,'',15); ?></span>
</td></tr>
<tr><td>
<span class='thirdtextWyt' id='title'><?php echo substr_replace($songTitle,'',15); ?></span>
</td></tr>
<tr><td>
<marquee behavior='scroll' direction='left' scrollamount='3'><span class='thirdtextWyt' id='artist'><?php echo $songArtist; ?></span> <span class='thirdtext' id='artistFt'><?php if ($songArtistFt != '') {echo " Ft ".$songArtistFt;} ?></span> </marquee>
</td></tr></table>
<tr><td colspan="2">
</div>
<audio id='player2' src='<?php echo "songs/".$songURL; ?>' type='audio/mp3' controls='controls'>	
</audio>	
</td></tr></table>
<!--            Player             -->
<!--            Player             -->
<!--            Player             -->
Top Downloads
</td>
</tr>
<tr>
<td>
<?php
$query = 'SELECT * FROM songs ORDER BY RAND() LIMIT 8';
$result3 = mysql_query($query, $cxn)
	or die('result no work');
while($row=mysql_fetch_assoc($result3))
	{
    	extract($row);
		echo "<div>
		<table width='100%'><tr><td>
		<button style='background-image:url(songsimg/";echo $songArt; echo "); background-size:contain; background-position:center; background-repeat:no-repeat; border:none; height:50px; width:50px; cursor:default; background-color:#363636'></button>
		</td>
		<td width='100%'>
		<table width='100%'><tr><td title='$songTitle'>
		<span class='thirdtextWyt'>";
		echo substr_replace($songTitle,'',15);
		echo "</span>
		</td><td align='right'>
		<img src='images/play.jpg' title='Play' style='border:none; height:10px; width:10px; cursor:pointer;' 
		onClick='playTop("; ?>"<?php echo substr_replace($songTitle,'',15); ?>","<?php echo "songs/".$songURL; ?>","<?php echo "songsimg/".$songArt; ?>","<?php echo substr_replace($songArtist,'',15); ?>","<?php echo substr_replace($songArtistFt,'',15); ?>","<?php echo substr_replace($songProducer,'',15); ?>",
		"<?php echo $songAlbum; ?>"
		<?php echo ")' "; ?><?php echo ">
		</td>
		</tr><tr>
		<td c	olspan='2'>
		<span class='thirdtextWyt' title='$songTitle'>";
		echo substr_replace($songArtist,'',15);
		echo "</span>
		</td></tr></table>
		</td></tr></table>
		</div>";
		$counter ++;
	}
		?>
</td></tr></table>

</td></tr></table>
<table width='100%' height='50px'><tr><td align='left' style='padding:10px 0px'>
<span class='thirdtext'>
© 2015 Renegade
</span>
</td></tr></table>
</td></tr></table>

<script>
$('audio,video').mediaelementplayer();

function blog()
	{
		document.getElementById('iframe').src='blog.php';
	}
function playTop(title, url, art,  artist, artistft, producer, album)
	{
		document.getElementById('player2').src= url;
		document.getElementById('player2').autoplay = true;
		document.getElementById('art').style.background = 'url('+art+') center no-repeat';
		document.getElementById('art').style.backgroundSize = 'contain'
		document.getElementById('title').innerHTML = title;
		document.getElementById('artist').innerHTML = artist;
		document.getElementById('artistFt').innerHTML = 'Ft ' + artistft;
		document.getElementById('producer').innerHTML = producer;
		document.getElementById('album').innerHTML = album;
	}
function iframe(x)
	{
		document.getElementById('iframe').src= x;
	}
function open_option(x) 
{
	document.getElementById(x).style.visibility = "visible";	
}
function close_option(x) 
{
	document.getElementById(x).style.visibility = "hidden";	
}
</script>
<?php }}
else{echo'';
}?>
</body>
</html>