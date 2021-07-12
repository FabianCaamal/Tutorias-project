@extends('layouts.disenio')

@section('title') 404
@endsection

@section('main-content')

<br><br><br><br><br>
<div class="text-center">
    <div class="error mx-auto" data-text="404">404</div>     
    <p class="lead text-gray-800 mb-5">Pagina no encontrada</p>
    <p class="text-gray-500 mb-0">Es posible que la pagina que estes buscando no exista...</p>
    <!-- <a href=" {{ url('/')}} ">&larr; Regresar al inicio</a> -->
</div>

@endsection