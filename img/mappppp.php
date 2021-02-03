<?php
$user_ip = getenv['REMOTE_ADDR'];
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));

$lat = $geo["geoplugin_latitude"];
$lon = $geo["geoplugin_longitude"];



echo "Latitude: ".$lat."<br>";
echo "Longitude: ".$lon."<br>";


 $lat1=$lat-0.007;
 $lat2=$lat+0.007;
 $long1=$lon-0.007;
 $long2=$lon+0.007;

echo $lat1."<br>";
echo $lat2."<br>";
echo $long1."<br>";
echo $long2."<br>";

/*
geoplugin_request
geoplugin_status
geoplugin_credit
geoplugin_city
geoplugin_region
geoplugin_areaCode
geoplugin_dmaCode
geoplugin_countryCode
geoplugin_countryName
geoplugin_continentCode
geoplugin_latitude
geoplugin_longitude
geoplugin_regionCode
geoplugin_regionName
geoplugin_currencyCode
geoplugin_currencySymbol
geoplugin_currencySymbol_UTF8
geoplugin_currencyConverter
*/
?>