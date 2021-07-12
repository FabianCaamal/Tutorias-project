<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\TutDatoAcademico;
use App\Models\TutDatoGeneral;
use App\Models\TutDatoMedico;
use App\Models\TutDatoSocioeconomico;

class pdfController extends Controller
{
	
    public function ficha($id){
    	$alumno = Alumno::findOrFail($id);
		$academico = TutDatoAcademico::where('idalumno', $id)->first();
        $generales = TutDatoGeneral::where('idalumno', $id)->first();
        $medico = TutDatoMedico::where('idalumno', $id)->first();
		$eco = TutDatoSocioeconomico::where('idalumno', $id)->first();
		

    	$pdf = \PDF::loadView('pdfs.ficha', compact('alumno', 'academico', 'generales', 'medico', 'eco'));
		return $pdf->stream();
    }

    public function entrevista($id){
		$alumno = Alumno::findOrFail($id);
		$academico = TutDatoAcademico::where('idalumno', $id)->first();
        $generales = TutDatoGeneral::where('idalumno', $id)->first();
        $medico = TutDatoMedico::where('idalumno', $id)->first();
		$eco = TutDatoSocioeconomico::where('idalumno', $id)->first();
		
    	$pdf = \PDF::loadView('pdfs.entrevista', compact('alumno', 'academico', 'generales', 'medico', 'eco'));
		return $pdf->stream();
    }
}
