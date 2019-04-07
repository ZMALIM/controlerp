<?php

namespace App\Events;

use App\Models\Usuario;
use App\Models\Mensaje;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EnviarMensaje implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * User that sent the message 
     *
     * @var \App\Models\Usuario
     */
    public $Usuario;

    /**
     * Detalle del mensaje
     *
     * @var \App\Models\Mensaje
     */
    public $Mensaje;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Usuario $Usuario, Mensaje $Mensaje)
    {
        $this->Usuario = $Usuario;
        $this->Mensaje = $Mensaje;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PresenceChannel('chat');
    }
}
