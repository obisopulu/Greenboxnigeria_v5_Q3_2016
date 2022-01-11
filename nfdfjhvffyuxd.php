<?php include('top.php')?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="zfgyugewiugf.css" rel="stylesheet" type="text/css" />
<title>About Greenbox</title>
<style>
p::first-letter { 
    font-size: 2em;
	font-weight:900;
    color: #1F7044;
}
p{font-size:18px; color:#222;}
</style>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<table bgcolor="#FFF" width="100%"><tr><td>
<tr><td align="right" width="50%">
<input type="submit" value="" style='background:url(images/aboutpage.jpg) center no-repeat; border:none; background-size:contain; height:300px; width:170px; cursor:pointer; vertical-align:middle; background-color:#FFF' /></td></tr>
<tr><td width="50%"><span id="firsttextabout">About</span></td></tr>
<tr><td style="padding:0px 23px">

<p id="thirdtextabout">Greenbox... imagine a platform that brings out all the element of the Nigerian music... most of it tho. Letting you in on the Nigerian music you love, the people involved, the houses under which they operate and whats goin down on the green Nigerian soil. That platform is GreenBox. GreenBox is basically an archive of Nigerian Music.The archive offers the legendary music pieces and all the human elements that made them what they are. At GreenBox we position the spotlight so it illuminates every one in the industry, because we believe that they all play an important role in the soothing Nigerian music we have come to love.</p>
</td></tr>
<tr><td><span style='font-size:20px;'>Feedback</span></td></tr>
<tr><td style="width:100%; padding:0px 20px; ">
<?php 
trim($_POST['name']);
if ($_POST['name'] != '' )
	{
		$today = date("Ymd"); 
		$sql = "INSERT INTO  feedback (  feedID, feedName, feedTopic, feedBack, feedDate) VALUES (NULL, '{$_POST['name']}-{$_POST['contact']}', '{$_POST['subject']}', '{$_POST['details']}','$today')";
		mysql_query($sql, $cxn) 
			or die("Couldn't execute insert query anon.");
			echo "<span id='thirdtextabout'>Feedback Recieved</span>";
	}
	else
	{
		echo "<span id='thirdtextabout'>Fill all fields</span>";
	}
?>
<form action='nfdfjhvffyuxd.php' method='post'>
*<input required type='text' pattern="[A-Z a-z:-_]{3,}" class='search' name='name' value=''  placeholder="Name" style="background-color:#FFF; color:#222; width:100%"/><br/>
*<input type='email' class='search' name='contact'  placeholder="Email"  value='' style="background-color:#FFF; color:#222; width:100%"/><br/>
*<input required pattern="[A-Z a-z:-_]{3,}" type='text' class='search' name='subject'  placeholder="Subject"  value='' style="background-color:#FFF; color:#222; width:100%"/><br/>
<tr><td>*<input type='text' pattern="[A-Z a-z:-_]{3,}" class='search' name='details' required placeholder="Message" value='' style="background-color:#FFF; color:#222; width:100%"/></td></tr>
<tr><td colspan='2' align='center'><input type='submit' value='Send' class='search' style='border:thin #AAA; text-align:center; color:#999; background-color:#DDD; color:#444; padding:5px; width:100%'/>
</form>

</td></tr></table>

<table><tr height="200px"><td></td></tr></table>
</td></tr></table>
<script>
window.onload = function() {
  	top.document.getElementById('title1').innerHTML='About Greenbox';
	top.document.getElementById('description').content='Greenbox... imagine a platform that brings out all the element...'; 
	top.document.getElementById('keywords').content='About Greenbox Nigeria, What Greenbox Nigeria is about';
};
</script>
</body>
</html>