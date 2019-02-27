<?php
$server = 'localhost';
$user = 'root';
$pwd = '';
$db = 'sakila';
$con = mysqli_connect("$server", "$user", "$pwd", "$db");

if( ! $con ) {
    echo "Connection Problem!";
    exit;
}
?>