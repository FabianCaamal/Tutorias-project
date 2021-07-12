@extends('layouts.alumno')
@section('main-content')

<h2>Hola {{ auth()->user()->alumno->nomalumno }} </h2>

@endsection