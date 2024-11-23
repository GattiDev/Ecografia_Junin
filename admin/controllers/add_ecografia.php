<?php 
    include ('../../setting/database.php');
    require_once "../models/admin_model.php";

    $ecografia = $_POST['eco'];
    

    $put_model = new Put_Model();
    $put_destiny = $put_model->Put_destiny($ecografia);

?>