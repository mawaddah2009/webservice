
<?php

include_once 'db.php';


function isToken(){
    global $con;
if (isset($_GET['token'])){
    $token = $_GET['token'];
}else if (isset($_POST['token'])){
    $token = $_POST['token'];
}else {
    //tiada token
    $obj = new stdClass();
    $obj->err = 'No Token';
    header('Content-type:application/json');
    echo json_encode($obj);
    exit;
}

$sql = "SELECT * FROM token where token = '$token'";
$rs = mysqli_query($con, $sql);
$rows = mysqli_fetch_array($rs);
if(!$rows){
    //token salah
    $obj = new stdClass();
    $obj->err = 'No Permission';
    header('Content-type:application/json');
    echo json_encode($obj);
    exit;
}
}