//Для странички редактироавния, отображается модальное окно при редактировании записи 

window.onload = function() {

    function getParameterByName(name) {
        var name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
        var results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }
    //есть ли в строке id
    var red_id = ""
    red_id = getParameterByName('red_request_id');

    //если передается в строке id редактируемого элемента, то открыввается форма редактирования заявки
    
    if (red_id){

        var myModal = new bootstrap.Modal(document.getElementById('formUsersEdit'), {
            keyboard: false
          }) 
          myModal.show();
    }
}

//кликабильная строчка в таблице

$(document).ready(function($) {
    $('.clickable-row').click(function() {
        window.location = $(this).data("href");
    });
});

$('.not_ascent').click(function(e){
    e.stopPropagation(); // убрали всплытие                          
});


/*
var row = document.createElement("tr");

document.getElementById("addRow").onclick = function() {
    var rowCount = document.querySelectorAll(".test");
    for (let i = 0; i < rowCount.length + 1; i++)
    {
        row.innerHTML += "<td class=\"test\">test</td>";
        
    }
    document.getElementById("node").appendChild(row);
}
*/

/*
document.getElementById("addRow").onclick = function() {
    var row = document.createElement("tr");
    row.innerHTML = "<td>test</td>";
    document.getElementById("node").appendChild(row);
}
*/




// использование функции для сохранения значений полей в главной таблице

function funcChange(ajax_form) {
    $.ajax({
        type: "POST",
        url: './blocks/change_request.php',
        data: $(ajax_form).serialize(),
        dataType: "json",
        success: function(response)
        {
        }
        });
}


//Поле окрашивается в желтый цвет при наведении 

function focusYellow(at){
    $(at).css('background-color', '#ecff67');
}

function focusGreen(at){
    $(at).css('background-color', '#95ff51');
}
