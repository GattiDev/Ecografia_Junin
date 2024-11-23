<?php
    class Delete_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }
    
        public function Delete_patient($data1){
            $consult = $this->conexion->query("CALL SP_Delete_patient('$data1')");
            return var_dump($consult);
        }

        public function Delete_documento($data1){
            $consult = $this->conexion->query("CALL SP_Delete_documento('$data1')");
            return $consult;
        }

        public function Delete_destiny($data1){
            $consult = $this->conexion->query("CALL SP_Delete_destiny('$data1')");
            return var_dump($consult);
        }

        public function Delete_studies($data1){
            $consult = $this->conexion->query("CALL SP_Delete_studies('$data1')");
            return $consult;
        }
    }
?>

