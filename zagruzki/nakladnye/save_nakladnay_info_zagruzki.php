<?php 
require "../../db.php";

$id = $_POST["id"];

if(isset($_POST["number"])){
    R::exec('UPDATE `zagruzkanakladnay` SET `number` = :number WHERE id = :id', [
        'id' => $id,
        'number' => $_POST["number"]
      ]);
 }

 if(isset($_POST["Checkprinyt"])){
    R::exec('UPDATE `zagruzkanakladnay` SET `tovar_prinyt` = :number WHERE id = :id', [
      'id' => $id,
      'number' => "1"
    ]);
 } else {
  R::exec('UPDATE `zagruzkanakladnay` SET `tovar_prinyt` = :number WHERE id = :id', [
    'id' => $id,
    'number' => "0"
  ]);
 }

 if(isset($_POST["prichina_otkaza"])){
  R::exec('UPDATE `zagruzkanakladnay` SET `prichina_otkaza` = :number WHERE id = :id', [
      'id' => $id,
      'number' => $_POST["prichina_otkaza"]
    ]);
}


$data = [ 'id_nakladnay' => $id ];

echo json_encode( $data );
?>