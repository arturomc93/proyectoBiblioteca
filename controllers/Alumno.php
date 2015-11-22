<?php
	namespace controllers;	
	use libs\Controller;

	class Alumno extends Controller 
	{
		public function __construct()
		{
			parent::__construct();
		} 

		public function listarAlumnos()
		{
			$alumnos = $this->model->listarAlumnos();
			$this->view->render(explode("\\", get_class($this))[1], "listar", $alumnos, $this->get_errores);
		}

		public function crear($params=array())
		{
			if(isset($params['ncontrol']) && isset($params['nombre']) && isset($params['grado']) && isset($params['carrera']) && isset($params['telefono']))
			{
				$this->crearAlumno($params);
			}
			$this->view->render(explode("\\",get_class($this))[1], "crear",$this->getErrores());
		}

		public function crearAlumno($params)
		{
			$ncontrol = $params['ncontrol'];
			$nombre = $params['nombre'];
			$grado = $params['grado'];
			$carrera = $params['carrera'];
			$telefono = $params['telefono'];


			if(count($this->errores)==0)
			{
				try
				{
					$this->model->crearAlumno($ncontrol, $nombre, $grado, $carrera, $telefono);
				}
				catch(\Exception $e)
				{
					$this->errores['global']=$e->getMessage();
				}
			}
		}

		
	}