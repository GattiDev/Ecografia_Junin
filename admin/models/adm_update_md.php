<?php
    class Update_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }
    
        public function Update_patient($data1, $data2, $data3, $data4){
            $consult = $this->conexion->query("CALL SP_Update_patient('$data1', '$data2', '$data3', '$data4')");
            return var_dump($consult);
        }
        
        public function Update_destiny($data1, $data2){
            $consult = $this->conexion->query("CALL SP_Update_destiny('$data1', '$data2')");
            return var_dump($consult);
        }

        public function Update_text($data1, $data2, $data3, $data4, $data5){
            $consult = $this->conexion->query("CALL SP_Update_text('$data1', '$data2', '$data3', '$data4', '$data5')");
            return var_dump($consult);
        }
    }
?>

