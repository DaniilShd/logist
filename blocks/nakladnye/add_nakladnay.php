<?php 
require "../../db.php";

//считает сколько накладных уже добавлено в БД для определения правильного номера добавляемого по кнопке в даный момент наклад
$nakladnye = R::findAll('nakladnay', 'id_request_avto = ?', [$_GET[id]]);
$count_nakladnye = 1;
if($nakladnye){
    foreach ($nakladnye as $key=>$nakladnay)
    {
      $count_nakladnye += 1;
    }
  }
    //создаем новую запись в БД с номером накладной
$nakladnay = R::dispense('nakladnay');
$nakladnay->id_request_avto = $_GET[id];
R::store($nakladnay);
$id_avto_request = $id;
?>
<div class="row add_nakladnay" id="nakladnay<?php echo $nakladnay->id;?>">
 <div class="col-12">

 <!-- Добавляю новое авто -->
   <?php 
  
include "nakladnye.php";
   ?>

</div> 
 <!-- Добавляю минус напротив остальных авто -->
<!-- <div class="col-1">
        <i class="fa fa-minus minus_avto manager_button" onclick="delete_nakladnay(<?php echo $nakladnay->id;?>)" id=""></i>
        </div> -->
        </div>