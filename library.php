<?php include("rab_dbcon.php");
$detect = new Mobile_Detect();


if ($detect->isMobile()){

$a = $_SERVER[REQUEST_URI];

if (strpos($a,'track-') !== false) {
	$a = str_replace('/archive/track-', '../home.php?1=preview.php?songURL=', $a);
	header("Location: $a");
}
if (strpos($a,'person-') !== false) {
	$a = str_replace('/archive/person-', '../home.php?1=vghdtywtrey.php?person=', $a);
	header("Location: $a");
}
if (strpos($a,'label-') !== false) {
	$a = str_replace('/archive/label-', '../home.php?1=rgcgtrdstyfu.php?label=', $a);
	header("Location: $a");
}
if (strpos($a,'article-') !== false) {
	$a = str_replace('/archive/article-', '../home.php?1=pjhygfyfjhb.php?article=', $a);
	header("Location: $a");
}
	
$a = str_replace('library', 'home', $a);
if (strpos($a,'filepreview') !== false) {
	$a = str_replace('filepreview', 'preview', $a);
	header("Location: preview.php");
}
if (strpos($a,'agbgv3487ty') !== false) {
    $a = str_replace('agbgv3487ty', 'nfdfjhvffyuxd', $a);
}
if (strpos($a,'b6yue4y54yu') !== false) {
    $a = str_replace('b6yue4y54yu', 'ogftydfytgdj', $a);
}
if (strpos($a,'c45uy568nnv') !== false) {
    $a = str_replace('c45uy568nnv', 'pjhygfyfjhb', $a);
}
if (strpos($a,'dvshnj7m66r') !== false) {
    $a = str_replace('dvshnj7m66r', 'qhgfctydhjvh', $a);
}
if (strpos($a,'index') !== false) {
    $a = str_replace('index', 'splash', $a);
}
if (strpos($a,'ekiy87t4wfszz') !== false) {
    $a = str_replace('ekiy87t4wfszz', 'rgcgtrdstyfu', $a);
}
if (strpos($a,'fvmkiyo87imr') !== false) {
    $a = str_replace('fvmkiyo87imr', 'scmbkhiolljhn', $a);
}
if (strpos($a,'hgvrtw45tvw') !== false) {
    $a = str_replace('hgvrtw45tvw', 'tdrs5rtytuh', $a);
}
if (strpos($a,'ive5twvbtb5s') !== false) {
    $a = str_replace('ive5twvbtb5s', 'qhgfctydhjvh', $a);
}
if (strpos($a,'jergv58u8v49') !== false) {
    $a = str_replace('jergv58u8v49', 'umhjfktdrju', $a);
}
if (strpos($a,'kvrghwi58y9o') !== false) {
    $a = str_replace('kvrghwi58y9o', 'vghdtywtrey', $a);
}
if (strpos($a,'lvrgtj4vu58un') !== false) {
    $a = str_replace('lvrgtj4vu58un', 'wghfdjetyjuj', $a);
}
if (strpos($a,'splash') !== false) {
	header("Location: splash");
}
if (strpos($a,'home') !== false) {
	header("Location: home.php");
}
header("Location: $a");
	}
else{

$a = $_SERVER[REQUEST_URI];
if (strpos($a,'track-') !== false) {
	$a = str_replace('/archive/track-', '../library.php?1=filepreview.php?songURL=', $a);
	header("Location: $a");
}
if (strpos($a,'person-') !== false) {
	$a = str_replace('/archive/person-', '../library.php?1=kvrghwi58y9o.php?person=', $a);
	header("Location: $a");
}
if (strpos($a,'label-') !== false) {
	$a = str_replace('/archive/label-', '../library.php?1=ekiy87t4wfszz.php?label=', $a);
	header("Location: $a");
}
if (strpos($a,'article-') !== false) {
	$a = str_replace('/archive/article-', '../library.php?1=c45uy568nnv.php?article=', $a);
	header("Location: $a");
}
} 

?>
<!DOCTYPE html>
<html>
<head>
<title id='title1'>Greenbox Library</title>
<meta charset="utf-8" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon" />
<meta name="viewport" content="user-scalable=no,maximum-scale=1" />
<meta name="MobileOptimized" content="width" />
<meta id='description' name="description" content="Feel the Nigerian music industry and what she has to offer" />
<meta name="HandheldFriendly" content="true" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta id='keywords' name="keywords" content="Nigerian Music,  Artist, label, song, news" />
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta name="viewport" content="width=device-width, user-scalable=no">
<link href='../front.css' rel='stylesheet' type='text/css' />
<link rel='stylesheet' href='../mediaelementplayer.min.css' />
<script src='../jquery.js'></script>	
<script src='../mediaelement-and-player.min.js'></script>
</head>
<body>
<?php include_once("../analyticstracking.php") ?>
<iframe height='500px'  marginheight='0px' marginwidth='0px' scrolling='yes' src='' width='1000' frameborder='0' id="story"></iframe><iframe height='0px'  marginheight='0px' marginwidth='0px' scrolling='yes' src='stats.php' width='0px' frameborder='0' id="play">
</iframe>
<table width='1200px'  align='center'>
<tr valign='middle'>
<td>

<table width='100%'><tr><td>
<span id='firsttext'>Library</span>
</td>
<td align='right'>
<button style='background-image:url(images/gid.jpg); background-size:contain; background-position:center; background-repeat:no-repeat; border:none; height:50px; width:50px; cursor:default; background-color:#222'></button>
</td></tr></table>

</td>
</tr>
<tr>
<td>
<!--    	3 Batch Hatch        -->
<table width='100%'>
<tr valign="top">
<td width="200px">

<table width="100%" height="500px"><tr><td>

<table width="100%">
<tr>
<td>
<input type='submit' value='&nbsp;&nbsp;&nbsp;Home' style='font-size:18px; text-align:left; vertical-align:text-bottom; background:url(images/home.jpg) left no-repeat; background-size:15px 15px; background-repeat:no-repeat; border:none; height:44px; width:200px; cursor: pointer; background-color:#232323; color:#FFF' onClick="iframe('dvshnj7m66r.php')"/>
</td>
</tr>
<tr>
<td>
<input type='submit' value='&nbsp;&nbsp;&nbsp;Music' style='font-size:18px; text-align:left; background:url(images/music.jpg) left no-repeat; background-size:15px 15px; background-repeat:no-repeat; border:none; height:44px; width:200px; cursor: pointer; background-color:#232323; color:#FFF' onClick="iframe('ive5twvbtb5s.php')"/>
</td>
</tr>
<tr>
<td>
<input type='submit' value='&nbsp;&nbsp;&nbsp;People' style='font-size:18px; text-align:left; background:url(images/people.jpg) left no-repeat; background-size:15px 15px; background-repeat:no-repeat; border:none; height:44px; width:200px; cursor: pointer; background-color:#232323; color:#FFF' onClick="iframe('jergv58u8v49.php')"/>
</td>
</tr>
<tr>
<td>
<input type='submit' value='&nbsp;&nbsp;&nbsp;Labels' style='font-size:18px; text-align:left; background:url(images/labels.jpg) left no-repeat; background-size:15px 15px; background-repeat:no-repeat; border:none; height:44px; width:200px; cursor: pointer; background-color:#232323; color:#FFF' onClick="iframe('fvmkiyo87imr.php')"/>
</td>
</tr>
<tr>
<td>
<input type='submit' value='&nbsp;&nbsp;&nbsp;Blog' style='font-size:18px; text-align:left; background:url(images/blog.jpg) left no-repeat; background-size:15px 15px; background-repeat:no-repeat; border:none; height:44px; width:200px; cursor: pointer; background-color:#232323; color:#FFF' onClick="iframe('b6yue4y54yu.php')"/>
</td>
</tr>
</table> <!-- Nav -->

</td></tr><tr>
<td width="100%">

</td>
</tr><tr valign="bottom">
<td>
<input type='submit' value='&nbsp;&nbsp;&nbsp;About' style='font-size:18px; text-align:left; background:url(images/about.jpg) left no-repeat; background-size:15px 15px; background-repeat:no-repeat; border:none; height:44px; width:200px; cursor: pointer; background-color:#232323; color:#FFF;' onClick="iframe('agbgv3487ty.php')"/>
© 2016 Renegade</span>
</td>
</tr>
</table>

</td>
<td valign='top'>
<iframe height='500px'  marginheight='0px' marginwidth='0px' scrolling='no' src='<?php
if ($_GET['1'] == ''){echo 'dvshnj7m66r.php';}
else{
$a = $_GET['1'];
echo $a;}
?>' width='800' frameborder='0' id="iframe">
</iframe>

</td>


<td width='20px' valign="top">
<!--            Player             -->
<!--            Player             -->
<!--            Player             -->
<table width='100%'>
<tr align='center'>
<td height="2px">
</td>
</tr>
<tr align='center'>
<td>
<table><tr><td>
<?php $query = 'SELECT * FROM songs ORDER BY rand() LIMIT 1';

$result = mysql_query($query, $cxn)
	or die("result no work"); 
    extract($row=mysql_fetch_assoc($result));
?>
<button id='art'style='background:url(songsimg/<?php echo $songArt; ?>) center no-repeat; background-size:contain; border:none; height:80px; width:80px; cursor:default;'></button>
</td>
<td width='100%'>
<table width="100%"><tr><td>
<span class='thirdtext' id='album'><?php echo $songAlbum; ?></span>
</td></tr>
<tr><td>
<span class='thirdtext' id='producer'><?php echo $songProducer; ?></span>
</td></tr>
<tr><td>
<span class='thirdtextWyt' id='title'><?php echo $songTitle; ?></span>
</td></tr>
<tr><td id='artist'>
<?php if ($songArtistFt != '') {echo "<marquee behavior='scroll' direction='left' scrollamount='3'>";}?><span class='thirdtextWyt'><?php echo $songArtist; ?></span> </marquee>
</td></tr></table></td></tr></table>
</div>
<audio id='player2' src='<?php echo "songs/".$songURL; ?>' loop type='audio/mp3' controls='controls'>	
</audio>	
</td>
</tr>
<!--            Player             -->
<!--            Player             -->
<!--            Player             -->
<tr>
<td height='30px'>
Spinlist
</td>
</tr>
<tr>
<td>
<?php
$query = 'SELECT * FROM songs ORDER BY rand() LIMIT 3';
$counter =1;
$result3 = mysql_query($query, $cxn)
	or die('result no work');
while($row=mysql_fetch_assoc($result3))
	{
    	extract($row);
		echo "<div>
		<table><tr><td>
		<button style='background-image:url(songsimg/";echo $songArt; echo "); background-size:contain; background-position:center; background-repeat:no-repeat; border:none; height:50px; width:50px; cursor:default; background-color:#363636'></button>
		</td>
		<td width='100%'>
		<table width='100%'><tr><td title='$songTitle'>
		<span class='thirdtextWyt'>";
		echo $songTitle;
		echo "</span>
		</td><td align='right'>
		<img src='images/play.jpg' title='Play' style='border:none; height:10px; width:10px; cursor:pointer;' 
		onClick='playTop("; ?>"<?php echo $songTitle; ?>","<?php echo "songs/".$songURL; ?>","<?php echo "songsimg/".$songArt; ?>","<?php echo $songArtist; ?>","<?php echo $songArtistFt; ?>","<?php echo $songProducer; ?>",
		"<?php echo $songAlbum; ?>","<?php echo $songID; ?>"
		<?php echo ")' "; ?><?php echo ">
		</td>
		</tr><tr>
		<td c	olspan='2'>
		<span class='thirdtextWyt' title='$songTitle'>";
		echo $songArtist;
		echo "</span>
		</td></tr></table>
		</td></tr></table></form>
		</div>";
		if ($counter ==1 ){echo "<div><table style='background:url(images/"; if (!file_exists("images/homesponsor1.jpg")){echo 'bg.jpg';} else{echo 'homesponsor1.jpg';} echo ") left no-repeat;' height='50px' width='100%'><tr><td></td></tr></table></div>";}
		if ($counter ==2 ){echo "<div><table style='background:url(images/"; if (!file_exists("images/homesponsor2.jpg")){echo 'bg.jpg';} else{echo 'homesponsor2.jpg';} echo ") center no-repeat;' height='50px' width='100%'><tr><td></td></tr></table></div>";}
		$counter ++;
	}
		?>
</td>
</tr>
<tr>
<td height='30px'>
Latest Article
</td>
</tr>
<tr>
<td>
<div>
<table><tr><td>
<?php $query = 'SELECT * FROM activities ORDER BY activityDate DESC LIMIT 1';
$result3 = mysql_query($query, $cxn)
	or die("result no work");
	while($row=mysql_fetch_assoc($result3))
	extract($row); ?>

<button onClick="blog('<?php echo $activityName ?>')" style='background-image:url( <?php if ($activityPic=='') {echo "images/gid.jpg";}else{echo"activitiesimg/$activityPic";}?>); background-position:center; background-repeat:no-repeat; background-size:contain; border:none; height:50px; width:50px; cursor: pointer; background-color:#363636'></button>
</td>
<td width="100%">
<table width="100%"><tr><td align="right" width="100%" valign='top' id='dateStamp1'>
<?php if ($activityDay<10) {echo "0$activityDay";}else {echo $activityDay;} echo "<span id='dateStamp2'>"; if ($activityMonth<10) {echo "0$dateMonth";}else {echo $activityMonth;} ?>
</td></tr><tr><td>
<span class='thirdtextWyt'>
<?php echo $activityName; ?>
</span>
</td></tr></table></td></tr></table>
</div>


</td>
</tr>
</table>

</td>
</tr>
<tr>
<td>

</td>
</tr>
</table>
<script>
$('audio,video').mediaelementplayer();

function blog(x)
	{var x ='c45uy568nnv.php?article='+x;
		document.getElementById('iframe').src=x;
	}
function playTop(title, url, art,  artist, artistft, producer, album, id)
	{
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
	}
function iframe(x)
	{
		document.getElementById('iframe').src= x;
	}
function back()
	{
		window.location='backyard.php';
	}
</script>
</body>
</html>