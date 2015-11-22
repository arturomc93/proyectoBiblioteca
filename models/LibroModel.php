<?php
	namespace models;
	use libs\DBConexion;

	class LibroModel
	{
		public $codigo;
		public $titulo_edicion;
		public $ISBN;
		public $autor;
		public $genero;
		public $descripcion;
		public $año_publicacion;
		public $editorial;
		public $fecha_publicacion;
		public $ciudad_publicacion;
		public $cantidad_ejemplares;
		public $cantidad_ejemplares_prestados;
		public $numero_de_paginas;

		public function __construct()
		{

		}

		public function crearLibro($codigo, $titulo_edicion, $ISBN, $autor, $genero, $descripcion, $año_publicacion, $editorial, $fecha_publicacion, $ciudad_publicacion, $cantidad_ejemplares, $cantidad_ejemplares_prestados, $numero_de_paginas)
		{
			$this->codigo = $codigo;
			$this->titulo_edicion = $titulo_edicion;
			$this->ISBN = $ISBN;
			$this->autor = $autor;
			$this->genero = $genero;
			$this->descripcion = $descripcion;
			$this->año_publicacion = $año_publicacion;
			$this->editorial = $editorial;
			$this->fecha_publicacion = $fecha_publicacion;
			$this->ciudad_publicacion = $ciudad_publicacion;
			$this->cantidad_ejemplares = $cantidad_ejemplares;
			$this->cantidad_ejemplares_prestados = $cantidad_ejemplares_prestados;
			$this->numero_de_paginas = $numero_de_paginas;

			$this->guardar();
		}

		public function guardar()
		{
			$con = DBConexion::getInstance();
			$params = array(
			$this->codigo = $codigo,
			$this->titulo_edicion = $titulo_edicion,
			$this->ISBN = $ISBN,
			$this->autor = $autor,
			$this->genero = $genero,
			$this->descripcion = $descripcion,
			$this->año_publicacion = $año_publicacion,
			$this->editorial = $editorial,
			$this->fecha_publicacion = $fecha_publicacion,
			$this->ciudad_publicacion = $ciudad_publicacion,
			$this->cantidad_ejemplares = $cantidad_ejemplares,
			$this->cantidad_ejemplares_prestados = $cantidad_ejemplares_prestados,
			$this->numero_de_paginas = $numero_de_paginas			
			);

			$sql = vsprintf("INSERT INTO Libros values('%s', '%s', '%s', '%s', '%s');", $params);

			$con->executeUpdate(array($sql));
		}

		public function listarLibros()
		{
			$con = DBConexion::getInstance();
			if (is_null($con)) 
			{
				throw new Exception("Error en la conexión de la base de datos", 1);			
			}
			$libros = $con->executeQuery('SELECT * FROM Libros;', null, __NAMESPACE__.'\LibroModel');

			return $libros;
		}

	}

