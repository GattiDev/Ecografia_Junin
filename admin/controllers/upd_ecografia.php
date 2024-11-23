<?php 
    include ('../../setting/database.php');
    require_once "../models/admin_model.php";
    
    $id = $_POST['upId'];
    $ecografia = $_POST['up_eco'];

    $Update_Model = new Update_Model();
           
    if($ecografia != ''){
        $update_destiny = $Update_Model->Update_destiny($id, $ecografia);
        return var_dump('true');

    }else{
        return var_dump('Error');
    }
?>