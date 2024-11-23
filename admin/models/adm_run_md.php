<?php
    class Run_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }
    
        public function Run_patient(){
            $consult = $this->conexion->query("CALL SP_Run_patient()");
            return $consult;
        }
        
        public function Run_studiesPatient(){
            $consult = $this->conexion->query("CALL SP_Run_studiesPatient");
            return $consult;
        }

        public function Run_destiny(){
            $consult = $this->conexion->query("CALL SP_Run_destiny()");
            return $consult;
        }

        public function Run_studies(){
            $consult = $this->conexion->query("CALL SP_Run_studies()");
            return $consult;
        }
    }
?>
 
