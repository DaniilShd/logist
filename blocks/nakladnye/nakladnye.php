

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
          <?php echo  "<h6>$nakladnay->number_nakladnoy<h6>"; ?>
          </div>
        </div>
      

        <div class="col-md-6 border border-success">
        <div class="row" >
          <h6>Товар готов к отправке</h6>
          </div>
          <div class="row" id="tovar_po_nakladnoy_gotov_k_otgruzke<?php echo $nakladnay->id?>">
          <?php
 if($nakladnay->tovar_po_nakladnoy_gotov_k_otgruzke == true){
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




      <form class="form_nakladnay_save<?php echo $avto->id?>" method ="POST" id="ajax_form_nakladnay<?php echo $nakladnay->id;?>" action="">




<div class="form-group mt-3">

<div class="row align-items-center">
<div class="col-md-5 col-12">
<label>Номер накладной</label>
</div>
<div class="col-md-7 col-12">
<input type="text" name="number_nakladnoy" class="form-control manager_pole" placeholder="" value="<?php echo $nakladnay->number_nakladnoy;?>">
</div>
</div>
<div class="row align-items-start">
<div class="col-md-5 col-12">
<label>Товар готов к отправке</label>
</div>
<div class="col-md-7 col-12">
<div class="form-check">
  <input class="form-check-input manager_check" type="checkbox" value="1" id="flexCheckOtpravka" name="CheckOtpravka"
  <?php
if($nakladnay->tovar_po_nakladnoy_gotov_k_otgruzke == true){
    echo "checked";
}
  ?>>
  <label class="form-check-label" for="flexCheckOtpravka">
    
  </label>
</div>


</div>
</div>
</div>

<input type="text" style="display:none;" name="id" class="form-control" placeholder="" value="<?php echo $nakladnay->id; ?>">
<input type="text" style="display:none;" name="id_avto_request" class="form-control" placeholder="" value="<?php echo $id_avto_request; ?>">

<button type="button" class="btn btn-success form_avto_button btn-padding-top manager_button" id="form_avto" onclick="post_nakladnay_info('ajax_form_nakladnay<?php echo $nakladnay->id;?>',<?php echo  $id_avto_request;?>)">Сохранить</button>
<button type="button" class="btn btn-danger form_avto_button btn-padding-top manager_button" id="form_avto" onclick="delete_nakladnay(<?php echo $nakladnay->id; ?>)">Удалить</button>

</form>


        </div>
    </div>
  </div>

