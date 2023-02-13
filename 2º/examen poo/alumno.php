<?php
class alumno extends persona{
    
    static  $id_alumn=0;
    private $modulos=array();

    function setId(){
        self::$id_alumn+=1;
    }

    function getId(){
        return self::$id_alumn+=1;
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