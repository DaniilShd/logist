Vue.component('todo-item', {
    // Компонент todo-item теперь принимает
    // "prop", то есть входной параметр.
    // Имя входного параметра todo.
    props: ['todo'],
    template: '<li>{{ todo.text }}</li>'
  })


  for(var i = 0; i < 10; i++){
    var vue_test = new Vue({
        el: '#vue_test',
        data: {
            seen: true,
          groceryList: [
            { id: 0, text: 'Овощи' + i },
            { id: 1, text: 'Сыр' + i },
            { id: 2, text: 'Что там ещё люди едят?' + i }
          ]
        }
      })
  }
  
