<?php
class Persona{

    private $nombre;

    public function __construct( $nombre ){
        $this->name = $nombre;
    }

    public function __toString(){
        return $this->name;
    }
}


class operacion {
    private $valor;

    public function __construct($valor){
        $this->num=$valor; 
    }

    /*public function __toString(){
        return $this->num;
    }*/

    public function imprimir($num){
        echo $this->num;
    }
    
    public function Suma($valor1,$valor2){
        $this->resultado=$this->valor1+$this->valor2;
        return $this->resultado;
        
    }
}


?>