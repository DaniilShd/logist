<?php 
require "../db.php";


$request = R::load('requests', $_POST["id_request"]);

if(isset($_POST["volume"])){
    $request->volume = $_POST["volume"];
 }

 if(isset($_POST["name_product"])){
    $request->name_product = $_POST["name_product"];
 } 

 if(isset($_POST["mesto_pribytia"])){
    $request->mesto_pribytia = $_POST["mesto_pribytia"];
 } 



    $data = [ 'success' => true ];
  echo json_encode( $data );



R::store($request);

?>