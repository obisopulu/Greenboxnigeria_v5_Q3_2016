<?php include('top.php')?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	<link href="front.css" rel="stylesheet" type="text/css" />
<title>About Greenbox</title>
<style>
p::first-letter { 
    font-size: 120%;
	font-weight:900;
    color: #1F7044;
}
p{font-size:18px; color:#222;}
</style>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<table width="100%" bgcolor="#fff" height="500px"><tr><td>
<!--            Head            -->
<table width="100%"><tr><td>
<span id="firsttextabout">About<button id='demo' onclick="copyToClipboard(document.getElementById('demo').innerHTML)" style='font-size:0px; background:url(images/copy.jpg) center no-repeat; border:none; background-size:cover; width:20px; height:20px; cursor:pointer; background-color:#fff; font-size:0px' title='copy page url'>http://www.gbngr.com/library.php?1=agbgv3487ty.php</button></span>
</td><td align="right">
<input type="submit" value="" style='background:url(images/aboutpage.jpg) center no-repeat; border:none; background-size:contain; height:150px; width:150px; cursor:pointer; vertical-align:middle; background-color:#FFF' />
</td></tr></table>

</td></tr><tr><td style="padding:0px 23px" id="thirdtextabout">

<p>Greenbox... imagine a platform that brings out all the element of the Nigerian music... most of it tho. Letting you in on the Nigerian music you love, the people involved, the houses under which they operate and whats goin down on the green Nigerian soil. That platform is GreenBox. GreenBox is basically an archive of Nigerian Music.The archive offers the legendary music pieces and all the human elements that made them what they are. At GreenBox we position the spotlight so it illuminates every one in the industry, because we believe that they all play an important role in the soothing Nigerian music we have come to love.</p>

<span style='font-size:20px;'>Feedback</span><br />
<table style="width:100%; padding:5px 20px; " align="center" bgcolor="#EEE">
<tr><td>
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
		echo 'Fill all required fields';
	}
?>
<form action='agbgv3487ty.php' method='post'>
*<input required pattern="[A-Z a-z]{3,}" type='text' class='search' name='name' value=''  placeholder="Name"  size="28" style="background-color:#EEE; color:#222"/>
*<input type='email' class='search' name='contact'  placeholder="Email"  value='' src="100" width="100%" size="29" style="background-color:#EEE; color:#222"/>
*<input required type="" pattern="[A-Z a-z:-_]{3,}" required class='search' name='subject'  placeholder="Subject"  value='' size="28" style="background-color:#EEE; color:#222"/>
<tr><td>*<input type='text' pattern="[A-Z a-z:-_.,]{3,}" class='search' name='details' required placeholder="Message" value='' size="99" style="background-color:#EEE; color:#222"/></td></tr>
<tr><td colspan='2' align='center'><input type='submit' value='Send' style='border:thin #AAA; text-align:start; color:#999; background-color:#DDD; color:#222; width:100%; padding:5px;; text-align:center; cursor:pointer'/>
</form>

</td></tr></table>


</td></tr></table>

<script>
function copyToClipboard(text, id) {
	top.document.getElementById("play").src = "stats.php?copy="+id+"+";
    window.prompt("Copy Page Link. Use Ctrl+C or right click", text);
  }
window.onload = function() {
  	top.document.getElementById('title1').innerHTML='About Greenbox';
	top.document.getElementById('description').content='Greenbox... imagine a platform that brings out all the element...'; 
	top.document.getElementById('keywords').content='About Greenbox Nigeria, What Greenbox Nigeria is about';
};
</script>
</body>
</html>