<?php
    class biblioteca{
        private $nombrebiblioteca;
        private $numerofondos;
        private $arraycliente=array();
        private $arrayfondo=array();  

        public function __construct($nombrebiblioteca,$numerofondos){
            $this->nombrebiblioteca=$nombrebiblioteca;
            $this->numerofondos=$numerofondos;
        }
        public function getNombreSitio(){
            return $this->nombrebiblioteca;
        }
        public function getNumeroFondos(){
            return $this->numerofondos;
        }
        public function setAñadirCliente($socio){
           $this->arraycliente[]=$socio;
           return $this->arraycliente;
           
        }
        public function getVerClientes(){
            print_r($this->arraycliente);
        }
        public function setAñadirFondo($fondo){
            $this->arrayfondo[]=$fondo;
            return $this->arrayfondo;
            
        }
        public function getVerFondos(){
            print_r($this->arrayfondo);
        }
        public function __toString()
        {
            return "el nombre es {$this->nombrebiblioteca} y los fondos que tiene son {$this->numerofondos}";
        }

    }

?>