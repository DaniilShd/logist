<?php 
require "../../db.php";
if (isset($_GET["number_id_request_avto"])){
  
  $number_id_request_avto_local = $_GET["number_id_request_avto"];
  $test = "12";
} else {
  $number_id_request_avto_local = "";
}

//$number_id_request_avto_local = $_GET['number_id_request_avto'];

?>

<div class="modal fade" id="addAvtoTableModal" tabindex="-1" aria-labelledby="addAvtoTableModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addAvtoTableModalLabel">Новая запись в таблице</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">




      <form class="form_avto_add" method ="POST" id="ajax_form_add_avto_table" action="">
 


 <div class="form-group mt-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>Тип кузова</h6></label>
 </div>
 <div class="col-3">
 <select class="form-select" aria-label="Default select example" name="id_tip_kuzova">
       <!-- Назначается первое значение при отсутсвии каких любо значений, для новый машин -->
       
         <option selected value="1"><?php 
         $tipkuzova = R::findOne('tipkuzova', 'id = ?', [1]);
         echo  $tipkuzova->name_kuzova;
         ?></option>
       
         <?php
               $tipkuzova = R::findAll('tipkuzova');
 
               foreach ($tipkuzova as $key=>$tipkuzova)
               {
                   echo "<option value=\"{$key}\">{$tipkuzova['name_kuzova']}</option>";
               }
               ?>
         </select>
 </div>
 </div>
     
     
 </div>
 
 
 <div class="form-group mt-3">
 
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>Тип загрузки</h6></label>
 </div>
 <div class="col-2">
 <select class="form-select" style="margin-bottom: 16px;" aria-label="Default select example" name="id_tip_zagruzki">
 <!-- Назначается первое значение при отсутсвии каких любо значений, для новый машин -->
         <option selected value="1"><?php 
         $tipzagruzki = R::findOne('tipzagruzki', 'id = ?', [1]);
         echo  $tipzagruzki->name_zagruzki;
         ?></option>
         <?php
               $tipzagruzki = R::findAll('tipzagruzki');
 
               foreach ($tipzagruzki as $key=>$tipzagruzki)
               {
                   echo "<option value=\"{$key}\">{$tipzagruzki['name_zagruzki']}</option>";
               }
               ?>
         </select>
 </div>
 </div>
 </div>
 
 
 <div class="mb-3">
   <div class="row align-items-center">
     <div class="col-3">
     <label><h6>Номер автомобиля</h6></label>
     </div>
     <div class="col-5">
     <input type="text" name="number" class="form-control" placeholder="" value="">
     </div>
 
 
 </div>
 </div>
 
 <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>Цвет автомобиля</h6></label>
 </div>
 <div class="col-3">

 <select class="form-select" style="margin-bottom: 16px;" aria-label="Default select example" name="color">
 <!-- Назначается первое значение при отсутсвии каких любо значений, для новый машин -->
         <option selected value=""></option>
         <?php
               $avtocolors = R::findAll('avtocolor');
 
               foreach ($avtocolors as $key=>$avtocolor)
               {
                   echo "<option value=\"{$key}\">{$avtocolor['color']}</option>";
               }
               ?>
         </select>

 </div>
             </div>
 </div>
 
 <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>Грузоподъемность автомобиля (т)</h6></label>
 </div>
 <div class="col-5">
 <input type="text" name="capacity" class="form-control" placeholder="" value="">
 </div>
 </div>
 </div>
 
 <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>ФИО водителя №1</h6></label>
 </div>
 <div class="col-5">
 <input type="text" name="name_driver_1" class="form-control" placeholder="" value="">
 </div>
 </div>
 </div>
 
 <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>Телефон водителя №1</h6></label>
 </div>
 <div class="col-5">
 <input type="text" name="phone_driver_1" class="form-control" placeholder="" value="">
 </div>
 </div>
 </div>
 
 
 <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>ФИО водителя №2</h6></label>
 </div>
 <div class="col-5">
 <input type="text" name="name_driver_2" class="form-control" placeholder="" value="">
 </div>
 </div>
 
 
 </div>
 
 <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>Телефон водителя №2</h6></label>
 </div>
 <div class="col-5">
 <input type="text" name="phone_driver_2" class="form-control" placeholder="" value="">
 </div>
 </div>
 </div>
 
 <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>ФИО водителя №3</h6></label>
 </div>
 <div class="col-5">
 <input type="text" name="name_driver_3" class="form-control" placeholder="" value="">
 </div>
 </div>
 </div>
 
 <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>Телефон водителя №3</h6></label>
 </div>
 <div class="col-5">
 <input type="text" name="phone_driver_3" class="form-control" placeholder="" value="">
 </div>
 </div>
 </div>
<!--  
 <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>Компания</h6></label>
 </div>
 <div class="col-5">
 <input type="text" name="company" class="form-control" placeholder="" value="">
 </div>
 </div>
 </div> -->



 <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>Компания</h6></label>
 </div>
 <div class="col-3">

 <select class="form-select" style="margin-bottom: 16px;" aria-label="Default select example" name="id_company">
 <!-- Назначается первое значение при отсутсвии каких любо значений, для новый машин -->
         <option selected value=""></option>
         <?php
               $company = R::findAll('company');
 
               foreach ($company as $key=>$company)
               {
                   echo "<option value=\"{$key}\">{$company['name']}</option>";
               }
               ?>
         </select>

 </div>
             </div>
 </div>








 
 <!-- <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>Адрес компании</h6></label>
 </div>
 <div class="col-5">
 <input type="text" name="adres" class="form-control" placeholder="" value="">
 </div>
 </div>
 </div> -->


 <input type="text" style="display:none;" name="id_request_avto" class="form-control" placeholder="" value="">


 </form>
      </div>
      <div class="modal-footer" >
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="save_add_avto_info(<?php echo $number_id_request_avto_local; ?>)">Сохранить</button>
      </div>
    </div>
  </div>
</div>