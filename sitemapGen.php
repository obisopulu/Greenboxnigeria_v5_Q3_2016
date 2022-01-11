<?php 
include("rab_dbcon.php");
$date = date("Y-m-d");
unlink('sitemap.xml');
$result1=mysqli_query($cxn, "SELECT songURL FROM songs");
$result2=mysqli_query($cxn, "SELECT blogName FROM blog");
$result3=mysqli_query($cxn, "SELECT personStageName FROM persons");
$result4=mysqli_query($cxn, "SELECT labelName FROM labels");
$result5=mysqli_query($cxn, "SELECT videoTitle FROM videos");

$xml = new DOMDocument("1.0","UTF-8");
$xml->formatOutput=true;

	$urlset = $xml -> createElement("urlset");
	$xml -> appendChild($urlset);

while($row1=mysqli_fetch_array($result1)){
	extract($row1);
		$url = $xml -> createElement("url");
		$urlset -> appendChild($url);
		
			$loc = $xml -> createElement("loc", "http://www.greenboxnigeria.com/archive/track-".$songURL);
			$url -> appendChild($loc);
			
			$lastmod = $xml -> createElement("lastmod", $date);
			$url -> appendChild($lastmod);

			$changefreq = $xml -> createElement("changefreq","weekly");
			$url -> appendChild($changefreq);
			
			$priority = $xml -> createElement("priority","0.5");
			$url -> appendChild($priority);
}
while($row2=mysqli_fetch_array($result2)){
	extract($row2);
		$url = $xml -> createElement("url");
		$urlset -> appendChild($url);
																																															$activityName=str_replace(' ', '___', $activityName);
																																															$activityName=str_replace(' ', '__', $activityName);
																																															$activityName=str_replace(' ', '_', $activityName);
			$loc = $xml -> createElement("loc", "http://www.greenboxnigeria.com/archive/article-".$activityName);
			$url -> appendChild($loc);
			
			$lastmod = $xml -> createElement("lastmod", $date);
			$url -> appendChild($lastmod);

			$changefreq = $xml -> createElement("changefreq","weekly");
			$url -> appendChild($changefreq);
			
			$priority = $xml -> createElement("priority","0.5");
			$url -> appendChild($priority);
}
while($row3=mysqli_fetch_array($result3)){
	extract($row3);
		$url = $xml -> createElement("url");
		$urlset -> appendChild($url);
																																															$personed=str_replace(' ', '___', $personed);
																																															$personed=str_replace(' ', '__', $personed);
																																															$personed=str_replace(' ', '_', $personed);
			$loc = $xml -> createElement("loc", "http://www.greenboxnigeria.com/archive/person-".$personStageName);
			$url -> appendChild($loc);
			
			$lastmod = $xml -> createElement("lastmod", $date);
			$url -> appendChild($lastmod);

			$changefreq = $xml -> createElement("changefreq","weekly");
			$url -> appendChild($changefreq);
			
			$priority = $xml -> createElement("priority","0.5");
			$url -> appendChild($priority);
}
while($row4=mysqli_fetch_array($result4)){
	extract($row4);
		$url = $xml -> createElement("url");
		$urlset -> appendChild($url);
																																															$labelName=str_replace(' ', '___', $labelName);
																																															$labelName=str_replace(' ', '__', $labelName);
																																															$labelName=str_replace(' ', '_', $labelName);
			$loc = $xml -> createElement("loc", "http://www.greenboxnigeria.com/archive/label-".$labelName);
			$url -> appendChild($loc);
			
			$lastmod = $xml -> createElement("lastmod", $date);
			$url -> appendChild($lastmod);

			$changefreq = $xml -> createElement("changefreq","weekly");
			$url -> appendChild($changefreq);
			
			$priority = $xml -> createElement("priority","0.5");
			$url -> appendChild($priority);
}
while($row5=mysqli_fetch_array($result5)){
	extract($row5);
		$url = $xml -> createElement("url");
		$urlset -> appendChild($url);
																																															$videoTitle=str_replace(' ', '___', $videoTitle);
																																															$videoTitle=str_replace(' ', '__', $videoTitle);
																																															$videoTitle=str_replace(' ', '_', $videoTitle);
			$loc = $xml -> createElement("loc", "http://www.greenboxnigeria.com/archive/video-".$videoTitle);
			$url -> appendChild($loc);
			
			$lastmod = $xml -> createElement("lastmod", $date);
			$url -> appendChild($lastmod);

			$changefreq = $xml -> createElement("changefreq","weekly");
			$url -> appendChild($changefreq);
			
			$priority = $xml -> createElement("priority","0.5");
			$url -> appendChild($priority);
}
echo "<xmp>".$xml -> saveXML()."</xmp>";
$xml -> save("sitemap.xml");



?>