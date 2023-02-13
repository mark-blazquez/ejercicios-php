<?php   
    class cds extends fondo{
        protected $fechaentregamaxima;
        private $duracion;
        public function setAñadirDuracion($duracion){
            $this->duracion=$duracion;
        }
        public function getConsultarDuracion(){
            return $this->duracion;
        }
        public function getTiempoPrestamo(){
            return $this->fechaentregamaxima=date("d-m-Y",strtotime($this->tiempo."+ 15 days"));
        }
    }
?>