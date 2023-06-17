<?php

// Created at Sat 17 Jun 7:11 PM
// Developer By Azozz ALFiras

class PixelCake{
public function SearchAppName($App_Name){

$url = "https://apiv2.iphonecake.com/appcake/appcake_api/spv6/appsearch_r.php?device=1&q=$App_Name&p=0";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array(
   '"Accept": "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",",
   ""User-Agent": "appcakej/7.0.4 (iPhone; iOS 13.6.1; Scale/3.00)",",
   ""Connection": "close",",
   ""Host": "apiv2.iphonecake.com",",
   ""Accept-Encoding": "gzip, deflate",",
   ""Cache-Control": "max-age=0"",
   "Content-Type: application/x-www-form-urlencoded",
   "Content-Length: 0",
   ');
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
return $resp;//json_encode($resp);

    }


public function SearchLinks($App_id){
$url = "https://apiv2.iphonecake.com/appcake/appcake_api/ipastore_ios_link.php?type=1&id=$App_id";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array(
'"Accept": "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",",
""User-Agent": "appcakej/7.0.4 (iPhone; iOS 13.6.1; Scale/3.00)",",
""Connection": "close",",
""Host": "apiv2.iphonecake.com",",
""Accept-Encoding": "gzip, deflate",",
""Cache-Control": "max-age=0"",
"Content-Type: application/x-www-form-urlencoded",
"Content-Length: 0",
');
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
return $resp;//json_encode($resp);

}
}




?>