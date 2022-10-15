<!-- Modal -->
<div class="modal fade" id="formCompanyAdd" tabindex="-1" aria-labelledby="formCompanyAddLabel" aria-hidden="true">
  <div class="modal-dialog table_info_avto">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formCompanyAddLabel">Список компаний</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="table_avto_info">

      <div id="update_table_company" class="">

<!-- Информация отображается согласно таблицы company -->










<table class="table table-sm table-hover table-striped">
                <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Название</th>
                    <th scope="col">Адрес</th>
                    <th scope="col">Тип компании</th>
                    <th scope="col">ФИО руководтеля</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Реквизиты</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                // Получаю информацию из справочника автомобилей, 'ORDER BY id DESC'
                $company = R::findAll('company');
                //echo print_r($requests);
                $count = 1;
                foreach ($company as $key => $company)
                {
                   // $requests = R::load('otgruzka',$user->role);
                    echo "<tr class=''>".
                    "<th scope=\"row\">{$count}</td>".
           
                    "<td>{$company['name']}</td>".

                        "<td>{$company['adres']}</td>".

                        "<td>{$company['tip_company']}</td>".
                        "<td>{$company['fio_rukovoditely']}</td>".
                        "<td>{$company['phone_number']}</td>".
                        "<td>{$company['rekvizity']}</td>".

                        // "<td class=''><button
                        //   type=\"button\"
                        //   class='btn btn-outline-dark float-right mr-2 button_change_info_avto'
                        //   title=\"Редактировать\"
                        //   onclick=\"open_red_company({$company->id})\"
                        //   id=\"\"
                        //   >
                        //     <i class=\"fa fa-edit\"></i>
                        // </button></td>

                        "<td class=''><button
                        type=\"button\"
                        class='btn btn-outline-dark float-right mr-2 button_change_info_company'
                        title=\"Редактировать\"
                        onclick=\"open_red_company_info({$company->id})\"
                        id=\"\"
                        >
                          <i class=\"fa fa-edit\"></i>
                      </button></td>
                        
                        <td class=''><button onclick=\"delete_company({$company->id})\"
                          type=\"button\"
                          class='btn btn-outline-dark float-right mr-2'
                          title=\"Удалить\"

                          >
                            <i class=\"fa fa-trash-o \"></i>
                        </button></td>
                    </tr>";
                    $count += 1;
                }
                ?>
                </tbody>
            </table>




            </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary" id="button_open_add_company" onclick="open_add_company()">Добавить новую компанию</button>
      </div>
    </div>
  </div>
</div>

 <?php
//include "add_avto_table.php";
?> 