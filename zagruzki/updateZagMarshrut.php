<?php 

require "../db.php";

// $marshrut = R::findOne('marshrut', 'id = ?', [$_GET["id_marshrut"]]);

 $id = $_GET["id_marshrut"];

//Обновляем строки через exec


//avto_pribylo
if ($_GET["name_row"] == "avto_pribylo"){
    R::exec('UPDATE `zagmarshrut` SET `avto_pribylo` = :avto_pribylo WHERE id = :id', [
        'id' => $id,
        'avto_pribylo' => $_GET["value"]
      ]);
      if ($_GET["value"] == 1) {
        R::exec('UPDATE `zagmarshrut` SET `avto_pribylo_data` = :avto_pribylo_data WHERE id = :id', [
            'id' => $id,
            'avto_pribylo_data' => date("Y-m-d H:i:s")
          ]);
          $time = date("Y-m-d H:i:s");
      } else {
        R::exec('UPDATE `zagmarshrut` SET `avto_pribylo_data` = :avto_pribylo_data WHERE id = :id', [
            'id' => $id,
            'avto_pribylo_data' => NULL
          ]);
          $time = "";
      }
}



//avto_v_puti
if ($_GET["name_row"] == "avto_v_puti"){
  R::exec('UPDATE `zagmarshrut` SET `avto_v_puti` = :avto_v_puti WHERE id = :id', [
      'id' => $id,
      'avto_v_puti' => $_GET["value"]
    ]);
    if ($_GET["value"] == 1) {
      R::exec('UPDATE `zagmarshrut` SET `avto_v_puti_data` = :avto_v_puti_data WHERE id = :id', [
          'id' => $id,
          'avto_v_puti_data' => date("Y-m-d H:i:s")
        ]);
        $time = date("Y-m-d H:i:s");
    } else {
      R::exec('UPDATE `zagmarshrut` SET `avto_v_puti_data` = :avto_v_puti_data WHERE id = :id', [
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