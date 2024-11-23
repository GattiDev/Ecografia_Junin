<?php 	
    include ('../../setting/database.php');
    require_once "../models/admin_model.php";
    
    $id_eco = $_POST['id_eco'];
    
    $Delete_Model = new Delete_Model();
    $del_destiny = $Delete_Model->Delete_destiny($id_eco);
?>