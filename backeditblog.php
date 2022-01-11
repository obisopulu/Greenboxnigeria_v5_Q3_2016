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
if ($_POST['delete'] == 'Delete')
	{
		$query="DELETE FROM activities WHERE activityID = '{$_POST['theID']}' LIMIT 1";
		$Result = mysql_query($query, $cxn)
		or die("result no work");
		echo "activity data deleted";
	}
elseif ($_POST['edit']=="Edit")
	{
		$query="SELECT * FROM activities WHERE activityID = '{$_POST['theID']}'";
		$result = mysql_query($query, $cxn)
		or die("result no work");
		
		echo"<table align='center'>";
		extract(mysql_fetch_array($result));
			echo"
			<form action='backeditblog.php' enctype='multipart/form-data' method='post'>
	<table align='center'><tr>
    <input type='hidden' name='theID' value='{$_POST['theID']}'/>
	<td style='padding:5px; font-size:12px; font-weight:bold'>
	Activity Name(100)	
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>
	<input  size='80' type='text' name='activityName' maxlength='100' value='$activityName' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
	Activity Day(2)
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>
	<input size='80' type='text' name='activityDay' maxlength='2' value='$activityDay' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
	Activity Month(2)
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>
	<input size='80' type='text' name='activityMonth' maxlength='2' value='$activityMonth' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
	Activity Year(2)
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>
	<input size='80' type='text' name='activityYear' maxlength='2' value='$activityYear' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
	</td></tr><tr>
    <input type='hidden' name='theID' value='{$_POST['theID']}'/>
	<td style='padding:5px; font-size:12px; font-weight:bold'>
	Activity Source(100)	
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>
	<input  size='80' type='text' name='activitySource' maxlength='100' value='$activityName' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
	activities' Info(1000)
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>
	<textarea name='activityInfo' cols='82' rows='2'   value='$activityInfo' maxlength='1000' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>$activityInfo</textarea></td>
	<td style='padding:5px; font-size:12px; font-weight:bold' colspan='3' align='center'>
	<input name='update' type='submit' value='Update' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
	</td>
	</tr></table>
	</form>";
	}
elseif ($_POST['update']=='Update')
	{
		$query = "UPDATE activities 
		
		SET  
	
		activityName='{$_POST['activityName']}' ,
		activityPic='{$_POST['activityPic']}' ,
		activityInfo='{$_POST['activityInfo']}' ,
		activityDay ='{$_POST['activityDay']}' ,
		activityMonth ='{$_POST['activityMonth']}' ,
		activityYear ='{$_POST['activityYear']}' ,
		activitySource ='{$_POST['activitySource']}' ,
		activityDate ='{$_POST['activityDate']}'

		WHERE activityID = '{$_POST['theID']}' ";
		
		mysql_query($query, $cxn) or die('vhgcghvuhj');
		echo "<h3 align='center'> Record Edited</h3>";
	}
elseif ($_POST['activityName'] == '' and $_POST['activityInfo'] == '' and $_POST['activityDate'] == '') 
	{?>
		<form method="POST" action="backeditblog.php">
		<table align="center"><tr height='500px' valign='middle'>
		<td style="padding:5px; font-size:12px;">Activity Name(50)
		<input size="10" type='text' name='activityName' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px">
		</td><td style="padding:5px; font-size:12px;">Activity Info(50)
		<input size="10" type='text' name='activityInfo' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px">
		</td><td style="padding:5px; font-size:12px;">Activity Date(09(M)/15(D)/2015(Y))
		<input size="10" type='text' name='activityDate' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px">
		</td><td style="padding:5px; font-size:12px;">
		<input name="extract" type='submit' value="Extract" style="color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px">
		</td>
		</tr></table>
		</form>
<?php 
	}
elseif($_POST['activityName'] != '' and $_POST['activityInfo'] != '' and $_POST['activityDate'] != '')
	{
		$query = "SELECT * FROM activities WHERE activityName LIKE '%".$_POST['activityName']."%' OR activityInfo LIKE '%".$_POST['activityInfo']."%' OR activityDate LIKE '%".$_POST['activityDate']."%' LIMIT 20";
		$result = mysql_query($query, $cxn)
			or die("result no work people");
$nr = mysql_num_rows($result);		
	if ($nr > 0)
	{
		echo"<table align='center'>
		<tr height='11px'>
        <td width='' style='padding:5p;'>Activity Name</td>
        <td width='auto' style='padding:5p;'>Activity Info</td>
        <td style='padding:5p;'>Activity Date</td>
		<td style='padding:5p;'></td>
		<td style='padding:5p;'></td>
		</tr>";
	$r = 1;
	?><?php
	while($row = mysql_fetch_array($result))
		{
			extract($row);
			$c= $r%2;?>
	 		<tr bgcolor='<?php if ($c==0) echo "#222"; else echo "#262626" ?>'>
    	    <td style="padding:0px 5px;"><?php echo trim($activityName)?></td>
	        <td style="padding:0px 5px;"><?php echo trim($activityInfo)?></td>
	        <td style="padding:0px 5px;"><?php echo trim($activityDate)?></td>
            <form action="backeditblog.php" method="post">
	        <td style='padding:5p;'><input type='hidden' name='theID' value='<?php echo $activityID ?>'/><input type="submit" name="delete" value="Delete" style="margin-left:20px; cursor:pointer; border:1px #FFF solid; background-color:#522; color:#FFF; padding:10px"/></td>
            </form>
            <form action="backeditblog.php" method="post">
	        <td style='padding:5p;'><input type='hidden' name='theID' value='<?php echo $activityID ?>'/><input type="submit" name="edit" value="Edit" style="margin-left:20px; cursor:pointer; border:1px #FFF solid; background-color:#225; color:#FFF; padding:10px"/></td>
            </form>
	        </tr>
	        <?php $r++; } ?>
	        </table>
			<?php 
		}
	else
		{
			echo '<center>you search well nw bros</center>';
			echo"<form method='POST' action='backeditblog.php'>
		<table align='center'><tr height='500px' valign='middle'>
		<td style='padding:5px; font-size:12px;'>activity Name(50)
		<input size='10'  type='text' name='activityName' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>activity Info(50)
		<input size='10'  type='text' name='activityInfo' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>activity Date(100)
		<input size='10'  type='text' name='activityDate' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>
		<input name='extract' type='submit' value='Extract' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td>
		</tr></table>
		</form>";
		}

	}
else
		{
			echo '<center>Ensure To Fill All Fields</center>';
			echo"<form method='POST' action='backeditblog.php'>
		<table align='center'><tr height='500px' valign='middle'>
		<td style='padding:5px; font-size:12px;'>activity Name(50)
		<input size='10'  type='text' name='activityName' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>activity Info(50)
		<input size='10'  type='text' name='activityInfo' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>activity Date(100)
		<input size='10'  type='text' name='activityDate' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>
		<input name='extract' type='submit' value='Extract' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td>
		</tr></table>
		</form>";
		}
?>