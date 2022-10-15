<?php 
require "../../db.php";


//$marshrut = R::findOne('marshrut', 'id = ?', [$_POST['id']]);

$id = $_POST['id'];

$marshrut = R::load('marshrut', $id);

if(isset($_POST["tockha_starta"])){
    $marshrut->tockha_starta = $_POST["tockha_starta"];
 }

 if(isset($_POST["tochka_dostavki"])){
    $marshrut->tochka_dostavki = $_POST["tochka_dostavki"];
 }

 if(isset($_POST["distance"])){
    $marshrut->distance = $_POST["distance"];
 }

 if(isset($_POST["time_trip"])){
    $marshrut->time_trip = $_POST["time_trip"];
 }

 if(isset($_POST["reshenie"])){
   $marshrut->reshenie = $_POST["reshenie"];
}
$trigger_v_puti = false;
if($marshrut->avto_v_puti) $trigger_v_puti = true;


$trigger_klient = false;
if($marshrut->avto_pribylo_k_klientu) $trigger_klient = true;

$vremy_pribytia =  $marshrut->avto_pribylo_k_klientu_data;

$distance = $marshrut->distance;


 R::store($marshrut);


    $data = [ 'success' => true,
   'tockha_starta' => $marshrut->tockha_starta, 
   'tochka_dostavki' => $marshrut->tochka_dostavki, 
   'avto_v_puti' => $trigger_v_puti,
   'avto_pribylo_k_klientu' => $trigger_klient,
   'vremy_pribytia' => $vremy_pribytia,
   'distance' => $distance,
   ];
  echo json_encode( $data );

?>