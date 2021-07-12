<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupoxalumno;
use App\Models\Grupo;
use App\Models\Maestro;
use App\Models\TutDocumentoAlumno;
use App\Models\Alumno;
use App\Models\TutDatoAcademico;
use App\Models\TutDatoGeneral;
use App\Models\TutDatoMedico;
use App\Models\TutDatoSocioeconomico;
use Auth;
use Illuminate\Support\Facades\Input;

class grupoxalumnoController extends Controller
{
    public function index2(){
        return view('grupoxalumno.index2');
    }
    public function index(Request $request)
    {
        $idMaestro = Auth()->user()->idusuario;
        $keyword = $request->get('search');
        $grupos = Grupo::where('idmaestro', $idMaestro)->get();

        if(!empty($keyword)){
            $grupoxalumno = Grupoxalumno::select('grupo.nomgrupo','alumno.nomalumno', 'alumno.idalumno', 'alumno.matricula')
                ->join('alumno','grupoxalumno.idalumno', '=', 'alumno.idalumno')
                ->join('grupo','grupoxalumno.idgrupo', '=', 'grupo.idgrupo')
                ->where('grupoxalumno.idgrupo', $keyword)
                ->get();
            
            return view('grupoxalumno.index', compact('grupoxalumno', 'grupos'));
        }
        
        return view('grupoxalumno.index', compact('grupos'));
    }

    public function show($id)
    {
        $alumno = Alumno::findOrFail($id);
        $academico = TutDatoAcademico::where('idalumno', $id)->first();
        $generales = TutDatoGeneral::where('idalumno', $id)->first();
        $medico = TutDatoMedico::where('idalumno', $id)->first();
        $eco = TutDatoSocioeconomico::where('idalumno', $id)->first();

        $document = TutDocumentoAlumno::select('tut_documentoalumno.url', 'tut_documentos.nombre', 'tut_documentoalumno.iddrive')
            ->join('tut_documentos', 'tut_documentoalumno.documento_id', '=', 'tut_documentos.iddocumentos')
            ->where('tut_documentoalumno.alumno_id', $id)
            ->get();

        $array = ['alumno', 'academico', 'generales', 'medico', 'eco', 'document'];
        
        return view('grupoxalumno.info', compact($array));
    }

    public function edit($id){
        $alumno = Alumno::findOrFail($id);
        $academico = TutDatoAcademico::where('idalumno', $id)->first();;
        $generales = TutDatoGeneral::where('idalumno', $id)->first();
        $medico = TutDatoMedico::where('idalumno', $id)->first();
        $eco = TutDatoSocioeconomico::where('idalumno', $id)->first();

        return view('grupoxalumno.edit', compact('alumno','academico', 'generales', 'medico', 'eco'));
    }

    public function update(Request $request, $idAca, $idGen, $idMed, $idEco)
    {
        $academico = TutDatoAcademico::findOrFail($idAca);
        $academico->bachillerato = $request->bachi;
        $academico->especialidad_bachillerato = $request->espe;
        $academico->razon_estudiar_utp = $request->razon;
        $academico->primera_opcion_universidad = $request->opcion;
        $academico->primera_opcion_carrera = $request->carrera;
        $academico->materias_dificultan = $request->materia;
        $academico->informacion_adicional = $request->info;
        $academico->update();

        $general = TutDatoGeneral::findOrFail($idGen);
        $general->celular = $request->a;
        $general->correo = $request->b;
        $general->estado_civil = $request->c;
        $general->f_nacimiento = $request->d;
        $general->direccion = $request->n;
        $general->lugar_nacimiento = $request->e;
        $general->lugar_procedencia = $request->f;
        $general->informacion_adicional = $request->g;
        $general->nombre_contactoemergencia = $request->h;
        $general->telefono_contactoemergencia = $request->i;
        $general->nombre_mama = $request->j;
        $general->telefono_mama = $request->k;
        $general->nombre_papa = $request->l;
        $general->telefono_papa = $request->m;
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/imagenes/alumnos',$name);
            $general->foto = $name;
        }
        $general->update();

        $medico = TutDatoMedico::findOrFail($idMed);
        $medico->enfermedad = $request->enf;
        $medico->medicamentos = $request->medic;
        $medico->alergia = $request->alerg;
        $medico->medicamento_alergia = $request->medalergia;
        $medico->informacion_adicional = $request->infoadd;
        $medico->update();
        
        $eco = TutDatoSocioeconomico::findOrFail($idEco);
        $eco->residencia = $request->resi;
        $eco->vivecon = $request->live;
        $eco->num_habitantes_casa = $request->numcas;
        $eco->dinero_semanal = $request->money;
        $eco->ocupacion_papa = $request->ocppapa;
        $eco->ocupacion_mama = $request->ocpmama;
        $eco->num_hermanos = $request->numher;
        $eco->trabajo = $request->trabajo;
        $eco->ganancia = $request->ganancia;
        $eco->horas_semana = $request->hrs;
        $eco->funciones = $request->func;
        $eco->update();

        $id = $eco->idalumno;
        return redirect("tutorias/grupoxalumno/alumno/$id");
    }

}
