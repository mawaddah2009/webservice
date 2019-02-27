<?php
require "../vendor/autoload.php"; //include semua lib dari vendor

$url = "http://requestb.in/example";
$data = ["name" => "Nita", "email" => "hasnita@moh.gov.my"];

$client = new \GuzzleHttp\Client();

$result = $client->post($url,["json" => $data]);
echo $result->getBody();
?>