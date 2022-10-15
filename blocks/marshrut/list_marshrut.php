
<div class="container marshrut_padding_down">
<div class="row align-items-center">
<div class="col-4">
<button class="btn btn-success logist_button" style="margin-bottom: 20px;" onclick="add_marshrut(<?php echo $avto_request->id; ?>)">Добавить маршрут</button>
</div>
</div>

<div class="accordion" id="accordionPanelsStayOpenMarshrut<?php echo $avto_request->id; ?>">
<?php

$marshruty = R::findAll('marshrut', 'id_request_avto = ?', [$id_avto_request]);

    $count_marshruty = 1;
    foreach ($marshruty as $key=>$marshrut)
    {
      echo "<div class=\"row\" id=\"marshrut{$marshrut->id}\">";
      echo "<div class=\"col-12\">";
        include "./blocks/marshrut/marshrut.php";
        echo "</div>";
      
        
        $count_marshruty += 1;
      echo "</div>";
    }
?>
</div>
</div>