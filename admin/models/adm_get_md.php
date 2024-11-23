<?php
    class Get_Model{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

        public function Get_Image($data1, $data2){
            $consult = $this->conexion->query("CALL SP_Get_Image('$data1', '$data2')");
            return $consult;
        }

        public function Get_patient($data1){
            $consult = $this->conexion->query("CALL SP_Get_patient('$data1')");
            return $consult;
        }

        public function Get_destiny($data1){
            $consult = $this->conexion->query("CALL SP_Get_destiny('$data1')");
            return $consult;
        }

        public function Get_studies($data1, $data2, $data3){
            $consult = $this->conexion->query("CALL SP_Get_studies('$data1', '$data2', '$data3')");
            return $consult;
        }

        public function Get_IdStudies($data1){
            $consult = $this->conexion->query("CALL SP_Get_IdStudies('$data1')");
            return $consult;
        }

        /*public function Get_studieDestino($data1){
            $consult = $this->conexion->query("CALL SP_Get_studieDestino('$data1')");
            return $consult;
        }*/
        
        public function Get_studieDestino($data1, $data2){
            $consult = $this->conexion->query("CALL SP_Get_studieDestino('$data1', '$data2')");
            return $consult;
        }

        public function Get_DataStudie($data1, $data2, $data3){
            $consult = $this->conexion->query("CALL SP_GetstudieDestino('$data1', '$data2', '$data3')");
            return $consult;
        }

        /*public function Get_gallery($data1){
            $consult = $this->conexion->query("CALL SP_Get_gallery('$data1')");
            return $consult;
        }*/

        public function Get_studieData($data1,  $data2, $data3){
            $consult = $this->conexion->query("CALL SP_Get_studieData('$data1', '$data2', '$data3')");
            return $consult;

        }

        public function Get_documentoIdStu($data1){
            $consult = $this->conexion->query("CALL SP_Get_documentoIdStu('$data1')");
            return $consult;

        }

        /*Nuevos */
        public function Get_Pacientes($data1){
            $consult = $this->conexion->query("CALL SP_Get_Pacientes('$data1')"); 
            //CREATE PROCEDURE SP_Get_Pacientes(data1 varchar(150))
            //SELECT * FROM `patient` WHERE `name` LIKE data1
            
            return $consult;
        }

        public function Get_studiesPatient($data1){
            $consult = $this->conexion->query("CALL SP_Get_studiesPatient('$data1')"); 
            //CREATE PROCEDURE SP_Get_studiesPatient(data1 int)
            //SELECT DISTINCT(`id_patient`) FROM `studies` WHERE `id_patient` = data1
            return $consult;
        }
        
    }
?>