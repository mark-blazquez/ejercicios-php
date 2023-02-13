<?php
class cookie{
	// Declaración de una propiedad
	private $name="nombre";
	private $value="informacion de cookie";
	private $expire="0";
	private $path;
	private $domain;
	private $secure;
	private $httponly;

	
	function __construct(){}
	
	
	
	// Declaración de un método
	public function setName($name)/*cambiar name */
	{
        $this->name=$name;
    }
	public function getName()/*consultar name*/
	{
        return $this->name;
    }


    public function setValue($value)
    {
        $this->value=$value;
    }
    public function getValue()
    {
        return $this->value;
    }


    public function setExpire($expire)
    {
        $this->expire=$expire;
    }
    public function getExpire()
    {
        return $this->expire;
    }

	/*
    public function setPath()
    {
        $this->path=$path;
    }
    public function getPath()
    {
        return $this->path;
    }


    public function setDomain()
    {
        $this->domain=$domain;
    }
    public function getDomain()
    {
        return $this->domain;
    }


    public function setSecure()
    {
        $this->secure=$secure;
    }
    public function getSecure()
    {
        return $this->secure;
    }


    public function setHttponly()
    {
        $this->httponly=$httponly;
    }
    public function getHttponly()
    {
        return $this->httponly;
    }*/

}

?>