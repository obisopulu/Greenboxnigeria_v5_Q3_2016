<?php include("rab_dbcon.php");

function get_ip_address() {
    $ip_keys = array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR');
    foreach ($ip_keys as $key) {
        if (array_key_exists($key, $_SERVER) === true) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                // trim for safety measures
                $ip = trim($ip);
                // attempt to validate IP
                if (validate_ip($ip)) {
                    return $ip;
                }
            }
        }
    }
    return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : false;
}
/**
 * Ensures an ip address is both a valid IP and does not fall within
 * a private network range.
 */
function validate_ip($ip)
{
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
        return false;
    }
    return true;
}

$userIP=get_ip_address();

$detect = new Mobile_Detect();

if ($detect->isMobile()){
$anonymous='moblie_user ';
}
else{
$anonymous='desktop_user ';
}


$queryAIP = "SELECT * FROM anonymous WHERE anonymousIP ='$userIP'";
	$resultAIP = mysql_query($queryAIP, $cxn)
		or die("result no work sha");
		$result= mysql_fetch_assoc($resultAIP);
					extract($result);
	if (mysql_num_rows($resultAIP)>0)
		{$anonymousRating+= 1;
			$query = "UPDATE anonymous SET anonymousRating = '$anonymousRating' WHERE anonymousIP = '$anonymousIP' ";
		
		mysql_query($query, $cxn) or die('vhgcghvuhj');
		}
	else
		{
			$date=date('msid');
			$anonymous = $anonymous.$date;
			$today = date("mdY"); 
			$sql = "INSERT INTO  anonymous (  anonymousID,  anonymousName , anonymousIP ,  anonymousRating ,  anonymousDownload , anonymousRegDate ) 
VALUES (NULL , '$anonymous' , '$userIP' , '1' , '' , '$today')";
			$result = mysql_query($sql, $cxn) 
			or die("Couldn't execute insert query anon.");
		}
?>