<?php 

	class Empleado {

		public $identificador;
		public $nombres;
		public $apellidos;
		public $salario;

		function __construct($identificador,$nombres,$apellidos,$salario) {

			$this->identificador = $identificador;
			$this->nombres = $nombres;
			$this->apellidos = $apellidos;
			$this->salario = $salario;

		}


		function __construct1($identificador) {

			$this->identificador = $identificador;
			
		}

		

	}




 ?>