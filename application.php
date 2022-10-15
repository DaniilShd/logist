<?php
    require "db.php";
    include "blocks/only_reg.php";
    
?>

<html>
<head>

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link type="text/css" href="css/showMessage.css" rel="stylesheet" media="screen" />
    <script type='text/javascript' src='js/jquery.min.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <title>Оформление заявки</title>
</head>

<body>

<?php include "./blocks/menu_request.php"; ?>

<?php
if(isset($_GET['request_id']))
{
    $request = R::findOne('requests', 'id = ?', [$_GET['request_id']]);
}
else {
    header('Location: index.php');
}

?>
<br>
<div class="container">
    <div class="row align-items-start">
        <?php
        // if(strcasecmp($request['paranepara'], "Отгрузка") == 0){
        //                 echo "<h2 scope=\"row\">Заявка № O.{$request->id}</h2>";
        //             } elseif (strcasecmp($request['paranepara'], "Закупка")==0) {
        //                 echo "<h2 scope=\"row\">Заявка № З.{$request->id}</h2>";
        //             }
        echo "<h2 scope=\"row\">Заявка № O.{$request->id}</h2>";
                    ?>
    </div>
    <hr>
    
    <div  class="row align-items-start">
        <h4>Срочность: <?php echo $request->srochnost; ?></h4>
    </div>
    <div  class="row align-items-start">
        <h4>Вид заявки: <?php echo $request->paranepara; ?></h4>
    </div>
    <div  class="row align-items-start">
        <h4>Дата создания: <?php echo $request->data_sozdaniya_zapisi; ?></h4>
    </div>
</div>
<hr>
<?php

echo "<div class=\"get_id\" id=\"{$_GET['request_id']}\"></div>";

?>

<?php
// //В зависимости от должности сотрудника подключается нужный php файл с доступными данными для редактирования
//  if($_SESSION['logged_user']['department'] == 'Логист'){
//     include "./blocks/employee/logist.php";
//  } elseif($_SESSION['logged_user']['department'] == 'Кладовщик') {
//     include "./blocks/employee/storekeeper.php";
//  } elseif($_SESSION['logged_user']['department'] == 'Менеджер') {
//     include "./blocks/employee/manager.php";
//  } elseif($_SESSION['logged_user']['department'] == 'Руководитель') {
//     include "./blocks/employee/supervisor.php";
//  } elseif($_SESSION['logged_user']['department'] == 'admin') {
//     include "./blocks/employee/admin.php";
//  }
 ?>



<div class="container">
  <div class="row align-items-start">
    

    <div class="accordion" id="accordionPanelsStayOpenAvtos">

    <?php
    //Выборка из всех авто по данному id_request из таблицы requestavto
    $avtos_request = R::findAll('requestavto', 'id_request = ?', [$_GET['request_id']]);

    $get = $_GET['request_id'];

    $count = 1;

    //Обходим все записи из таблицы request_avto и отображаем их на странице
    foreach ($avtos_request as $key=>$avto_request)
    {
      echo "<div class=\"row \" id=\"avto{$avto_request->id}\">";
      echo "<div class=\"col-10 col-md-11 avto_padding_down\">";
      //Блок для сохранения значения id request_id, фиктивный блок
      
        include "./blocks/avto/avto.php";
        echo "</div>";  
      // Добавляю плюсик перед первым автомобилем
      if($count == 1){
        echo "<div class=\"col-2 col-md-1\">";
            echo "<i class=\"fa fa-plus plus_avto new_avto logist_button\"></i>";
        echo "</div>";
      }else{
      // Добавляю минус напротив остальных авто
        echo "<div class=\"col-1\">";
            echo "<i class=\"fa fa-minus minus_avto logist_button\" onclick=\"delete_avto({$avto_request->id})\"></i>";
        echo "</div>";
      }
      $count += 1;
      echo "</div>";
    }
  ?>
    </div>
    <!-- Плюс для добавления новой машины, отдельной колонкой-->
    <!-- <div class="col-1">
      <div class="row align-items-start" id="plus_minus">
      <i class="fa fa-plus plus_avto" id="new_avto"></i>

      </div> -->

<?php
include "./blocks/forms/table_avto.php";
?>

<?php
include "./blocks/company/table_company.php";
?>
    </div>
  </div>
</div>
<hr>
<!-- Блок для вывода модального справочника -->
<div id="modal_red_avto_info"></div>

<!-- Блок для вывода модального справочника для компаний -->
<div id="modal_red_company_info"></div>

<!-- Блок куда добавляется форма для добавления нового авто при вызове через ajax -->
<div id="modal_add_avto_info"></div>

<!-- Для добавления формы добавления новой компании -->
<div id="modal_add_company"></div>

<!-- Фиктивный элемент для отображения карточки водителя на экране -->
 <div class="test_avto" style="display: none"></div>






<script src="js/popper.min.js" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/main.js" crossorigin="anonymous"></script>
<script type="text/javascript" src='js/ajax.js'></script>
<?php 

 // //В зависимости от должности сотрудника подключается нужный php файл с доступными данными для редактирования
 if($_SESSION['logged_user']['department'] == 'Логист'){
    echo "<script src=\"js/logist.js\" crossorigin=\"anonymous\"></script>";
 } elseif($_SESSION['logged_user']['department'] == 'Менеджер') {
  echo "<script src=\"js/manager.js\" crossorigin=\"anonymous\"></script>";
 } elseif($_SESSION['logged_user']['department'] == 'Кладовщик') {
  echo "<script src=\"js/kladovshchik.js\" crossorigin=\"anonymous\"></script>";
 }

?>
</body>
</html>

