<?php

include 'db.php';
include 'token.php';
//verify token
//senario pertama- drp server client  php call web service

//buat function - proceed kalau token valid to next line
isToken();


//$id = $_GET['id'];
//check jika client x hantar id, default to 0
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$sql = "SELECT * FROM film WHERE film_id = $id";
$rs = mysqli_query($con, $sql);

if($rs){
    //ada data
    $rows = mysqli_fetch_array($rs);
    if (!$rows)  {
        //id tak wujud
        $data = new stdClass();
        $data->err = 'No Data';
    }else{
    $data = $rows;
    }
}else {
    //query prob, i.e id = character
    $data = new stdClass();
    $data->err = 'No Data';
}

//print data sbg json
//{} / [] -json_encode() vs json_decode()

header('Content-Type: application/json');
echo json_encode($data);

