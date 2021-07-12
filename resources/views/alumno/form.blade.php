@extends('layouts.alumno')
@section('main-content')

<link rel="stylesheet" href="{{ asset('MyCss/Alumnos/form.css')}}">
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">

@if(Session::has('Notificacion'))
<div class="alert alert-success" role="alert">
  This is a success alert—check it out!
</div>
@endif


<form action="{{ route('entrevista.save')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="container-form" id="cuadro">

    <!-- Datos generales -->
    <div id="form1">
        <h4 class="h3-form">Datos generales</h4>
        <h6>Foto: <small>Por favor, que sea con la siguiente nomenglatura: "PrimerApellido_SegundoApellido_Nombre"</small></h6>
        <input type="file" name="foto">
        <h6>Celular:</h6>
        <input type="text" name="celular">
        <h6>Grupo:</h6>
        <input type="text" name="correo">
        <h6>Fecha de nacimiento:</h6>
        <input type="date" name="f_nacimiento">
        <h6>Dirección:</h6>
        <input type="text" name="direccion">

        <h6>Estado civil:</h6>
        <input type="radio" name="estado_civil" value="casado"><label for="">Casado</label>
        <input type="radio" name="estado_civil" value="divorciado"><label for="">Divorciado</label>
        <input type="radio" name="estado_civil" value="soltero"><label for="">Soltero</label>
        
        <h6>Lugar de nacimiento:</h6>
        <input type="text" name="lugar_nacimiento">
        <h6>Lugar de procedencia:</h6>
        <input type="text" name="lugar_procedencia">
        <h6>Nombre de contacto de emergencia:</h6>
        <input type="text" name="nombre_contactoemergencia">
        <h6>Teléfono de contacto de emergencia:</h6>
        <input type="text" name="telefono_contactoemergencia">
        <h6>Nombre de la madre:</h6>
        <input type="text" name="nombre_mama">
        <h6>Teléfono de la madre:</h6>
        <input type="text" name="telefono_mama">
        <h6>Nombre del padre:</h6>
        <input type="text" name="nombre_papa">
        <h6>Teléfono del padre:</h6>
        <input type="text" name="telefono_papa">
        <h6>Informacion adicional:</h6>
        <input type="text" name="informacion_adicional">
        <br><br>
        <p class="btn btn-success" id="next1">  Siguiente</p>
    </div>

    <!-- Datos socioeconómicos -->
    <div id="form2">
        <h4 class="h3-form">Datos socioeconómicos</h4>
        <h6>Residencia:</h6>
        <input type="text" name="residencia">
        <h6>¿Con quién vives?</h6>
        <input type="text" name="vivecon">
        <h6>¿Cuánta gente vive en tu casa?</h6>
        <input type="text" name="num_habitantes_casa">
        <h6>¿De cuánto dinero dispones semanalmente?</h6>
        <input type="text" name="dinero_semanal">
        <h6>¿A qué se dedica tu papá?</h6>
        <input type="text" name="ocupacion_papa">
        <h6>¿A qué se dedica tu mamá?</h6>
        <input type="text" name="ocupacion_mama">
        <h6>¿Cuántos hermanos tienes?</h6>
        <input type="text" name="num_hermanos">
        <h6>¿Trabajas?</h6>
        <input type="text" name="trabajo">
        <h6>¿Cuánto ganas en tu trabajo?</h6>
        <input type="text" name="ganancia">
        <h6>¿Cuántas horas trabajas?</h6>
        <input type="text" name="horas_semana">
        <h6>¿Cuáles son tus funciones en el trabajo?</h6>
        <input type="text" name="funciones">
        <br><br>
        <p class="btn btn-warning" id="back1">Anterior</p>
        <p class="btn btn-success" id="next2">Siguiente</p>  
    </div>

    <!-- Datos académicos -->
    <div id="form3">
        <h3 class="h3-form">Datos académicos</h3>
        <h6>Bachillerato:</h6>
        <input type="text" name="bachillerato">
        <h6>Especialidad:</h6>
        <input type="text" name="especialidad_bachillerato">
        <h6>¿Por qué decidiste estudiar en la UTP?</h6>
        <input type="text" name="razon_estudiar_utp">
        <h6>¿Ésta universidad fue tu primera opción?</h6>
        <input type="text" name="primera_opcion_universidad">
        <h6>¿Ésta carrera fue tu primera opción?</h6>
        <input type="text" name="primera_opcion_carrera">
        <h6>¿Qué materias se te dificultan más?</h6>
        <input type="text" name="materias_dificultan">
        <h6>Información adicional:</h6>
        <input type="text" name="informacion_adicional">
        <br><br>
        <p class="btn btn-warning" id="back2">Anterior</p>
        <p class="btn btn-success" id="next3">Siguiente</p>
    </div>
    
    <!-- Datos medicos -->
    <div id="form4">
        <h3 class="h3-form">Datos médicos</h3>
        <h6>¿Padeces de alguna enfermedad?</h6>
        <input type="radio" name="enfermedad" value="si"><label for="">Si</label>
        <input type="radio" name="enfermedad" value="no"><label for="">No</label>
        <h6>¿Tomas algun medicamento? Especifica:</h6>
        <input type="text" name="medicamentos">
        <h6>¿Padeces alguna alergia? Especifica:</h6>
        <input type="text" name="alergia">
        <h6>¿Tomas algun medicamento para la alergia?</h6>
        <input type="text" name="medicamento_alergia">
        <h6>Información adicional:</h6>
        <input type="text" name="informacion_adicional">
        <br><br>
        <p class="btn btn-warning" id="back3">Anterior</p>
        <p class="btn btn-success" id="next4">Siguiente</p>
    </div>


    <!-- Finalizar -->
    <div id="form5">
        <h3 class="h3-form">Finalizar entrevista</h3>
        <p>Los datos registrados serán guardados y solo lo podra visualizar el tutor con el que estan a cargo</p>
        <br><br>
        <button class="btn btn-success form-control" id="finish">Finalizar</button><br><br>
        <p class="btn btn-warning py-1" id="back4">Anterior</p>
    </div>

</div>
</form>

<script src="{{ asset('MyCss/Alumnos/form.js')}}"></script>
@endsection