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
<!-- //////////////////////////////////////label Name drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<div style="float:left;">	<form><select name="label' Name" style="border:1px solid #FFF; background-color:#262626; color:#CCC; padding:5px">
							<option>label' Name</option>
<?php 
	$sqllabelsT = 'SELECT DISTINCT labelName FROM labels ORDER BY labelName';
	$labelsTResult = mysql_query($sqllabelsT, $cxn)
		or die("result no work");
while($rowlabelsT=mysql_fetch_assoc($labelsTResult))
	{extract($rowlabelsT);
			if ($labelName != '')echo "<option value=''>$labelName
			</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////labelName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////labelOwner drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
	<div style="float:left;"><form><select name="labelOwner" style="border:1px solid #FFF; background-color:#262626; color:#CCC; padding:5px">
							<option>label' Owner</option>
<?php 
	$sqllabelsA = 'SELECT DISTINCT labelOwner FROM labels ORDER BY labelOwner';
	$labelsAResult = mysql_query($sqllabelsA, $cxn)
		or die("result no work");
while($rowlabelsA=mysql_fetch_assoc($labelsAResult))
	{extract($rowlabelsA);
			if ($labelOwner != '')echo "<option value=''>$labelOwner</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////labelOwner drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td>
</tr>
</table>

</td>
<td>

<?php
if ($_POST['labelName'] != '')
{
		$f_today = date("Ymd");
		$month = date("m");
		$day = date("d");
		$year = date("Y");
		$labelPic = $_FILES['labelPic']['name'];
		
		move_uploaded_file($_FILES['labelPic']['tmp_name'], "labelsimg/{$_FILES['labelPic']['name']}");
		
		$query = "INSERT INTO  labels (  labelID ,  labelName ,  labelPic ,  labelOwner , labelIntro ,  labelHistory ,  labelArtists , labelProducers, dateDay, dateMonth,	dateYear, dateUpdated ) 
VALUES (
NULL ,  '{$_POST['labelName']}',  '$labelPic',  '{$_POST['labelOwner']}',  '{$_POST['labelIntro']}',  '{$_POST['labelHistory']}',  '{$_POST['labelArtists']}',  '{$_POST['labelProducers']}' ,'$day','$month','$year', '$f_today'
)";
$result = mysql_query($query, $cxn)
	or die("result no work 101");
		echo "--- Label {$_POST['labelName']} uploaded" ;
include("sitemapGen.php");
	
}
else
{
echo"
<form action='backaddlabel.php' enctype='multipart/form-data' method='post'>
<table align='center'><tr>
<td style='padding:5px; font-size:12px; font-weight:bold'>
label' Name(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='labelName' maxlength='100' value='' style='color:#FFF; background-color:#222;border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
label' Owner(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='labelOwner' maxlength='100' value='' style='color:#FFF; background-color:#222;border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
label' Year Founded(4)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='labelIntro' maxlength='4' value='' style='color:#FFF; background-color:#222;border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
label' History(1000)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<textarea name='labelHistory' cols='82' rows='2'  required='required' value='' maxlength='1000' style='color:#FFF; background-color:#222;border:1px solid #FFF; padding:5px'></textarea>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
label' Artists(300)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='labelArtists' maxlength='300' value='' style='color:#FFF; background-color:#222;border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
label' Producers(200)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='labelProducers' maxlength='200' value='' style='color:#FFF; background-color:#222;border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
label' pic
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input type='hidden' name='MAX_FILE_SIZE' value='5123840'><input required='required' name='labelPic' value='' type='file' style='color:#FFF; background-color:#222;border:1px solid #FFF; padding:5px'>
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input name='upload' type='submit' style='color:#FFF; background-color:#222;border:1px solid #FFF; padding:5px'>
</td>
</tr></table>
</form>";
}
?>
</td>
</tr>
</table>
</body>
</html>