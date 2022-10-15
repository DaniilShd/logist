<?php
//require "db.php";
include "blocks/only_reg.php";
require_once "api/request.php";
?>

<?
if (isset($_POST["request"]))
{
    
    $res = request_register($_POST,$_GET['red_request_id']);
    if($res==null)
    {
        _redirect("index.php");
    }
    else
    {
        echo '<p>Произошла ошибка: '.$res. '</p>';
    }
}
?>


<div class="container-fluid my-3">
    <div class = "row">
        <div class="col">
            <label class ="font-weight-bold">Заявки</label>
            <?php
if($_SESSION['logged_user']['department'] == 'Менеджер' || $_SESSION['logged_user']['department'] == 'admin'){
echo "<input
type='button'
value='Добавить'
class='btn btn-sm btn-outline-primary ml-3 mb-2'
data-bs-toggle='modal'
data-bs-target='#formRequest'
>";
}
?>

<!-- Закупка начало -->
<div class="tab-content" id="pills-tabContent">

  <div class="tab-pane fade show active" id="Zagruzka" role="tabpanel" aria-labelledby="Zagruzka-tab">
  <table class="table table-sm table-hover table-striped">
                <thead>
                <tr class="text-center">
                    <th scope="col">№</th>
                    <th scope="col">Дата создания</th>
                    <th scope="col">ФИО менеджера</th>
                    <th scope="col">Тип менеджера</th>
                    <th scope="col">Объем</th>
                    <th scope="col">Наименование</th>
                    <th scope="col">Место прибытия</th>
                    <th scope="col">Редактировать</th>
                </tr>
                </thead>
                <tbody>
                <?php
                //Создаю массив из id request и id avto
                // $requestavto = R::findAll('requestavto', 'id_request', [$request['id']]);
                // $data = [];
                // foreach ($requests as $key => $request)
                // {
                    
                // }    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                $requests =R::getAll('SELECT * FROM `requests` WHERE `paranepara` = ? ORDER BY id DESC', ['Закупка']);
                //$requests = R::findAll('requests', 'paranepara = Закупка', 'ORDER BY id DESC');
                //echo print_r($requests);
                foreach ($requests as $key => $request)
                {
                   // $requests = R::load('otgruzka',$user->role);
                   echo "<form id=\"ajax_form_change{$request['id']}\" method=\"POST\"></form>";
                    echo "<tr class='clickable-row align-middle' style=\"cursor: pointer\" data-href='zagruzka.php?request_id={$request['id']}'>";
                    echo "<th scope=\"row\">Z.{$request['id']}</th>";
                    echo "<td>{$request['data_sozdaniya_zapisi']}</td>".
                        "<td class=\"text-center\">";
                        $manager = R::findOne('listemployee', 'login = ?', [$request['creator']]);
                        echo "$manager->surname ";
                        echo "$manager->firstname ";
                        echo $manager->lastname;
                       echo "</td>".
                       "<td class=\"text-center\">{$manager['tip_managera']}</td>";




                        echo "<td scope=\"row\"><input form=\"ajax_form_change{$request['id']}\" name=\"volume\" type=\"text\"".
                        "class=\"not_ascent form-control\" ".
                        "id=\"volume{$request['id']}\" ".
                        "onblur=\"focusGreen(volume{$request['id']})\"".
                        "onfocus=\"focusYellow(volume{$request['id']})\"".
                        "onchange=\"funcChange(ajax_form_change{$request['id']})\"".
                        "value=\"{$request['volume']}\"";
                    if($request['creator'] != $_SESSION['logged_user']['login'])
                    {
                        echo "disabled";
                    }
                    echo "></td>";



                        echo "<td scope=\"row\"><input form=\"ajax_form_change{$request['id']}\" name=\"name_product\" type=\"text\"".
                         "class = \"not_ascent form-control\" ".
                         "id=\"name_product{$request['id']}\" ".
                        "onblur=\"focusGreen(name_product{$request['id']})\"".
                        "onfocus=\"focusYellow(name_product{$request['id']})\"".
                         "onchange=\"funcChange(ajax_form_change{$request['id']})\"".
                        "value=\"{$request['name_product']}\"";
                    if($request['creator'] != $_SESSION['logged_user']['login'])
                    {
                        echo "disabled";
                    }
                    echo "></td>";

                        echo "<td scope=\"row\"><textarea form=\"ajax_form_change{$request['id']}\" name=\"mesto_pribytia\" type=\"textarea\" ". 
                        "class = \"not_ascent form-control\" ".
                        "id=\"mesto_pribytia{$request['id']}\" ".
                        "onblur=\"focusGreen(mesto_pribytia{$request['id']})\"".
                        "style=\"height: 40px;\"".
                        "onfocus=\"focusYellow(mesto_pribytia{$request['id']})\"".
                        "onchange=\"funcChange(ajax_form_change{$request['id']})\"";
                    if($request['creator'] != $_SESSION['logged_user']['login'])
                    {
                        echo "disabled";
                    }
                    echo ">{$request['mesto_pribytia']}</textarea></td><input form=\"ajax_form_change{$request['id']}\" hidden name=\"id_request\" value=\"{$request['id']}\">";

                    if($request['creator'] == $_SESSION['logged_user']['login'])
                    {
                        echo "<td class='text-center'><a href='index.php?red_request_id={$request['id']}'
                          type=\"button\"
                          class='btn btn-outline-dark float-right mr-2'
                          title=\"Редактировать\"
                         
                          >
                            <i class=\"fa fa-edit\"></i>
                        </a></td>";
                    
                    } else {
                        echo "<td class='text-center'></td>";
                    }
                        echo "</tr>";
                }
                ?>
                </tbody>
            </table>

</div>

<!-- Закупка конец -->

<!-- Отгрузка начало -->
  <div class="tab-pane fade" id="Otgruzka" role="tabpanel" aria-labelledby="Otgruzka-tab">

  <table class="table table-sm table-hover table-striped">
                <thead>
                <tr class="text-center">
                <th scope="col">№</th>
                    <th scope="col">Дата создания</th>
                    <th scope="col">ФИО менеджера</th>
                    <th scope="col">Тип менеджера</th>
                    <th scope="col">Объем</th>
                    <th scope="col">Наименование</th>
                    <th scope="col">Место прибытия</th>
                    <th scope="col">Редактировать</th>
                </tr>
                </thead>
                <tbody>
                <?php
                //Создаю массив из id request и id avto
                // $requestavto = R::findAll('requestavto', 'id_request', [$request['id']]);
                // $data = [];
                // foreach ($requests as $key => $request)
                // {
                    
                // }
                //$requests = R::findAll('requests', 'ORDER BY id DESC');
            $requests =R::getAll('SELECT * FROM `requests` WHERE `paranepara` = ? ORDER BY id DESC', ['Отгрузка']);
                //$requests = R::findAll('requests', 'paranepara = Отгрузка', 'ORDER BY id DESC');
                //echo print_r($requests);
                foreach ($requests as $key => $request)
                {
                  // $requests = R::load('otgruzka',$user->role);
                  echo "<form id=\"ajax_form_change{$request['id']}\" method=\"POST\"></form>";
                  echo "<tr class='clickable-row align-middle' style=\"cursor: pointer\" data-href='application.php?request_id={$request['id']}'>";
                  echo "<th scope=\"row\">O.{$request['id']}</th>";
                  echo "<td>{$request['data_sozdaniya_zapisi']}</td>".
                      "<td class=\"text-center\">";
                      $manager = R::findOne('listemployee', 'login = ?', [$request['creator']]);
                      echo "$manager->surname ";
                      echo "$manager->firstname ";
                      echo $manager->lastname;
                     echo "</td>".
                     "<td class=\"text-center\">{$manager['tip_managera']}</td>";




                      echo "<td scope=\"row\"><input form=\"ajax_form_change{$request['id']}\" name=\"volume\" type=\"text\"".
                      "class=\"not_ascent form-control\" ".
                      "id=\"volume{$request['id']}\" ".
                      "onblur=\"focusGreen(volume{$request['id']})\"".
                      "onfocus=\"focusYellow(volume{$request['id']})\"".
                      "onchange=\"funcChange(ajax_form_change{$request['id']})\"".
                      "value=\"{$request['volume']}\"";
                  if($request['creator'] != $_SESSION['logged_user']['login'])
                  {
                      echo "disabled";
                  }
                  echo "></td>";



                      echo "<td scope=\"row\"><input form=\"ajax_form_change{$request['id']}\" name=\"name_product\" type=\"text\"".
                       "class = \"not_ascent form-control\" ".
                       "id=\"name_product{$request['id']}\" ".
                      "onblur=\"focusGreen(name_product{$request['id']})\"".
                      "onfocus=\"focusYellow(name_product{$request['id']})\"".
                       "onchange=\"funcChange(ajax_form_change{$request['id']})\"".
                      "value=\"{$request['name_product']}\"";
                  if($request['creator'] != $_SESSION['logged_user']['login'])
                  {
                      echo "disabled";
                  }
                  echo "></td>";

                      echo "<td scope=\"row\"><textarea form=\"ajax_form_change{$request['id']}\" name=\"mesto_pribytia\" type=\"textarea\" ". 
                      "class = \"not_ascent form-control\" ".
                      "id=\"mesto_pribytia{$request['id']}\" ".
                      "onblur=\"focusGreen(mesto_pribytia{$request['id']})\"".
                      "style=\"height: 40px;\"".
                      "onfocus=\"focusYellow(mesto_pribytia{$request['id']})\"".
                      "onchange=\"funcChange(ajax_form_change{$request['id']})\"";
                  if($request['creator'] != $_SESSION['logged_user']['login'])
                  {
                      echo "disabled";
                  }
                  echo ">{$request['mesto_pribytia']}</textarea></td><input form=\"ajax_form_change{$request['id']}\" hidden name=\"id_request\" value=\"{$request['id']}\">";


                  if($request['creator'] == $_SESSION['logged_user']['login'])
                  {
                      echo "<td class='text-center'><a href='index.php?red_request_id={$request['id']}'
                        type=\"button\"
                        class='btn btn-outline-dark float-right mr-2'
                        title=\"Редактировать\"
                       
                        >
                          <i class=\"fa fa-edit\"></i>
                      </a></td>";
                  
                  } else {
                      echo "<td class='text-center'></td>";
                  }
                      echo "</tr>";
              }
              ?>
                </tbody>
            </table>

</div>

<!-- Отгрузка конец -->

</div>
          

       
           
        </div>
    </div>
</div>




<?php
if(isset($_GET['red_request_id']))
{
    $item = R::findOne('requests', 'id = ?', [$_GET['red_request_id']]);
    include "blocks/forms/formRequestsEdit.php";
    include "blocks/forms_js.php";
    ?>

    <?php
}
?>

<?php
include "blocks/forms/formRequest.php";
include "blocks/forms_js.php";
?>
<script src="js/popper.min.js" crossorigin="anonymous"></script>
<script src="js/main.js" crossorigin="anonymous"></script>
