<?php include('top.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	<link href="front.css" rel="stylesheet" type="text/css" />
<title>Labels</title>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<!--    	3 Batch Hatch        -->
<table  align="center" width="100%" height="500px">
<tr valign="top">

<!--            Library             -->
<td width="auto" bgcolor="#262626">

<table width="100%"><tr height="20px"><td>
<!--            Head            -->
<table width="100%"><tr valign="middle"><td align="center">
<span id="secondtext">
<?php 
$Y = date('Y');
extract($_GET);
$label=str_replace('---', ' ', $label); 
$sql2 = mysql_query("SELECT * FROM labels where labelName='$label'") or die('xxx');
while($row = mysql_fetch_array($sql2))
extract($row);
echo "<span id='secondtext'>$labelName</span>"?><button id='demo' onclick="copyToClipboard(document.getElementById('demo').innerHTML)" style='font-size:0px; background:url(images/copy.jpg) center no-repeat; border:none; background-size:cover; width:20px; height:20px; cursor:pointer; background-color:#222; font-size:0px' title='copy file url'>http://www.gbngr.com/archive/label-<?php $name = str_replace(' ', '---', $labelName); echo $name?></button>
</span>
</td></tr></table>
<!--            Head            -->
</td></tr><tr style="padding:23px"><td align="center">

<?php
		echo "<table width='100%' bgcolor='#222'><tr><td align='center'><button style='background-image:url(labelsimg/$labelPic); background-size:cover; background-position:center; background-repeat:no-repeat; border:none; height:200px; width:200px; cursor: pointer; background-color:#222; border-radius:0px'></button>
		</td></tr></table>";
?>
</td></tr><tr><td align="center">
<?php		
if ($labelOwner != '')echo "<p id='details'>Founder<br/> <b>$labelOwner</b></p>"; 
if ($labelIntro > 0){echo "<p id='details'>founded <br/><b>$labelIntro</b>";
$labelIntro = $Y-$labelIntro; echo " ($labelIntro Years)</p>";}
if ($labelArtists != '')echo "<p id='details'>People<br/> <b>$labelArtists"; if ($labelProducers != ''){echo ", $labelProducers</b></p>";}else{echo "</b></p>";}
?>
<script>/* var label = '<?php #echo $labelName?>';var labels = label.split(' ').join('+');document.write(labels)*/</script>
</td>
</tr>
</table>
</td></tr></table>
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