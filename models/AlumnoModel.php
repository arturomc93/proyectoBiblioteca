<?php
	namespace models;
	use libs\DBConexion;

	class AlumnoModel
	{
		public $ncontrol;
		public $nombre;
		public $grado;
		public $carrera;
		public $telefono;

		public function __construct()
		{

		}

		public function crearAlumno($ncontrol, $nombre, $grado, $carrera, $telefono)
		{
			$this->ncontrol = $ncontrol;
			$this->nombre = $nombre;
			$this->grado = $grado;
			$this->carrera = $carrera;
			$this->telefono = $telefono;

			$this->guardar();
		}

		public function guardar()
		{
			$con = DBConexion::getInstance();
			$params = array(
				$this->ncontrol,
				$this->nombre,
				$this->grado,
				$this->carrera,
				$this->telefono
				);

			$sql = vsprintf("INSERT INTO Alumnos values('%s', '%s', '%s', '%s', '%s');", $params);

			$con->executeUpdate(array($sql));
		}

		public function listarAlumnos()
		{
			$con = DBConexion::getInstance();
			if (is_null($con)) 
			{
				throw new Exception("Error en la conexión de la base de datos", 1);			
			}
			$alumnos = $con->executeQuery('SELECT * FROM Alumnos;', null, __NAMESPACE__.'\AlumnoModel');

			return $alumnos;
		}

	}

