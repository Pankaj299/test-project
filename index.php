<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
   function isWeekend($date) {
    $weekDay = date('w', strtotime($date));
    return ($weekDay == 0 || $weekDay == 6);
}

$d= "29/10/2014";
      $weekDay = date('w', strtotime($d));;
	  $defaultValue =date('U');// date('Y', $now) . '-' . date('m', $now) . '-' . (date('d', $now));
	  echo $defaultValue;
        ?>

<br>
==================================================================
<br>
<?php
$dt = date("Y-m-d"); echo $dt;
echo date( "Y-m-d", strtotime( "$dt +1 day" ) );?>


<?php

echo date('Y-m-d', strtotime('-3 days'));?>




=======================ttttttttttteeeeeeeeesssssssss
<?php
//$i=9000000;
//       $body=printf("Hi %s,Thank you for registering; Your account has been activated",$i);;
//    
//echo $body;
//echo '<br>';
//
//$mynumber='7838456';
//$str= substr($mynumber, 0, 3);
//echo '<br>';
//
//$number = $str;
//$sum = 0;
//do {
//    $sum += $number % 10;
//}
//while ($number = (int) $number / 10);
//$arr1=array(1,2,3,5,6);
//if(!in_array($sum, $arr1)){
//    return true;
//}else{
//    return false;
//}

?>

=========================================trrrrrrr=============

<?php
$url="https://www.satvacart.com/index.php/customer/account/resetpassword/?id=23&token=152550ea63c030fe95533a490295f0cb";
$url = str_replace('satvacart', 'm.satvacart', $url);
//preg_replace("/^satvacart:/i", "m.satvacart:", $url);

echo getCurrentURL();
?>


<?php

function getCurrentURL() {
$protocol = "http";
if($_SERVER["SERVER_PORT"]==443 || (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"]=="on")) {
$protocol .= "s";
$protocol_port = $_SERVER["SERVER_PORT"];
} else {
$protocol_port = 80;
}
$host = $_SERVER["HTTP_HOST"];
$port = $_SERVER["SERVER_PORT"];
$request_path = $_SERVER["PHP_SELF"];
$querystr = $_SERVER["QUERY_STRING"];
$url = $protocol."://".$host.(($port!=$protocol_port && strpos($host,":")==-1)?":".$port:"").$request_path.(empty($querystr)?"":"?".$querystr);
return $url;
}
?>
<hr>

<?php
$add=urlencode("Sector 54,Gurgaon,Haryana");
        $re='IN';
$url = "http://maps.google.com/maps/api/geocode/json?address=$add&sensor=false&region=$re";
$response = file_get_contents($url);
$response = json_decode($response, true);
 
//print_r($response);
 
$lat = $response['results'][0]['geometry']['location']['lat'];
$long = $response['results'][0]['geometry']['location']['lng'];
 
echo "latitude: " . $lat . " longitude: " . $long;

?>
==============================================================================


    </body>
</html>
