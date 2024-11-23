<?php 
    include ('../../setting/database.php');
    require_once "../models/admin_model.php";

    $nombre = $_POST['name'];
    $apellido = $_POST['subname'];
    $dni = $_POST['dni'];
    
    $put_model = new Put_Model();
    $put_patient = $put_model->Put_patient($nombre, $apellido, $dni);
?>