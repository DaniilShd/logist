<?php 
require "../../db.php";

$id = $_POST["id"];
 
 if(isset($_POST["number"])){
    R::exec('UPDATE `avto` SET `number` = :number WHERE id = :id', [
        'id' => $id,
        'number' => $_POST["number"]
      ]);
 }

 if(isset($_POST["id_tip_kuzova"])){
    R::exec('UPDATE `avto` SET `id_tip_kuzova` = :id_tip_kuzova WHERE id = :id', [
        'id' => $id,
        'id_tip_kuzova' => $_POST["id_tip_kuzova"]
      ]);
 } else {
    R::exec('UPDATE `avto` SET `id_tip_kuzova` = NULL WHERE id = :id', [
        'id' => $id,
      ]);
 }

 if(isset($_POST["id_tip_zagruzki"])){
    R::exec('UPDATE `avto` SET `id_tip_zagruzki` = :id_tip_zagruzki WHERE id = :id', [
        'id' => $id,
        'id_tip_zagruzki' => $_POST["id_tip_zagruzki"]
      ]);
 } else {
    R::exec('UPDATE `avto` SET `id_tip_zagruzki` = NULL WHERE id = :id', [
        'id' => $id,
      ]);
 }

 if(isset($_POST["color"])){
    R::exec('UPDATE `avto` SET `color` = :color WHERE id = :id', [
        'id' => $id,
        'color' => $_POST["color"]
      ]);
 }

 if(isset($_POST["capacity"])){
    R::exec('UPDATE `avto` SET `capacity` = :capacity WHERE id = :id', [
        'id' => $id,
        'capacity' => $_POST["capacity"]
      ]);
 }

 if(isset($_POST["name_driver_1"])){
    R::exec('UPDATE `avto` SET `name_driver_1` = :name_driver_1 WHERE id = :id', [
        'id' => $id,
        'name_driver_1' => $_POST["name_driver_1"]
      ]);
 }

 if(isset($_POST["phone_driver_1"])){
    R::exec('UPDATE `avto` SET `phone_driver_1` = :phone_driver_1 WHERE id = :id', [
        'id' => $id,
        'phone_driver_1' => $_POST["phone_driver_1"]
      ]);
 }

 if(isset($_POST["name_driver_2"])){
    R::exec('UPDATE `avto` SET `name_driver_2` = :name_driver_2 WHERE id = :id', [
        'id' => $id,
        'name_driver_2' => $_POST["name_driver_2"]
      ]);
 }

 if(isset($_POST["phone_driver_2"])){
    R::exec('UPDATE `avto` SET `phone_driver_2` = :phone_driver_2 WHERE id = :id', [
        'id' => $id,
        'phone_driver_2' => $_POST["phone_driver_2"]
      ]);
 }

 if(isset($_POST["name_driver_3"])){
    R::exec('UPDATE `avto` SET `name_driver_3` = :name_driver_3 WHERE id = :id', [
        'id' => $id,
        'name_driver_3' => $_POST["name_driver_3"]
      ]);
 }

 if(isset($_POST["phone_driver_3"])){
    R::exec('UPDATE `avto` SET `phone_driver_3` = :phone_driver_3 WHERE id = :id', [
        'id' => $id,
        'phone_driver_3' => $_POST["phone_driver_3"]
      ]);
 }

 if(isset($_POST["id_company"])){
    R::exec('UPDATE `avto` SET `id_company` = :company WHERE id = :id', [
        'id' => $id,
        'company' => $_POST["id_company"]
      ]);
 }

//  if(isset($_POST["adres"])){
//     R::exec('UPDATE `avto` SET `adres` = :adres WHERE id = :id', [
//         'id' => $id,
//         'adres' => $_POST["adres"]
//       ]);
//  }


    $data = [ 'success' => true ];
  echo json_encode( $data );
?>