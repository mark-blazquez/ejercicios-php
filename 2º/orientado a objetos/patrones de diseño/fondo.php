<?php

    abstract class fondo{
        protected $nombre;
        protected $tiempo;
        protected $genero;

        public function __construct($nombre,$genero){
            $this->nombre=$nombre;
            $this->tiempo=date("d-m-Y");
            $this->genero=$genero;
        }
        public function getDimeNombre(){
            return $this->nombre;
        }
        public function getDimeTiempo(){
            return $this->tiempo;
        }
        public function getDimeGenero(){
            return $this->genero;
        }
        public function __toString()
        {
            return "el nombre es {$this->nombre} fecha de alquiler {$this->tiempo} y su genero {$this->genero}";
        }
        abstract public function getTiempoPrestamo();
    }
?>