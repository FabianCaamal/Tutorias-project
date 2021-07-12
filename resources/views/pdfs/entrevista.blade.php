<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> -->
</head>
<body>
	<center>
		<img width="210px" src="./img/logoUtp2.png">
		<h4>PROGRAMA DE TUTORÍA - ENTREVISTA INICIAL</h4>
	</center>
<div>
	<table style="width: 100%;">
		<thead>
			<tr>
				<td><b>Carrera:</b> <u>{{$alumno->grupoxalumno->grupo->programa->nomprograma}}</u></td>
				<td><b>Grupo:</b> <u>{{$alumno->grupoxalumno->grupo->nomgrupo}}</u></td>
			</tr>
		</thead>
	</table>
</div>
<br><br>

<!-- parte 1	 -->
<div>
	<table style="width: 100%">
	<thead>
		<tr>
			<td>I.DATOS PERSONALES</td> 
		</tr>
		<tr>
			<td>Nombre: <u>{{$alumno->nomalumno}}</u></td>			
		</tr>
		<tr>
			<td>Matricula: <u>{{$alumno->matricula}}</u></td>
		</tr>
		<tr>
			<td>Direccion: <u>{{$generales->direccion}}</u></td>		
			<td>Edad: <u>12</u></td>		
		</tr>
		<tr>
			<td>Telefono: <u>{{$generales->celular}}</u></td>		
		</tr>
		<tr>
			<td>Correo: <u>{{$generales->correo}}</u></td>		
		</tr>
		<tr>
			<td>Estado civil: <u>{{$generales->estado_civil}}</u></td>
			<td>Hijos: <u>hijos</u></td>
		</tr>
		<tr>
			<td>En caso de emergencia comunicarse con: <u>{{$generales->nombre_contactoemergencia}}</u></td>		
		</tr>
		<tr>
			<td>Telefono: <u>{{$generales->telefono_contactoemergencia}}</u></td>
		</tr>
	</thead>
	<tbody style="border: solid black;">
		<tr>
			<td>INFORMACION ADICIONAL</td>			
		</tr>
		<tr><td> {{$generales->informacion_adicional}}  <br><br> </td></tr>
		<tr><td> <br> </td></tr>		
	</tbody>
</table>
</div>
<br><br>


<!-- parte 2	 -->
<div>
	<table style="width: 100%;">
	<thead>
		<tr>
			<td>II.ASPECTOS SOCIOECONÓMICOS</td> 
		</tr>
		<tr>
			<td>1- ¿Reside en esta ciudad? <u>Del alumno</u></td>
			<td>Tiempo: <u>especifica</u></td>			
		</tr>
		<tr>
			<td>2- ¿Con quién vives actualmente?<u>{{$eco->vivecon}}</u></td>
		</tr>
		<tr>
			<td>3- ¿Trabajas? <u>{{$eco->trabajo}} </u>		
			  ¿Cuánto ganas? <u>{{$eco->ganancia}}</u></td>
			<td>Hrs a la semana: <u>{{$eco->horas_semana}}</u></td>		
		</tr>
		<tr>
			<td>4- ¿De cuánto dinero dispones semanalmente? <u>{{$eco->dinero_semanal}}</u></td>		
		</tr>
		<tr>
			<td>5- ¿A qué se dedica tu papá? <u>{{$eco->ocupacion_papa}}</u></td>		
		</tr>
		<tr>
			<td>6- ¿A qué se dedica tu mamá? <u>{{$eco->ocupacion_mama}}</u></td>
		</tr>
		<tr>
			<td>7- Si tienes hermanos señala cuántos son <u>{{$eco->num_hermanos}}</u></td>		
		</tr>
		<tr>
			<td>8- ¿Cuánta gente vive en tu casa? <u>{{$eco->num_habitantes_casa}}</u></td>
		</tr>
	</thead>
	<tbody style="border: solid black;">
		<tr>
			<td>INFORMACION ADICIONAL</td>			
		</tr>
		<tr><td>  <br><br> </td></tr>
		<tr><td> <br> </td></tr>		
	</tbody>
</table>
</div>

<br><br><br><br><br><br><br><br><br>

<!-- parte 3 -->
<div>
	<table style=" width: 100%;">
	<thead>
		<tr>
			<td>III.ASPECTOS PERSONALES</td> 
		</tr>
		<tr>
			<td>1- ¿Padeces alguna enfermedad crónica o alergia? <u>{{$medico->enfermedad}}</u></td>
			<td>¿Tomas algun medicamento? <u>{{$medico->medicamentos}}</u></td>		
		</tr>
		<tr>
			<td>2- ¿Padeces de alguna alergia?<u>{{$medico->alergia}}</u></td>
			<td>¿Tomas algun medicamento para la alergia? <u>{{$medico->medicamento_alergia}}</u></td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</thead>
	<tbody style="border: solid black;">
		<tr>
			<td>INFORMACION ADICIONAL</td>			
		</tr>
		<tr><td> {{$medico->informacion_adicional}} <br><br> </td></tr>
		<tr><td> <br> </td></tr>		
	</tbody>	
</table>
</div>

<br><br><br><br><br>
<!-- parte 4 -->
<div>
	<table style=" width: 100%;">
	<thead>
		<tr>
			<td>IV.ASPECTOS ACADÉMICOS</td> 
		</tr>
		<tr>
			<td>1- Bachillerato <u>{{$academico->bachillerato}}</u></td>			
		</tr>
		<tr>
			<td>2- Especialidad<u>{{$academico->especialidad_bachillerato}}</u></td>
		</tr>
		<tr>
			<td>3- ¿Por qué elegiste estudiar en una Universidad Tecnológica? <u>{{$academico->razon_estudiar_utp}}</u></td>
		</tr>
		<tr>
			<td>4- ¿Cual Universidad fue tu primera opción? <u>{{$academico->primera_opcion_universidad}}</u></td>
		</tr>
		<tr>
			<td>5- ¿Cual carrera fue tu primera opción? <u>{{$academico->primera_opcion_carrera}}</u></td>
		</tr>
		<tr>
			<td>5- ¿Qué materias se te dificultan más? <u>{{$academico->materias_dificultan}}</u></td>
		</tr>
	</thead>
	<tbody style="border: solid black;">
		<tr>
			<td>INFORMACION ADICIONAL</td>			
		</tr>
		<tr><td>{{$academico->informacion_adicional}}<br><br> </td></tr>
		<tr><td> <br> </td></tr>		
	</tbody>	
</table>
</div>
</body>
</html>