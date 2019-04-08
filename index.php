<?php
include ('class/db.class.php');
$db = new db('localhost','geek','root','usbw',3307);
if($db){
    //POBIERANIE DANYCH Z BAZY
    switch($_GET['type']){
        case 'airplanes': {
            $options = [
                ['flightDate','=','2019-04-08','string'],
            ];
                $response = [
                    'status' => 'SUCCESS',
                    'values' => $db->select('flights',$options)
                ];
            break;
        }
        default: {
            $response = [
                'status' => 'NOT FOUND',
            ];
            break;
        }
    }
} else {
    $response = [
        'status' => 'DB ERROR',
    ];
}

echo json_encode($response,JSON_PRETTY_PRINT);