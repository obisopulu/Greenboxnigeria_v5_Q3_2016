<?php include('top.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="zfgyugewiugf.css" rel="stylesheet" type="text/css" />
<title>Labels</title>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<table width='100%' bgcolor='#121212'><tr><td align="center">
<?php 
$Y = date('Y');
extract($_GET); 
$label=str_replace('---', ' ', $label);
$sql2 = mysql_query("SELECT * FROM labels where labelName='$label'") or die('xxx');
while($row = mysql_fetch_array($sql2))
extract($row);
?>
</td></tr>
<?php
		echo "<tr><td align='center'><button style='background-image:url(labelsimg/$labelPic); background-size:cover; background-position:center; background-repeat:no-repeat; border:none; height:500px; width:500px; cursor: pointer; background-color:#222; border-radius:0px'></button>
		</td></tr>";?>
<tr><td align='center'><span id='secondtext'><?php echo $labelName ?><button id='demo' onclick="copyToClipboard(document.getElementById('demo').innerHTML)" style='font-size:0px; background:url(images/copy.jpg) center no-repeat; border:none; background-size:cover; width:50px; height:50px; cursor:pointer; background-color:#222; font-size:0px' title='copy file url'>http://www.gbngr.com/archive/label-<?php $name = str_replace(' ', '---', $labelName); echo $name?></button></span></tr></table>";

</td></tr><tr><td align="center">
<?php		
if ($labelOwner != '')echo "<p id='details'>Founder<br/> <b>$labelOwner</b></p>"; 
if ($labelIntro > 0){echo "<p id='details'>founded <br/><b>$labelIntro</b>";
$labelIntro = $Y-$labelIntro; echo " ($labelIntro Years)</p>";}
if ($labelArtists != '')echo "<p id='details'>People<br/> <b>$labelArtists"; if ($labelProducers != ''){echo ", $labelProducers</b></p>";}else{echo "</b></p>";}
?>

</td>
</tr></table>

<table><tr height="200px"><td></td></tr></table>
<script>
function copyToClipboard(text) {
	top.document.getElementById("play").src = "stats.php?copy=label&labelName=<?php echo $labelName?>";
    window.prompt("Copy Page Link. Use Ctrl+C or right click", text);
  }
window.onload = function() {
	var label = '<?php echo $labelName?>';var labels = label.split(' ').join(', ');
  	top.document.getElementById('title1').innerHTML='<?php echo $labelName?>';
	top.document.getElementById('description').content='About <?php echo $labelName?>';
	top.document.getElementById('keywords').content=labels;
};
</script>
</body>
</html>