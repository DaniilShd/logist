<?php 
require "../../db.php";

//header('Content-Type', 'application/json');

//Удаляем из БД информацию об автмобиле
$id = $_GET[id];

$delete_avto = R::load('requestavto', $id);
R::trash($delete_avto);

//R::findOne('requests', 'id = ?', [$_GET['request_id']]);
//$delete_nakladnay = R::loadAll('nakladnay', 'id_avto = ?', [$id]);

$delete_nakladnay = R::findAll('nakladnay', 'id_request_avto = ?', [$_GET[id]]);
R::trashAll($delete_nakladnay);

$delete_sklad = R::findAll('avtonasklade', 'id_request_avto = ?', [$_GET[id]]);
R::trashAll($delete_sklad);

$delete_avto = R::findOne('requestavto', 'id = ?', [$_GET[id]]);

$delete_marshrut = R::findAll('marshrut', 'id_request_avto = ?', [$_GET[id]]);
R::trashAll($delete_marshrut);

if(empty($delete_avto)){
  $data = [ 'success' => true ];
}else{
  $data = [ 'success' => false ];
}
echo json_encode( $data );
?>


