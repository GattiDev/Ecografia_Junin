'use strict'
//#####################################################################################################//
            //#############################---> PUT <---#############################//
//#####################################################################################################//
$(document).ready(function(){
    
    var data_add = ""; 
    
    //-----> Paciente
    $('#btn_paciente_add').click(function(){
        
        data_add=$('#frm_paciente').serialize();

        $.ajax({
            type:"POST",
            data:data_add,
            url:"controllers/add_paciente.php",
            success:function(r){
                let posicion = r.indexOf("true");
                if (posicion !== -1){
                    $('#frm_paciente')[0].reset();
                    alertify.success("¡ Se agregó a la tabla con éxito. !");		
                    timer();			
                }else{
                    alertify.error("¡ Admin duplicado o Valor incorrecto. !");
                }
            }
        }); 
    });

    //-----> Ecografía
    $('#btn_ecografia_add').click(function(){
        
        data_add=$('#frm_ecografia').serialize();

        $.ajax({
            type:"POST",
            data:data_add,
            url:"controllers/add_ecografia.php",
            success:function(r){
                let posicion = r.indexOf("true");
                if (posicion !== -1){
                    $('#frm_ecografia')[0].reset();
                    alertify.success("¡ Se agregó a la tabla con éxito. !");		
                    timer();			
                }else{
                    alertify.error("¡ Admin duplicado o Valor incorrecto. !");
                }
            }
        }); 
    });
});



