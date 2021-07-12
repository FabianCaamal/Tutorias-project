<!DOCTYPE html>
<html>
<head>
	<title></title>	
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		.barrita {
			background: #3D9884;
			height: 0.25px;
		}
		.img-alum{
			border: black;
			
		}
	</style>	
</head>
<body>
<center> <img width="200px" src="./img/logoUtp2.png"> </center>

<div>
<table style="width: 100%;">
	<tbody>
		<tr>
			<td><h3>Ficha individual</h3></td>
			<td><img src="./imagenes/alumnos/{{$generales->foto}}" width="100px" alt=""></td>
		</tr>
	</tbody>
</table>
</div>

<br><br>
<table class="table">
	<tbody>
		<tr>
			<th colspan="2" class="barrita"></th>
		</tr>
		<tr>
			<th>Matricula</th> <td> {{$alumno->matricula}} </td>
		</tr>
		<tr>
			<th>Nombre del alumno</th><td>{{ $alumno->nomalumno }}</td>
		</tr>
		<tr>
			<th>Fecha de nacimiento</th><td>{{$generales->f_nacimiento}}</td>
		</tr>
		<tr>
			<th>Lugar de procedencia</th> <td> {{$generales->lugar_procedencia}} </td>
		</tr>
		<tr>
			<th>Domicilio</th> <td>{{$generales->direccion}}</td>
		</tr>
		<tr>
			<th>Telefono o celular</th> <td>{{$generales->celular}}</td>
		</tr>
		<tr>
			<th>Correo electronico</th><td>{{$generales->correo}}</td>
		</tr>
		<tr>
			<th>Nombre de los padres</th><td>Madre: {{$generales->nombre_mama}} <br> Padre: {{$generales->nombre_papa}}</td>
		</tr>
		<tr>
			<th></th><th></th>
		</tr>
	</tbody>
</table>


<br><br><br>

<p style="text-align: right;"> Maxcanu, Yucatan, a ___ de ____________ de 20___ </p>

</body>
</html>