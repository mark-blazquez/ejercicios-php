<?php
	class Libro{
		private $id;
		private $titulo;
		private $autor;


		function __construct(){}

		public function getTitulo(){
			return $this->titulo;
		}

		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		public function getAutor(){
			return $this->autor;
		}

		public function setAutor($autor){
			$this->autor = $autor;
		}

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}
?>