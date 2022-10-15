<?php 
require "../../db.php";

//считает сколько накладных уже добавлено в БД для определения правильного номера добавляемого по кнопке в даный момент наклад
$zagruzkanakladnay = R::findAll('zagruzkanakladnay', 'id_request_avto = ?', [$_GET[id]]);
$count_nakladnye = 1;
if($zagruzkanakladnay){
    foreach ($zagruzkanakladnay as $key=>$nakladnay)
    {
      $count_nakladnye += 1;
    }
  }
    //создаем новую запись в БД с номером накладной
$zagruzkanakladnay = R::dispense('zagruzkanakladnay');
$zagruzkanakladnay->id_request_avto = $_GET[id];
R::store($zagruzkanakladnay);
$id_avto_request = $id;
$nakladnay = $zagruzkanakladnay;
?>
<div class="row add_nakladnay" id="nakladnay<?php echo $nakladnay->id;?>">
 <div class="col-12">

 <!-- Добавляю новое авто -->
   <?php 
  
include "zag_nakladnay.php";
   ?>

</div> 
 <!-- Добавляю минус напротив остальных авто -->
<!-- <div class="col-1">
        <i class="fa fa-minus minus_avto manager_button" onclick="delete_nakladnay(<?php echo $nakladnay->id;?>)" id=""></i>
        </div> -->
        </div>