<?php 
require "../../db.php";

//считает сколько накладных уже добавлено в БД для определения правильного номера добавляемого по кнопке в даный момент наклад
$marshruty = R::findAll('marshrut', 'id_request_avto = ?', [$_GET[id]]);
$count_marshruty = 1;
if($marshruty){
    foreach ($marshruty as $key=>$marshrut)
    {
      $count_marshruty += 1;
    }
  }
    //создаем новую запись в БД с номером накладной
$marshrut = R::dispense('marshrut');
$marshrut->id_request_avto = $_GET[id];
R::store($marshrut);
?>
<div class="row add_marshrut" id="marshrut<?php echo $marshrut->id;?>">
 <div class="col-12">

 <!-- Добавляю новое авто -->
   <?php 
  
include "marshrut.php";
   ?>

</div> 
 <!-- Добавляю минус напротив остальных авто -->
<!-- <div class="col-1">
        <i class="fa fa-minus minus_avto manager_button" onclick="delete_marshrut(<?php echo $marshrut->id;?>)" id=""></i>
        </div> -->
        </div>