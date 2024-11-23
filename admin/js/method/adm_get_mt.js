'use strict'
function get_paciente(Data){
    if(Data){
        mostrar('#modal_pacienteUP');
    }
    $('#up_id').val(Data[0]);
    $('#up_name').val(Data[1]);
    $('#up_subname').val(Data[2]);
    $('#up_dni').val(Data[3]);
}

function get_ecografia(Data){
    if(Data){
        mostrar('#modal_ecografiaUP');
    }
    $('#upId').val(Data[0]);
    $('#up_eco').val(Data[1]);
}