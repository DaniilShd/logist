<!-- Modal -->
<div class="modal fade" id="tableAvtInfo" tabindex="-1" aria-labelledby="tableAvtInfoLabel" aria-hidden="true">
  <div class="modal-dialog table_info_avto">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tableAvtInfoLabel">Таблица с информацией по автомобилям</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="table_avto_info">

      <div id="" class="number_id_request_avto" style="display: none"></div>

<!-- Информация отображается согласно таблицы avto -->
<?php 
require "./blocks/avto_guide/table_common_code.php";
?> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary" id="button_open_add_avto_info" onclick="open_add_avto_info()">Добавить новую машину</button>
      </div>
    </div>
  </div>
</div>

 <?php
//include "add_avto_table.php";
?> 


