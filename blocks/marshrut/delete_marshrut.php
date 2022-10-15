<?php 
require "../../db.php";

//header('Content-Type', 'application/json');

//Удаляем из БД информацию о накладной
$id = $_GET[id];
$delete_marshrut = R::load('marshrut', $id);
R::trash($delete_marshrut);

$delete_marshrut = R::findOne('marshrut', 'id = ?', [$_GET[id]]);

if(empty($delete_marshrut)){
  $data = [ 'success' => true ];
}else{
  $data = [ 'success' => false ];
}
echo json_encode( $data );
?>
