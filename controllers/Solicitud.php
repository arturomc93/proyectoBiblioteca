<?php
	namespace controllers;	
	use libs\Controller;

	class Solicitud extends Controller 
	{
		public function __construct()
		{
			parent::__construct();
		} 

		public function listarSolicitud()
		{
			$solicitud = $this->model->listarSolicitud();
			$this->view->render(explode("\\", get_class($this))[1], "listar", $solicitud, $this->get_errores);
		}

		public function crear($params=array())
		{
			if(isset($params['ncontrol']) && isset($params['nombre']) && isset($params['titulo_edicion']) && isset($params['cantidad_ejemplares']) && isset($params['fecha_entrega']) && isset($params['descripcion']))
			{
				$this->crearSolicitud($params);
			}
			$this->view->render(explode("\\",get_class($this))[1], "Crear",$this->getErrores());
		}

		public function crearSolicitud($params)
		{
			$ncontrol = $params['ncontrol'];
			$nombre = $params['nombre'];
			$titulo_edicion = $params['titulo_edicion'];
			$cantidad_ejemplares = $params['cantidad_ejemplares'];
			$fecha_entrega = $params['fecha_entrega'];
			$descripcion = $params['descripcion'];


			if(count($this->errores)==0)
			{
				try
				{
					$this->model->crearSolicitud($ncontrol, $nombre, $titulo_edicion, $cantidad_ejemplares, $fecha_entrega, $descripcion);
				}
				catch(\Exception $e)
				{
					$this->errores['global']=$e->getMessage();
				}
			}
		}

		public function guardar()
		{
			$ncontrol = $params['ncontrol'];
			$nombre = $params['nombre'];
			$titulo_edicion = $params['titulo_edicion'];
			$cantidad_ejemplares = $params['cantidad_ejemplares'];
			$fecha_entrega = $params['fecha_entrega'];
			$descripcion = $params['descripcion'];


			if(count($this->errores)==0)
			{
				try
				{
					$this->model->guardar($ncontrol, $nombre, $titulo_edicion, $cantidad_ejemplares, $fecha_entrega, $descripcion);
				}
				catch(\Exception $e)
				{
					$this->errores['global']=$e->getMessage();
				}
			}
		}
	}
?>