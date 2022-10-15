<?php 
require "../db.php";


//$marshrut = R::findOne('marshrut', 'id = ?', [$_POST['id']]);

$id = $_POST['id'];

$marshrut = R::load('zagmarshrut', $id);

if(isset($_POST["tochka_starta"])){
    $marshrut->tochka_starta = $_POST["tochka_starta"];
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

$trigger_v_puti = false;
if($marshrut->avto_v_puti) $trigger_v_puti = true;


$trigger_klient = false;
if($marshrut->avto_pribylo) $trigger_klient = true;

$vremy_pribytia =  $marshrut->avto_pribylo_data;

$distance = $marshrut->distance;


 R::store($marshrut);


    $data = [ 'success' => true,
   'tochka_starta' => $marshrut->tochka_starta, 
   'tochka_dostavki' => $marshrut->tochka_dostavki, 
   'avto_v_puti' => $trigger_v_puti,
   'avto_pribylo' => $trigger_klient,
   'vremy_pribytia' => $vremy_pribytia,
   'distance' => $distance,
   ];
  echo json_encode( $data );

?>