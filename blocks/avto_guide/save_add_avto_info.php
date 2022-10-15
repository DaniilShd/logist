<?php 
require "../../db.php";


$avto = R::dispense('avto');

if(isset($_POST["number"])){
    $avto->number = $_POST["number"];
 }

 if(isset($_POST["id_tip_kuzova"])){
    $avto->id_tip_kuzova = $_POST["id_tip_kuzova"];
 } 

 if(isset($_POST["id_tip_zagruzki"])){
    $avto->id_tip_zagruzki = $_POST["id_tip_zagruzki"];
 } 

 if(isset($_POST["color"])){
    $avto->color = $_POST["color"];
 }

 if(isset($_POST["capacity"])){
    $avto->capacity = $_POST["capacity"];
 }

 if(isset($_POST["name_driver_1"])){
    $avto->name_driver_1 = $_POST["name_driver_1"];
 }

 if(isset($_POST["phone_driver_1"])){
    $avto->phone_driver_1 = $_POST["phone_driver_1"];
 }

 if(isset($_POST["name_driver_2"])){
    $avto->name_driver_2 = $_POST["name_driver_2"];
 }

 if(isset($_POST["phone_driver_2"])){
    $avto->phone_driver_2 = $_POST["phone_driver_2"];
 }

 if(isset($_POST["name_driver_3"])){
    $avto->name_driver_3 = $_POST["name_driver_3"];
 }

 if(isset($_POST["phone_driver_3"])){
    $avto->phone_driver_3 = $_POST["phone_driver_3"];
 }

 if(isset($_POST["id_company"])){
    $avto->id_company = $_POST["id_company"];
 }

//  if(isset($_POST["adres"])){
//     $avto->adres = $_POST["adres"];
//  }


    $data = [ 'success' => true ];
  echo json_encode( $data );



R::store($avto);

?>