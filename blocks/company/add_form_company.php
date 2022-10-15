

<div class="modal fade" id="addCompanyTableModal" tabindex="-1" aria-labelledby="addCompanyTableModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addCompanyTableModalLabel">Новая компания</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">




      <form class="form_avto_add" method ="POST" id="ajax_form_add_company_table" action="">
 


 
 
 <div class="mb-3">
   <div class="row align-items-center">
     <div class="col-3">
     <label><h6>Название компании</h6></label>
     </div>
     <div class="col-5">
     <input type="text" name="name" class="form-control" placeholder="" value="">
     </div>
 </div>
 </div>



 <div class="mb-3">
   <div class="row align-items-center">
     <div class="col-3">
     <label><h6>Адрес компании</h6></label>
     </div>
     <div class="col-5">
     <input type="text" name="adres" class="form-control" placeholder="" value="">
     </div>
 </div>
 </div>
 

 
 <div class="mb-3">
   <div class="row align-items-center">
     <div class="col-3">
     <label><h6>Тип комании</h6></label>
     </div>
     <div class="col-5">
     <select class="form-select" style="margin-bottom: 16px;" aria-label="Default select example" name="tip_company">
 <!-- Назначается первое значение при отсутсвии каких любо значений, для новый машин -->
         <option selected value="Партнер-постоянный перевозчик">Партнер-постоянный перевозчик</option>
         <option value="Клиент-поставщик">Клиент-поставщик</option>
         <option value="Клиент-закупщик">Клиент-закупщик</option>
         <option value="Автокомпания">Автокомпания</option>

         </select>
     </div>
 </div>
 </div>









 <div class="mb-3">
   <div class="row align-items-center">
     <div class="col-3">
     <label><h6>ФИО руководтеля</h6></label>
     </div>
     <div class="col-5">
     <input type="text" name="fio_rukovoditely" class="form-control" placeholder="" value="">
     </div>
 </div>
 </div>


 <div class="mb-3">
   <div class="row align-items-center">
     <div class="col-3">
     <label><h6>Телефон</h6></label>
     </div>
     <div class="col-5">
     <input type="text" name="phone_number" class="form-control" placeholder="" value="">
     </div>
 </div>
 </div>


 <div class="mb-3">
   <div class="row align-items-center">
     <div class="col-3">
     <label><h6>Реквизиты</h6></label>
     </div>
     <div class="col-5">
     <textarea type="text" name="rekvizity" class="form-control" placeholder="" value=""></textarea>
     </div>
 </div>
 </div>





 <!-- <input type="text" style="display:none;" name="id_request_avto" class="form-control" placeholder="" value=""> -->


 </form>
      </div>
      <div class="modal-footer" >
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="save_add_company()">Сохранить</button>
      </div>
    </div>
  </div>
</div>