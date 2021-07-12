<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TutDatoGeneral;
use App\Models\TutDatoAcademico;
use App\Models\TutDatoMedico;
use App\Models\TutDatoSocioeconomico;
use Illuminate\Support\Facades\Input;
use Auth;

class alumnoController extends Controller
{
    public function index()
    {
        $idalumno = Auth()->user()->alumno->idalumno;
        $generales = TutDatoGeneral::where('idalumno', $idalumno)->first();
        $academico = TutDatoAcademico::where('idalumno', $idalumno)->first();
        $medico = TutDatoMedico::where('idalumno', $idalumno)->first();
        $eco = TutDatoSocioeconomico::where('idalumno', $idalumno)->first();
        return view('alumno.entrevista', compact('generales', 'academico', 'medico', 'eco'));
    }

    public function form(){
        $idalumno = Auth()->user()->alumno->idalumno;
        $generales = TutDatoGeneral::where('idalumno', $idalumno)->first();

        if($generales){
            return view('alumno.msj');
        } else {
            return view('alumno.form');
        }   
    }
    
    public function store(Request $request){
        
        $idalumno = Auth()->user()->alumno->idalumno;

        $medico = new TutDatoMedico();
        $medico->idalumno = $idalumno;
        $medico->enfermedad = $request->enfermedad;
        $medico->medicamentos = $request->medicamentos;
        $medico->alergia = $request->alergia;
        $medico->medicamento_alergia = $request->medicamento_alergia;
        $medico->informacion_adicional = $request->informacion_adicional;
        $medico->save();

        $socioeconomico = new TutDatoSocioeconomico();
        $socioeconomico->idalumno = $idalumno;
        $socioeconomico->residencia = $request->residencia;
        $socioeconomico->vivecon = $request->vivecon;
        $socioeconomico->num_habitantes_casa = $request->num_habitantes_casa;
        $socioeconomico->dinero_semanal = $request->dinero_semanal;
        $socioeconomico->ocupacion_papa = $request->ocupacion_papa;
        $socioeconomico->ocupacion_mama = $request->ocupacion_mama;
        $socioeconomico->num_hermanos = $request->num_hermanos;
        $socioeconomico->trabajo = $request->trabajo;
        $socioeconomico->ganancia = $request->ganancia;
        $socioeconomico->horas_semana = $request->horas_semana;
        $socioeconomico->funciones = $request->funciones;
        $socioeconomico->save();

        $academico = new TutDatoAcademico();
        $academico->bachillerato = $request->bachillerato;
        $academico->especialidad_bachillerato= $request->especialidad_bachillerato;
        $academico->razon_estudiar_utp = $request->razon_estudiar_utp;
        $academico->primera_opcion_universidad = $request->primera_opcion_universidad;
        $academico->primera_opcion_carrera = $request->primera_opcion_carrera;
        $academico->materias_dificultan= $request->materias_dificultan;
        $academico->informacion_adicional = $request->informacion_adicional;
        $academico->idalumno = $idalumno;
        $academico->save();

        $general = new TutDatoGeneral();
        $general->idalumno = $idalumno;
        $general->celular = $request->celular;
        $general->correo = $request->correo;
        $general->f_nacimiento = $request->f_nacimiento;
        $general->direccion = $request->direccion;
        $general->estado_civil = $request->estado_civil;
        $general->lugar_nacimiento = $request->lugar_nacimiento;
        $general->lugar_procedencia = $request->lugar_procedencia;
        $general->idalumno = $idalumno;
        $general->informacion_adicional = $request->informacion_adicional;
        $general->nombre_contactoemergencia = $request->nombre_contactoemergencia;
        $general->telefono_contactoemergencia = $request->telefono_contactoemergencia;
        $general->nombre_mama = $request->nombre_mama;
        $general->nombre_papa = $request->nombre_papa;
        $general->telefono_mama = $request->telefono_mama;
        $general->telefono_papa = $request->telefono_papa;
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/imagenes/alumnos',$file->getClientOriginalName());
            $general->foto = $name;
        } else {
            $general->foto = 'no hay foto';
        }
        $general->save();

      return back()->with('Notificacion', 'Datos registrados con éxito');
    }

}
