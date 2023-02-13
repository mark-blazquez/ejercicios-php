<?php   
    class libros extends fondo{
        protected $fechaentregamaxima;
        private $autor;
        public function setAñadirAutor($autor){
            $this->autor=$autor;
        }
        public function getConsultarAutor(){
            return $this->autor;
        }
        public function getTiempoPrestamo(){
            return $this->fechaentregamaxima=date("d-m-Y",strtotime($this->tiempo."+ 30 days"));
        }
    }
?>