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
<!-- //////////////////////////////////////activity Name drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<div style="float:left;">	<form><select name="activity Name" style="border:1px solid #FFF; background-color:#262626; color:#FFF; padding:5px">
							<option>Activity Name</option>
<?php 
	$sqlactivitiesT = 'SELECT DISTINCT activityName FROM activities ORDER BY activityName';
	$activitiesTResult = mysql_query($sqlactivitiesT, $cxn)
		or die("result no work");
while($rowactivitiesT=mysql_fetch_assoc($activitiesTResult))
	{extract($rowactivitiesT);
			if ($activityName != '')echo "<option value=''>$activityName
			</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////activityName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////activityInfo drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="activity Day" style="border:1px solid #FFF; background-color:#262626; color:#FFF; padding:5px">
							<option>Activity Day</option>
<?php 
	$sqlactivitiesA = 'SELECT DISTINCT activityDay FROM activities ORDER BY activityDay';
	$activitiesAResult = mysql_query($sqlactivitiesA, $cxn)
		or die("result no work");
while($rowactivitiesA=mysql_fetch_assoc($activitiesAResult))
	{extract($rowactivitiesA);
			if ($activityDay != '')echo "<option value=''>$activityDay</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////activityDay drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////activityMonth drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$activityMonth" style="border:1px solid #FFF; background-color:#262626; color:#FFF; padding:5px">
    							<option>Activity Month</option>
<?php 
	$sqlactivitiesAF = 'SELECT DISTINCT activityMonth FROM activities ORDER BY activityMonth';
	$activitiesAFResult = mysql_query($sqlactivitiesAF, $cxn)
		or die("result no work");
while($rowactivitiesAF=mysql_fetch_assoc($activitiesAFResult))
	{extract($rowactivitiesAF);
			if ($activityMonth != '')echo "<option value=''>$activityMonth</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////activityMonth drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////activityYear drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$activityYear" style=" border:1px solid #FFF; background-color:#262626; color:#FFF; padding:5px">
    							<option>Activity Year</option>
<?php 
	$sqlactivitiesAl = 'SELECT DISTINCT activityYear FROM activities ORDER BY activityYear';
	$activitiesAlResult = mysql_query($sqlactivitiesAl, $cxn)
		or die("result no work");
while($rowactivitiesAl=mysql_fetch_assoc($activitiesAlResult))
	{extract($rowactivitiesAl);
			if ($activityYear != '')echo "<option value=''>$activityYear</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////activityYear drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////activityMonth drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="$activityMonth" style="border:1px solid #FFF; background-color:#262626; color:#FFF; padding:5px">
    							<option>Activity Source</option>
<?php 
	$sqlactivitiesAS = 'SELECT DISTINCT activitySource FROM activities ORDER BY activitySource';
	$activitiesASResult = mysql_query($sqlactivitiesAS, $cxn)
		or die("result no work");
while($rowactivitiesAS=mysql_fetch_assoc($activitiesASResult))
	{extract($rowactivitiesAS);
			if ($activitySource != '')echo "<option value=''>$activitySource</option>";
	}
	echo"</select></form>";
?>
</div>
<!-- //////////////////////////////////////activityMonth drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr>
</table>

</td>
<td>
<?php
if ($_POST['activityName'] != '')
{		$today = date("Ymd");
		$day = date("simdy");
		$month = date("m");
		$day = date("d");
		$year = date("Y");
		$activityPic = $_FILES['activityPic']['name'];
		$activityDate=$_POST['activityMonth'].$_POST['activityDay'].$_POST['activityYear'];
		move_uploaded_file($_FILES['activityPic']['tmp_name'], "activitiesimg/"."{$_FILES['activityPic']['name']}");
		$query1 = "INSERT INTO  activities (  activityID ,  activityName ,  activityPic ,  activityInfo , activityDay ,  activityMonth , activityYear, activitySource  , activityDate ,dateDay, dateMonth, dateYear, dateUpdated) 
VALUES (
NULL ,  '{$_POST['activityName']}',  '$activityPic',  '{$_POST['activityInfo']}',  '{$_POST['activityDay']}',  '{$_POST['activityMonth']}', '{$_POST['activityYear']}', '{$_POST['activitySource']}', '$activityDate' , '$day','$month','$year' ,'$today'
)";
$result1 = mysql_query($query1, $cxn)
	or die("result no work 101");
	
		echo "--- Article {$_POST['activityName']} uploaded" ;
include("sitemapGen.php");
?>


<?php 
}
else
{
echo"
<form action='backaddblog.php' enctype='multipart/form-data' method='POST'>
<table align='center' height='500px'><tr>
<td style='padding:5px; font-size:12px; font-weight:bold'>
Article Name(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='activityName' maxlength='100' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr>
<td style='padding:5px; font-size:12px; font-weight:bold'>
Article Day(2)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='activityDay' maxlength='2' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr>
<td style='padding:5px; font-size:12px; font-weight:bold'>
Article Month(2)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='activityMonth' maxlength='2' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr>
<td style='padding:5px; font-size:12px; font-weight:bold'>
Article Year(2)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='activityYear' maxlength='2' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr>
<td style='padding:5px; font-size:12px; font-weight:bold'>
Article Source(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='activitySource' maxlength='100' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr>
<td style='padding:5px; font-size:12px; font-weight:bold'>
Articles' Info(1000)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<textarea name='activityInfo' cols='82' rows='2'  required='required' value='' maxlength='1000' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'></textarea>
</td></tr><tr>
<td style='padding:5px; font-size:12px; font-weight:bold'>
Article Pic
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input type='hidden' name='MAX_FILE_SIZE' value='5123840'>
<input required='required' name='activityPic' value='' type='file' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input name='upload' type='submit'  style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td>
</tr></table>
</form>";
}
?>
</tr>
</table>
</body>
</html>