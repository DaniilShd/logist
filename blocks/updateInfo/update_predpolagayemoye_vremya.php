<?php 

require "../../db.php";

$updateData = R::findOne('avtonasklade', 'id_request_avto = ?', [$_POST["id_request_avto"]]);

$id = $updateData->id;

$updateData = R::load('avtonasklade', $id);

$updateData->predpolagayemoye_vremya = $_POST["predpolagayemoye_vremya"];

R::store($updateData);

$data = ["success" => true];
?>

