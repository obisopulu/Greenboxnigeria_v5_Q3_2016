<?php include("top.php");
$detect = new Mobile_Detect();
if ($detect->isMobile()){
header("Location: splash.php");
}
else{}
?>
<!DOCTYPE html>
<html>
<head>
<title>Greenbox: Splash</title>
<meta name="viewport" content="user-scalable=no,maximum-scale=1" />
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link href='images/favicon.ico' type='image/x-icon' rel='shortcut icon'/>
<link href='front.css' rel='stylesheet' type='text/css' />
<meta name='Description' content='The Greenbox Splash Screen: New Songs Artist and Labels of the Nigerian Music Industry'>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<table align='center'>
<tr valign='middle'>
<td>

<table width='100%'>
<tr>
<td><span id='firsttext'>GreenBox: Nigerian Music Archive</span></td><td align='right'><a href='library.php'><button style='background-image:url(images/gid.jpg); background-size:contain; background-position:center; background-repeat:no-repeat; border:none; height:50px; width:50px; cursor:default; background-color:#222'></button></a></td>
</tr>
</table>

</td>
</tr>
<tr height='20px'>
<td>
</td>
</tr>
<tr>
<td colspan='2'>

<table cellspacing='20px' width='1200px'>
<tr>
<td width='400px'>
<span id='secondtext'>Fresh Out The Oven</span>


<?php
$query = "SELECT * FROM songs ORDER BY dateUpdated DESC LIMIT 4";
$result3 = mysql_query($query, $cxn)
	or die('result no work'); 
echo "<table height='350px'>";
while($row=mysql_fetch_assoc($result3))

	{
    	extract($row);
		echo "<tr><td id='cubeSongs'><div><table><tr><td>
        <button style='background:url(songsimg/$songArt) center no-repeat; border:none; background-size:contain; height:80px; width:80px; cursor: default; background-color:#222'></button>
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
		 echo $songArtistFt;
		 echo "</span>
		</td>
		</tr>
		</table>
		<td valign='top' id='dateStamp1'>";
		if ($dateDay<10) {echo "0$dateDay";}else {echo $dateDay;}
        echo "<span id='dateStamp2'>"; if ($dateMonth<10) {echo "0$dateMonth";}else {echo $dateMonth;}
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

</td>
<td>
</td>

<td width='350px'>
<span id='secondtext'>New On The Block</span>
<table height='350px'>
<tr valign="top">
<td>
<?php
$queryp = 'SELECT * FROM persons ORDER BY dateUpdated DESC LIMIT 4';
$resultp = mysql_query($queryp, $cxn)
	or die("result no work");
while($rowp=mysql_fetch_assoc($resultp))

	{extract($rowp);
		echo "<table style='float:left; margin-left:3px;' width='170px' height='170px'><tr><td align='center'>
        <button style='background:url(personsimg/$personPic1) center no-repeat; border:none; background-size:contain; height:120px; width:120px; cursor: default; background-color:#222; border-radius:100px'></button>
        <br/>
		<span id='name'>$personStageName</span>
		</td></tr></table>";
	}
?>
</td>
</tr>
</table>

</td>

<td>
</td>

<td width='350px'>
<span id='secondtext'>Startup</span>
<?php $queryl = 'SELECT * FROM labels ORDER BY dateUpdated DESC LIMIT 1';
$resultl = mysql_query($queryl, $cxn)
	or die("result no work");
while($row=mysql_fetch_assoc($resultl))

	{extract($row);
		echo "<table style='background:url(labelsimg/$labelPic) no-repeat center;background-size:cover;' width='350px' height='350px'>
		<tr>
		<td
		</td>
		</tr>
		</table>
	";}
?>
		</td>
		</tr>
		</table>
		
		
		</td>
		</	tr>
		<tr>
		<td>
<a href='library.php'><div>
<table width='100%' height='50px' bgcolor="#222"><tr>
<td align='left' style='padding:20px 0px'>
<span id='thirdtext'>
© 2015 Renegade
</span>
</td>

<td align='right' style='padding:20px'>
<span id='firsttext'>
Proceed
</span>
</td>
</tr>
</table>
</div></a>

</body>
</html>