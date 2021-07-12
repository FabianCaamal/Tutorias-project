<?php

use Illuminate\Support\Facades\Route;


Route::get('/grupos/form', 'api\angular@form');


Route::get('/', function(){ return view('login'); })->name('login');
Route::post('/validate', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// <============ Alumnos ==================>
Route::prefix('alumno')->middleware(['auth'])->group(function(){
    Route::get('/entrevista', 'alumnoController@index');
    Route::get('/entrevista/create', 'alumnoController@form')->name('entrevista');
    Route::post('/entrevista/store', 'alumnoController@store')->name('entrevista.save');
    Route::get('/documento/subir', 'driveController@create');
    Route::post('/documento/subir/store', 'driveController@subir')->name('drive');    
});

// <============== Tutorias =================>
Route::prefix('tutorias')->middleware(['auth:web'])->group(function(){
    // Route::get('/', 'grupoxalumnoController@index2');
    Route::get('/grupoxalumno', 'grupoxalumnoController@index');
    Route::get('/grupoxalumno/alumno/{id}', 'grupoxalumnoController@show');
    Route::get('/grupoxalumno/alumno/{id}/edit', 'grupoxalumnoController@edit');
    Route::post('guardar/{idAca}/{idGen}/{idMed}/{idEco}/todo', 'grupoxalumnoController@update');

    Route::get('grupoxalumno/{id}/ficha', 'pdfController@ficha');
    Route::get('grupoxalumno/{id}/entrevista', 'pdfController@entrevista');

    Route::get('/borrar/{iddrive}', 'driveController@borrar'); #Borrar documento del alumno

    Route::get('/api/grupo', 'api\angular@grupo');
    Route::get('/api/alumnos', 'api\angular@alumnos');
});


