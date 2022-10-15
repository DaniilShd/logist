<?php
require "../../db.php";


$nakladnay = R::findOne('zagruzkanakladnay', 'id = ?', [$_GET["id_nakladnay"]]);

      $data =  [ 
      "number" => $nakladnay->number, 
      "tovar_prinyt" => $nakladnay->tovar_prinyt,
      ];

       echo json_encode($data);
?>