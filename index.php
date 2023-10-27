<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM jefe_familia ORDER BY id_jefe_familia DESC");
?>

<html>
<head>	
	<title>Consultas</title>
</head>

<body>
	<h2>Consultas</h2>
	<p>
		<a href="add.php">Add New Data</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
            <td><strong>ID</strong></td>
			<td><strong>Nombres</strong></td>
			<td><strong>Apellidos</strong></td>
			<td><strong>Número de Cedula</strong></td>
            <td><strong>Género</strong></td>
            <td><strong>Número de Celular</strong></td>
            <td><strong>Número de Casa</strong></td>
            <td><strong>Fecha de Nacimiento</strong></td>
            <td><strong>Correo Electrónico</strong></td>
            <td><strong>Estado Civil</strong></td>
            <td><strong>Grado de Instrucción</strong></td>
            <td><strong>Sector de Trabajo</strong></td>
            <td><strong>Ocupación</strong></td>
            <td><strong>Pensionado</strong></td>
            <td><strong>Discapacitado</strong></td>
            <td><strong>Incapacitado</strong></td>
            <td><strong>Código del Carnet</strong></td>
            <td><strong>Serial del Carnet</strong></td>
            <td><strong>CNE</strong></td>
            <td><strong>Actividad Comercial</strong></td>
            <td><strong>Cargas Familiares</strong></td>
			<td><strong>Action</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
            echo "<td>".$res['id']."</td>";
			echo "<td>".$res['nombre']."</td>";
			echo "<td>".$res['apellido']."</td>";
			echo "<td>".$res['cedula']."</td>";
            echo "<td>".$res['genero']."</td>";	
            echo "<td>".$res['numerotelefono']."</td>";	
            echo "<td>".$res['numerotelefonocasa']."</td>";	
            echo "<td>".$res['fechanacimiento']."</td>";	
            echo "<td>".$res['correo']."</td>";	
            echo "<td>".$res['estadocivil']."</td>";
            echo "<td>".$res['gradoinstruccion']."</td>";	
            echo "<td>".$res['sectortrabajo']."</td>";	
            echo "<td>".$res['ocupacion']."</td>";
            echo "<td>".$res['pensionado']."</td>";		
            echo "<td>".$res['discapacitado']."</td>";	
            echo "<td>".$res['incapacitado']."</td>";	
            echo "<td>".$res['codigocarnet']."</td>";	
            echo "<td>".$res['serialcarnet']."</td>";			
            echo "<td>".$res['cne']."</td>";	
            echo "<td>".$res['actividadvivienda']."</td>";	
            echo "<td>".$res['tipoactividad']."</td>";	
            echo "<td>".$res['cargasfamiliares']."</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>
</body>
</html>