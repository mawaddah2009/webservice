<?php
//create object tanpa cucstom class (class yg kita create sendiri)
$obj = new stdClass();
$obj->nama ='azman';
$obj->alamat = 'puchong';
//convert obj kepada string json
echo json_encode($obj);
echo "<hr>";
$arr = ['nama' =>'nita', 'umur'=>40] ;
$data = json_encode($arr);//jsonobj {"nama':"Nita", "umur":40}
echo $data;
//echo json_encode($arr,);


//json_encode()
//-convert arr / obj dlm php kpd json string
//json_decode()
//-convert string json kpd arry /obj dalm php