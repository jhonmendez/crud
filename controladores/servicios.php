<?php 

	include '../modelos/empleado.php';
	include '../controladores/controladorempleado.php';

 if	($_SERVER["REQUEST_METHOD"] == "POST") {

 	$identificador = $_POST['identificador'];
 	$nombres = $_POST['nombres'];
 	$apellidos = $_POST['apellidos'];
 	$salario = $_POST['salario'];
 	$controlador = $_POST['controlador']; 
 	$operacion = $_POST['operacion']; 


 	if ($controlador == "empleados") {
 	
 		$controladorMVC = new ControladorEmpleado();

 		if ($operacion == "guardar") {
			$empleado = new Empleado($identificador,$nombres,$apellidos,$salario);
 			$resultado = $controladorMVC->guardar($empleado);

 			if ($resultado) {

 				echo "Transacción exitosa";

 			} else {

 				echo "Error en la transacción";
           }

 		} elseif ($operacion == "listar") {

 			$resultado = $controladorMVC->listar();
 			
 		} 

	}
 }



 ?>