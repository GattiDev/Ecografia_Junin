<?php
    class Get_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }
    
        public function Get_setting($data1){
            $consult = $this->conexion->query("CALL SP_Get_Setting('$data1')");
            return $consult;
        }

        public function Get_Image($data1, $data2){
            $consult = $this->conexion->query("CALL SP_Get_Image('$data1', '$data2')");
            return $consult;
        }
    }
?>
