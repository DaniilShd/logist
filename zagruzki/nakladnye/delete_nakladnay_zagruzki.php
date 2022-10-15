<?php 
require "../../db.php";

//header('Content-Type', 'application/json');

//Удаляем из БД информацию о накладной
$id = $_GET[id];
$delete_nakladnay = R::load('zagruzkanakladnay', $id);
R::trash($delete_nakladnay);

$delete_nakladnay = R::findOne('zagruzkanakladnay', 'id = ?', [$_GET[id]]);

if(empty($delete_nakladnay)){
  $data = [ 'success' => true ];
}else{
  $data = [ 'success' => false ];
}
echo json_encode( $data );
?>
