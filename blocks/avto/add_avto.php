<?php 
require "../../db.php";

//считает сколько автомобилей уже добавлено в БД для определения правильного номера добавляемого по кнопке в даный момент авто 
$avtos = R::findAll('requestavto', 'id_request = ?', [$_GET[id]]);
$count = 1;
if($avtos){
    foreach ($avtos as $key=>$avto_request)
    {
      $count += 1;
    }
  }
    //создаем новую запись в БД с номером автомобиля
$avto_request = R::dispense('requestavto');
$avto_request->id_request = $_GET[id];
R::store($avto_request);


?>
<!-- id для удаления записи из таблицы requestavto -->
<div class="row add_avto" id="avto<?php echo $avto_request->id;?>">
 <div class="col-10 col-md-11">

 <!-- Добавляю новое авто -->
   <?php 

include "newAvto.php";

   ?>
   
</div> 
 <!-- Добавляю минус напротив остальных авто -->
<div class="col-2 col-md-1">
        <i class="fa fa-minus minus_avto logist_button <?php echo $avto_request->id;?>" onclick="delete_avto(<?php echo $avto_request->id;?>)" id=""></i>
        </div>
        </div>




