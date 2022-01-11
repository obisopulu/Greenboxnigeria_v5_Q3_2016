<?php include('top.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="zfgyugewiugf.css" rel="stylesheet" type="text/css" />
<title>People</title>
<style>
#details 
	{
		width:96%;
	text-transform:capitalize;
	background-color:#222;
	padding:5px 5px;
	margin:5px 0px;
	table-layout:fixed;
	overflow:hidden
	}
p:hover 
	{
	background-color:#339;
	}

</style>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<?php
extract($_GET);
$Y=date('Y');
$person=str_replace('---', ' ', $person);
$query = "SELECT * FROM persons WHERE personStageName='$person'"; 
$result = mysql_query($query, $cxn)
	or die("result no work");
extract($row=(mysql_fetch_assoc($result)));
?>
<table bgcolor="#121212" width="100%">
<tr>
<td align="center">
<button style='background:url(<?php echo "personsimg/$personPic2"?>) center no-repeat; border:none; background-size:contain; height:600px; width:600px; cursor: default; background-color:#222'></button>
</td>
</tr>
<tr>
<td align="center">
<?php $query = "SELECT AVG(songRating) AS ratingAvg FROM songs WHERE songArtist='$personStageName'";

$mow = mysql_query($query, $cxn)
	or die('result no work'); 
$row=array_sum(mysql_fetch_assoc($mow));

					
if ($row > 2){
echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:50px; width:50px; cursor: default; background-color:#121212;'></button> ";
echo "<button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:50px; width:50px; cursor: default; background-color:#121212;'></button> ";
echo "<button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:50px; width:50px; cursor: default; background-color:#121212;'></button> ";}

if ($row > 3){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:50px; width:50px; cursor: default; background-color:#121212;'></button> ";}
if ($row > 4){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:50px; width:50px; cursor: default; background-color:#121212;'></button> ";}
if ($row < 3){				echo " <button style='background:url(images/)center no-repeat; background-size:cover; border:none; height:50px; width:50px; cursor: default; background-color:#121212;'></button> ";} ?><br/>
</td>
</tr>
<tr>
<td align="center">
<span id="firsttext"><?php echo $personStageName ?><button id='demo' onclick="copyToClipboard(document.getElementById('demo').innerHTML)" style='font-size:0px; background:url(images/copy.jpg) center no-repeat; border:none; background-size:cover; width:50px; height:50px; cursor:pointer; background-color:#222; font-size:0px' title='copy file url'>http://www.gbngr.com/archive/person-<?php $name = str_replace(' ', '---', $personStageName); echo $name?></button></span>
</td></tr><tr><td style="padding-bottom:20px" align="center">
<span id="details"><?php echo $personProfession ?></span>
</td></tr>
</table>

<table width="100%" align="left"><tr><td>
<?php
if ($personBirthName != '')echo "<p id='details'>Birth name: <b style='color:#FFF'>$personBirthName</b></p>"; 
if ($personBirthDay != '')echo "<p id='details'>Birthday: <b style='color:#FFF'>$personBirthDay</b></p>"; 
if ($personBirthYear != '0') {echo "<p id='details'>"; $Age = $Y-$personBirthYear; echo "Age: <b style='color:#FFF'>$Age years</b></p>";}
if ($personPlaceOfOrigin != '')echo "<p id='details'>State of origin: <b style='color:#FFF'>$personPlaceOfOrigin</b></p>"; 
if ($personGenre != '')echo "<p id='details'>Genre: <b style='color:#FFF'>$personGenre</b></p>"; 
if ($personBirthYear != '0') {echo "<p id='details'>"; $careerLenght = $Y-$personCareerStartYear; echo "Career lenght: <b style='color:#FFF'>$careerLenght years</b></p>";}
if ($personLabel != '')echo "<p id='details'>Label:  <b style='color:#FFF'>$personLabel</b></p>";
?>

</tr>
</table>
<script>
function copyToClipboard(text) {
	top.document.getElementById("play").src = "stats.php?copy=person&personName=<?php echo $personStageName ?>";
    window.prompt("Copy Page Link. Use Ctrl+C or right click", text);
  }
window.onload = function() {
	var label = '<?php echo $personStageName ?>';var labels = label.split(' ').join(', ');
  	top.document.getElementById('title1').innerHTML='<?php echo $personStageName ?>';
	top.document.getElementById('description').content='About <?php echo $personStageName ?>';
	top.document.getElementById('keywords').content=labels;
};
</script>
<table><tr height="200px"><td></td></tr></table>
</body>
</html>