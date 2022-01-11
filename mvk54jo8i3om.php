<?php include('top.php');
extract($_GET);
$Y=date('Y');
$query = "SELECT * FROM persons WHERE personStageName='$person'";
$result = mysql_query($query, $cxn)
	or die("result no work");
$row=(mysql_fetch_assoc($result));
extract($row);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	<link href="front.css" rel="stylesheet" type="text/css" />
<title><?php echo $personStageName ?></title>
<style>
body {
	background-color:#222;	
	color:#FFF;
	font-size:16px;
	}
body::first-letter 
	{
    color: #1F7044;
    font-size: 30px;
	}
</style>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<input type='submit' onClick="closeStory()" name='Songs' value="Back to Profile" style='color:#FFF; padding:10px 0px; border:none; cursor:pointer; background-color:#262626; width:100%'/>
<p>&nbsp;</p>
<?php echo $personLifeStory ?>
<p>&nbsp;</p>
<input type='submit' onClick="closeStory()" name='Songs' value="Back to Profile" style='color:#FFF; padding:10px 0px; border:none; cursor:pointer; background-color:#262626; width:100%'/>
<p>&nbsp;</p>
<script>
backspace.press
{
	top.document.getElementById("story").style.visibility = "hidden";	
}
function closeStory() 
{
	top.document.getElementById("story").style.visibility = "hidden";	
}
</script>

</body>
</html>