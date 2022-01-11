<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
	<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
	<link href="front.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php include_once("analyticstracking.php") ?>
<table width="100%" bgcolor="#262626" height="500px" style="background:url(images/<?php  if (!file_exists("images/sponsor.jpg")){echo 'bg.jpg';} else{echo 'sponsor.jpg';} ?>) center no-repeat; background-size:cover;">
<tr height="20px">
<td>
<table width="100%">
<tr class='home'>
<td valign="top">
<span id="secondtext">Welcome to Greenbox Music</span>
<div class="thirdtextWyt">Your one-stop location for nigerian music</div>
</td>
<td align="right">
<div style="background-color:#222; padding:0px 5px 0px 0px; width:215px">
<form action='lvrgtj4vu58un.php' method='GET'>
		<input class='search' type='text' name='keyword' required  maxlength='50' placeholder="search"/>
        <input type="submit" value="" style='background:url(images/srch.jpg) center no-repeat; background-size:cover; border:none; height:17px; width:17px; cursor:pointer; vertical-align:middle; background-color:#222' />
        <input type="hidden" name="source" value="music"/>
        </form></div>
</td>

</tr>

<tr height="300px">

<td>
</td>
<td>
</td>

</tr><tr class='home'>

<td width="50%" style="padding:10px">
<span id="secondtext">Discover Greenbox</span>
<div class="thirdtextWyt">What we about</div>
</td>
<td>
<!--<span id="secondtext">Discover Sponsor</span>
<div class="thirdtextWyt">Know what our soponsor has instalk for you and how to get to it.</div>-->
</td>

</tr><tr height="60px" class='home'>

<td width="50%" align="right">
<!--<form method='get' action="agbgv3487ty.php">
<input type='submit' value='About' style='font-size:18px; text-align:center; background-size:15px 15px; background-repeat:no-repeat; border:none; height:44px; width:100px; cursor: pointer; background-color:#333; color:#FFF'/>
</form>-->
</td>
<td width="50%" align="right">
<form method='get' action="agbgv3487ty.php">
<input type='submit' value='Discover' style='font-size:18px; text-align:center; background-size:15px 15px; background-repeat:no-repeat; border:none; height:44px; width:100px; cursor: pointer; background-color:#333; margin-right:10px; color:#FFF'/>
</form>
</td>
</tr>
</table>

</td>
</tr>
</table>

</td>
</tr>
</table>
<script>
window.onload = function() {
  	top.document.getElementById('title1').innerHTML='Greenbox Library';
	top.document.getElementById('description').content='Feel the Nigerian music industry and what she has to offer';
	top.document.getElementById('keywords').content='Nigerian Music,  Artist, label, song, news';
};
</script>
</body>
</html>