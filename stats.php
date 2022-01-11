<?php 
include("top.php");
extract($_POST);
extract($_GET);
if ($play!=''){
	echo $play;
	$querys = "SELECT * FROM songs WHERE songID ='$play'";
	$results = mysql_query($querys, $cxn)
		or die("result no work sha sha");
	$row = mysql_fetch_assoc($results);
	extract($row);
	
			$today = date("Ymd"); 
			
$sql = "INSERT INTO  plays ( playID, playUser, playSongID, playSong, playDate) VALUES  ('' , '$anonymousName' , '$songID', '$songArtist - $songTitle  $songArtistFt' ,'$today')";
			$result = mysql_query($sql, $cxn) 
			or die("Couldn't execute play Reg.");
	}
elseif ($copy!=''){
	echo $copy;
	if  ($copy=='music'){
		$querys = "SELECT * FROM songs WHERE songID ='$musicID'";
	$results = mysql_query($querys, $cxn)
		or die("result no work sha sha");
	$row = mysql_fetch_assoc($results);
	extract($row);
	
			$today = date("Ymd"); 
			
$sql = "INSERT INTO  copy ( copyID, copyUser, copySongID, copySong, copyDate) VALUES  ('' , '$anonymousName' , '$musicID', '$copy  $SongArtist - $songTitle  $songArtistFt' ,'$today')";
			$result = mysql_query($sql, $cxn) 
			or die("Couldn't execute copy Reg.");
		}
	if  ($copy=='label'){
			$today = date("Ymd"); 
			
$sql = "INSERT INTO  copy ( copyID, copyUser, copySongID, copySong, copyDate) VALUES  ('' , '$anonymousName' , '', '$copy $labelName' ,'$today')";
			$result = mysql_query($sql, $cxn) 
			or die("Couldn't execute copy Reg.");
		}
	if  ($copy=='blog'){
			$today = date("Ymd"); 
			
$sql = "INSERT INTO  copy ( copyID, copyUser, copySongID, copySong, copyDate) VALUES  ('' , '$anonymousName' , '', '$copy $articleName' ,'$today')";
			$result = mysql_query($sql, $cxn) 
			or die("Couldn't execute copy Reg.");
		}
	if  ($copy=='person'){
			$today = date("Ymd"); 
			
$sql = "INSERT INTO  copy ( copyID, copyUser, copySongID, copySong, copyDate) VALUES  ('' , '$anonymousName' , '', '$copy $personName' ,'$today')";
			$result = mysql_query($sql, $cxn) 
			or die("Couldn't execute copy Reg.");
		}
	}
elseif($songID != ''){
$querys = "SELECT * FROM songs WHERE songID ='$songID'";
	$results = mysql_query($querys, $cxn)
		or die("result no work sha sha");
	$row = mysql_fetch_assoc($results);
	extract($row);

			$date=date('msid');
			$anonymous = $anonymous.$date;
			$today = date("Ymd"); 

			$sql = "SELECT *  from anonymous where anonymousIP='$userIP'";
			$result = mysql_query($sql, $cxn) 
			or die("Couldn't execute insert query anonys.");

$anonymousDownload++;
$sql = "UPDATE anonymous SET anonymousDownload='$anonymousDownload' WHERE anonymousID='$anonymousID' ";
			$result = mysql_query($sql, $cxn) 
			or die("Couldn't execute insert query anon1211.");
$songDownload++;
$sqla = "UPDATE songs SET songDownload='$songDownload' WHERE songID='$songID'";
			$resulta = mysql_query($sqla, $cxn) 
			or die("Couldn't execute insert query songs");
$sql = "INSERT INTO  downloads ( downloadID, downloadUser, downloadSongID, downloadDate) VALUES  (NULL , '$anonymousName' , '$songID' ,'$today')";
			$result = mysql_query($sql, $cxn) 
			or die("Couldn't execute insert query anon1211.");
			
if ($file != ''){
		header("Content-disposition: attachment; filename=songs/$file");
		header("Content-type: audio/mpeg");
		readfile("songs/$file");
	}?>

<script> window.location='<?php echo "songs/".$songURL ?>';</script>
<?php
}
else{echo "xxx";}
?>