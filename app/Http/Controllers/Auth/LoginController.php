<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request){

        $email = $request->email;
        $pass = md5($request->password);

        $user = User::where('email', $email)->where('password', $pass)->first();

        if ($user) {
            auth()->loginUsingId($user->idusuario);
            // $this->guard()->login($user);
            if($user->idrol == 2){
                return redirect('tutorias/grupoxalumno');
            } else if($user->idrol == 10){
                return redirect('alumno/entrevista');
            } else {
                return back()->withErrors(['error' => 'Usuario no existente']);
            }
            
        } else {
            return back()->withErrors(['error' => 'Correo o contraseña incorrecto'])
                ->withInput(request(['email']));
        }
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
