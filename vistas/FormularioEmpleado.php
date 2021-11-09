<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario Empleados</title>


</head>
<body>

	<form action="../controladores/servicios.php" method="post">
		
		Identificador: <input type="text" id = "identificador"  name="identificador" autofocus> <br>
		Nombres: <input type="text"  id = "nombres" name="nombres" ><br>
		Apellidos: <input type="text"  id = "apellidos"name="apellidos" ><br>
		Salario: <input type="text"  id = "salario"name="salario" ><br>
		<input type="hidden" name="controlador" value="empleados" >
		<input type="hidden" name="operacion" value="guardar" >

		<input type="submit" value="Guardar">
		<input type="reset" value="Limpiar Formulario">

	</form>

	<?php 

	    if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {

	        
	        $identificador = $_GET['identificador'];
	        $nombres = $_GET['nombres'];
	        $apellidos = $_GET['apellidos'];
	        $salario = $_GET['salario'];

			echo  '<script>
				document.getElementById("identificador").value = "'.$identificador.'";
				document.getElementById("nombres").value = "'.$nombres.'";
				document.getElementById("apellidos").value = "'.$apellidos.'";
				document.getElementById("salario").value = "'.$salario.'";
			</script>';      

	    }
?>

</body>
</html>