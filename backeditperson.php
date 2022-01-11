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
<?php
if ($_POST['action'] == 'delete')
	{
		$query="DELETE FROM persons WHERE personID = '{$_POST['theID']}' LIMIT 1";
		$Result = mysql_query($query, $cxn)
		or die("result no work");
		echo "Person' data deleted";
	}

elseif ($_POST['action']=="edit")
	{ 
		echo $_POST['theID'];
		$query="SELECT * FROM persons WHERE personID = '{$_POST['theID']}'";
		$result = mysql_query($query, $cxn)
		or die("result no work");
		
		echo"<table align='center'>";
		extract(mysql_fetch_array($result));
			echo"
<form action='backeditperson.php' enctype='multipart/form-data' method='post'>
<input type='hidden' name='theID' value='{$_POST['theID']}'/>
<table align='center' bgcolor='#222'><tr>
<td style='padding:5px; font-size:12px; font-weight:bold'>
person' Stage Name(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='personStageName' maxlength='50' value='$personStageName' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Birth Name(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='personBirthName' maxlength='100' value='$personBirthName' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Fan Name(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='personFanName' maxlength='50' value='$personFanName' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Genre(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='personGenre' maxlength='50' value='$personGenre' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Birth Day(5)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='personBirthDay' maxlength='5' value='$personBirthDay' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Birth Year(4)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='personBirthYear' maxlength='4' value='$personBirthYear' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Place Of Origin(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='personPlaceOfOrigin' maxlength='100' value='$personPlaceOfOrigin' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Profession(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='personProfession' maxlength='50' value='$personProfession' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Career Start Year(4)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='personCareerStartYear' maxlength='4' value='$personCareerStartYear' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Label(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='personLabel' maxlength='50' value='$personLabel' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
person' Associated Acts(200)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='personAssociatedActs' maxlength='200' value='$personAssociatedActs' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
personLifeStory(1000)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<textarea name='personLifeStory' cols='82' rows='2'   value='$personLifeStory' maxlength='1000' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>$personLifeStory</textarea>
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input name='update' type='submit' value='Update' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
</td>
</tr></table>
</form>";
	}
elseif ($_POST['update']=='Update')
	{
		echo $_POST['theID'];
		$query = "UPDATE persons
		
		SET  
		
		personStageName = '{$_POST['personStageName']}' , 
		personBirthName = '{$_POST['personBirthName']}' , 
		personFanName = '{$_POST['personFanName']}' , 
		personGenre = '{$_POST['personGenre']}' , 
		personBirthDay = '{$_POST['personBirthDay']}' , 
		personBirthYear = '{$_POST['personBirthYear']}' , 
		personPlaceOfOrigin = '{$_POST['personPlaceOfOrigin']}' , 
		personProfession = '{$_POST['personProfession']}' , 
		personCareerStartYear = '{$_POST['personCareerStartYear']}' , 
		personLabel = '{$_POST['personLabel']}' , 
		personAssociatedActs = '{$_POST['personAssociatedActs']}' , 
		personLifeStory = '{$_POST['personLifeStory']}'
		
		WHERE personID = '1' ";
		
		mysql_query($query, $cxn) or die('vhgcghvuhj');
		echo "<h3 align='center'> Record Edited</h3>";
	}
elseif ($_POST['personStageName'] == '' and $_POST['personFanName'] == '' and $_POST['personProfession'] == '') 
	{?>
		<form method="POST" action="backeditperson.php">
		<table align="center" bgcolor="#222"><tr valign="middle" height="500px">
		<td style="padding:5px; font-size:12px;">Person Stage Name(50)
<input size="10" type='text' name='personStageName' maxlength='50' value='' style="color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px">
		</td><td style="padding:5px; font-size:12px;">person Fan Name(50)
<input size="10" type='text' name='personFanName' maxlength='50' value='' style="color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px">
		</td><td style="padding:5px; font-size:12px;">Person Profession(100)
<input size="10" type='text' name='personProfession' maxlength='50' value='' style="color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px">
		</td><td style="padding:5px; font-size:12px;">
<input name="extract" type='submit' value="Extract" style="color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px">
		</td>
		</tr></table>
		</form>
<?php 
	}
elseif ($_POST['personStageName'] != '' and $_POST['personFanName'] !='' and $_POST['personProfession'] !='')
	{
		$query = "SELECT * FROM persons WHERE personStageName LIKE '%".trim($_POST['personStageName'])."%' OR personFanName LIKE '%".trim($_POST['personFanName'])."%' OR personProfession LIKE '%".trim($_POST['personProfession'])."%' LIMIT 20";
		$result = mysql_query($query, $cxn)
			or die("result no work people");
$nr = mysql_num_rows($result);		
	if ($nr > 0)
	{
		echo"<table align='center' bgcolor='#222' valign='middle' height='500px' width='70%'>
		<tr>
        <td width='' style='padding:5px 5p;'>Person Stage Name</td>
        <td width='auto' style='padding:5px 5p;'>person Fan Name</td>
        <td style='padding:5px 5p;'>Person Profession</td>
		<td style='padding:5px 5p;'></td>
		<td style='padding:5px 5p;'></td>
		</tr>";
	$r = 1;
	?><?php
	while($row = mysql_fetch_array($result))
		{
			extract($row);
			$c= $r%2;?>
	 		<tr bgcolor='<?php if ($c==0) echo "#222"; else echo "#262626" ?>'>
    	    <td style="padding:0px 5px;"><?php echo trim($personStageName)?></td>
	        <td style="padding:0px 5px;"><?php echo trim($personFanName)?></td>
	        <td style="padding:0px 5px;"><?php echo trim($personProfession)?></td>
            <form action='backeditperson.php' method='post'>
	        <td style='padding:5px 5p;'><input type='hidden' name='theID' value='<?php echo $personID ?>'/><input type="submit" name="delete" value="Delete" style="margin-left:20px; cursor:pointer; border:#FFF 1px solid; color:#CCC; padding:10px; background-color:#522;"/></td>
            <input type="hidden" name="action" value="delete"/>
            </form>
            <form action='backeditperson.php' method='post'>
            <td style='padding:5px 5p;'><input type='hidden' name='theID' value='<?php echo $personID ?>'/><input type="submit" name="edit" value="Edit" style="margin-left:20px; cursor:pointer; border:#FFF 1px solid; background-color:#225; color:#CCC; padding:10px"/></td>
            <input type="hidden" name="action" value="edit"/>
            </form>
	        </tr>
	        <?php $r++; } ?>
	        </table>
			<?php 
		}
	else
		{
			echo '<center>You Search Well Nau Bros No Result For Your Query</center>';
			echo"<form method='POST' action='backeditperson.php'>
		<table align='center' bgcolor='#222'><tr valign='middle' height='500px'>
		<td style='padding:5px; font-size:12px;'>Person Stage Name(50)
		<input size='10'  type='text' name='personStageName' maxlength='50' value='' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>person Fan Name(50)
		<input size='10' type='text' name='personFanName' maxlength='50' value='' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>Person Profession(100)
		<input size='10' type='text' name='personProfession' maxlength='50' value='' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>Extract
		<input name='extract' type='submit' value='Extract' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:15px 15px'>
		</td>
		</tr></table>
		</form>";
		}

	}
	else
		{
			echo '<center>Ensure To Fill All Fields</center>';
			echo"<form method='POST' action='backeditperson.php'>
		<table align='center' bgcolor='#222'><tr valign='middle' height='500px'>
		<td style='padding:5px; font-size:12px;'>Person Stage Name(50)
		<input size='10'  type='text' name='personStageName' maxlength='50' value='' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>person Fan Name(50)
		<input size='10' type='text' name='personFanName' maxlength='50' value='' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>Person Profession(100)
		<input size='10' type='text' name='personProfession' maxlength='50' value='' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>Extract
		<input name='extract' type='submit' value='Extract' style='color:#FFF; background-color:#222; border:#FFF 1px solid; padding:15px 15px'>
		</td>
		</tr></table>
		</form>";
		}
?>