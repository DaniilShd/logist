
<div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingMarshrut<?php echo $count_marshruty; ?><?php echo $id_avto_request;?>">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseMarshrut<?php echo $count_marshruty; ?><?php echo $id_avto_request;?>" aria-expanded="false" aria-controls="panelsStayOpen-collapseMarshrut<?php echo $count_marshruty; ?><?php echo $id_avto_request;?>">
        

      <div class="container">
<div class="row">

<div class="col-12 col-md-2 text-center">
      <h5>Маршрут #<?php echo $count_marshruty; ?></h5>

      </div>

<div class="col-12 col-md-10">

<div class="container-fluid">

      <div class="row ">
     
        <div class="col-md-3 border border-success">
          <div class="row">
          <h6>Точка старта</h6>
          </div>
          <div class="row" id="tockha_starta<?php echo $marshrut->id?>">
          <?php echo  "<h6>$marshrut->tockha_starta<h6>"; ?>
          </div>
        </div>


        <div class="col-md-3 border border-success">
          <div class="row">
          <h6>Точка доставки</h6>
          </div>
          <div class="row" id="tochka_dostavki<?php echo $marshrut->id?>">
          <?php echo  "<h6>$marshrut->tochka_dostavki<h6>"; ?>
          </div>
        </div>


        <div class="col-md-2 border border-success text-center">
          <div class="row">
          <h6>Расстояние (км)</h6>
          </div>
          <div class="row text-center" id="distance<?php echo $marshrut->id?>">
          <?php echo  "<h5>$marshrut->distance<h5>"; ?>
          </div>
        </div>
      

        <div class="col-md-2 border border-success text-center" style="padding-bottom: 10px;">
        <div class="row" >
          <h6>Машина в пути</h6>
          </div>
          <input 
  class="form-check-input" 
  type="checkbox" 
  id = "avto_v_puti<?php echo $marshrut->id;?>"
disabled
  <?php
if($marshrut->avto_v_puti == true){
    echo "checked";
} 
  ?>>
  <label class="form-check-label" for="avto_v_puti<?php echo  $marshrut->id;?>">
  </label>
          </div>



          <div class="col-md-2 border border-success text-center" style="padding-bottom: 10px;">
        <div class="row" >
          <h6>Прибыл к клиенту</h6>
          </div>
          <input 
  class="form-check-input" 
  type="checkbox" 
  id = "avto_pribylo_k_klientu<?php echo $marshrut->id;?>"
disabled
  <?php
if($marshrut->avto_pribylo_k_klientu == true){
    echo "checked";
} 
  ?>>
  <label class="form-check-label" for="avto_pribylo_k_klientu<?php echo  $marshrut->id;?>">
  </label>
  <div id="vremy_pribytia<?php echo $marshrut->id;?>">
  <?php
echo  "<h6>$marshrut->avto_pribylo_k_klientu_data<h6>";
        ?>
  </div>
  
          </div>
       


        
      </div>
      </div>
</div>

</div>
</div>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseMarshrut<?php echo $count_marshruty; ?><?php echo $id_avto_request;?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingMarshrut<?php echo $count_marshruty; ?><?php echo $id_avto_request;?>">
      <div class="accordion-body">





      <form class="form_marshrut" method ="POST" id="ajax_form_marshrut<?php echo $marshrut->id;?>" action="">


<table class="table table-striped tableMarshrut align-middle">
  <thead>
    <tr>
      <th scope="col">Наименование</th>
      <th scope="col">Значение</th>
    </tr>
  </thead>
  <tbody>


<tr>
      <th scope="row"><h6>Точка старта</h6></th>
      <td>
      <div class="form-check form-marshrut">
  <textarea 
  class="form-control logist_pole" 
  type="text" 
  name= "tockha_starta"
  value=""
  ><?php echo $marshrut->tockha_starta; ?></textarea>
</div>
    </td>
    </tr>


    <tr>
      <th scope="row"><h6>Точка доставки</h6></th>
      <td>
      <div class="form-check form-marshrut">
      <textarea 
  class="form-control logist_pole" 
  type="text" 
  name= "tochka_dostavki"
  value=""
  ><?php echo $marshrut->tochka_dostavki; ?></textarea>
</div>
    </td>
    </tr>


    <tr>
      <th scope="row"><h6>Расстояние (в км)</h6></th>
      <td>
      <div class="form-check form-marshrut">
  <input 
  class="form-control logist_pole" 
  type="text" 
  name= "distance"
  value="<?php echo $marshrut->distance; ?>"
  >
</div>
    </td>
    </tr>



    <tr>
      <th scope="row"><h6>Время в пути(в часах)</h6></th>
      <td>
      <div class="form-check form-marshrut">
  <input 
  class="form-control logist_pole" 
  type="text" 
  name= "time_trip"
  value="<?php echo $marshrut->time_trip; ?>"
  >
</div>
    </td>
    </tr>





    <tr>
      <th scope="row"><h6>Автомобиль в пути</h6></th>
      <td>
      <div class="form-check">
  <input 
  class="form-check-input logist_check" 
  type="checkbox" 
  data-id_request_avto="<?php echo $id_avto_request;?>" 
  data-name_row="avto_v_puti"
  data-name_time="avto_v_puti_data"
  data-id_marshrut = "<?php echo $marshrut->id;?>"
  id = "avto_v_puti<?php echo $id_avto_request;?>"

  <?php
if($marshrut->avto_v_puti == true){
    echo "checked";
}
  ?>>
  <label class="form-check-label" for="avto_v_puti<?php echo $id_avto_request;?>">
  </label>
</div>
    </td>
    </tr>


    <tr>
      <th scope="row"><h6>Время отправления авто</h6></th>
      <td
      id="avto_v_puti_data<?php echo $id_avto_request;?>"
      ><?php
echo  "<h6>$marshrut->avto_v_puti_data<h6>";
        ?></td>

    </tr>



    <tr>
      <th scope="row"><h6>Автомобиль прибыл к клиенту</h6></th>
      <td>
      <div class="form-check">
  <input 
  class="form-check-input logist_check" 
  type="checkbox" 
  data-id_request_avto="<?php echo $id_avto_request;?>" 
  data-name_row="avto_pribylo_k_klientu"
  data-name_time="avto_pribylo_k_klientu_data"
  data-id_marshrut = "<?php echo $marshrut->id;?>"
  id = "avto_pribylo_k_klientu<?php echo $id_avto_request;?>"

  <?php
if($marshrut->avto_pribylo_k_klientu == true){
    echo "checked";
}
  ?>>
  <label class="form-check-label" for="avto_pribylo_k_klientu<?php echo $id_avto_request;?>">
  </label>
</div>
    </td>
    </tr>


    <tr>
      <th scope="row"><h6>Время прибытия к клиенту</h6></th>
      <td
      id="avto_pribylo_k_klientu_data<?php echo $id_avto_request;?>"
      ><?php
echo  "<h6>$marshrut->avto_pribylo_k_klientu_data<h6>";
        ?></td>

    </tr>


    <tr>
      <th scope="row"><h6>Товар принят</h6></th>
      <td>
      <div class="form-check">
  <input 
  class="form-check-input logist_check" 
  type="checkbox" 
  data-id_request_avto="<?php echo $id_avto_request;?>" 
  data-name_row="tovar_prinyt"
  data-name_time="tovar_prinyt_data"
  data-id_marshrut = "<?php echo $marshrut->id;?>"
  id = "tovar_prinyt<?php echo $id_avto_request;?>"

  <?php
if($marshrut->tovar_prinyt == true){
    echo "checked";
}
  ?>>
  <label class="form-check-label" for="tovar_prinyt<?php echo $id_avto_request;?>">
  </label>
</div>
    </td>
    </tr>


    <tr>
      <th scope="row"><h6>Время передачи товара клиенту</h6></th>
      <td
      id="tovar_prinyt_data<?php echo $id_avto_request;?>"
      ><?php
echo  "<h6>$marshrut->tovar_prinyt_data<h6>";
        ?></td>

    </tr>



    <tr>
      <th scope="row"><h6>Товар не принят</h6></th>
      <td>
      <div class="form-check">
  <input 
  class="form-check-input logist_check" 
  type="checkbox" 
  data-id_request_avto="<?php echo $id_avto_request;?>" 
  data-name_row="tovar_ne_prinyt"
  data-name_time="tovar_ne_prinyt_data"
  data-id_marshrut = "<?php echo $marshrut->id;?>"
  id = "tovar_ne_prinyt<?php echo $id_avto_request;?>"

  <?php
if($marshrut->tovar_ne_prinyt == true){
    echo "checked";
}
  ?>>
  <label class="form-check-label" for="tovar_ne_prinyt<?php echo $id_avto_request;?>">
  </label>
</div>
    </td>
    </tr>
    
    <tr>
      <th scope="row"><h6>Товар не принят (время)</h6></th>
      <td
      id="tovar_ne_prinyt_data<?php echo $id_avto_request;?>"
      ><?php
echo  "<h6>$marshrut->tovar_ne_prinyt_data<h6>";
        ?></td>

    </tr>


    <tr>
      <th scope="row"><h6>Причины отказа в передачи товара</h6></th>
      <td>
      <div class="form-check form-marshrut">
      <textarea 
  class="form-control logist_pole" 
  type="text" 
  name= "reshenie"
  value=""
  ><?php echo $marshrut->reshenie; ?></textarea>
</div>
    </td>
    </tr>

    

    </tbody>

</table>


<input type="text" style="display:none;" name="id" class="form-control" placeholder="" value="<?php echo $marshrut->id; ?>">
<input type="text" style="display:none;" name="id_avto_request" class="form-control" placeholder="" value="<?php echo $id_avto_request; ?>">

<button type="button" class="btn btn-success logist_button" onclick="save_info_marshrut('ajax_form_marshrut<?php echo $marshrut->id;?>',<?php echo $marshrut->id?>)">Сохранить</button>
<button type="button" class="btn btn-danger form_avto_button logist_button" id="form_avto" onclick="delete_marshrut(<?php echo $marshrut->id; ?>)">Удалить</button>


</form>


        </div>
    </div>
  </div>












