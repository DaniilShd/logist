<?php
require "../../db.php";

?>


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

