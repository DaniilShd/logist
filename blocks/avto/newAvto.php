
<!-- Авто на складе -->

<?php
 include "avto_common_code.php";

// //Создаем пустую запись в таблице маршрут
// $marshrut = R::dispense('marshrut');
// //вносится id
// $marshrut->id_request_avto = $id_avto_request;
// R::store($marshrut);


//Создаем пустую запись в таблице авто на складе
$avtoNaSklade = R::dispense('avtonasklade');
//вносится id 
 $avtoNaSklade->id_request_avto = $id_avto_request;
 R::store($avtoNaSklade);



include "../avto_na_sklade/avtoNaSklade.php";
?>

<?php
include "../marshrut/list_marshrut.php";
?>

  </div>
  </div>