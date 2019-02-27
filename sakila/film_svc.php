<?php
//return senarai filem yg ada di kedai ini

//connect ke db
//query data
//print data sbg json


//$link = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");

$server = 'localhost';
$user = 'root';
$pwd = '';
$db = 'sakila';
$con = mysqli_connect("$server", "$user", "$pwd", "$db");

if( ! $con ) {
    echo "Connection Problem!";
    exit;
}

$sql = "SELECT * FROM film LIMIT 0,20";
$rs = mysqli_query($con, $sql);
//create arr utk arr obj kepd json
$arr = [];
//echo "Senarai Filem";
//ini return biasa
//return web service server
//echo "<hr>";
while ($row = mysqli_fetch_array($rs)){
    
    //echo "<hr>";
   // echo $row['title'] . '<br>';
   $obj = new stdClass();
   $obj->title = $row['title'];
   $obj->descr = $row['description'];
   $arr[] = $obj;
}

//print data sbg json
//{} / [] -json_encode() vs json_decode()
$json = json_encode($arr);
header('Content-Type: application/json');
echo $json;
