<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<h2>Add Data</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
            <tr>
                <td class="label">Nombre(s)</td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td class="label">Apellido(s)</td>
                <td><input type="text" name="apellido"></td>
            </tr>
            <tr>
                <td class="label">Número de Cédula</td>
                <td><input type="number" name="cedula"></td>
            </tr>
            <tr>
                <td class="label">Género</td>
                <td>
                <select id="genero" name="genero">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="femenino">Femenino</option>
                    <option value="masculino">Masculino</option>
                </select>
                </td>
            </tr>
            <tr>
                <td class="label">Número de Teléfono</td>
                <td><input type="tel" name="numerotelefono"></td>
            </tr>
            <tr>
                <td class="label">Número de Teléfono de Habitación</td>
                <td><input type="tel" name="numerotelefonocasa"></td>
            </tr>
            <tr>
                <td class="label">Fecha de Nacimiento</td>
                <td><input type="datetime-local" name="fechanacimiento"></td>
            </tr>
            <tr>
                <td class="label">Correo electrónico</td>
                <td><input type="email" name="correo"></td>
            </tr>
            <tr>
                <td class="label">Estado Civil</td>
                <td>
                <select id="estadocivil" name="estadocivil">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="soltero">Soltera/o</option>
                    <option value="casado">Casada/o</option>
                    <option value="divorciado">Divorciad/o</option>
                    <option value="viudo">Viuda/o</option>
                    <option value="concubinato">Concubinato</option>
                </select>
                </td>
            </tr>
            <tr>
                <td class="label">Grado de Instrucción</td>
                <td>
                <select id="gradoinstruccion" name="gradoinstruccion">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="primaria">Primaria</option>
                    <option value="bachillerato">Bachillerato</option>
                    <option value="tecnicomedio">Técnico Medio</option>
                    <option value="tecnicosuperior">Técnico Superior</option>
                    <option value="pregrado">Pregrado</option>
                    <option value="maestria">Maestría</option>
                    <option value="postgrado">Postgrado</option>
                    <option value="doctorado">Doctorado</option>
                </select>
                </td>
            </tr>
            <tr>
                <td class="label">Sector donde trabaja</td>
                <td>
                <select id="sectortrabajo" name="sectortrabajo">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="publico">Público</option>
                    <option value="privado">Privado</option>
                    <option value="cuentapropia">Cuenta Propia</option>
                    <option value="desempleado">Desempleado</option>
                    <option value="otro">Otro</option>
                </select>
                </td>
            </tr>
            <tr>
                <td class="label">Ocupación</td>
                <td><input type="text" name="ocupacion"></td>
            </tr>
            <tr>
                <td class="label">¿Es pensionado/a?</td>
                <td>
                <select id="pensionado" name="pensionado">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>
                </td>
            </tr>
            <tr>
                <td class="label">¿Es discapacitado/a?</td>
                <td>
                <select id="discapacitado" name="discapacitado">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>
                </td>
            </tr>
            <tr>
                <td class="label">¿Es incapacitado/a?</td>
                <td>
                <select id="incapacitado" name="incapacitado">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>
                </td>
            </tr>
            <tr>
                <td class="label">Código del Carnet de la patria</td>
                <td><input type="number" name="codigocarnet"></td>
            </tr>
            <tr>
                <td class="label">Serial del Carnet de la patria</td>
                <td><input type="number" name="serialcarnet"></td>
            </tr>
            <tr>
                <td class="label">¿Se encuentra inscrito en el CNE?</td>
                <td>
                <select id="cne" name="cne">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>
                </td>
            </tr>
            <tr>
                <td class="label">¿Realiza actividad comercial en la vivienda?</td>
                <td>
                <select id="actividadvivienda" name="actividadvivienda">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>
                </td>
            </tr>
            <tr>
                <td class="label">¿Qué tipo de actividad realiza?</td>
                <td><input type="text" name="tipoactividad"></td>
            </tr>
            <tr>
                <td class="label">¿Cuántas cargas familiares tiene?</td>
                <td>
                <select id="cargasfamiliares" class="cargasfamiliares" name="cargasfamiliares">
                    <option selected="true" disabled="disabled" value="0">Seleccione</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </tr>
            <tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>
