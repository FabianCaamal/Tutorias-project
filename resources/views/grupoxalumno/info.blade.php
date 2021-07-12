@extends('layouts.tutor')
@section('main-content')

<a href="{{ url('tutorias/grupoxalumno/') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a><br>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h2 mb-0 text-gray-800">
      <p></p>
    </h1>
  @if($generales)
    <a href=" {{ url('tutorias/grupoxalumno/' . $alumno->idalumno . '/ficha')}} " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-download fa-sm text-white-50"></i> Ficha individual.pdf
    </a>
    <a href=" {{ url('tutorias/grupoxalumno/' . $alumno->idalumno . '/entrevista')}} " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-download fa-sm text-white-50"></i> Entrevista inicial.pdf
    </a>
  @endif
</div>

<div class="col-md-10">
	
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="alumno-tab" data-toggle="tab" href="#alumno" role="tab" aria-controls="alumno" aria-selected="true">Alumno</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="academicos-tab" data-toggle="tab" href="#academicos" role="tab" aria-controls="academicos" aria-selected="false">Datos academicos</a>
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
  <li class="nav-item">
    <a class="nav-link" id="doc-tab" data-toggle="tab" href="#doc" role="tab" aria-controls="doc" aria-selected="false">Documentos</a>
  </li>
</ul>

<!-- <===========================  Interior del cuadro   ==========================================> -->
<div class="tab-content" id="myTabContent">

  <!-- ===================== Alumno ============================ -->
  <div class="tab-pane fade show active" id="alumno" role="tabpanel" aria-labelledby="alumno-tab">
  	<div class="table-responsive">
        <table class="table">
        	<tbody>
            @if($generales)
              <tr> <th>Foto  </th>  <td> <img src="{{asset('imagenes/alumnos/'.$generales->foto)}}" alt="" width="100px"> </td></tr>
            @endif
              <tr><th> Nombre </th>     <td>   {{$alumno->nomalumno}}   </td></tr>
              <tr><th> Matricula </th>  <td>  {{$alumno->matricula}} </td></tr>
            
            </tbody>
        </table>
    </div>
    <!-- <a href="#" title="Edit tic"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a> -->
  </div>
 
  <!-- =================== Datos academicos ========================== -->
  <div class="tab-pane fade" id="academicos" role="tabpanel" aria-labelledby="academicos-tab">
    <div class="table-responsive">
        <table class="table">
          <tbody>
            @if($academico)
                <tr><th> Bachillerato </th><td>  {{$academico->bachillerato}}  </td></tr>
                <tr><th> Especialidad del bachillerato </th><td>  {{$academico->especialidad_bachillerato}} </td></tr>
                <tr><th> Razón por la que estudia en la UTP </th><td>  {{$academico->razon_estudiar_utp}}  </td></tr>
                <tr><th> Primera opción de la universidad </th><td>  {{$academico->primera_opcion_universidad}}  </td></tr>
                <tr><th> Primera opcion de la carrera </th><td>  {{$academico->primera_opcion_carrera}}  </td></tr>
                <tr><th> Materias que se le dificultan </th><td>  {{$academico->materias_dificultan}}  </td></tr>
                <tr><th> Información adicional </th><td>  {{$academico->informacion_adicional}}  </td></tr>
            @endif
            </tbody>
        </table>
    </div>
  </div>
   <!-- ==================  Datos generales  =============================== -->
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <div class="table-responsive">
        <table class="table">
          <tbody>
            @if($generales)
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
            @endif
            </tbody>
        </table>
    </div>
  </div>

  <!-- ==================  Datos medicos  =============================== -->
  <div class="tab-pane fade" id="medico" role="tabpanel" aria-labelledby="medico-tab">
    <div class="table-responsive">
        <table class="table">
          <tbody>
            @if($medico)
                <tr><th> Enfermedad </th><td>  {{$medico->enfermedad}}  </td></tr>
                <tr><th> Medicamentos </th><td>  {{$medico->medicamentos}} </td></tr>
                <tr><th> Alergias </th><td>  {{$medico->alergia}} </td></tr>
                <tr><th> Medicamentos de la alergia </th> <td> {{$medico->medicamento_alergia}} </td> </tr> 
                <tr><th> Informacion adicional </th> <td> {{$medico->informacion_adicional}} </td> </tr>
            @endif
            </tbody>
        </table>
    </div>
  </div>

   <!-- ====================  Datos esconomicos  ================================= -->
  <div class="tab-pane fade" id="economico" role="tabpanel" aria-labelledby="economico-tab">
    <div class="table-responsive">
        <table class="table">
          <tbody>
            @if($eco)
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
            @endif
            </tbody>
        </table>
    </div>
  </div>

  <!-- ====================  Documentos  ================================= -->
  <div class="tab-pane fade" id="doc" role="tabpanel" aria-labelledby="doc-tab">
    <table class="table">
      <tbody>
      @if($document)
        @foreach($document as $item)   
          <tr> <td>{{$item->nombre}}</td> <td><a href="{{url($item->url)}}">Ver documento</a> </td> <td><a href="{{url('tutorias/borrar/'.$item->iddrive)}}"><button class="btn btn-danger">Borrar</button></a></td></tr>  
        @endforeach
      @endif
    
      </tbody>
    </table>
  </div>
  <a href="{{ url('tutorias/grupoxalumno/alumno/' . $alumno->idalumno. '/edit') }}"><button class="btn btn-warning">Editar</button></a>
</div>
</div>


@endsection