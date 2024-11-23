<?php 
    include ('../../setting/database.php');
    require_once "../models/admin_model.php";
        
    // Desactivar toda notificación de error
    error_reporting(0); 

    if(isset($_POST['submit'])){ 
            
        // Variable para la Nueva Carpeta
        $paciente_file = $_POST['id_patient'];
        $destino_file = $_POST['id_destino'];
        $fecha = $_POST['fecha'];
        $url = '';
        
        //-->Obtengo el Nombre del Paciente
        $Get_ModelP = new Get_Model();
        $get_paciente = $Get_ModelP->Get_patient($paciente_file);
            
        while($data_paciente = mysqli_fetch_assoc($get_paciente)){ 

            $name_patient = $data_paciente['name'];
            $dni_patient = $data_paciente['dni'];

            //-->Obtengo el Nombre del Destino
            $Get_ModelD = new Get_Model();
            $get_destino = $Get_ModelD->Get_destiny($destino_file);
        
            while($data_destino = mysqli_fetch_assoc($get_destino)){ 
                $name_destiny = $data_destino['destiny'];
            
                $url = $dni_patient . '~' . $name_patient . '/' . $name_destiny . '/' . $fecha;

            }
        }

        // Genero la URL para poder eliminar el contenido del Archivo.
        $url_file = 'Files Patient/' . $url . '/*';
        $files = glob($url_file); //obtenemos todos los nombres de los ficheros
        foreach($files as $file){
            if(is_file($file)){
                unlink($file); //elimino el fichero
            }
        }
        
        // Elimino la Carpeta de la fecha.
        $DateFile = 'Files Patient/' . $url;

        if(rmdir($DateFile)){
            $Get_ModelS = new Get_Model();
            $get_studies = $Get_ModelS->Get_studies($paciente_file, $fecha, $destino_file);
            
            while($data_studies = mysqli_fetch_assoc($get_studies)){ 
                $id_studies = $data_studies['id'];

                //Elimino las img del Paciente
                $Delete_ModelD = new Delete_Model();
                $delete_documento = $Delete_ModelD->Delete_documento($id_studies);
                
                
                if($delete_documento){
                    //Elimino el Studio del Paciente
                    $Delete_ModelS = new Delete_Model();
                    $delete_studies = $Delete_ModelS->Delete_studies($id_studies);
                    if($delete_studies){
                        echo "<script language='JavaScript'>
                            alert('Se Eliminó con Éxito !');
                            location.assign('../adm.php');
                        </script>";  
                    }
                }
            }
        }else{
            echo "<script language='JavaScript'>
                alert('¡ Error ! Al querer eliminar los Archivos. ');
                location.assign('../adm.php');
            </script>";
        }
    }
        
?>