<?php
class profesor extends persona{

    private $especialidad;
    private $modulos=array();

    function __contruct(){
    }
    
    public function getEspecialidad(){
        return $this->especialidad;
    }

    public function setEspecialidad($especialidad){
        $this->especialidad=$especialidad;
    }

    public function setAñadirModulo($modulo){
        $this->modulos[]=$modulo;
        return $this->modulos;
    }

    public function getVerModulos(){
        print_r($this->modulos);
    }

    public function getNumHoras(){
    }

   

}



?>