<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hypweb\Flysystem\GoogleDrive\GoogleDriveAdapter;
use Illuminate\Support\Facades\File;
use App\Models\TutDocumentoAlumno;
use App\Models\TutDocumento;
use Auth;

class driveController extends Controller
{
    public function create(){
        $documentos = TutDocumento::all();
        return view('alumno.doc-drive', compact('documentos'));
    }

    public function drive(){
        $client = new \Google_Client;
        $client->setClientId(env("GOOGLE_CLIENT_ID"));
        $client->setClientSecret(env("GOOGLE_CLIENT_SECRET"));
        $client->refreshToken(env("GOOGLE_REFRESH_TOKEN"));

        $service = new \Google_Service_Drive($client);
        return $service;
    }
     
    public function subir(Request $request)
    {
        if($request->hasFile('documento')){
            // datos del documento
            $file = $request->file('documento');
            $name = $file->getClientOriginalName();
            $mime_type = $file->getMimeType();

            // guardando para capturar el tipo de archivo
            $request->file('documento')->move('docs/', $name);
            $contents = File::get(public_path('docs\\'.$name));

            // creando nuevo archivo para drive
            $fileData =  new \Google_Service_Drive_DriveFile();
            $fileData->setName($name); //asigna el nombre

            $guardar = new TutDocumentoAlumno;
            $guardar->alumno_id = $request->id_alumno;
            $guardar->documento_id = $request->id_documento;
                   
            try {
                $crear = $this->drive()->files->create($fileData, [
                    'data' => $contents,
                    'mimeType' => $mime_type,
                    'uploadType' => 'multipart'
                ]);
                $file_id = $crear->getId(); // obtiene el id

                $link = $this->drive()->files->get("$file_id",array("fields"=>"webViewLink")); // obtiene el link de vista
                $url = $link->getWebViewLink(); // obtiene la url

                File::delete(public_path('docs\\'.$name)); // elimina el doc creado anterioirmente                

                $guardar->url = $url;
                $guardar->iddrive = $file_id;
                $guardar->save();

                return back()->with('Mensaje', 'Se subio satisfactoriamente');
                
            } catch (Exception $e) {
                return $e;
            }  
        } else {
            return back()->with('errors', 'Debes subir un archivo');
        }
    }

    public function borrar($id){
        try {
            $this->drive()->files->delete($id);
            TutDocumentoAlumno::where('iddrive', $id)->delete();

            return back();
        } catch (Exception $e) {
            return "hay un error: ".$e->getMessage();
        }
    }
    
}
