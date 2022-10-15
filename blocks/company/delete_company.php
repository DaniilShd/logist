<?php 
require "../../db.php";

//header('Content-Type', 'application/json');

//Удаляем из БД информацию об автмобиле
$id = $_GET[id];

$company = R::load('company', $id);
R::trash($company);

//R::findOne('requests', 'id = ?', [$_GET['request_id']]);
//$delete_nakladnay = R::loadAll('nakladnay', 'id_avto = ?', [$id]);

$delete_company = R::findOne('company', 'id = ?', [$_GET[id]]);

if(empty($delete_company)){
  $data = [ 'success' => true ];
}else{
  $data = [ 'success' => false ];
}
echo json_encode( $data );
?>