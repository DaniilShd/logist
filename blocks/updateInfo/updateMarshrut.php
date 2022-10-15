<?php 

require "../../db.php";

// $marshrut = R::findOne('marshrut', 'id = ?', [$_GET["id_marshrut"]]);

 $id = $_GET["id_marshrut"];

//Обновляем строки через exec


//avto_pribylo_k_klientu
if ($_GET["name_row"] == "avto_pribylo_k_klientu"){
    R::exec('UPDATE `marshrut` SET `avto_pribylo_k_klientu` = :avto_pribylo_k_klientu WHERE id = :id', [
        'id' => $id,
        'avto_pribylo_k_klientu' => $_GET["value"]
      ]);
      if ($_GET["value"] == 1) {
        R::exec('UPDATE `marshrut` SET `avto_pribylo_k_klientu_data` = :avto_pribylo_k_klientu_data WHERE id = :id', [
            'id' => $id,
            'avto_pribylo_k_klientu_data' => date("Y-m-d H:i:s")
          ]);
          $time = date("Y-m-d H:i:s");
      } else {
        R::exec('UPDATE `marshrut` SET `avto_pribylo_k_klientu_data` = :avto_pribylo_k_klientu_data WHERE id = :id', [
            'id' => $id,
            'avto_pribylo_k_klientu_data' => NULL
          ]);
          $time = "";
      }
}

//tovar_prinyt
if ($_GET["name_row"] == "tovar_prinyt"){
    R::exec('UPDATE `marshrut` SET `tovar_prinyt` = :tovar_prinyt WHERE id = :id', [
        'id' => $id,
        'tovar_prinyt' => $_GET["value"]
      ]);
      if ($_GET["value"] == 1) {
        R::exec('UPDATE `marshrut` SET `tovar_prinyt_data` = :tovar_prinyt_data WHERE id = :id', [
            'id' => $id,
            'tovar_prinyt_data' => date("Y-m-d H:i:s")
          ]);
          $time = date("Y-m-d H:i:s");
      } else {
        R::exec('UPDATE `marshrut` SET `tovar_prinyt_data` = :tovar_prinyt_data WHERE id = :id', [
            'id' => $id,
            'tovar_prinyt_data' => NULL
          ]);
          $time = "";
      }
}


//tovar_ne_prinyt
if ($_GET["name_row"] == "tovar_ne_prinyt"){
    R::exec('UPDATE `marshrut` SET `tovar_ne_prinyt` = :tovar_ne_prinyt WHERE id = :id', [
        'id' => $id,
        'tovar_ne_prinyt' => $_GET["value"]
      ]);
      if ($_GET["value"] == 1) {
        R::exec('UPDATE `marshrut` SET `tovar_ne_prinyt_data` = :tovar_ne_prinyt_data WHERE id = :id', [
            'id' => $id,
            'tovar_ne_prinyt_data' => date("Y-m-d H:i:s")
          ]);
          $time = date("Y-m-d H:i:s");
      } else {
        R::exec('UPDATE `marshrut` SET `tovar_ne_prinyt_data` = :tovar_ne_prinyt_data WHERE id = :id', [
            'id' => $id,
            'tovar_ne_prinyt_data' => NULL
          ]);
          $time = "";
      }
}

//avto_v_puti
if ($_GET["name_row"] == "avto_v_puti"){
  R::exec('UPDATE `marshrut` SET `avto_v_puti` = :avto_v_puti WHERE id = :id', [
      'id' => $id,
      'avto_v_puti' => $_GET["value"]
    ]);
    if ($_GET["value"] == 1) {
      R::exec('UPDATE `marshrut` SET `avto_v_puti_data` = :avto_v_puti_data WHERE id = :id', [
          'id' => $id,
          'avto_v_puti_data' => date("Y-m-d H:i:s")
        ]);
        $time = date("Y-m-d H:i:s");
    } else {
      R::exec('UPDATE `marshrut` SET `avto_v_puti_data` = :avto_v_puti_data WHERE id = :id', [
          'id' => $id,
          'avto_v_puti_data' => NULL
        ]);
        $time = "";
    }
}

$data = ["name_time" => $time,
 ];
// $data = ['id' => $updateSklad,
//  ];

//R::store($updateSklad);
echo json_encode( $data );

?>
