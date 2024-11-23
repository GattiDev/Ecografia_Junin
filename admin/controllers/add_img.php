<style type="text/css">
    body{ text-align: center; background-color: #323232; }

    .h1{ letter-spacing: 2px; color: green; }

    .Error{ letter-spacing: 2px; color: red; }

    .p{ font-size: 18px; font-weight: bold; letter-spacing: 3px; color: #fff; }

    .a{ font-size: 20px; font-weight: bold; text-decoration: none; letter-spacing: 3px; color: #fff; }

    .a:hover{ font-size: 20px; letter-spacing: 4px; color: #fff; }
</style>
<?php 
    include ('../../setting/database.php');
    include ('../../setting/cnx_img.php');
    require_once "../models/admin_model.php";
        
//----------------------------------------------------------->     
//----------------------------->  
    
    if(isset($_POST['submit'])){ 
        // Variable para la Nueva Carpeta
        $paciente_file = $_POST['id_patient'];
        $destino_file = $_POST['id_destino'];
        $fecha = $_POST['fecha'];

        $name_patient = '';
        $dni_patient = '';
        $name_destiny = '';
        $id = '';
        $insertValuesSQL = '';
        
        $titleCorrecto = '';
        $textCorrecto = '';
        $titleError = '';
        $textError = '';


        //-->Obtengo el Nombre del Paciente
        $Get_ModelP = new Get_Model();
        $get_paciente = $Get_ModelP->Get_patient($paciente_file);
        
        while($data_paciente = mysqli_fetch_assoc($get_paciente)){ 
            $name_patient = $data_paciente['name'];
            $dni_patient = $data_paciente['dni'];
        }

        //-->Obtengo el Nombre del Destino
        $Get_ModelD = new Get_Model();
        $get_destino = $Get_ModelD->Get_destiny($destino_file);
        
        while($data_destino = mysqli_fetch_assoc($get_destino)){ 
            $name_destiny = $data_destino['destiny'];
        }

        //--> Obtengo el Id
        $Get_ModelS = new Get_Model();
        $get_studios = $Get_ModelS->Get_studies($paciente_file, $fecha, $destino_file);
        
        while($data_studios = mysqli_fetch_assoc($get_studios)){ 
            $id = $data_studios['id'];                                             
        }
///////////////////////////////////////////////////////////////////////--> 2. Agrego la Imagen 
        // Configuración de carga de archivos
        $targetDir = '../Informes Médicos/' . $dni_patient . '~' . $name_patient . '/'. $name_destiny . '/'. $fecha . '/'; 
               
        $allowTypes = array('jpg','png','jpeg','gif'); 
        $fileNames = array_filter($_FILES['files']['name']); 
       
        if(!empty($fileNames)){ 
            foreach($_FILES['files']['name'] as $key=>$val){ 
            
                // Ruta de carga de archivos 
                $fileName = basename($_FILES['files']['name'][$key]); 
                $targetFilePath = $targetDir . $fileName; 
             
                // Compruebe si el tipo de archivo es válido
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                
                if(in_array($fileType, $allowTypes)){ 
                    // Subir archivo al servidor 
                    if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                        // Imagen db insertar sql
                        $insertValuesSQL .= "('".$id."','".$fileName."'),"; 
                    } 
                }else{ 
                    $titleError = '¡ Extensión de archivo Incorrecto !';
                    $textError = 'Extensión permitido son: .jpg  .png  .jpeg  .gif.';                
                } 
            } 
         
            if(!empty($insertValuesSQL)){ 
                $insertValuesSQL = trim($insertValuesSQL, ','); 
                // Insertar el nombre del archivo de imagen en la base de datos 
                $insert = $db->query("INSERT INTO gallery (id_studies, name_image) VALUES $insertValuesSQL"); 
                
                if(!empty($insert)){ 
                    $titleCorrecto = 'Felicitaciones';
                    $textCorrecto = 'Los archivos se cargaron exitosamente.';
                }else{ 
                    $titleError = '¡ Error !';
                    $textError = 'Lo sentimos, hubo un error al cargar su archivo.';              
                } 
            } 
        }
        ///////////////////////////////////////////////////////////////////////-- 3. Muestro los Mensajes --> 
    if($titleCorrecto != ''){
        echo "<h1 class= 'h1'>".$titleCorrecto."</h1>";
        echo "<p class= 'p'>".$textCorrecto."</p>";
        echo "<a class= 'a' href='../adm.php'>Volver al Inicio.</a>";
    }else{
        echo "<h1 class= 'Error'>".$titleError."</h1>";
        echo "<p class= 'p'>".$textError."</p>";
        echo "<a class= 'a' href='../adm.php'>Volver al Inicio.</a>";
    }
    }
    
?>
