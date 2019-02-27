<?php
//read data melalui web service RESTful webservices di
//jsonplaceholder

require '../vendor/autoload.php';
$client = new \GuzzleHttp\Client();
//$client = new \GuzzleHttp\Client(['defaults' =>['verify' => 'false']]);

$response = $client->request('GET','http://jsonplaceholder.typicode.com/posts/20',[]);
//var_dump($response->getBody()->getContents());
$str = $response->getBody()->getContents();
$data = json_decode($str); //object bukan array


    echo $data->title;
    echo '<hr>';



$response = $client->request('GET','http://jsonplaceholder.typicode.com/posts',[]);
//var_dump($response->getBody()->getContents());
$str = $response->getBody()->getContents();
$arr = json_decode($str); 
//convert data json ke array /object
//dlm php 
foreach ($arr as $data){
    echo $data->title . '<br';

}