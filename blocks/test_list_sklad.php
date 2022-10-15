<?php 
require "../db.php";


$avtoNaSklade = R::findOne('avtonasklade', 'id_request_avto = ?', [$id_avto_request]);

//Передача инфрмации с сервера из БД в формате json
$data = [ 'sklad_1_avto_arrival' => $avtoNaSklade->sklad_1_avto_arrival,
'sklad_1_start_loading' => $avtoNaSklade->sklad_1_start_loading,
'sklad_1_loading_completed' => $avtoNaSklade->sklad_1_loading_completed,
'avto_sent_to_client' => $avtoNaSklade->avto_sent_to_client,
'sklad_1_avto_arrival_data' => $avtoNaSklade->sklad_1_avto_arrival_data,
'sklad_1_start_loading_data' => $avtoNaSklade->sklad_1_start_loading_data,
'sklad_1_loading_completed_data' => $avtoNaSklade-> 	sklad_1_loading_completed_data,
];
  echo json_encode( $data );
?>