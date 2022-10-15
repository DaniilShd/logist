
<div class="row align-items-center">
<div class="col-4">
<button class="btn btn-success manager_button" style="margin-bottom: 20px;" onclick="add_nakladnay_zagruzki(<?php echo $avto_request->id; ?>)">Добавить накладную</button>
</div>
</div>

<div class="accordion" id="accordionPanelsStayOpenNakladnye<?php echo $avto_request->id; ?>">
<?php
// id которое связывает все таблицы, обозначает зарезервированную автомашну
$id_avto_request = $avto_request->id;
$zagruzkanakladnye = R::findAll('zagruzkanakladnay', 'id_request_avto = ?', [$avto_request->id]);

    $count_nakladnye = 1;
    foreach ($zagruzkanakladnye as $key=>$nakladnay)
    {
      echo "<div class=\"row\" id=\"nakladnay{$nakladnay->id}\">";
      echo "<div class=\"col-12\">";
        include "./zagruzki/nakladnye/zag_nakladnay.php";
        echo "</div>";
      
        
        $count_nakladnye += 1;
      echo "</div>";
      echo "</div>";
    }
?>
</div>

       </div>
       