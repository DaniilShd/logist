<?php 
require "../../db.php";


$company = R::dispense('company');

if(isset($_POST["name"])){
    $company->name = $_POST["name"];
 }


 if(isset($_POST["adres"])){
    $company->adres = $_POST["adres"];
 } 

 if(isset($_POST["tip_company"])){
   $company->tip_company = $_POST["tip_company"];
} 

if(isset($_POST["fio_rukovoditely"])){
   $company->fio_rukovoditely = $_POST["fio_rukovoditely"];
} 


if(isset($_POST["phone_number"])){
   $company->phone_number = $_POST["phone_number"];
} 

if(isset($_POST["rekvizity"])){
   $company->rekvizity = $_POST["rekvizity"];
}

 
    $data = [ 'success' => true ];
  echo json_encode( $data );



R::store($company);

?>