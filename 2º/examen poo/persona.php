<?php
abstract class persona{
    protected $nombre;
    protected $apellidos;
    protected $dni;

    function __construct(){}
    
    function  __toString(){
        return $this->nombre;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getApellidos(){
        return $this->apellidos;
    }

    function getDni(){
        return $this->dni;
    }

    function setNombre($nombre){
        $this->nombre=$nombre;
    }

    function setApellidos($apellidos){
        $this->apellidos=$apellidos;
    }

    function setDni($dni){
        $this->dni=$dni;
    }

    abstract public function getNumHoras();
}


?>