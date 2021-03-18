// скрипты для бегунков
$(function () {
    var num1 = $("#num_sum");
    var slider1 = $("<div class= 'col offset-md-1 sll' id= 'ins_here1'><div id = 'slider1'></div></div>").insertAfter("#after1").slider({
        min:1000,
        max:3000000,
        value:num1.value,
        slide: function (event, ui) {
            num1[0].value = ui.value;
        }
    });
    $("#num_sum").on("input",function () {
        slider1.slider("value",this.value);
    });
});


$(function () {
    var num2 = $("#num_popoln");
    var slider2 = $("<div class= 'col offset-md-1 sll' id= 'ins_here2'><div id = 'slider2'></div></div>").insertAfter("#after2").slider({
        min:1000,
        max:3000000,
        value:num2.value,
        slide: function (event, ui) {
            num2[0].value = ui.value;
        }
    });
    $("#num_popoln").on("input",function () {
        slider2.slider("value",this.value);
    });
});

// <!--Скрипт для datapicker-->
$(function () {
    $("#datepick").datepicker({
        dateFormat: 'dd.mm.yy',
    });
});

// Сбор информации из формы и передача в файл, где идет счет
$("form").submit(function (event) {
    event.preventDefault();
    var date_v= $("#datepick");
    var sum_v= $("#num_sum");
    var srok= $("#sr");
    var rad= $(".rad_cl:checked");
    var sum_p_v= $("#num_popoln");


    //Чуть валидации
    if(date_v.val().length==0){
        $("#errorsMessages").text("Введите дату оформления вклада");
        return false;
    }
    else if(sum_v.val() == ""){
        $("#errorsMessages").text("Введите сумму вклада");
        return false;
    }
    else if(sum_p_v.val() == ""){
        $("#errorsMessages").text("Введите сумму пополнения вклада (если ее не будет, просто напишите 1000)");
        return false;
    }
    else $("#errorsMessages").text("");

    $.ajax({
        url:'calc.php',
        type: 'POST',
        cache:false,
        data:{
            'date_v':date_v.val(),
            'sum_v':sum_v.val(),
            'srok': srok.val(),
            'rad':rad.val(),
            'sum_p_v':sum_p_v.val()
        },
        success: function (data) {
            $("#result_num").html("Результат: " + data + " руб.");
        }
    })
});