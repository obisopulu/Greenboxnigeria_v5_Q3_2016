<?php 
include('top.php');
extract($_GET);
$article=str_replace('---', ' ',  $article);
$sql = mysql_query("SELECT * FROM activities WHERE activityName='$article'");
$row = mysql_fetch_array($sql);
extract($row);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	<link href="front.css" rel="stylesheet" type="text/css" />
<title><?php echo $activityName?></title>
<style>
p::first-letter 
	{
    color: #1F7044;
    font-size: 30px;
	}
</style>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<table width="100%" bgcolor="#262626" height="500px"><tr height="20px"><td>
<!--            Head            -->
<table width="100%"><tr><td>
<span id="secondtext">
&nbsp;<?php echo $activityName?><button id='demo' onclick="copyToClipboard(document.getElementById('demo').innerHTML)" style='font-size:0px; background:url(images/copy.jpg) center no-repeat; border:none; background-size:cover; width:20px; height:20px; cursor:pointer; background-color:#262626; font-size:0px' title='copy page url'>http://www.gbngr.com/archive/article-<?php $name = str_replace(' ', '---',  $activityName); echo $name?></button>
</span>
</td><td align="right" valign='top' id='dateStamp1'style='padding:0px 15px;'>
<?php if ($dateDay<10) {echo "0$dateDay";}else {echo $dateDay;} echo "<span id='dateStamp2'>"; if ($dateMonth<10) {echo "0$dateMonth";}else {echo $dateMonth;}echo"</td>";?>
</td></tr></table>
<center>
<button style='background-image:url( <?php if ($activityPic=='') {echo "images/gid.jpg";}else{echo"activitiesimg/$activityPic";}?>); background-position:center; background-repeat:no-repeat; background-size:cover; border:none; height:190px; width:190px; cursor: pointer; background-color:#262626'></button>
</center>

<table width='100%' style=' padding:0px 5px;'>
<tr class='blog' bgcolor='#222'>
<td style='padding:0px 15px;'>
<p><?php echo $activityInfo?></p>
<?php if ( $activitySource != '' ){echo "<p align='right'>$activitySource</p>";} ?>
</td>
</tr></table>
</td></tr></table>
<script>
function copyToClipboard(text) {
	top.document.getElementById("play").src = "stats.php?copy=blog&articleName=<?php echo $activityName?>";
    window.prompt("Copy Page Link. Use Ctrl+C or right click", text);
  }
window.onload = function() {
	var label = '<?php echo $activityName?>';var labels = label.split(' ').join(', ');
  	top.document.getElementById('title1').innerHTML='<?php echo $activityName?>';
	top.document.getElementById('description').content='<?php echo substr_replace($activityInfo,'...' ,'47')?>';
	top.document.getElementById('keywords').content=labels;
};
</script>
</body>
</html>