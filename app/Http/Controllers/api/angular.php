<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grupoxalumno;
use App\Models\Grupo;

class angular extends Controller
{
    public function index(){
        $grupoxalumno = Grupo::all();
        return $grupoxalumno;
    }

    public function store(Request $request){
        $g = new Grupo;
        $g->nomgrupo = $request->nombre;
        $g->idperiodo = 1;
        $g->idcuatrimestre = 1;
        $g->idprograma = 1;
        $g->idmaestro = 1;
        $g->save();

        return 'guardado';
    }

    public function show($id){
        $v = Grupo::findOrFail($id);
        return $v;
    }

    public function update(Request $request, $id)
    {
        return response("Listo para actualizar id: $id", 200);
    }

    public function destroy($id)
    {
        Grupo::findOrFail($id)->delete();
        return response("Grupo con el ID: $id, ha sido borrado", 200);
    }

    
}
