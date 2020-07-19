<?php

// how PHP can receive a JSON string from an external web service and echo it AS-IS to a browser. || hardcoded zipcode

$zip = $_GET["zip"];

// unique API key: 8daec65b71fe3dcc287c42d95c2a3588

$url = "http://api.openweathermap.org/data/2.5/weather?zip=$zip,us&units=metric&appid=8daec65b71fe3dcc287c42d95c2a3588"; 

$fp = fopen($url, "r"); 

$contents = "";

while($more = fread ($fp, 1000)){      
	$contents .=  $more ;   
}

echo $contents ; 
?>