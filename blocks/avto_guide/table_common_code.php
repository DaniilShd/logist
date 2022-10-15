<table class="table table-sm table-hover table-striped">
                <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col"></th>
                    <th scope="col">Номер</th>
                    <th scope="col">Цвет</th>
                    <th scope="col">Грузоп. (т)</th>
                    <th scope="col">Кузов</th>
                    <th scope="col">Закупка</th>
                    <th scope="col">ФИО водителя №1</th>
                    <th scope="col">Номер №1</th>
                    <!-- <th scope="col">ФИО водителя №2</th>
                    <th scope="col">Номер №2</th>
                    <th scope="col">ФИО водителя №3</th>
                    <th scope="col">Номер №3</th> -->
                    <th scope="col">Компания</th>
                </tr>
                </thead>
                <tbody>
                <?php
                // Получаю информацию из справочника автомобилей, 'ORDER BY id DESC'
                $avtos_info = R::findAll('avto');
                //echo print_r($requests);
                foreach ($avtos_info as $key => $avto_info)
                {
                   // $requests = R::load('otgruzka',$user->role);
                    echo "<tr class=''>".
                    "<th scope=\"row\">{$key}</td>".
                    "<td class=''><button
                          type=\"button\"
                          class='btn btn-outline-dark float-right mr-2 button_change_info_avto'
                          title=\"Выбрать машину\"
                          onclick=\"prinyatoe_avto({$avto_info->id})\"
                          data-bs-dismiss=\"modal\"
                          id=\"\"
                          >
                            <i class=\"fa fa-car\"></i>
                        </button></td>".
                    "<td>{$avto_info['number']}</td>";

                    $avtocolor = R::findOne('avtocolor', 'id = ?', [$avto_info->color]);
                    echo "<td>$avtocolor->color</td>".

                        "<td>{$avto_info['capacity']}</td>";

                        $tipkuzova = R::findOne('tipkuzova', 'id = ?', [$avto_info->id_tip_kuzova]);
                        echo "<td>$tipkuzova->name_kuzova</td>";
                        
                        $tipzagruzki = R::findOne('tipzagruzki', 'id = ?', [$avto_info->id_tip_zagruzki]);
                        echo  "<td>$tipzagruzki->name_zagruzki</td>".

                        "<td>{$avto_info['name_driver_1']}</td>".
                        "<td>{$avto_info['phone_driver_1']}</td>";
                        // "<td>{$avto_info['name_driver_2']}</td>".
                        // "<td>{$avto_info['phone_driver_2']}</td>".
                        // "<td>{$avto_info['name_driver_3']}</td>".
                        // "<td>{$avto_info['phone_driver_3']}</td>".

                        $company = R::findOne('company', 'id = ?', [$avto_info->id_company]);

                        echo "<td>{$company->name}</td>".



                        "<td class=''><button
                          type=\"button\"
                          class='btn btn-outline-dark float-right mr-2 button_change_info_avto'
                          title=\"Редактировать\"
                          onclick=\"open_red_avto_info({$avto_info->id})\"
                          id=\"\"
                          >
                            <i class=\"fa fa-edit\"></i>
                        </button></td>

                        <td class=''><button onclick=\"delete_avto_info({$avto_info->id})\"
                          type=\"button\"
                          class='btn btn-outline-dark float-right mr-2'
                          title=\"Удалить\"

                          >
                            <i class=\"fa fa-trash-o \"></i>
                        </button></td>
                    </tr>";
                }
                ?>
                </tbody>
            </table>