<?php
	namespace models;
	use libs\DBConexion;

	class SolicitudModel
	{
		public $ncontrol;
		public $nombre;
		public $titulo_edicion;
		public $cantidad_ejemplares_prestados;
		public $fecha_entrega;
		public $descripcion;

		public function __construct()
		{

		}

		public function crearSolicitud($ncontrol, $nombre, $titulo_edicion, $cantidad_ejemplares_prestados, $descripcion)
		{
			$this->ncontrol = $ncontrol;
			$this->nombre = $nombre;
			$this->titulo_edicion = $titulo_edicion;
			$this->cantidad_ejemplares_prestados = $cantidad_ejemplares_prestados;
			$this->descripcion = $descripcion;

			$this->guardar();
		}

		public function guardar()
		{
			$con = DBConexion::getInstance();
			$params = array(
				$this->ncontrol = $ncontrol,
				$this->nombre = $nombre,
				$this->titulo_edicion = $titulo_edicion,
				$this->cantidad_ejemplares_prestados = $cantidad_ejemplares_prestados,
				$this->descripcion = $descripcion
				);

			$sql = vsprintf("INSERT INTO Prestamo values('%s', '%s', '%s', '%s', '%s');", $params);

			$con->executeUpdate(array($sql));
		}

		public function listarSolicitud()
		{
			$con = DBConexion::getInstance();
			if (is_null($con)) 
			{
				throw new Exception("Error en la conexión de la base de datos", 1);			
			}
			$solicitudes = $con->executeQuery('SELECT * FROM Prestamo;', null, __NAMESPACE__.'\SolicitudModel');

			return $solicitudes;
		}

	}

