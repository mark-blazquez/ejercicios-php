<?php
    #decorator pattern
    class decorator{
        protected $fondoobjeto;

        public function __construct(fondo $fondoobjeto){
            $this->fondoobjeto = $fondoobjeto;
        }

        public function getDatos(){
            return $this->fondoobjeto->getDimeTiempo()." ".$this->fondoobjeto->getDimeNombre();
        }

    }
    #adapter pattern 
    class adapter{
        
        public function getObtenerNombre(){
            if($this->nombre=="furia de titanes"){
                return "$this->nombre es la mejor pelicula del mundo" ;
            }else {
                return "$this->nombre no es tan buena como dicen" ;
            }
        }
    }
?>