<?php
$dbroot = 'gbngrcom';
$dbpsw = 'Gallery14:';
$dbname = 'gbngrcom_gb_db';

$cxn = mysql_connect("localhost", $dbroot, $dbpsw);
if (!$cxn)
{
	header("Location:http://www.gbngr.com");
	exit;
}
else if (!mysql_select_db ($dbname, $cxn)) 
{
    mysql_query('CREATE DATABASE '.$dbname);
	mysql_select_db($dbname, $cxn);
	include_once("rab_embed.php");
}
else
{
	mysql_select_db($dbname, $cxn);
	include 'Mobile_Detect.php';
}
?>