<?php include('top.php');
$x =$_GET['keyword'];
$keyword = strip_tags(trim($x));?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>
<link href='images/favicon.ico' type='image/x-icon' rel='shortcut icon'/>
<link href='zfgyugewiugf.css' rel='stylesheet' type='text/css' />
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<?php
if ($_GET['keyword'] == ''){echo "<form action='wghfdjetyjuj.php' method='GET'>
<table width='100%'><tr><td><input class='search' id='mytext' type='text' pattern='[A-Z a-z:-_]{3,}' name='keyword' required  maxlength='50' placeholder='search' style='background-color:#FFF; width:100%; color:#222'/><br/><br/><br/><br/><br/><br/><br/><br/><br/></td></tr>
<tr><td align='center'><input type='submit' value='' style='background:url(images/mobsrch.jpg) center no-repeat; background-size:cover; border:none; height:150px; width:150px; cursor:pointer; vertical-align:middle; background-color:#222' /></td>
        <input type='hidden' name='source' value='music'/>
        </form></tr></table>
";
?>
<script>
window.onload = function() {
  document.getElementById("mytext").focus();
};
</script> <?php }
$term = $_GET['keyword'];
$clean= strlen(trim($keyword));
if ($clean == 0)
	{
		echo"<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><table align='center' width='100%' style='background-color:#333; padding:10px;'>
			<tr>
    		<td align='center'  class='thirdtextWyt'>
	 			Insert a <b>valid keyword</b> to search
	    	</td></tr></table>";
		exit();
	}
$keyword=explode(' ',$keyword);
echo"<table align='center' width='100%'><tr><td align='left'><span id='firsttext'>{$_GET['keyword']}</td></tr></table>";


$lenght=count($keyword);


if (strlen($keyword[0]) > 2){$word1 = $keyword[0];}else{$word1 = 'greenbox';}
if (strlen($keyword[1]) > 2){$word2 = $keyword[1];}else{$word2 = 'greenbox';}
if (strlen($keyword[2]) > 2){$word3 = $keyword[2];}else{$word3 = 'greenbox';}
if (strlen($keyword[3]) > 2){$word4 = $keyword[3];}else{$word4 = 'greenbox';}
if (strlen($keyword[4]) > 2){$word5 = $keyword[4];}else{$word5 = 'greenbox';}
if (strlen($keyword[5]) > 2){$word6 = $keyword[5];}else{$word6 = 'greenbox';}
if (strlen($keyword[6]) > 2){$word7 = $keyword[6];}else{$word7 = 'greenbox';}
if (strlen($keyword[7]) > 2){$word8 = $keyword[7];}else{$word8 = 'greenbox';}


		
		$queryTweek = "SELECT * FROM songs WHERE 
		songTitle LIKE '%".$x."%' OR songArtist LIKE '%".$x."%'  OR songArtistFt LIKE '%".$x."%' OR songAlbum LIKE '%".$x."%' OR songProducer LIKE '%".$x."%' OR songLenght LIKE '%".$x."%' OR songSize LIKE '%".$x."%' OR songURL LIKE '%".$x."%' OR songGenre LIKE '%".$x."%' OR songYear LIKE '%".$x."%' OR songLanguage LIKE '%".$x."%'  LIMIT 4 ";
			$resultTweek = mysql_query($queryTweek, $cxn)
			or die("result no working");
			$match = mysql_num_rows($resultTweek);
			$counter=1;
if (mysql_num_rows($resultTweek)<1)
	{$searchcount += 1;}
	else{
while($rowTweek=mysql_fetch_assoc($resultTweek))
{{
		extract($rowTweek);
		$rower = $rowTweek;
		echo "<tr "; if ($counter%2 == 0) {echo "bgcolor='#262626'";} echo"><td id='cubeSongs'><div><table><tr><td>
		<button style='background:url(songsimg/$songArt) center no-repeat; border:none; background-size:contain; height:200px; width:200px; cursor: default; background-color:#262626'></button>
		</td>
		<td width='100%'>
		<table><tr><td>
		<span id='name'>
		"; echo substr_replace($songTitle,'',35); echo "
		</span>
		</td>
		</tr>
		<tr>
		<td>
		<span id='details'>";
		 echo $songArtist;
		 if ($songArtistFt != '') {echo " Ft ";} 
		 echo "$songArtistFt</span>
		</td>
		</tr>
		</table>
		</td>
		<td>
		<form action='preview.php' method='GET'><input type='submit' value='...' style='background-color:#222; border:none; width:100%; height:100%; font-size:10em; color:#FFF;' title='Preview'/><input type='hidden' name='songURL' value='$songURL' />
		</form>
		</td>
		</tr>
		</table>
		</td>
		</td>
		</tr>
		</table>
		</div>
		</td>
		</tr>";
		
		if ($counter == '5') {echo "<table style='background:url(images/"; if (!file_exists("images/mobmusicsponsor5.jpg")){echo 'bg.jpg';} else{echo 'mobsearchsponsor5.jpg';} echo ") center' height='200px' width='100%'><tr><td></td></tr></table>";}
		if ($counter == '10') {echo "<table style='background:url(images/"; if (!file_exists("images/mobmusicsponsor10.jpg")){echo 'bg.jpg';} else{echo 'mobsearchsponsor15.jpg';} echo ") center' height='200px' width='100%'><tr><td></td></tr></table>";}
		if ($counter == '15') {echo "<table style='background:url(images/"; if (!file_exists("images/mobmusicsponsor15.jpg")){echo 'bg.jpg';} else{echo 'mobsearchsponsor15.jpg';} echo ") center;' height='200px' width='100%'><tr><td></td></tr></table>";}
	$counter ++;} } 
		echo "<table height='150px'><tr><td></td></tr></table>";
}

	$match = 10 - $match;
		$query = "SELECT * FROM songs WHERE 
		songTitle LIKE '%".$word1."%' OR songTitle LIKE '%".$word2."%' OR songTitle LIKE '%".$word3."%' OR songTitle LIKE '%".$word4."%' OR songTitle LIKE '%".$word5."%' OR songTitle LIKE '%".$word6."%' OR songTitle LIKE '%".$word7."%' OR songTitle LIKE '%".$word8."%'  
		
		
		OR songArtist LIKE '%".$word1."%' OR songArtist LIKE '%".$word2."%' OR songArtist LIKE '%".$word3."%' OR songArtist LIKE '%".$word4."%' OR songArtist LIKE '%".$word5."%' OR songArtist LIKE '%".$word6."%' OR songArtist LIKE '%".$word7."%' OR songArtist LIKE '%".$word8."%'
		
		
		OR songArtistFt LIKE '%".$word1."%' OR songArtistFt LIKE '%".$word2."%' OR songArtistFt LIKE '%".$word3."%' OR songArtistFt LIKE '%".$word4."%' OR songArtistFt LIKE '%".$word5."%' OR songArtistFt LIKE '%".$word6."%' OR songArtistFt LIKE '%".$word7."%' OR songArtistFt LIKE '%".$word8."%' 
		
		
		OR songAlbum LIKE '%".$word1."%' OR songAlbum LIKE '%".$word2."%' OR songAlbum LIKE '%".$word3."%' OR songAlbum LIKE '%".$word4."%' OR songAlbum LIKE '%".$word5."%' OR songAlbum LIKE '%".$word6."%' OR songAlbum LIKE '%".$word7."%' OR songAlbum LIKE '%".$word8."%' OR songAlbum LIKE '%".$word1."%' 
		
		
		OR songProducer LIKE '%".$word1."%' OR songProducer LIKE '%".$word2."%' OR songProducer LIKE '%".$word3."%' OR songProducer LIKE '%".$word4."%' OR songProducer LIKE '%".$word5."%' OR songProducer LIKE '%".$word6."%' OR songProducer LIKE '%".$word7."%' OR songProducer LIKE '%".$word8."%'
		
		
		OR songLenght LIKE '%".$word1."%' OR songLenght LIKE '%".$word2."%' OR songLenght LIKE '%".$word3."%' OR songLenght LIKE '%".$word4."%' OR songLenght LIKE '%".$word5."%' OR songLenght LIKE '%".$word6."%' OR songLenght LIKE '%".$word7."%' OR songLenght LIKE '%".$word8."%' 
		
		
		OR songType LIKE '%".$word1."%' OR songType LIKE '%".$word2."%' OR songType LIKE '%".$word3."%' OR songType LIKE '%".$word4."%' OR songType LIKE '%".$word5."%' OR songType LIKE '%".$word6."%' OR songType LIKE '%".$word7."%' OR songType LIKE '%".$word8."%' 
		
		
		OR songSize LIKE '%".$word1."%' OR songSize LIKE '%".$word2."%' OR songSize LIKE '%".$word3."%' OR songSize LIKE '%".$word4."%' OR songSize LIKE '%".$word5."%' OR songSize LIKE '%".$word6."%' OR songSize LIKE '%".$word7."%' OR songSize LIKE '%".$word8."%' 
		
		
		OR songURL LIKE '%".$word1."%' OR songURL LIKE '%".$word2."%' OR songURL LIKE '%".$word3."%' OR songURL LIKE '%".$word4."%' OR songURL LIKE '%".$word5."%' OR songURL LIKE '%".$word6."%' OR songURL LIKE '%".$word7."%' OR songURL LIKE '%".$word8."%' 
		
		
		OR songGenre LIKE '%".$word1."%' OR songGenre LIKE '%".$word2."%' OR songGenre LIKE '%".$word3."%' OR songGenre LIKE '%".$word4."%' OR songGenre LIKE '%".$word5."%' OR songGenre LIKE '%".$word6."%' OR songGenre LIKE '%".$word7."%' OR songGenre LIKE '%".$word8."%' 
		
		
		OR songYear LIKE '%".$word1."%' OR songYear LIKE '%".$word2."%' OR songYear LIKE '%".$word3."%' OR songYear LIKE '%".$word4."%' OR songYear LIKE '%".$word5."%' OR songYear LIKE '%".$word6."%' OR songYear LIKE '%".$word7."%' OR songYear LIKE '%".$word8."%' 
		
		OR songLanguage LIKE '%".$word1."%' OR songLanguage LIKE '%".$word2."%' OR songLanguage LIKE '%".$word3."%' OR songLanguage LIKE '%".$word4."%' OR songLanguage LIKE '%".$word5."%' OR songLanguage LIKE '%".$word6."%' OR songLanguage LIKE '%".$word7."%' OR songLanguage LIKE '%".$word8. "% LIMIT $match' 
		";
		

		


		$result = mysql_query($query, $cxn)
			or die("result no worker");
if (mysql_num_rows($result)<1)
	{$searchcount += 1;}
	else{
		$counter=1;
while($row=mysql_fetch_assoc($result))
{
	if (in_array($songURL, $rower, FALSE)){
		}
	else{
    	extract($row);
		echo "<tr "; if ($counter%2 == 0) {echo "bgcolor='#262626'";} echo"><td id='cubeSongs'><div><table><tr><td>
        <button style='background:url(songsimg/$songArt) center no-repeat; border:none; background-size:contain; height:200px; width:200px; cursor: default; background-color:#262626'></button>
		</td>
		<td width='100%'>
		<table><tr><td>
		<span id='name'>
		"; echo substr_replace($songTitle,'',35); echo "
		</span>
		</td>
		</tr>
		<tr>
		<td>
		<span id='details'>";
		 echo $songArtist;
		 if ($songArtistFt != '') {echo " Ft ";} 
		 echo "$songArtistFt</span>
		</td>
		</tr>
		</table>
		</td>
		<td width='5%'>
		<form action='preview.php' method='GET'>
		<input type='submit' value='...' style='background-color:#222; border:none; height:100%; font-size:10em; color:#FFF; -webkit-appearance: none;' title='Preview'/>
		<input type='hidden' name='songURL' value='$songURL'/>
		</form>
		</td>
		</tr>
		</table>
		</td>
		</td>
		</tr>
		</table>
		</div>
		</td>
		</tr>";
		

		if ($counter == '5') {echo "<table style='background:url(images/"; if (!file_exists("images/mobmusicsponsor5.jpg")){echo 'bg.jpg';} else{echo 'mobsearchsponsor5.jpg';} echo ") center' height='200px' width='100%'><tr><td></td></tr></table>";}
		if ($counter == '10') {echo "<table style='background:url(images/"; if (!file_exists("images/mobmusicsponsor10.jpg")){echo 'bg.jpg';} else{echo 'mobsearchsponsor15.jpg';} echo ") center' height='200px' width='100%'><tr><td></td></tr></table>";}
		if ($counter == '15') {echo "<table style='background:url(images/"; if (!file_exists("images/mobmusicsponsor15.jpg")){echo 'bg.jpg';} else{echo 'mobsearchsponsor15.jpg';} echo ") center;' height='200px' width='100%'><tr><td></td></tr></table>";}
	$counter ++;} }
	echo "<table height='150px'><tr><td></td></tr></table>";
}



		$querypeople = "SELECT * FROM persons WHERE 
		personStageName LIKE '%".$word1."%' OR personStageName LIKE '%".$word2."%' OR personStageName LIKE '%".$word3."%' OR personStageName LIKE '%".$word4."%' OR personStageName LIKE '%".$word5."%' OR personStageName LIKE '%".$word6."%' OR personStageName LIKE '%".$word7."%' OR personStageName LIKE '%".$word8."%'  
		
		
		OR personBirthName LIKE '%".$word1."%' OR personBirthName LIKE '%".$word2."%' OR personBirthName LIKE '%".$word3."%' OR personBirthName LIKE '%".$word4."%' OR personBirthName LIKE '%".$word5."%' OR personBirthName LIKE '%".$word6."%' OR personBirthName LIKE '%".$word7."%' OR personBirthName LIKE '%".$word8."%'
		
		
		OR personFanName LIKE '%".$word1."%' OR personFanName LIKE '%".$word2."%' OR personFanName LIKE '%".$word3."%' OR personFanName LIKE '%".$word4."%' OR personFanName LIKE '%".$word5."%' OR personFanName LIKE '%".$word6."%' OR personFanName LIKE '%".$word7."%' OR personFanName LIKE '%".$word8."%' 
		
		
		OR personBirthYear LIKE '%".$word1."%' OR personBirthYear LIKE '%".$word2."%' OR personBirthYear LIKE '%".$word3."%' OR personBirthYear LIKE '%".$word4."%' OR personBirthYear LIKE '%".$word5."%' OR personBirthYear LIKE '%".$word6."%' OR personBirthYear LIKE '%".$word7."%' OR personBirthYear LIKE '%".$word8."%' 
		
		
		OR personPlaceOfOrigin LIKE '%".$word1."%' OR personPlaceOfOrigin LIKE '%".$word2."%' OR personPlaceOfOrigin LIKE '%".$word3."%' OR personPlaceOfOrigin LIKE '%".$word4."%' OR personPlaceOfOrigin LIKE '%".$word5."%' OR personPlaceOfOrigin LIKE '%".$word6."%' OR personPlaceOfOrigin LIKE '%".$word7."%' OR personPlaceOfOrigin LIKE '%".$word8."%'
		
		
		OR personGenre LIKE '%".$word1."%' OR personGenre LIKE '%".$word2."%' OR personGenre LIKE '%".$word3."%' OR personGenre LIKE '%".$word4."%' OR personGenre LIKE '%".$word5."%' OR personGenre LIKE '%".$word6."%' OR personGenre LIKE '%".$word7."%' OR personGenre LIKE '%".$word8."%' 
		
		
		OR personProfession LIKE '%".$word1."%' OR personProfession LIKE '%".$word2."%' OR personProfession LIKE '%".$word3."%' OR personProfession LIKE '%".$word4."%' OR personProfession LIKE '%".$word5."%' OR personProfession LIKE '%".$word6."%' OR personProfession LIKE '%".$word7."%' OR personProfession LIKE '%".$word8."%' 
		
		
		OR personCareerStartYear LIKE '%".$word1."%' OR personCareerStartYear LIKE '%".$word2."%' OR personCareerStartYear LIKE '%".$word3."%' OR personCareerStartYear LIKE '%".$word4."%' OR personCareerStartYear LIKE '%".$word5."%' OR personCareerStartYear LIKE '%".$word6."%' OR personCareerStartYear LIKE '%".$word7."%' OR personCareerStartYear LIKE '%".$word8."%' 
		
		
		OR personLabel LIKE '%".$word1."%' OR personLabel LIKE '%".$word2."%' OR personLabel LIKE '%".$word3."%' OR personLabel LIKE '%".$word4."%' OR personLabel LIKE '%".$word5."%' OR personLabel LIKE '%".$word6."%' OR personLabel LIKE '%".$word7."%' OR personLabel LIKE '%".$word8."%' LIMIT 8
		";
		

		$resultpeople = mysql_query($querypeople, $cxn)
			or die("result no work people");
if (mysql_num_rows($resultpeople)<1)
{$searchcount += 1;}
	else{
$counter=1;
while($rowpeople=mysql_fetch_assoc($resultpeople))
		{extract($rowpeople);
echo"<form action='vghdtywtrey.php' method='get'>";
		echo "<tr><td align='center'><input type='submit' name='person' value="; ?> "<?php echo $personStageName ?> " <?php echo" style='font-size:0px;background-image:url(personsimg/$personPic1); background-size:cover; background-position:center; background-repeat:no-repeat; border:none; height:400px; width:400px; cursor: pointer; background-color:#222; border-radius:400px'/></td></tr>
		<tr valign='middle'><td align='center'><span id='name'>$personStageName</span><br/><br/></td></tr>
		";}
echo'</form><br/><br/><br/><br/>';
	echo "<table height='150px'><tr><td></td></tr></table>";
}






		$querylabel = "SELECT * FROM labels WHERE 
		labelName LIKE '%".$word1."%' OR labelName LIKE '%".$word2."%' OR labelName LIKE '%".$word3."%' OR labelName LIKE '%".$word4."%' OR labelName LIKE '%".$word5."%' OR labelName LIKE '%".$word6."%' OR labelName LIKE '%".$word7."%' OR labelName LIKE '%".$word8."%'  
		
		
		OR labelOwner LIKE '%".$word1."%' OR labelOwner LIKE '%".$word2."%' OR labelOwner LIKE '%".$word3."%' OR labelOwner LIKE '%".$word4."%' OR labelOwner LIKE '%".$word5."%' OR labelOwner LIKE '%".$word6."%' OR labelOwner LIKE '%".$word7."%' OR labelOwner LIKE '%".$word8."%'
		
		
		OR labelIntro LIKE '%".$word1."%' OR labelIntro LIKE '%".$word2."%' OR labelIntro LIKE '%".$word3."%' OR labelIntro LIKE '%".$word4."%' OR labelIntro LIKE '%".$word5."%' OR labelIntro LIKE '%".$word6."%' OR labelIntro LIKE '%".$word7."%' OR labelIntro LIKE '%".$word8."%' 
				
		
		OR labelArtists LIKE '%".$word1."%' OR labelArtists LIKE '%".$word2."%' OR labelArtists LIKE '%".$word3."%' OR labelArtists LIKE '%".$word4."%' OR labelArtists LIKE '%".$word5."%' OR labelArtists LIKE '%".$word6."%' OR labelArtists LIKE '%".$word7."%' OR labelArtists LIKE '%".$word8."%' 
		
		
		OR labelProducers LIKE '%".$word1."%' OR labelProducers LIKE '%".$word2."%' OR labelProducers LIKE '%".$word3."%' OR labelProducers LIKE '%".$word4."%' OR labelProducers LIKE '%".$word5."%' OR labelProducers LIKE '%".$word6."%' OR labelProducers LIKE '%".$word7."%' OR labelProducers LIKE '%".$word8."%' LIMIT 8
		";


		$resultlabel = mysql_query($querylabel, $cxn)
			or die("result no work label");
if (mysql_num_rows($resultlabel)<1)
{$searchcount += 1;}
	else{echo"<form action='rgcgtrdstyfu.php' method='GET'>";
while($rowlabel=mysql_fetch_assoc($resultlabel))
		{extract($rowlabel);
		echo "
		<table align='center' style='margin:7px 15px' width='100%'><tr><td align='center'><input type='submit' name='label' value='$labelName' style='background-image:url(labelsimg/$labelPic); font-size:0px; background-size:cover; background-position:center; background-repeat:no-repeat; border:none; height:400px; width:400px; background-color:#222;'></button>
		</td></tr><tr><td align='center'><span id='name'>$labelName</span></td></tr><br/><br/><br/><br/>";
		}
		echo "<table height='150px'><tr><td></td></tr></table></form>";}





		$queryactivities = "SELECT * FROM activities WHERE 
		activityName LIKE '%".$word1."%' OR activityName LIKE '%".$word2."%' OR activityName LIKE '%".$word3."%' OR activityName LIKE '%".$word4."%' OR activityName LIKE '%".$word5."%' OR activityName LIKE '%".$word6."%' OR activityName LIKE '%".$word7."%' OR activityName LIKE '%".$word8."%'  
		
		
		OR activityInfo LIKE '%".$word1."%' OR activityInfo LIKE '%".$word2."%' OR activityInfo LIKE '%".$word3."%' OR activityInfo LIKE '%".$word4."%' OR activityInfo LIKE '%".$word5."%' OR activityInfo LIKE '%".$word6."%' OR activityInfo LIKE '%".$word7."%' OR activityInfo LIKE '%".$word8."%'
		
		
		OR activityDate LIKE '%".$word1."%' OR activityDate LIKE '%".$word2."%' OR activityDate LIKE '%".$word3."%' OR activityDate LIKE '%".$word4."%' OR activityDate LIKE '%".$word5."%' OR activityDate LIKE '%".$word6."%' OR activityDate LIKE '%".$word7."%' OR activityDate LIKE '%".$word8."%' ORDER BY activityDate DESC LIMIT 4
		";

		$resultactivities = mysql_query($queryactivities, $cxn)
			or die("result no work activities");
if (mysql_num_rows($resultactivities)<1)
	{$searchcount += 1;}
	else{
while($rowactivities=mysql_fetch_assoc($resultactivities))
		{extract($rowactivities);
	echo"<form action='pjhygfyfjhb.php' method='get'><table width='100%' style='margin:10px 0px; padding:5px 5px;'><tr class='blog' bgcolor='#222' height='400px'><td style='padding:0px 15px;' width='90%'>
<input type='submit' name='activity' value='$activityName' style='background:url() center no-repeat; color:#FFF; border:none; background-size:contain; font-size:30px; width:100%; text-align:left; cursor:pointer; vertical-align:middle; background-color:#222; height:200px; table-layout:fixed; overflow:hidden' />
</td><td align='right' valign='top' id='dateStamp1'style='padding:0px 15px;'>";
if ($dateDay<10) {echo "0$dateDay";}else {echo $dateDay;} echo "<span id='dateStamp2'>"; if ($dateMonth<10) {echo "0$dateMonth";}else {echo $dateMonth;}echo"</td>
</tr><tr><td bgcolor='#555' style='background:url(activitiesimg/$activityPic) center no-repeat; background-size:cover; height:20px;' colspan='2'></td></tr></table></form><br/><br/><br/><br/>";}
		echo "<table height='150px'><tr><td></td></tr></table>";
		}
		
		
if ($searchcount == '5'){echo"<span style='font-size:50px'>No result for your search</span><br/>
<form action='wghfdjetyjuj.php' method='GET'>
<table width='100%'><tr><td><input class='search' id='mytext' type='text' pattern='[A-Z a-z:-_]{3,}' name='keyword' required  maxlength='50' placeholder='search' style='background-color:#FFF; width:100%; color:#222'/><br/><br/><br/><br/><br/><br/><br/><br/><br/></td></tr>
<tr><td align='center'><input type='submit' value='{$_GET['keyword']}' style='background:url(images/mobsrch.jpg) center no-repeat; background-size:cover; border:none; height:150px; width:150px; cursor:pointer; vertical-align:middle; background-color:#222' /></td>
        <input type='hidden' name='source' value='music'/>
        </form></tr></table>
";}
?>
<table><tr height="150px"><td></td></tr></table>
<script>
function openOptions(id)
	{
		var x = document.getElementById(id).style;
		if (x.visibility == 'hidden')
			{
				x.visibility = 'visible';
				x .height = '100px'
			}
		else
			{
				x.visibility = 'hidden';
				x .height = '0px'
			}
	}
window.onload = function() {
  	top.document.getElementById('title1').innerHTML='Search';
	top.document.getElementById('description').content='Search for Nigerian music, people, labels and news';
	top.document.getElementById('keywords').content='Nigerian Music,  Artist, label, song, news, search';

};
function copyToClipboard(text, id) {
	top.document.getElementById("play").src = "stats.php?copy=music&musicID="+id;
    window.prompt("Copy to clipboard: its selected, oya you copy", text);
  }
</script>
</body>
</html>