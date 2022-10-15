<?php 

require "../../db.php";

// $updateSklad = R::load('avtonasklade', 'id_request_avto = ?', [$_GET["id_avto_request"]]);
// $updateSklad->sklad_1_avto_arrival_data = date("Y-m-d H:i:s");
// R::store($updateSklad);

// R::exec('UPDATE `avtonasklade` SET `sklad_1_avto_arrival_data` = :sklad_1_avto_arrival_data WHERE id_request_avto = :id_request_avto', [
//     'id_request_avto' => $_GET["id_avto_request"],
//     'sklad_1_avto_arrival_data' => date("Y-m-d H:i:s"),
//   ]);

//   R::exec('UPDATE `avtonasklade` SET `sklad_1_avto_arrival_data` = :sklad_1_avto_arrival_data WHERE id_request_avto = :id_request_avto', [
//     'id_request_avto' => $_GET["id_avto_request"],
//     'sklad_1_avto_arrival_data' => $_GET["value"],
//   ]);
 
$updateSklad = R::findOne('avtonasklade', 'id_request_avto = ?', [$_GET["id_request_avto"]]);

$id = $updateSklad->id;

//$updateSklad = R::load('avtonasklade', $id);
//  if(isset($_GET["value"])){
//      $updateSklad->$_GET["name_row"] = $_GET["value"];
//  } else {
//      $updateSklad->$_GET["name_row"] = 0;
//  }


//Обновляем строки через exec
//sklad_1_avto_arrival
if ($_GET["name_row"] == "sklad_1_avto_arrival"){
    R::exec('UPDATE `avtonasklade` SET `sklad_1_avto_arrival` = :sklad_1_avto_arrival WHERE id = :id', [
        'id' => $id,
        'sklad_1_avto_arrival' => $_GET["value"]
      ]);
      if ($_GET["value"] == 1) {
        R::exec('UPDATE `avtonasklade` SET `sklad_1_avto_arrival_data` = :sklad_1_avto_arrival_data WHERE id = :id', [
            'id' => $id,
            'sklad_1_avto_arrival_data' => date("Y-m-d H:i:s")
          ]);
          $time = date("Y-m-d H:i:s");
      } else {
        R::exec('UPDATE `avtonasklade` SET `sklad_1_avto_arrival_data` = :sklad_1_avto_arrival_data WHERE id = :id', [
            'id' => $id,
            'sklad_1_avto_arrival_data' => NULL
          ]);
          $time = "";
      }
}

//sklad_1_start_loading
if ($_GET["name_row"] == "sklad_1_start_loading"){
    R::exec('UPDATE `avtonasklade` SET `sklad_1_start_loading` = :sklad_1_start_loading WHERE id = :id', [
        'id' => $id,
        'sklad_1_start_loading' => $_GET["value"]
      ]);
      if ($_GET["value"] == 1) {
        R::exec('UPDATE `avtonasklade` SET `sklad_1_start_loading_data` = :sklad_1_start_loading_data WHERE id = :id', [
            'id' => $id,
            'sklad_1_start_loading_data' => date("Y-m-d H:i:s")
          ]);
          $time = date("Y-m-d H:i:s");
      } else {
        R::exec('UPDATE `avtonasklade` SET `sklad_1_start_loading_data` = :sklad_1_start_loading_data WHERE id = :id', [
            'id' => $id,
            'sklad_1_start_loading_data' => NULL
          ]);
          $time = "";
      }
}

//sklad_1_loading_completed
if ($_GET["name_row"] == "sklad_1_loading_completed"){
    R::exec('UPDATE `avtonasklade` SET `sklad_1_loading_completed` = :sklad_1_loading_completed WHERE id = :id', [
        'id' => $id,
        'sklad_1_loading_completed' => $_GET["value"]
      ]);
      if ($_GET["value"] == 1) {
        R::exec('UPDATE `avtonasklade` SET `sklad_1_loading_completed_data` = :sklad_1_loading_completed_data WHERE id = :id', [
            'id' => $id,
            'sklad_1_loading_completed_data' => date("Y-m-d H:i:s")
          ]);
          $time = date("Y-m-d H:i:s");
      } else {
        R::exec('UPDATE `avtonasklade` SET `sklad_1_loading_completed_data` = :sklad_1_loading_completed_data WHERE id = :id', [
            'id' => $id,
            'sklad_1_loading_completed_data' => NULL
          ]);
          $time = "";
      }
}


//sklad_2_avto_arrival
if ($_GET["name_row"] == "sklad_2_avto_arrival"){
    R::exec('UPDATE `avtonasklade` SET `sklad_2_avto_arrival` = :sklad_2_avto_arrival WHERE id = :id', [
        'id' => $id,
        'sklad_2_avto_arrival' => $_GET["value"]
      ]);
      if ($_GET["value"] == 1) {
        R::exec('UPDATE `avtonasklade` SET `sklad_2_avto_arrival_data` = :sklad_2_avto_arrival_data WHERE id = :id', [
            'id' => $id,
            'sklad_2_avto_arrival_data' => date("Y-m-d H:i:s")
          ]);
          $time = date("Y-m-d H:i:s");
      } else {
        R::exec('UPDATE `avtonasklade` SET `sklad_2_avto_arrival_data` = :sklad_2_avto_arrival_data WHERE id = :id', [
            'id' => $id,
            'sklad_2_avto_arrival_data' => NULL
          ]);
          $time = "";
      }
}

//sklad_2_start_loading
if ($_GET["name_row"] == "sklad_2_start_loading"){
    R::exec('UPDATE `avtonasklade` SET `sklad_2_start_loading` = :sklad_2_start_loading WHERE id = :id', [
        'id' => $id,
        'sklad_2_start_loading' => $_GET["value"]
      ]);
      if ($_GET["value"] == 1) {
        R::exec('UPDATE `avtonasklade` SET `sklad_2_start_loading_data` = :sklad_2_start_loading_data WHERE id = :id', [
            'id' => $id,
            'sklad_2_start_loading_data' => date("Y-m-d H:i:s")
          ]);
          $time = date("Y-m-d H:i:s");
      } else {
        R::exec('UPDATE `avtonasklade` SET `sklad_2_start_loading_data` = :sklad_2_start_loading_data WHERE id = :id', [
            'id' => $id,
            'sklad_2_start_loading_data' => NULL
          ]);
          $time = "";
      }
}

//sklad_2_loading_completed
if ($_GET["name_row"] == "sklad_2_loading_completed"){
    R::exec('UPDATE `avtonasklade` SET `sklad_2_loading_completed` = :sklad_2_loading_completed WHERE id = :id', [
        'id' => $id,
        'sklad_2_loading_completed' => $_GET["value"]
      ]);
      if ($_GET["value"] == 1) {
        R::exec('UPDATE `avtonasklade` SET `sklad_2_loading_completed_data` = :sklad_2_loading_completed_data WHERE id = :id', [
            'id' => $id,
            'sklad_2_loading_completed_data' => date("Y-m-d H:i:s")
          ]);
          $time = date("Y-m-d H:i:s");
      } else {
        R::exec('UPDATE `avtonasklade` SET `sklad_2_loading_completed_data` = :sklad_2_loading_completed_data WHERE id = :id', [
            'id' => $id,
            'sklad_2_loading_completed_data' => NULL
          ]);
          $time = "";
      }
}

//avto_sent_to_client
// if ($_GET["name_row"] == "avto_sent_to_client"){
//     R::exec('UPDATE `avtonasklade` SET `avto_sent_to_client` = :avto_sent_to_client WHERE id = :id', [
//         'id' => $id,
//         'avto_sent_to_client' => $_GET["value"]
//       ]);
//       if ($_GET["value"] == 1) {
//         R::exec('UPDATE `avtonasklade` SET `avto_sent_to_client_data` = :avto_sent_to_client_data WHERE id = :id', [
//             'id' => $id,
//             'avto_sent_to_client_data' => date("Y-m-d H:i:s")
//           ]);
//           $time = date("Y-m-d H:i:s");
//       } else {
//         R::exec('UPDATE `avtonasklade` SET `avto_sent_to_client_data` = :avto_sent_to_client_data WHERE id = :id', [
//             'id' => $id,
//             'avto_sent_to_client_data' => NULL
//           ]);
//           $time = "";
//       }
// }

$data = ["name_time" => $time,
 ];
// $data = ['id' => $updateSklad,
//  ];

//R::store($updateSklad);
echo json_encode( $data );

?>
