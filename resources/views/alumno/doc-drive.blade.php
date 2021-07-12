@extends('layouts.alumno')
@section('main-content')

@if(Session::has('Mensaje'))
<div class="alert alert-info"> <h5>{{ Session::get('Mensaje')}}</h5> </div>
@endif

@if(Session::has('errors'))
<div class="alert alert-danger"> <h5>{{ Session::get('errors')}}</h5> </div>
@endif

<form class="form" method="POST" action="{{ route('drive')}}" enctype="multipart/form-data">
  {{ csrf_field() }}

  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-8">
      <label for="id_documento"><h5>Nombre del documento:</h5></label>
        <select name="id_documento" class="form-control" style="height: 40px ">
          @foreach($documentos as $documento)
          <option value="{{$documento->iddocumentos}}">{{$documento->nombre}}</option>
          @endforeach
        </select>

      <label for="documento"><h5>Elegir documento: <small>Procura que el nombre del archivo sea: "Apellido_nombre_nombreDocumento"</small> </h5></label>
        <input type="file" name="documento" class="form-control">
        <br>
        <input type="submit" class="btn btn-sm btn-block btn-primary" value="Guardar" style="height: 40px ">        
    </div>
  </div>
</form>
@endsection