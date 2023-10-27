<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
    //jefe de familia
	$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($mysqli, $_POST['apellido']);
    $cedula = mysqli_real_escape_string($mysqli, $_POST['cedula']);
    $genero = mysqli_real_escape_string($mysqli, $_POST['genero']);
    $numerotelefono = mysqli_real_escape_string($mysqli, $_POST['numerotelefono']);
    $numerotelefonocasa = mysqli_real_escape_string($mysqli, $_POST['numerotelefonocasa']);
    $fechanacimiento = mysqli_real_escape_string($mysqli, $_POST['fechanacimiento']);
    $correo = mysqli_real_escape_string($mysqli, $_POST['correo']);
    $estadocivil = mysqli_real_escape_string($mysqli, $_POST['estadocivil']);
    $gradoinstruccion = mysqli_real_escape_string($mysqli, $_POST['gradoinstruccion']);
    $sectortrabajo = mysqli_real_escape_string($mysqli, $_POST['sectortrabajo']);
    $ocupacion = mysqli_real_escape_string($mysqli, $_POST['ocupacion']);
    $pensionado = mysqli_real_escape_string($mysqli, $_POST['pensionado']);
    $discapacitado = mysqli_real_escape_string($mysqli, $_POST['discapacitado']);
    $incapacitado = mysqli_real_escape_string($mysqli, $_POST['incapacitado']);
    $codigocarnet = mysqli_real_escape_string($mysqli, $_POST['codigocarnet']);
    $serialcarnet = mysqli_real_escape_string($mysqli, $_POST['serialcarnet']);
    $cne = mysqli_real_escape_string($mysqli, $_POST['cne']);
    $actividadvivienda = mysqli_real_escape_string($mysqli, $_POST['actividadvivienda']);
    $tipoactividad = mysqli_real_escape_string($mysqli, $_POST['tipoactividad']);
    $cargasfamiliares = mysqli_real_escape_string($mysqli, $_POST['cargasfamiliares']);
    //
		
	// Check for empty fields
    if (empty($nombre) || empty($apellido) || empty($cedula) || empty($genero) || empty($numerotelefono) || empty($numerotelefonocasa) || empty($fechanacimiento) || empty($correo) || empty($estadocivil) || empty($gradoinstruccion) || empty($sectortrabajo) || empty($ocupacion) || empty($pensionado) || empty($discapacitado) || empty($incapacitado) || empty($codigocarnet) || empty($serialcarnet) || empty($cne) || empty($actividadvivienda) || empty($tipoactividad) || empty($cargasfamiliares)) {
        
        if (empty($nombre)) {
            echo "<font color='red'>Nombre(s) está vacío.</font><br/>";
        }
    
        if (empty($apellido)) {
            echo "<font color='red'>Apellido(s) está vacío.</font><br/>";
        }
    
        if (empty($cedula)) {
            echo "<font color='red'>Número de Cédula está vacío.</font><br/>";
        }
    
        if (empty($genero)) {
            echo "<font color='red'>Género está vacío.</font><br/>";
        }

        if (empty($numerotelefono)) {
            echo "<font color='red'>Numero de Telefono está vacío.</font><br/>";
        }
    
        if (empty($numerotelefonocasa)) {
            echo "<font color='red'>Número de Teléfono de Casa está vacío.</font><br/>";
        }
        
        if (empty($fechanacimiento)) {
            echo "<font color='red'>Fecha de Nacimiento está vacía.</font><br/>";
        }
        
        if (empty($correo)) {
            echo "<font color='red'>Correo está vacío.</font><br/>";
        }

        if (empty($estadocivil)) {
            echo "<font color='red'>Estado Civil está vacío.</font><br/>";
        }
        
        if (empty($gradoinstruccion)) {
            echo "<font color='red'>Grado de Instrucción está vacío.</font><br/>";
        }
        
        if (empty($sectortrabajo)) {
            echo "<font color='red'>Sector de Trabajo está vacío.</font><br/>";
        }

        if (empty($ocupacion)) {
            echo "<font color='red'>Ocupación está vacía.</font><br/>";
        }
        
        if (empty($pensionado)) {
            echo "<font color='red'>Pensionado está vacío.</font><br/>";
        }

        if (empty($discapacitado)) {
            echo "<font color='red'>Campo Discapacitado está vacío.</font><br/>";
        }
        
        if (empty($incapacitado)) {
            echo "<font color='red'>Campo Incapacitado está vacío.</font><br/>";
        }
        
        if (empty($codigocarnet)) {
            echo "<font color='red'>Campo Código Carnet está vacío.</font><br/>";
        }
        
        if (empty($serialcarnet)) {
            echo "<font color='red'>Campo Serial Carnet está vacío.</font><br/>";
        }

        if (empty($cne)) {
            echo "<font color='red'>Campo CNE está vacío.</font><br/>";
        }
        
        if (empty($actividadvivienda)) {
            echo "<font color='red'>Campo Actividad Vivienda está vacío.</font><br/>";
        }
        
        if (empty($tipoactividad)) {
            echo "<font color='red'>Campo Tipo de Actividad está vacío.</font><br/>";
        }
        
        if (empty($cargasfamiliares)) {
            echo "<font color='red'>Campo Cargas Familiares está vacío.</font><br/>";
        }
        
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO jefe_familia (nombres, apellidos, cedula, id_genero,  codigo_carnet, serial_carnet, numero_celular, numero_telefono, fecha_nacimiento, correo, id_estado_civil, id_grado_instruccion, id_sector_trabajo, ocupacion, pensionado, discapacitado, incapacitado, cne, actividad_comercial, tipo_actividad, cargas_familiares) VALUES ('$nombre', '$apellido', '$cedula', '$genero', '$numerotelefono', '$numerotelefonocasa', '$fechanacimiento', '$correo', '$estadocivil', '$gradoinstruccion', '$sectortrabajo', '$ocupacion', '$pensionado', '$discapacitado', '$incapacitado', '$codigocarnet', '$serialcarnet', '$cne', '$actividadvivienda', '$tipoactividad', '$cargasfamiliares')");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>