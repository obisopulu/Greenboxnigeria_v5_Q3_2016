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
<!-- //////////////////////////////////////personStageName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<div style="float:left;">	<form><select name="Person' Stage Name" style=" border:1px solid #FFF; background-color:#222; color:#FFF; padding:5px">
							<option>Person' Stage Name</option>
<?php 
	$sqlpersonsT = 'SELECT DISTINCT personStageName FROM persons ORDER BY personStageName';
	$personsTResult = mysql_query($sqlpersonsT, $cxn)
		or die("result no work");
while($rowpersonsT=mysql_fetch_assoc($personsTResult))
	{extract($rowpersonsT);
			if ($personStageName != '')echo "<option value=''>$personStageName
			</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////Music drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////personBirthName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="personBirthName" style=" border:1px solid #FFF; background-color:#222; color:#FFF; padding:5px">
							<option>personBirthName</option>
<?php 
	$sqlpersonsA = 'SELECT DISTINCT personBirthName FROM persons ORDER BY personBirthName';
	$personsAResult = mysql_query($sqlpersonsA, $cxn)
		or die("result no work");
while($rowpersonsA=mysql_fetch_assoc($personsAResult))
	{extract($rowpersonsA);
			if ($personBirthName != '')echo "<option value=''>$personBirthName</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////personBirthName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////personBirthName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="$personBirthName" style=" border:1px solid #FFF; background-color:#222; color:#FFF; padding:5px">
    							<option>Person' Birth Name</option>
<?php 
	$sqlpersonsAF = 'SELECT DISTINCT personBirthName FROM persons ORDER BY personBirthName';
	$personsAFResult = mysql_query($sqlpersonsAF, $cxn)
		or die("result no work");
while($rowpersonsAF=mysql_fetch_assoc($personsAFResult))
	{extract($rowpersonsAF);
			if ($personArtistFt != '')echo "<option value=''>$personBirthName</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////personBirthName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////personFanName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="$personFanName" style=" border:1px solid #FFF; background-color:#222; color:#FFF; padding:5px">
    							<option>Person' Fan Name</option>
<?php 
	$sqlpersonsAl = 'SELECT DISTINCT personFanName FROM persons ORDER BY personFanName';
	$personsAlResult = mysql_query($sqlpersonsAl, $cxn)
		or die("result no work");
while($rowpersonsAl=mysql_fetch_assoc($personsAlResult))
	{extract($rowpersonsAl);
			if ($personAlbum != '')echo "<option value=''>$personFanName</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////personFanName drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////personGenre drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="$personGenre" style=" border:1px solid #FFF; background-color:#222; color:#FFF; padding:5px">
    							<option>Person' Genre</option>
<?php 
	$sqlpersonsP = 'SELECT DISTINCT personGenre FROM persons ORDER BY personGenre';
	$personsPResult = mysql_query($sqlpersonsP, $cxn)
		or die("result no work");
while($rowpersonsP=mysql_fetch_assoc($personsPResult))
	{extract($rowpersonsP);
			if ($personGenre != '')echo "<option value=''>$personGenre</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////personGenre drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////personBirthDay drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="$personBirthDay" style=" border:1px solid #FFF; background-color:#222; color:#FFF; padding:5px">
    							<option>Person' Birth Day</option>
<?php 
	$sqlpersonsB = 'SELECT DISTINCT personBirthDay FROM persons ORDER BY personBirthDay';
	$personsBResult = mysql_query($sqlpersonsB, $cxn)
		or die("result no work");
while($rowpersonsB=mysql_fetch_assoc($personsBResult))
	{extract($rowpersonsB);
			if ($personBirthDay != '')echo "<option value=''>$personBirthDay</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////personBirthDay drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////Type drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="$personPlaceOfOrigin" style=" border:1px solid #FFF; background-color:#222; color:#FFF; padding:5px">
    							<option>person' Place Of Origin</option>
<?php 
	$sqlpersonsT = 'SELECT DISTINCT personPlaceOfOrigin FROM persons ORDER BY personPlaceOfOrigin';
	$personsTResult = mysql_query($sqlpersonsT, $cxn)
		or die("result no work");
while($rowpersonsT=mysql_fetch_assoc($personsTResult))
	{extract($rowpersonsT);
			if ($personPlaceOfOrigin != '')echo "<option value=''>$personPlaceOfOrigin</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////personPlaceOfOrigin drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////personProfession drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="$personProfession" style=" border:1px solid #FFF; background-color:#222; color:#FFF; padding:5px">
    							<option>Person's Profession</option>
<?php 
	$sqlpersonsG = 'SELECT DISTINCT personProfession FROM persons ORDER BY personProfession';
	$personsGResult = mysql_query($sqlpersonsG, $cxn)
		or die("result no work");
while($rowpersonsG=mysql_fetch_assoc($personsGResult))
	{extract($rowpersonsG);
			if ($personProfession != '')echo "<option value=''>$personProfession</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////personProfession drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td></tr><tr><td>
<!-- //////////////////////////////////////Language drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
<form><select name="$personLabel" style=" border:1px solid #FFF; background-color:#222; color:#FFF; padding:5px">
    							<option>Person' Label</option>
<?php 
	$sqlpersonsLg = 'SELECT DISTINCT personLabel FROM persons ORDER BY personLabel';
	$personsLgResult = mysql_query($sqlpersonsLg, $cxn)
		or die("result no work");
while($rowpersonsLg=mysql_fetch_assoc($personsLgResult))
	{extract($rowpersonsLg);
			if ($personLabel != '')echo "<option value=''>$personLabel</option>";
	}
	echo"</select></form>";
?>

<!-- //////////////////////////////////////personLabel drop down\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
</td>
</tr>
</table>

</td>
<td>

<?php
if ($_POST['personStageName'] != '')
{		
		$f_today = date("Ymd");
		$month = date("m");
		$day = date("d");
		$year = date("Y");
		$personPic1 = $_FILES['personPic1']['name'];
		$personPic2 = $_FILES['personPic2']['name'];
		$personPic3 = $_FILES['personPic3']['name'];
		move_uploaded_file($_FILES['personPic1']['tmp_name'], "personsimg/{$_FILES['personPic1']['name']}");
		move_uploaded_file($_FILES['personPic2']['tmp_name'], "personsimg/{$_FILES['personPic2']['name']}");
		move_uploaded_file($_FILES['personPic3']['tmp_name'], "personsimg/{$_FILES['personPic3']['name']}");
		$query = "INSERT INTO  persons (  personID ,  personStageName , personBirthName ,  personFanName ,  personGenre ,  personBirthDay , personBirthYear ,  personPlaceOfOrigin ,  personProfession , personCareerStartYear ,  personLabel ,  personAssociatedActs , personLifeStory ,  personPic1 ,  personPic2 ,  personPic3 ,dateDay, dateMonth,	dateYear, dateUpdated) 
VALUES ( NULL,  '{$_POST['personStageName']}',  '{$_POST['personBirthName']}',  '{$_POST['personFanName']}',  '{$_POST['personGenre']}',  '{$_POST['personBirthDay']}',  '{$_POST['personBirthYear']}',  '{$_POST['personPlaceOfOrigin']}',  '{$_POST['personProfession']}',  '{$_POST['personCareerStartYear']}',  '{$_POST['personLabel']}',  '{$_POST['personAssociatedActs']}',  '{$_POST['personLifeStory']}',  '$personPic1',  '$personPic2', '$personPic3','$day','$month','$year','$f_today'
)";
$result = mysql_query($query, $cxn)
	or die("result no work 101");
	echo "Person '{$_POST['personBirthName']}' with stage name '{$_POST['personStageName']}' has been uploaded"?>
include("sitemapGen.php");


<?php
}
else
{
echo"<form action='backaddperson.php' enctype='multipart/form-data' method='post'>
<table align='center'><tr>
<td style='padding:5px; font-size:12px; font-weight:bold'>
person' Stage Name(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='personStageName' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Birth Name(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='personBirthName' maxlength='100' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Fan Name(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='personFanName' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Genre(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='personGenre' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Birth Day(5)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='personBirthDay' maxlength='5' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Birth Year(4)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='personBirthYear' maxlength='4' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Place Of Origin(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='personPlaceOfOrigin' maxlength='100' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Profession(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='personProfession' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Career Start Year(4)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='personCareerStartYear' maxlength='4' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Label(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='personLabel' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Associated Acts(200)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' size='80' type='text' name='personAssociatedActs' maxlength='200' value='' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
personLifeStory(1000)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<textarea name='personLifeStory' cols='82' rows='2'  required='required' value='' maxlength='1000' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'></textarea>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' pic1
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input type='hidden' name='MAX_FILE_SIZE' value='5123840'><input required='required' name='personPic1' value='' type='file' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' pic2
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' name='personPic2' value='' type='file' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' pic3
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input required='required' name='personPic3' value='' type='file' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td><td>
<input name='upload' align='right' type='submit' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td>
</tr></table>
</form>";
}	
?>
</body>
</html>