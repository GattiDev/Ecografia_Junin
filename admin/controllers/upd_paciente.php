<?php 
    include ('../../setting/database.php');
    require_once "../models/admin_model.php";
    
    $id = $_POST['up_id'];
    $nombre = $_POST['up_name'];
    $apellido = $_POST['up_subname'];
    $dni = $_POST['up_dni'];

    $Update_Model = new Update_Model();
           
    if($nombre != '' || $apellido != '' || $dni != ''){
        $update_patient = $Update_Model->Update_patient($id, $nombre, $apellido, $dni);
        return var_dump('true');

    }else{
        return var_dump('Error');
    }
?>