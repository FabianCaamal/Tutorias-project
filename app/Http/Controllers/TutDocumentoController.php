<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TutDocumento;
use App\Alumno;
use App\Http\Requests\documentoFormRequest;
class TutDocumentoController extends Controller
{
   public function index($idAlumno)
   {
    $valid = Alumno::findOrFail($idAlumno);
	return view('documento.create', compact('idAlumno'));
   } 
    public function store(documentoFormRequest $request)
    {
        TutDocumento::create($request->all());
        return back()->with('Notificacion', 'Documento registrado con éxito, ahora ya puedes subir tu documento');
    }
}