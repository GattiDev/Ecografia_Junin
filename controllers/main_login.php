<?php 
    include ('../setting/database.php');
    require_once "../models/main_model.php";

    //function Good_dev() {
        //header("Location: ../dev/dev.php");
    //}

    function Good() {
        header("Location: ../admin/adm.php");
    }

    function Send_notice(){
        $remitente = "GattiDev@gattidev.com";
        $destinatario = "gattidev323@gmail.com";
        $asunto = "Te contactaron en el formulario de tu sitio web";
        $mensaje = "Tienes un mensaje desde el formulario de tu sitio web";
        $headers = "From: $remitente\r\nReply-to: $remitente";

        mail($destinatario, $asunto, $mensaje, $headers);
        header("Location: ../index.php");
    }

    function Mistake(){
        header("Location: ../admin/login.php"); 
    }

    $Get_Model = new Get_Model();
  
    $user_data = $_POST['user'];
    $pass_data = $_POST['password'];


    $get_admin = $Get_Model->Get_Administrator($user_data);
    
    if(empty($get_admin)){
        Mistake();
    }else{
        while($getAdmin = mysqli_fetch_assoc($get_admin)){
            $user = $getAdmin['user'];
            $pass = $getAdmin['password'];
            if($user_data == $user){
                if($pass_data == $pass){
                    Good();
                }else{    
                    Mistake();           
                }                
            }else{
                Send_notice();              
            }
        } 
    }
?>