<?php
	namespace controllers;	
	use libs\Controller;

	class Libro extends Controller 
	{
		public function __construct()
		{
			parent::__construct();
		} 

		public function listarlibro()
		{
			$libros = $this->model->listarLibros();
			$this->view->render(explode("\\", get_class($this))[1], "listar", $libros, $this->get_errores);
		}

		public function crear($params=array())
		{
			if(isset($params['codigo']) && isset($params['titulo_edicion']) && isset($params['ISBN']) && isset($params['autor']) && isset($params['genero']) && isset($params['descripcion']) && isset($params['año_publicacion']) && isset($params['editorial']) && isset($params['fecha_publicacion']) && isset($params['ciudad_publicacion']) && isset($params['cantidad_ejemplares']) && isset($params['cantidad_ejemplares_prestados']) && isset($params['numero_de_paginas']))
			{
				$this->crearLibro($params);
			}
			$this->view->render(explode("\\",get_class($this))[1], "crear",$this->getErrores());
		}

		public function crearLibro($params)
		{
			$codigo = $params['codigo'];
			$titulo_edicion = $params['titulo_edicion'];
			$ISBN = $params['ISBN'];
			$autor = $params['autor'];
			$genero = $params['genero'];
			$descripcion = $params['descripcion'];
			$año_publicacion = $params['año_publicacion'];
			$editorial = $params['editorial'];
			$fecha_publicacion = $params['fecha_publicacion'];
			$ciudad_publicacion = $params['ciudad_publicacion'];
			$cantidad_ejemplares = $params['cantidad_ejemplares'];
			$cantidad_ejemplares_prestados = $params['cantidad_ejemplares_prestados'];
			$numero_de_paginas = $params['numero_de_paginas'];

			if(count($this->errores)==0)
			{
				try
				{
					$this->model->crearLibro($codigo, $titulo_edicion, $ISBN, $autor, $genero, $descripcion, $año_publicacion, $editorial, $fecha_publicacion, $ciudad_publicacion, $cantidad_ejemplares, $cantidad_ejemplares_prestados, $numero_de_paginas);
				} 
				catch(\Exception $e)
				{
					$this->errores['global']=$e->getMessage();
				}
			}
		}
	}