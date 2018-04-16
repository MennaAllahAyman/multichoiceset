/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var button = Y.one("#id_MinusModule");


Y.on("load", function () {
    $("#id_num_of_wrong_answers").parent().parent().hide();
    $("#id_minus_marks").parent().parent().hide();
    if($("#id_num_of_wrong_answers").val()!= 0){
        button.hide();
        $("#id_num_of_wrong_answers").parent().parent().show();
        $("#id_minus_marks").parent().parent().show();
    }
}, Y.config.win);

button.on("click", function () { 
    $("#id_num_of_wrong_answers").parent().parent().show();
    $("#id_minus_marks").parent().parent().show();
})

