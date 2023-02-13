<?php

class Hucha{
    private $dinero;
    static  $numhuchas=0;
    public function __construct($dinerico){
        $this->dinero=$dinerico;
        self::$numhuchas+=1;
    }
    public function verDinero($hucha){
        echo $this->dinero;
    }
    public function contarHuchas(){
        echo self::$numhuchas;
    }
    public function meterDinero($dinero,$dineronuevo){
        $this->resultado = $this->dinero + $dineronuevo;
        $this->dinero=$this->resultado;
        return $this->dinero;
    }
    public function sacarDinero($dinero,$dineronuevo){
        $this->resultado = $this->dinero - $dineronuevo ;
        $this->dinero=$this->resultado;
        return $this->dinero;
    }
    
}

?>