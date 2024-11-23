'use strict'

$(document).ready(function(){
    var datos_edit = "";

    //-----> Paciente 
    $('#btn_Up_paciente').click(function(){
	    datos_edit=$('#frm_UPpaciente').serialize();
	    $.ajax({
		    type:"POST",
		    data:datos_edit,
		    url:"controllers/upd_paciente.php",
		    success:function(r){
                
                let posicion = r.indexOf("true");
                if (posicion !== -1){
                    $('#frm_UPpaciente')[0].reset();
                    alertify.success("¡ Se actualizo correctamente. !");	
                    timer();				
                }

                //---> Error
                let erro_fecha = r.indexOf("Error");
                if (erro_fecha !== -1){
                    alertify.error("¡ Datos incorrectos. !");
                }
            }
        });
    });

    //-----> Ecografía 
    $('#btn_Up_ecografia').click(function(){
        datos_edit=$('#frm_UPecografia').serialize();
        $.ajax({
            type:"POST",
            data:datos_edit,
            url:"controllers/upd_ecografia.php",
            success:function(r){
                
                let posicion = r.indexOf("true");
                if (posicion !== -1){
                    $('#frm_UPecografia')[0].reset();
                    alertify.success("¡ Se actualizo correctamente. !");	
                    timer();				
                }

                //---> Error
                let erro_fecha = r.indexOf("Error");
                if (erro_fecha !== -1){
                    alertify.error("¡ Datos incorrectos. !");
                }
            }
        });
    });
});