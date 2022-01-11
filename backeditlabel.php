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
		$query="DELETE FROM labels WHERE labelID = '{$_POST['theID']}' LIMIT 1";
		$Result = mysql_query($query, $cxn)
		or die("result no work");
		echo "Label data deleted";
	}
elseif ($_POST['edit']=="Edit")
	{
		$query="SELECT * FROM labels WHERE labelID = '{$_POST['theID']}'";
		$result = mysql_query($query, $cxn)
		or die("result no work");
		
		echo"<table align='center'>";
		extract(mysql_fetch_array($result));
			echo"
			<form action='backeditlabel.php' enctype='multipart/form-data' method='post'>
	<table align='center' bgcolor='#222'><tr>
    <input type='hidden' name='theID' value='{$_POST['theID']}'/>
	<td style='padding:5px; font-size:12px; font-weight:bold'>
	label' Name(100)
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>
	<input size='80' type='text' name='labelName' maxlength='100' value='$labelName' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
	label' Owner(100)
	</td><td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#222'>
	<input size='80' type='text' name='labelOwner' maxlength='100' value='$labelOwner' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
	label' Year Founded(4)
	</td><td style='padding:5px; font-size:12px; font-weight:bold'>
	<input size='80' type='text' name='labelIntro' maxlength='4' value='$labelIntro' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
	label' History(1000)
	</td><td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#222'>
	<textarea name='labelHistory' cols='82' rows='2'  value='$labelHistory' maxlength='1000' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>make this shit History</textarea>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
	label' Artists(300)
	</td><td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#222'>
	<input size='80' type='text' name='labelArtists' maxlength='300' value='$labelArtists' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
	</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
	label' Producers(200)
	</td><td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#222'>
	<input size='80' type='text' name='labelProducers' maxlength='200' value='$labelProducers' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
	</td><td style='padding:5px; font-size:12px; font-weight:bold'  bgcolor='#222'>
	<input name='update' type='submit' value='Update' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
	</td>
	</tr></table>
	</form>";
	}
elseif ($_POST['update']=='Update')
	{
		$query = "UPDATE labels 
		
		SET  
		
		labelName='{$_POST['labelName']}' , 
		labelOwner='{$_POST['labelOwner']}' , 
		labelIntro='{$_POST['labelIntro']}' , 
		labelHistory='{$_POST['labelHistory']}' , 
		labelArtists='{$_POST['labelArtists']}' ,  
		labelProducers='{$_POST['labelProducers']}'
		
		WHERE labelID = '{$_POST['theID']}' ";
		
		mysql_query($query, $cxn) or die('vhgcghvuhj');
		echo "<h3 align='center'> Record Edited</h3>";
	}
elseif ($_POST['labelName'] == '' and $_POST['labelOwner'] == '' and $_POST['labelArtists'] == '') 
	{?>
		<form method="POST" action="backeditlabel.php">
		<table align="center" bgcolor="#222"><tr valign="middle" height="500px">
		<td style="padding:5px; font-size:12px;">label Name(50)
		<input size="10" type='text' name='labelName' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px">
		</td><td style="padding:5px; font-size:12px;">label Owner(50)
		<input size="10" type='text' name='labelOwner' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px">
		</td><td style="padding:5px; font-size:12px;">label Artists(100)
		<input size="10" type='text' name='labelArtists' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px">
		</td><td style="padding:5px; font-size:12px;">Extract
		<input name="extract" type='submit' value="Extract" style="color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px">
		</td>
		</tr></table>
		</form>
<?php 
	}
elseif ($_POST['labelName'] != '' and $_POST['labelOwner'] != '' and $_POST['labelArtists'] != '') 
	{
		$query = "SELECT * FROM labels WHERE labelName LIKE '%".$_POST['labelName']."%' OR labelOwner LIKE '%".$_POST['labelOwner']."%' OR labelArtists LIKE '%".$_POST['labelArtists']."%' LIMIT 20";
		$result = mysql_query($query, $cxn)
			or die("result no work people");
$nr = mysql_num_rows($result);		
	if ($nr > 0)
	{
		echo"<table align='center' bgcolor='#222'>
		<tr  bgcolor='#222' height='11px'>
        <td width='' style='padding:5px 5px;'>label Name</td>
        <td width='auto' style='padding:5px 5px;'>labelOwner</td>
        <td style='padding:5px 5p;'>label Artists</td>
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
    	    <td style="padding:5px;"><?php echo trim($labelName)?></td>
	        <td style="padding:5px;"><?php echo trim($labelOwner)?></td>
	        <td style="padding:5px;"><?php echo trim($labelArtists)?></td>
            <form action="backeditlabel.php" method="post">
	        <td style='padding:5px 5p;'><input type='hidden' name='theID' value='<?php echo $labelID ?>'/><input type="submit" name="delete" value="Delete" style="margin-left:20px; cursor:pointer; border:1px #FFF solid; background-color:#522; color:#FFF; padding:10px"/></td>
            </form>
            <form action="backeditlabel.php" method="post">
	        <td style='padding:5px 5p;'><input type='hidden' name='theID' value='<?php echo $labelID ?>'/><input type="submit" name="edit" value="Edit" style="margin-left:20px; cursor:pointer; border:1px #FFF solid; background-color:#225; color:#FFF; padding:10px"/></td>
            </form>
	        </tr>
	        <?php $r++; } ?>
	        </table>
			<?php 
		}
	else
		{
			echo '<center>Your Query Yielded No Result</center>';
			echo"<form method='POST' action='backeditlabel.php'>
		<table align='center' bgcolor='#222'><tr valign='center' height='500px'>
		<td style='padding:5px; font-size:12px;'>label Name(50)
		<input size='10' type='text' name='labelName' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>label Owner(50)
		<input size='10' type='text' name='labelOwner' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>label Artists(100)
		<input size='10' type='text' name='labelArtists' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>Extract
		<input name='extract' type='submit' value='Extract' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td>
		</tr></table>
		</form>";
		}

	}
else
		{
			echo '<center>Ensure To Fill All Fields This Time</center>';
			echo"<form method='POST' action='backeditlabel.php'>
		<table align='center' bgcolor='#222' ><tr valign='center' height='500px'>
		<td style='padding:5px; font-size:12px;'>label Name(50)
		<input size='10' type='text' name='labelName' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>label Owner(50)
		<input size='10' type='text' name='labelOwner' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>label Artists(100)
		<input size='10' type='text' name='labelArtists' maxlength='50' value='' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td><td style='padding:5px; font-size:12px;'>Extract
		<input name='extract' type='submit' value='Extract' style='color:#FFF; background-color:#222; border:1px #FFF solid; padding:5px'>
		</td>
		</tr></table>
		</form>";
		}
?>