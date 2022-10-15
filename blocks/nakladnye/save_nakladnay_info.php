<?php 
require "../../db.php";

$id = $_POST["id"];

if(isset($_POST["number_nakladnoy"])){
    R::exec('UPDATE `nakladnay` SET `number_nakladnoy` = :number WHERE id = :id', [
        'id' => $id,
        'number' => $_POST["number_nakladnoy"]
      ]);
 }

 if(isset($_POST["CheckOtpravka"])){
    R::exec('UPDATE `nakladnay` SET `tovar_po_nakladnoy_gotov_k_otgruzke` = :number WHERE id = :id', [
      'id' => $id,
      'number' => "1"
    ]);
 } else {
  R::exec('UPDATE `nakladnay` SET `tovar_po_nakladnoy_gotov_k_otgruzke` = :number WHERE id = :id', [
    'id' => $id,
    'number' => "0"
  ]);
 }
$data = [ 'id_nakladnay' => $id ];

echo json_encode( $data );
?>