
<?php
require "../../db.php";
//Беру из таблицы avto информацию по редактирруемому авто по передеанному через GET id автомобиля

$company=R::findOne('company', 'id = ?', [$_GET['id']]);
$number_id_request_company = $_GET['number_id_request_company'];
?>

<div class="modal fade" id="changeInfoCompany" tabindex="-1" aria-labelledby="changeInfoCompanyLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="changeInfoCompanyLabel">Компания №<?php echo $company->id;?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">










      <form class="form_company_save<?php echo $company->id?>" method ="POST" id="ajax_form_company<?php echo $company->id;?>" action="">
 


 <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>Название компании</h6></label>
 </div>
 <div class="col-8">
 <input type="text" name="name" class="form-control" placeholder="" value="<?php echo $company->name ?>">
 </div>
 </div>
 </div>

 
 
 <div class="mb-3">
   <div class="row align-items-center">
     <div class="col-3">
     <label><h6>Адрес компании</h6></label>
     </div>
     <div class="col-8">
     <input type="text" name="adres" class="form-control" placeholder="" value="<?php echo $company->adres;?>">
     </div>
 
 
 </div>
 </div>
 
 <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>Тип комании</h6></label>
 </div>
 <div class="col-8">


 <select class="form-select" style="margin-bottom: 16px;" aria-label="Default select example" name="tip_company">
 <!-- Назначается первое значение при отсутсвии каких любо значений, для новый машин -->
         <option selected value="<?php echo $company->tip_company;?>"><?php echo $company->tip_company;?></option>
         <option value="Клиент-поставщик">Клиент-поставщик</option>
         <option value="Клиент-закупщик">Клиент-закупщик</option>
         <option value="Автокомпания">Автокомпания</option>
         <option value="Партнер-постоянный перевозчик">Партнер-постоянный перевозчик</option>

         </select>


 </div>
             </div>
 </div>
 
 <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>ФИО руководтеля</h6></label>
 </div>
 <div class="col-8">
 <input type="text" name="fio_rukovoditely" class="form-control" placeholder="" value="<?php echo $company->fio_rukovoditely;?>">
 </div>
 </div>
 </div>
 
 <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>Телефон</h6></label>
 </div>
 <div class="col-8">
 <input type="text" name="phone_number" class="form-control" placeholder="" value="<?php echo $company->phone_number;?>">
 </div>
 </div>
 </div>
 
 <div class="mb-3">
 <div class="row align-items-center">
 <div class="col-3">
 <label><h6>Реквизиты</h6></label>
 </div>
 <div class="col-8">
 <textarea type="text" name="rekvizity" class="form-control" placeholder="" value=""><?php echo $company->rekvizity;?></textarea>
 </div>
 </div>
 </div>
 
 
 <input type="text" style="display:none;" name="id" class="form-control" placeholder="" value="<?php echo $company->id?>">
 <!-- <input type="text" style="display:none;" name="id_request" class="form-control" placeholder="" value="<?php echo $company->id_request?>"> -->
 
 <!-- <button type="button" class="btn btn-success form_avto_button" id="form_avto" onclick="post_avto_info('ajax_form_avto<?php echo $avto->id;?>')">Сохранить</button> -->
 
 </form>




     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary form_company_button" data-bs-dismiss="modal" id="form_company" onclick="post_company_info('ajax_form_company<?php echo $company->id;?>','<?php echo $company->id;?>')">Сохранить изменения</button>
      </div>
    </div>
  </div>
  </div>
