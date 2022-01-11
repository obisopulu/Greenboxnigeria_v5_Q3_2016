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
		$query="DELETE FROM songs WHERE songID = '{$_POST['theID']}' LIMIT 1";
		$Result = mysql_query($query, $cxn)
		or die("result no work");
		echo "Music data deleted";
	}
elseif ($_POST['edit']=="Edit")
	{
		$query="SELECT * FROM songs WHERE songID = '{$_POST['theID']}'";
		$result = mysql_query($query, $cxn)
		or die("result no work");
		
		echo"<table align='center'>";
		extract(mysql_fetch_array($result));
			echo"
<form action='backeditmusic.php' enctype='multipart/form-data' method='post'>
<table align='center' bgcolor='#222'><tr>
<input type='hidden' name='theID' value='{$_POST['theID']}'/>
<td style='padding:5px; font-size:12px; font-weight:bold'>
SongTitle(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='songTitle' maxlength='50' value='$songTitle' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongArtist(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='songArtist' maxlength='50' value='$songArtist' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongArtistFt(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='songArtistFt' maxlength='50' value='$songArtistFt' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongAlbum(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='songAlbum' maxlength='50' value='$songAlbum' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongProducer(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='songProducer' maxlength='50' value='$songProducer' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongBeatmaker(50)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='songBeatmaker' maxlength='50' value='$songBeatmaker' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongLenght(4)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='songLenght' maxlength='6' value='$songLenght' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongBitrate(3)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='songBitrate' maxlength='3' value='$songBitrate' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongGenre(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='songGenre' maxlength='25' value='$songGenre' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongTags(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='songTags' maxlength='25' value='$songTags' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongYear(4)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input size='80' type='text' name='songYear' maxlength='4' value='$songYear' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongLanguage(100)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='songLanguage' maxlength='50' value='$songLanguage' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td></tr><tr><td style='padding:5px; font-size:12px; font-weight:bold'>
SongRating(2)
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input  size='80' type='text' name='songRating' maxlength='2' value='$songRating' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td><td style='padding:5px; font-size:12px; font-weight:bold'>
<input name='update' type='submit' value='Update' style='color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px'>
</td>
</tr></table>
</form>";
}
elseif ($_POST['update']=='Update')
	{
		$query = "UPDATE songs 
		
		SET  
		
		songTitle='{$_POST['songTitle']}' , 
		songArtist='{$_POST['songArtist']}' , 
		songArtistFt='{$_POST['songArtistFt']}' , 
		songAlbum='{$_POST['songAlbum']}' , 
		songProducer='{$_POST['songProducer']}' ,  
		songBeatmaker='{$_POST['songBeatmaker']}' , 
		songLenght='{$_POST['songLenght']}' , 
		songGenre='{$_POST['songGenre']}' , 
		songGenre='{$_POST['songTags']}' , 
		songYear='{$_POST['songYear']}' ,  
		songLanguage='{$_POST['songLanguage']}' , 
		songRating='{$_POST['songRating']}'
		
		WHERE songID = '{$_POST['theID']}' ";
		 

		mysql_query($query, $cxn) or die('vhgcghvuhj');
		echo "<h3 align='center'> Record Edited</h3>";
	}
	
elseif ($_POST['songTitle'] == '' and $_POST['songArtist'] == '' and $_POST['songAlbum'] == '') 
	{?>
		<form method="POST" action="backeditmusic.php">
		<table align="center" bgcolor="#222"><tr height="500px" valign="middle">
		<td style="padding:5px; font-size:12px;">SongTitle(50)
		<input size="10" type='text' name='songTitle' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px">
		</td><td style="padding:5px; font-size:12px;">SongArtist(50)
		<input size="10" type='text' name='songArtist' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px">
		</td><td style="padding:5px; font-size:12px;">SongArtistFt(100)
		<input size="10" type='text' name='songArtistFt' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px">
		</td><td style="padding:5px; font-size:12px;">SongAlbum(50)
		<input size="10" type='text' name='songAlbum' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px">
		</td><td style="padding:5px; font-size:12px;">
		<input name="extract" type='submit' value="Extract" style="color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px">
		</td>
		</tr></table>
		</form>
<?php 
	}
elseif($_POST['songTitle'] !='' and $_POST['songArtist'] !='' and $_POST['songAlbum'] != '' and $_POST['songArtistFt'] !='')
	{
		$query = "SELECT * FROM songs WHERE songTitle LIKE '%".trim($_POST['songTitle'])."%' OR songArtist LIKE '%".trim($_POST['songArtist'])."%' OR songAlbum LIKE '%".trim($_POST['songAlbum'])."%' OR songArtistFt LIKE '%".trim($_POST['songArtistFt'])."%'";
		$result = mysql_query($query, $cxn)
			or die("result no work people");
$nr = mysql_num_rows($result);		
	if ($nr > 0)
	{
		echo"<table align='center' bgcolor='#222' width='70%'>
		<tr  bgcolor='#222' height='11px'>
        <td width='' style='padding:5px 5p;'>Song Title</td>
        <td width='auto' style='padding:5px 5p;'>Song Artist</td>
        <td style='padding:5px 5p;'>Song ArtistFt</td>
        <td style='padding:5px 5p;'>Song Album</td>
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
    	    <td style="padding:0px 5px;"><?php echo trim($songTitle)?></td>
	        <td style="padding:0px 5px;"><?php echo trim($songArtist)?></td>
	        <td style="padding:0px 5px;"><?php echo trim($songArtistFt)?></td>
	        <td style="padding:0px 5px;"><?php echo trim($songAlbum)?></td>
            <form action="backeditmusic.php" method="post">
	        <td style='padding:5px 5p;'><input type='hidden' name='theID' value='<?php echo $songID ?>'/><input type="submit" name="delete" value="Delete" style="margin-left:20px; cursor:pointer; border:1px solid #FFF; background-color:#522; color:#CCC; padding:10px"/></td>
            </form>
            <form action="backeditmusic.php" method="post">
	        <td style='padding:5px 5p;'><input type='hidden' name='theID' value='<?php echo $songID ?>'/><input type="submit" name="edit" value="Edit" style="margin-left:20px; cursor:pointer; border:1px solid #FFF; background-color:#225; color:#CCC; padding:10px"/></td>
            </form>
	        </tr>
	        <?php $r++; } ?>
	        </table>
			<?php 
		}
	else
		{
			echo '<center>You Search Well Nau Bros No Result For Your Query</center>';?>
<form method="POST" action="backeditmusic.php">
		<table align="center" bgcolor="#222"><tr height="500px" valign="middle">
		<td style="padding:5px; font-size:12px;">SongTitle(50)
		<input size="10" type='text' name='songTitle' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px">
		</td><td style="padding:5px; font-size:12px;">SongArtist(50)
		<input size="10" type='text' name='songArtist' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px">
		</td><td style="padding:5px; font-size:12px;">SongArtistFt(100)
		<input size="10" type='text' name='songArtistFt' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px">
		</td><td style="padding:5px; font-size:12px;">SongAlbum(50)
		<input size="10" type='text' name='songAlbum' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px">
		</td><td style="padding:5px; font-size:12px;">
		<input name="extract" type='submit' value="Extract" style="color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px">
		</td>
		</tr></table>
		</form>
		<?php }

	}	
	else
		{
			echo '<center>Ensure To Fill All Fields</center>';?>
<form method="POST" action="backeditmusic.php">
		<table align="center" bgcolor="#222"><tr height="500px" valign="middle">
		<td style="padding:5px; font-size:12px;">SongTitle(50)
		<input size="10" type='text' name='songTitle' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px">
		</td><td style="padding:5px; font-size:12px;">SongArtist(50)
		<input size="10" type='text' name='songArtist' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px">
		</td><td style="padding:5px; font-size:12px;">SongArtistFt(100)
		<input size="10" type='text' name='songArtistFt' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px">
		</td><td style="padding:5px; font-size:12px;">SongAlbum(50)
		<input size="10" type='text' name='songAlbum' maxlength='50' value='' style="color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px">
		</td><td style="padding:5px; font-size:12px;">
		<input name="extract" type='submit' value="Extract" style="color:#FFF; background-color:#222; border:1px solid #FFF; padding:5px">
		</td>
		</tr></table>
		</form>
		<?php }	
?>