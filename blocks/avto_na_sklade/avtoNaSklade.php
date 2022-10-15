<?php

//Создаем пустую запись в таблице авто на складе
// $avtoNaSklade = R::dispense('avtonasklade');
//вносится id 
// $avto_na_sklade->id_request_avto = $id_avto_request;
// R::store($avtoNaSklade);


$avtoNaSklade = R::findOne('avtonasklade', 'id_request_avto = ?', [$id_avto_request]);
?>



<div class="container">




<table class="table table-striped">
<!-- <thead>
    <tr>
      <th scope="col">Наименование</th>
      <th scope="col">Значение</th>
    </tr>
  </thead> -->
  <tbody>

<!-- Склад №1 -->
    <tr>
      <th scope="row"><h6>Предполагаемое время прибытия на склад</h6></th>
      <form action="" id="ajax_form_vremya<?php echo $id_avto_request;?>">
      <td>
      <input 
  class="form-control logist_check" 
  type="date"
  name = "predpolagayemoye_vremya"
  value = <?php echo $avtoNaSklade->predpolagayemoye_vremya;?>>
  <input type="text" style="display:none;" name="id_request_avto" class="form-control" placeholder="" value="<?php echo $id_avto_request; ?>">
    </td>
    <td>
    <button type="button" class="btn btn-success logist_button" onclick="save_predpolagayemoye_vremya('ajax_form_vremya<?php echo $id_avto_request;?>')">Сохранить дату</button>
    </form>

    </td>
</table>






<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" 
    id="Sklad1_<?php echo $id_avto_request;?>-tab" 
    data-bs-toggle="pill" 
    data-bs-target="#Sklad1_<?php echo $id_avto_request;?>" 
    type="button" 
    role="tab" 
    aria-controls="Sklad1_<?php echo $id_avto_request;?>" 
    aria-selected="true">
    Склад №1</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="Sklad2_<?php echo $id_avto_request;?>-tab" data-bs-toggle="pill" data-bs-target="#Sklad2_<?php echo $id_avto_request;?>" type="button" role="tab" aria-controls="Sklad2_<?php echo $id_avto_request;?>" aria-selected="false">Склад №2</button>
  </li>

</ul>
<div class="tab-content" id="pills-tabContent">

  <div class="tab-pane fade show active" id="Sklad1_<?php echo $id_avto_request;?>" role="tabpanel" aria-labelledby="Sklad1_<?php echo $id_avto_request;?>-tab">

  <table class="table table-striped tableSklad">
  <thead>
    <tr>
      <th scope="col">Наименование</th>
      <th scope="col">Значение</th>
    </tr>
  </thead>
  <tbody>

<!-- Склад №1 -->
    <tr>
      <th scope="row"><h6>Автомобиль прибыл на склад №1</h6></th>
      <td>
      <div class="form-check">


  <input 
  class="form-check-input kladovshchik_check" 
  type="checkbox"

  data-id_request_avto="<?php echo $id_avto_request;?>" 
  data-name_row="sklad_1_avto_arrival"
  data-name_time="sklad_1_avto_arrival_data"
  id = "sklad_1_avto_arrival<?php echo $id_avto_request;?>"

  <?php
if($avtoNaSklade->sklad_1_avto_arrival == true){
    echo "checked";
}
  ?>>


  <label class="form-check-label" for="sklad_1_avto_arrival<?php echo $id_avto_request;?>">
  </label>
</div>
    </td>
    </tr>

    <tr>
      <th scope="row"><h6>Время прибытия на склад №1</h6></th>
      <td
      id="sklad_1_avto_arrival_data<?php echo $id_avto_request;?>"
      ><?php
echo  "<h6>$avtoNaSklade->sklad_1_avto_arrival_data<h6>";
        ?></td>

    </tr>


    <tr>
      <th scope="row"><h6>Автомобиль начал загрузку на складе №1</h6></th>
      <td>
      <div class="form-check">
  <input 
  class="form-check-input kladovshchik_check" 
  type="checkbox"
  data-id_request_avto="<?php echo $id_avto_request;?>" 
  data-name_row="sklad_1_start_loading"
  data-name_time="sklad_1_start_loading_data"
  id = "sklad_1_start_loading<?php echo $id_avto_request;?>"
  <?php
if($avtoNaSklade->sklad_1_start_loading == true){
    echo "checked";
}
  ?>>
  <label class="form-check-label" for="sklad_1_start_loading<?php echo $id_avto_request;?>">
  </label>
</div>
    </td>
    </tr>

    <tr>
      <th scope="row"
      ><h6>Время начала загрузки на складе №1</h6></th>
      <td
      id="sklad_1_start_loading_data<?php echo $id_avto_request;?>"
      ><?php
echo  "<h6>$avtoNaSklade->sklad_1_start_loading_data<h6>";
        ?></td>

    </tr>

    <tr>
      <th scope="row"><h6>Автомобиль закончил загрузку на складе №1</h6></th>
      <td>
      <div class="form-check">
  <input 
  class="form-check-input kladovshchik_check" 
  type="checkbox"
  data-id_request_avto="<?php echo $id_avto_request;?>" 
  data-name_row="sklad_1_loading_completed"
  data-name_time="sklad_1_loading_completed_data"
  id = "sklad_1_loading_completed<?php echo $id_avto_request;?>"
  
  <?php
if($avtoNaSklade->sklad_1_loading_completed == true){
    echo "checked";
}
  ?>>
  <label class="form-check-label" for="sklad_1_loading_completed<?php echo $id_avto_request;?>">
  </label>
</div>
    </td>
    </tr>


    <tr>
      <th scope="row">
        <h6>Время окончания загрузки на складе №1</h6></th>
      <td
      id="sklad_1_loading_completed_data<?php echo $id_avto_request;?>"
      ><?php
echo  "<h6>$avtoNaSklade->sklad_1_loading_completed_data<h6>";
        ?></td>

    </tr>


    </tbody>
</table>

</div>


  <div class="tab-pane fade" id="Sklad2_<?php echo $id_avto_request;?>" role="tabpanel" aria-labelledby="Sklad2_<?php echo $id_avto_request;?>-tab">

  <table class="table table-striped tableSklad">
  <thead>
    <tr>
      <th scope="col">Наименование</th>
      <th scope="col">Значение</th>
    </tr>
  </thead>
  <tbody>

<!-- Склад №2 -->

<tr>
      <th scope="row"><h6>Автомобиль прибыл на склад №2</h6></th>
      <td>
      <div class="form-check">


  <input 
  class="form-check-input kladovshchik_check" 
  type="checkbox"

  data-id_request_avto="<?php echo $id_avto_request;?>" 
  data-name_row="sklad_2_avto_arrival"
  data-name_time="sklad_2_avto_arrival_data"
  id = "sklad_2_avto_arrival<?php echo $id_avto_request;?>"
  <?php
if($avtoNaSklade->sklad_2_avto_arrival == true){
    echo "checked";
}
  ?>>


  <label class="form-check-label" for="sklad_2_avto_arrival<?php echo $id_avto_request;?>">
  </label>
</div>
    </td>
    </tr>

    <tr>
      <th scope="row"><h6>Время прибытия на склад №2</h6></th>
      <td
      id="sklad_2_avto_arrival_data<?php echo $id_avto_request;?>"
      ><?php
echo  "<h6>$avtoNaSklade->sklad_2_avto_arrival_data<h6>";
        ?></td>

    </tr>


    <tr>
      <th scope="row"><h6>Автомобиль начал загрузку на складе №2</h6></th>
      <td>
      <div class="form-check">
  <input 
  class="form-check-input kladovshchik_check" 
  type="checkbox"

  data-id_request_avto="<?php echo $id_avto_request;?>" 
  data-name_row="sklad_2_start_loading"
  data-name_time="sklad_2_start_loading_data"
  id = "sklad_2_start_loading<?php echo $id_avto_request;?>"
  <?php
if($avtoNaSklade->sklad_2_start_loading == true){
    echo "checked";
}
  ?>>
  <label class="form-check-label" for="sklad_2_start_loading<?php echo $id_avto_request;?>">
  </label>
</div>
    </td>
    </tr>

    <tr>
      <th scope="row"
      
      ><h6>Время начала загрузки на складе №2</h6></th>
      <td
      id="sklad_2_start_loading_data<?php echo $id_avto_request;?>"
      ><?php
echo  "<h6>$avtoNaSklade->sklad_2_start_loading_data<h6>";
        ?></td>

    </tr>

    <tr>
      <th scope="row"><h6>Автомобиль закончил загрузку на складе №2</h6></th>
      <td>
      <div class="form-check">
  <input 
  class="form-check-input kladovshchik_check" 
  type="checkbox"
  data-id_request_avto="<?php echo $id_avto_request;?>" 
  data-name_row="sklad_2_loading_completed"
  data-name_time="sklad_2_loading_completed_data"
  id = "sklad_2_loading_completed<?php echo $id_avto_request;?>"
  
  <?php
if($avtoNaSklade->sklad_2_loading_completed == true){
    echo "checked";
}
  ?>>
  <label class="form-check-label" for="sklad_2_loading_completed<?php echo $id_avto_request;?>">
  </label>
</div>
    </td>
    </tr>


    <tr>
      <th scope="row"
      
      ><h6>Время окончания загрузки на складе №2</h6></th>
      <td
      id="sklad_2_loading_completed_data<?php echo $id_avto_request;?>"
      ><?php
echo  "<h6>$avtoNaSklade->sklad_2_loading_completed_data<h6>";
        ?></td>

    </tr>
    </tbody>

</table>

</div>

</div>






</div>




















    