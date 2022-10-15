$('.manager_button').addClass("hidden_button");
$('.manager_pole').attr("disabled", "disabled");
$('.manager_check').attr("disabled", "disabled");
$('.logist_button').addClass("hidden_button");
$('.logist_check').attr("disabled", "disabled");
$('.logist_pole').attr("disabled", "disabled");
//logist_check logist_pole
//Функция для обновления ограничений для сотрудников при добавлении новго авто
function employee_limitation() {
    $('.manager_button').addClass("hidden_button");
    $('.manager_pole').attr("disabled", "disabled");
    $('.manager_check').attr("disabled", "disabled");
    $('.logist_button').addClass("hidden_button");
    $('.logist_check').attr("disabled", "disabled");
    $('.logist_pole').attr("disabled", "disabled");

}