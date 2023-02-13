<?php
class modulo{
    private $nombre;
    private $numhoras;
    private $curso;

    function __contruct(){
    }
    
    function  __toString(){
        return $this->nombre;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getNumHoras(){
        return $this->numhoras;
    }

    function getCurso(){
        return $this->curso;
    }

    function setNombre($nombre){
        $this->nombre=$nombre;
    }

    function setNumHoras($numhoras){
        $this->numhoras=$numhoras;
    }

    function setCurso($curso){
        $this->curso=$curso;
    }

}



?>