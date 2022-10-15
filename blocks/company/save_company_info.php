<?php 
require "../../db.php";

$id = $_POST["id"];
 
 if(isset($_POST["name"])){
    R::exec('UPDATE `company` SET `name` = :name WHERE id = :id', [
        'id' => $id,
        'name' => $_POST["name"]
      ]);
 }


 if(isset($_POST["adres"])){
    R::exec('UPDATE `company` SET `adres` = :adres WHERE id = :id', [
        'id' => $id,
        'adres' => $_POST["adres"]
      ]);
 }


 if(isset($_POST["tip_company"])){
    R::exec('UPDATE `company` SET `tip_company` = :tip_company WHERE id = :id', [
        'id' => $id,
        'tip_company' => $_POST["tip_company"]
      ]);
 }


 if(isset($_POST["fio_rukovoditely"])){
    R::exec('UPDATE `company` SET `fio_rukovoditely` = :fio_rukovoditely WHERE id = :id', [
        'id' => $id,
        'fio_rukovoditely' => $_POST["fio_rukovoditely"]
      ]);
 }

 
 if(isset($_POST["phone_number"])){
    R::exec('UPDATE `company` SET `phone_number` = :phone_number WHERE id = :id', [
        'id' => $id,
        'phone_number' => $_POST["phone_number"]
      ]);
 }

 if(isset($_POST["rekvizity"])){
    R::exec('UPDATE `company` SET `rekvizity` = :rekvizity WHERE id = :id', [
        'id' => $id,
        'rekvizity' => $_POST["rekvizity"]
      ]);
 }

 


    $data = [ 'success' => true ];
  echo json_encode( $data );
?>