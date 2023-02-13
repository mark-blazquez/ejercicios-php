<?php
// incluye la clase Db
require_once('conexion.php');

	class CrudLibro{
		// constructor de la clase
		public function __construct(){}

		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($libro){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO libros(titulo,autor) values(:titulo,:autor)');
			$insert->bindValue('titulo',$libro->getTitulo());
			$insert->bindValue('autor',$libro->getAutor());
            $insert->execute();
            echo"el libro se ha insertado";

		}

		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM libros');

			foreach($select->fetchAll() as $libro){
				$myLibro= new Libro();
				$myLibro->setId($libro['id']);
				$myLibro->setTitulo($libro['titulo']);
				$myLibro->setAutor($libro['autor']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}

		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($libro){
			$id=$_POST["id"];
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM libros WHERE id=:id');
			$eliminar->bindValue('id',$id);
            $eliminar->execute();
            echo"el libro ha sido eliminado";
		}

		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($libro){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE libros SET titulo=:titulo, autor=:autor  WHERE ID=:id');
			$actualizar->bindValue('id',$libro->getId());
			$actualizar->bindValue('titulo',$libro->getTitulo());
			$actualizar->bindValue('autor',$libro->getAutor());
			$actualizar->execute();
		}
	}
?>