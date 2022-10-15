//Добавление новой накладной


function add_nakladnay_zagruzki(id){
    if(id) {
      if (confirm("Вы точно хотите добавить накладную?"))
      {
       $.ajax({
         type: "GET",
         url: './zagruzki/nakladnye/add_nakladnay_zagruzki.php',
         data: {id: id},
         dataType: "html",
         success: function(response)
         {
             //document.getElementById("accordionPanelsStayOpenAvtos").html(response);
             //добавляю полученный HTML код к фиктивному элементу
             $(".test_avto").html(response);
             
             //$('#accordionPanelsStayOpenAvtos').html(response);
             //test avto фиктивный элемент, в котоором сохраняется код из ajax, сделал так потому response невозможно присоединить через append
             parent = document.querySelector(".test_avto");
             var child = parent.querySelector('.add_nakladnay');
             document.getElementById("accordionPanelsStayOpenNakladnye"+id).append(child);
             
             // user is logged in successfully in the back-end
             // let's redirect 

             document.querySelectorAll(".tableNakladnay").forEach(table => 
              table.onclick = (function(event){
                let target = event.target; // где был клик?
              console.log(123);
                if (target.tagName != 'INPUT') return; // не на input? тогда не интересует
                target.setAttribute("disabled", "disabled");
                //console.log(target);
                nakladnayPostInfo(target);
            })
            );
        }
    });
      }
    } else {
      return false;
    }

    
    
  }



  function post_nakladnay_info_zagruzki(id, id_avto_request){
    sendAjaxFormNakladnay_zagruzki(id, 'save_nakladnay_info_zagruzki.php', id_avto_request);
    return false; 
  }
  
  function sendAjaxFormNakladnay_zagruzki(ajax_form, url) {
    $.ajax({
        url:  "./zagruzki/nakladnye/" + url, //url страницы 
        type:     "POST", //метод отправки
        dataType: "json", //формат данных
        data: $("#" + ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
            
        //обновляю данные у накладной в шапке через функцию html()
          //$("#nakladnay_number"+ id_request_avto).html("<h6>"+response.number_avto+"</h6>");
            update_nakladnay_zagruzki(response.id_nakladnay);
            
          
      },
      error: function(response) { // Данные не отправлены
            alert('Ошибка. Данные не отправлены.');
      }
   });
   
   //$('#changeInfoAvto').remove();
  }

  function update_nakladnay_zagruzki(id_nakladnay){
    $.ajax({
      type: "GET",
      url: './zagruzki/nakladnye/update_nakladnay_top.php',
      data: {
        id_nakladnay: id_nakladnay,
      },
      dataType: "json",
      success: function(response)
      {
        //$("#accordionPanelsStayOpenNakladnye" + id_avto_request).html(response);
         $("#numbernakladnay" + id_nakladnay).html("<h6>"+response.number+"</h6>");
         if (response.tovar_prinyt == 1) {
          $("#tovar_prinyt"+ id_nakladnay).html("<h6>Да</h6>");
         } else {
          $("#tovar_prinyt"+ id_nakladnay).html("<h6>Нет</h6>");
         }
         
        //response.forEach(element => element.forEach(element => console.log(element)));
  
        alert("Данные о накладной успешно обновились");
     }
    });
    
  }


  function delete_nakladnay_zagruzki(id) {
    if (confirm("Вы точно хотите удалить?"))
      {
    $.ajax({
              type: "GET",
              url: './zagruzki/nakladnye/delete_nakladnay_zagruzki.php',
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
  




  document.querySelectorAll(".tableNakladnay").forEach(table => 
    table.onclick = (function(event){
      let target = event.target; // где был клик?
    console.log(123);
      if (target.tagName != 'INPUT') return; // не на input? тогда не интересует
      target.setAttribute("disabled", "disabled");
      //console.log(target);
      nakladnayPostInfo(target);
  })
  );
  
  function nakladnayPostInfo(input){
    var id_nakladnay = input.dataset.id_nakladnay;
    var name_row = input.dataset.name_row;
    var name_time = input.dataset.name_time;
  
    //отправка данных через GET на сервер
  
    var value = input.checked ? "1": "0";
  
    $.ajax({
      type: "GET",
      url: './zagruzki/nakladnye/updateNakladnay.php',
      data: {
        id_nakladnay: id_nakladnay,
        name_row: name_row,
        name_time: name_time,
        value :value ,
      }, 
      dataType: "json",
      success: function(response)
      {
        //var json = $.parseJSON(response);
  
        $("#"+ name_time+id_nakladnay).html("<h6>"+response.name_time+"</h6>");
        if (value == 1) {
          $("#"+ name_row+id_nakladnay).attr("checked", "checked");
        } else {
          $("#"+ name_row+id_nakladnay).removeAttr("checked", "checked");
        }
  
        input.removeAttribute("disabled");
      }
      });
  }




  function save_info_zag_marshrut(ajax_form, id_marshrut){
    $.ajax({
        url:  "./zagruzki/save_info_zag_marshrut.php", //url страницы 
        type:  "POST", //метод отправки
        dataType: "json", //формат данных
        data: $("#" + ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
          if(response.success)
          {
            //$("#accordionPanelsStayOpenNakladnye" + id_avto_request).html(response);
         $("#tochka_starta" + id_marshrut).html("<h6>"+response.tochka_starta+"</h6>");
         $("#tochka_dostavki" + id_marshrut).html("<h6>"+response.tochka_dostavki+"</h6>");
         $("#distance" + id_marshrut).html("<h5>"+response.distance+"</h5>");
  
         if (response.avto_v_puti) {
          $("#avto_v_puti"+ id_marshrut).attr("checked","checked");
         } else {
          $("#avto_v_puti"+ id_marshrut).removeAttr("checked","checked");
         }
  
         if (response.avto_pribylo) {
          $("#avto_pribylo"+ id_marshrut).attr("checked","checked");
          $("#vremy_pribytia" + id_marshrut).html("<h6>"+response.vremy_pribytia+"</h6>");
         } else {
          $("#avto_pribylo"+ id_marshrut).removeAttr("checked","checked");
          $("#vremy_pribytia" + id_marshrut).html("<h6></h6>");
         }
         
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










  //Отслеживание изменения в таблице маршрута, реализуется логика делегирования 


document.querySelectorAll(".tableZagMarshrut").forEach(table => 
  table.onclick = (function(event){
    let target = event.target; // где был клик?
  
    if (target.tagName != 'INPUT') return; // не на input? тогда не интересует
    if (target.type != 'checkbox') return; 
    target.setAttribute("disabled", "disabled");
    //console.log(target);
    zagmarshrutPostInfo(target);
})
);

function zagmarshrutPostInfo(input){
  var id_request = input.dataset.id_request;
  var name_row = input.dataset.name_row;
  var id_marshrut = input.dataset.id_marshrut;
  var name_time = input.dataset.name_time;
console.log(123);
  //отправка данных через GET на сервер

  var value = input.checked ? "1": "0";

  $.ajax({
    type: "GET",
    url: './zagruzki/updateZagMarshrut.php',
    data: {
      id_marshrut : id_marshrut,
      id_request: id_request,
      name_row: name_row,
      name_time: name_time,
      value :value ,
    }, 
    dataType: "json",
    success: function(response)
    {
      //var json = $.parseJSON(response);

      $("#marshrut" + id_marshrut).find("#"+ name_time+id_request).html("<h6>"+response.name_time+"</h6>");
      if (value == 1) {
        $("#marshrut" + id_marshrut).find("#"+ name_row+id_request).attr("checked", "checked");
      } else {
        $("#marshrut" + id_marshrut).find("#"+ name_row+id_request).removeAttr("checked", "checked");
      }

      input.removeAttribute("disabled");
    }
    });
}