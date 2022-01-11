<?php include("rab_dbcon.php");

$a = $_SERVER[REQUEST_URI]; 
$detect = new Mobile_Detect();
if ($detect->isMobile()){}
else{
	if (strpos($a,'home') !== false) {
	$a = str_replace('home', 'library', $a);
	header("Location: $a");}
}


$query = 'SELECT * FROM songs ORDER BY rand() LIMIT 1';

$result = mysql_query($query, $cxn)
	or die("result no work"); 
    extract($row=mysql_fetch_assoc($result));
?>
<!DOCTYPE html>
<html>
<head>
<title id='title1'>The Archive</title>
<meta charset="utf-8" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon" />
<meta name="viewport" content="user-scalable=no"/>
<meta name="MobileOptimized" content="width" />
<meta id='description' name="description" content="Feel the Nigerian music industry and what she has to offer" />
<meta name="HandheldFriendly" content="true" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta id='keywords' name="keywords" content="Nigerian Music,  Artist, label, song, news" />
<link rel="canonical" href="http://www.greenboxnigeria.com/index.php" />
<link rel="shortlink" href="http://www.greenboxnigeria.com/library.php" />
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link href='images/favicon.ico' type='image/x-icon' rel='shortcut icon'/>
<link href='zfgyugewiugf.css' rel='stylesheet' type='text/css' />
	<script src='jquery.js'></script>	
	<script src='myewgfyugewygyugscdgcfyeguy.js'></script>
	<link rel='stylesheet' href='myebdvgekuvbgcfvjxbvhjdbsvjh.css' />
<meta name='Description' content='The Greenbox Splash Screen: New Songs Artist and Labels of the Nigerian Music Industry'>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<iframe height='0px'  marginheight='0px' marginwidth='0px' scrolling='yes' src='stats.php' width='0px' frameborder='0' id="play">
</iframe>
<table align="center" width='100%' bgcolor="#222" id='player' style="position:fixed; z-index:1; height:200px; visibility:hidden; top:0; border-bottom:thin solid #555;">
<tr height="500px" valign="bottom">
<td align="center" id='art' style='background:url(songsimg/<?php echo $songArt; ?>) center no-repeat; background-size:cover; background-color:#222'>

<table align="center" style=" background-color:background: rgb(0,0,0); background:rgba(0,0,0,.5);" width="100%" height="500px"><tr>
<td width='100%' class='thirdtext'>
<span id='album'><?php echo $songAlbum ?></span>
</td></tr>
<tr><td class='thirdtextWyt'>
<span id='producer'><?php echo $songProducer ?></span>
</td></tr>
<tr><td id='secondtext'>
<span id='title'><?php echo $songTitle ?></span>
</td></tr>
<tr class="thirdtextWyt"><td id='artist' class="thirdtextWyt">
<?php if ($songArtistFt != '') {echo "<marquee behavior='scroll' direction='left' scrollamount='15'>";}?><span><?php echo $songArtist; ?></span> <span><?php if ($songArtistFt != '') {echo " Ft ".$songArtistFt;} ?></span> </marquee>
</td></tr>
<tr valign="bottom"><td align="center">
<audio id='player2' src='<?php echo "songs/".$songURL; ?>' type='audio/mp3' controls='controls' loop></audio>
</td></tr>
</table>
</td></tr></table>


<table width="100%" >
<tr height="120px" valign="bottom" id="head"><td><span id='firsttext'>Library</span></td>
<td align="right">
<input type='submit' value='' style='font-size:18px; text-align:left; background:url(images/mobabout.jpg) left no-repeat; background-size:cover; border:none; height:125px; width:125px; background-color:#222; color:#FFF;' onClick="iframe('nfdfjhvffyuxd.php')"/>
</td>
</tr></table>

<iframe height='1500px'  marginheight='0px'  marginwidth='0px' scrolling='yes' src='<?php
if ($_GET['1'] == ''){echo "qhgfctydhjvh.php";}
else {echo $_GET['1'];}
?>' width='100%' frameborder='0' id="iframe">
<div align="center"  style="top:50%" id="loading">loading...</div>
</iframe>
<script>
function closeloading(){
	document.getElementById('loading').style.visibility = 'hidden';
}
</script>

<table width='100%' bgcolor="#222" style="position:fixed; z-index:1; padding:5px 20px; margin:; width:100%; height:150px; bottom:0px"><tr>
<td align='center'>
<input type='submit' value='' style='font-size:18px; text-align:left; vertical-align:text-bottom; background:url(images/mobhome.jpg) center no-repeat; background-size:cover; border:none; height:100px; width:100px; background-color:#232323; color:#FFF;' onClick="iframe('qhgfctydhjvh.php')"/>
</td>
<td align='center'>
<input type='submit' value='' style='font-size:18px; text-align:left; background:url(images/mobmusic.jpg) center no-repeat; background-size:cover; border:none; height:150px; width:150px; background-color:#232323; color:#FFF;' onClick="iframe('tdrs5rtytuh.php')"/>
</td>
<td align='center'>
<input type='submit' value='' style='font-size:18px; text-align:left; background:url(images/mobpeople.jpg) left no-repeat; background-size:cover; border:none; height:150px; width:150px; background-color:#232323; color:#FFF;' onClick="iframe('umhjfktdrju.php')"/>
</td>
<td align='center' width="100px">

</td>
<td align='center'>
<input type='submit' value='' style='font-size:18px; text-align:left; background:url(images/moblabels.jpg) left no-repeat; background-size:cover; border:none; height:150px; width:150px; background-color:#232323; color:#FFF;' onClick="iframe('scmbkhiolljhn.php')"/>
</td>
<td align='center'>
<input type='submit' value='' style='font-size:18px; text-align:left; background:url(images/mobblog.jpg) left no-repeat; background-size:cover; border:none; height:150px; width:150px; background-color:#232323; color:#FFF;' onClick="iframe('ogftydfytgdj.php')"/>
</td>
<td align='center'>
<input type='submit' value='' style='font-size:18px; text-align:left; background:url(images/mobsrch.jpg) left no-repeat; background-size:cover; border:none; height:100px; width:100px; background-color:#232323; color:#FFF;' onClick="iframe('wghfdjetyjuj.php')"/>
</td>
</tr><tr valign="bottom">
<td align='center' colspan="7">
© 2015 Renegade
</td>
</tr>
</table>

<table><tr height="100px"><td></td></tr></table>

<div onClick="togglePlayer()">
<button style="position:fixed; z-index:1; width:200px; height:200px; bottom:50px; right:50%;-ms-transform: translate(50%,0%);-webkit-transform: translate(50%,0%); transform: translate(50%,0%); border-radius:100px; background:url(images/toggle.jpg) center no-repeat; background-size:cover;-moz-box-shadow: 0px 10px 5px #262626;-webkit-box-shadow: 10px 0px 5px #262626;box-shadow: 0px 10px 30px #222;"></button>
</div>


<script>
$('audio,video').mediaelementplayer();

function blog()
	{
		document.getElementById('iframe').src='blog.php';
	}
function iframe(x)
	{
		document.getElementById('iframe').src= x;
	}
function togglePlayer()
{ 
	if ( document.getElementById('player').style.visibility == "visible")
		{
			document.getElementById('player').style.visibility = "hidden";
			document.getElementById('head').style.height = "100px";
		}
	else
		{
			document.getElementById('player').style.visibility = "visible";
			document.getElementById('head').style.height = "600px";
		}
}
</script>
</body>
</html>