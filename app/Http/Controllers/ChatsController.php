<?php

namespace App\Http\Controllers;

use App\Events\EnviarMensaje;
use App\Models\Mensaje;
use Illuminate\Http\Request;

class ChatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function fetchMessages()
    {
        return Mensaje::with('usuario')->get();
    }

    public function sendMessage(Request $request)
    {
        $Mensaje = auth()->user()->mensajes()->create([
            'message' => $request->mensaje
        ]);

        broadcast(new EnviarMensaje(auth()->user(), $Mensaje))->toOthers();

        return ['status' => 'Message Sent!'];
    }
}
