<?php
    class Put_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }       
        
        public function Put_patient($data1, $data2, $data3){
       
            $consult = $this->conexion->query("CALL SP_Put_patient('$data1', '$data2', '$data3')");
            return var_dump($consult);
        }

        public function Put_destiny($data1){
       
            $consult = $this->conexion->query("CALL SP_Put_destiny('$data1')");
            return var_dump($consult);
        }

        public function Put_studies($data1, $data2, $data3){
            $consult = $this->conexion->query("CALL SP_Put_studies('$data1', '$data2', '$data3')");
            return $consult;
        }
    }
?>