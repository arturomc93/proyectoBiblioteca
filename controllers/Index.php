<?php
	namespace controllers;
	use libs\Controller;

	class Index extends Controller
	{	
 		public function __construct()
 		{
			parent::__construct();
			//$this->loadModel();
		}

		public function index()
		{
			//Renderizando la vista asociada
			$a = explode("\\",get_class($this))[1];
			//echo $a;
			$this->errores[0] = "Pepito no vino a la escuela";
			$this->view->render($a, "index",null, $this->getErrores());

		}

		public function menu()
		{
			//Renderizando la vista asociada
			$a = explode("\\",get_class($this))[1];
			//echo $a;
			$this->errores[0] = "Pepito no vino a la escuela";
			$this->view->render($a, "menu",null, $this->getErrores());

		}

		public function librosNuevos()
		{
			//Renderizando la vista asociada
			$a = explode("\\",get_class($this))[1];
			//echo $a;
			$this->errores[0] = "Pepito no vino a la escuela";
			$this->view->render($a, "librosNuevos",null, $this->getErrores());

		}


		public function showLogin()
		{
			$a = explode("\\",get_class($this))[1];
			
			$this->errores[0] = "Pepito no vino a la escuela";
			$this->view->render($a, "showLogin",null, $this->getErrores());
		}
	}
?>