Vue.component('todo-item', {
    // Компонент todo-item теперь принимает
    // "prop", то есть входной параметр.
    // Имя входного параметра todo.
    props: ['todo'],
    template: '<li>{{ todo.text }}</li>'
  })


  var id_request_avto = $('.number_id_request_avto').attr("id");
  $.ajax({
    url:  "./blocks/test_list_sklad.php", //url страницы 
    type:     "GET", //метод отправки
    dataType: "json", //формат данных
    data: {
      id_request_avto: id_request_avto,
    },  
    success: function(response) { //Данные отправлены успешно
      if(response.success)
      {
        alert("Автомобиль назначен");
      }
  },
  error: function(response) { // Данные не отправлены
        alert('Ошибка. Данные не отправлены в БД.');
  }
});

