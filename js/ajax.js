
$(document).ready(function() {


  //Добавление машины

  document.querySelector(".new_avto").addEventListener("click", function(){
    var get_id = document.querySelector('.get_id').id;
    
     if (confirm("Вы точно хотите добавить авто?"))
     {
      $.ajax({
        type: "GET",
        url: './blocks/avto/add_avto.php',
        data: {id: get_id},
        dataType: "html",
        success: function(response)
        {
            //document.getElementById("accordionPanelsStayOpenAvtos").html(response);
            //добавляю полученный HTML код к фиктивному элементу
            $(".test_avto").html(response);
            console.log(response);
            
            //$('#accordionPanelsStayOpenAvtos').html(response);
            //test avto фиктивный элемент, в котоором сохраняется код из ajax, сделал так потому response невозможно присоединить через append
            parent = document.querySelector(".test_avto");
            var child = parent.querySelector('.add_avto');
            document.getElementById("accordionPanelsStayOpenAvtos").append(child);
            
            // user is logged in successfully in the back-end
            // let's redirect 


//Для того чтобы у нового авто прослушивались склады
document.querySelectorAll(".tableSklad").forEach(table => 
  table.onclick = (function(event){
    let target = event.target; // где был клик?
  
    if (target.tagName != 'INPUT') return; // не на input? тогда не интересует
    target.setAttribute("disabled", "disabled");
    //console.log(target);
    skladPostInfo(target);
})
);
//Для того чтобы у нового авто прослушивался маршрут
document.querySelectorAll(".tableMarshrut").forEach(table => 
  table.onclick = (function(event){
    let target = event.target; // где был клик?
  
    if (target.tagName != 'INPUT') return; // не на input? тогда не интересует
    if (target.type != 'checkbox') return; 
    target.setAttribute("disabled", "disabled");
    //console.log(target);
    marshrutPostInfo(target);
})
);
//для того чтобы ограничения для сотрудников сохранялись при добавлении новго авто
if (typeof functionName == "employee_limitation") {
  employee_limitation();
} 
       }
   });
     }
  });

});

function post_avto_info(id, number_id_request_avto){
  sendAjaxFormAvto(id, 'save_avto_info.php', number_id_request_avto);
     return false; 
}

function sendAjaxFormAvto(ajax_form, url, number_id_request_avto) {
  $.ajax({
      url:  "./blocks/avto_guide/" + url, //url страницы 
      type:  "POST", //метод отправки
      dataType: "json", //формат данных
      data: $("#" + ajax_form).serialize(),  // Сеарилизуем объект
      success: function(response) { //Данные отправлены успешно
        if(response.success)
        {
          update_table(number_id_request_avto);
      
          alert("Данные о машине успешно обновились");
        }
    },
    error: function(response) { // Данные не отправлены
          alert('Ошибка. Данные не отправлены.');
    }
 });
 
 //$('#changeInfoAvto').remove();
}


function post_nakladnay_info(id, id_avto_request){
  sendAjaxFormNakladnay(id, 'save_nakladnay_info.php', id_avto_request);
  return false; 
}

function sendAjaxFormNakladnay(ajax_form, url) {
  $.ajax({
      url:  "./blocks/nakladnye/" + url, //url страницы 
      type:     "POST", //метод отправки
      dataType: "json", //формат данных
      data: $("#" + ajax_form).serialize(),  // Сеарилизуем объект
      success: function(response) { //Данные отправлены успешно
          
      //обновляю данные у накладной в шапке через функцию html()
        //$("#nakladnay_number"+ id_request_avto).html("<h6>"+response.number_avto+"</h6>");
          update_nakladnay(response.id_nakladnay);
          
        
    },
    error: function(response) { // Данные не отправлены
          alert('Ошибка. Данные не отправлены.');
    }
 });
 
 //$('#changeInfoAvto').remove();
}

function update_table(number_id_request_avto){
  $.ajax({
    type: "GET",
    url: './blocks/avto_guide/update_table.php',
    data: {number_id_request_avto: number_id_request_avto},
    dataType: "html",
    success: function(response)
    {
      $("#table_avto_info").html(response);
   }
  });
}

function update_nakladnay(id_nakladnay){
  $.ajax({
    type: "GET",
    url: './blocks/nakladnye/update_nakladnay_top.php',
    data: {
      id_nakladnay: id_nakladnay,
    },
    dataType: "json",
    success: function(response)
    {
      //$("#accordionPanelsStayOpenNakladnye" + id_avto_request).html(response);
       $("#numbernakladnay" + id_nakladnay).html("<h6>"+response.numbernakladnay+"</h6>");
       if (response.tovar_po_nakladnoy_gotov_k_otgruzke == 1) {
        $("#tovar_po_nakladnoy_gotov_k_otgruzke"+ id_nakladnay).html("<h6>Да</h6>");
       } else {
        $("#tovar_po_nakladnoy_gotov_k_otgruzke"+ id_nakladnay).html("<h6>Нет</h6>");
       }
       
      //response.forEach(element => element.forEach(element => console.log(element)));

      alert("Данные о накладной успешно обновились");
   }
  });
  
}

    
function delete_avto(id) {
  if (confirm("Вы точно хотите удалить?"))
    {
  $.ajax({
            type: "GET",
            url: './blocks/avto/delete_avto.php',
            data: {id: id},
            dataType: 'json',
            success: function(response)
            {  
              if(response.success) {
                document.getElementById("avto"+id).remove();
                alert("Машина удалена!");
             
              }else {
                alert("Машина не удалена из БД!");
              }
           }
       });
      }
}


//Добавление новой накладной


function add_nakladnay(id){
  if(id) {
    if (confirm("Вы точно хотите добавить накладную?"))
    {
     $.ajax({
       type: "GET",
       url: './blocks/nakladnye/add_nakladnay.php',
       data: {id: id},
       dataType: "html",
       success: function(response)
       {
           //document.getElementById("accordionPanelsStayOpenAvtos").html(response);
           //добавляю полученный HTML код к фиктивному элементу
           $(".test_avto").html(response);
           console.log(response);
           
           //$('#accordionPanelsStayOpenAvtos').html(response);
           //test avto фиктивный элемент, в котоором сохраняется код из ajax, сделал так потому response невозможно присоединить через append
           parent = document.querySelector(".test_avto");
           var child = parent.querySelector('.add_nakladnay');
           document.getElementById("accordionPanelsStayOpenNakladnye"+id).append(child);
           
           // user is logged in successfully in the back-end
           // let's redirect 
      }
  });
    }
  } else {
    return false;
  }
  
}




function delete_nakladnay(id) {
  if (confirm("Вы точно хотите удалить?"))
    {
  $.ajax({
            type: "GET",
            url: './blocks/nakladnye/delete_nakladnay.php',
            data: {id: id},
            dataType: 'json',
            success: function(response)
            {  
              if(response.success) {
                document.getElementById("nakladnay"+id).remove();
                alert("Накладная удалена!");
             
              }else {
                alert("Накладная не удалена из БД!");
              }
           }
       });
      }
}


//Редактировать существующую запись в справочнике 

function open_red_avto_info(id){
 
 //кнопки отключаются пока не откроется модальное окно, чтобы не наоткрывать кучу окон 
 $(".button_change_info_avto").each(function() {
   $(this).attr('disabled', 'disabled');
});
var number_id_request_avto = $(".number_id_request_avto").attr('id');
      $.ajax({
        type: "GET",
        url: './blocks/forms/red_avto_info.php',
        data: {id: id,
          number_id_request_avto: number_id_request_avto
        },
        dataType: 'html',
        success: function(response)
        {  
          $("#modal_red_avto_info").html(response);
          var changeInfoAvto = new bootstrap.Modal(document.getElementById('changeInfoAvto'));
          changeInfoAvto.show();
          $(".button_change_info_avto").each(function() {
            $(this).removeAttr('disabled');
         });
       }
    });
}

//Удалить запись об автомобиле в справочнике 

function delete_avto_info(id) {
  if (confirm("Вы точно хотите удалить?"))
    {
      var number_id_request_avto = $(".number_id_request_avto").attr('id');
      $.ajax({
        type: "GET",
        url: './blocks/avto_guide/delete_avto_info.php',
        data: {id: id, 
          number_id_request_avto:number_id_request_avto
        },
        dataType: 'html',
        success: function(response)
        {  
          $("#table_avto_info").html(response);
       }
    });
    }
}


//Открытие формы для добавления информации по авто в справочник

function open_add_avto_info(){
  //var number_id_request_avto = $(".number_id_request_avto").attr('id');
  $("#button_open_add_avto_info").attr('disabled', 'disabled');
       $.ajax({
         type: "GET",
         url: './blocks/forms/add_avto_table.php',
         data: {
          //number_id_request_avto: number_id_request_avto
         },
         dataType: 'html',
         success: function(response)
         {  
           $("#modal_add_avto_info").html(response);
           var changeInfoAvto = new bootstrap.Modal(document.getElementById('addAvtoTableModal'));
           changeInfoAvto.show();
           $("#button_open_add_avto_info").removeAttr('disabled', 'disabled');
        }
     });
}


//Добавление нового авто в справочник

function save_add_avto_info(){
  var number_id_request_avto = $(".number_id_request_avto").attr('id');
  $.ajax({
    url:  "./blocks/avto_guide/save_add_avto_info.php", //url страницы 
    type:     "POST", //метод отправки
    dataType: "json", //формат данных
    data: $("#ajax_form_add_avto_table").serialize(),  // Сеарилизуем объект
    success: function(response) { //Данные отправлены успешно
      if(response.success)
      {
        alert("Данные о машине успешно сохранились");

        $.ajax({
          type: "GET",
          url: './blocks/avto_guide/update_table.php',
          data: {
            number_id_request_avto: number_id_request_avto,
          },
          dataType: "html",
          success: function(response)
          {
            $("#table_avto_info").html(response);
          }
          });


      }
  },
  error: function(response) { // Данные не отправлены
        alert('Ошибка. Данные не отправлены.');
  }
});

//$('#addAvtoTableModal').remove();

}


/*Добавляю id_request_avto в справочник в фиктивный блок div class="number_id_request_avto" для того чтобы авто правильно сохранялось в таблице request_avto */

function peredacha_id_request_avto(id_request_avto){
  $('.number_id_request_avto').attr("id", id_request_avto);
}

//Назначение автомобиля для указанного id_request_avto 
function prinyatoe_avto(id_avto){
  var id_request_avto = $('.number_id_request_avto').attr("id");
  $.ajax({
    url:  "./blocks/add_to_requestavto.php", //url страницы 
    type:     "GET", //метод отправки
    dataType: "json", //формат данных
    data: {
      id_avto: id_avto,
      id_request_avto: id_request_avto,
    },  
    success: function(response) { //Данные отправлены успешно
    
        //подставляю в шапку взятые из бд значения для авто
        $("#number_avto"+ id_request_avto).html("<h6>"+response.number_avto+"</h6>");
        $("#color_avto_botton"+ id_request_avto).css('background-color', response.color_avto);
        $("#name_driver"+ id_request_avto).html("<h6>"+response.name_driver+"</h6>");
        $("#phone_driver"+ id_request_avto).html("<h6>"+response.phone_driver+"</h6>");
        alert("Автомобиль назначен");
        $("#nakladnay_display").removeAttr("hidden");
    
  },
  error: function(response) { // Данные не отправлены
        alert('Ошибка. Данные не отправлены в БД.');
  }
});

//$('#addAvtoTableModal').remove();
$.ajax({
type: "GET",
url: './blocks/avto/update_avto.php',
data: {
  id_avto: id_avto,
  id_request_avto:id_request_avto
}, 
dataType: "html",
success: function(response)
{
  $("#update_avto_card" + id_request_avto).html(response);
}
});
}

//Отслеживание изменения в таблицах складов, реализуется логика делегирования 


document.querySelectorAll(".tableSklad").forEach(table => 
  table.onclick = (function(event){
    let target = event.target; // где был клик?
  
    if (target.tagName != 'INPUT') return; // не на input? тогда не интересует
    target.setAttribute("disabled", "disabled");
    //console.log(target);
    skladPostInfo(target);
})
);

function skladPostInfo(input){
  var id_request_avto = input.dataset.id_request_avto;
  var name_row = input.dataset.name_row;
  var name_time = input.dataset.name_time;

  //отправка данных через GET на сервер

  var value = input.checked ? "1": "0";

  $.ajax({
    type: "GET",
    url: './blocks/updateInfo/updateSklad.php',
    data: {
      id_request_avto: id_request_avto,
      name_row: name_row,
      name_time: name_time,
      value :value ,
    }, 
    dataType: "json",
    success: function(response)
    {
      //var json = $.parseJSON(response);

      $("#"+ name_time+id_request_avto).html("<h6>"+response.name_time+"</h6>");
      if (value == 1) {
        $("#"+ name_row+id_request_avto).attr("checked", "checked");
      } else {
        $("#"+ name_row+id_request_avto).removeAttr("checked", "checked");
      }

      input.removeAttribute("disabled");
    }
    });
}

//Отслеживание изменения в таблице маршрута, реализуется логика делегирования 


document.querySelectorAll(".tableMarshrut").forEach(table => 
  table.onclick = (function(event){
    let target = event.target; // где был клик?
  
    if (target.tagName != 'INPUT') return; // не на input? тогда не интересует
    if (target.type != 'checkbox') return; 
    target.setAttribute("disabled", "disabled");
    //console.log(target);
    marshrutPostInfo(target);
})
);


function marshrutPostInfo(input){
  var id_request_avto = input.dataset.id_request_avto;
  var name_row = input.dataset.name_row;
  var id_marshrut = input.dataset.id_marshrut;
  var name_time = input.dataset.name_time;

  //отправка данных через GET на сервер

  var value = input.checked ? "1": "0";

  $.ajax({
    type: "GET",
    url: './blocks/updateInfo/updateMarshrut.php',
    data: {
      id_marshrut : id_marshrut,
      id_request_avto: id_request_avto,
      name_row: name_row,
      name_time: name_time,
      value :value ,
    }, 
    dataType: "json",
    success: function(response)
    {
      //var json = $.parseJSON(response);

      $("#marshrut" + id_marshrut).find("#"+ name_time+id_request_avto).html("<h6>"+response.name_time+"</h6>");
      if (value == 1) {
        $("#marshrut" + id_marshrut).find("#"+ name_row+id_request_avto).attr("checked", "checked");
      } else {
        $("#marshrut" + id_marshrut).find("#"+ name_row+id_request_avto).removeAttr("checked", "checked");
      }

      input.removeAttribute("disabled");
    }
    });
}

function save_info_marshrut(ajax_form, id_marshrut){
  $.ajax({
      url:  "./blocks/marshrut/save_info_marshrut.php", //url страницы 
      type:  "POST", //метод отправки
      dataType: "json", //формат данных
      data: $("#" + ajax_form).serialize(),  // Сеарилизуем объект
      success: function(response) { //Данные отправлены успешно
        if(response.success)
        {

          //$("#accordionPanelsStayOpenNakladnye" + id_avto_request).html(response);
       $("#tockha_starta" + id_marshrut).html("<h6>"+response.tockha_starta+"</h6>");
       $("#tochka_dostavki" + id_marshrut).html("<h6>"+response.tochka_dostavki+"</h6>");
       $("#distance" + id_marshrut).html("<h5>"+response.distance+"</h5>");

       
      //  if (response.avto_v_puti) {
      //   $("#avto_v_puti"+ id_marshrut).attr("checked","checked");
      //  } else {
      //   $("#avto_v_puti"+ id_marshrut).removeAttr("checked","checked");
      //  }

      //  if (response.avto_pribylo_k_klientu) {
      //   $("#avto_pribylo_k_klientu"+ id_marshrut).attr("checked","checked");
      //   $("#vremy_pribytia" + id_marshrut).html("<h6>"+response.vremy_pribytia+"</h6>");
      //  } else {
      //   $("#avto_pribylo_k_klientu"+ id_marshrut).removeAttr("checked","checked");
      //   $("#vremy_pribytia" + id_marshrut).html("<h6></h6>");
      //  }
       
      //response.forEach(element => element.forEach(element => console.log(element)));

          alert("Данные о маршруте успешно обновились");
        }
    },
    error: function(response) { // Данные не отправлены
          alert('Ошибка. Данные не отправлены.');
    }
 });
 
 //$('#changeInfoAvto').remove();
}



//Добавление нового маршрута


function add_marshrut(id_request_avto){
  if(id_request_avto) {
    if (confirm("Вы точно хотите добавить маршрут?"))
    {
     $.ajax({
       type: "GET",
       url: './blocks/marshrut/add_marshrut.php',
       data: {id: id_request_avto},
       dataType: "html",
       success: function(response)
       {
           //document.getElementById("accordionPanelsStayOpenAvtos").html(response);
           //добавляю полученный HTML код к фиктивному элементу
           $(".test_avto").html(response);
           console.log(response);
           
           //$('#accordionPanelsStayOpenAvtos').html(response);
           //test avto фиктивный элемент, в котоором сохраняется код из ajax, сделал так потому response невозможно присоединить через append
           parent = document.querySelector(".test_avto");
           var child = parent.querySelector('.add_marshrut');
           document.getElementById("accordionPanelsStayOpenMarshrut"+id_request_avto).append(child);

           // user is logged in successfully in the back-end
           // let's redirect 
      }
  });
    }
  } else {
    return false;
  }
  
}

//Удаление маршрута

function delete_marshrut(id) {
  if (confirm("Вы точно хотите удалить?"))
    {
  $.ajax({
            type: "GET",
            url: './blocks/marshrut/delete_marshrut.php',
            data: {id: id},
            dataType: 'json',
            success: function(response)
            {  
              if(response.success) {
                document.getElementById("marshrut"+id).remove();
                alert("Маршрут удален!");
             
              }else {
                alert("Маршрут не удалена из БД!");
              }
           }
       });
      }
}


//Отправка даты предполаемого прибытия авто на склад 

function save_predpolagayemoye_vremya(ajax_form) {
  $.ajax({
    type:  "POST", //метод отправки
    data: $("#" + ajax_form).serialize(),  // Сеарилизуем объект
    url: './blocks/updateInfo/update_predpolagayemoye_vremya.php',
    dataType: 'json',
    success: function(response)
    {  
      if(response.success) {

        alert("Дата сохранена");
     
      }else {
        alert("Дата не сохранилась в БД!");
      }
   }
});
}


//Удалить запись о компании в справочнике 

function delete_company(id) {
  if (confirm("Вы точно хотите удалить?"))
    {
      $.ajax({
        type: "GET",
        url: './blocks/company/delete_company.php',
        data: {id: id
        },
        dataType: 'html',
        success: function(response)
        {  
          update_company()
       }
    });
    }
}




//Открытие формы для добавления информации по компании в справочник

function open_add_company(){
  //var number_id_request_avto = $(".number_id_request_avto").attr('id');
  $("#button_open_add_company").attr('disabled', 'disabled');
       $.ajax({
         type: "GET",
         url: './blocks/company/add_form_company.php',
         data: { },
         dataType: 'html',
         success: function(response)
         {  
           $("#modal_add_company").html(response);
           var changeInfoAvto = new bootstrap.Modal(document.getElementById('addCompanyTableModal'));
           changeInfoAvto.show();
           $("#button_open_add_company").removeAttr('disabled', 'disabled');
        }
     });
}

//Сохранение инфы о новой компании 
function save_add_company(){
  $.ajax({
    url:  "./blocks/company/save_add_company.php", //url страницы 
    type:     "POST", //метод отправки
    dataType: "json", //формат данных 
    data: $("#ajax_form_add_company_table").serialize(),  // Сеарилизуем объект
    success: function(response) { //Данные отправлены успешно
      if(response.success)
      {
        alert("Данные о компании успешно сохранились");
        update_company()
      }
  },
  error: function(response) { // Данные не отправлены
        alert('Ошибка. Данные не отправлены.');
  }
});
}

//Обновление таблицы компаний
function update_company() {
  $.ajax({
    type: "GET",
    url: './blocks/company/update_table_company.php',
    data: {},
    dataType: 'html',
    success: function(response)
    {  
      $("#update_table_company").html(response);
   }
});
}



//Редактировать существующую запись в справочнике компаний

function open_red_company_info(id){
 
  //кнопки отключаются пока не откроется модальное окно, чтобы не наоткрывать кучу окон 
  $(".button_change_info_company").each(function() {
    $(this).attr('disabled', 'disabled');
 });
 var number_id_request_avto = $(".number_id_request_avto").attr('id');
       $.ajax({
         type: "GET",
         url: './blocks/company/red_company_info.php',
         data: {id: id,
          number_id_request_company: number_id_request_avto
         },
         dataType: 'html',
         success: function(response)
         {  
           $("#modal_red_company_info").html(response);
           var changeInfoCompany = new bootstrap.Modal(document.getElementById('changeInfoCompany'));
           changeInfoCompany.show();
           $(".button_change_info_company").each(function() {
             $(this).removeAttr('disabled');
          });
        }
     });
 }


 function post_company_info(ajax_form){
  sendAjaxFormAvto(ajax_form, 'save_company_info.php');
     return false; 
}

function sendAjaxFormAvto(ajax_form, url) {
  $.ajax({
      url:  "./blocks/company/" + url, //url страницы 
      type:  "POST", //метод отправки
      dataType: "json", //формат данных
      data: $("#" + ajax_form).serialize(),  // Сеарилизуем объект
      success: function(response) { //Данные отправлены успешно
        if(response.success)
        {
          update_company();
      
          alert("Данные о компании успешно обновились");
        }
    },
    error: function(response) { // Данные не отправлены
          alert('Ошибка. Данные не отправлены.');
    }
 });
 
 //$('#changeInfoAvto').remove();
}
