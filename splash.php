<?php include('top.php');
$detect = new Mobile_Detect();

if ($detect->isMobile()){}
else{
header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Greenbox: Splash</title>
<meta name="viewport" content="user-scalable=no"/>
<link href='images/favicon.ico' type='image/x-icon' rel='shortcut icon'/>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link href='zfgyugewiugf.css' rel='stylesheet' type='text/css' />
<meta name='Description' content='The Greenbox Splash Screen: New Songs Artist and Labels of the Nigerian Music Industry'>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<table width='100%' align="center" height="500px">
<tr valign="middle">
<td align="center"><a href='library.php'><button style='background-image:url(images/aboutpage.jpg); background-size:contain; background-position:center; background-repeat:no-repeat; border:none; height:300px; width:300px; cursor:default; background-color:#FFF'></button></a></td>
</tr>
<tr height="100px" valign="top"><td align="center"><span id='firsttext'>GreenBox: Nigerian Music Archive</span></td></tr>
</table>


<table cellspacing='20px' width='100%'>
<tr height="100px"><td></td></tr>
<tr>
<td width='100%'>
<span id='secondtext'>Fresh Out The Oven</span>


<?php
$query = "SELECT * FROM songs ORDER BY dateUpdated DESC LIMIT 4";
$result3 = mysql_query($query, $cxn)
	or die('result no work'); 
echo "<table width='100%'>";
while($row=mysql_fetch_assoc($result3))

	{
    	extract($row);
		echo "<tr><td id='cubeSongs'><div><table><tr><td>
        <button style='background:url(songsimg/$songArt) center no-repeat; border:none; background-size:contain; height:200px; width:200px; cursor: default; background-color:#262626'></button>
		</td>
		<td width='100%'>
		<table><tr><td>
		<span id='name'>
		"; echo $songTitle; echo "
		</span>
		</td>
		</tr>
		<tr>
		<td>
		<span id='details'>";
		 echo $songArtist;
		 if ($songArtistFt != '') {echo " Ft ";} 
		 echo $songArtistFt;
		 echo "</span>
		</td>
		</tr>
		</table>
		<td valign='top'>";
		if ($dateDay<10) {echo "<span id='name'>0$dateDay</span>";}else {echo "<span id='name'>$dateDay</span>";}
        echo "<span id='details'>"; if ($dateMonth<10) {echo "0$dateMonth";}else {echo $dateMonth;}
		echo "</span>
		</td>
		</td>
		</tr>
		</table>
		</div>
		</td>
		</tr>";
	} ?>
</table>


<table width="100%">
<tr height="100px" valign="bottom"><td><span id='secondtext'>New On The Block</span></td></tr>

<?php
$queryp = 'SELECT * FROM persons ORDER BY dateUpdated DESC LIMIT 4';
$resultp = mysql_query($queryp, $cxn)
	or die("result no work");
while($rowp=mysql_fetch_assoc($resultp))

	{extract($rowp);
		echo "<tr><td align='center'>
        <button style='background:url(personsimg/$personPic1) center no-repeat; border:none; background-size:contain; height:400px; width:400px; cursor: default; background-color:#222; border-radius:400px'></button>
		</td></tr><tr valign='middle'><td align='center'><span id='name'>$personStageName</span>
		</td></tr>";
	}
?>
</td>
</tr>
</table>

<table width="100%">
<tr height="100px" valign="bottom"><td><span id='secondtext'>Startup</span></td></tr>
<tr><td>
<?php $queryl = 'SELECT * FROM labels ORDER BY dateUpdated DESC LIMIT 1';
$resultl = mysql_query($queryl, $cxn)
	or die("result no work");
while($row=mysql_fetch_assoc($resultl))

	{extract($row);
		echo "<tr><td align='center'><button style='background:url(labelsimg/$labelPic) center no-repeat; border:none; background-size:contain; height:400px; width:400px; cursor: default; background-color:#222;'></button></td></tr>
		<tr><td align='center'><span id='name'>$labelName</span></td></tr>
	";}
?>
<tr height="350px" valign="bottom"><td></td></tr>

</td>
</tr>
</table>


<a href='home.php'><div>
<table width='100%' height='500px' bgcolor="#262626" style="position:fixed; z-index:1; padding:0px 0px; margin:; width:100%; height:300px; bottom:0px"><tr>
<td align='center' style='padding:5px'>
<span id='firsttext'>
Proceed
</span>
</td></tr><tr>
<td align='center' style='padding:5px 0px'>
<span id='thirdtext' style="color:#888">
© 2015 Renegade
</span>
</td>
</tr>
</table>
</div></a>

</body>
</html>