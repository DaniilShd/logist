<?php
require "../../db.php";


$nakladnay = R::findOne('nakladnay', 'id = ?', [$_GET["id_nakladnay"]]);

      $data =  [ 
      "numbernakladnay" => $nakladnay->number_nakladnoy, 
      "tovar_po_nakladnoy_gotov_k_otgruzke" => $nakladnay->tovar_po_nakladnoy_gotov_k_otgruzke,
      ];

       echo json_encode($data);
?>