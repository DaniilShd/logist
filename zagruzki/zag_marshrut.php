
<?php
$id_request = $_GET['request_id'];

$marshrut = R::findOne('zagmarshrut', 'id_request = ?', [$id_request]);

?>

<form class="form_marshrut" method ="POST" id="ajax_form_marshrut<?php echo $id_request?>" action="">


<table class="table table-striped tableZagMarshrut align-middle" id="marshrut<?php echo $marshrut->id?>">
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
  name= "tochka_starta"
  value=""
  ><?php echo $marshrut->tochka_starta; ?></textarea>
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
  data-id_request="<?php echo $id_request;?>" 
  data-name_row="avto_v_puti"
  data-name_time="avto_v_puti_data"
  data-id_marshrut = "<?php echo $marshrut->id;?>"
  id = "avto_v_puti<?php echo $id_request;?>"

  <?php
if($marshrut->avto_v_puti == true){
    echo "checked";
}
  ?>>
  <label class="form-check-label" for="avto_v_puti_data<?php echo $id_request;?>">
  </label>
</div>
    </td>
    </tr>


    <tr>
      <th scope="row"><h6>Время отправления авто</h6></th>
      <td
      id="avto_v_puti_data<?php echo $id_request;?>"
      ><?php
echo  "<h6>$marshrut->avto_v_puti_data<h6>";
        ?></td>

    </tr>



    <tr>
      <th scope="row"><h6>Автомобиль прибыл</h6></th>
      <td>
      <div class="form-check">
  <input 
  class="form-check-input logist_check" 
  type="checkbox" 
  data-id_request="<?php echo $id_request;?>" 
  data-name_row="avto_pribylo"
  data-name_time="avto_pribylo_data"
  data-id_marshrut = "<?php echo $marshrut->id;?>"
  id = "avto_pribylo<?php echo $id_request;?>"

  <?php
if($marshrut->avto_pribylo == true){
    echo "checked";
}
  ?>>
  <label class="form-check-label" for="avto_pribylo_data<?php echo $id_request;?>">
  </label>
</div>
    </td>
    </tr>


    <tr>
      <th scope="row"><h6>Время прибытия</h6></th>
      <td
      id="avto_pribylo_data<?php echo $id_request;?>"
      ><?php
echo  "<h6>$marshrut->avto_pribylo_data<h6>";
        ?></td>

    </tr>





    


    

    </tbody>

</table>


<input type="text" style="display:none;" name="id" class="form-control" placeholder="" value="<?php echo $marshrut->id; ?>">
<input type="text" style="display:none;" name="id_request" class="form-control" placeholder="" value="<?php echo $id_request; ?>">

<button type="button" class="btn btn-success logist_button" onclick="save_info_zag_marshrut('ajax_form_marshrut<?php echo $id_request;?>',<?php echo $marshrut->id?>)">Сохранить</button>



</form>