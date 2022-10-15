<?php
//Получаю информацию из справочника avto по id из таблицы requestavto

$avto = R::findOne('avto', 'id = ?', [$avto_request->id_avto]);

$avtocolor = R::findOne('avtocolor', 'id = ?', [$avto->color]);

?>
<div class="accordion-item" id="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-heading<?php echo $count ?>">
      <button id="color_avto_botton<?php echo $avto_request->id; ?>" style="background-color:<?php echo $avtocolor->hex_code ?>" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?php echo $count ?>" aria-expanded="false" aria-controls="panelsStayOpen-collapse<?php echo $count ?>">
      <div class="container">
      <div class="row">
        <div class="col-md-3 col-12 text-center">
        <h4 class="">Машина #<?php echo $count ?></h4>
        </div>

        <div class="col-md-9 col-12">

<div class="container">
<div class="row ">


  <div class="col-md-4 col-12 border border-success">
    <div class="row">

      <div class="col-6 col-md-12">
      <h6>Номер автомобиля:</h6>
      </div>

      <div class="col-6 col-md-12" id="number_avto<?php echo "$avto_request->id" ?>">
      <?php
echo  "<h6>$avto->number<h6>";
  ?>
      </div>
    </div>
    
  </div>


  <div class="col-md-4 col-12 border border-success">
    <div class="row">

      <div class="col-6 col-md-12">
      <h6>ФИО водителя №1:</h6>
      </div>

      <div class="col-6 col-md-12" id="name_driver<?php echo "$avto_request->id" ?>">
      <?php
echo  "<h6>$avto->name_driver_1<h6>";
  ?>
      </div>
    </div>
    
  </div>


  <div class="col-md-4 col-12 border border-success">
    <div class="row">

      <div class="col-6 col-md-12">
      <h6>Телефон водителя №1:</h6>
      </div>

      <div class="col-6 col-md-12" id="phone_driver<?php echo "$avto_request->id" ?>">
      <?php
echo  "<h6>$avto->phone_driver_1<h6>";
  ?>
      </div>
    </div>
    
  </div>

</div>
</div>


</div>


 </div>
      


 </div>
        
      </button>
    </h2>
    <div id="panelsStayOpen-collapse<?php echo $count ?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading<?php echo $count ?>">
      <div class="accordion-body">



<div class="row" id="update_avto_card<?php echo "$avto_request->id" ?>">
    <!-- Информация по машине из справочника -->
    

<div class="row">
        <div class="col-md-8 col-12">


<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDopAvtoInfo<?php echo "$avto_request->id" ?>" aria-expanded="false" aria-controls="collapseDopAvtoInfo<?php echo "$avto_request->id" ?>">
    Дополнительная информация
  </button>


  <div class="collapse" id="collapseDopAvtoInfo<?php echo "$avto_request->id" ?>">
  <div class="card card-body">


  <table class="table">
  <thead>
    <tr>
      <th scope="col">Наименование</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><h6>Номер автомобиля</h6></th>
      <td><?php
echo  "<h6>$avto->number<h6>";

        ?></td>
 
    </tr>
    <tr>
      <th scope="row"><h6>ФИО водителя №1</h6></th>
      <td><?php
echo  "<h6>$avto->name_driver_1<h6>";
        ?></td>

    </tr>
    <tr>
      <th scope="row"><h6>Телефон водителя №1</h6></th>
      <td><?php
echo  "<h6>$avto->phone_driver_1<h6>";
        ?></td>
    </tr>
    <tr>
      <th scope="row"><h6>Тип кузова</h6></th>
      <td> <?php
$tipkuzova = R::findOne('tipkuzova', 'id = ?', [$avto->id_tip_kuzova]);
echo "<h6>$tipkuzova->name_kuzova</h6>";
        ?></td>
    </tr>
    <tr>
      <th scope="row"><h6>Тип загрузки</h6></th>
      <td><?php
$tipzagruzki = R::findOne('tipzagruzki', 'id = ?', [$avto->id_tip_zagruzki]);
echo  "<h6>$tipzagruzki->name_zagruzki<h6>";
        ?></td>
    </tr>
    <tr>
      <th scope="row"><h6>Цвет автомобиля</h6></th>
      <td><?php
echo  "<h6>$avtocolor->color<h6>";
        ?></td>
    </tr>
    <tr>
      <th scope="row"><h6>Грузоподъемность автомобиля</h6></th>
      <td><?php
echo  "<h6>$avto->capacity<h6>";
        ?></td>
    </tr>
    <tr>
      <th scope="row"><h6>ФИО водителя №2</h6></th>
      <td><?php
echo  "<h6>$avto->name_driver_2<h6>";
        ?></td>
    </tr>
    <tr>
      <th scope="row"><h6>Телефон водителя №2</h6></th>
      <td><?php
echo  "<h6>$avto->phone_driver_2<h6>";
        ?></td>
    </tr>
    <tr>
      <th scope="row"><h6>ФИО водителя №3</h6></th>
      <td><?php
echo  "<h6>$avto->name_driver_3<h6>";
        ?></td>
    </tr>
    <tr>
      <th scope="row"><h6>Телефон водителя №3</h6></th>
      <td><?php
echo  "<h6>$avto->phone_driver_3<h6>";

        ?></td>
        </tr>



    <tr>
      <th scope="row"><h6>Компания</h6></th>
      <td><?php
       $company = R::findOne('company', 'id = ?', [$avto->id_company]);
echo  "<h6>$company->name<h6>";
        ?></td>
        </tr>
    <tr>
      <th scope="row"><h6>Адрес компании</h6></th>
      <td><?php
echo  "<h6>$company->adres<h6>";
        ?></td>
    </tr>

    <tr>
      <th scope="row"><h6>Тип компании</h6></th>
      <td><?php
echo  "<h6>$company->tip_company<h6>";
        ?></td>
    </tr>

    <tr>
      <th scope="row"><h6>ФИО руководителя</h6></th>
      <td><?php
echo  "<h6>$company->fio_rukovoditely<h6>";
        ?></td>
    </tr>

    <tr>
      <th scope="row"><h6>Телефон</h6></th>
      <td><?php
echo  "<h6>$company->phone_number<h6>";
        ?></td>
    </tr>

    <tr>
      <th scope="row"><h6>Реквизиты</h6></th>
      <td><?php
echo  "<h6>$company->rekvizity<h6>";
        ?></td>
    </tr>


    
  </tbody>
</table>



  </div>
  </div>


        </div>
        <div class="col-md-4 col-12">
 <!-- Кнопки для добавления машины и кнопка для изменения информации через справочник -->
 <?php

      echo "<button type=\"button\" class=\"btn btn-success btn-padding-top logist_button\" data-bs-toggle=\"modal\" data-bs-target=\"#tableAvtInfo\" onclick=\"peredacha_id_request_avto({$avto_request->id})\">Выбрать машину</button>";
      echo "<button type=\"button\" style=\"margin-left:20px;\" class=\"btn btn-success btn-padding-top logist_button\" data-bs-toggle=\"modal\" data-bs-target=\"#formCompanyAdd\">Список компаний</button>";
?>
</div>
        </div>
        
</div>

    

    <!-- <div class="col-4"> -->
       
<!-- </div> -->
<!-- модаль с таблицей справочника находится в файле manager -->





<hr>
<!-- Накладные -->

<div class="row align-items-center" id="nakladnay_display"
<?php
if(!$avto->number) {
    echo "hidden";
}
    ?>
>
<div class="col-4">
<button class="btn btn-success manager_button" style="margin-bottom: 20px;" onclick="add_nakladnay(<?php echo $avto_request->id; ?>)">Добавить накладную</button>
</div>
</div>

<div class="accordion" id="accordionPanelsStayOpenNakladnye<?php echo $avto_request->id; ?>">
<?php
// id которое связывает все таблицы, обозначает зарезервированную автомашну
$id_avto_request = $avto_request->id;
$nakladnye = R::findAll('nakladnay', 'id_request_avto = ?', [$avto_request->id]);

    $count_nakladnye = 1;
    foreach ($nakladnye as $key=>$nakladnay)
    {
      echo "<div class=\"row\" id=\"nakladnay{$nakladnay->id}\">";
      echo "<div class=\"col-12\">";
        include "./blocks/nakladnye/nakladnye.php";
        echo "</div>";
      
        
        $count_nakladnye += 1;
      echo "</div>";
    }
?>
</div>

       </div>
       <hr>