@extends('layouts.alumno')
@section('main-content')

<div class="col-md-10">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="generales-tab" data-toggle="tab" href="#generales" role="tab" aria-controls="generales" aria-selected="true">Datos generales</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="academicos-tab" data-toggle="tab" href="#academicos" role="tab" aria-controls="academicos" aria-selected="false">Datos academicos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="medicos-tab" data-toggle="tab" href="#medicos" role="tab" aria-controls="medicos" aria-selected="false">Datos medicos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="economicos-tab" data-toggle="tab" href="#economicos" role="tab" aria-controls="economicos" aria-selected="false">Datos socioeconomicos</a>
  </li>
</ul>

@if($generales && $academico && $medico && $eco)
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="generales" role="tabpanel" aria-labelledby="generales-tab">
    <table class="table">
        <tbody>
            <tr><th>Foto  </th>  <td> <img src="{{asset('imagenes/alumnos/'.$generales->foto)}}" alt="" width="100px"> </td></tr>
            <tr><th> Telefono/Celular </th><td>  {{$generales->celular}} </td></tr>
            <tr><th> Correo </th><td>  {{$generales->correo}} </td></tr>
            <tr><th> Estado civil </th><td>  {{$generales->estado_civil}} </td></tr>
            <tr><th> Fecha de nacimiento </th><td>  {{$generales->f_nacimiento}} </td></tr>
            <tr><th> Direccion </th><td>  {{$generales->direccion}} </td></tr>
            <tr><th> Lugar de Nacimiento </th><td>  {{$generales->lugar_nacimiento}} </td></tr>
            <tr><th> Lugar de procedencia </th><td>  {{$generales->lugar_procedencia}} </td></tr>
            <tr><th> Informacion adicional </th><td>  {{$generales->informacion_adicional}} </td></tr>
            <tr><th> En caso de emegergencia hablar con: </th><td>  {{$generales->nombre_contactoemergencia}} </td></tr>
            <tr><th> Telefono </th><td>  {{$generales->telefono_contactoemergencia}} </td></tr>
            <tr><th> Nombre de la mamá </th><td>  {{$generales->nombre_mama}} </td></tr>
            <tr><th> Telefono: </th><td>  {{$generales->telefono_mama}} </td></tr>
            <tr><th> Nombre del papá: </th><td>  {{$generales->nombre_papa}} </td></tr>
            <tr><th> Telefono </th><td>  {{$generales->telefono_papa}} </td></tr>
        </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="academicos" role="tabpanel" aria-labelledby="academicos-tab">
    <table class="table">
        <tbody>
            <tr><th> Bachillerato </th><td>  {{$academico->bachillerato}}  </td></tr>
            <tr><th> Especialidad del bachillerato </th><td>  {{$academico->especialidad_bachillerato}} </td></tr>
            <tr><th> Razón por la que estudia en la UTP </th><td>  {{$academico->razon_estudiar_utp}}  </td></tr>
            <tr><th> Primera opción de la universidad </th><td>  {{$academico->primera_opcion_universidad}}  </td></tr>
            <tr><th> Primera opcion de la carrera </th><td>  {{$academico->primera_opcion_carrera}}  </td></tr>
            <tr><th> Materias que se le dificultan </th><td>  {{$academico->materias_dificultan}}  </td></tr>
            <tr><th> Información adicional </th><td>  {{$academico->informacion_adicional}}  </td></tr>
        </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="medicos" role="tabpanel" aria-labelledby="medicos-tab">
    <table class="table">
        <tbody>
            <tr><th> Enfermedad </th><td>  {{$medico->enfermedad}}  </td></tr>
            <tr><th> Medicamentos </th><td>  {{$medico->medicamentos}} </td></tr>
            <tr><th> Alergias </th><td>  {{$medico->alergia}} </td></tr>
            <tr><th> Medicamentos de la alergia </th> <td> {{$medico->medicamento_alergia}} </td> </tr> 
            <tr><th> Informacion adicional </th> <td> {{$medico->informacion_adicional}} </td> </tr>
        </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="economicos" role="tabpanel" aria-labelledby="economicos-tab">
  <table class="table">
          <tbody>
                <tr><th> Padres </th><td>  {{$eco->residencia}}  </td></tr>
                <tr><th> Vive con: </th><td> {{$eco->vivecon}}  </td></tr>
                <tr><th> Numero de habitantes en la casa: </th><td>  {{$eco->num_habitantes_casa}} </td></tr>
                <tr><th> Dinero semanal </th><td> {{$eco->dinero_semanal}}  </td></tr>
                <tr><th> Ocupacion del papá </th><td> {{$eco->ocupacion_papa}}  </td></tr>
                <tr><th> Ocupacion de la mamá </th><td> {{$eco->ocupacion_mama}}  </td></tr>
                <tr><th> Numero de hermanos </th><td> {{$eco->num_hermanos}}  </td></tr>
                <tr><th> Trabajo </th><td> {{$eco->trabajo}}  </td></tr>
                <tr><th> Ganancia </th><td> {{$eco->ganancia}}  </td></tr>
                <tr><th> Horas a la semana </th><td> {{$eco->horas_semana}}  </td></tr>
                <tr><th> Funciones </th><td>  {{$eco->funciones}} </td></tr>
            </tbody>
        </table>
  </div>
</div>

@else
    <br><br>
    <h5>Aún no has hecho la entrevista, haz <a href="{{ route('entrevista')}}">click aquí</a> para hacer la entrevista inicial</h5>
@endif
</div>
@endsection