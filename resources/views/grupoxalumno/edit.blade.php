@extends('layouts.tutor')
@section('main-content')

<a href="{{ url('tutorias/grupoxalumno/alumno/'.$alumno->idalumno) }}" title="Regresar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Cancelar</button></a><br>
  <br><br>

<form action="{{ url('tutorias/guardar/'.$academico->iddatosacademicos.'/'.$generales->id_datosgenerales.'/'.$medico->id_datosmedicos.'/'.$eco->iddatossocioeconomicos.'/todo/')}}" 
  method="post" enctype="multipart/form-data">
    @csrf


<div class="col-md-10">	
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="academicos-tab" data-toggle="tab" href="#academicos" role="tab" aria-controls="academicos" aria-selected="true">Datos academicos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Datos generales</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="medico-tab" data-toggle="tab" href="#medico" role="tab" aria-controls="medico" aria-selected="false">Datos medicos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="economico-tab" data-toggle="tab" href="#economico" role="tab" aria-controls="economico" aria-selected="false">Datos economicos</a>
  </li>
</ul>

<!-- <===========================  Interior del cuadro   ==========================================> -->
<div class="tab-content" id="myTabContent">
  <!-- =================== Datos academicos ========================== -->
  <div class="tab-pane fade show active" id="academicos" role="tabpanel" aria-labelledby="academicos-tab">
    <div class="table-responsive">

        <table class="table">
          <tbody>
                <tr><th> Bachillerato </th><td>  <input type="text" value="{{$academico->bachillerato}}" name="bachi">  </td></tr>
                <tr><th> Especialidad del bachillerato </th><td>  <input type="text" value="{{$academico->especialidad_bachillerato}}" name="espe"> </td></tr>
                <tr><th> Razón por la que estudia en la UTP </th><td>  <input type="text" value="{{$academico->razon_estudiar_utp}}" name="razon"> </td></tr>
                <tr><th> Primera opción de la universidad </th><td> <input type="text" value="{{$academico->primera_opcion_universidad}}" name="opcion"> </td></tr>
                <tr><th> Primera opcion de la carrera </th><td> <input type="text" value="{{$academico->primera_opcion_carrera}}" name="carrera"> </td></tr>
                <tr><th> Materias que se le dificultan </th><td> <input type="text" value="{{$academico->materias_dificultan}}" name="materia"> </td></tr>
                <tr><th> Información adicional </th><td> <input type="text" value="{{$academico->informacion_adicional}}" name="info"> </td></tr>
            </tbody>
        </table>
    </div>
  </div>
   <!-- ==================  Datos generales  =============================== -->
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <div class="table-responsive">
      <table class="table">
        <tbody>
          <tr> <th>Foto</th>  <td> <img src="{{asset('imagenes/alumnos/'.$generales->foto)}}" alt="" width="100px"> </td> <td><input type="file" name="foto">Cambiar foto?</td></tr>
              <tr><th> Telefono/Celular </th><td> <input type="text" value="{{$generales->celular}}" name="a"> </td></tr>
              <tr><th> Correo </th><td> <input type="text" value="{{$generales->correo}}" name="b"> </td></tr>
              <tr><th> Estado civil </th><td> <input type="text" value="{{$generales->estado_civil}}" name="c"> </td></tr>
              <tr><th> Fecha de nacimiento </th><td> <input type="text" value="{{$generales->f_nacimiento}}" name="d"> </td></tr>
              <tr><th> Direccion </th><td> <input type="text" value="{{$generales->direccion}}" name="n"> </td></tr>
              <tr><th> Lugar de Nacimiento </th><td> <input type="text" value="{{$generales->lugar_nacimiento}}" name="e"> </td></tr>
              <tr><th> Lugar de procedencia </th><td> <input type="text" value="{{$generales->lugar_procedencia}}" name="f"> </td></tr>
              <tr><th> Informacion adicional </th><td> <input type="text" value="{{$generales->informacion_adicional}}" name="g"> </td></tr>
              <tr><th> En caso de emegergencia hablar con: </th><td> <input type="text" value="{{$generales->nombre_contactoemergencia}}" name="h"> </td></tr>
              <tr><th> Telefono </th><td> <input type="text" value="{{$generales->telefono_contactoemergencia}}" name="i"> </td></tr>
              <tr><th> Nombre de la mamá </th><td> <input type="text" value="{{$generales->nombre_mama}}" name="j"> </td></tr>
              <tr><th> Telefono: </th><td> <input type="text" value="{{$generales->telefono_mama}}" name="k"> </td></tr>
              <tr><th> Nombre del papá: </th><td> <input type="text" value="{{$generales->nombre_papa}}" name="l"> </td></tr>
              <tr><th> Telefono </th><td> <input type="text" value="{{$generales->telefono_papa}}" name="m"> </td></tr>
          </tbody>
        </table>
    </div>
  </div>

  <!-- ==================  Datos medicos  =============================== -->
  <div class="tab-pane fade" id="medico" role="tabpanel" aria-labelledby="medico-tab">
    <div class="table-responsive">
        <table class="table">
          <tbody>
                <tr><th> Enfermedad </th><td> <input type="text" value="{{$medico->enfermedad}}" name="enf"> </td></tr>
                <tr><th> Medicamentos </th><td> <input type="text" value="{{$medico->medicamentos}}" name="medic"> </td></tr>
                <tr><th> Alergias </th><td> <input type="text" value="{{$medico->alergia}}" name="alerg"> </td></tr>
                <tr><th> Medicamentos de la alergia </th> <td> <input type="text" value="{{$medico->medicamento_alergia}}" name="medalergia"> </td> </tr> 
                <tr><th> Informacion adicional </th> <td> <input type="text" value="{{$medico->informacion_adicional}}" name="infoadd"> </td> </tr>
            </tbody>
        </table>
    </div>
  </div>

   <!-- ====================  Datos esconomicos  ================================= -->
  <div class="tab-pane fade" id="economico" role="tabpanel" aria-labelledby="economico-tab">
    <div class="table-responsive">
        <table class="table">
          <tbody>
                <tr><th> Padres </th><td> <input type="text" value="{{$eco->residencia}}" name="resi"> </td></tr>
                <tr><th> Vive con: </th><td> <input type="text" value="{{$eco->vivecon}}" name="live"> </td></tr>
                <tr><th> Numero de habitantes en la casa: </th><td> <input type="text" value="{{$eco->num_habitantes_casa}}" name="numcas"> </td></tr>
                <tr><th> Dinero semanal </th><td> <input type="text" value="{{$eco->dinero_semanal}}" name="money"> </td></tr>
                <tr><th> Ocupacion del papá </th><td> <input type="text" value="{{$eco->ocupacion_papa}}" name="ocppapa"> </td></tr>
                <tr><th> Ocupacion de la mamá </th><td> <input type="text" value="{{$eco->ocupacion_mama}}" name="ocpmama"> </td></tr>
                <tr><th> Numero de hermanos </th><td> <input type="text" value="{{$eco->num_hermanos}}" name="numher"> </td></tr>
                <tr><th> Trabajo </th><td> <input type="text" value="{{$eco->trabajo}}" name="trabajo"> </td></tr>
                <tr><th> Ganancia </th><td> <input type="text" value="{{$eco->ganancia}}" name="ganancia"> </td></tr>
                <tr><th> Horas a la semana </th><td> <input type="text" value="{{$eco->horas_semana}}" name="hrs"> </td></tr>
                <tr><th> Funciones </th><td> <input type="text" value="{{$eco->funciones}}" name="func"> </td></tr>
            </tbody>
        </table>
    </div>
  </div>
  
</div>

</div>
<button class="btn btn-primary" type="submit">Guardar</button>
</form>
@endsection