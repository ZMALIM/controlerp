<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'show']);
    }

    public function show()
    {
        return view('auth.login');
    }

    public function validarLogin(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string',
            'password' => 'required|string'
        ]);
    }

    public function login(Request $request)
    {
        $this->validarLogin($request);

        $Datos = $request->only('usuario', 'password');
        $Credenciales = array_merge($Datos, ['estado' => 'Activo']);

        if(Auth::guard()->attempt($Credenciales, $request->filled('recordar'))){
            return redirect()->route('dashboard');
        }else {
            return back()
                        ->withErrors(['usuario' => trans('auth.failed')])
                        ->withInput(request(['usuario']));
        }
    }

    public function logout(){
        Auth::guard()->logout();
        return redirect('/');
    }
}
