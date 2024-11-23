<?php
    $host = "localhost";
    //---> Server
    $userSV = "";
    $passwordSV = "";
    $databaseSV = "";
    
    $conexion = mysqli_connect($host, $userSV, $passwordSV, $databaseSV);

    if(!$conexion){
        echo "No se realizo la conexion a la basa de datos, el error fue:".
        mysqli_connect_error() ;

    }
?>