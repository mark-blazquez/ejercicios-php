<?php
    class peliculas extends fondo{
        protected $fechaentregamaxima;
        private $director;
        public function setAñadirDirector($director){
            $this->director=$director;
        }
        public function getConsultarDirector(){
            return $this->director;
        }
        public function getTiempoPrestamo(){
            return $this->fechaentregamaxima=date("d-m-Y",strtotime($this->tiempo."+ 7 days"));
        }
    }
?>