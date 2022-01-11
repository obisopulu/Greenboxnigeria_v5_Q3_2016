<?php include('backtop.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
	<link href="back.css" rel="stylesheet" type="text/css" />
<?php
$sqlsongs = mysql_query("SELECT * FROM songs");
$countsongs = mysql_num_rows($sqlsongs);

$sqlpersons = mysql_query("SELECT * FROM persons");
$countpersons = mysql_num_rows($sqlpersons);

$sqllabels = mysql_query("SELECT * FROM labels");
$countlabels = mysql_num_rows($sqllabels);

$sqlactivities = mysql_query("SELECT * FROM activities");
$countactivities = mysql_num_rows($sqlactivities);

$sqldownloads = mysql_query("SELECT * FROM downloads");
$countdownloads = mysql_num_rows($sqldownloads);

$query = "SELECT SUM(anonymousRating) AS ratingAvg FROM anonymous ";

$mow = mysql_query($query, $cxn)
	or die('result no work'); 
$countanonymous=array_sum(mysql_fetch_assoc($mow));

$sqlusers = mysql_query("SELECT DISTINCT anonymousIP FROM anonymous");
$countusers = mysql_num_rows($sqlusers);

$sqlADays = mysql_query("SELECT DISTINCT anonymousRegDate FROM anonymous");
$countADays = mysql_num_rows($sqlADays);

$countusersdownloading = mysql_query("SELECT DISTINCT downloadUser FROM downloads");
$countusersdownloading = mysql_num_rows($countusersdownloading);

$sqldpd = mysql_query("SELECT DISTINCT downloadDate FROM downloads");
$countdpd = mysql_num_rows($sqldpd);
?>
</head>
<body>
<table width="100%" style="position:fixed">
<tr height="50px"bgcolor="#111"><td><span id="secondtext">The Cockpit</span></td></tr>
</table>

<table align="center"><tr>
<tr height="50px"><td></td></tr>
</tr>
<tr height="" bgcolor="#242424"><td align="">stock<hr/>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding10px :20px" align="center"><span id="firsttext"><?php echo $countsongs ?></span>Tracks<br/><br/><br/></td></tr></table>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding:10px 20px" align="center"><span id="firsttext"><?php echo $countpersons ?></span>People<br/><br/><br/></td></tr></table>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding:10px 20px" align="center"><span id="firsttext"><?php echo $countlabels ?></span>Labels<br/><br/><br/></td></tr></table>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding:10px 20px" align="center"><span id="firsttext"><?php echo $countactivities ?></span>Articles<br/><br/><br/></td></tr></table>
</td></tr><tr height="" bgcolor="#242424">
<td align="">traffic<hr/>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding:0px 20px" align="center" title="Amount of Downloads"><span id="firsttext"><?php echo $countdownloads ?></span>Downloads<br/><br/><br/></td></tr></table>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding:0px 20px" align="center" title="Amount Of Users"><span id="firsttext"><?php echo $countusers ?></span>Users<br/><br/><br/></td></tr></table>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding:0px 20px" align="center" title="Amount Of Page Views"><span id="firsttext"><?php echo $countanonymous ?></span>Page Views<br/><br/><br/></td></tr></table>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding:0px 20px" align="center" title="Amount of Days With User Activity"><span id="firsttext"><?php echo $countADays ?></span>Activity Days<br/><br/><br/></td></tr></table>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding:0px 20px" align="center" title="Average Song Download"><span id="firsttext"><?php echo round($countdownloads/$countsongs) ?></span>AVG SD<br/><br/><br/></td></tr></table>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding:0px 20px" align="center"><span id="firsttext" title="Average Nunmber Of Users Downloading"><?php echo round($countdownloads/$countusers) ?></span>AVG UD<br/><br/><br/></td></tr></table>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding:0px 20px" align="center"><span id="firsttext" title="Average Song Download Per Day"><?php echo round($countdpd) ?></span>AVG DPD<br/><br/><br/></td></tr></table>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding:0px 20px" align="center"><span id="firsttext" title="Average Per Day"><?php echo round($countusers/$countADays) ?></span>AVG UPD<br/><br/><br/></td></tr></table>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding:0px 20px" align="center"><span id="firsttext" title="Average Number Of Unit Song Downloaded Per Day"><?php echo round($countdownloads/$countsongs/$countdpd) ?></span>AVG SDPD<br/><br/><br/></td></tr></table>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding:0px 20px" align="center"><span id="firsttext" title="Average User Download Per Day"><?php echo round($countdownloads/$countusers/$countdpd) ?></span>AVG UDPD<br/><br/><br/></td></tr></table>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding:0px 20px" align="center"><span id="firsttext" title="Average Page View Per Day"><?php echo round($countanonymous/$countADays) ?></span>AVG PVPD<br/><br/><br/></td></tr></table>
<table align="center" style="float:left; margin-left:3px; width:250px"><tr><td>
<tr height=""><td style="padding:0px 20px" align="center"><span id="firsttext" title="Average Number Of Users Downloading Songs (Atleast One)"><?php echo $countusersdownloading ?></span>UD<br/><br/><br/></td></tr></table>
</td>
</tr>

</table>


</body>
</html>