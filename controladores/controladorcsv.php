<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Datos Archivos CSV</title>

	<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

</head>
<body>

	<h1>Datos Archivos CSV</h1>

	<table id="customers">
		<tr>
			<th>Name</th>
			<th>LastName</th>
			<th>Address</th>
			<th>City</th>
			<th>State</th>
			<th>Code Postal</th>
		</tr>


		<?php  

			$handle = fopen("../recursos/addresses.csv", "r");

			for ($i = 0; $row = fgetcsv($handle ); ++$i) { 
		?>

	
				<tr>
					<td><?php  echo $row[0] ?></td>
					<td><?php  echo $row[1] ?></td>
					<td><?php  echo $row[2] ?></td>
					<td><?php  echo $row[3] ?></td>
					<td><?php  echo $row[4] ?></td>
					<td><?php  echo $row[5] ?></td>
				</tr>


			<?php  

			     }	

		    ?>


	</table>

</body>
</html>