'use strict'

function delete_paciente(id_paciente){ //--> Paciente

    if(id_paciente > 0 && id_paciente != 1){
        
        alertify.confirm('Eliminar Paciente', '¿ Seguro que deseas eliminar este Paciente ?', function(){ 

            $.ajax({
                type:"POST",
                data:"id_paciente=" + id_paciente,
                url:"controllers/del_paciente.php",
                success:function(r){
                    let posicion = r.indexOf("true");
                    if (posicion !== -1){
                        alertify.success("Fue eliminado con exito !");
                        timer();
                    }else{
                        alertify.error("¡ No se pudo eliminar !");
                    }
                }
            });
        }, function(){});
    }
}

function delete_ecografia(id_eco){ //--> Ecografía

    if(id_eco > 0 && id_eco != 1){
        
        alertify.confirm('Eliminar Ecografía', '¿ Seguro que deseas eliminar esta Ecografía ?', function(){ 

            $.ajax({
                type:"POST",
                data:"id_eco=" + id_eco,
                url:"controllers/del_ecografia.php",
                success:function(r){
                    let posicion = r.indexOf("true");
                    if (posicion !== -1){
                        alertify.success("Fue eliminado con exito !");
                        timer();
                    }else{
                        alertify.error("¡ No se pudo eliminar !");
                    }
                }
            });
        }, function(){});
    }
}

function delete_studies(url_archive){ //--> Archivos

    
        
        alertify.confirm('Eliminar Carpeta', '¿ Seguro que deseas eliminar esta Carpeta ?', function(){ 

            $.ajax({
                type:"POST",
                data:"url_archive=" + url_archive,
                url:"controllers/del_archive.php",
                success:function(r){
                    console.log(r)
                    let posicion = r.indexOf("true");
                    if (posicion !== -1){
                        alertify.success("Fue eliminado con exito !");
                       // timer();
                    }else{
                        alertify.error("¡ No se pudo eliminar !");
                    }
                }
            });
        }, function(){});
    
}
