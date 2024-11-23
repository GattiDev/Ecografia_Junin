<?php 	
    include ('../../setting/database.php');
    require_once "../models/admin_model.php";
    
    $id_paciente = $_POST['id_paciente'];
    
    $Delete_Model = new Delete_Model();
    $del_patient = $Delete_Model->Delete_patient($id_paciente);
?>