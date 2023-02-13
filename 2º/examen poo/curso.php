<?php
class curso{
    private $nombre;
    private $aula;
    private $tutor;

    function __contruct(){
    }
    
    function  __toString(){
        return $this->nombre;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getAula(){
        return $this->aula;
    }

    function getTutor(){
        return $this->tutor;
    }
    
    function setNombre($nombre){
        $this->nombre=$nombre;
    }

    function setAula($aula){
        $this->aula=$aula;
    }

    function setTutor($profesor){
        $this->tutor=$profesor;
    }

}