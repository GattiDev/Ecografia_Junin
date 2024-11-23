<?php 
    include ('../setting/database.php');
    require_once "../models/main_model.php";

    function Good($data) {
        header("Location: ../paciente.php?p=".$data);
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
  
    $user_data = $_POST['user'];
    $pass_data = $_POST['password'];

    $Get_Model = new Get_Model();
    $get_paciente = $Get_Model->Get_loginPatient($user_data, $pass_data);
    
    if(empty($get_paciente)){
        Mistake();
    }else{
        while($getPaciente = mysqli_fetch_assoc($get_paciente)){
            $id = $getPaciente['id'];
            $user = $getPaciente['name'];
            $dni = $getPaciente['dni'];
            if($user_data == $user){
                if($pass_data == $dni){
                    Good($id);
                }else{    
                    Mistake();           
                }                
            }else{
                /*Send_notice();*/              
            }
        } 
    }
?>