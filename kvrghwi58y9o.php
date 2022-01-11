<?php include('top.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	<link href="front.css" rel="stylesheet" type="text/css" />
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
<table width="100%" bgcolor="#262626" height="500px">
<tr height="20px">
<td style="padding-left:20px">
<!--            Head            -->
<table bgcolor="#222">
<tr>
<td>
<button style='background:url(<?php echo "personsimg/$personPic2"?>) center no-repeat; border:none; background-size:contain; height:200px; width:200px; cursor: default; background-color:#222'></button>
</td>
</tr>
<td align="center">
<?php $query = "SELECT AVG(songRating) AS ratingAvg FROM songs WHERE songArtist='$personStageName'";

$mow = mysql_query($query, $cxn)
	or die('result no work'); 
$row=array_sum(mysql_fetch_assoc($mow));

if ($row < 3){				echo " <button style='background:url(images/)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> ";}

if ($row > 2){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> ";}
if ($row > 3){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> ";}
if ($row > 4){				echo " <button style='background:url(images/star.jpg)center no-repeat; background-size:cover; border:none; height:12px; width:10px; cursor: default; background-color:#262626;'></button> ";}  ?><br/><br/>
</td>
<tr>
<td>
<table height="200px" width="100%">
<tr>
<td>
</td>
</tr>
<tr valign="bottom">
<td align="center">
<?php if ($personLifeStory != '') echo "<input type='submit' onClick='openStory()' name='Songs' value='Story' style='color:#FFF; padding:10px 0px; border:none; cursor:pointer; background-color:#232323; width:100%'/>"; ?>
</td>
</tr>
</table>
</td>
</tr>
</table>

</td>
<td align="left" valign="top" style="padding-top:20px" width="70%">

<table width="100%" align="left"><tr>
<td>
<span id="firsttext"><?php echo $personStageName ?><button id='demo' onclick="copyToClipboard(document.getElementById('demo').innerHTML)" style='font-size:0px; background:url(images/copy.jpg) center no-repeat; border:none; background-size:cover; width:20px; height:20px; cursor:pointer; background-color:#222; font-size:0px' title='copy file url'>http://www.gbngr.com/archive/person-<?php $name = str_replace(' ', '---', $personStageName); echo $name?></button></span>
</td></tr><tr><td style="padding-bottom:20px">
<span class="thirdtextWyt"><?php echo $personProfession ?></span>
</td></tr><tr><td>
<?php
if ($personBirthName != '')echo "<p id='details'>Birth name: <b>$personBirthName</b></p>"; 
if ($personBirthDay != '')echo "<p id='details'>Birthday: <b>$personBirthDay</b></p>"; 
if ($personBirthYear != '0') {echo "<p id='details'>"; $Age = $Y-$personBirthYear; echo "Age: <b>$Age years</b></p>";}
if ($personPlaceOfOrigin != '')echo "<p id='details'>State of origin: <b>$personPlaceOfOrigin</b></p>"; 
if ($personGenre != '')echo "<p id='details'>Genre: <b>$personGenre</b></p>"; 
if ($personCareerStartYear != '0') {echo "<p id='details'>"; $careerLenght = $Y-$personCareerStartYear; echo "Career lenght: <b>$careerLenght years</b></p>";}
if ($personLabel != '')echo "<p id='details'>Label:  <b>$personLabel</b></p>"; 
if ($personAssociatedActs != '')echo "<p id='details'>Associated Acts: <b>$personAssociatedActs</b></p>"; 
?>

</tr>
</table>
</td>
</tr>
</table>
<script>
function openStory() 
{
	top.document.getElementById("story").style.visibility = "visible";	
	top.document.getElementById("story").src = "mvk54jo8i3om.php?person=<?php echo $personStageName ?>+";
}
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
</body>
</html>