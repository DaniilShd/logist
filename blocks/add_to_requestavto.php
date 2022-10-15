<?php
require "../db.php";

$request_avto_id = R::load('requestavto', $_GET['id_request_avto']);
$request_avto_id->id_avto = $_GET['id_avto'];
R::store($request_avto_id);

//$request_avto_id = R::findOne('avto', 'id = ?', [$_GET['id_request_avto']]);

$avto = R::findOne('avto', 'id = ?', [$_GET['id_avto']]);
$avtocolor = R::findOne('avtocolor', 'id = ?', [$avto->color]);

$number_avto = $avto->number;
$name_driver = $avto->name_driver_1;
$phone_driver = $avto->phone_driver_1;
$color_code = $avtocolor->hex_code;

$data = [
  "number_avto" => $number_avto,
  "name_driver" => $name_driver,
  "phone_driver" => $phone_driver,
  "color_avto" => $color_code,
];

echo json_encode( $data );

?>