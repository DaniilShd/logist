

<div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-heading9<?php echo $count_nakladnye; ?><?php echo $id_avto_request; ?>">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse9<?php echo $count_nakladnye; ?><?php echo $id_avto_request; ?>" aria-expanded="false" aria-controls="panelsStayOpen-collapse9<?php echo $count_nakladnye; ?><?php echo $id_avto_request; ?>">
        
<div class="container">
<div class="row">

<div class="col-12 col-md-4 text-center align-middle">
      <h5>Накладная #<?php echo $count_nakladnye; ?></h5>

      </div>

<div class="col-12 col-md-8">

<div class="container">

      <div class="row ">
     
        <div class="col-md-6 border border-success">
          <div class="row">
          <h6>Номер накладной</h6>
          </div>
          <div class="row" id="numbernakladnay<?php echo $nakladnay->id?>">
          <?php echo  "<h6>$nakladnay->number<h6>"; ?>
          </div>
        </div>
      

        <div class="col-md-6 border border-success">
        <div class="row" >
          <h6>Товар принят</h6>
          </div>
          <div class="row" id="tovar_prinyt<?php echo $nakladnay->id?>">
          <?php
 if($nakladnay->tovar_prinyt == true){
  echo "<h6 class=\"\">Да</h6>";
 } else {
  echo "<h6 class=\"\">Нет</h6>";
 }
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
    <div id="panelsStayOpen-collapse9<?php echo $count_nakladnye; ?><?php echo $id_avto_request; ?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading9<?php echo $count_nakladnye; ?><?php echo $id_avto_request; ?>">
      <div class="accordion-body">

  
      <form class="form_nakladnay_save" method ="POST" id="ajax_form_nakladnay<?php echo $nakladnay->id;?>" action="">





      
<div class="form-group mt-3">



<table class="table table-striped align-middle" id="marshrut<?php echo $marshrut->id?>">
  <thead>
    <tr>
      <th scope="col">Наименование</th>
      <th scope="col">Значение</th>
    </tr>
  </thead>
  <tbody>



  <tr>
      <th scope="row"><h6>Номер накладной</h6></th>
      <td>
      <div class="form-check form-marshrut">
      <input type="text" name="number" class="form-control manager_pole" placeholder="" value="<?php echo $nakladnay->number;?>">
</div>
    </td>
    </tr>


    <tr>
      <th scope="row"><h6>Товар принят</h6></th>
      <td>
      <div class="form-check">
      <input class="form-check-input manager_check tableNakladnay" type="checkbox"
  data-id_nakladnay="<?php echo $nakladnay->id;?>" 
  data-name_row="tovar_prinyt"
  data-name_time="tovar_prinyt_data"
  id = "tovar_prinyt<?php echo $nakladnay->id;?>"
  value="1" id="flexCheckprinyt" name="Checkprinyt"
  <?php
if($nakladnay->tovar_prinyt == true){
    echo "checked";
}
  ?>>
  <!-- <label class="form-check-label" for="flexCheckprinyt"> -->
    
  </label>
</div>
    </td>
    </tr>



    <tr>
      <th scope="row"><h6>Время загрузки</h6></th>
      <td>
      <div class="">
      <div 
      id="tovar_prinyt_data<?php echo $nakladnay->id;?>"
      ><?php
echo  "<h6>$nakladnay->tovar_prinyt_data<h6>";
        ?></div>
</div>
</div>
    </td>
    </tr>




    <tr>
      <th scope="row"><h6>Товар не принят</h6></th>
      <td>
      <div class="form-check">
      <input class="form-check-input manager_check tableNakladnay" type="checkbox"
  data-id_nakladnay="<?php echo $nakladnay->id;?>" 
  data-name_row="tovar_ne_prinyt"
  data-name_time="tovar_ne_prinyt_data"
  id = "tovar_ne_prinyt<?php echo $nakladnay->id;?>"
  value="1" id="flexCheckneprinyt" name="Checkneprinyt"
  <?php
if($nakladnay->tovar_ne_prinyt == true){
    echo "checked";
}
  ?>>
  <label class="form-check-label" for="flexCheckneprinyt">
    
    </label>
</div>
    </td>
    </tr>



    <tr>
      <th scope="row"><h6>Время отказа</h6></th>
      <td>
      <div class="">
      <div 
      id="tovar_ne_prinyt_data<?php echo $nakladnay->id;?>"
      ><?php
echo  "<h6>$nakladnay->tovar_ne_prinyt_data<h6>";
        ?></div>
</div>
</div>
    </td>
    </tr>



    <tr>
      <th scope="row"><h6>Причина отказа</h6></th>
      <td>
      <div class="">
      <textarea 
  class="form-control logist_pole" 
  type="text" 
  name= "prichina_otkaza"
  value=""
  ><?php echo $nakladnay->prichina_otkaza; ?></textarea>
</div>
    </td>
    </tr>













</div>
</div>

</tbody>

</table>
<input type="text" style="display:none;" name="id" class="form-control" placeholder="" value="<?php echo $nakladnay->id; ?>">
<input type="text" style="display:none;" name="id_avto_request" class="form-control" placeholder="" value="<?php echo $id_avto_request; ?>">

<button type="button" class="btn btn-success form_avto_button btn-padding-top manager_button" id="form_avto" onclick="post_nakladnay_info_zagruzki('ajax_form_nakladnay<?php echo $nakladnay->id;?>',<?php echo  $id_avto_request;?>)">Сохранить</button>
<button type="button" class="btn btn-danger form_avto_button btn-padding-top manager_button" id="form_avto" onclick="delete_nakladnay_zagruzki(<?php echo $nakladnay->id; ?>)">Удалить</button>

</form>


        </div>
    </div>
  </div>

