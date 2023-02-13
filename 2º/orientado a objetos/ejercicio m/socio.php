<?php
    class socio{   
        private $nombre;
        static $id=0;
        private $numfondos;
        

        public function __construct($nombre,$numfondos){
            $this->nombre=$nombre;
            self::$id+=1;
            $this->numfondos=$numfondos;
        }
        public function getNombreCliente(){
            return $this->nombre;
        }
        public function getIdCliente(){
            return self::$id;
        }
        public function getNumeroFondo(){
            return $this->numfondos;
        }
        public function setAñadirFondo($fondoañadir){
            $this->resultado=$this->numfondos + $this->fondoañadir;
            $this->numfondos= $this->resultado;
            return  $this->numfondos;
        }
        public function setQuitarFondo($fondoquitar){
            $this->resultado=$this->numfondos - $this->fondoquitar;
            $this->numfondos= $this->resultado;
            return  $this->numfondos;
        }
        public function __toString()
        {
            return "el nombre es {$this->nombre} y los fondos que tiene en posesion son {$this->numfondos}";
        }

    }
?>
